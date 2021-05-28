<?php

namespace App\Http\Controllers;

use App\Http\Requests\Google2FARequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Response;
use PragmaRX\Google2FAQRCode\Google2FA;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        $title = __('Список пользователей');

        return view('dashboard.user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        session()->flash('status', 'success');
        session()->flash('message', __('New user has been successfully created!'));

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->has('password')) {
            $request->validate([
                'password' => 'required|string|confirmed|min:8',
            ]);
        }

        $user = User::find($id);
        $user->fill($request->all());
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();
        $response = [
            'status' => 'success',
            'message' => __('User data has been successfully updated!')
        ];

        if ($request->ajax()) {
            return response()->json($response);
        }

        return redirect()->route('users.index')->with($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Генерирует секретный код и QR code GOOGLE 2FA
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException
     * @throws \PragmaRX\Google2FA\Exceptions\InvalidCharactersException
     * @throws \PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException
     */
    public function google2fa()
    {
        $google2fa = new Google2FA();
        $user = auth()->user();
        if (!$user->google2fa_secret) {
            $user->google2fa_secret = $google2fa->generateSecretKey();
            $user->save();
        }

        $qrCodeUrl = $google2fa->getQRCodeInline(
            env('APP_NAME'),
            $user->email,
            $user->google2fa_secret
        );

        return response()->json([
            'secret' => $user->google2fa_secret,
            'qrCodeUrl' => $qrCodeUrl
        ]);
    }

    /**
     * Проверяет код выданный в приложении Google Authenticator
     *
     * @param Google2FARequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \PragmaRX\Google2FA\Exceptions\IncompatibleWithGoogleAuthenticatorException
     * @throws \PragmaRX\Google2FA\Exceptions\InvalidCharactersException
     * @throws \PragmaRX\Google2FA\Exceptions\SecretKeyTooShortException
     */
    public function google2fa_validate(Google2FARequest $request)
    {
        $google2fa = new Google2FA();
        $user = auth()->user();
        $status = $google2fa->verifyKey($user->google2fa_secret, $request->input('secret'));

        if ($status && $request->input('google2fa_status')) {
            $user->google2fa_status = (boolean)$request->input('google2fa_status');
            $user->save();
        }

        if ($status) {
            session()->put('google2fa_is_auth', 1);
            session()->save();
            $message = __("You have passed 2-factor authentication!");
        } else {
            $message = __("2FA failed!");
            session()->put('google2fa_is_auth', 0);
            session()->save();
        }

        if ($request->ajax()) {
            return response()->json(compact('status', 'message'));
        }

        return redirect()->route('terminal.index');
    }

    /**
     * Отображает форму ввода кода с приложения Google  Authenticator
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function google2fa_page()
    {
        return view('auth.google2fa');
    }

    /**
     * Получает активность текущего пользователя
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getActivityLog()
    {
        $activity = UserActivity::where('user_id', auth()->id())
            ->latest()
            ->limit(30)
            ->get();

        return response()->json($activity);
    }
}

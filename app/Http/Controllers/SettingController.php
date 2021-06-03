<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $title = __('Настройки сайта') . ' - ' . __(config('settings.' . $request->input('group', 'base') . '.name'));

        $group = $request->input('group', 'base');
        $settings = Setting::where('group_id', $group)
            ->get()->groupBy('key')->map(function ($item) {
                return $item[0]->value;
            });

        return view('dashboard.settings.index', compact('title', 'settings'));
    }

    public function update(Request $request)
    {
        $group = $request->input('group', 'basic');
        foreach (config('settings.' . $group . '.fields') as $key => $value) {
            Setting::updateOrCreate(
                [
                    'key' => $key,
                ],
                [
                    'key' => $key,
                    'value' => $request->input($key, ''),
                    'group_id' => $group
                ]
            );
        }


        return redirect()->back();
    }
}

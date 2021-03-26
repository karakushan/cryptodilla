<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response, Storage;

class FilepondController extends Controller
{

    /**
     * Загружает файл в указаную папку
     *
     * @param Request $request
     * @return mixed
     */
    public function upload(Request $request)
    {
        $fileName = $request->header('fileName');
        $input = $request->file($fileName);

        if ($input === null) {
            return Response::make($fileName . ' файл не выбран!', 422, [
                'Content-Type' => 'text/plain',
            ]);
        }

        if (!($newFile = $request->file($fileName)->store('avatars', ['disk' => 'public']))) {
            return Response::make('Не удалось сохранить файл!', 500, [
                'Content-Type' => 'text/plain',
            ]);
        }

        return Response::make($newFile, 200, [
            'Content-Type' => 'text/plain',
        ]);
    }

    public function delete()
    {

    }

    public function load(Request $request)
    {
        return response()
            ->download(Storage::disk('public')->path($request->input('load')));
    }
}

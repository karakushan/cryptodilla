<?php

namespace App\Http\Controllers;

use App\Models\BotSetting;
use Illuminate\Http\Request;

class BotController extends Controller
{
    /**
     * Сохраняет настройки бота
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveSettings(Request $request)
    {
        $bot = BotSetting::updateOrCreate([
            'user_id' => auth()->id(),
            'bot' => $request->input('bot')
        ],
            [
                'user_id' => auth()->id(),
                'bot' => $request->input('bot'),
                'settings' => $request->all(),
                'description' => $request->input('description'),
                'name' => $request->input('name')
            ]
        );

        return response()->json(['message' => __('Настройки бота успешно обновленны!')]);
    }

    /**
     * Возвращает настройки бота для текущего пользователя
     *
     * @param $bot
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSettings($bot)
    {
        $settings = BotSetting::where([
            ['bot', $bot],
            ['user_id', auth()->id()]
        ])->first();

        return response()->json($settings);
    }
}

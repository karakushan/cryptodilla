<?php


namespace App\Helpers;


class Translate
{
    /**
     * Возвращает файл перевода в формате json
     *
     * @return false|string
     */
    public static function getCurrentLangTrans()
    {
        return file_get_contents(base_path('resources/lang/' . app()->getLocale() . '.json'));
    }
}

<?php

namespace App\Listeners;

use App\Models\UserActivity;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Stevebauman\Location\Facades\Location;

class LoginSuccessful
{

    /**
     * Create the event listener.
     *
     * @param \Request $request
     */
    public function __construct()
    {

    }


    /**
     * Handle the event.
     *
     * TODO: сделать чтобы активность удалялась на протяжении периода времени
     *
     * @param Login $event
     * @param \Request $request
     * @return void
     */
    public function handle(Login $event)
    {

        $ip = request()->ip();
        $activity = new UserActivity();
        $activity->ip = $ip;
        $activity->name = 'Login';
        $activity->user_id = auth()->id();

        if ($position = Location::get($ip)) {
            $activity->location = [
                'country_code' => $position->countryCode,
                'country' => $position->countryName,
                'city' => $position->cityName,
                'longitude' => $position->longitude,
                'latitude' => $position->latitude,
            ];
        }

        $activity->save();
    }
}

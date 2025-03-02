<?php

namespace App\Listeners;
use App\Models\UserSession;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;

use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

        public function handle(Login $event)
    {
        $user = $event->user;
        $ip = request()->ip(); // Get user's IP address

        $userIps = UserSession::where('user_id', $user->id)->pluck('ip_address')->toArray();

        if (in_array($ip, $userIps)) {
            // If IP exists, update last login timestamp
            UserSession::where('user_id', $user->id)
                ->where('ip_address', $ip)
                ->update(['updated_at' => now()]);

        } elseif (count($userIps) < 3) {

            // If less than 3 IPs, allow login and store new IP
            $agent = new Agent();
            $device = $agent->isMobile() ? 'Mobile' : 'Computer';

            UserSession::create([
                'user_id' => $user->id,
                'ip_address' => $ip,
                'device' => $device,
            ]);
        } else {
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            session()->flash('max_devices_error', 'You have reached the maximum allowed devices. Remove an old device to log in.');

            return redirect()->route('unauthorize');


        }
    }

}


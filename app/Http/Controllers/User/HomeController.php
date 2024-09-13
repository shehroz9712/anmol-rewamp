<?php

namespace App\Http\Controllers\User;

use App\Models\Event;
use App\Models\EventVenue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('user_id', Auth::id())->get();
        $upcomingEvent = Event::where([['date', '>=', now()], ['user_id', Auth::id()]])
            ->orderBy('date', 'asc')
            ->first();
        $venue = null;
        if ($upcomingEvent != null) {

            $venue = EventVenue::with(['adminVenue',])->where('event_id', $upcomingEvent->id)->first();
        }

        return view('user.index', compact('events', 'upcomingEvent', 'venue'));
    }
}

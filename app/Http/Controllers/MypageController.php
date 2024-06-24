<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use App\Services\MypageService;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        $events = $user->events;

        $fromTodayEvents = MypageService::reservedEvent($events, 'fromToday');
        $pastEvents = MypageService::reservedEvent($events, 'past');

        return view('mypage/index', compact('fromTodayEvents', 'pastEvents'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $reservation = Reservation::where('user_id', Auth::id())
            ->where('event_id', $id)
            ->latest()
            ->first();

        return view('mypage/show', compact('event', 'reservation'));
    }

    public function cancel($id)
    {
        $reservation = Reservation::where('user_id', Auth::id())
            ->where('event_id', $id)
            ->latest()
            ->first();

        $reservation->canceled_date = CarbonImmutable::now()->format('Y-m-d H:i:s');
        $reservation->save();

        session()->flash('status', 'キャンセルOK!!');
        return to_route('dashboard');
    }
}

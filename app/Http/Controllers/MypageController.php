<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\MypageService;
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
}

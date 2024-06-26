<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Services\EventService;

class EventController extends Controller
{
    public function index()
    {
        $today = \Carbon\Carbon::today();

        $reservedPeople = DB::table('reservations')
            ->select('event_id', DB::raw('sum(number_of_people) as number_of_people'))
            ->whereNull('canceled_date')
            ->groupBy('event_id');

        $events = DB::table('events')
            ->leftJoinSub($reservedPeople, 'reservedPeople',
                function($join) {
                    $join->on('events.id', '=', 'reservedPeople.event_id');
                })
            ->whereDate('start_date', '>=', $today)
            ->orderBy('start_date', 'asc')
            ->paginate(10);

        return view('manager.events.index', compact('events'));
    }

    public function create()
    {
        return view('manager.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $check = EventService::chcekEventDuplication(
            $request['event_date'],
            $request['start_time'],
            $request['end_time']
        );

        if($check) {
            session()->flash('status', 'この時間帯は既に他の予約が存在します。');
            return view('manager.events.index');
        }

        $startDate = EventService::joinDateAndTime($request['event_date'], $request['start_time']);
        $endDate = EventService::joinDateAndTime($request['event_date'], $request['end_time']);

        Event::create([
            'name' => $request['event_name'],
            'information' => $request['information'],
            'start_date' => $startDate,
            'end_date' => $endDate,
            'max_people' => $request['max_people'],
            'is_visible' => $request['is_visible'],
        ]);

        session()->flash('status', '登録できたお');
        return to_route('events.index');
    }

    public function show(Event $event)
    {
        $event = Event::findOrFail($event->id);
        $users = $event->users;

        $reservations =[];
        foreach($users as $user) {
            $reservedInfo = [
                'name' => $user->name,
                'number_of_people' => $user->pivot->number_of_people,
                'canceled_date' => $user->pivot->canceled_date,
            ];
            array_push($reservations, $reservedInfo);
        }

        $eventDate = $event->eventDate;
        $startTime = $event->startTime;
        $endTime = $event->endTime;

        return view('manager.events.show',
            compact('event', 'eventDate', 'startTime', 'endTime', 'users', 'reservations'));
    }

    public function edit(Event $event)
    {
        $event = Event::findOrFail($event->id);

        $today = \Carbon\Carbon::today()->format('Y年m月d日');
        if($event->eventDate < $today) {
            return abort(404);
        }

        $eventDate = $event->editEventDate;
        $startTime = $event->startTime;
        $endTime = $event->endTime;

        return view('manager.events.edit',
            compact('event', 'eventDate', 'startTime', 'endTime'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $count = EventService::countEventDuplication(
            $request['event_date'],
            $request['start_time'],
            $request['end_time']
        );

        if($count > 1) {
            session()->flash('status', 'この時間帯は既に他の予約が存在します。');
            return view('manager.events.edit', compact('event'));
        }

        $startDate = EventService::joinDateAndTime($request['event_date'], $request['start_time']);
        $endDate = EventService::joinDateAndTime($request['event_date'], $request['end_time']);

        $event->name = $request['event_name'];
        $event->information = $request['information'];
        $event->start_date = $startDate;
        $event->end_date = $endDate;
        $event->max_people = $request['max_people'];
        $event->is_visible = $request['is_visible'];
        $event->save();

        session()->flash('status', '編集できたお');
        return to_route('events.index');
    }

    public function past()
    {
        $today = Carbon::today();

        $reservedPeople = DB::table('reservations')
            ->select('event_id', DB::raw('sum(number_of_people) as number_of_people'))
            ->whereNull('canceled_date')
            ->groupBy('event_id');

        $events = DB::table('events')
            ->leftJoinSub($reservedPeople, 'reservedPeople',
                function ($join) {
                    $join->on('events.id', '=', 'reservedPeople.event_id');
            })
            ->whereDate('start_date', '<', $today)
            ->orderBy('start_date', 'asc')
            ->paginate(10);

        return view('manager.events.past', compact('events'));
    }

    public function destroy(Event $event)
    {
        //
    }
}

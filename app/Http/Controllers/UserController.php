<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::findOrFail($user)->first();
        return view('user.show', compact('user'));
    }

    public function evernoteIndex(User $user)
    {
        $user = User::findOrFail($user)->first();
        return view('user.evernote.index', compact('user'));;
    }
    public function calendarIndex(User $user)
    {
        $user = User::findOrFail($user)->first();
        $collection = collect($user->calendar);
        $baka = $collection->map(function ($item) {
            return [
                'id' => $item->id,
                'start' => $item->started_on,
                'end' => $item->ended_on,
                'title' => $item->task,
                'backgroundColor' => $item->color,
            ];
        });
        $calendar = $baka->all();
        return view('user.calendar.index', compact('user', 'calendar'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::findOrFail($user)->first();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $user->
        // dd($request->has('avatar'));
        // dd($request->avatar);
        // if ($request->has('avatar')) {
        //     $avatarName = $user->id . '_avatar' . time() . '.' .
        //         $request->avatar->getClientOriginalExtension();
        //     $request->avatar->storeAs('avatars', $avatarName);
        //     $user->avatar = 'avatars/' . $avatarName;
        // }

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('avatar')) {
            $user->avatar = $request->avatar;
        }

        if ($request->has('bio')) {
            $user->bio = $request->bio;
        }
        if ($request->has('worktimes')) {
            $user->worktimes = $request->worktimes;
        }
        if ($request->has('position')) {
            $user->position = $request->position;
        }

        if ($request->has('phone')) {
            $user->phone = $request->phone;
        }

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        $user->save();
        return \Redirect::route('user.show', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

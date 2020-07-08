<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
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
    public function isemailexist($email)
    {
        if ($email !== '') {

            $profiles = Profiles::where('email', $email)->get()->count();
            return response()->json(['data' => $profiles]);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $profiles = Profiles::create($request->all());
            if ($request->expectsJson()) {
                // return $profiles;
                $user = new User;

                $user->fk_profile_id = $profiles->profile_id;
                $user->name = $profiles->firstname . ' ' . $profiles->lastname;
                $user->email = $profiles->email;
                $user->password = Hash::make($request->password);
                $user->remember_token = Str::random(10);
                $user->save();

                return response()->json([
                    'message' => 'Your registration has been saved.',
                    'IsSuccess' => 1,
                    'data' => [$profiles, $user],
                ]);
            }
            return response()->json(['message' => 'There was an error on data.']);
        } catch (\Throwable $th) {
            return response()->json(['data' => $th->getMessage(), 'IsSuccess' => 0]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profiles $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiles $profiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profiles $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiles $profiles)
    {
        //
    }
}

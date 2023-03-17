<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('users_manage');

        $users = User::when(
            $request->input('search'),
            fn ($query, $search) =>
            $query
                ->where('email', 'like', "%{$search}%")
                ->orWhere('lastname', 'like', "%{$search}%")
                ->orWhere('firstname', 'like', "%{$search}%")
        )
            ->paginate(25)
            ->withQueryString();

        // if (!$request->search || !$users->first()) {
        //     $users = User::paginate(25);
        //     $pagination = true;
        // }

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('users_manage');

        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $this->authorize('users_manage');

        $mailAlreadyUsed = User::where('email', $request->email)->first();

        if ($mailAlreadyUsed) return back()->with('status', 'Cette adresse e-mail est déjà utilisée');

        User::create([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,
        ]);

        return back()->with('status', "L'utilisateur a été créé");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('users_manage');

        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $this->authorize('users_manage');

        if ($request->email !== $user->email) {
            $mailAlreadyUsed = User::where('email', $request->email)->first();

            if ($mailAlreadyUsed) return back()->with('status', 'Cette adresse e-mail est déjà utilisée');
        }

        $user->update([
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password || $user->password),
            'role_id' => $request->role,
        ]);

        return back()->with('status', "L'utilisateur a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('users_manage');

        $user->delete();

        return back()->with('status', "L'utilisateur a été supprimé");
    }
}

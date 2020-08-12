<?php

namespace App\Http\Controllers;



use App\User;

use Illuminate\Validation\Rule;


class ProfileController extends Controller
{


    public function show(User $user)
    {
        return view('profiles.show', ['user' => $user, 'tweets' => $user->tweets()->paginate(8)]);
    }

    public function edit(User $user)
    {

        if (auth()->user()->isNot($user)) {
            abort(404);
        }

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $attributes = request()->validate([
            'name' => ['string', 'required', 'max:255'],
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'background' => ['file'],
            'email'  => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'description' => ['string', 'required', 'max:255', 'alpha_dash'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        if (request('background')) {
            $attributes['background'] = request('background')->store('backgrounds');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}

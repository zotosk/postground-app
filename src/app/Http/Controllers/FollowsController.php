<?php

namespace App\Http\Controllers;

use App\User;


class FollowsController extends Controller
{
    //

    public function store(User $user)
    {

        //follow the given user
        auth()
            ->user()
            ->toggleFollow($user);

        return back();
    }
}

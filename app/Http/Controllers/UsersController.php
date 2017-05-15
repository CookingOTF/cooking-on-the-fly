<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('users.dashboard');
    }

    public function account()
    {
        return view('users.account');
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, User::getUpdateRules());

        foreach ($request->all() as $attribute => $value) {
            $user[$attribute] = $value;
        }

        $user->save();

        return redirect('account');
    }
}

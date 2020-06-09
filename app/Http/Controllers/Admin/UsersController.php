<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->get();

        $params = [
            'users' => $users
        ];
        return view('admin.users.index', $params);
    }
    public function acceptUsers($id)
    {
        \DB::table('users')->where('id', $id)->update(['isAdmin' => User::ADMIN_ROLE]);
        return back();
    }
    public function downUsers($id)
    {
        \DB::table('users')->where('id', $id)->update(['isAdmin' => User::USER_ROLE]);
        return back();
    }
    public function deleteUsers(Request $request)
    {
        if ($request->ajax()) {
            $id = (int)$request->input('id');
            $objUser = new User();

            $objUser->where('id', $id)->delete();

            echo "success";
        }
    }


}

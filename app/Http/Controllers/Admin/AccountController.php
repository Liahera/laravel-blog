<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
       echo "hello admin"; //return view('admin.index');
    }
}

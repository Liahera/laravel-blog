<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Entities\Abouts;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutsRequest;

class AccountController extends Controller
{
    public function index()
    {
        return view("admin.index");
        //echo 'hello admin';
    }
    public function about(){


        return view("admin.about");
    }
    public function submit(AboutsRequest $reg)
    {


        $abouts = new Abouts();
        $abouts->full_text = $reg->input('full_text');


        $abouts->save();

        return redirect()->route('abouts')->with('success', 'Описание было добавлено');
    }
}

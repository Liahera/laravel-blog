<?php


namespace App\Http\Controllers;


use App\Entities\Abouts;

class AboutController extends Controller
{
public function about( ){
    $objAbouts = (new Abouts())->get();
    $abouts = $objAbouts;
   $params= ['abouts' => $abouts];

    return view('about',$params);
}
}

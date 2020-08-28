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
        $objAbouts = (new Abouts())->get();
        $abouts = $objAbouts;
        $params= ['abouts' => $abouts];

        return view('admin.about',$params);
    }

    public function submit(AboutsRequest $reg)
    {
        $abouts = new Abouts();
        $abouts->full_text = $reg->input('full_text');

        $abouts->save();

        return redirect()->route('abouts')->with('success', 'Описание было добавлено');
    }

    public function editAbouts(int $id)
    {
        $objAbouts = Abouts::find($id);
        if (!$objAbouts) {
            return abort(404);
        }

        return view('admin.editAbout', [
            'object' => $objAbouts,
        ]);
    }

    public function editRequestAbouts(int $id, AboutsRequest $request)
    {
        $objAbouts = Abouts::find($id);
        if (!$objAbouts) {
            return abort(404);
        }

        $objAbouts->full_text = $request->input('full_text');

        $objAbouts->save();

        return redirect()->route('abouts');
    }

    public function deleteAbouts(Request $request)
    {
        if ($request->ajax()) {
            $id = (int)$request->input('id');
            $objAbouts = new Abouts();

            $objAbouts->where('id', $id)->delete();

            echo "success";
        }
    }
}

<?php


namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
public function index(){
    $messages= (new Contacts())->get();
    $params = [
        'messages' => $messages
    ];
        return view('admin.messages.index',$params);
    }
    public function deleteMessages(Request $request)
    {
        if ($request->ajax()) {
            $id = (int)$request->input('id');
            $objContacts = new Contacts();

            $objContacts->where('id', $id)->delete();

            echo "success";
        }
    }
}

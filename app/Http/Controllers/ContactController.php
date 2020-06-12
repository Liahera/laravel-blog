<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contacts;

class ContactController extends Controller
{
    public function showcontact()
    {
        return view('contact');
    }

    public function submit(ContactRequest $reg)
    {


        $contact = new Contacts();
        $contact->name = $reg->input('name');
        $contact->email = $reg->input('email');
        $contact->subject = $reg->input('subject');
        $contact->message = $reg->input('message');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было добавлено');
    }
}

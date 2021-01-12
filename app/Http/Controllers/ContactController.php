<?php

namespace App\Http\Controllers;


use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{

    /**
     * @param ContactRequest $req
     */
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->phone = $req->input('phone');
        $contact->message = $req->input('subject');

        $contact->save();

        return redirect()->route('home')->with('success','Сообщение было обработанно');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allData(){
        $contact = new Contact;
        return view('messages', ['data' => $contact->all()]);
    }

}

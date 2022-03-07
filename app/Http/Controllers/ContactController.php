<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

     public function index()
    {
        return view('contact',[
            "title" => "Contact"
        ]);
    }

     public function store(Request $request)
    {
        $contact = Contact::create($request->all());
        $contact->save();

        return redirect('contact');
    }

    public function destroy($id)
    {
        $pesan = Contact::where('id',$id)->first();
        Contact::where('id',$id)->delete();

        return redirect()->back();

    }
}

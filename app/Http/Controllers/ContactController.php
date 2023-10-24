<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $messages = Contact::latest()->paginate(20);
        return view('admin.contact.index', compact('messages'));
    }


    public function show($id)
    {
        $message = Contact::find($id);

        if($message){
            return view('admin.contact.show', compact('message'));
        }else {

            Session::flash('error', 'Contact message not found.');
            return redirect()->route('dashboard');
        }
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);

        if($contact){
            $contact->delete();

            Session::flash('success', 'Message deleted successfully');
        }

        return redirect()->back();
    }
}

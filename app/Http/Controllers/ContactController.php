<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mails()
    {
        $contacts=Contact::get();
        return view('admin.messages',compact('contacts'));
    }
    public function storee(Request $request)
    { 
            $data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'message'=>'required|string',
        ]);
        Mail::to( 'admin@email.com')->send( new ContactMail($request));
        
        Contact::create($data);
        return back()->with('message','Email sent successfully!');
    }
    public function showmessage(string $id)
    {
       $contacts = Contact::findOrFail($id);
       $contacts->update(['num_unread_msg' => 1]);
        return view('admin.ShowMessage', compact('contacts'));
    }
    public function deletemessage(string $id)
    {
        Contact::where('id',$id)->delete();
        return redirect('/mails');
    }
    public function readmsg()
    {
       $read=Contact::get();
    //    $read->update(['num_unread_msg' => 1]);
       return view('admin.msg',compact('read'));
    }
}

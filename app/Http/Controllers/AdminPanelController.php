<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    //

    public function index(){
        return view('adminpanel.app');
    }

    public function contact(){
        return view('adminpanel.contact.contact');
    }

    public function createContact(Request $request){
        $contact = new Contact();
        $contact -> phone_num = $request -> phone_num;
        $contact -> address = $request -> address;
        $contact -> email = $request -> email;

        $contact -> save();

        return redirect() -> route('contact');
    }


}

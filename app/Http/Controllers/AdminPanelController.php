<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    //

    public function index(){
        return view('adminpanel.app');
    }

    //Contact

    public function contact(){
        return view('adminpanel.contact.contact');
    }

    public function listContact(){
        $contact = Contact::where('is_deleted',0) -> get();
        return view('adminpanel.contact.contact',compact('contact'));
    }

    public function createContact(Request $request){
        $contact = new Contact();
        $contact -> phone_num = $request -> phone_num;
        $contact -> address = $request -> address;
        $contact -> email = $request -> email;

        $contact -> save();

        return redirect() -> route('listContact');
    }

    //About

    public function about(){
        return view('adminpanel.about.about');
    }

    public function listAbout(){
        $about = About::where('is_deleted',0) -> get();
        return view('adminpanel.about.about',compact('about'));
    }

    public function createAbout(Request$request){
        $about = new About();
        $about -> title = $request -> title;
        $about -> content = $request -> content;

        $about -> save();

        return redirect() -> route('listAbout');

    }

    //Message

    public function message(){
        return view('adminpanel.message.message');
    }

    public function listMessage(){
        $message = Message::all();

        return view('adminpanel.message.message', compact('message'));
    }



}

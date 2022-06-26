<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\Message;
use App\Models\Price;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view('frontpage.app');
    }

    public function homepage(){
        return view('frontpage.homepage');
    }

    public function frontApp(){
        return view('frontpage.frontApp');
    }

    public function contact(){
        $contact = Contact::where('is_deleted', 0) -> get();
        return view('frontpage.contact.contact', compact('contact'));
    }

    public function createInformation(Request $request){
        $request -> validate([
           'name_surname' => 'required',
           'phone_num' => 'required'
        ]);

        Information::create([
           'name_surname' => $request -> name_surname,
           'phone_num' => $request -> phone_num
        ]);

        return redirect() -> route('contact');
    }

    public function gallery(){
        $gallery = Gallery::where('is_deleted', 0) -> get();
        return view('frontpage.gallery.gallery', compact('gallery'));
    }

    public function about(){
        $about = About::where('is_deleted', 0) -> get();
        return view('frontpage.about.about', compact('about'));
    }

    public function message(){
        return view('frontpage.message.message');
    }

    public function createMessage(Request $request){
        $request -> validate([
            'name' => 'required',
            'sur_name' => 'required',
            'comment' => 'required',
            'e_mail' => 'required'
        ]);

        Message::create([
           'name' => $request -> name,
            'sur_name' => $request -> sur_name,
            'comment' => $request -> comment,
            'e_mail' => $request -> e_mail
        ]);

        return response() -> view('frontpage.message.message');
    }

    public function messageList(){
        $message = Message::where('is_deleted', 0)->get();

        return view('frontpage.message.message', compact('message'));

    }

    public function price(){
        $price = Price::where('is_deleted', 0) -> get();

        return view('frontpage.price.price', compact('price'));
    }
}

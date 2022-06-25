<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Price;
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

    //Price

    public function price(){
        return view('adminpanel.price.price');
    }

    public function listPrice(){
        $price = Price::where('is_deleted', 0) -> get();

        return view('adminpanel.price.price',compact('price'));
    }

    public function createPrice(Request $request){
        $request -> validate([
           'shaved_name' => 'required',
           'shaved_price' => 'required'
        ]);

        Price::create([
            'shaved_name' => $request -> shaved_name,
            'shaved_price' => $request -> shaved_price
        ]);

        return redirect() -> route('listPrice');
    }

    public function deletePrice($id){
        $price = Price::find($id);
        $price -> update([
           'is_deleted' => 1,
        ]);

        return redirect() -> route('listPrice');
    }

    //Gallery

    public function gallery(){
        return view('adminpanel.gallery.gallery');

    }

    public function createGallery(Request $request){
        $gallery = new Gallery();

        $gallery -> gallery_title = $request -> gallery_title;
        $gallery -> gallery_comment = $request -> gallery_comment;

        if ($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('galeri/', $name);
            $gallery -> path = $name;
        }

        $gallery -> save();

        return redirect() -> route('panel_gallery');
    }





}

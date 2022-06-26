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

    public function updateShowContact($id){
        $contact = Contact::find($id);
        return view('adminpanel.contact.contact-update', compact('contact'));
    }

    public function updateContact(Request $request, $id){
        $contact = Contact::find($id);
        $contact -> update([
            'phone_num' => $request -> phone_num,
            'email' => $request -> email,
            'address' => $request -> address
        ]);

        return redirect() -> route('listContact');
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

        return redirect() -> route('listGallery');
    }

    public function listGallery(){
        $gallery = Gallery::where('is_deleted', 0) -> get();

        return view('adminpanel.gallery.gallery-list', compact('gallery'));
    }

    public function deleteGallery($id){
        $gallery = Gallery::find($id);
        $gallery -> update([
           'is_deleted' => 1
        ]);

        return redirect() -> route('listGallery');

    }

    public function updateShowGallery($id){
        $gallery = Gallery::find($id);
        return view('adminpanel.gallery.gallery-update', compact('gallery'));
    }

    public function updateGallery(Request $request, $id){
        $gallery = Gallery::find($id);
        $gallery -> update([
           'gallery_title' => $request -> gallery_title,
            'gallery_comment' => $request -> gallery_comment
        ]);

        if ($file = $request -> file('path')){
            $name = $file -> getClientOriginalName();
            $file -> move('galeri/',$name);
            $gallery -> path = $name;
        }

        $gallery -> save();

        return redirect() -> route('listGallery');
    }





}

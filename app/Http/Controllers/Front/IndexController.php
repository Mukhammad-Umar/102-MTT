<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ {
    News,
    Gallery,
    Slider,
    Contact,
    Employee
};

class IndexController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         // $this->middleware('auth');
     }
 
     /**
      * Show the main page.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function index()
     {
         $slides = Slider::get();
         $news = News::orderBy('id', 'desc')->take(5)->get();

         return view('front.index', compact('slides', 'news'));
     }

     /**
      * Show Single News.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function news($id)
     {
         $news = News::where('id', $id)->get();

         return view('front.single-news', compact('news'));
     }

     /**
      * Getting images in Gallery page.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function gallery()
     {
         $photos = Gallery::get();

         return view('front.gallery', compact('photos'));
     }

     /**
      * Admission page.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function admission()
     {
        return view('front.admission');
     }

     /**
      * Contact page.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function contact()
     {
         return view('front.contact');
     }
     
     /**
      * Adding persons to Contact.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function tocontact(ContactRequest $request)
     {
        Contact::create($request->all());

        return redirect(route('contact'))->withSuccess(['So`rovingiz yuborildi!']); 
     }
     
     /**
      * About us page.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
      public function about()
      {
        $employees = Employee::get();

        return view('front.about', compact('employees'));
      }
    
}

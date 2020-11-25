<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('both', ['except' => ['index']]);
     }
     
    /**
     * Back Slider page.
     *
     * @return void
     */
     public function index(Request $request)
     {
        $sliders = Slider::get();

        // Ajax response
         if ($request->ajax()) {
            return response()->json([
               'table' => view("back.components.slider-component", compact('sliders'))->render(),
            ]);
         };

        return view('back.table', compact('sliders'));
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function create()
     {
      return view('back.store-update.create');
     }

     public function show($id)
     {
      return abort(404);
     }
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function upload(Request $request)
     {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/img/slayder/', $filename); 
        return view('back.store-update.create', ['image' => $filename]);
     }

    /**
     * Create new slider instance.
     *
     * @return void
     */
     public function store(Request $request)
     {
         $slider = new Slider();
         $slider->create($request->all());

        return redirect(route('sliders.create'))->with('message-ok', 'Rasm slayderga qo`shildi!');
     }
     
    /**
   * Show the form for editing the specified resource.
   *
   * @param  ...
   * @return \Illuminate\Http\Response
    */
    public function edit(Slider $slider)
    {
        return view('back.store-update.edit', compact('slider'));
    }

    /** *  Update the specified resource in storage. */
    public function update(Request $request, Slider $slider)
    {
      $slider->update($request->all());

      return redirect(route('sliders.index'))->with('message-updated', 'Rasm omadli tarzda slayderga qo`shildi! ');
    }
     
    /**   Delete a slider. */
    public function destroy(Request $request, Slider $slider)
    {
      $image = 'public/img/' . $slider->image;
      
      if(File::exists($image)){
         File::delete($image);
      }

       $slider->delete();

       return $this->index($request);
    }

}

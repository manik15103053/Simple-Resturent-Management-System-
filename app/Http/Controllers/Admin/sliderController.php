<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Image;
use Carbon\Carbon;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders = Slider::all();

       return view('admin.slider.index',compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
          $this->Validate($request,[
     
                'title' => 'required',
                'sub_title' => 'required',
                'image' => 'required|mimes:jpeg,jpg,bmp,png',




            ]);


         $image = $request->file('image');

           if(isset($image)){

            $imagename  = time() .'.'. $image->getClientOriginalExtension();
             if(!file_exists('upload/slider')){
                mkdir('upload/slider',0777,true);
             }
             $image->move('upload/slider',$imagename);
           }else{
            $imagename = 'default.png';
           }


       $slider = new Slider();
       $slider->title = $request->title;
       $slider->sub_title = $request->sub_title;
       $slider->image = $imagename;
       $slider->save();

       return redirect(route('slider.index'))->with('successMeg','Slider Successfully Save');
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
         $this->Validate($request,[
     
                'title' => 'required',
                'sub_title' => 'required',
                'image' => 'mimes:jpeg,jpg,bmp,png',




            ]);


         $image = $request->file('image');
         $slider = Slider::find($id);

           if(isset($image)){

            $imagename  = time() .'.'. $image->getClientOriginalExtension();
             if(!file_exists('upload/slider')){
                mkdir('upload/slider',0777,true);
             }
             $image->move('upload/slider',$imagename);
           }else{
            $imagename = $slider->image;
           }


      
       $slider->title = $request->title;
       $slider->sub_title = $request->sub_title;
       $slider->image = $imagename;
       $slider->save();

       return redirect(route('slider.index'))->with('successMeg','Slider Successfully Update');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $slider = Slider::find($id);
     if(file_exists('upload/slider/'.$slider->image)){
         unlink('upload/slider/'.$slider->image);

     }
    
     $slider->delete();
     return redirect()->back()->with('successMeg','Slider Successfully Delete');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\sliderPic;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addSlide(Request $req){
        $slide = new sliderPic;
        $slide->sliderName = $req->input('slideNumber');
        $slidenumber = $req->input('slideNumber');
        $destinationPath = 'pictures/slider-pictures/';
        $fileName= $slidenumber.".jpg";
        $req->file('photo')->move($destinationPath, $fileName);
        $slide->photo = $destinationPath.$fileName;
        $slide->save();
        return redirect()->route('slider-form');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function sliderForm(Request $request){
        $slide = new sliderPic;
        $allslides = $slide->all();
        $arr=[ ];
        for($i=0;$i<count($allslides);$i++){
            array_push($arr,$i);
        }
        $datas = $request->session()->get('adminaut');
        if (empty($datas) == false) {
            $logandpass = end($datas);
            if ($logandpass->name == "megapoli" && $logandpass->password == "Megapolis72#adm") {
                return view('inc/admin/sliderForm', ['data' => $arr]);
            } else {
                return redirect()->route('show-aut');
            }
        } else {
            return redirect()->route('show-aut');
        }
    }
    public function sliderOrder(){
        $slides = new sliderPic;
        return view('inc/admin/sliderOrder',['slides'=>$slides->all()]);
    }
}

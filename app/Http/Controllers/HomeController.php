<?php

namespace App\Http\Controllers;

use App\Models\Doors;
use App\Models\Mebel;
use App\Models\Fireplace;
use App\Models\sliderPic;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPage(Request $request){
        $doors = new Doors();
        $mebel = new Mebel();
        $fireplace = new Fireplace();
        $slide = new sliderPic();
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('home', ['session' => $sessionFiltered, 'doors' => $doors->all(),'mebel' => $mebel->all(),'fireplace' => $fireplace->all(),'daraI' => 0,'gardI' => 0,'slides'=>$slide->all()]);
    }

    public function showPartners(Request $request){
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages.partners', ['session'=>$sessionFiltered]);
    }

    public function showContact(Request $request){
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages.contact', ['session'=>$sessionFiltered]);
    }

    public function showAbout(Request $request){
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages.about', ['session'=>$sessionFiltered]);
    }


}

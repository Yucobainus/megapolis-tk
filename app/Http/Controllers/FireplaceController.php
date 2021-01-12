<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fireplace;

class FireplaceController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addFireplace(Request $req)
    {
        $fire = new Fireplace;

        $fire->name = $req->input('name');
        $fire->portal = $req->input('portal');
        $fire->ochag = $req->input('ochag');
        $fire->tech = $req->input('tech');
        $fire->notice = $req->input('notice');
        $fire->price = $req->input('price');
        $fire->size = $req->input('size');
        $fire->category = $req->input('category');
        $fire->photo = $req->input('photo');
        $fire->company = $req->input('company');

        $destinationPath = 'pictures/products/fire/';
        $fileName = $req->file('photo')->getClientOriginalName();
        $req->file('photo')->move($destinationPath, $fileName);
        $fire->photo = $destinationPath . $fileName;

        $fire->save();

        return redirect()->route('fireplace-form');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mebel;

class MebelController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addMebel(Request $req)
    {
        $meb = new Mebel;

        $meb->name = $req->input('name');
        $meb->company = $req->input('company');
        $meb->price = $req->input('price');
        $meb->notice = $req->input('notice');
        $meb->category= $req->input('category');
        $destinationPath = 'pictures/products/mebel/';
        $fileName = $req->file('photo')->getClientOriginalName();
        $req->file('photo')->move($destinationPath, $fileName);
        $meb->photo = $destinationPath . $fileName;

        $meb->save();

        return redirect()->route('mebel-form');

    }
}

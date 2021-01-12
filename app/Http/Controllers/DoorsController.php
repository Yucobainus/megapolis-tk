<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doors;

class DoorsController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addProduct(Request $req)
    {
        $door = new Doors;

        $door->name = $req->input('name');
        $door->type = $req->input('type');
        $door->size = $req->input('size');
        $door->color = $req->input('color');
        $door->company = $req->input('company');
        $door->notice = $req->input('notice');

        $destinationPath = 'pictures/products/doors/';
        $fileName = $req->file('photo')->getClientOriginalName();
        $req->file('photo')->move($destinationPath, $fileName);
        $door->photo = $destinationPath . $fileName;

        /*Dara*/
        if ($req->company === 'Dara') {
            $door->polotno = $req->input('polotno');
            $door->glass = $req->input('glass');
            $door->costForPolotno = $req->input('cost-for-polotno');
            $door->price = $req->input('cost-for-complect');
        }
        /*Buldoors*/

        if ($req->company === 'Buldoors' || $req->company === 'Gardian') {
            $door->mainLock = $req->input('main-lock');
            $door->addLock = $req->input('add-lock');
            $door->cilindr = $req->input('cilindr');
            $door->arm = $req->input('arm');
            $door->glazok = $req->input('glazok');
            if ($req->input('front') !== null) {
                $door->front = $req->input('front');
            }
            if ($req->input('back') !== null) {
                $door->back = $req->input('back');
            }
            $door->price = $req->input('price');

            if ($req->company === 'Buldoors') {
                $door->zadv = $req->input('zadv');
            }
            if ($req->company === 'Gardian') {
                $door->character = $req->input('character');
                $door->fill = $req->input('fill');
                $door->tipone = $req->input('tipone');
                $door->tiptwo = $req->input('tiptwo');
                $door->tipthree = $req->input('tipthree');
            }

        }

        $door->save();
        return redirect()->route('admin');
    }


}

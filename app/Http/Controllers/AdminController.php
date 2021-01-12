<?php

namespace App\Http\Controllers;

use App\Models\Doors;
use App\Models\Fireplace;
use App\Models\Mebel;
use App\Models\priceDel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @param $section
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function showAdminList($section, Request $request)
    {
        $doors = new Doors;
        $meb = new Mebel;
        $fireplace = new Fireplace;
        $datas = $request->session()->get('adminaut');
        if (empty($datas) == false) {
            $logandpass = end($datas);
            if ($logandpass->name == "megapoli" && $logandpass->password == "Megapolis72#adm") {
                if ($section == 'Buldoors' || $section === 'Dara' || $section === 'Gardian') {
                    return view('inc/admin/productList', ['data' => $doors->where('company', $section)->get()]);
                } else if ($section == 'Furniture') {
                    return view('inc/admin/productList', ['data' => $meb->all()]);
                } else if ($section == 'Fireplace') {
                    return view('inc/admin/productList', ['data' => $fireplace->all()]);
                }
            } else {
                return redirect()->route('show-aut');
            }
        } else {
            return redirect()->route('show-aut');
        }
    }

    //Редактирование продукта

    /**
     * @param $company
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function productUpdate($company, $id, Request $request)
    {
        $doors = new Doors;
        $meb = new Mebel;
        $fireplace = new Fireplace;

        $datas = $request->session()->get('adminaut');
        if (empty($datas) == false) {
            $logandpass = end($datas);
            if ($logandpass->name == "megapoli" && $logandpass->password == "Megapolis72#adm") {
                if ($company === 'Buldoors' || $company === 'Dara' || $company === 'Gardian') {
                    return view('inc/admin/updateProduct', ['data' => $doors->find($id),]);
                } elseif ($company === 'Module-Mebel' || $company === 'Wellwood') {
                    return view('inc/admin/updateProduct', ['data' => $meb->find($id),]);
                } elseif ($company === 'Dimplex') {
                    return view('inc/admin/updateProduct', ['data' => $fireplace->find($id),]);
                }
            } else {
                return redirect()->route('show-aut');
            }
        } else {
            return redirect()->route('show-aut');
        }



    }

    /**
     * @param $companyOf
     * @param $id
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePr($companyOf, $id, Request $req)
    {
        if ($companyOf == 'Buldoors' || $companyOf == 'Dara' || $companyOf == 'Gardian') {
            $door = Doors::find($id);
            $door->name = $req->input('name');
            $door->type = $req->input('type');
            $door->size = $req->input('size');
            $door->color = $req->input('color');
            $door->company = $req->input('company');
            $door->notice = $req->input('notice');
            $door->photo = $req->input('photo');
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
        } else if ($companyOf == 'Wellwood' || $companyOf == 'Module-Mebel') {
            $meb = Mebel::find($id);
            $meb->name = $req->input('name');
            $meb->company = $req->input('company');
            $meb->price = $req->input('price');
            $meb->notice = $req->input('notice');
            $meb->category = $req->input('category');
            $meb->photo = $req->input('photo');
            $meb->save();
            return redirect()->route('admin');
        } else if ($companyOf == 'Dimplex') {
            $fire = Fireplace::find($id);
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
            $fire->photo = $req->input('photo');
            $fire->save();
            return redirect()->route('admin');
        }
    }

    /**
     * @param $company
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function productDelete($company, $id)
    {
        if ($company === 'Buldoors' || $company === 'Dara' || $company === 'Gardian') {
            Doors::find($id)->delete();
        } elseif ($company === 'Module-Mebel' || $company === 'Wellwood') {
            Mebel::find($id)->delete();
        } elseif ($company === 'Dimplex') {
            Fireplace::find($id)->delete();
        }
        return redirect()->route('admin');
    }

    public function changePrices(Request $request)
    {
        $prices = priceDel::find(1);
        $datas = $request->session()->get('adminaut');
        if (empty($datas) == false) {
            $logandpass = end($datas);
            if ($logandpass->name == "megapoli" && $logandpass->password == "Megapolis72#adm") {
                return view('inc/admin/pricesForm', ['data' => $prices]);
            } else {
                return redirect()->route('show-aut');
            }
        } else {
            return redirect()->route('show-aut');
        }

    }

    public function updatePrices(Request $req)
    {
        $prices = priceDel::find(1);
        $prices->price = $req->input('price');
        $prices->priceWithD = $req->input('priceWithD');
        $prices->priceStair = $req->input('priceStair');
        $prices->save();
        return redirect()->route('admin');
    }

    public function showAut()
    {
        return view('inc/admin/aut');
    }

    public function showAdmin(Request $request)
    {
        $datas = $request->session()->get('adminaut');
        if (empty($datas) == false) {
            $logandpass = end($datas);
            if ($logandpass->name == "megapoli" && $logandpass->password == "Megapolis72#adm") {
                return view('admin');
            } else {
                return redirect()->route('show-aut');
            }
        } else {
            return redirect()->route('show-aut');
        }
    }

    public function adminAut(Request $req)
    {
        $login = $req->login;
        $password = $req->pass;
        if ($login === 'megapoli' && $password === 'Megapolis72#adm') {
            $req->session()->push("adminaut", (object)['name' => $req->login, 'password' => $req->pass]);
            return redirect()->route('admin');
        } else {
            return view('admin.inc.aut');
        }
    }
}

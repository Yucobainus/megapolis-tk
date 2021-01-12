<?php

namespace App\Http\Controllers;

use App\Models\priceDel;
use Illuminate\Http\Request;

use App\Models\Doors;
use App\Models\Mebel;
use App\Models\Fireplace;

class CategoriesController extends Controller
{

    /**
     * @return string[]
     */
    public function getColors()
    {
        $doors = new Doors;
        $allDoors = $doors->all();
        $dbColors = array('Все', 'Гардиан');
        foreach ($allDoors as $el) {
            array_push($dbColors, $el->color);
        }
        return $colors = array_unique($dbColors);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFireplace(Request $request)
    {
        $fire = new Fireplace;
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/fireplace', ['session' => $sessionFiltered,'fire' => $fire->inRandomOrder()->get()]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFurniture(Request $request)
    {
        $meb = new Mebel;
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/mebel', ['session'=>$sessionFiltered,'meb' => $meb->inRandomOrder()->get()]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEnter(Request $request)
    {
        $doors = new Doors;

        $colors = $this->getColors();
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/enterDoors', ['session'=>$sessionFiltered,'doors' => $doors->where('type', 'Входные двери')->inRandomOrder()->simplePaginate(10), 'colors' => $colors]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAllProduction(Request $request)
    {
        $doors = new Doors;
        $meb = new Mebel;
        $fire = new Fireplace;
        $allDoors = $doors->inRandomOrder()->get();
        $allMeb = $meb->inRandomOrder()->get();
        $allFire = $fire->inRandomOrder()->get();
        $allProducts = [$allDoors];
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/production', ['session'=>$sessionFiltered,'allProducts' => $allProducts]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRoom(Request $request)
    {
        $doors = new Doors;
        $colors = $this->getColors();
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/roomDoors', ['session'=>$sessionFiltered,'doors' => $doors->where('type', 'Межкомнатные двери')->inRandomOrder()->simplePaginate(10), 'colors' => $colors]);
    }

    /**
     * @param $category
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showOneProduct($category, $id, Request $request)
    {
        $doors = new Doors;
        $meb = new Mebel;
        $fireplace = new Fireplace;
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        if ($category === 'Buldoors') {
            return view('pages/oneProduct', ['session'=>$sessionFiltered,'data' => $doors->find($id),]);
        } elseif ($category === 'Dara') {
            return view('pages/oneProduct', ['session'=>$sessionFiltered, 'data' => $doors->find($id),]);
        } elseif ($category === 'Gardian') {
            return view('pages/oneProduct', ['session'=>$sessionFiltered,'data' => $doors->find($id),]);
        } elseif ($category === 'furniture') {
            return view('pages/oneProduct', ['session'=>$sessionFiltered,'data' => $meb->find($id),]);
        } elseif ($category === 'fireplace') {
            return view('pages/oneProduct', ['session'=>$sessionFiltered,'data' => $fireplace->find($id),]);
        }
    }



    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function enterDoorFilter(Request $req)
    {
        $doors = new Doors;
        $from = $req->input('from');
        $to = $req->input('to');
        $colors = $this->getColors();
        $inputColor = $req->input('color');
        $inputCompany = $req->input('company');
        $session = $req->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/enterDoors', [ 'session'=>$sessionFiltered,
            'doors' => $doors->where('type', 'Входные двери')
                ->when($inputColor !== 'Все', function ($query) use ($inputColor) {
                    return $query->where('color', $inputColor);
                })
                ->when($inputCompany == 'Бульдорс', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Buldoors');
                })
                ->when($inputCompany == 'Гардиан', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Gardian');
                })
                ->when($inputCompany == 'Dara', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Dara');
                })
                ->when($from && $to, function ($query) use ($from, $to) {
                    return $query->whereBetween('price', [$from, $to]);
                })
                ->when($from, function ($query) use ($from) {
                    return $query->where('price', '>', $from);
                })
                ->when($to, function ($query) use ($to) {
                    return $query->where('price', '<', $to);
                })
                ->inRandomOrder()
                ->simplePaginate(100),
            'colors' => $colors
        ]);
    }

    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function productionFilter(Request $req)
    {
        $doors = new Doors;
        $meb = new Mebel;
        $fireplace = new Fireplace;
        $from = $req->input('from');
        $to = $req->input('to');
        $inputCompany = $req->input('company');
        $inputCategory = $req->input('category');
        $session = $req->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        if ($inputCompany == 'Камины') {
            return view('pages/productionFilter', [ 'session'=>$sessionFiltered,
                'data' => $fireplace
                    ->when($from && $to, function ($query) use ($from, $to) {
                        return $query->whereBetween('price', [$from, $to]);
                    })
                    ->when($from, function ($query) use ($from) {
                        return $query->where('price', '>', $from);
                    })
                    ->when($to, function ($query) use ($to) {
                        return $query->where('price', '<', $to);
                    })
                    ->get()
            ]);
        } else if ($inputCompany == 'Мебель') {
            return view('pages/productionFilter', ['session' => $sessionFiltered,'data' => $meb->when($inputCompany == 'Module-Mebel', function ($query) use ($inputCompany) {
                return $query->where('company', 'Module-Mebel');
            })
                ->when($inputCompany == 'Wellwood', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Wellwood');
                })
                ->when($from && $to, function ($query) use ($from, $to) {
                    return $query->whereBetween('price', [$from, $to]);
                })
                ->when($from, function ($query) use ($from) {
                    return $query->where('price', '>', $from);
                })
                ->when($to, function ($query) use ($to) {
                    return $query->where('price', '<', $to);
                })
                ->get(),]);
        } else if ($inputCategory == 'Межкомнатные двери') {
            return view('pages/productionFilter', [ 'session'=>$sessionFiltered,
                'data' => $doors->where('type', 'Межкомнатные двери')
                    ->when($inputCompany == 'Бульдорс', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Buldoors');
                    })
                    ->when($inputCompany == 'Гардиан', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Gardian');
                    })
                    ->when($inputCompany == 'Dara', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Dara');
                    })
                    ->when($from && $to, function ($query) use ($from, $to) {
                        return $query->whereBetween('price', [$from, $to]);
                    })
                    ->when($from, function ($query) use ($from) {
                        return $query->where('price', '>', $from);
                    })
                    ->when($to, function ($query) use ($to) {
                        return $query->where('price', '<', $to);
                    })
                    ->get(),
            ]);
        } else if ($inputCategory == 'Входные двери') {
            return view('pages/productionFilter', ['session'=>$sessionFiltered,
                'data' => $doors->where('type', 'Входные двери')
                    ->when($inputCompany == 'Бульдорс', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Buldoors');
                    })
                    ->when($inputCompany == 'Гардиан', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Gardian');
                    })
                    ->when($inputCompany == 'Dara', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Dara');
                    })
                    ->when($from && $to, function ($query) use ($from, $to) {
                        return $query->whereBetween('price', [$from, $to]);
                    })
                    ->when($from, function ($query) use ($from) {
                        return $query->where('price', '>', $from);
                    })
                    ->when($to, function ($query) use ($to) {
                        return $query->where('price', '<', $to);
                    })
                    ->get(),
            ]);
        } else if ($inputCompany == 'Бульдорс' || $inputCompany == 'Гардиан' || $inputCompany == 'Dara') {
            return view('pages/productionFilter', [ 'session'=>$sessionFiltered,
                'data' => $doors->when($inputCompany == 'Бульдорс', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Buldoors');
                })
                    ->when($inputCompany == 'Гардиан', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Gardian');
                    })
                    ->when($inputCompany == 'Dara', function ($query) use ($inputCompany) {
                        return $query->where('company', 'Dara');
                    })
                    ->when($from && $to, function ($query) use ($from, $to) {
                        return $query->whereBetween('price', [$from, $to]);
                    })
                    ->when($from, function ($query) use ($from) {
                        return $query->where('price', '>', $from);
                    })
                    ->when($to, function ($query) use ($to) {
                        return $query->where('price', '<', $to);
                    })
                    ->get()
            ]);
        }else if($inputCompany=='Все' && $inputCategory=='Все'){
            $allDoors = $doors->when($from && $to, function ($query) use ($from, $to) {
                return $query->whereBetween('price', [$from, $to]);
            })
            ->when($from, function ($query) use ($from) {
                return $query->where('price', '>', $from);
            })
            ->when($to, function ($query) use ($to) {
                return $query->where('price', '<', $to);
            })
            ->get();
            $allMeb = $meb->when($from && $to, function ($query) use ($from, $to) {
                return $query->whereBetween('price', [$from, $to]);
            })
            ->when($from, function ($query) use ($from) {
                return $query->where('price', '>', $from);
            })
            ->when($to, function ($query) use ($to) {
                return $query->where('price', '<', $to);
            })
            ->get();
            $allFire = $fireplace->when($from && $to, function ($query) use ($from, $to) {
                return $query->whereBetween('price', [$from, $to]);
            })
            ->when($from, function ($query) use ($from) {
                return $query->where('price', '>', $from);
            })
            ->when($to, function ($query) use ($to) {
                return $query->where('price', '<', $to);
            })
            ->get();
            $allProducts = [$allDoors, $allMeb, $allFire];
            return view('pages/production', ['allProducts' => $allProducts,'session'=>$sessionFiltered]);
        }
    }

    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function roomDoorFilter(Request $req)
    {
        $doors = new Doors;
        $from = $req->input('from');
        $to = $req->input('to');
        $colors = $this->getColors();
        $inputColor = $req->input('color');
        $inputCompany = $req->input('company');
        $session = $req->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/roomDoors', [ 'session'=>$sessionFiltered,
            'doors' => $doors->where('type', 'Межкомнатные двери')
                ->when($inputColor !== 'Все', function ($query) use ($inputColor) {
                    return $query->where('color', $inputColor);
                })
                ->when($inputCompany == 'Бульдорс', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Buldoors');
                })
                ->when($inputCompany == 'Гардиан', function ($query) use ($inputCompany) {
                    return $query->where('company', 'Gardian');
                })
                ->when($from && $to, function ($query) use ($from, $to) {
                    return $query->whereBetween('price', [$from, $to]);
                })
                ->when($from, function ($query) use ($from) {
                    return $query->where('price', '>', $from);
                })
                ->when($to, function ($query) use ($to) {
                    return $query->where('price', '<', $to);
                })
                ->inRandomOrder()
                ->simplePaginate(100),
            'colors' => $colors
        ]);
    }

    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mebelFilter(Request $req)
    {
        $meb = new Mebel;
        $from = $req->input('from');
        $to = $req->input('to');
        $inputCompany = $req->input('company');
        $session = $req->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/mebel', [ 'session'=>$sessionFiltered,
            'meb' => $meb
                ->when($inputCompany !== 'Все', function ($query) use ($inputCompany) {
                    return $query->where('company', $inputCompany);
                })
                ->when($from && $to, function ($query) use ($from, $to) {
                    return $query->whereBetween('price', [$from, $to]);
                })
                ->when($from, function ($query) use ($from) {
                    return $query->where('price', '>', $from);
                })
                ->when($to, function ($query) use ($to) {
                    return $query->where('price', '<', $to);
                })
                ->get(),
        ]);
    }

    /**
     * @param Request $req
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fireplaceFilter(Request $req)
    {
        $fire = new Fireplace;
        $from = $req->input('from');
        $to = $req->input('to');
        $session = $req->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/fireplace', [ 'session'=>$sessionFiltered,
            'fire' => $fire
                ->when($from && $to, function ($query) use ($from, $to) {
                    return $query->whereBetween('price', [$from, $to]);
                })
                ->when($from, function ($query) use ($from) {
                    return $query->where('price', '>', $from);
                })
                ->when($to, function ($query) use ($to) {
                    return $query->where('price', '<', $to);
                })
                ->get(),
        ]);
    }


    public function showDelivery(Request $request)
    {
        $delprices = priceDel::find(1);
        $session = $request->session()->get('cart');
        $sessionFiltered = array();
        if (empty($session) == false) {
            foreach ($session as $el) {
                array_push($sessionFiltered, $el);
            }
        }
        return view('pages/delivery', ['prices' => $delprices, 'session'=>$sessionFiltered]);
    }

    // public function testUp()
    // {
    //     $doors = new Doors;
    //     $allD = $doors->all();
    //     $arr = [];
    //     foreach ($allD->price as $d) {
    //         array_push($arr, $d);
    //     }
    //     echo $arr[1];
    // }
}



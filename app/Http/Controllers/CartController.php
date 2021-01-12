<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * @param Request $req
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function addToCart(Request $req)
    {
        $sess = $req->session()->get('cart');
        $count = 0;
        if (empty($sess) == false) {
            foreach ($sess as $el) {
                if ($el->id == $req->id) {
                    $count++;
                }
            }
        }
        if ($count == 0) {
            $req->session()->push("cart", (object)["id" => $req->id, "name" => $req->name, "photo" => $req->photo, "count" => $req->count, "price" => $req->price, "company" => $req->company,  ]);
            return response()->json(['success' => 'Товар успешно добавлен в корзину!']);
        } else {
            return response()->json(['success' => 'Вы уже добавили этот товар.']);
        }
    }


    public function confirmOrder(Request $req)
    {
        $deleted = $req->deleted;
        $session = $req->session()->get('cart');

        $this->validate($req, ['name' => 'required', 'phone' => 'required|numeric']);

        $keys = array();

        if (empty($deleted) == false) {

            for ($i = 0; $i < sizeof($deleted); $i++) {
                for ($j = 0; $j < sizeof($session); $j++) {
                    if ($deleted[$i] == $session[$j]->id) {
                        array_push($keys, $session[$j]);
                    }
                }
            }


            $diffCart = array_udiff($session, $keys, function ($obj_a, $obj_b) {
                return $obj_a->id - $obj_b->id;
            });

            $filteredCart = array();

            foreach ($diffCart as $el) {
                array_push($filteredCart, $el);
            }
        } else {
            $filteredCart = $session;
        }


        $allPrice = 0;
        foreach ($filteredCart as $el) {
            $allPrice = $allPrice + ((int)$el->price * (int)$el->count);
        }

        $email = "";
        if (empty($filteredCart) == false) {
            for ($i = 0; $i < sizeof($filteredCart); $i++) {
                $email = $email . $filteredCart[$i]->name . " в колличестве" . " " . $filteredCart[$i]->count . ", Цена:" . $filteredCart[$i]->price . "сум" . "\n";
            }
            Mail::send(['text' => 'email'], ['name' => $req->name, 'phone' => $req->phone, 'tg' => $req->telegram, 'price' => $allPrice, "email" => $email], function ($message) {
                $message->to('megapolisconnection@gmail.com', 'Megapolis')->subject('Новый заказ!');
                $message->from('megapolisconnection@gmail.com', 'Megapolis');
            });
            $message = "Сообщение отправлено!";
        } else {
            $message = "Всё отчистилось!";
        }
        $req->session()->forget('cart');
        return response()->json(['data' => $message]);
    }

}

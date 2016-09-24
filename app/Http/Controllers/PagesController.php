<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;

    class PagesController extends Controller {
        public function index() {
            return view('hello_world');
        }

        public function amigos() {
            $frieds = array(
                array(
                    'name' => 'Deivid Network',
                    'email' => 'deividnetwork@gmail.com'
                ),
                array(
                    'name' => 'Erick Tatsui',
                    'email' => 'ericktatsui@gmail.com'
                )
            );

            return $frieds;
        }
    }

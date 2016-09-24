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

        public function sobre() {
            $response = array();

            $response['title'] = 'About me';

            $response['me'] = array(
                'name' => 'Deivid Network',
                'email' => 'deividnetwork@gmail.com',
                'role' => 'Developer',
                'phrase' => 'Never give up!'
            );

            return view('sobre', compact('response'));
        }
    }

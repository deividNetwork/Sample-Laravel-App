<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Input;

    use App\Account as Acc;

    class Account extends Controller {
        /**
         * All users of the system
         * @return string JSON
         */
        public function index() {
            $response = array(
                'code' => 0,
                'msg' => 'No user found'
            );

            $columns = [
                'id',
                'name',
                'email'
            ];

            $users = Acc::all($columns);

            if ($users->count() > 0) {
                $response['users'] = $users;

                $response['code'] = 1;
                unset($response['msg']);
            }

            return $response;
        }

        /**
         * Specific user
         * @param $id
         * @return string JSON
         */
        public function show($id) {
            $response = array(
                'code' => 0,
                'msg' => 'Failure to find user'
            );

            $columns = [
                'id',
                'name',
                'email'
            ];

            $customer = Acc::where(['id' => $id]);
            $customer = $customer->first($columns);

            if ($customer) {
                $response['user'] = $customer;

                $response['code'] = 1;
                unset($response['msg']);
            }

            return $response;
        }

        /**
         * Create a user on system
         * @return string JSON
         */
        public function create() {
            $response = array(
                'code' => 0,
                'msg' => 'Failure to create user'
            );

            $customer = new Acc();

            if (Input::get('email') && Input::get('pwd') && Input::get('name')) {
                $hasExist = Acc::where(['email' => Input::get('email')]);

                if ($hasExist->first()) {
                    $response['code'] = 2;
                    $response['msg'] = 'Email has already been used, try another';
                }
                else {
                    $customer->email = Input::get('email');
                    $customer->pwd = md5(Input::get('pwd'));
                    $customer->name = Input::get('name');
                }
            }

            if ($customer->isDirty()) {
                $customer->save();

                $response['code'] = 1;
                $response['msg'] = 'User successfully created';
            }

            return $response;
        }

        /**
         * Update a specific user in the system
         * @param $id
         * @return string JSON
         */
        public function edit($id) {
            $response = array(
                'code' => 0,
                'msg' => 'No user found'
            );

            $account = Acc::find($id);

            if ($account) {
                if (Input::get('name')) {
                    $account->name = Input::get('name');
                }

                if (Input::get('email')) {
                    $account->name = Input::get('email');
                }

                if ($account->isDirty()) {
                    $account->update();

                    $response['code'] = 1;
                    $response['msg'] = 'User updating with success';
                }
                else {
                    $response['msg'] = 'Not upgraded user';
                }
            }

            return $response;
        }

        /**
         * Delete a specific user in the system
         * @param $id
         * @return string JSON
         */
        public function destroy($id) {
            $response = array(
                'code' => 0,
                'msg' => 'No user found'
            );

            $account = Acc::find($id);

            if ($account) {
                $account->delete();

                $response['code'] = 1;
                $response['msg'] = 'User delete with success';
            }

            return $response;
        }

    }

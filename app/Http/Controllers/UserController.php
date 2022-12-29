<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }
    public function show($id) {
        $user = User::find($id);
        return $user;
    }
    public function create() {

        $data = [
            'name'=> 'korim Doe',
            'email'=> 'Pele@gmail.com',
            'password'=> '45557'
        ];

        User::create($data);



        return 'create successfully';
    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return 'deleted';

    }
}

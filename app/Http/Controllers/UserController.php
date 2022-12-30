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

//     public function show($id) {
//         $user = User::find($id);
//         return $user;
//     }
//     public function create() {

//         $data = [
//             'id'=> '2',
//             'name'=> 'Jorim Doe',
//             'email'=> 'Jorim@gmail.com',
//             'password'=> '45557'
//         ];

//         User::create($data);



//         return 'create successfully';
//     }   
    
//     public function edit($id){
//         $user = User::find($id);
//         $user->name = 'Koi Doe';
//         $user->email = 'Koi@gmail.com';
//         $user->save();
//         return 'Edited';
//   }
//     public function delete($id){
//         $user = User::findOrFail($id);
//         $user->delete();
//         return 'deleted';

//     }
    public function store(){
        return 'Added a user';
    }
  
    public function create(){
        return view('create_user');
    }
  
    public function update(){
        return 'Updated ';
    }
    public function update_Name(){
        return 'Name has been updated ';
    }
    public function delete(){
        return 'Name has been delete ';
    }
  
}

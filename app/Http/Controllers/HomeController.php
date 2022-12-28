<?php
namespace App\http\Controllers;


class HomeController extends Controller {


    public function index() {

        $this->data ['name']= "Osim akash";
        $this->data ['roll']= 1125;
        $this->data ['subject']=  ['bangla', 'English','Math'];
        return view('home.index', $this->data);
    }


}












?>
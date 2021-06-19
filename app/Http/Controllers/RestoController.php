<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Restuarant;

class RestoController extends Controller
{

    function index(){
        Return view('home');

    }

    // function that search data from restaurants table in data base
    function list(){
        $data = Restuarant::all();
        Return view('list',['data'=>$data]);

    }

    // add data to database
    function add(Request $req){
        $user = new Restuarant;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->save();
        //flash session will help to display Output when data entered successfully
        $req->session()->flash('status','Resturant Entered Successfully');
        return redirect('list');


    }
}

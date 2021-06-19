<?php

namespace App\Http\Controllers;
use App\Models\Restuarant;
use Illuminate\Http\Request;

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
        return $req->input();


    }
}

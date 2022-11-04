<?php

namespace App\Http\Controllers;
use App\Models\employee;

use Illuminate\Http\Request;

class crudapp extends Controller
{
    function homepage(){
        $data = employee::all();
        return view("home",["data"=>$data]);
    }
    function addpage(){
        return view("add");
    }
    function addRecord(request $req){
        $e = new employee();
        $e -> name = $req->name;
        $e -> phone = $req->phone;
        $e -> designation = $req->designation;
        $e -> email = $req->email;
        $e -> city = $req->city;
        $e -> state = $req->state;
        $e-> save();
        return redirect('/');
    }
    function deleteRecord($num){
        $item = employee::find($num);
        $item->delete();
        return redirect("/");
    }
    function updateRecord($num){
        $item = employee::find($num);
        return view("update",["Data"=> $item]);
    }
    function updatePage(request $req){
        $e = employee::find($req->id);
        $e -> name = $req->name;
        $e -> phone = $req->phone;
        $e -> designation = $req->designation;
        $e -> email = $req->email;
        $e -> city = $req->city;
        $e -> state = $req->state;
        $e-> save();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function show($id){
        return "ดี";
    }
    public function create(){
        return "ดี";
    }
    public function store(){
        return "ดี";
    }
    public function update($id){
        return "ดี";
    }
    public function delete($id){
        return "ดี";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        //route --> /ninjas
        //fetch all records & pass into the view index view
        $ninjas = Ninja::orderBy("created_at", "desc")->get();
        return view('ninjas.index',[ "ninjas" => $ninjas] );
    }

    public function show($id) {
        //route --> /ninjas/{id}
        //fetch a record by id & pass into the index view
    }

    public function create() {
        //route --> /ninjas/create
        //render a create view (with web form) to user
    }

    public function store() {
        //route --> /ninjas (POST)
        //handle the form submission from create view
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Projet $projet)
    {
//        dd(Projet::all()->first()->client);
        return view('test-page', [
            'projet' => Projet::all()->first()
        ]);
    }
}

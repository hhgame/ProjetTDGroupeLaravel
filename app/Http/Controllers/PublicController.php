<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function contact(){
        echo "contact";
    }

    public function propos(){
        echo "propos";
    }

    public function acceuil(){
        echo "accueil";
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id){
        echo 'Halaman Artikel dengan ID - '.$id;
    }
}

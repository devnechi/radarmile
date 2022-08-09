<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    //
    public function viewDocPage(){
        return view('doc_page');
    }

    public function viewAbout(){
        return view('about_us');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    //
    public function viewDocPage(){
        return view('doc_page');
    }
}

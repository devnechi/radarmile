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
        return view('explore');
    }

    public function viewServiceDetails(){
        return view('services.service_details');
    }

    public function viewContactus(){
        return view('contact-us');
    }

    public function viewClients(){
        return view('clients');
    }
}

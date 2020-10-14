<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class SiteController extends Controller {  

    public function index() {
        include_once 'includes/siteCommon.php';
        return view('site.index', $date);
    }   

}

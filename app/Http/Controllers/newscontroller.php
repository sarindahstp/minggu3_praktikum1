<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newscontroller extends Controller
{
    public function news($id){
        return view ('news', ['beritake' => $id]);
    }
}

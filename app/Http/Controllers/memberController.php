<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function display($id){ /* not linked with controller, view yet*/
      $member = Member::find($id);
    }
}

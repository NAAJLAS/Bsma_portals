<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class DeleteController extends Controller
{

public function deleteMember($id){
  DB::delete('DELETE FROM Member WHERE memberID = ?', [$id]);
  echo "Member deleted successfully.<br/>";
}
}

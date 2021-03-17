<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function addMemberForm(){
      return view('AddMember');
    }

    public function addMember(Request $request){
      /* retrieve data from form and add it to the database */

      $firstName = $request->input('firstName');
      $lastName = $request->input('lastName');
      $email = $request->input('Email');
      $phoneNumber = $request->input('phoneNumber');
      $dateofbirth = $request->input('dateofbirth');
      $nationalID = $request->input('nationalID');
      $MembershipS = $request->input('MembershipStart');
      $MembershipE = $request->input('MembershipEnd');

      $memberData=array('firstname' => $firstName, 'lastname' => $lastName,'email' => $email,'phoneNumber' => $phoneNumber,
      'dateOfBirth' => $dateofbirth,'nationalID' => $nationalID);
      $membershipData=array('MembershipStart' => $MembershipS, 'MembershipEnd' => $MembershipE);
      DB::table('Member')->insert($memberData);
      DB::table('MemberShip')->insert($membershipData);
    /*  return redirect()->action(‘Controller@addMember)->with(‘status’, ‘Member added successfully’); */
}

public function addAdminForm(){
  return view('AddAdmin');
}
public function addAdmin(Request $request){
  /* retrieve data from form and add it to the database */

  $firstName = $request->input('firstName');
  $lastName = $request->input('lastName');
  $email = $request->input('Email');
  $phoneNumber = $request->input('phoneNumber');
  $dateofbirth = $request->input('dateofbirth');
  $nationalID = $request->input('nationalID');

  $data=array('firstname' => $firstName, 'lastname' => $lastName,'email' => $email,'phoneNumber' => $phoneNumber,
  'dateOfBirth' => $dateofbirth,'nationalID' => $nationalID);

  DB::table('Admin')->inset($data);

/*  return redirect()->action(‘Controller@addMember)->with(‘status’, ‘Member added successfully’); */
}
/*
public function show($name){
$member = \DB::table('Member')->where('firstName',$name)->first();

  return view('index',[
    'name' -> $name
  ]);
} */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

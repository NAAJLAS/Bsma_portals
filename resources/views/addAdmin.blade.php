@extends('layout')

@section('content')

<body>
  <br>
  <h1 class="EditAdmin">New admin details</h1>
  <br><br>
<div class="rcorners2">

  <form action="/add_admin" method=”POST”>
    {{csrf_field()}}

    <h3>First name</h3>
    <input type="text" name="firstName" value="">
<div style="margin-left: 40%; margin-top:-8%" >
    <h3>Last name</h3>
    <input type="text" name="lastName" value="">
</div>

    <h3>National ID</h3>
    <input type="text" name="nationalID" value="">
<div style="margin-left: 40%; margin-top:-8%" >
    <h3>Date of birth</h3>
    <input type="text" name="dateofbirth" value=""></br>
</div>
    <h3>Email</h3>
    <input type="text" name="Email" value=""></br>
<div style="margin-left: 40%; margin-top:-8%" >
    <h3>Phone number</h3>
    <input type="text" name="phoneNumber" value="">
  </div>
  </form>
</div>
<br>
  <div style="margin-left: 65%"><!--buttons div-->
    <button class="AdminButtons" type="button" onclick="">Add admin</button>
    <button class="AdminButtons" type="button" onclick="">Cancel</button>
  </div><!--buttons div-->
</body>

@endsection

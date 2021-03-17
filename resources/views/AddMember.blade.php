@extends('layout')

@section('content')

<body>
  <br>
  <h1 class="EditAdmin"> New member details</h1>
  <br><br>
<div class="rcorners2">

  <form action="/add_member" method=”POST”>
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
  <h3>Membership start date</h3>
  <input type="date" name="MembershipStart" value="">
<div style="margin-left: 40%; margin-top:-8%" >
  <h3>Membership end date</h3>
  <input type="date" name="MembershipEnd" value="">
</div>

  </form>
</div>
<br>
  <div style="margin-left: 65%"><!--buttons div-->
    <button class="AdminButtons" type="button" onclick="">Add member</button>
    <button class="AdminButtons" type="button" onclick="">Cancel</button>
  </div><!--buttons div-->
</body>

@endsection

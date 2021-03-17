
@extends('layout')

@section('content')


<div id="main"> <!--main-->
  <div> <!--Statistics-->
    <div class="stats"> <!--count-->
      <h2>MEMBERS NOW </h2>
      <p class="paragraph"> 4 </p>
    </div>

    <div class="stats"> <!--occupancy rate-->
      <h2>OCCUPANCY RATE </h2>
      <p class="paragraph"> %2</p>
    </div>
  </div>

  <div> <!--Members list-->
    <h3> CURRENT LIVE MEMBERS </h3>
    <table>
  <tr> <td style="width:20%"> <!-- {{$name ->firstName ??''}} --> </td>
    <td style="width:60%"> id </td>
    <td> <button type="button" class="button"> Details</button> </td>
  </tr>
  <tr> <td style="width:20%"> second </td>
    <td style="width:60%"> id </td>
    <td> <button type="button" class="button"> Details</button> </td>
  </tr>
    </table>
  </div>

</div>

@endsection

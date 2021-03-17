@extends('layout')

@section('content')

<div id="main"> <!--main-->
  <h2>Search for a member </h2>
  <form action="">
  <h3>Search by name or memberID </h3><br>
  <input type="text" name="search">
  <button> Go! </button>
    <div>
      <input type="radio" name="membership" value="current">
      <label for="current">Current members</label>
      <input type="radio" name="membership" value="expired">
      <label for="expired">Expired memberships</label>
    </div>
    <div>
  <h3>New memberships through </h3>
  <input type="date">
  <h3> To </h3>
  <input type="date">
</form>
</div>
  <div> <!--Members list-->
    <h3> Search results </h3>
    <table>
  <tr> <td style="width:20%"> first </td>
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

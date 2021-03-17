<!DOCType html>
<html>
<head>
<link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
<script src="{{ asset('/js/js.js')}}"></script>
<title>BSMA</title>
</head>


<header id="rectangle-9">
<div>
<img class="logo" src="<?php echo url('/'); ?>/images/logo.PNG" alt="logo" style="width:10%; top:2%; left:1%;" >
<a href="#" class="names"style="width:6%; position:fixed; top:9%; left:82%;"> ADMIN </a>
<img src="<?php echo url('/'); ?>/images/user-2.PNG" alt="logo" style="width:6%; position:fixed; top:5.5%; left:90%;" >
</div>
</header>

<body>

<div id="sidenav"> <!-- Side bar-->
  <ul>
<li> <img class="sideimg" src="<?php echo url('/'); ?>/images/menu.png" alt="" onclick="openNav()" > </li>
<div id="sideLink">
<li> <a href="#"><img class="sideimg" src="<?php echo url('/'); ?>/images/home.png" alt="" > </a> </li>
<li> <a href="#"><img class="sideimg" src="<?php echo url('/'); ?>/images/search.png" alt="" > </a> </li>
<li> <a href="#"><img class="sideimg" src="<?php echo url('/'); ?>/images/add.png" alt="" > </a> </li>
</div>
</ul>
</div>

@yield('content')

</body>
<footer>
  <br><br><hr>
</footer>
</html>

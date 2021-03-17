<!DOCType html>
<html>
<head>
<link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
<script src="{{ asset('/js/nfc.js')}}"></script>
</head>

<header id="rectangle-9">
<div>
<img class="logo" src="<?php echo url('/'); ?>/images/logo.PNG" alt="logo" style="width:10%; top:2%; left:1%;" >
</div>
</header>

<body>
  <div class="LogIn">
    <br>
<p>
  <button class="LogInButton" onclick="readTag()">Read NFC tag</button>
  
</p>
<pre id="log"></pre>
<br>
</div>
</body>
</html>

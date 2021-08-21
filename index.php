<!-- Created by furqan -->

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hurtless free fire</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style type="text/css">
div{
border-radius:5px;
background-color:rgba(0,0,0,0.3);
width:auto;
height:auto;
padding-top:5px;
padding-bottom:2px;
box-shadow:2px 8px 15px rgba(0,0,0,0.2);
}
pre{width:auto;
background:white;
border-radius:5px;
padding:5px;
height:auto;
margin:5px;}
.i{left:10px;position:relative; border-radius:5px;
font-weight:800; font-size:5mm; border:thick solid rgba(100,100,100,0.9); padding:5px;}
</style>
</head>
<body>
<h3 align="center">Click the copy icon to hurtless ff name</h3>
<hr>
<h4 >Change the name change the game</h4>
<hr>
<div class="box">

<i class="i fa fa-copy" onclick="copy()"></i>
<pre style="display:none;" id="code" contenteditable="true">
&#688;&#737;&#10047;N&#945;me&#10047;&#4048;</pre>






</div>

<script type="text/javascript">
function copy() {
const text = document.getElementById("code");
const f = document.createElement("textarea" );
f.innerHTML = text.innerHTML;
document.body.appendChild(f);
f.select();
document.execCommand("copy");
document.body.removeChild( f);
alert("Copied");
navigator.vibrate(100);
}
</script>


</body>
</html>


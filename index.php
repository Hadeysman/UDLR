<?php

require_once('./mobile_device_detect.php');



$detect = new Mobile_Detect;

if(!$detect->isMobile()) header("Location: ./Redirect.html")

?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<title>UDLR - Up, Down, Left, Right</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/jquery.mobile.min.css">

<script src="cordova.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mobile.min.js"></script>

<style type="text/css">
<!--
img.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
button {
	padding-top: 50px;
	margin: 50px;
}


-->
</style>

</head>

<body>

<div data-role="page" data-theme="a">


  <div data-role="header" data-fullscreen="true">
    <h1>UDLR</h1>
  </div>

  <div data-role=content>

    <div data-role=collapsible>
      <h1>Food Menu : click to open / close</h1>
      <p> Steak </p>
      <p> Duck </p>
      <p> Crab Legs </p>
    </div>
    <div data-role=collapsible>
      <h1>Drink Menu : click to open / close</h1>
      <p> Beer </p>
      <p> Wine </p>
      <p> Bourbon </p>
    </div>

    <div align="center">
    	<img src="images/ps_logo.gif" alt="a logo" width="271" height="236" class="center">
    </div>

	<div>
		<button class="b1">change this button</button>
    </div>

	<div>
		<a href="#page2">
			<button>go to page 2</button>
		</a>
    </div>


  </div>

  <div data-role="footer" data-position="fixed" data-fullscreen="true">
    <h4>Rick Mitchell - Page 1</h4>
  </div>

</div>

<div data-role="page" data-theme="b" id="page2" data-title="This is the second page" data-add-back-btn="true" >

  <div data-role="header" data-fullscreen="true">
    <h1>Sample with Splash and Icon</h1>
  </div>

  <div data-role=content>

   <h3> A table with alternated rows </h3>
    <div class=ui-grid-b>
      <div class="ui-block-a ui-bar-a">Elem 1.1</div>
      <div class="ui-block-b ui-bar-a">Elem 1.2</div>
      <div class="ui-block-c ui-bar-a">Elem 1.3</div>
      <div class="ui-block-a ui-bar-b">Elem 2.1</div>
      <div class="ui-block-b ui-bar-b">Elem 2.2</div>
      <div class="ui-block-c ui-bar-b">Elem 2.3</div>
      <div class="ui-block-a ui-bar-c">Elem 3.1</div>
      <div class="ui-block-b ui-bar-c">Elem 3.2</div>
      <div class="ui-block-c ui-bar-c">Elem 3.3</div>
      <div class="ui-block-a ui-bar-d">Elem 4.1</div>
      <div class="ui-block-b ui-bar-d">Elem 4.2</div>
      <div class="ui-block-c ui-bar-d">Elem 4.3</div>
      <div class="ui-block-a ui-bar-e">Elem 5.1</div>
      <div class="ui-block-b ui-bar-e">Elem 5.2</div>
      <div class="ui-block-c ui-bar-e">Elem 5.3</div>
      <div class="ui-block-a ui-bar-f">Elem 5.1</div>
      <div class="ui-block-b ui-bar-f">Elem 5.2</div>
      <div class="ui-block-c ui-bar-f">Elem 5.3</div>
    </div>

  </div>

  <div data-role="footer" data-position="fixed" data-fullscreen="true">
    <h4>Rick Mitchell - Page 2</h4>
  </div>

</div>
</body>
</html>

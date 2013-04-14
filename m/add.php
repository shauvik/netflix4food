<?php
include_once("common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
        <script src="jquery-1.7.2.min.js"></script>
        <script src="jquery.mobile-1.2.0.min.js"></script>
   </head>
   <body class="ui-mobile-viewport ui-overlay-c">
<div data-role="page" data-corners="false" data-url="/resources/dialog/dialog8.html" tabindex="0" class="ui-page ui-body-c ui-page-active" style="min-height: 642px;">
	
		<div data-role="header" class="ui-header ui-bar-a" role="banner">
			<h1 class="ui-title" role="heading" aria-level="1">Confirmation</h1>
		</div>

		<div data-role="content" class="ui-content" role="main">
			<img src="/m/upload/tang.jpg"/>
			<h3>Oranges</h3>
			<h4>Citrus Fruit, Qty Available:</h4>
			<h4>Price: $0.5 each</h4>
			<div data-role="fieldcontain">
	            <label for="textinput1">
	                Quantity
	            </label>
	            <input name="quantity" id="textinput1" placeholder="" value="" type="text">
        	</div>
			<a href="#" data-role="button" data-rel="back" data-theme="b" data-corners="true" data-shadow="true" 
			data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-shadow ui-btn-corner-all ui-btn-up-b">
			<span class="ui-btn-inner"><span class="ui-btn-text">Order</span></span></a>       
		</div>
	</div>

 </body>
</html>
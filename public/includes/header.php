<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	
	<style>
		@import url('/includes/static/styles/default.css');
	</style>
	
	<script type="text/javascript" src='/includes/static/javascript/jquery/jquery.js'></script>	
	<script type="text/javascript" src='/includes/static/javascript/jquery/jquery.site.js'></script>		
</head>

<body>

<div class="header">
	<div class="logo">SUB100</div>
	<nav>
	<ul class="ribbon">
      	<li><a href="/"><span>Home</span></a></li>
		<li><a href="/contact"><span>Contact</span></a></li>
		<li><a href="/nowhere"><span>Error 404</span></a></li>  
	</ul>
	</nav>
</div><!--/header-->



<div class="content">



<div class='inner-content'><div class='text'>
<?php
if (isset($this->header_text)) {
	echo "<h2>$this->header_text</h2>";
}
?>

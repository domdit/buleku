<!DOCTYPE html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" 
      type="image/png" 
      href="favicon.ico">

<title>Manchu Dictionary</title>

<!--LANGUAGE FORMATTING-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- BOOTSTRAP-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!--MY STYLES-->
<link rel="stylesheet" href="style.css">

<!--JQUERY-->
<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- Dictionary -->
<script src="dict.js" type="text/javascript" ></script>

	
</head>

<body>

<div class="head" style="width:auto;">

<!--title image-->
	<center> 
		<img src="img/title.png" class="title"> 
	</center>

<!--Search Bar-->
	<div class="row">
		<div class="col-xs-1"></div>
			<div class="col-xs-10">
				<center>
			
				<form onsubmit="return false">
					<input type="text" name="entry" id="input" size="30" placeholder="Input Manchu, English or Chinese" >
					<input type="submit" value="Search" onClick="searchXML()" id="submit" >			
				</form>
			
				</center>
			</div>
		<div class="col-xs-1"></div>
	</div>
</div>

<center>
	<span class="small" style="margin-right:20px;">
		When searching in Manchu: Ū = V and Š = X 
	</span>
</center>

<!-- Results Nav-->
<div id="result-nav">
	<div class="row">
		<div class="col-xs-1"></div>
			<div class="col-xs-10">
			<br>
				<ul class="nav nav-tabs" style="display:none;" id="search-nav">
					<li class="active"><a href="#" data-toggle="tab" OnClick="normanTab()">NORM</a></li>
					<li><a href="#" data-toggle="tab" OnClick="ajiuTab()">MNIGIBB</a></li>
					<li><a href="#" data-toggle="tab" OnClick="pentTab()">PENT</a></li>
				</ul>
			<br>
			</div>
	</div>
</div>

<!-- Results Divs-->
<div class="row">
	<div class="col-xs-1"></div>
		<div class="col-xs-10">
			<div id="norman-results" class="results"></div>
		</div>
	<div class="col-xs-1"></div>
</div>	

<div class="row">
	<div class="col-xs-1"></div>
		<div class="col-xs-10">
			<div id="ajiu-results" class="results" style="display:none;">
			</div>
		</div>
	<div class="col-xs-1"></div>
</div>

<div class="row">
	<div class="col-xs-1"></div>
		<div class="col-xs-10">
			<div id="pent-results" class="results" style="display:none;">
			</div>
		</div>
	<div class="col-xs-1"></div>
</div>

</body>




<!--Javscript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

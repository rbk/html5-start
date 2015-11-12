<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Change port here and in Gruntfile if necessary -->
	<script src="http://yourdomain.com:123456/livereload.js"></script>
</head>
<body>
<div class="container">
<div class="row">
	<header>
		<h1>Basic Grid Layouts</h1>
	</header>
</div>
<!--
	Sublime Text Tab Snippets VIA Emmet::

	.container-fluid>.row>.col-md-4.col-sm-4*3
	.container-fluid>.row>.col-md-3.col-sm-3*4
	.container-fluid>.row>.col-md-6.col-sm-6*2
 -->
				
				<div class="grid-example">
					<div class="row">
				 		<h2>Full Width</h2>
						<div class="col-md-12 col-sm-12"></div>
					</div>
					<div class="row">
				 		<h2>Sidebar Right</h2>
						<div class="col-md-4 col-sm-4"></div>
						<div class="col-md-8 col-sm-8"></div>
					</div>
					<div class="row">
				 		<h2>Sidebar Left</h2>
						<div class="col-md-8 col-sm-8"></div>
						<div class="col-md-4 col-sm-4"></div>
					</div>
					<div class="row">
						<h2>Halves</h2>
						<div class="col-md-6 col-sm-6"></div>
						<div class="col-md-6 col-sm-6"></div>
					</div>
					<div class="row">
				 		<h2>Thirds</h2>
						<div class="col-md-4 col-sm-4"></div>
						<div class="col-md-4 col-sm-4"></div>
						<div class="col-md-4 col-sm-4"></div>
					</div>
					<div class="row">
						<h2>Fourths</h2>
						<div class="col-md-3 col-sm-3"></div>
						<div class="col-md-3 col-sm-3"></div>
						<div class="col-md-3 col-sm-3"></div>
						<div class="col-md-3 col-sm-3"></div>
					</div>
					<div class="row">
						<h2>Sixths</h2>
						<div class="col-md-2 col-sm-2"></div>
						<div class="col-md-2 col-sm-2"></div>
						<div class="col-md-2 col-sm-2"></div>
						<div class="col-md-2 col-sm-2"></div>
						<div class="col-md-2 col-sm-2"></div>
						<div class="col-md-2 col-sm-2"></div>
					</div>

				</div>

	<script>

		// var divs = document.getElementsByClassName('row');
		// console.log( divs[0].children )
		// for(var i=0;i<divs.length;i++){
		// 	// divs[]
		// 	if( divs[i].children.length ){
		// 		for( var c=0;c<divs[i].children.length;c++ ){
		// 			divs[i].children[c].setAttribute('style', 'height: 20px;background-color:#376D8E;border:1px solid #222');
		// 			console.log( divs[i].children[c] )
		// 		}
		// 	}
		// }

		var cols = document.querySelectorAll('.grid-example .row [class^="c"]');
		for( var c=0;c<cols.length;c++ ){
			cols[c].setAttribute('style', 'height: 40px;background-color:#557488;border-left:1px solid #fff;border-right:1px solid #fff');
		}
		console.log( cols )
 
	</script>

</div>

<div class="container hide">
	<div class="row">
		<div class="col-md-12">
<textarea name="" class="form-control" cols="30" rows="10">
<header>
	<h1>Basic Grid Layouts</h1>
</header>
<nav></nav>
<main role="content" id="content"></main>
<footer></footer>
</textarea>
			
		</div>
	</div>
</div>
<script src="js/app.js"></script>
</body>
</html>

<html>

<head>


	<title>This is my awesome first bootstrap page</title>
	<meta name="description" content="Just a simple description of this file">
	<meta charset="utf-8">
	<meta name="author" content="Your Name Here">

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">


</head>

<body>

	<div class="container">

		<?php

		$fruits[0] = "bananas";
		$fruits[1] = "strawberries";
		$fruits[3] = "apples";
		$fruits[4] = "grapes";
		$fruits[5] = "peaches";

		$fruitColors['bananas'] = "yellow";
		$fruitColors['strawberries'] = "red" ;
		$fruitsColors['apples'] = "green";
		$fruitsColors['grapes'] = "green";
		$fruitColors['peaches'] = "red"


		?>


		<div class="row">

			<div class="span12">

				<h1>It's all about fruits</h1>

			</div>

		</div>

		<div class="row">

			<div class="span4">

				<h2> Insert Fruit </h2>

				<form class="form">
					<fieldset>
						<label>Fruit Name</label>
	    				<input type="text" placeholder="Type your fruit name">
	    				 <button type="submit" class="btn">Submit</button>
    				 </fieldset>
    				 <!-- Append to the vector -->
				</form>

			</div>

			<div class="span4">

				<h2> Insert Fruit Colors</h2>


				<form class="form">
					<fieldset>
						<label>Fruit Color</label>
	    				<input type="text" placeholder="Type fruit collors in general">
	    				 <button type="submit" class="btn">Submit</button>
    				 </fieldset>
    				 <!-- Append to the vector -->
				</form>

			</div>

			<div class="span4">

				<img src="http://3.bp.blogspot.com/-4mYc_So3-Wc/UEqIMyDnm8I/AAAAAAAAAoU/zdYC3h6YCUE/s1600/fruits.jpg" class="img-rounded">

			</div>


		</div>

		<div class="row">

			<div class="span12">
				<p><button class="btn btn-warning btn-large" type="button">Print me some beautifull things</button></p>

				<?php
				
					echo $fruits

				?>
			</div>

		</div>


	</div>

	

</body>

</html>

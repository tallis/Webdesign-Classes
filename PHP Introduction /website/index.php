<html>

<?php include 'header.php'; ?>


<body>

	<div class="container">



		<div class="row">

			<div class="span12">

				<h1>It's all about fruits</h1>

			</div>

		</div>

		<div class="row">

			<div class="span4">

				<h2> Insert Fruit </h2>

				<form class="form" action="insertFruit()">
					<fieldset>
						<label>Fruit Name and Color</label>
	    				<input type="text" placeholder="Type your fruit name" name="fruitName">
	    				<input type="text" placeholder="Type fruit colors in general" name="fruitColor">
	    				<br>
	    				 <button type="submit" class="btn">Submit</button>
    				 </fieldset>
				</form>

			</div>

			<div class="span4">
				<h2> Available Fruits </h2>
			
				<!-- Function to Query the database -->



			</div>

			<div class="span4">

				<img src="http://3.bp.blogspot.com/-4mYc_So3-Wc/UEqIMyDnm8I/AAAAAAAAAoU/zdYC3h6YCUE/s1600/fruits.jpg" class="img-rounded">

			</div>


		</div>

		<div class="row">

			<div class="span12">
				<p><button class="btn btn-warning btn-large" type="button">Print me some beautifull things</button></p>

				
				
			</div>

		</div>


	</div>

	

</body>

</html>

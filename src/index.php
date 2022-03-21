<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="header">
		
		<nav>
			<ul id="menu">
				
			</ul>
		</nav>
	</div>
	<div id="main">
		<div id="productForm">
			<!-- <form action="ajax.php" method="post"> -->
				<label for="productId">ID <input type="text" name="productId" id="productId" > </label>
				<label for="productName">NAME <input type="text" name="productName" id="productName" > </label>
				<label for="productPrice">PRICE <input type="text" name="productPrice" id="productPrice" > </label>
				
				<p>
					<input type="submit" name= "submit" id="submit" value="Submit">
				</p>
			<!-- </form> -->
				
			
			
		</div>

		<div id="cart">
			
		</div>
	</div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				
			</ul>
		</nav>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="script.js"></script>
</body>
</html>
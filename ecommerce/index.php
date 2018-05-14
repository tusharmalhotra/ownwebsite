<!DOCTYPE>
<html>
	<head>
		<title> Malhotra Box Maker </title>
		<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
	
	<body>
		<div class="main_wrapper">
			<div class="header_wrapper">
				<img id="logo" src="images/Logo.jpg" height="100px" width="100px" />
				<img id="banners" src="images/Logo.jpg" height="100px" width="100px" />
				
			</div>
			
			<div class="menubar">
				<ul id="menu">
					<li> <a href="#">Home</a> </li>
					<li> <a href="#">All Product</a> </li>
					<li> <a href="#">My Account</a> </li>
					<li> <a href="#">Shopping Cart</a> </li>
				</ul>
				
				<div id="form">
					<form method="get" action="result.php" enctype="multipart/from-data">
						<input type="text" name="user_query" placeholder="Search a Product" />
						<input type="submit" name="search" value="Search" />
					</form>
				</div>
			</div>
			
			<div class="content_wrapper">
				<div id="sidebar">	
					<div id="sidebar_title">
						Categories
					</div>
					
					<ul id="cats">
						<li> <a href="#">Dry Fruit Box</a> </li>
						<li> <a href="#">Chocolate Box</a> </li>
						<li> <a href="#">Dry Fruit Box</a> </li>
						<li> <a href="#">Dry Fruit Box</a> </li>
					</ul>
					
				</div>
			
				<div id="content_area">
					This is sidebar
				</div>
			</div>
			
			<div id="footer">
				content area
			</div>
		</div>
	
	
	</body>
</html>

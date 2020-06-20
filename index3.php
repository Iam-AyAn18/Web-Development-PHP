<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE HTML>
	<head>
		<title>Videos Website Template | Home </title>

				<link href="css/style1.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Videos</a></li>
							<li><a href="categories.html">Categories</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
					<div class="sidebar-box">
						<h2>Your Favorites</h2>
						<a href="#"><img src="images/allbum.jpg" title="image-name" /></a>
						<h3>Welcome to the songs you liked!!</h3>
						<div class="rate">
							<b style="width:100%"> </b> 
							<a href="#">Rate 1/5</a>
							<a href="#">Rate 2/5</a>
							<a href="#">Rate 3/5</a>
							<a href="#">Rate 4/5</a>
							<a href="#">Rate 5/5</a>
							<div class="clear"> </div>
						</div>
						<input type="button" value="Rate it" />					
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Collections of videos</h3>
					</div>
					<div class="right-content-heading-right">
						<div class="social-icons">
			                <ul>
			                    <li><a class="facebook" href="#" target="_blank"> </a></li>
			                    <li><a class="twitter" href="#" target="_blank"></a></li>
			                    <li><a class="googleplus" href="#" target="_blank"></a></li>
			                    <li><a class="pinterest" href="#" target="_blank"></a></li>
			                    <li><a class="dribbble" href="#" target="_blank"></a></li>
			                    <li><a class="vimeo" href="#" target="_blank"></a></li>
			                </ul>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="content-grids">
					<div class="content-grid">
						<a href="singlepage.php"><img src="images/gridallbum1.png" title="allbum-name" /></a>
						<h3>Pallo Latke</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage2.php"><img src="images/gridallbum2.png" title="allbum-name" /></a>
						<h3>Breaking The Habbit</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage2.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage3.php"><img src="images/gridallbum3.png" title="allbum-name" /></a>
						<h3>Ghar Bari</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage3.php">Watch now</a>
					</div>
					<div class="content-grid last-grid">
						<a href="singlepage4.php"><img src="images/gridallbum4.png" title="allbum-name" /></a>
						<h3>Numb.</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage4.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage5.php"><img src="images/gridallbum5.png" title="allbum-name" /></a>
						<h3>That Spidey Life</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage5.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage6.php"><img src="images/gridallbum6.png" title="allbum-name" /></a>
						<h3>I am so Alone</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage6.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage7.php"><img src="images/gridallbum7.png" title="allbum-name" /></a>
						<h3>one Republic</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage7.php">Watch now</a>
					</div>
					<div class="content-grid last-grid">
						<a href="singlepage8.php"><img src="images/gridallbum8.png" title="allbum-name" /></a>
						<h3>the Scientist</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage8.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage9.php"><img src="images/gridallbum9.png" title="allbum-name" /></a>
						<h3>Beileiver Spidey version</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage9.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage10.php"><img src="images/gridallbum10.png" title="allbum-name" /></a>
						<h3>Believer Imagine Dragons</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage10.php">Watch now</a>
					</div>
					<div class="content-grid">
						<a href="singlepage11.php"><img src="images/gridallbum11.png" title="allbum-name" /></a>
						<h3>Thunder Imagine Dragons</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepag11e.php">Watch now</a>
					</div>
					<div class="content-grid last-grid">
						<a href="singlepage.php"><img src="images/gridallbum1.png" title="allbum-name" /></a>
						<h3>Pallo Latke</h3>
						<ul>
							<li><a href="#"><img src="images/likes.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/views.png" title="image-name" /></a></li>
							<li><a href="#"><img src="images/link.png" title="image-name" /></a></li>
						</ul>
						<a class="button" href="singlepage.php">Watch now</a>
					</div>
					<div class="clear"> </div>
					<!---start-pagenation----->
					<div class="pagenation">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
									<div class="clear"> </div>
				<div class="share-artical">
		  				<h3> Also share on</h3>
		  					<ul>
		  						<li><a href="#"><img src="images/facebook.png" title="facebook">Facebook</a></li>
		  						<li><a href="#"><img src="images/twiter.png" title="Twitter">Twiiter</a></li>
		  						<li><a href="#"><img src="images/in.png" title="linked-in">Linked-in</a></li>
		  						<li><a href="#"><img src="images/google+.png" title="google+">Google+</a></li>
		  						<li><a href="#"><img src="images/pintrest.png" title="pintrest">Pintrest</a></li>
		  						<li><a href="#"><img src="images/rss.png" title="rss">Rss</a></li>
		  					</ul>
		  		</div>
		  		<div class="artical-commentbox">
		  						 	<h3>leave a comment</h3>
		  						 	<div class="table-form">
									<form>

										<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>	
									</form>
									<a href="#">submit comment</a>
								</div>
		  						 </div>
					<div class="clear"> </div>
					<!---End-pagenation----->
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
		<div class="copy-right">
			<p> &copy; 2013 Videos. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>


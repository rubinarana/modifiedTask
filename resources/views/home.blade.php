<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>image</title>
	<style>
	
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			text-align: justify;
		}
		.profileheader{
			width: 100%;
			height: 100vh;
			background-color: #f5f6fa;

		}
		nav{
			width: 100%;
			display: flex;
			height: 50px;
			line-height: 50px;
			background-color: black;
			color: white;
 
		}
		.logo{
			width: 70%;
			height: 50px;
		}
		.logo h1{
			padding-left: 20px;
		}
		.navbarmenu{
			width: 30%;
			height: 50px;
		}
		.navbarmenu ul{
			display: flex;
			flex-direction: row;
			justify-content: space-around;
		}
		.navbarmenu ul li{
			list-style: none;
			font-weight: bold;
			font-size: 18px;
		}
		.navbarmenu ul li a{
			text-decoration: none;
			color: white;
		}
		.profilebody{
			display: flex;
		}
		.leftside{
			width: 45%;
			height: auto;
		}
		.leftside img{
			width: 90%;
			height: 100%;
		}
		.rightside{
			width: 60%;
			margin-top: 80px;
			margin-right: 20px;
		}
		.rightside h1{
			font-size: 50px;
			font-weight: 900;
		}
		.rightside p{
			font-size: 20px;
			padding:30px 0;
		}
		.media{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.media a{
			height: 100px;
			width: 100px;
			border-radius: 50px;
			background-color: #f5f6fa;
			text-align: center;
			margin: 10px;
			box-shadow: 1px 4px 2px 2px #dcdde1;
			line-height: 120px;
		}
		.media a i{
			transition: all 0.3s linear;
		}
		.media a:hover i{
			transform: scale(1.4);
		}
		.fa-github{
			color: black;
		}
		.fa-linkedin{
			color:  #2B60DE;
		}
		.fa-facebook{
			color: blue;
		}
	</style>
</head>
<body>

<header class="profileheader">
	<nav>
		<div class="logo">
			<h1>RUBINARANA</h1>
		</div>
		<div class="navbarmenu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Project</a></li>
			</ul>
		</div>
	</nav>

	<div class="profilebody">
		<div class="leftside">
			<img src="image/profile1.png ">
		</div>
		<div class="rightside">
			<h1>RUBINA RANA</h1>
			<p>I am Rubina Rana. I am student currently doing my bachelors degree in Bsc. CSIT(Computer Science and Internet Technology) from Asian College Of Higher Studies. Beside this, I love sports and do some sketches during my free time.</p>
			<hr style="border: 0px;height: 60px; width: 100%; background-image: url(image/type_7.png);background-repeat:repeat-x;">
			<h2>PERSONAL INFORMATION</h2>
			    <table class="table">
				    <tbody>
				      <tr>
				        <td><i class="fa fa-mobile fa-2x"></i>&ensp;</td>
				        <td>9860294884</td>
				      </tr>
				      <tr>
				      	<td><i class="fa fa-envelope fa-2x"></i>&ensp;</td>
				      	<td><a href="#" target="_blank">rubinaranamgr@gmail.com</a></td>
				      	</td>
				      </tr>
				      <tr>
				      	<td><i class="fa fa-map-marker fa-2x"></i>&ensp;</td>
				      	<td>Handigaun, Kathmandu</td>
				      	</td>
				      </tr>
				    </tbody>
				</table>
		</div>
	</div><br>
	<hr style="border: 0px;height: 60px; width: 100%; background-image: url(image/type_7.png);background-repeat:repeat-x;">
	<div class="footer">
		<h2 style="text-align: center;">CONTACT</h2>
		<div class="media" style="background-color: #f5f6fa;">
			<a href="https://www.facebook.com/rubina.magar.71" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
			<a href="https://github.com/rubinarana" target="_blank"><i class="fa fa-github fa-3x"></i></a>
			<a href="https://www.linkedin.com/in/rubina-rana-396a7016a/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
		</div>
	</div>
	</header>
</body>
</html>
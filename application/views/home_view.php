<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<style>
	body {
		margin: 0px;
		padding: 0px;
		background: white;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 12pt;
		font-weight: 300;
		color: #000000;
	}

	#header-wrapper {
		overflow: hidden;
		padding: 5em 0em;
		background: #B0C4DE no-repeat center;
		background-size: cover;
	}

	#menu ul {
		text-align: center;
	}

	#menu li {
		display: inline-block;
	}

	#menu li a,
	#menu li span {
		display: inline-block;
		margin-left: 0.50em;
		padding: 1em 1.5em;
		letter-spacing: 0.20em;
		font-size: 0.90em;
		text-decoration: none;
		font-weight: 600;
		text-transform: uppercase;
		outline: 0;
		color: #FFF;
	}

	#menu .current_page_item a {
		background: #e97874;
		color: #FFF;
	}

	.h :hover {
		background-color: rgb(230, 243, 255, .5);
		cursor: pointer;
	}

	#wrapper1 {
		background: #242424;
	}

	#welcome {
		overflow: hidden;
		padding: 4em 0em;
		text-align: center;
		color: #e1e1d0;
	}

	#logo {
		padding: 5em 0em;
		text-align: center;

	}

	#logo h1 {
		display: inline-block;
		margin-bottom: 0.50em;
		padding: 0.20em 1em;
		background: #e5ecf4;
		font-size: 3.5em;
		border-radius: 15px;
		text-decoration: none;
		color: #8c8c8c;
	}

</style>

<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="<?=base_url('index.php/Login/index')?>">Home</a></li>
					<li class="h"><a href="<?=base_url('index.php/Home/profil')?>">My Profile</a></li>
					<li class="h"><a href="<?=base_url('index.php/Login/logout')?>">Log out</a></li>
				</ul>
			</div>
			<div id="logo">
				<h1>Welcome,
					<?php echo $_SESSION['username'];?>
				</h1>
			</div>
		</div>
	</div>
	<div id="wrapper1">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Welcome to our website</h2>
			</div>
		</div>
	</div>
	<div class="wrapper2">

	</div>
	<!-- <h1 style="color:skyblue; text-align:left; font-size:10mm; margin-top:97px; margin-left:12px; font-family:sans-serif;"> Selamat Datang $nama_lengkap?>
<br> Berperilakulah seperti  $jenis_kelamin?></h1> -->
</body>

</html>

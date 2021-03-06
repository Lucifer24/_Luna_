<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
	<title>Luna - Login</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="dramacss.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a href="#" class="navbar-brand">Krieva</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Settings</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Profile</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Help</a>
					</li>
				</ul>
			</div>
		</nav>	
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-10" style="top: 60px;">
				<main>
					<section>
						<h1>Hello World</h1>
					</section>
				</main>
			</div>
			<nav class="sidebar col-2">
				<ul class="nav nav-pills flex-column">
                    <?php
                    require_once('config.php');
                    $query = "SELECT list FROM drama";
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo '<li class="nav-item"> <a href="#" class="nav-link">' . $row['list'] . '</a></li>';
                        }
                    }
                    ?>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>User Profile</title>
</head>
<body>
<?php if($this->facebook->logged_in()):
	$user = $this->facebook->getProfile();?>
<div class="nav">
	<ul>
		
			<img src="<?=$this->facebook->getDp();?>" class="img-thumbnail" alt="Cinque Terre" width="30" height="30"> 
		
			<?=$user['name'];?>

	<ul>
	<ul class="navbar-brand pull-right">
		<?=anchor(base_url('index.php/fb/logout'),'Logout', array("role" => "button", "class" => "btn btn-danger"));?>
	</ul>
</nav>"
<div class="container">
	<h1>Welcome! </h1>
	<hr />
	<div class="row">
		<div class="col-sm-6">
			<img src="<?=$this->facebook->getDp();?>" class="img-circle" alt="Facebook Profile Picture"> 	
		</div>
		<div class="col-sm-6">
			<p class="lead">
				Hello <strong><?=$user['name'];?></strong>, You have are browsing this website with your facebook account now. 
			</p>
		</div>


</div>
<?php endif;?>
</body>
</html>
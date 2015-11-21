<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Profile</title>
</head>
<body>
	
<pre>
<?php
	 if($this->facebook->logged_in()):
	$user = $this->facebook->getProfile();

	/**
	 * 	$this->facebook->updateStatus("Hello Ahsan.. This is test");
	*	print_r($this->facebook->getPosts());
	*	$getFriends = $this->facebook->getFriends();
	*	print_r($getFriends);
	*	$this->facebook->uploadImage('Uploading test file', '/home/projects/Google.jpg');
	 */
	
?>
	

	
	Welcome! <?=$user['name'];?>



	
	<br/>
	</pre>
	Click <a href="<?=base_url('index.php/fb/logout');?>"> Here </a> To logout


<?php endif;?>
</body>
</html>
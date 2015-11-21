<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	//facebook api information goes here


	$config['api_id']       = 'key here';
	$config['api_secret']   = 'sceret here';
	$config['redirect_url'] = base_url('index.php/fb/user_login');  //change this if you are not using my fb controller
	$config['logout_url']   = base_url('index.php/fb/');          //User will be redirected here when he logs out.
	$config['permissions']  = array(
                                        'email', 
                                        'public_profile'
                                        

                                      );

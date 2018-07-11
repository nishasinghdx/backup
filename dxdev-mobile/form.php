<?php
session_start();

if (!empty($_GET['q'])) 
{
    if (empty($_SESSION['captcha']) || trim(strtolower($_GET['q'])) != $_SESSION['captcha']) 
	{
		echo 'sorry';
		
    } 
	else 
	{
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		
		echo 'ok';
	
	}
}
    
}
?>
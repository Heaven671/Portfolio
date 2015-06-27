<?php
function flash(){
	if(isset($_SESSION['Flash'])){
		extract($_SESSION['Flash']);
		unset($_SESSION['Flash']);
	if($type == "danger"){
		return "<div class='alert alert-dismissable alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'>&nbsp;&nbsp;</span>$message</div>";
	}
	return "<div class='alert alert-dismissable alert-$type'>$message</div>";
	}
}

function setFlash($message, $type = 'success'){
	$_SESSION['Flash']['message'] = $message;
	$_SESSION['Flash']['type'] = $type;
}
?>

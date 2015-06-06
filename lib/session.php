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
//  <button type="button" class="close" data-dismiss="alert">×</button>
//  <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
}

function setFlash($message, $type = 'success'){
	$_SESSION['Flash']['message'] = $message;
	$_SESSION['Flash']['type'] = $type;
}
?>


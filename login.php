<?php
$auth = 0;
include 'lib/includes.php';

flash();

//TAITEMENT

if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $db->quote($_POST['username']);
	$password = sha1($_POST['password']);
	$select = $db->query("SELECT * FROM users WHERE username=$username AND password='$password'");
	if($select->rowCount() > 0){
		$_SESSION['Auth'] = $select->fetch();
		setFlash('Tu es maintenant connecté', 'success');
		header('Location:' . WEBROOT . 'admin/index.php');
		die();
	} elseif ($_POST['username'] == null || $_POST['password'] == null){
		setFlash('Pseudo ou nom d\'utilisateur incorrect', 'danger');
	} else if ($_POST['username'] != null || $_POST['password'] != null){
		setFlash('Pseudo ou nom d\'utilisateur incorrect', 'danger');
	}
}

include 'partials/header.php';
?>

<link href="<?= WEBROOT; ?>css/login.css" type='text/css' rel="stylesheet">

<div id="wrapper">
	<div id="box">
		<form action="#" method="post">
 		 <div class="header">
    <h4>Connexion administrateur</h4>

 		 </div>
  <h6>PSEUDO :</h6>
<input type='text' placeholder='exemple' id='username' name='username'>
  <h6>MOT DE PASSE :</h6>
  <input type="password" placeholder="******" id='password' name='password'>
  <input type="submit">

  </form>
	</div>
</div>

<?php include 'partials/footer.php'; ?>

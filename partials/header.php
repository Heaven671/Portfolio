<!DOCTYPE html>
<html>
<head>
	<title>Schawnn | Portfolio</title>
	<meta charset="utf-8" />
  <link href="<?= WEBROOT; ?>css/options.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/site.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/login.css" type='text/css' rel="stylesheet">
  <script src="../js/bootstrap.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
 <body>
  <nav>
  <select class="select" onchange="location = this.options[this.selectIndex].value">
    <option value="index.php">Accueil</option>
    <option value="<?= WEBROOT; ?>pages/realisations.php">Mes réalisations</option>
    <option value="<?= WEBROOT; ?>pages/projets.php">Mes projets</option>
    <option value="css/style.css">CV</option>
    <option value="<?= WEBROOT; ?>pages/contact.php">Contact</option>
    <option value="<?= WEBROOT; ?>admin/index.php">Admin</option>
  </select>
    <ul>
      <li class="normal">
        <a class="nav" href="<?= WEBROOT; ?>index.php">Accueil</a>
      </li>
      <li class="normal">
        <a class="nav" href="<?= WEBROOT; ?>pages/realisations.php">Mes réalisations</a>
      </li>
      <li class="normal">
        <a class="nav" href="<?= WEBROOT; ?>pages/projets.php">Mes projets</a>
      </li>
<!--      <li class="normal">
        <a class="nav" href="<?= WEBROOT; ?>cv/CV_2014.pdf">CV</a>
      </li> -->
      <li class="normal">
        <a class="nav" href="<?= WEBROOT; ?>pages/contact.php">Contact</a>
      </li>
      <li class="normal">
        <a class="nav-right" href="<?= WEBROOT; ?>admin/index.php">Admin</a>
      </li>
    </ul>
  </nav><br/>
</body>

  <?= flash(); ?>
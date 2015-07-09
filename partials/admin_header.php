<!DOCTYPE html>
<html>
<head>
	<title>Administration | Schawnn</title>
	<meta charset="utf-8"/>
	<link href="<?= WEBROOT; ?>css/bootstrap.min.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/bootstrap.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/options.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/admin.css" type='text/css' rel="stylesheet">
	<link href="<?= WEBROOT; ?>css/site.css" type='text/css' rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
  <nav class="nav navbar-nav">
  <select class="select" onchange="location = this.options[this.selectIndex].value">
    <option value="<?= WEBROOT; ?>admin/index.php">Accueil</option>
    <option value="<?= WEBROOT; ?>admin/category.php" href="<?= WEBROOT; ?>admin/category.php">Catégories</option>
    <option value="<?= WEBROOT; ?>admin/work.php" href="<?= WEBROOT; ?>admin/work.php">Réalisations</option>
    <option value="<?= WEBROOT; ?>index.php" href="<?= WEBROOT; ?>index.php">Retour au site</option>
    <option value="<?= WEBROOT; ?>logout.php" href="<?= WEBROOT; ?>logout.php">Déconnexion</option>
  </select>
    <ul>
      <li>
        <a class="nav" href="<?= WEBROOT; ?>admin/index.php">SchawnnDev</a>
      </li>
			<li>
				<a class="nav" href="<?= WEBROOT; ?>admin/category.php">Catégories</a>
			</li>
      <li>
        <a class="nav" href="<?= WEBROOT; ?>admin/work.php">Réalisations</a>
      </li>
      <li>
        <a class="nav-right" href="<?= WEBROOT; ?>index.php">Retour au site</a>
      </li>
			<li>
				<a class="nav-right" href="<?= WEBROOT; ?>logout.php">Se déconnecter</a>
			</li>
	  </ul>
  </nav>
</body>

<?= flash(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration | Schawnn</title>
	<meta charset="utf-8"/>
	<link href="<?= WEBROOT; ?>css/bootstrap.min.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/bootstrap.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/options.css" type='text/css' rel="stylesheet">
  <link href="<?= WEBROOT; ?>css/admin.css" type='text/css' rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>

  <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">SchawnnDev</a>
      </div>
        <ul class="nav navbar-nav">
          <li>
              <a href="category.php">Catégories</a>
          </li>
          <li>
            <a href="work.php">Réalisations</a>
          </li>
        </ul>
        <ul class="nav navbar-right">
          <li>
            <a href="<?= WEBROOT; ?>index.php" style="color: #C6E2FF">Retour au site</a>
          </li>
        </ul>
    </div>
 </nav>
<h1>&nbsp;</h1>
</body>


<?= flash(); ?>

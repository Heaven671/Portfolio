<?php
$auth = 0;
include '../lib/includes.php';
include '../partials/header.php';

$color_font_warn="#FF0000";
$color_form_warn="#FFCC66";

if(isset($_POST['submit'])) {
	$erreur="";

	while(list($var,$val)=each($_POST)) {
		if(!is_array($val)) {
			$$var=strip_tags($val);
		}	else {
				while(list($arvar,$arval)=each($val)){
						$$var[$arvar]=strip_tags($arval);
				}
		}
	}

	$f_1=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_1)));
	$f_2=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_2)));
	$f_3=strip_tags(trim($f_3));

	if(strlen($f_1)<2) {
		$erreur.="<li><span class='txterror'>Le champ &laquo; Prénom &raquo; est vide ou incomplet.</span>";
		$errf_1=1;
	} elseif(strlen($f_2)<2) {
		$erreur.="<li><span class='txterror'>Le champ &laquo; Pseudo &raquo; est vide ou incomplet.</span>";
		$errf_2=1;
	}

	if(strlen($f_3)<2) {
		$erreur.="<li><span class='txterror'>Le champ &laquo; Adresse e-mail &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	} else {
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_3)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_3=1;
		}
	}

	if(strlen($f_4)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Message &raquo; est vide ou incomplet.</span>";
		$errf_4=1;
	}

	if($erreur==""){
		$titre="Message de votre site";
		$tete="From:Site@Schawnndev.fr\n";
		$corps.="Prénom : ".$f_1."\n";
		$corps.="Pseudo : ".$f_2."\n";
		$corps.="Adresse e-mail : ".$f_3."\n";
		$corps.="Message : ".$f_4."\n";
		if(mail("contact@schawnndev.fr", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		} else {
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}

?>

<link href="<?= WEBROOT; ?>css/contact.css" type='text/css' rel="stylesheet">

<? if($ok_mail=="true"){ ?>

	<table width='100%' border='0' cellspacing='1' cellpadding='1'>
		<tr><td><span class='txtform'>Le message ci-dessous nous a bien été transmis, et nous vous en remercions.</span></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><tt><? echo nl2br(stripslashes($corps)); ?></tt></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><span class='txtform'>Nous allons y donner suite dans les meilleurs délais.<br>A bientôt.</span></td></tr>
	</table>

<? } else { ?>

<form action='<? echo $PHP_SELF ?>' method='post' name='Form'>
<table width='100%' border='0' cellspacing='1' cellpadding='1'>

<? if($erreur) { ?>
	<tr><td colspan='2' bgcolor='red'><span class='txterror'><font color='white'><b>&nbsp;ERREUR, votre message n'a pas été transmis</b></font></span></td></tr><tr><td colspan='2'><ul><?echo$erreur?></ul></td></tr><?}?>
	<tr><td colspan='2'><span class='txterror'>Les champs marqué d'un * sont obligatoires</span></td></tr>
	<tr><td align='right' width='30%'><span class='txtform'>Prénom* :</span></td><td><input type='text' style='width:200 <?if($errf_1==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_1' value='<?echo stripslashes($f_1);?>' size='24' border='0'></td></tr>
	<tr><td align='right' width='30%'><span class='txtform'>Pseudo* :</span></td><td><input type='text' style='width:200 <?if($errf_2==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_2' value='<?echo stripslashes($f_2);?>' size='24' border='0'></td></tr>
	<tr><td align='right' width='30%'><span class='txtform'>Adresse e-mail* :</span></td><td><input type='text' style='width:200 <?if($errf_3==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_3' value='<?echo stripslashes($f_3);?>' size='24' border='0'></td></tr>
	<tr><td align='right' width='30%'><span class='txtform'>Message* :</span></td><td><textarea style='width:360 <?if($errf_4==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_4' rows='6' cols='40'><?echo$f_4?></textarea></td></tr>
	<tr><td align='right' width='30%'></td><td><input type='submit' name='submit' value='Envoyer' border='0'></td></tr>
</table>
</form>

<? } ?>

<?php include '../partials/footer.php'; ?>

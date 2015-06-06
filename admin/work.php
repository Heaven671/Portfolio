<?php
include '../lib/includes.php';
include '../partials/admin_header.php';

// Suppression

if(isset($_GET['delete'])){
	checkCsrf();
	$id = $db->quote($_GET['delete']);
	$db->query("DELETE FROM works WHERE id=$id");
	setFlash('La catégorie a bien été supprimée');
	header('Location:work.php');
	die();
}

// Categories

$select = $db->query('SELECT id, name, slug, content, category_id FROM works');
$works = $select->fetchAll();

?>
<div class="admin">
	<h1>Les réalisations</h1>
</div>

<p><a href="work_edit.php" class="btn btn-success">Ajouter une nouvelle réalisation</a></p>

<table class="table table-striped table-hove">
	<thead>
		<tr>
		<th>Id</th>
		<th>Nom</th>
		<th>Contenu</th>
		<th>Categorie (id)</th>
		<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($works as $work): ?>
			<tr>
				<td><?= $work['id']; ?></td>
				<td><?= $work['name']; ?></td>
				<td><?= $work['content'] ?></td>
				<td><?= $work['category_id'] ?></td>
				<td>
					<a href="work_edit.php?id=<?= $work['id']; ?>" class="btn btn-info">Editer</a>
					<a href="?delete=<?= $work['id']; ?>&<?= csrf(); ?>" class="btn btn-danger" onclick="return confirm('Es-tu sûr de vouloir supprimer cet article ?');">Supprimer</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>



<?php include '../partials/footer.php'; ?>
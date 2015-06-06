<?php
include '../lib/includes.php';
include '../partials/admin_header.php';

// Suppression

if(isset($_GET['delete'])){
	checkCsrf();
	$id = $db->quote($_GET['delete']);
	$db->query("DELETE FROM categories WHERE id=$id");
	setFlash('La catégorie a bien été supprimée');
	header('Location:category.php');
	die();
}

// Categories

$select = $db->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();

?>
<div class="admin">
	<h1>Les catégories</h1>
</div>

<p><a href="category_edit.php" class="btn btn-success">Ajouter une nouvelle catégorie</a></p>

<table class="table table-striped table-hove">
	<thead>
		<tr>
		<th>Id</th>
		<th>Nom</th>
		<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($categories as $category): ?>
			<tr>
				<td><?= $category['id']; ?></td>
				<td><?= $category['name']; ?></td>
				<td>
					<a href="category_edit.php?id=<?= $category['id']; ?>" class="btn btn-info">Editer</a>
					<a href="?delete=<?= $category['id']; ?>&<?= csrf(); ?>" class="btn btn-danger" onclick="return confirm('Es-tu sûr de vouloir supprimer cet article ?');">Supprimer</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>



<?php include '../partials/footer.php'; ?>
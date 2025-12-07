<h2><?= htmlspecialchars($activity->titre) ?></h2>

<p><strong>Description :</strong> <?= htmlspecialchars($activity->description) ?></p>
<p><strong>Prix :</strong> <?= htmlspecialchars($activity->prix) ?></p>
<p><strong>Date de début :</strong> <?= htmlspecialchars($activity->date_debut) ?></p>
<p><strong>Date de fin :</strong> <?= htmlspecialchars($activity->date_fin) ?></p>
<p><strong>Nombre de places :</strong> <?= htmlspecialchars($activity->nb_places) ?></p>
<p><strong>ID :</strong> <?= htmlspecialchars($activity->id) ?></p>
<a href="/activity">Retour</a>

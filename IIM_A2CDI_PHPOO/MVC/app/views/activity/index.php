
<h2 style="text-align: center; color: #13587dff;">Liste des activités</h2>

<ul>
    <?php foreach ($activities as $activity): ?>
        <li class="activity" style="margin-bottom: 10px;">
            <a style="text-decoration: none; color: #13587dff;" href="/activity/show?id=<?= $activity['id'] ?>">
                <?= htmlspecialchars($activity['nom']) ?>
            </a>    
        </li>
    <?php endforeach; ?>
</ul>
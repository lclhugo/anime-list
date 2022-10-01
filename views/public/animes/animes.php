<!-- show all animes in Database -->

<main>
    <h1>Animes</h1>
    <div class="container">
        <?php foreach ($params['anime'] as $anime): ?>
            <div class="anime-card">
                <h2><?= $anime->title ?></h2>
                <a href="/anime/<?= $anime->id ?>">
                    <figure>
                        <img src="<?= $anime->cover ?>" alt="anime cover">
                    </figure>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</main>

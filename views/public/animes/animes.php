<!-- show all animes in Database -->

<main>
    <h1 id='h-anime'>All Animes</h1>
    <section class="anime-page">
        <div class="anime-cards">
            <?php foreach ($params['anime'] as $anime): ?>
                <div class="anime-card">
                    <a href="/anime/<?= $anime->id ?>">
                    <img src="<?= htmlspecialchars($anime->cover) ?>" alt="anime cover">
                    </a>
                    <a href="/animes/<?= $anime->id ?>"> <?= htmlspecialchars($anime->title) ?> </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<main>
    <h1> ouais </h1>

<?php if (isset($_SESSION['username'])): ?>
    <h1> Hello, <?= $_SESSION['username'] ?> </h1>
<?php endif; ?>
</main>

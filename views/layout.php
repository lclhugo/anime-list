<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="../assets/img/logos/minilogo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/temp.css">
</head>

<body>
    <header id="navbar">
        <nav id="main-nav">
        <i class="bi bi-list"></i>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">Browse</a></li>
            <?php if (isset($_SESSION['auth'])): ?>
                
            <li><a href="">My List</a></li>
            <li><a href="/logout">Logout</a></li>
            <?php else: ?>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            <?php endif; ?>

            <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1): ?>
            <li><a href="/admin/animes">Dashboard</a></li>
            <?php endif; ?>

        </ul>
        </nav>
    </header>

        <?= $content ?>

    <script type="text/javascript" src="../public/js/menu.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="shortcut icon" href="../assets/img/logos/minilogo.png" />
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header id="navbar"">
        <nav id=" main-nav">
        <i class="bi bi-list"></i>
        <ul>
            <a href="#">
                <img id="nav-logo" src="../assets/img/logos/logo.png" alt="website logo">
            </a>
            <li><a href="#">Home</a></li>
            <li><a href="#">Browse</a></li>
            <li><a href="#">My List</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
        </nav>
    </header>

        <?php require $view; ?>

    <footer>

        <button id="darkBtn">dark theme</button>
        <button id="lightBtn">light theme</button>

    </footer>

    <script type="text/javascript" src="../assets/scripts/randomjs.js"></script>
</body>

</html>
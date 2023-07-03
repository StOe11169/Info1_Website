<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">


</head>
<body>

<div class="page-wrapper">

    <div class="header-wrapper">

        <?php include('elements/navbar.php') ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="glossary.php">Glossary</a></li>
            </ol>
        </nav>

    </div>

    <div class="main-wrapper">

        <!-- Sidebar Navigation-->
        <div class="sidenav-wrapper">
            <nav class="nav flex-column list-group list-group-flush overflow-auto sidenav">
                <a href="#home" class="list-group-item list-group-item-action bg-light nav-link nav-item" id="side-nav-home">Home</a>
                <a href="#section-a" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-a">A</a>
                <a href="#section-b" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-b">B</a>
                <a href="#section-c" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-c">C</a>
                <!-- Add more links for other letters -->
            </nav>
        </div>

        <div class="center-wrapper">

        </div>

        <div class="right-hand-buffer">

        </div>

    </div>

    <div class="footer-wrapper">
        <?php include('elements/footer.php') ?>
    </div>

</div>

<script src="scripts/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>


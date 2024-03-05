<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/breadcrumbs.css">


</head>
<body>

<div class="page-wrapper">

    <div class="header-wrapper">

        <?php include('elements/navbar.php') ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a>About</a>
                </li>
            </ol>
        </nav>



    </div>

    <div class="main-wrapper">

        <!-- Sidebar Navigation-->
        <div class="sidenav-wrapper">


        </div>

        <!------Main Page Content -->
        <div class="center-wrapper">
            <h1>Disclaimer </h1>
            <p>This website was created as part of a course project and is intended for educational purposes.
                It is still a work in progress and may contain incomplete features, bugs, or inaccuracies. <br>
                The content provided on this website is for demonstration and learning purposes only and should not be considered authoritative or relied upon for any purpose.
            </p>

            <h2> Purpose of this Website</h2>
            <h2> Goals of this website</h2>
            <h2>To-Do-List:</h2>
        </div>

        <!--Righthand spacer to align Page content -->
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


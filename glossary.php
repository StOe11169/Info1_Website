
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glossary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/sidebar.css">

</head>
<body>
<div id="page-content-wrapper">
    <h1>Hello, I'm glossary!</h1>
    <?php include('elements/navbar.php') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="glossary.php">Glossary</a></li>
        </ol>
    </nav>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right vh-100" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap </div>
        <div class="list-group list-group-flush overflow-auto h-100">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 1</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 2</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 3</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 4</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 5</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 6</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 7</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 8</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 9</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 10</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 11</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 12</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 13</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Menu 14</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->


        <div class="container-fluid">
            <h1 class="mt-4">Simple Sidebar</h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>





<script src="scripts/buttonReaction.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
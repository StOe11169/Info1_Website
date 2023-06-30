<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glossary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">


</head>
<body>

<?php include('elements/navbar.php') ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="glossary.php">Glossary</a></li>
    </ol>
</nav>

<div class="main-wrapper">
    <!--All elements below Navbar and Breadcrumb inside this. Wraps everything inside a flex-box -->

    <!-- Sidebar Navigation-->
    <div class="sidenav-wrapper col-sm-2">
        <nav class="nav flex-column list-group list-group-flush overflow-auto sidenav">
            <a href="#home" class="list-group-item list-group-item-action bg-light nav-link nav-item" id="side-nav-home">Home</a>
            <a href="#section-a" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-a">A</a>
            <a href="#section-b" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-b">B</a>
            <a href="#section-c" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-c">C</a>
            <!-- Add more links for other letters -->
        </nav>
    </div>

    <!------Main Page Content -->
    <div class="accordion col-sm-8 main" id="accordionExample">

        <!-- Section A -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="section-a">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a">
                    A
                </button>
            </h2>
            <div id="collapse-a" class="accordion-collapse collapse" aria-labelledby="section-a" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Content for section A -->
                    Content for section A

                    <!-- Sub-accordion A1 -->
                    <div class="accordion" id="sub-accordion-a1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sub-section-a1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a1" aria-expanded="true" aria-controls="collapse-a1">
                                    A1
                                </button>
                            </h2>
                            <div id="collapse-a1" class="accordion-collapse collapse " aria-labelledby="sub-section-a1" data-bs-parent="#sub-accordion-a1">
                                <div class="accordion-body">
                                    <!-- Content for sub-section A1 -->
                                    Content for sub-section A1
                                </div>
                            </div>
                        </div>
                        <!-- Add more sub-accordion items for A2, A3, etc. -->
                        <!-- Sub-accordion A2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="sub-section-a2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a2" aria-expanded="true" aria-controls="collapse-a2">
                                    A2
                                </button>
                            </h2>
                            <div id="collapse-a2" class="accordion-collapse collapse" aria-labelledby="sub-section-a2" data-bs-parent="#sub-accordion-a2">
                                <div class="accordion-body">
                                    <!-- Content for sub-section A2 -->
                                    Content for sub-section A2
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary close-accordions-btn">Close all </button>

            </div>

        </div>


        <!-- Section B -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="section-b">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-b" aria-expanded="false" aria-controls="collapse-b">
                    B
                </button>
            </h2>
            <div id="collapse-b" class="accordion-collapse collapse" aria-labelledby="section-b" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Content for section B -->
                </div>
            </div>
        </div>

        <!-- Section C -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="section-c">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-c" aria-expanded="false" aria-controls="collapse-c">
                    C
                </button>
            </h2>
            <div id="collapse-c" class="accordion-collapse collapse" aria-labelledby="section-c" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- Content for section C -->
                </div>
            </div>
        </div>
        <!-- Add more accordion items for other letters -->
    </div>

    <div class="col-sm-2 right-hand-buffer">
    <!--Righthand spacer to align Page content -->
    </div>
</div>
<?php include('elements/footer.php') ?>

<script src="scripts/buttonReaction.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>

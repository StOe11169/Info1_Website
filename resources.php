<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resources</title>
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
                <li class="breadcrumb-item"><a href="oldresources.php">Resources</a></li>
            </ol>
        </nav>

    </div>

    <div class="main-wrapper">

        <!-- Sidebar Navigation-->
        <div class="sidenav-wrapper">
            <nav class="nav flex-column list-group list-group-flush overflow-auto sidenav">
                <div class="accordion " id="accordionExample">
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
                                    Content for section B
                                </div>
                                <button class="btn btn-primary close-accordions-btn">Close all </button>
                            </div>

                        </div>
            </nav>
        </div>

        <!------Main Page Content -->
        <div class="center-wrapper">

            <div class="card-wrapper">
            <div class="card tile">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
                <div class="card tile">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

        </div>

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


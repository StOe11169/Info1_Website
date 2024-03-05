<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLIP Fluid</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link href="styles/simulator.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/breadcrumbs.css">


</head>
<body>

<div class="page-wrapper">

    <div class="header-wrapper">

        <?php include('elements/navbar.php') ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="glossary.php">Glossary</a></li>
            </ol>
        </nav>

    </div>

    <div class="main-wrapper">

        <!-- Sidebar Navigation-->
        <div class="sidenav-wrapper">
            <nav class="sidenav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#home" class="nav-link" id="side-nav-home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section-1" class="nav-link side-nav-link" id="side-nav-sec-1">Section 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section-2" class="nav-link side-nav-link" id="side-nav-sec-2">Section 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#section-3" class="nav-link side-nav-link" id="side-nav-sec-3">Section 3</a>
                    </li>
                    <!-- Add more links for other sections -->
                </ul>
            </nav>


        </div>

        <!------Main Page Content -->
        <div class="center-wrapper">



            <div class="simulator-wrapper">

                <div class="controlPanel">
                    <div style="padding-left: 1vw">
                        <label for="showParticles" class="checkbox-label"> Show Particles:</label>
                        <input class="checkbox" id="showParticles" type = "checkbox" checked  onclick = "scene.showParticles = !scene.showParticles">
                    </div>
                    &nbsp;
                    <div>
                        <label for="showGrid" class="checkbox-label"> Show Grid:</label>
                        <input class="checkbox" id="showGrid"type = "checkbox" onclick = "scene.showGrid = !scene.showGrid"> &nbsp;
                    </div>

                    <div>
                        <label for="compensateDrift" class="checkbox-label"> Compensate Drift:</label>
                        <input class="checkbox" id="compensateDrift" type = "checkbox" checked onclick = "scene.compensateDrift = !scene.compensateDrift"> &nbsp;
                    </div>

                    <div>
                        <label for="separateParticles" class="checkbox-label">Separate Particles: </label>
                        <input class="checkbox" id="separateParticles" type = "checkbox" checked onclick = "scene.separateParticles = !scene.separateParticles"> &nbsp;
                    </div>

                    <div>
                        <label for="PIC-FLIP-Slider">PIC</label>
                        <input  class = "slider" id="PIC-FLIP-Slider" type = "range" min = "0" max = "10" value = "9"  onchange="scene.flipRatio = 0.1 * this.value">
                        <label for="PIC-FLIP-Slider" style="padding-top: 0.5vw">FLIP </label>
                    </div>

                    <button class="button" id="pauseButton">Pause</button>
                    <button class="button" id="stepButton">Step</button>
                    <button class="button" id="startButton"> Stop</button>
                    <button class="button" id="startButton"> Save Results</button>


                </div>

                <div>
                    <canvas id="FLIPCanvas" style="border:2px solid"></canvas>
                    <script src="scripts/FluidSimFLIP.js"> </script>
                    <script>
                        setupScene();
                        update();
                    </script>
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


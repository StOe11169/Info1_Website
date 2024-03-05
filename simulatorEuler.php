<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Euler Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link href="../styles/simulator.css" rel="stylesheet">
    <link href="../styles/style.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/breadcrumbs.css">
</head>
<body>
<div class="page-wrapper">


    <div class="nav-container">
        <?php include('elements/navbar.php') ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Simulators</a></li>
                <li class="breadcrumb-item active" aria-current="page">Euler Simulator</li>
            </ol>
        </nav>
    </div>


    <div class="main-wrapper"> <!--All elements below Navbar and Breadcrumb inside this -->

        <!-- Sidebar -->
        <div class="bg-light border-right vh-30 sidebar-wrapper side-nav">

            <div class="list-group list-group-flush overflow-auto h-100">
                <button id="windTunnel" type="button" class="button btn btn-primary active" data-bs-toggle="button"
                        aria-pressed="true" onclick="setupScene(1)">Wind Tunnel
                </button>
                <button id="hiresTunnel" type="button" class="button btn btn-primary" data-bs-toggle="button"
                        aria-pressed="false" onclick="setupScene(3)">Hires Tunnel
                </button>
                <button id="tank" type="button" class="button btn btn-primary" data-bs-toggle="button"
                        aria-pressed="false" onclick="setupScene(0)">Tank
                </button>
                <button id="paint" type="button" class="button btn btn-primary" data-bs-toggle="button"
                        aria-pressed="false"
                 onclick="setupScene(2)">Paint</button>
                <button id="results" type="button" class="button btn btn-primary" data-bs-toggle="button"
                        aria-pressed="false" disabled>Results
                </button>
            </div>
        </div>


        <!--Page Content -->
        <div class="simulator-wrapper">

            <!--Sim Control Panel -->
            <div class="controlPanel btn-group" role="group">


                <div style="padding-left: 1vw" class="slider-div">
                    <label for="densitySlider" class="form-label">Density:</label>
                    <input class="slider form-range" id="densitySlider" max="10000" min="500" type="range" value="1000">
                </div>
                <div class="slider-div">
                    <label class="form-label" for="viscositySlider">Viscosity:</label>
                    <input class="slider form-range" id="viscositySlider" max="0.0001" min="0.00000000000001"
                           type="range"
                           value="0.0000001">
                </div>

                <input type="checkbox" class="btn-check" id="streamButton" autocomplete="off"
                       onclick="scene.showStreamlines = !scene.showStreamlines">
                <label class="btn btn-primary checkbox-label" for="streamButton">Show Streamlines </label>


                <input type="checkbox" class="btn-check" id="velocityButton" autocomplete="off"
                       onclick="scene.showVelocities = !scene.showVelocities">
                <label for="velocityButton" class="btn btn-primary checkbox-label">Show Velocities </label>

                <input type="checkbox" class="btn-check" id="pressureButton" autocomplete="off" name="field"
                       onclick="scene.showPressure = !scene.showPressure;">
                <label for="pressureButton" class="btn btn-primary checkbox-label"> Show Pressure </label>


                <input type="checkbox" class="btn-check" id="smokeButton" name="field"
                       onclick="scene.showSmoke = !scene.showSmoke;" checked>
                <label for="smokeButton" class="btn btn-outline-primary checkbox-label"> Show Smoke </label>


                <input type="checkbox" class="btn-check" id="overrelaxButton"
                       onclick="scene.overRelaxation = scene.overRelaxation === 1.0 ? 1.9 : 1.0" checked>
                <label for="overrelaxButton" class="btn btn-outline-primary checkbox-label"> Overrelax: </label>


                <button type="button" class="button btn btn-primary" data-bs-toggle="button" aria-pressed="false"
                        autocomplete="off" id="pauseButton">Pause
                </button>
                <button class="button btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off"
                        id="stepButton">Step
                </button>
                <button class="button btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off"
                        id="startButton"> Stop
                </button>
                <button class="button btn btn-primary" data-bs-toggle="button" aria-pressed="false" autocomplete="off"
                        id="resultsButton" disabled> Save Results
                </button>

            </div>

            <!-- Sim Canvas -->
            <div>
                <canvas class="simCanvas" id="eulerCanvas"></canvas>
                <script src="../scripts/FluidSimEuler.js"></script>
                <script src="../scripts/visualisationEuler.js"></script>
                <script>

                    //TODO Sliding obstacle over source "blocks" it, moving obstacle into source does not.
                    //TODO Change all finite difference methods to central difference method
                    //TODO Maybe make difference methods modular
                    //TODO Decouple render speed from canvas size
                    //TODO Add method to control and compare different numerical methods
                    //TODO Let canvas size vary but sim size stays same, only visually stretched
                    //TODO 3D with WebGl or p5.js
                    //TODO Update and expand GUI
                    //TODO decouple simulation speed from rendering speed
                    //TODO Add dimensions to all physical units
                    //TODO Make number of cells independent of sim cell size
                    //TODO Check if dynamic viscosity and kinematic viscosity have not been falsly used.
                    //! dynamic visocsity = kinematic viscosity * density. my = ny * rho

                    setupScene(1);
                    runSimulationLoop();

                </script>
            </div>
            <!--End of Canvas -->
        </div>
        <!--End Page Content and content-container -->
    </div>
</div>


<script src="../scripts/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
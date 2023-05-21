<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link href="styles/simulator.css" rel="stylesheet">
</head>
<body>




    <h1>Hello, I'm Euler!</h1>
    <?php include('elements/navbar.php') ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Simulators</a></li>
            <li class="breadcrumb-item active" aria-current="page">Euler Simulator</li>
        </ol>
    </nav>

    <button class="button" onclick="setupScene(1)">Wind Tunnel</button>
    <button class="button" onclick="setupScene(3)">Hires Tunnel</button>
    <button class="button" onclick="setupScene(0)">Tank</button>
    <button class="button" onclick="setupScene(2)">Paint</button>
    <input id="densitySlider" max="10000" min="500" type="range" value="1000">
    <input id="viscositySlider" max="0.0001" min="0.00000000000001" type="range" value="0.0000001">
    <input id="streamButton" onclick="scene.showStreamlines = !scene.showStreamlines" type="checkbox">Streamlines
    <input id="velocityButton" onclick="scene.showVelocities = !scene.showVelocities" type="checkbox">Velocities
    <input id="pressureButton" name="field" onclick="scene.showPressure = !scene.showPressure;" type="checkbox"> Pressure
    <input checked id="smokeButton" name="field" onclick="scene.showSmoke = !scene.showSmoke;" type="checkbox">Smoke
    <input checked id="overrelaxButton" onclick="scene.overRelaxation = scene.overRelaxation === 1.0 ? 1.9 : 1.0"
           type="checkbox">Overrelax>

    <canvas id="myCanvas" style="border:2px solid"></canvas>
    <script src="scripts/FluidSim.js"></script>
    <script src="scripts/visualisation.js"></script>
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

    <div class="d-flex" id="wrapper">

        <canvas id="myCanvas" style="border:2px solid"></canvas>
        <script src="scripts/FluidSim.js"></script>
        <script src="scripts/visualisation.js"></script>
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
        <!--TODO Sidebar pushed out of view to the left by canvas -->
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








<script src="scripts/buttonReaction.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
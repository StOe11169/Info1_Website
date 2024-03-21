<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resources</title>
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
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a>Resources</a></li>
            </ol>
        </nav>

    </div>

    <div class="main-wrapper">

        <!-- Sidebar Navigation-->
        <div class="sidenav-wrapper">
            <nav class="nav flex-column list-group list-group-flush overflow-auto sidenav">
                <a href="#section-a" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-a">Programming Tutorials</a>
                <a href="#section-b" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-b">Fluid Basics</a>
                <a href="#section-c" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-c">Useful Resources</a>
                <a href="#section-d" class="list-group-item list-group-item-action bg-light nav-link nav-item side-nav-link" id="side-nav-sec-d">Simulator Tutorials</a>
                <!-- Add more links for other letters -->
            </nav>
        </div>


        <div class="center-wrapper">
            <!------Main Page Content -->
            <div class="accordion  accordion-flush col-sm-8 main" id="accordionExample">

                <!-- Section A Programming Tutorials for Numerical Methods and CFD Basics-->
                <div class="accordion-item ">
                    <h2 class="accordion-header" id="section-a">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a">
                            Programming Tutorials for Numerical Methods and CFD Basics
                        </button>
                    </h2>
                    <div id="collapse-a" class="accordion-collapse collapse" aria-labelledby="section-a" >
                        <div class="accordion-body">
                            <!-- Content for section A -->
                            <div class="accordion">
                                <!-- Sub-accordion A1 Introduction to Numerical Methods-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sub-section-a1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a1" aria-expanded="true" aria-controls="collapse-a1">
                                            Introduction to Numerical Methods
                                        </button>
                                    </h2>
                                    <div id="collapse-a1" class="accordion-collapse collapse " aria-labelledby="sub-section-a1" >
                                        <div class="accordion-body text-with-image">
                                            <!-- Content for sub-section A1 -->
                                            <img  height="100vh" width="100vw" src="images/jpg/placeholder%20cat.jpg"  class="text-image">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
                                            <p>Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.</p>
                                            <p>Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.</p>

                                        </div>
                                    </div>
                                </div>



                                <!-- Sub-accordion A2 Basics of Computational Fluid Dynamics (CFD)-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sub-section-a2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a2" aria-expanded="true" aria-controls="collapse-a2">
                                            Basics of Computational Fluid Dynamics (CFD)
                                        </button>
                                    </h2>
                                    <div id="collapse-a2" class="accordion-collapse collapse" aria-labelledby="sub-section-a2" ">
                                        <div class="accordion-body">
                                            <!-- Content for sub-section A2 -->
                                            Content for sub-section A2
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sub-section-a3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a3" aria-expanded="true" aria-controls="collapse-a3">
                                            Implementing Finite Difference Methods
                                        </button>
                                    </h2>
                                    <div id="collapse-a3" class="accordion-collapse collapse" aria-labelledby="sub-section-a3" >
                                        <div class="accordion-body">
                                            <!-- Content for sub-section A3 -->
                                            Content for sub-section A3
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sub-section-a4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a4" aria-expanded="true" aria-controls="collapse-a4">
                                            Understanding Finite Volume Methods
                                        </button>
                                    </h2>
                                    <div id="collapse-a4" class="accordion-collapse collapse" aria-labelledby="sub-section-a4" >
                                        <div class="accordion-body">
                                            <!-- Content for sub-section A4 -->
                                            Content for sub-section A4
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sub-section-a5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-a5" aria-expanded="true" aria-controls="collapse-a5">
                                            Introduction to Finite Element Methods
                                        </button>
                                    </h2>
                                    <div id="collapse-a5" class="accordion-collapse collapse" aria-labelledby="sub-section-a5" ">
                                        <div class="accordion-body">
                                            <!-- Content for sub-section A5 -->
                                            Content for sub-section A5
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <button class="btn btn-primary close-accordions-btn">Close all </button>

                    </div>

                </div>


                <!-- Section B Fluid Dynamics Basics (12 Steps to Navier-Stokes)-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="section-b">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-b" aria-expanded="false" aria-controls="collapse-b">
                            Fluid Dynamics Basics (12 Steps to Navier-Stokes)
                        </button>
                    </h2>
                    <div id="collapse-b" class="accordion-collapse collapse" aria-labelledby="section-b" >
                        <div class="accordion-body">
                            Content for section B
                        </div>

                        <div class="accordion">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step1" aria-expanded="true" aria-controls="collapse-step1">
                                        Step 1: 1D Linear Convection
                                    </button>
                                </h2>
                                <div id="collapse-step1" class="accordion-collapse collapse" aria-labelledby="sub-section-step1" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step1 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step2" aria-expanded="true" aria-controls="collapse-step2">
                                        Step 2: 1D Non-Linear Convection
                                    </button>
                                </h2>
                                <div id="collapse-step2" class="accordion-collapse collapse" aria-labelledby="sub-section-step2" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step2 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step3" aria-expanded="true" aria-controls="collapse-step3">
                                        Step 3: 1D Diffusion
                                    </button>
                                </h2>
                                <div id="collapse-step3" class="accordion-collapse collapse" aria-labelledby="sub-section-step3" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step3 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step4" aria-expanded="true" aria-controls="collapse-step4">
                                        Step 4: 2D Linear Convection
                                    </button>
                                </h2>
                                <div id="collapse-step4" class="accordion-collapse collapse" aria-labelledby="sub-section-step4" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step4 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step5">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step5" aria-expanded="true" aria-controls="collapse-step5">
                                        2D Non-Linear Convection
                                    </button>
                                </h2>
                                <div id="collapse-step5" class="accordion-collapse collapse" aria-labelledby="sub-section-step5" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step5 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step6">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step6" aria-expanded="true" aria-controls="collapse-step6">
                                        Step 6: 2D Diffusio
                                    </button>
                                </h2>
                                <div id="collapse-step6" class="accordion-collapse collapse" aria-labelledby="sub-section-step6" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step6 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step7" aria-expanded="true" aria-controls="collapse-step7">
                                        Step 7: 2D Burgers' Equation
                                    </button>
                                </h2>
                                <div id="collapse-step7" class="accordion-collapse collapse" aria-labelledby="sub-section-step7" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step7 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step8">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step8" aria-expanded="true" aria-controls="collapse-step8">
                                        Step 8: 2D Laplace Equation
                                    </button>
                                </h2>
                                <div id="collapse-step8" class="accordion-collapse collapse" aria-labelledby="sub-section-step8" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step8 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step9">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step9" aria-expanded="true" aria-controls="collapse-step9">
                                        Step 9: 2D Poisson Equation
                                    </button>
                                </h2>
                                <div id="collapse-step9" class="accordion-collapse collapse" aria-labelledby="sub-section-step9" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step9 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step10">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step10" aria-expanded="true" aria-controls="collapse-step10">
                                        Step 10: 2D Navier-Stokes Equation (Part 1)
                                    </button>
                                </h2>
                                <div id="collapse-step10" class="accordion-collapse collapse" aria-labelledby="sub-section-step10" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step10 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step11">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step11" aria-expanded="true" aria-controls="collapse-step11">
                                        Step 11: 2D Navier-Stokes Equation (Part 2)
                                    </button>
                                </h2>
                                <div id="collapse-step11" class="accordion-collapse collapse" aria-labelledby="sub-section-step11" ">
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step11 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-step12">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-step12" aria-expanded="true" aria-controls="collapse-step12">
                                        Step 12: 2D Navier-Stokes Equation (Final)
                                    </button>
                                </h2>
                                <div id="collapse-step12" class="accordion-collapse collapse" aria-labelledby="sub-section-step12" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section step12 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            


                        </div>
                        <button class="btn btn-primary close-accordions-btn">Close all </button>
                    </div>

                </div>

                <!-- Section C -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="section-c">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-c" aria-expanded="false" aria-controls="collapse-c">
                            Further Useful Resources:
                        </button>
                    </h2>
                    <div id="collapse-c" class="accordion-collapse collapse" aria-labelledby="section-c" >
                        <div class="accordion-body">
                            <!-- Content for section C -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-c1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-c1" aria-expanded="true" aria-controls="collapse-c1">
                                        c1
                                    </button>
                                </h2>
                                <div id="collapse-c1" class="accordion-collapse collapse" aria-labelledby="sub-section-c1" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section c1 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <button class="btn btn-primary close-accordions-btn">Close all </button>
                    </div>
                </div>


                <!-- Section D - Simulator Tutorials -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="section-d">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-d" aria-expanded="false" aria-controls="collapse-d">
                            Simulator Tutorials:
                        </button>
                    </h2>
                    <div id="collapse-d" class="accordion-collapse collapse" aria-labelledby="section-c" >
                        <div class="accordion-body">
                            <!-- Content for section D -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-d1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-d1" aria-expanded="true" aria-controls="collapse-d1">
                                        d1
                                    </button>
                                </h2>
                                <div id="collapse-d1" class="accordion-collapse collapse" aria-labelledby="sub-section-d1" >
                                    <div class="accordion-body">
                                        <!-- Content for sub-section d1 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="sub-section-d2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-d2" aria-expanded="true" aria-controls="collapse-d2">
                                        d2
                                    </button>
                                </h2>
                                <div id="collapse-d2" class="accordion-collapse collapse" aria-labelledby="sub-section-d2">
                                    <div class="accordion-body">
                                        <!-- Content for sub-section d2 -->
                                        Placeholder
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <button class="btn btn-primary close-accordions-btn">Close all </button>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="right-hand-buffer">

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


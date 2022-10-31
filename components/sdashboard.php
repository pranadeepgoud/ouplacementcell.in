<?php
require('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../css/carousel.css">
    <title>Osmania University-Placement Website</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
                aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#">
                <img src="../images/oulogo1.png" alt="Bootstrap" width="30" height="24">
                <h6>Osmania University Placement
                    Cell</h6>
            </a>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" onclick="popup()" href="components/adminlogin.php">Admin Login</a></li>
                            <li><a class="dropdown-item"  onclick="popup()"  href="components/studentlogin.php">Student Login</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>

            <div class="col-md-3 text-end" id="register-popup">
                <a href="logout.php">
                    <button type="button" class="btn btn-primary">logout</button> </a>
            </div>
        </div>
    </nav>
    <main>

        <!-- BANNER -->

        <section id="banner">
            <div class="px-4 py-5 my-5 text-center">
                <img src="../images/oufull.png" class="img-fluid" alt="...">
                <h1 class="display-5 fw-bold">Welcome to Osmania University Placement Cell</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">We are here to build your Skills and Career with our driven Passion and
                        Reality</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Explore</button>
                        <a href="components/register.php"> <button type="button"
                                class="btn btn-outline-secondary btn-lg px-4">Register</button></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="../images/amazon.png" width="100" height="100" role="img"
                        aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <h3 class="fw-normal">Amazon Software Development Engineer </h3>
                    <p>At Amazon, we hire the best minds in technology to innovate
                        and build on behalf of our customers.As an intern, you will be matched to a manager and a
                        mentor. You will have the opportunity to influence the evolution of Amazon technology and
                        lead mission critical projects early in your career.</p>
                    <p><a class="btn btn-secondary"
                            href="https://www.amazon.jobs/en/jobs/1688605/software-development-engineer-intern-amazon-wow-applications">Apply
                            Now &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="../images/Accenture.png" width="100" height="100" role="img"
                        aria-label="Placeholder: 100x100" preserveAspectRatio="xMidYMid slice" focusable="false">

                    <h3 class="fw-normal">Accenture Associate Software Engineer
                        (ASE)</h3>
                    <p>Join our team that is developing, designing and maintaining
                        technologies that improve the way our clients and the world works. Working in challenging
                        and dynamic environments, using their versatility to create and support technology solutions
                        that meet client requirements from analysis to implementation.</p>
                    <p><a class="btn btn-secondary"
                            href="https://indiacampus.accenture.com/myzone/accenture/1/jobs/2211/job-details">Apply Now
                            &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="../images/ibm.png" width="100" height="100" role="img" aria-label="Placeholder: 100x100"
                        preserveAspectRatio="xMidYMid slice" focusable="false">

                    <h3 class="fw-normal">IBM Software Developer</h3>
                    <p>You are an experienced Python developer who will support
                        technical implementation and delivery of projects based on IBM product through the full
                        systems development lifecycle. You will be responsible for development/ maintenance/ Support
                        applications using Python</p>
                    <p><a class="btn btn-secondary"
                            href="https://careers.ibm.com/job/16612614/software-developer-bangalore-in/?codes=IBM_CareerWebSite">Apply
                            Now &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div>
        <div class="man"><button type="button" class="btn btn-dark">View All &raquo;
            </button></div>

        <div class="container marketing">
            <!-- COURSES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Learn Programming
                    </h2>
                    <p class="lead">Learn C,C++,Java,Python & many more languages </p>
                    <p>Become a Software Developer,no matter where you are.</p>
                </div>
                <div class="col-md-5">
                    <a href="courses.php"><img src="../images/coding.gif" width="330" height="340" role="img"
                            aria-label="Placeholder: 320x320" preserveAspectRatio="xMidYMid slice"
                            focusable="false"></a>
                </div>
            </div>



            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Learn Web Development</h2>
                    <p class="lead">Learn Html,CSS,Php & many more web technologies </p>
                    <p>Become a Web Developer,no matter where you are.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <a href="courses.php"><img src="../images/web.png" width="345" height="340" role="img"
                            aria-label="Placeholder: 320x320" preserveAspectRatio="xMidYMid slice"
                            focusable="false"></a>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Learn Aptitude & Logical Reasoning</h2>
                    <p class="lead">Ace the Logical Reasoning part by solving more and more Practise Papers and Mock
                        Tests on a regular basis.</p>
                </div>
                <div class="col-md-5">
                    <a href="courses.php"><img src="../images/aptitude.png" width="380" height="310"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 320x320"
                            preserveAspectRatio="xMidYMid slice" focusable="false"></a>

                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->



    </main>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 ">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="../images/oubanner.png" width="300" height="80">
                    <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <p class="text-muted">&copy; 2022 OU Placement Cell</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>FIND CAREERS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Job Categories</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Companies</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Internships</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>FIND COURSES</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Programming</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Web Development</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Android App Development</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aptitude</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Logical Reasoning</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>HELP</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Interview tips</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Feedback</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>
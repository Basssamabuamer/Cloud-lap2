<?Php
$host_name = "localhost";
$database = "labproject"; // Change your database name
$username = "root";// Your database user id 
$password = "rootroot";          // Your password

//error_reporting(0);// With this no error reporting will be there
//////// Do not Edit below /////////

$db = mysqli_connect($host_name, $username, $password, $database);
$db->set_charset("utf8");
   mysqli_query($db, "SET SESSION time_zone = 'Asia/amman'");
if (!$db) {
    echo "Error: Unable to connect to MySQL.<br>";
    echo "<br>Debugging errno: " . mysqli_connect_errno();
    exit;
}
?>
<?php
session_start();
//error_reporting(0);
if (strlen($_SESSION['aid']==0)) {
  header('location:index.php');
  } else{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOUD LAP Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/6d2017dc73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Home.css" />
</head>

<body>


    <!-- start Nav -->

    <div class="home">


        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid fixed-top bg-light">
                <!-- <img class="m-4" src="assest/img/logo.png" alt="" width="151"> -->
                <h4 style="color:  rgb(00, 95, 99); "><i class="fas fa-gem me-3 p-3"></i>CLOUD LAP</h4>

                <button class="navbar-toggler text-grey" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    MENU<span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Service</a>
                            <ul class="dropdown-menu">
                                
                                <li><a class="dropdown-item" href="form/formThree.html">Diabetes Screening</a></li>

                                
                                <li><a class="dropdown-item" href="form/formsix.html">Blood Test </a></li>
                                <li><a class="dropdown-item" href="form/formsix.html">Liver Test </a></li>
                                <li><a class="dropdown-item" href="form/formFive.html">Online Result</a></li>

                            </ul>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#deparment">Departments</a>
                        </li> -->

<!--
                        <li class="nav-item">
                            <a class="nav-link" href="#dector">Doctors</a>
                        </li>
-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
<li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>

                    <a href="form/form.html"><button>Emergency</button></a>
                </div>
				<?php 
//Getting admin name
$adminid=$_SESSION['aid'];

$query=mysqli_query($db,"select name from login where id='$adminid'");
$row=mysqli_fetch_array($query);
?>    
            </div>

    </div>

<br><br>

    </nav>

    <!-- End Nav -->


    <!-- start slider -->
    <div id="home">
        <div class="slider">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assest/img/slider9.jpg" alt="First
                                slide">
                        <!-- <div class="content carousel-caption d-none d-md-block 
                                bg-light text-dark">
                            
                            <p>LABORATROY keenly supports projects and
                                initiatives across various sectors <br>
                                that benefit young people, particularly in
                                the areas of education,
                                <br> environment and health
                            </p>
                            <button class="btn btn-danger"> Read More</button>

                        </div> -->




                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assest/img/features.jpg" alt="Second
                                slide">

                        <!-- <div class="content carousel-caption d-none d-md-block
                                bg-light text-dark">

                            <p>
                                Visit LABORATROY nearest branch and explore an exemplary medical<br> laboratory
                                experience
                            </p>
                            <button class="btn btn-danger"> Read More</button>
                        </div> -->

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assest/img/slider11.jpg" alt="Third
                                slide">
                        <!-- <div class="content carousel-caption d-none d-md-block
                                bg-light text-dark">

                            <p>
                                Learn about LABORATROY COVID19 testing and how you can get your test <br> through our
                                labs,
                                our free house call service or our drive thrus.

                            </p>
                            <button class="btn btn-danger"> Read More</button>
                        </div> -->

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- <div class="emergencyContent text-center">
            <h1 class="p-4">In an emergency? Need help now?</h1>
            <p>Click here for urgent cases, and contact us for the day the medical team will come to you as soon as
                possible
                .</p>
            <a href="form/form.html"> <button class="m-4">Emergency</button></a>
        </div> -->


        <div class="gallary">


            <div class="container-xl">
                <div class="row">
                    <div class="col-md-9  mx-auto">
                        <h2 class="m-5"><span>Gallary</span></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/img1.jpg" class="img-fluid"
                                                    alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/departments-5.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/departments-2.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/departments-3.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/gallery/gallery-5.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/gallery/gallery-6.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/download (1).jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/download (2).jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="img-box"><img src="assest/img/download.jpg" class="img-fluid"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Gallary -->


    <!-- Start About -->

    <div class="about" id="about">

        <div class="container">
            <div class="text-center">
                <h2><span>About </span></h2>

                <p>LIS relies in its work on the medical file that was able to follow up on the results of its medical
                    examinations. This medical laboratory accredits all insurance companies and banks, in
                    addition to being committed to the unified pricing.
                </p>

            </div>

            <div class="row d-flex">

                <div class="col-lg-6 col-sm-12 col-md-12">
                    <img src="assest/img/about10.jpg" alt="">
                </div>


                <div class="col-lg-6 col-sm-12 col-md-12">
                    <!-- <h1>Our Services</h1> -->
                    <p>The Laboratories Information System (LIS) Series is one of the most important laboratories chains
                        in
                        the Hashemite Kingdom of Jordan, which is characterized by the ability to attract the latest
                        equipment and technology, in addition to appointing the best cadres and expertise in this field.
                        The Laboratories Information System (LIS) series have provided their services over the past
                        years
                        to
                        hundreds of thousands of our Jordanian community members, residents and distinguished visitors.
                        The laboratories information system (LIS) series contain the latest technologies and
                        high-accuracy
                        devices in the field of all tests such as hormones, viruses, vitamins, measurement of all vital
                        elements, blood fingerprints, etc. At the best prices in the kingdom
                    </p>
                    <!-- <p><i class="fa-regular fa-circle-check"></i> Since its creation in 2022 laboratory Group has grown
                        from
                        four
                        laboratories in Amman.</p>
                    <p><i class="fa-regular fa-circle-check"></i> Its 1years, laboratory' milestones include obtaining
                        the
                        ISO
                        9001 Management certification.</p>
                    <p><i class="fa-regular fa-circle-check"></i> laboratory is also honored to have received
                        II Award for Excellence in May 2022.</p> -->

                </div>
            </div>

            <div class="row d-flex pt-5">
                <div class="col-sm-12 col-lg-6">
                    <p>The laboratory specialist performs several tasks and roles, most notably the following:</p>
                    <p class="p-3"><i class="fa-solid fa-circle-dot"></i>Examination and analysis of the chemical composition of
                        body fluids.
                    </p>
                    <p class="p-3"><i class="fa-solid fa-circle-dot"></i>Identifying microorganisms and determining whether they are
                        harmful or not.
                    </p>
                    <p class="p-3"><i class="fa-solid fa-circle-dot"></i>A blood test for drug levels to measure the effectiveness
                        of certain treatments.
                    </p>
                    <p class="p-3"><i class="fa-solid fa-circle-dot"></i>Using modern technology to record all data and analyzes in
                        organized ways and with high accuracy.
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img src="assest/img/about11.jpg" style="height:85% ; width:105%;" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->


    <!-- start Department -->
    <!-- <div class="Department" id="deparment">

        <div class="container">
            <div class="text-center p-3">
                <h2><span>DEPARTMENTS</span></h2>
                <p>Welcome to a new year and a new beginning; a chance to think of your resolutions set new goals and
                    look
                    forward to what is coming ahead, what’s better than your health to start with! Share with us your
                    health
                    resolutions and let’s work together to make it happen!
                </p>
            </div>
            <div>

                <div class="p-5 col-sm-12">
                    <div class="tab">
                        <button class="tablinks btn btn-primary" onclick="openCity(event, 'Cardiology')"
                            id="defaultOpen">Cardiology</button>
                        <button class="tablinks btn btn-primary"
                            onclick="openCity(event, 'Neurology')">Neurology</button>
                        <button class="tablinks btn btn-primary"
                            onclick="openCity(event, 'Hepatology')">Hepatology</button>
                        <button class="tablinks btn btn-primary"
                            onclick="openCity(event, 'Pediatrics')">Pediatrics</button>
                        <button class="tablinks btn btn-primary"
                            onclick="openCity(event, 'Hematology')">Hematology</button>
                    </div>

                    <div id="Cardiology" class="tabcontent">
                        <h3>Cardiology</h3>
                        <p>Learn more about the most critical numbers that impact your personal health and help your
                            doctor
                            access your risk for both heart disease and stroke.</p>
                        <img src="assest/img/6422e8d099d026d268bd5ea81f05809e.jpg" style="width: 40%; height: 55%;"
                            alt=""> <br>
                        <div class="text-center">
                            <button style="background-color: rgb(13, 196, 186);"> learn More</button>
                        </div>
                    </div>

                    <div id="Neurology" class="tabcontent">
                        <h3>Neurology</h3>
                        <p>A neurologist is a physician specializing in neurology and trained to investigate, diagnose
                            and
                            treat
                            neurological disorders.</p>

                        <img src="assest/img/departments-2.jpg" style="width: 40%; height: 55%;" alt=""><br>
                        <div class="text-center">
                            <button style="background-color: rgb(13, 196, 186);"> learn More</button>
                        </div>
                    </div>

                    <div id="Hepatology" class="tabcontent">
                        <h3>Hepatology</h3>
                        <p>A hepatologist is a specialized doctor involved in the diagnosis and treatment of hepatic
                            diseases,
                            which include issues that affect your: liver. gallbladder. pancreas.</p>
                        <img src="assest/img/download.jpg" style="width: 40%; height: 55%;" alt="">
                        <br>
                        <div class="text-center">
                            <button style="background-color: rgb(13, 196, 186);"> learn More</button>
                        </div>
                    </div>
                    <div id="Hematology" class="tabcontent">
                        <h3>Hematology</h3>
                        <p>Hematology is a branch of medicine concerned with the study, diagnosis, treatment, and
                            prevention
                            of diseases related to blood.
                        </p>
                        <img src="assest/img/download (2).jpg" style="width: 40%; height: 55%;" alt=""><br>
                        <div class="text-center">
                            <button style="background-color: rgb(13, 196, 186);"> learn More</button>
                        </div>
                    </div>


                    <div id="Pediatrics" class="tabcontent">
                        <h3>Pediatrics</h3>
                        <p>The branch of medicine concerned with the care of children. To work from various aspects of
                            development and success in work.</p>
                        <img src="assest/img/download (1).jpg" style="width: 40%; height: 55%;" alt=""><br>
                        <div class="text-center">
                            <button style="background-color: rgb(13, 196, 186);"> learn More</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div> -->

    <!-- End Department -->


    <!-- start dectors -->
	<!--
    <div class="doctors" id="dector">
        <div class="container p-3">
            <div class="text-center">
                <h2><span>DOCTORS</span></h2>

                <p class="pt-2">You may call them simply doctors. But most doctors have extra expertise in one type
                    of
                    medicine or another.
                    In fact, there are several hundred medical specialties and subspecialties. Here are the most
                    common
                    types of
                    doctors you'll likely see.</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 pt-5">
                        <div class="card text-star" style="width: 16rem;">
                            <img src="assest/img/doctors/doctors-1.jpg" alt="">

                            <div class="card-body">
                                <h5 class="card-title">Walter White
                                </h5>
                                <p class="card-text">Chief Medical Officer </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 pt-5">

                        <div class="card text-star" style="width: 16rem;">
                            <img src="assest/img/doctors/doctors-2.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Sarah Jhonson</h5>
                                <p class="card-text">Anesthesiologist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 pt-5">

                        <div class="card text-star" style="width: 16rem;">
                            <img src="assest/img/doctors/doctors-3.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">William Anderson</h5>
                                <p class="card-text">Cardiology</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 pt-5">

                        <div class="card text-star" style="width: 16rem;">
                            <img src="assest/img/doctors/doctors-4.jpg" alt="">

                            <div class="card-body">
                                <h5 class="card-title">Amanda Jepson
                                </h5>
                                <p class="card-text">Neurosurgeon</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>








    </div>


-->
    <!-- End dectors -->


    <!-- start contact  -->

    <div class="contact" id="contact">
        <div class="p-3">
            <div class="text-center">
                <!-- <h1>CONTACT</h1> -->
                <h2><span>CONTACT</span></h2>
                <p>Please fill this form in a decent manner</p>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="1400" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=almafraq&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://123movies-to.org">123 movies</a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 1400px;
                                }
                            </style><a href="https://www.embedgooglemap.net">google map plugin html</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 1400px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <section class="get-in-touch">
                    <form class="contact-form row" action="./insertContact.php" method="post">
                        <div class="form-field col-lg-6">
                            <input id="name" class="input-text js-input" type="text" name="name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-field col-lg-6 ">
                            <input id="email" class="input-text js-input" type="email" name="email" required>
                            <label for="email">E-mail</label>
                        </div>
                        <div class="form-field col-lg-6 ">
                            <input id="company" class="input-text js-input" type="text" name="address" required>
                            <label for="company">Address</label>
                        </div>
                        <div class="form-field col-lg-6 ">
                            <input id="phone" class="input-text js-input" type="text" name="contact" required>
                            <label for="phone">Contact Number</label>
                        </div>
                        <div class="form-field col-lg-12">
                            <input id="message" class="input-text js-input" type="text" name="message" required>
                            <label for="message">Message</label>
                        </div>
                        <div class="form-field col-lg-12 text-center">
                            <input class="submit-btn" type="submit" value="Submit">
                        </div>
                    </form>
                </section>

            </div>

            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light text-muted">
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                    </div>

                    <div>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </section>

                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <div class="row mt-3">
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3"></i>CLOUD LAP
                                </h6>
                                <p>
                                    You can contact the laboratory at any time and you can also visit our branches

                                </p>
                            </div>

                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#home" class="text-reset">Home</a>
                                </p>
                                <p>
                                    <a href="#about" class="text-reset">About </a>
                                </p>
                                <!-- <p>
                                    <a href="#!" class="text-reset">Department</a>
                                </p> 
                                <p>
                                    <a href="#doctor" class="text-reset">Doctors</a>
                                </p>-->
                                <p>
                                    <a href="#contact" class="text-reset">Contacct</a>
                                </p>
                            </div>

                            <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Our Services
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">
                                        Web Design</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">
                                        Web Development</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">
                                        Product Management</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">
                                        Marketing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">

                                        Graphic Design</a>
                                </p>
                            </div> -->

                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Contact
                                </h6>
                                <p><i class="fas fa-home me-3"></i>AMMAN JORDAN, JA</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    Moath@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i>0789326013</p>
                                <p><i class="fas fa-phone me-3"></i> 0786010423</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2024 Copyright:
                    <a class="text-reset fw-bold"
                        href="http://localhost/MEDLAP%20PROJECT/home.html?name=bassam+abuamer&email=bassamabuamer02%40gmail.com&address=amman&contact=0790730751&message=dfvxgttrdty#contact">Lab.com</a>
                </div>
            </footer>
            <!-- End Footer -->



            <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>




        </div>
    </div>


    <!-- End contact  -->










    <script src="department.js"></script>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>





</body>

</html>
<?php } ?> 
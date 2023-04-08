<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bottstrape 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tavern Hotel- rooms</title>
        <!-- fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500;600&family=Farsan&family=Merienda:wght@400;700;800&family=Merriweather+Sans:ital,wght@1,600;1,700&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">

        <!-- Font aewsome -->

        <script src="https://kit.fontawesome.com/7d590b86ec.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="CSS/style.css">
        <!-- SWiper  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <title>Rooms</title>
    </head>

    <body>

        <!-- header start -->


        <?php
    include('partials/navbar.php')
    ?>






        <!-- header end -->

        <div class="my-5 px-4">
            <h2 class="h-font text-center fw-bold  "> Our rooms</h2>
            <div class="h-line bg-dark"></div>

            <div class="container ">
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
                        <nav class="navbar navbar-expand-lg bg-white rounded shadow navbar-light">
                            <div class="container-fluid flex-lg-column align-items-stretch">
                                <h4>FILTERS</h4>
                                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch"
                                    id="filterdropdown">
                                    <div class="border bg-light p-3 rounded mb-3">
                                        <h5 class="mb-3 " style="font-size:18px;">Check Availability</h5>



                                        <label class="form-label shadow-none mt-3">Check In</label>
                                        <input type="date" class="form-control shadow-none  mb- 3 me-1">


                                        <label class="form-label shadow-none mt-3">Check Out</label>
                                        <input type="date" class="form-control shadow-none  me-1">







                                    </div>


                                    <div class="border bg-light p-3 rounded mb-3">


                                        <h5 class="mt-2 mb-3" style="font-size:18px;">Facilities</h5>
                                        <div class="mb-2">
                                            <input type="checkbox" id="f1" class=" form-check-input shadow-none me-1">
                                            <label class="form-check-label shadow-none " for="f1">Facility one</label>
                                        </div>

                                        <div class="mb-2">
                                            <input type="checkbox" id="f2" class=" form-check-input shadow-none me-1">
                                            <label class="form-check-label shadow-none " for="f2">Facility two</label>
                                        </div>
                                        <div class="mb-2">
                                            <input type="checkbox" id="f3" class=" form-check-input shadow-none me-1">
                                            <label class="form-check-label shadow-none " for="f3">Facility three</label>

                                        </div>







                                    </div>
                                    <div class="border bg-light p-3 rounded mb-3">
                                        <h5 class="mb-3 " style="font-size:18px;">GUESTS</h5>
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <label class="form-label shadow-none mt-3">Adult</label>
                                                <input type="number" class="form-control shadw-none">
                                            </div>
                                            <div>
                                                <label class="form-label shadow-none mt-3">Childern</label>
                                                <input type="number" class="form-control shadw-none">

                                            </div>
                                        </div>












                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="col-lg-9 col-md-12 px-4">
                        <div class="card mb-4 border-0 shadow">
                            <div class="row g-0 p-3 align-items-center">
                                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                    <img src="./Images/room1.png" class="img-fluid rounded" alt="...">
                                </div>
         <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                    <h5 class="mb-1"> Simple room  name</h5>
                                    <div class="features mb-3">
                    <h6 class="mb-3 card-heading ">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">2 Rooms</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">1 Bathroom</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">3 Balcony</span>
                 </div>
                 <div class="facilities mb-3">
                    <h6 class="mb-3 card-heading ">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Internet Connection</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Air Conditionar</span> <br>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Telivisioin</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Room Heater</span>
                 </div>
                 <div class="guests">
                    <h6 class="mb-3 card-heading ">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">5 adults</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">4 children</span> <br>

                 </div>

                                </div>
                                <div class="col-md-2 text-center">
                                <h6  class="mb-3" > ₹3500 per night</h6>
                                <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none mb-2 ">Book Now</a>
            <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- Footer Start -->



        <?php
    include('partials/footer.php')
    ?>

        <!-- Footer end -->
    </body>

</html>
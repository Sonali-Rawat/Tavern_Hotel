<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <!-- bottstrape 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title>Tavern Hotel</title>
<!-- fonts -->
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500;600&family=Farsan&family=Merienda:wght@400;700;800&family=Merriweather+Sans:ital,wght@1,600;1,700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

 <!-- Font aewsome -->

 <script src="https://kit.fontawesome.com/7d590b86ec.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="CSS/style.css">
<!-- SWiper  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<style>
  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }

  /* Firefox */
  input[type=number] {
      -moz-appearance: textfield;
  }
  </style>

</head>
<body>
 
<?php
        include('partials/navbar.php')
    ?>

    <!-- login form on click button on login... -->

    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle me-2"></i> user login
                    </h5>


                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <div class="mb-3">
                        <label class="form-label ">Email address</label>
                        <input type="email" class="form-control shadow-none " style="width:250px;">
                    </div>
                    <div class="mb-4">
                        <label class="form-label shadow-none">password</label>
                        <input type="password" class="form-control shadow-none" style="width:250px;">
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-decoration-none text-secondary">Forgot
                            password?</a>
                    </div>

                </div>

            </div>


        </form>
    </div>
</div>

<!-- login form ends.. -->

      <!-- register form start.. -->

      <div class="modal fade" id="Registernmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <form action="">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title fs-5 d-flex align-items-center">
                          <i class="bi bi-person-lines-fill me-2"></i> user Registration
                      </h5>


                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body ">
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <label class="form-label ">Name</label>
                              <input type="text" class="form-control shadow-none">
                          </div>
                          <div class="col-md-6 mb-3">
                              <label class="form-label ">Email</label>
                              <input type="email" class="form-control shadow-none">
                          </div>
                          <div class=" col-md-6 mb-3">
                              <label class="form-label shadow-none">Phone Number</label>
                              <input type="number" class="form-control shadow-none">
                          </div>
                          <div class=" col-md-6 mb-3">
                              <label class="form-label ">picture</label>
                              <input type="file" class="form-control shadow-none">
                          </div>
                          <div class=" col-md-6 mb-3">
                              <label class="form-label shadow-none">Date of birth</label>
                              <input type="date" class="form-control shadow-none">
                          </div>
                          <div class=" col-md-6 mb-3">
                              <label class="form-label shadow-none">Password</label>
                              <input type="password" class="form-control shadow-none">
                          </div>
                      </div>

                      <div class="text-center">
                          <button class="btn btn-dark">Register</button>
                      </div>

                  </div>

              </div>


          </form>
      </div>
  </div>
  <!-- register form ends... -->

     <!-- Home section.... -->
     <div class="container-fluid">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000 ">
                  <img src="Images/slider1.jpeg" class="carousel-image" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                  <img src="Images/slider2.jpg" class="carousel-image" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="Images/slider3.jpeg" class="carousel-image" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
  </div>
   <!-- Home section end.... -->


    <!-- Checking Booking Availibility -->

    <div class="container Availibility-form">
      <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
              <h5 class="mb-4 ">Check booking availability</h5>

              <form action=" ">
                  <div class="row align-items-end">
                      <div class="col-lg-3 mb-3">
                          <label class="form-label " style="font-weight:700;">Check-in</label>
                          <input type="date" class="form-control shadow-none ">
                      </div>
                      <div class="col-lg-3 mb-3">
                          <label class="form-label " style="font-weight:700;">Check-out</label>
                          <input type="date" class="form-control shadow-none ">
                      </div>
                      <div class="col-lg-2 mb-3">
                          <label class="form-label " style="font-weight:700;">Adult</label>
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>

                      <div class="col-lg-3 mb-3">
                          <label class="form-label " style="font-weight:700;">Children</label>
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                          </select>
                      </div>
                      <div class="col-lg-1 mt-2 mb-lg-3 ">

                          <button type="submit" class=" btn text-white shadow-none custom-bg">Submit</button>
                      </div>

                  </div>



              </form>


          </div>
      </div>
  </div>
<!-- Checking Booking Availibility ends-->

<!-- Our Rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
                <img src="Images/card 1.jpg" class="card-img-top" >
                <div class="card-body">
                  <h4 class="fw-bold">Room</h4>
                  <h6  class="mb-3" > ₹1000 per night</h6>
                 <div class="features mb-4">
                    <h6 class="mb-1 card-heading ">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">2 Rooms</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">1 Bathroom</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">3 Balcony</span>
                 </div>
                 <div class="facilities mb-4">
                    <h6 class="mb-1 card-heading ">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Internet Connection</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Air Conditionar</span> <br>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Telivisioin</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrape">Room Heater</span>
                 </div>
                 <div class="rating mb-4">
                    <h6 class="mb-1 card-heading ">Rating</h6>
                    <span class="badge rounded-pill bg-light ">
                        <i class="fa-solid fa-star text-warning fs-5"></i>
                        <i class="fa-solid fa-star text-warning fs-5"></i>
                        <i class="fa-solid fa-star text-warning fs-5"></i>
                        <i class="fa-solid fa-star text-warning fs-5"></i>
                 
                    </span>
                 </div>
                 <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none ">Book Now</a>
                    <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none">More Details</a>
                 </div>
                
                </div>
              </div>
        </div>
<!-- ------------------------------------------------ -->

<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
        <img src="Images/card 2.jpg" class="card-img-top" >
        <div class="card-body">
          <h4 class="fw-bold">Room</h4>
          <h6  class="mb-3" > ₹2500 per night</h6>
         <div class="features mb-4">
            <h6 class="mb-1 card-heading ">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrape">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">1 Bathroom</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">3 Balcony</span>
         </div>
         <div class="facilities mb-4">
            <h6 class="mb-1 card-heading ">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Internet Connection</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Air Conditionar</span> <br>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Telivisioin</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Room Heater</span>
         </div>
         <div class="rating mb-4">
            <h6 class="mb-1 card-heading ">Rating</h6>
            <span class="badge rounded-pill bg-light ">
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star-half-stroke text-warning fs-5"></i> 
            </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none ">Book Now</a>
            <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none">More Details</a>
         </div>
        
        </div>
      </div>
</div>
<!-- ------------------------------------------------ -->
<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto; ">
        <img src="Images/card3.jpg" class="card-img-top" >
        <div class="card-body">
          <h4 class="fw-bold">Room</h4>
          <h6  class="mb-3" > ₹3500 per night</h6>
         <div class="features mb-4">
            <h6 class="mb-1 card-heading ">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrape">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">1 Bathroom</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">3 Balcony</span>
         </div>
         <div class="facilities mb-4">
            <h6 class="mb-1 card-heading ">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Internet Connection</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Air Conditionar</span> <br>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Telivisioin</span>
            <span class="badge rounded-pill bg-light text-dark text-wrape">Room Heater</span>
         </div>
         <div class="rating mb-4">
            <h6 class="mb-1 card-heading ">Rating</h6>
            <span class="badge rounded-pill bg-light ">
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                
            </span>
         </div>
         <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none ">Book Now</a>
            <a href="#" class="btn btn-sm text-white  shadow-none custom-bg py-2 fw-bold shadow-none">More Details</a>
         </div>
        
        </div>
      </div>
</div>

        <div class="col-lg-12 text-center mt-5">
    <a href="" class=" btn btn-sm text-white shadow-none custom-bg py-2 fw-bold shadow-none" >More Rooms >>></a>
        </div>
    </div>
</div>

<!-- Our Rooms end-->

<!-- Our Facilities -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
<div class="container">
    <div class="row d-flex justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 col-sm-6  text-center bg-white rounded shadow py-4 my-3 ">
          <img src="Images/wifi.png" alt="" width="80px">
           <h5>Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="Images/television.png" alt="" width="80px">
           <h5>Television</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="Images/ac.png" alt="" width="80px">
           <h5>Air Conditioner</h5>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-6 text-center bg-white rounded shadow py-4 my-3 ">
            <img src="Images/room-heater.png" alt="" width="80px">
           <h5>Room Heater</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a  class=" btn btn-sm text-white shadow-none custom-bg py-2 fw-bold shadow-none" href="">More Facilities >>></a>
        </div>
    </div>
</div>


<!-- our facilities end -->


<!-- testimoial section -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
<div class="container">
    <div class="swiper swiper-testimonial rounded-3">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide  p-4 ">
           <div class="profile d-flex align-items-center mb-3">
            <img class="test-img  m-auto" src="Images/test1.jpg"  width="200px" height="150px"  alt=""> 
            
           </div>
           <h6 class="m-0  text-center">User 1</h6> <br>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
           <div class="rating ">
          
           
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
                <i class="fa-solid fa-star text-warning fs-5"></i>
         </div>
          </div>


          <div class="swiper-slide p-4">
            <div class="profile d-flex align-items-center mb-3">
             <img class="test-img m-auto" src="Images/test3.jpg" width="200px" height="150px" alt=""> 
             
            </div>
            <h6 class="m-0 text-center ">User 2</h6> <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
            <div class="rating ">
           
            
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
          </div>
           </div>

          <div class="swiper-slide p-4">
            <div class="profile d-flex align-items-center  mb-3">
             <img class="test-img m-auto" src="Images/test2.jpg"  width="200px" height="150px"  alt="">
      
            </div>
            <h6 class="m-0  text-center ">User 3</h6> <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
            <div class="rating ">
           
            
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
          </div>
           </div>

           <div class="swiper-slide p-4">
            <div class="profile d-flex align-items-center  mb-3">
             <img class="test-img m-auto" src="Images/test3.jpg" width="200px" height="150px" alt=""> 
             
            </div>
            <h6 class="m-0  text-center ">User 4</h6><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
            <div class="rating ">
           
            
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
          </div>
           </div>

           <div class="swiper-slide p-4">
            <div class="profile d-flex align-items-center  mb-3">
             <img class="test-img  m-auto" src="Images/test1.jpg"  width="200px" height="150px"  alt="">
             
            </div>
            <h6 class="m-0  text-center">User 5</h6><br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
            <div class="rating ">
           
            
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
          </div>
           </div>
 
           <div class="swiper-slide p-4">
            <div class="profile d-flex align-items-center mb-3">
             <img class="test-img m-auto" src="Images/test2.jpg"  width="200px" height="150px"  alt="">
            
            </div>
            <h6 class="m-0  text-center">User 6</h6> <br>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi id autem iste ipsa facilis doloribus quia esse. Debitis, hic itaque?</p>
            <div class="rating ">
           
            
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
                 <i class="fa-solid fa-star text-warning fs-5"></i>
          </div>
           </div>

          
          </div>
        <div class="swiper-pagination"></div>
      </div>
    
</div>

<!-- testimoial section end  -->


<!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223978.09749960116!2d77.25494066497895!3d28.699882183067523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bb41c50fdf%3A0xe6f06fd26a7798ba!2sGhaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1679634872748!5m2!1sen!2sin"  height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=" col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call Us</h5><br>
                <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+91 9458765824"><i class="fs-5 fa-solid fa-phone"></i>  +91 9458765824</a><br>
                <a class="d-inline-block mb-2 text-decoration-none text-dark" href="+91 8579654864"><i class="fs-5 fa-solid fa-phone"></i>  +91 8579654864</a>
            </div>


            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow Us</h5><br>
                <a class="d-inline-block mb-2 text-decoration-none text-dark " href="#">
                    <span ><i class="fs-5 fa-brands fa-twitter"></i>   Twitter</span></a><br>
                <a class="d-inline-block mb-2 text-decoration-none text-dark " href="#">
                    <span ><i class="fs-5 fa-brands fa-square-instagram"></i>   Instagram</span></a><br>
                <a class="d-inline-block mb-2 text-decoration-none text-dark " href="#">
                    <span > <i class="fs-5 fa-brands fa-facebook"></i>  Facebook</span></a><br>
                
            </div>
        </div>
    </div>
</div>

<!-- Reach Us end -->

<!-- footer start -->
<?php
        include('partials/footer.php')
    ?>

<!-- footer end -->















    <!-- javascript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   
    <script>
            var swiper = new Swiper(".swiper-testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
breakpoints : {
    320:{
        slidesPerView:1,
    },
    640:{
        slidesPerView:1,
    },
    768:{
        slidesPerView:2,
    },
    1924:{
        slidesPerView:3,
    },

}

    });
    </script>

</body>
</html>










   
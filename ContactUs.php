<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bottstrape 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tavern Hotel</title>
        <!-- fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500;600&family=Farsan&family=Merienda:wght@400;700;800&family=Merriweather+Sans:ital,wght@1,600;1,700&family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet">

        <!-- Font aewsome -->

        <script src="https://kit.fontawesome.com/7d590b86ec.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="CSS/style.css">
        <!-- SWiper  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <title>Contact Us</title>
    </head>

    <body>
        <!-- header start -->

        <?php
        include('partials/navbar.php')
    ?>

        <!-- header end -->


        <div class="my-5 px-4">
            <h2 class="h-font text-center fw-bold  "> Contacts Us</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa quia
                consequuntur itaque eius odit accusantium,<br> nobis facere rem error nihil!</p>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6 col-md-6  mb-8 px-4 bg-white rounded py-4 ">
                        <iframe class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223978.09749960116!2d77.25494066497895!3d28.699882183067523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf1bb41c50fdf%3A0xe6f06fd26a7798ba!2sGhaziabad%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1679634872748!5m2!1sen!2sin"
                            height="320px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                        <h6>Address</h6>
                        <a href="https://goo.gl/maps/xYYntDmW1fzpDwQ86 "
                            class=" d-inline-block text-decoration-none text-dark mb-2" target="blank">
                            <i class="fa-solid fa-location-dot"></i> Ajanta hotel ,Paharganj, New Delhi India
                        </a>
                        <h6 class="mt-3">Call Us</h6>
                        <a class="d-inline-block mb-2 text-decoration-none text-dark" href="tel:+91 9458765824"><i
                                class="fs-6 fa-solid fa-phone"></i> +91 9458765824</a><br>
                        <a class="d-inline-block mb-2 text-decoration-none text-dark" href="+91 8579654864"><i
                                class="fs-6 fa-solid fa-phone"></i> +91 8579654864</a>
                        <h6 class="mt-3">Email</h6>
                        <i class="fa-sharp fa-solid fa-envelope fs-6"></i> <a
                            class=" d-inline-block text-decoration-none text-dark " href="mailto: xyz@gmail.com">
                            xyz@gmail.com</a>
                    </div>
                    <div class="col lg-6 col-md-6 px-4">
                        <div class="bg-white  rounded shadow p-4 ">
                            <form action="">

                                <h5>Send a message</h5>
                                <div class="mb-3">
                                    <label class="form-label fw-500">Name</label>
                                    <input type="text" class="form-control shadow-none " style="width:250px;">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">Email address</label>
                                    <input type="email" class="form-control shadow-none " style="width:250px;">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">Subject</label>
                                    <input type="text" class="form-control shadow-none " style="width:250px;">
                                </div>
                                <button type="submit" class="btn btn-dark custom-bg mt-4">SEND</button>
                            </form>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include ("Links.php") ?>
</head>

<body onload="fun()">
    <div id="loader"></div>
    <?php include ("Navigation.php") ?>

    <!-- Carousel  -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <h1 id="h"></h1>
            <div class="carousel-item active" data-bs-interval="2500">
                <img src="./images/wedding.jpg" class="d-block w-100 " alt="Error">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="./images/deco6.jpg" class="d-block w-100" alt="Error">
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <img src="./images/wedding2.jpg" class="d-block w-100" alt="Error">
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

    <!-- Tabs  -->

    <div class="container mt-5">

        <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active text-dark" id="ex3-tab-1" data-bs-toggle="tab" href="#ex3-tabs-1" role="tab"
                    aria-controls="ex3-tabs-1" aria-selected="true">All</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="ex3-tab-2" data-bs-toggle="tab" href="#ex3-tabs-2" role="tab"
                    aria-controls="ex3-tabs-2" aria-selected="false">Wedding</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="ex3-tab-3" data-bs-toggle="tab" href="#ex3-tabs-3" role="tab"
                    aria-controls="ex3-tabs-3" aria-selected="false">Birthday</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-dark" id="ex3-tab-4" data-bs-toggle="tab" href="#ex3-tabs-4" role="tab"
                    aria-controls="ex3-tabs-4" aria-selected="false">Decoration</a>
            </li>
        </ul>

        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                <div class="row">
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds.jpg" class="img-fluid rounded" alt="error" data-aos="zoom-in"
                            data-aos-duration="2000">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds1.jpg" class="img-fluid rounded" alt="error" data-aos="zoom-in"
                            data-aos-duration="2000">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/deco3.jpg" class="img-fluid rounded" alt="error" data-aos="zoom-in"
                            data-aos-duration="2000">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/birth.jpg" class="img-fluid rounded" alt="error" data-aos="zoom-in"
                            data-aos-duration="2000">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                <div class="row">
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds1.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds2.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/Weds3.jpg" class="img-fluid rounded" alt="error">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                <div class="row">
                    <div class="col-sm-6 my-2">
                        <img src="./images/birth.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/birth1.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/birth2.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/birth3.jpg" class="img-fluid rounded" alt="error">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex3-tabs-4" role="tabpanel" aria-labelledby="ex3-tab-4">
                <div class="row">
                    <div class="col-sm-6 my-2">
                        <img src="./images/deco.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/deco1.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/deco4.jpg" class="img-fluid rounded" alt="error">
                    </div>
                    <div class="col-sm-6 my-2">
                        <img src="./images/deco3.jpg" class="img-fluid rounded" alt="error">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Our Team  -->
    <div class="container">
        <div class="row mt-5 mb-2 text-center">
            <div class="col-sm-12">
                <h1>OUR TEAM</h1>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <!-- first Profile  -->
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="3000">
                <img src="./Images/boyAvatar1.jpg" class="img img-fluid rounded-circle">
                <h1 class="mt-4 text-center">John</h1>
            </div>

            <!-- second Profile  -->
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="3000">
                <img src="./Images/boyAvatar2.jpg" class="img img-fluid rounded-circle">
                <h1 class="mt-4 text-center">Oliver</h1>
            </div>

            <!-- third Profile  -->
            <div class="col-sm-4" data-aos="fade-up" data-aos-duration="3000">
                <img src="./Images/girlAvatar.jpg" class="img img-fluid rounded-circle">
                <h1 class="mt-4 text-center">Sophia</h1>
            </div>

        </div>
    </div>


    <?php include ("Footer.php") ?>

    <script>

        AOS.init();

        var typed = new Typed("#h", {
            strings: ["Utsav_Universe"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });

        preloader = document.getElementById("loader");

        function fun() {
            preloader.style.display = "none";
        }
    </script>

</body>

</html>
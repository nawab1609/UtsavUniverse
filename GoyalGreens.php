<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("Links.php") ?>
</head>

<body>
    <?php include("Navigation.php") ?>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <h1 id="hh"></h1>
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="./Images/GoyalGreens.jpg" class="d-block w-100 imgFill">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./Images/GoyalGreens1.jpg" class="d-block w-100  imgFill">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./Images/GoyalGreens7.jpg" class="d-block w-100  imgFill">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./Images/GoyalGreens3.jpg" class="d-block w-100  imgFill">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./Images/GoyalGreens4.jpg" class="d-block w-100  imgFill">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./Images/GoyalGreens5.jpg" class="d-block w-100  imgFill">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12  bgi bgImg31">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center my-4">
                    Goyal Greens
                </h1>
                <p class="fs-5">
                    Established in the year 2017, Goyal Greens in Pal Road, Jodhpur is a top player in the
                    category in the Jodhpur. This well-known establishment acts as a one-stop destination servicing
                    customers both local and from other parts of Jodhpur. Over the course of its journey, this business
                    has established a firm foothold in it’s industry. The belief that customer satisfaction is as
                    important as their products and services, have helped this establishment garner a vast base of
                    customers, which continues to grow by the day. This business employs individuals that are dedicated
                    towards their respective roles and put in a lot of effort to achieve the common vision and larger
                    goals of the company. In the near future, this business aims to expand its line of products and
                    services and cater to a larger client base. In Jodhpur, this establishment occupies a prominent
                    location in Pal Road. It is an effortless task in commuting to this establishment as there are
                    various modes of transport readily available.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens.jpg" alt="Card image">

                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens8.jpg" alt="Card image">

                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens1.jpg" alt="Card image">

                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens2.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens3.jpg" alt="Card image">

                </div>
            </div>

            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens4.jpg" alt="Card image">

                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens5.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens6.jpg" alt="Card image">
                </div>
            </div>
            <div class="col-sm-4 my-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card text-center">
                    <img class="card-img-top" src="./Images/GoyalGreens7.jpg" alt="Card image">

                </div>
            </div>

        </div>
    </div>
    <?php include("Footer.php") ?>
    <script>
        var typed = new Typed("#hh", {
            strings: ["Goyal Greens"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });

    </script>
</body>

</html>
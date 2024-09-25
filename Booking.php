<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("Links.php") ?>
</head>

<body>
    <?php include("Navigation.php") ?>

    <div class="container">
        <div class="row space"></div>
        <div class="row text-center">

            <div class="col-lg-6 box11 "></div>
            <div class="col-lg-6 box">
                <h2 class="mb-3">Booking</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="action.php" method="post">
                            <div class="row mb-3 mt-3">
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg" placeholder="First name"
                                        name="fname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg" placeholder="Last name"
                                        name="lname">
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col">
                                    <input type="email" class="form-control form-control-lg" placeholder="Email"
                                        name="email">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control form-control-lg" placeholder="Phone number"
                                        name="number">
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col">
                                    <select class="form-select text-center form-select-lg" name="menu">
                                        <option value="Wedding">Wedding</option>
                                        <option value="Birthday">Birthday</option>
                                        <option value="Decoration">Decoration</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Dj">Dj</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 mt-3">
                                <div class="col">
                                    <textarea class="form-control form-control-lg"
                                        placeholder="Enter your address here.." name="address"></textarea>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <input type="submit" class="btn btn-danger text-light btn-lg" value="Submit" name="book">
                        </form>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Footer.php") ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./Links.php") ?>
</head>

<body id="logback">
    <div class="container-fluid">
<div class="row my-5"></div>
<div class="row my-2"></div>
        <!-- form row  -->
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4  p-5 rounded">
                <h1 class="text-center text-light">Utsav_Universe</h1>
                <form action="action.php" method="POST">
                    <h1 class="h3 my-4 fw-normal text-center text-light ">Admin Login</h1>

                    <div class="form-floating my-2 mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="user">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mt-2 mb-3 ">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <input type="submit" name="log" value="Login" class="btn btn-warning w-100 btn btn-lg">

                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>
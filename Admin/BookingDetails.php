<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "utsav_universe") or die("not connect");
$qry = "select * from booking";
$res = mysqli_query($conn, $qry) or die("not fire");

if (isset($_SESSION['user']) and $_SESSION['status'] == true) {
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <?php include("Links.php") ?>
    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.min.css">
  </head>

  <body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
      <!-- ! Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-start">
          <div class="sidebar-head">
            <a href="http://localhost/UtsavUniverse/admin/Dashboard.php" class="logo-wrapper" title="Home">
              <span class="sr-only">Home</span>
              <span class="icon logo" aria-hidden="true"></span>
              <div class="logo-text">
                <span class="logo-titles">Utsav_Universe</span>
                <span class="logo-subtitle">Booking</span>
              </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
              <span class="sr-only">Toggle menu</span>
              <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
          </div>
          <div class="sidebar-body">
            <ul class="sidebar-body-menu">
              <li>
                <a  href="Dashboard.php"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
              </li>
              <li class="d-none">
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Posts
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="posts.html">All Posts</a>
                        </li>
                        <li>
                            <a href="new-post.html">Add new post</a>
                        </li>
                    </ul>
                </li>
              <li>
                <a href="BookingDetails.php" class="active">
                  <span class="icon document" aria-hidden="true"></span>Booking Details

                </a>
              </li>
              <li>
                <a href="ContactDetails.php">
                  <i class="bi bi-person-video2 fs-3 me-3 text-info"></i>Contact Details

                </a>

              </li>

          </div>
        </div>
      </aside>
      <div class="main-wrapper">
        <!-- ! Main nav -->
        <nav class="main-nav--bg">
          <div class="container main-nav">
            <div class="main-nav-start">

            </div>
            <div class="main-nav-end">
              <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
              </button>

              <div class="notification-wrapper">
                <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                  <span class="sr-only">To messages</span>
                  <span class="icon notification active" aria-hidden="true"></span>
                </button>
                <ul class="users-item-dropdown notification-dropdown dropdown">
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon info">
                        <i data-feather="check"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title">System just updated</span>
                        <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                          here.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon danger">
                        <i data-feather="info" aria-hidden="true"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title">The cache is full!</span>
                        <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                          interfere ...</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="##">
                      <div class="notification-dropdown-icon info">
                        <i data-feather="check" aria-hidden="true"></i>
                      </div>
                      <div class="notification-dropdown-text">
                        <span class="notification-dropdown__title">New Subscriber here!</span>
                        <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="link-to-page" href="##">Go to Notifications page</a>
                  </li>
                </ul>
              </div>
              <div class="nav-user-wrapper">
                <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                  <span class="sr-only">My profile</span>
                  <span class="nav-user-img">
                    <img src="../admin/img/avatar/admin.jpg" alt="User name">
                  </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
                  <li><a href="##">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span>Profile</span>
                    </a></li>
                  <li><a href="##">
                      <i data-feather="settings" aria-hidden="true"></i>
                      <span>Account settings</span>
                    </a></li>
                  <li><a class="danger" href="action.php?logout=1">
                      <i data-feather="log-out" aria-hidden="true"></i>
                      <span>Log out</span>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!-- ! Main -->
        <main class="main users chart-page" id="skip-target">
          <div class="container">
            <!-- <h2 class="main-title">Dashboard</h2> -->
            <h2 class="main-title">
              <?php
              echo "welcome " . $_SESSION['user'];
              ?>
            </h2>
            <div class="row stat-cards">
              <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                  <div class="stat-cards-icon primary">
                    <i data-feather="bar-chart-2" aria-hidden="true"></i>
                  </div>
                  <div class="stat-cards-info">
                    <p class="stat-cards-info__num">1478 286</p>
                    <p class="stat-cards-info__title">Total visits</p>
                    <p class="stat-cards-info__progress">
                      <span class="stat-cards-info__profit success">
                        <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                      </span>
                      Last month
                    </p>
                  </div>
                </article>
              </div>
              <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                  <div class="stat-cards-icon warning">
                    <i data-feather="file" aria-hidden="true"></i>
                  </div>
                  <div class="stat-cards-info">
                    <p class="stat-cards-info__num">1478 286</p>
                    <p class="stat-cards-info__title">Total visits</p>
                    <p class="stat-cards-info__progress">
                      <span class="stat-cards-info__profit success">
                        <i data-feather="trending-up" aria-hidden="true"></i>0.24%
                      </span>
                      Last month
                    </p>
                  </div>
                </article>
              </div>
              <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                  <div class="stat-cards-icon purple">
                    <i data-feather="file" aria-hidden="true"></i>
                  </div>
                  <div class="stat-cards-info">
                    <p class="stat-cards-info__num">1478 286</p>
                    <p class="stat-cards-info__title">Total visits</p>
                    <p class="stat-cards-info__progress">
                      <span class="stat-cards-info__profit danger">
                        <i data-feather="trending-down" aria-hidden="true"></i>1.64%
                      </span>
                      Last month
                    </p>
                  </div>
                </article>
              </div>
              <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                  <div class="stat-cards-icon success">
                    <i data-feather="feather" aria-hidden="true"></i>
                  </div>
                  <div class="stat-cards-info">
                    <p class="stat-cards-info__num">1478 286</p>
                    <p class="stat-cards-info__title">Total visits</p>
                    <p class="stat-cards-info__progress">
                      <span class="stat-cards-info__profit warning">
                        <i data-feather="trending-up" aria-hidden="true"></i>0.00%
                      </span>
                      Last month
                    </p>
                  </div>
                </article>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">

                <div class="users-table table-wrapper">
                  <table class="posts-table">
                    <thead>
                      <tr class="users-table-info">

                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Booking</th>
                        <th>Address</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while ($row = mysqli_fetch_array($res)) {
                        echo "<tr><td>" . $row['id'] . "</td><td>"
                          . $row['first_name'] . "</td><td>"
                          . $row['last_name'] . "</td><td>"
                          . $row['email'] . "</td><td>"
                          . $row['phone'] . "</td><td>"
                          . $row['booking_for'] . "</td><td>"
                          . $row['address'] . "</td><td>
                          <a href='action.php?id=" . $row['id'] . "'><i class='fas fa-trash-alt text-danger' ></i></a>
                          </td>

          
          </tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </main>
        <!-- ! Footer -->
        <footer class="footer">
          <div class="container footer--flex">
            <div class="footer-start">
              <p>Utsav_Universe</p>
            </div>

          </div>
        </footer>
      </div>
    </div>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
  </body>

  </html>


  <?php
} else {
  header("location:index.php");
  // echo "error";
}
?>
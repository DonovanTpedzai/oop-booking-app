<?php

    require "../classes/Hotel.php";

    session_start();

    /* 
        Array inside of the SESSION Superglobal to hold hotel objects that
        are inside the system
    */

    $_SESSION['hotelList'] = [
        
        new Hotel(
            1, 
            "The InterContinental", 
            500, 
            20, 
            false, 
            "Hotel & Spa is a family-friendly hotel that offers a wide range of accommodation types, from rooms to suites. All this in the peaceful surroundings of our beautiful gardens, will make your time at (CN) an unforgettable holiday.",
            "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
        ),
        new Hotel(
            2, 
            "Palazzo", 
            600, 
            30, 
            false, 
            "In a small (CN) traditional village called lar Clamonte', which is one of the most beautiful and picturesque places in (CN), we chose to build a lovely high quality hotel which will give our guests the opportunity to experience a holiday with wonderful surroundings of nature and at the same time luxury and coziness.",
            "https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
        ),
        new Hotel(
            3, 
            "Peermont D'oreale Grande", 
            500, 
            0, 
            true, 
            "offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
            "https://images.unsplash.com/photo-1596178065887-1198b6148b2b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MXxzZWFyY2h8NHx8cmVzb3J0fHwwfHx8fDE2Mjc4NTAzNzY&ixlib=rb-1.2.1&q=80&w=1080"
        ),
        new Hotel(
            4, 
            "Lanzerac Hotel & spar", 
            800, 
            10, 
            false, 
            "hotel offers a complete experience with common areas that allow you to meet new people in a unique atmosphere. Lounge area, Ping Pong table, table soccer, darts & Boiler room: we told you, it’s not a hotel like the others, it’s a sharing hotel.",
            "https://images.unsplash.com/photo-1519449556851-5720b33024e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
        )
    ];

    /* 
        If user submitted data through the form
        we want to save their data to local variables
    */
    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $inDate = $_POST['checkInDate'];
        $outDate = $_POST['checkoutDate'];

        $userNumDays = Hotel::calculateNumDays($inDate, $outDate);

        // saving user data to SESSION superglobal
        $_SESSION['customer'] = [
            'name' => $name,
            'email' => $email,
            'inDate' => $inDate,
            'outDate' => $outDate,
            'userNumDays' => $userNumDays,
        ];

        var_dump($_SESSION['customer']);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

</head>

<body>
    <!-- nav starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark" class="container">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-success" href="#">The Don's</a>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="../pages/hotels.php">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
           <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
        <!-- nav ends -->
<section id="ourhotels" class="p-5 bg-success">
      <div class="container">
        <h2 class="text-center text-white">Our Hotels</h2><p><i class="bi bi-bank text-dark mx-1"></i></p>
        <p class="lead text-center text-white mb-5">
          Our hotels  have over 15 years providing prestigious quality service in  the
          industry
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://images.unsplash.com/photo-1568084680786-a84f91d1153c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                  class="img-thumbnail"
                  alt=""
                 
                />
                <h3 class="card-title mb-3">The Intercontinental</h3>
                <p class="card-text">
                "Hotel & Spa is a family-friendly hotel that offers a wide range of accommodation types, from rooms to suites. All this in the peaceful surroundings of our beautiful gardens, will make your time at (CN) an unforgettable holiday.",
                </p>
                <a href="#"><i class="bi bi-wifi text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-suit-spade text-dark mx-1"></i></i></i></a>
                <a href="#"><i class="bi bi-building text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-heart text-dark mx-1"></i></a></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                  class="img-thumbnail"
                  alt=""
                />
                <h3 class="card-title mb-3">Palazzo</h3>
                <p class="card-text">
                "otel which will give our guests the opportunity to experience a holiday with wonderful surroundings of nature and at the same time luxury and coziness.
                bcujhecbjkewncknejwij newincweione mowemceowimeom ewoewmno wqdhihwiidn ",
                </p>
                <a href="#"><i class="bi bi-wifi text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-suit-spade text-dark mx-1"></i></i></i></a>
                <a href="#"><i class="bi bi-building text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-heart text-dark mx-1"></i></a></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://th.bing.com/th/id/R.e864d3f8a0f3d55ee1b7ed4d5dae3443?rik=DzfAzE6WW%2bgvGQ&riu=http%3a%2f%2fimages.unsplash.com%2fphoto-1520250497591-112f2f40a3f4%3fixlib%3drb-1.2.1%26q%3d80%26fm%3djpg%26crop%3dentropy%26cs%3dtinysrgb%26w%3d1080%26fit%3dmax%26ixid%3deyJhcHBfaWQiOjEyMDd9&ehk=K%2f29rDRhiEY8D0uYg2W7UOWwnwXDhlUXvIfNnikLSYc%3d&risl=&pid=ImgRaw&r=0"
                  class="img-thumbnail"
                  alt=""
                />
                <h3 class="card-title mb-3">Peermont D'oreale</h3>
                <p class="card-text">
                "offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel, (HN) offers you a place to live and meet people.",
                </p>
                <a href="#"><i class="bi bi-wifi text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-suit-spade text-dark mx-1"></i></i></i></a>
                <a href="#"><i class="bi bi-building text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-heart text-dark mx-1"></i></a></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card bg-light">
              <div class="card-body text-center">
                <img
                  src="https://images.unsplash.com/photo-1568084680786-a84f91d1153c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80"
                  class="img-thumbnail"
                  alt=""
                />
                <h3 class="card-title mb-3">Lanzarec</h3>
                <p class="card-text">
                "hotel offers a complete experience with common areas that allow you to meet new people in a unique atmosphere. Lounge area, Ping Pong table, table soccer, darts & Boiler room: we told you, it’s not a hotel like the others, it’s a sharing hotel.
                lorem10 wvdghhfunbvijncv",
                </p>
                <a href="#"><i class="bi bi-wifi text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-suit-spade text-dark mx-1"></i></i></i></a>
                <a href="#"><i class="bi bi-building text-dark mx-1"></i></i></a>
                <a href="#"><i class="bi bi-heart text-dark mx-1"></i></a></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- card ends -->
    <!-- should use require
 -->
        
   
        <div class="container text-center">
            <div class="text-center"></div>
            <h1 class="title" class="text-center">
                Hotel Reservation:
            </h1>

    <ul class="grid">
        <?php
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
                <div class='box m-2'>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                        } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                        }
            echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <div class='is-flex'>
                        <form class='m-1' action='confirm-booking.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-dark' name='book'>Book</button>
                        </form>

                        <form class='m-1' action='hotel-details.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-success' name='book'>Details</button>
                        </form>
                    </div>

                </div>
            ";
        }
        ?>
    </ul>
            <br>
            <div class="text-center">
                <form action="hotels.php" method="post">
                    <button type="submit" class="btn btn-outline-success"type="submit" name="submit" class="btn btn-sucess btn-lg" role="button">Logout</button>
                </form>
            </div>
    </div>
    <!-- cards -->
   
</body>

</html>
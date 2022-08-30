
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
<style>
        #firstimg{border-radius:35px;}
</style>

</head>

<body>

    <!-- <div id="app">
        <h2 class="subtitle">
            Please enter your details in the form below to book a hotel..
        </h2>
        <form action="./pages/hotels.php" method="post">
            <input type="text" name="customerName" placeholder="Please enter your name.." required>
            <input type="email" name="customerEmail" placeholder="Please enter your email.." required>
            <label for="checkInDate">Check In Date</label>
            <input type="date" name="checkInDate" required>
            <label for="checkInDate">Check Out Date</label>
            <input type="date" name="checkoutDate" required>
            <button type="submit" name="submit" class="button is-danger">View Hotels</button>
        </form> -->

</html>
<body>
      <!-- nav starts -->
    <nav class="navbar navbar-expand-md navbar-light bg-dark" class="container">
      <div class="container">
      <a class="navbar-brand text-success" href="#"><h1>The Don's</h1></a>
      
        <button
         class="navbar-toggler" 
         type="button"
         data-bs-toggle="collapse" 
         data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        
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
           
          <!-- </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Hotel</button>
          </form> -->
        </div>
      </div>
    </nav>
   <!-- end of nav -->
   <!-- jumbotron starts -->
   
    <!-- jumbotron -->
    <div class="jumbotron text-center">
        <div class="container">
          <h1>Welcome to <span class="text-success">The Don's </span>Group of Hotels</h1>
        <p class="lead">Presidential,where soft life luxury & the elite collide...</p>
        <!-- <img src="./img/images/pexels-pixabay-53464 (1).jpg" width="300px" alt=""> -->
        <img  id = "firstimg"src="./img/images/presidential.jpg" width="500px" alt="">
        <p class="lead">
          <br>
          <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
      </div>
  </div>
<!-- jumbotron ends -->
    <div class="container">
                    <p>Enter your details  to book a hotel..</p> 
                <form action="./pages/hotels.php" method="post">
                    <div class="form-group">
                        <label for="">name</label>
                        <input type="text" name="customerName" class="form-control" placeholder="Add name.." required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="customerEmail" class="form-control" placeholder="Add email.." required>
                    </div>
                    <br>
                    <span>
                        <div class="form-group">
                            <label for="checkInDate">Check In Date</label>
                            <input type="date" name="checkInDate" required>
                        </div>
                    </span>
                    <br>
                    <div class="text-right">
                        <div class="form-group">
                            <label for="checkOutDate">Check Out Date</label>
                            <input type="date" name="checkoutDate" required>
                        </div>
                    </div>
                    <br>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success"type="submit" name="submit" class="btn btn-sucess btn-lg" role="button">View Hotels</button>
                    </div>
                   
                  
                    
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
        
    </div>

</body>

</html> 
<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />   
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
    <title>J.J. Inter College</title>
</head>
<body>
    <!-- Navbar -->
    <section>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top" id="navbar">
        <div class="container">
          <a href="index.php" class="navbar-brand">
                <img src="images/logo.png" alt="" id="logo">  
            <b id="colname">J.J. Inter College</b>
            </a>
  
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="gallery.php" class="nav-link">Gallery</a>
              </li>
              <li class="nav-item">
                <a href="schoolstaff.php" class="nav-link">School Staff</a>
              </li>
              <li class="nav-item">
                <a href="#contactus" class="nav-link">Contact us</a>
              </li>
              <li class="nav-item">
                <a href="aboutus.php" class="nav-link">About us</a>
              </li>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="message.php">Message</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#add" href="#add">Admission</a></li>
                        <li><a class="dropdown-item" href="sports.php">Sports</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- education heading -->
    <section class="bg-info text-dark text-center">
        <div class="container" id="welcomesec">
            <span><h4 id="welcome">Education</h4></span>
        </div>
    </section>

    <!-- About us content -->
    <section class="p-5">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md">
              <img src="images/education.svg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
              
              
              <p>
                Since its inception, apart from Academics, J.J Inter College has excelled at Sports, 
                 there have been many students 
                and Alumni who have excelled at various platforms right from the District level to the State and 
                National Levels. We often also hear of Alumni who have taken up sports Internationally and 
                represented different countries in their National Games.

                The Management have always paid keen attention to the overall development of the students, and 
                this meant that Sports had to be an integral part of the curriculum.

                Our school has qualified teachers in the field of Physical Education who have motivated and taught 
                students the art of playing games like football, hockey, cricket, volleyball, basketball, handball,
                 badminton and table tennis. Aspiring Students are also encouraged to participate in athletics like javelin, shot put, discuss throw, track and field events.

                Recently, we have also started an initiative where we have short YouTube videos on different sports
                 and PT activities.
              </p>
            </div>
          </div>
        </div>
      </section>

      

    




 
  <!-- Contact & Map -->
  <section class="p-5" id="contactus">
    <div class="container">
      <div class="row g-4">
        <div class="col-md">
          <h2 class="text-center mb-4">Contact Info</h2>
          <ul class="list-group list-group-flush lead">
            <li class="list-group-item">
              <span class="fw-bold">Address:</span> J.J Inter College, Chilkana Sultanpur, Saharanpur, Chilkana, 
              Uttarpradesh - 247231
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Landline:</span> (555) 555-5555
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Email us:</span> 
            </li>
            <li class="list-group-item">
              <span class="fw-bold">Facebook:</span> 
            </li>
          </ul>
        </div>
        <div class="col-md">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>


    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
          <p class="lead">Copyright &copy; 2021 J. J. Inter College</p>
  
          <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
          </a>
        </div>
      </footer>

      <!-- Modal -->
     <div
     class="modal fade"
     id="add"
     tabindex="-1"
     aria-labelledby="addLabel"
     aria-hidden="true"
   >
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="addLabel">Admission</h5>
           <button
             type="button"
             class="btn-close"
             data-bs-dismiss="modal"
             aria-label="Close"
           ></button>
         </div>
         <form action="" method="POST">
         <div class="modal-body">
           <p class="lead">Fill out this form and we will get back to you</p>
           <form>
             <div class="mb-3">
               <label for="first-name" class="col-form-label">
                 First Name:
               </label>
               <input type="text" class="form-control" id="first-name" name="firstname" >
             </div>
             <div class="mb-3">
               <label for="last-name" class="col-form-label">Last Name:</label>
               <input type="text" class="form-control" id="last-name" name="lastname" >
             </div>
             <div class="mb-3">
               <label for="email" class="col-form-label">Email:</label>
               <input type="email" class="form-control" id="email" name="email" >
             </div>
             <div class="mb-3">
               <label for="phone" class="col-form-label">Phone:</label>
               <input type="tel" class="form-control" id="phone" name="phoneno" >
             </div>
           
         </div>
         <div class="modal-footer">
           <button
             type="button"
             class="btn btn-secondary"
             data-bs-dismiss="modal">
             Close
           </button>
           <button type="submit" class="btn btn-primary" name="submit">Submit</button>

           </form>
         </div>
       </div>
     </div>
   </div>




      
 <script>
  mapboxgl.accessToken = 'pk.eyJ1IjoicGF2YW5rdW1hcnVwcGFyIiwiYSI6ImNrd3owNmw1YjBkd2oycG55b2ttNWoxdHcifQ.Jc9wgHd5Lk995aujbv0xyA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [77.47478331990361,  30.08492256738412],
zoom: 12,
});
</script>

    
<?php
if(isset($_POST['submit']))
{
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$em = $_POST['email'];
$ph = $_POST['phoneno'];

      if($fn != "" && $ln !="" && $em !="" && $ph !="")
      {
          $query = "INSERT INTO FORMDETAILS VALUES ('$fn','$ln','$em','$ph')";
          $data = mysqli_query($conn,$query);
      
if($data)
{
  echo "data is inserted";
}
      }
else{
  echo "data not inserted";
}
}

?>
      





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
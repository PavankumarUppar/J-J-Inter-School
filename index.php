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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.js">
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
                <a href="#" class="nav-link">Home</a>
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

    <!-- Welcome section -->
    <section class="bg-info text-dark text-center">
        <div class="container" id="welcomesec">
            <span><h4 id="welcome">Welcome to the Official Website of J.J. Inter College</h4></span>
        </div>
    </section>

    <!-- carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="images/1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>School</h5>
            
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/2.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Yoga Day</h5>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>School</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  <!-- Prinicipal -->
  <section id="" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="images/principal.JPG" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h1>Shri Satyaveer Choudhary</h1>
            <h2>Principal's Desk</h2>
            <p class="lead">
              We are a school with a difference! We value individualism, creativity 
              and innovation and strive to nurture them in our students.
            </p>
            <p>
              Our motto “Education for all” is at the 
              heart of everything we do at the school. Our vision for the J.J. Inter College is that “We 
              will provide the best education in the subcontinent. To attain this vision, the school is committed to 
              continuous improvement with goals, strategies, policies and procedures in the school's progress. We aim to 
              not just impart knowledge to the students, but also to inculcate in them - wisdom, compassion and a humanitarian 
              spirit. We have a multi-cultural student population; hence we teach children the importance of tolerance and respecting 
              each others culture. Discipline, values and integrity are the very foundation of this school.
            </p>
            
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
              <h2>Student Life</h2>
              <p class="lead">
                We aim for a holistic growth of our students and lay equal emphasis on both 
                academics and co-curricular activities.
              </p>
              <p>
                The school provides a balanced, safe and realistic environment for young 
                children to grow and learn. The school has a huge building with airy, sunny 
                and spacious smart classes and a spacious library with more than 10,000 books. 
                There are large, lush green playground for sports like Cricket, Volleyball and 
                Football with separate Basketball and Badminton courts and also a Games room for 
                indoor games like Chess, Carom, TT, etc. The large, covered Swimming pool has witnessed 
                a number of Inter and Intra School Swimming competitions.
              </p>
            </div>
            <div class="col-md">
              <img src="images/soccer-not-css.svg" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>

       <!-- Boxes -->
    <section class="p-5">
        <div class="container">
          <div class="row text-center g-4">
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <h3 class="card-title mb-3">Sports</h3>
                  <p class="card-text">
                    Sports is human life in microcosm Howard Cosell, We lay emphasis on physical education 
                    and physical fitness. Apart from learning the intricacies of various games, sports and 
                    physical education.
                  </p>
                  <a href="sports.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-secondary text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-person-square"></i>
                  </div>
                  <h3 class="card-title mb-3">Education</h3>
                  <p class="card-text">
                    What is the purpose of school education?
                    “The main purpose of the J.J. Inter College is to provide for the fullest possible development 
                    of each learner for living morally, creatively, and productively in a democratic society.”
                  </p>
                  <a href="education.php" class="btn btn-dark">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="card bg-dark text-light">
                <div class="card-body text-center">
                  <div class="h1 mb-3">
                    <i class="bi bi-people"></i>
                  </div>
                  <h3 class="card-title mb-3">Extra-Curricular</h3>
                  <p class="card-text">
                    Extracurricular activities include student participation in clubs, student government groups, 
                    sports teams and even through volunteer work at your school or in your local community. 
                    Extracurricular activities are supplement ways students can be active outside of the classroom 
                    setting
                  </p>
                  <a href="extracuruculum.php" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
          <h2 class="text-center mb-4">Why J.J. Inter College?</h2>
          <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-one"
                >
                Well qualified Staff
                </button>
              </h2>
              <div
                id="question-one"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Education is not just literacy. It is a much broader concept than that. Imparting the right education is equipping a 
                  child not only with the knowledge of various subjects, but also empowering them with abilities and skills to face the various 
                  challenges of life. We have always aimed at the holistic development of every student, nurturing every important aspect - physical, 
                  cultural, emotional and intellectual.
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-two"
                >
                Preference for Sports
                </button>
              </h2>
              <div
                id="question-two"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                    The school excels in all sports, mainly football, cricket and athletics. It also has its own 
                    School Band.
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-three"
                >
                Clean and Pristine Environment
                </button>
              </h2>
              <div
                id="question-three"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                    In today's environment, proper school cleaning and maintenance are critical to a school's 
                    safety and daily operation. Bond Services goes above and beyond to ensure the impeccable 
                    cleanliness of your school.
                </div>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-four"
                >
                Personal Care
                </button>
              </h2>
              <div
                id="question-four"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                    Have a clear policy, understood and accepted by staff, parents and pupils, that provides an 
                    agreed basis for ensuring pupils receive proper personal care and support when at school.
                </div>
              </div>
            </div>
            <!-- Item 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-five"
                >
                Student Government
                </button>
              </h2>
              <div
                id="question-five"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                    Schools are impressed by students that have held leadership positions. What better way to 
                    demonstrate such skills than holding a seat in your student government association? It's a 
                    terrific way to participate in school matters, to show you're both capable and responsible.
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Prinicipal -->
  <section id="learn" class="p-5 bg-secondary text-light">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <img src="images/manager.jpeg" class="img-fluid" alt="" />
        </div>
        <div class="col-md p-5">
          <h2>Shri Jaynath Sharma</h2>
          <p class="lead">
            We are a school with a difference! We value individualism, creativity 
            and innovation and strive to nurture them in our students.
          </p>
          <p>
            Our motto “Education for all” is at the 
            heart of everything we do at the school. Our vision for the J.J. Inter College is that “We 
            will provide the best education in the subcontinent. To attain this vision, the school is committed to 
            continuous improvement with goals, strategies, policies and procedures in the school's progress. We aim to 
            not just impart knowledge to the students, but also to inculcate in them - wisdom, compassion and a humanitarian 
            spirit. We have a multi-cultural student population; hence we teach children the importance of tolerance and respecting 
            each others culture. Discipline, values and integrity are the very foundation of this school.
          </p>
          
        </div>
      </div>
    </div>
  </section>

  <!-- Prinicipal -->
  <section id="learn" class="p-5 bg-secondary text-light">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <img src="images/president.jpeg" class="img-fluid" alt="" />
        </div>
        <div class="col-md p-5">
          <h2>Shri Singhal</h2>
          <p class="lead">
            We are a school with a difference! We value individualism, creativity 
            and innovation and strive to nurture them in our students.
          </p>
          <p>
            Our motto “Education for all” is at the 
            heart of everything we do at the school. Our vision for the J.J. Inter College is that “We 
            will provide the best education in the subcontinent. To attain this vision, the school is committed to 
            continuous improvement with goals, strategies, policies and procedures in the school's progress. We aim to 
            not just impart knowledge to the students, but also to inculcate in them - wisdom, compassion and a humanitarian 
            spirit. We have a multi-cultural student population; hence we teach children the importance of tolerance and respecting 
            each others culture. Discipline, values and integrity are the very foundation of this school.
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
        <p class="lead">Copyright &copy; 2021   J. J. Inter College</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1" id="upbutn"></i>
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



   <script
   src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
   crossorigin="anonymous"
 ></script>
 

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

     

    

</body>
</html>
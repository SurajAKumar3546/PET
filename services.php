<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <title>Document</title>
    </head>
    <body>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "pet service";

            // Check if the connection is successful
            $con = mysqli_connect($server, $username, $password, $database);
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $Name = $_POST['Name'];
            $Phone_no = $_POST['Phone_no'];
            $Email = $_POST['Email'];
            $Age_of_pet = $_POST['Age_of_pet'];
            $Type_of_pet = $_POST['Type_of_pet'];
            $Service = $_POST['Service'];

            $sql = "INSERT INTO `pet service`.`customer` (Name, Phone_no, Email, Age_of_pet, Type_of_pet, Service) 
            VALUES ('$Name', '$Phone_no', '$Email', '$Age_of_pet', '$Type_of_pet', '$Service');";

            if ($con->query($sql) == true) {
                echo "Thank you for submitting your request";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            mysqli_close($con);
        }
        ?> 
        <nav  class="navbar navbar-expand-lg fixed-top fs-5 mb-5" style="background-color: #e3f2fd;">
            <div class="container-fluid ">
                <a class="navbar-brand" href="http://localhost/PhpProject1/index.php">
                    <img style="height:50px;width:50px;border-radius: 20px; margin-left: 20px;"
                         src="https://img.freepik.com/free-vector/adopt-pet-illustration-design_23-2148539292.jpg?w=740&t=st=1681287958~exp=1681288558~hmac=f149ae95a991b290e1918a50564bcd3da1e65b7e46b686277b667dce409a5596"
                         alt="Logo"class="d-inline-block align-text-top">  <h4 id="pa">Pet Agency</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto  ">
                        <li class="nav-item">
                            <a  id="h"class="nav-link ms-5 " aria-current="page"
                                href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="a" class="nav-link ms-5" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="s" class="nav-link ms-5" href="#services">Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center " style="margin-top:7rem">
            <h1> Confirm <span style="color:rgb(170, 92, 3);font-size: 45px;">Your</span> Appointment !</h1>
        </div>
        <hr style="border:2px solid rgb(16, 0, 0)">


        <div class="container mt-5 py-4" style="background-color: rgb(252, 241, 227);border-radius:50px; ">
            <div class="row">
                <div class="col-md-6 ">
                    <img style="height:90vh;object-fit:cover;width:100%" src="https://img.freepik.com/free-vector/flat-illustration-man-with-pets-indoors_23-2148968047.jpg?w=1060&t=st=1681306082~exp=1681306682~hmac=ca79096fe3030b2ae362b810eebc8c967c41ef2d5a58e45aa9bd56afc16669b9" alt="Pet Service" class="img-fluid">
                </div>
                <div class="col-md-6 py-3" ">
                    <form action="index.php" method="post">
                        <h1 class="text-center">Welcome to <span style="color:rgb(56, 17, 134)">the Pet</span> Service</h1>
                        <div class="container">
                            <label class="fs-4" for="Name">Name</label>

                            <input name ="Name" id ="Name" type="text" class="form-control" ></br>
                            <label class="fs-4" for="Phone_no">Phone no</label>

                            <input name ="Phone_no" id="Phone_no" type="Int"  class="form-control"></br>
                            <label class="fs-4" for="Email">Email</label>

                            <input name ="Email" id="Email" type="varchar" class="form-control"></br>
                            <label class="fs-4" for="Age_of_pet">Age of Pet</label>

                            <input name ="Age_of_pet" id ="Age_of_pet" type="Int" class="form-control"></br></br

                            <label class="fs-4" for="Type_of_pet">Choose Pet</label>
                            <input name="Type_of_pet" id="Type_of_pet" type="text" class="form-control" placeholder="Cats, Dogs, Fish, Others" aria-describedby="basic-addon2">


                            <label class="fs-4" for="Service">Service</label>
                            <input name="Service" id="Service" type="text" class="form-control" placeholder="Pet Dayout, Pet Grooming, Pet Day Care, Pet Pool Session" aria-describedby="basic-addon2">

                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>


        <div class="footer container-fluid" style="margin-top:8rem">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">Pet Agency</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="btn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="#" class="btn"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <a href="#" class="btn"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>

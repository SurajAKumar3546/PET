
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $server = "localhost";
            $username = "root";
            $password = "";
           
            
            $con = mysqli_connect($server,$username,$password,'pet service');
            
            if(!$con){
                echo "Not connected";
            }
            
            
            $Name = $_POST['Name'];
            $Phone_no = $_POST['Phone_no'];
            $Email = $_POST['Email'];
            $Age_of_pet = $_POST['Age_of_pet'];
            $Type_of_pet = $_POST['Type_of_pet'];
            $Service = $_POST['Service'];
            
            $sql = "INSERT INTO `pet service`.`customer` (Name, Phone_no, Email, Age_of_pet, Type_of_pet, Service) 
                   VALUES ( '$Name', '$Phone_no ', '$Email', '$Age_of_pet', '$Type_of_pet', '$Service');";
            
            if($con->query($sql)== true){
                echo "Thank You for submitting your Request";
            } 
            else{
                echo "Error:$sql ,<br> $con->error";
            }
        }    
        ?>
        <form action="index.php" method="post">
            <h1>Welcome to the Pet Service</h1>
            <h4>Services Available</h4>
            <ul>
                <li>Boarding</li>
                <li>Day out</li>
                <li>Pool Sessions</li>
                <li>Grooming</li>
                <li>Day care</li>
            </ul>
            <p>Enter your details and submit this form to confirm your appointment</p>
            <div class="container">
                <Label for="Name">Name</Label>
                <input name ="Name" id ="Name" type="text"></br></br>
                <Label for="Phone_no">Phone_no</Label>
                <input name ="Phone_no" id="Phone_no" type="Int"></br></br>
                <Label for="Email">Email</Label>
                <input name ="Email" id="Email" type="varchar"></br></br
                <Label for="Age_of_pet">Age_of_pet</Label>
                <input name ="Age_of_pet" id ="Age_of_pet" type="Int"></br></br
                <Label for="Type_of_pet">Type_of_pet</Label>
                <input name ="Type_of_pet" id="Type_of_pet" type="text"></br></br>
                <Label for="Service">Service</Label>
                <input name ="Service" id="Service" type="text"></br></br>
                <button>Submit</button>
            </div>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>

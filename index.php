<?php
//$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
     //echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cname = $_POST['cname'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $cgpa = $_POST['cgpa'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `placementcell`.`placementcell` (`name`, `age`, `gender`, `phone`, `email`, `cname`, `course`, `branch`, `semester`, `cgpa`, `desc`, `dt`) VALUES 
    ('$name', '$age', '$gender', '$phone', '$email', '$cname', '$course', '$branch', '$semester', '$cgpa', '$desc', current_timestamp());";


    //echo $sql;

    if($con->query($sql) == true){
       // echo "Successfully inserted";
    }
    else{
        echo "ERROR $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Placement form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bgc" src="bgc.jpg" alt="KEC KATIHAR">
    <div class="container">
        <h3>WELCOME TO KEC KATIHAR PLACEMENT FORM</h3>
        <p>Enter Your Details  and Submit This form to confirm Your Participation in KEC Placement</p>

        <p class="submitMsg">You Have Submitted Successfully For Placement</p>

        <form action="index.php" method="post">
         <input type="text" name="name" id="name" placeholder="Enter your Name:">
         <input type="text" name="age" id="age" placeholder="Enter your Age:">

        <!-- Choose Your Gender:
        <select>
            <option>Choose</option>
         <option>Male</option>
         <option>Female</option>
         <option>Can't Disclose</option>
        </select> -->
         <input type="text" name="gender" id="gender" placeholder="Enter your Gender:"> 
        
         
         <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number:">
         
         <input type="text" name="email" id="email" placeholder="Enter your Email:">
        
         <input type="text" name="cname" id="cname" placeholder="Enter your College Name:"> 
        
         <input type="text" name="course" id="course" placeholder="Enter your Course:">
         <!-- Select Your Course:
         <select>
            <option>Choose</option>
         <option>B.Tech</option>
         <option>M.Tech</option>
        </select>
         </br> -->
         
          <input type="text" name="branch" id="branch" placeholder="Enter your Branch:"> 
         <!-- Select Your Branch:
         <select>
            <option>Choose</option>
         <option>CSE</option>
         <option>EEE</option>
         <option>CE</option>
         <option>ME</option>
         <option>VLSI</option>
         <option>EE</option>
         <option>LT</option>
        </select>
        </br> -->
         
         <input type="text" name="semester" id="semester" placeholder="Enter your Semester:">
         
         <input type="text" name="cgpa" id="cgpa" placeholder="Enter your Obtain Cgpa:">
         
        <textarea name="desc" id="desc" cols="30" rows="5" placeholder="Enter Your Skills:"></textarea>
        </br>
        <!-- Please Choose You have passed or Appearing:
        <select>
            <option>Choose</option>
         <option>passed</option>
         <option>Appearing</option>
        </select> -->

        <button class="btn">SUBMIT</button>
        <button class="btn">RESET</button>
        </form>
    </div> 

    <!-- INSERT INTO placementcell (sno, name, age, gender, phone, email, cname, course, branch, semester, cgpa, desc, dt) VALUES 
    ('1', 'testname', '22', 'male', '9999999999', 'this@this.com', 'katihar', 'btech', 'cse', '7th', '7', 'cpp', current_timestamp()); -->
</body>
<script src="index.js"></script>
</html>

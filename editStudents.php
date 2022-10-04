<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Admin Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Creating admin dashboard">
    <meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
    <meta name="author" content="Your name">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- All our code. write here   -->
    <?php
    require_once("includes/header.php");
    require_once("includes/sidebar.php");
    //Fetch students records using WHERE CLAUSE
    require_once('dbconnection.php');
    $fetchStudentRecords = mysqli_query($conn, "SELECT * FROM enrollments WHERE id='".$_GET['id']."' ");

    while ($row = mysqli_fetch_array($fetchStudentRecords) ) {
        $studentId = $row['id'];
        $studentName = $row['name'];
        $studentRegnumber= $row['reg_number'];
        $studentPhone = $row['phone'];
        $studentEmail = $row['email'];
        $studentCourse = $row['course'];
        $studentEmail = $row['email'];

    }
    ?>
    <?php

    //isset function
    if(isset($_POST['updateEnrollments'])){
        //1. fetch from data
        $name = $_POST['name'];
        $regNumber = $_POST['reg_number'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $course= $_POST['course'];
        
        //sql to update
        $updateStudent = mysqli_query($conn, "UPDATE enrollments SET name='$name', reg_number='$regNumber', phone='$phone', email='$email', course='$course'  WHERE id='".$_GET['id']."'");
        
        if($updateStudent)
        {
            echo 'data updated succes';
        }
        else{
            echo 'error occcured';
        }

    }
    ?>
    
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Update Students</span>                           
                        </div>
                        <div class="card-body">
                            <form action="editStudents.php?id=<?php echo $studentId ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="" value="<?php echo $studentName ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Registration Number</label>
                                            <input type="text" class="form-control" name="reg_number" id="" value="<?php echo $studentRegnumber ?>" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="" value="<?php echo $studentPhone ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" name="email" id="" value="<?php echo $studentEmail ?>">
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="course">Course</label>
                                            <select name="course" id="" class="form-control">
                                                <option<?php echo $studentCourse ?></option>
                                                <option value="Web Design & Development">Web Design & Development</option>
                                                <option value="Android Application Development">Android Application Development</option>
                                                <option value="Data Analysis">Data Analysis</option>
                                            </select>                                            
                                        </div>
                                    </div>
                                                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="submit" name="submitEnrollments" class="btn btn-dark">UpdateEnrollments</button>
                                    </div>    
                                </div>                                       
                            </form>                                                        
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


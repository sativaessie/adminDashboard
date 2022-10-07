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
    $fetchStudentRecords = mysqli_query($conn, "SELECT * FROM messages WHERE id='".$_GET['id']."' ");

    while ($row = mysqli_fetch_array($fetchStudentRecords) ) {
        $studentId = $row['id'];
        $studentName = $row['name'];
        $studentEmail= $row['email'];
        $studentPhone = $row['phone'];
        $studentSubject = $row['subject'];
        $studentMessage = $row['message'];
    }
    ?>
    <?php

    //isset function
    if(isset($_POST['updateMessages'])){
        //1. fetch from data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message= $_POST['message'];
        
        //sql to update
        $updateMessage = mysqli_query($conn, "UPDATE messages SET name='$name', reg_number='$regNumber', phone='$phone', email='$email', course='$course'  WHERE id='".$_GET['id']."'");
        
        if($updateMessage)
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
                            <span>Update Messages</span>                           
                        </div>
                        <div class="card-body">
                            <form action="editMessages.php?id=<?php echo $studentId ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="" value="<?php echo $studentName ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" name="email" id="" value="<?php echo $studentEmail ?>" >
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
                                            <label for="name">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="" value="<?php echo $studentSubject ?>">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Message</label>
                                            <input type="text" class="form-control" name="message" id="" value="<?php echo $studentMessage?>">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="submit" name="submitMessages" class="btn btn-danger">UpdateMessages</button>
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


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
    //Fetch subscriber records using WHERE CLAUSE
    require_once('dbconnection.php');
    $fetchSubscriberRecords = mysqli_query($conn, "SELECT * FROM subscribers WHERE id='".$_GET['id']."' ");

    while ($row = mysqli_fetch_array($fetchSubscriberRecords) ) {
        $subscriberId= $row['id'];
        $subscribermail= $row['email'];
        $subscriberEnrolledOn= $row['created_at'];
       
    }
    ?>
    <?php

    //isset function
    if(isset($_POST['updateSubscribers'])){
        //1. fetch from data
        $email = $_POST['email'];
        
        //sql to update
        $updateSubscriber= mysqli_query($conn, "UPDATE subscribers SET email='$email'  WHERE id='".$_GET['id']."'");
        
        if($updateSubscriber)
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
                            <span>Update Subscribers</span>                           
                        </div>
                        <div class="card-body">
                            <form action="editSubscribers.php?id=<?php echo $subscriberId ?>" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Email</label>
                                            <input type="text" class="form-control" name="email" id="" value="<?php echo $subscriberEmail ?>">
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <button type="submit" name="submitSubscriptions" class="btn btn-dark">UpdateSubscriptions</button>
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


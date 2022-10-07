<!DOCTYPE html>
<html>

<body>
    <!-- All our code. write here   -->
    
    <!-- sidebar here -->
    <?php
    require_once('includes/links.php');
    require_once('includes/header.php');
    require_once('includes/sidebar.php');

    require_once('dbconnection.php');
    // fetch student records using where
    $fetchStudentRecords = mysqli_query($conn,"SELECT * FROM messages WHERE id='".$_GET['id']."' ");
    while($row = mysqli_fetch_array($fetchStudentRecords)){
        $studentId= $row['id'];
        $studentName= $row['name'];
        $studentEmail= $row['email'];
        $studentPhone= $row['phone'];
        $studentSubject= $row['subject'];
        $studentMessage= $row['message'];
        $studentEnrolledOn= $row['created_at'];
       
    }

    
    ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> ContactUS Info</span>
                            <span class="float-left">
                                <i class="fa fa-user fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                        <form action="viewMessages.php?id=<?php echo $studentId ?>" method="post">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Name:<span><?php echo $studentName ?></span>
                                </li>
                                <li class="list-group-item">
                                    Email:<span><?php echo $studentEmail ?></span>
                                </li>
                                <li class="list-group-item">
                                    Phone: <span><?php echo $studentPhone ?></span>
                                </li>
                                <li class="list-group-item">
                                   Subject: <span><?php echo $studentSubject?></span>
                                </li>
                                <li class="list-group-item">
                                  Message: <span><?php echo $studentMessage?></span>
                                </li>
                                <li class="list-group-item">
                                    Enrolled On: <span><?php echo $studentEnrolledOn ?></span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
</div>
            
        </div>

    </div>
    
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
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
    // fetch subscriber records using where
    $fetchSubscriberRecords = mysqli_query($conn,"SELECT * FROM subscibers WHERE id='".$_GET['id']."' ");
    while($row = mysqli_fetch_array($fetchSubscriberRecords)){
        $subscriberId= $row['id'];
        $subscribermail= $row['email'];
        $subscriberEnrolledOn= $row['created_at'];
       
    }

    
    ?>


    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span> Subscribers Info</span>
                            <span class="float-left">
                                <i class="fa fa-user fa-lg"></i>
                            </span>
                        </div>
                        <div class="card-body">
                        <form action="viewSubscribers.php?id=<?php echo $studentId ?>" method="post">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Email: <span><?php echo $studentEmail ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Subscribers Details</span>
                            <span class="float-left">
                                <i class="fa fa-folder-open fa-lg"></i>
                            </span>
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
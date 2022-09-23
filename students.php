<!DOCTYPE html>
<html>
<?php
require_once('includes/links.php')
?>
<body>
    <!-- All our code. write here   -->
	<?php
	require_once('includes/sidebar.php');
	require_once('includes/header.php')
	?>
    

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Enrolled Students</span>
                            <span class="float-right">
                                <a href="addStudents.php"class="btn btn-secondary btn-sm">add student</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <table class="table table-stripped table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Reg Number</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th>Enrolled On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Wambui</td>
                                        <td>IN16/20269/15</td>
                                        <td>0768320713</td>
                                        <td>gakure@gmail.com</td>
                                        <td>Web Design</td>
                                        <td>22nd Sep 2022</td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm"></a>
											<i class="fa fa-edit"></i>
                                            <a href="" class="btn btn-success btn-sm"></a>
											<i class="fa fa-eye"></i>
                                            <a href="" class="btn btn-danger btn-sm"></a>
											<i class="fa fa-trash"></i> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
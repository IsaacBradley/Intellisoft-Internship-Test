<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isaac Muuo | Internship Practical</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

         .block-container
		                 {
							 width:100%;
							 background:#2196f3;
						 }
		 .block
		                 {
							 width:50%;
							 float:left;
							 background:#fff;
						 }
			    

</style>

</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>1. Patient Identification Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="patient-backend.php" method="POST">
                            <div class="form-group mb-3">
                                <input type="text" style = "text-align:center;" name="lastname" placeholder = "Last Name" class="form-control" title ="Must start with an uppercase character"required />
								<input type="text" style = "text-align:center;"name="firstname" placeholder = "First Name" class="form-control" title ="Must start with an uppercase character"required />
								<input type="text" style = "text-align:center;"name="middlename" placeholder = "Middle Name" title ="Must start with an uppercase character"required class="form-control" />
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b style = "color:blue;">Sex:</b></label>
                                <input type="radio" name="gender" value="Male" /> Male
                                <input type="radio" name="gender" value="Female" /> Female
								
								<label for=""><b style = "color:blue;padding-left:15px;">Race:</b></label>
                                <input type="radio" name="race" value="Black" /> Black
                                <input type="radio" name="race" value="White" /> White
								<input type="radio" name="race" value="Asian" /> Asian
								<input type="radio" name="race" value="Other" /> Other
								
								<label for=""><b <b style = "color:blue;padding-left:15px;">Hispanic or Latina:</b></label>
								<input type="radio" name="latina" value="Yes" /> Yes
                                <input type="radio" name="latina" value="No" /> No
								<input type="radio" name="latina" value="Unkown" /> Unkown
								
								<br><br>
								<input type="text" style = "text-align:center;width:100px;" name="age" placeholder = "Age" class="form-control" title ="Must be an integer"required />
									
								<br><label for=""><b>Date Of Birth:</label></b><br>
								<input type="text" style = "text-align:center;width:200px;" name="dob" placeholder = "Month-Date-Year" class="form-control" title ="Must be integers"required />
								
							</div>	
							
							<div class="card-header">
                              <h4>2. Facility <i>{If hospitalized}</i></h4>
                            </div>
							
							<div class="form-group mb-3">
                                <input type="text" style = "text-align:center;" name="facilityname" placeholder = "Name" class="form-control" required />
								<input type="text" style = "text-align:center;"name="city" placeholder = "City" class="form-control" required />
								<input type="text" style = "text-align:center;"name="county" placeholder = "County" class="form-control" required />
								<input type="text" style = "text-align:center;"name="state" placeholder = "State" class="form-control" required />
								<input type="text" style = "text-align:center;"name="phonenumber" placeholder = "Phone Number" class="form-control" required />
								<input type="text" style = "background:coral;color:#fff;"name="name" placeholder = "Medical Record" class="form-control" required />
                            </div>
							
							<div class="card-header">
                              <h4>3. Present Address</i></h4>
                            </div>
							
							<div class="form-group mb-3">
                                <input type="text" style = "text-align:center;" name="name" placeholder = "Facility Name" class="form-control" required />
								<input type="text" style = "text-align:center;"name="street" placeholder = "Street" class="form-control" required />
								<input type="text" style = "text-align:center;"name="name" placeholder = "City" class="form-control" required />
								<input type="text" style = "text-align:center;"name="name" placeholder = "County" class="form-control" required />
                            </div>
							
                            <div class="form-group mb-3">
                                <button type="submit" style = "text-align:center;" name="save_radio" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
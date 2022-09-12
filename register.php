<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration Form</title>
</head>
<body>
    <div class="registration-form">
        <form method="POST" enctype="multipart/form-data" action="upload-handler.php">
            <h1><b>Registration Form</b></h1>
            <div class="form-group">
                Complete Name:<input type="text" class="form-control" name="compname" placeholder="Please Enter Your Complete Name" required="required">
            </div>
            <div class="form-group">
                Email Address:<input type="email" class="form-control" name="email" placeholder="Please Enter Your Email Address" required="required">
            </div>
            <div class="form-group">
                Password:<input type="password" class="form-control" name="password" placeholder="Please Enter Your Password" onkeyup='check_pass();' onkeyup='check()' required="required">
            </div>
            <div class="form-group">
                Confirm Password:<input type="password" class="form-control" name="confirm_password" placeholder="Please Enter Your Password Again" onkeyup='check_pass();' onkeyup='check()' required="required">
            </div> 
            <div class="form-group">
                <label for="fileSelect">Picture</label>
                <input type="file" name="fileSelect" id="fileSelect" class="form-control form-control-lg" required >
            </div>
            <div class ="text-center">
            <br><button type="submit" class="btn btn-primary btn-lg">Submit Registration</button>
        </div>
        </div>
    </div>
</form>
</div>
</body>
</html>
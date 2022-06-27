<!-- <//?php echo base_url();?> -->

<?php 
include("connect.php");
// echo '<pre>';print_r($con);  

if(isset($_POST['submit']))
{

    $name=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email =$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $phone_no=$_REQUEST['phone_no'];
    $gender=$_REQUEST['gen'];

    $sql="INSERT INTO `user_login` (`fname`, `lname`, `email`, `password`, `phone_no`, `gender`) VALUES ('$name', '$lname', '$email', '$password', '$phone_no', '$gender')";

    $res = mysqli_query($con,$sql);

    if($res)
    {
        echo "Data inserted";
    }
    else
    {
        echo"Data not inserted";
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://localhost/php/asset/bootstrap/css/bootstrap.min.css">
        <script src="http://localhost/php/asset/bootstrap/js/bootstrap.bundle.min.js"></script>
        <title>Create Account</title>
        <style type="text/css">
        .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #dee2e6;
        outline: 0;}
        </style>
    </head>
    <body>
        <!--     s(fname,lname,email,phone,gender,password,confirm password) .  -->
        <div class="container-fluid vh-100">
            <div class="" style="margin-top:100px">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <div class="text-center">
                                <h3 class="text-infos" style="color: #712cf9;"> Create Account</h3>
                            </div>
                            <div class="p-4">
                                <form name="myform" method="post"  onsubmit="return validateform()">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos" style="background-color: #712cf9;"><i class="bi bi-person-plus-fill text-white"></i>
                                        </span>
                                        <input type="text" class="form-control" name="fname" placeholder=" Frist name">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos" style="background-color: #712cf9;"><i class="bi bi-person-plus-fill text-white"></i>
                                        </span>
                                        <input type="text" class="form-control" name="lname" placeholder="Last name">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos" style="background-color: #712cf9;"><i  class="bi bi-person-plus-fill text-white"></i>
                                        </span>
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos" style="background-color: #712cf9;"><i class="bi bi-person-plus-fill text-white"></i>
                                        </span>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos"  style="background-color: #712cf9;"><i class="bi bi-envelope text-white"></i>
                                        </span>
                                        <input type="password" class="form-control" name="confirm_pwd" placeholder="Confirm password">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-infos"  style="background-color: #712cf9;"><i class="bi bi-envelope text-white"></i>
                                        </span>
                                        <input type="number" class="form-control" name="phone_no" placeholder="Phone No.">
                                    </div>
                                    <div class="mb-3 form-check d-flex">
                                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                        <span>
                                            <input type="radio" name="gen" class="form-check-input" value="Male">Male </span>
                                            <span style="padding-left: 50px;">
                                                <input type="radio" name="gen" class="form-check-input" value="femele">  Female
                                            </span>
                                        </div>
                                        <div class="d-grid col-12 mx-auto">
                                            <input type="submit" class="btn btn-infos text-white" name="submit" value="submit" value="register" style="background-color: #712cf9;">
                                        </div>
                                        <p class="text-center mt-3">Already have an account?
                                            <span class="text-primary">Sign in</span>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            function validateform(){
            var fname=document.myform.fname.value;
            var lname=document.myform.lname.value;
            var email=document.myform.email.value;
            var fname=document.myform.fname.value;
            var password=document.myform.password.value;
            var confirm_pwd=document.myform.confirm_pwd.value;
            
            if (fname==null || fname==""){
            alert("Name can't be blank");
            return false;
            }
            else if (lname==null || lname==""){
            alert("lname can't be blank");
            return fasdlse;
            }
            else if (email==null || email==""){
            alert("email can't be blank");
            return false;
            }
            else if(password.length<6){
            alert("Password must be at least 6 characters long.");
            return false;
            }
            else if(confirm_pwd != password) {
            alert("Passwords do not match.");
            return false;
            }
            return true;
            }
            </script>
        </body>
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/Login.css">
   
   

</head>
<script src="assets/Login.min.js"></script>
    <script src="assets/Loginvalidate.js"></script>

<body>
<div class="image">
</div>
<!-- <img src ="./assets/photo.jpg" id="img" alt=""> -->

        <div class="bg-img">
    <form action="<?php echo site_url('Login/save')?>" id="form" class="container" method="post" class="">
    <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" value="<?php echo $date[0]['email'];?>" id="email"><br>
   
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter your Password" value="<?php echo $date[0]['psw'];?>" name="psw" id="psw"><br>


    <button type="submit" class="btn">Login</button>
    <hr>
<a class="link" href="#!">Forgot password? Click here.</a>
  </form>
</div>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#form').validate({
            rules: {
                email: {
                    required: true,
                    email:true,
                },
                psw:{
                    required:true,
                    minlength:8,
                    maxlength:8,                
                }
            },
            messages:{
                email:{
                    required:"Enter your valid email"
                },
                psw:{
                    required:"Enter your password"
                }
            }
        });
    });
</script>
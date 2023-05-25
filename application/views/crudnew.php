<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href= "<?php echo base_url('assets/crud.css');?>">
    <link rel="icon" type="image/x-icon" href="download.png">
    <script src="<?php echo base_url('assets/crud.min.js')?>"></script>
    <script src="<?php echo base_url('assets/crud.validate.js')?>"></script>
    <script src="<?php echo base_url('assets/crud.js')?>"></script>
</head>

<body>
        <div class="container">
            <form action="<?php echo base_url('index.php/cruddata/updated_list/'.$data[0]['id']);?>" id="form" method="post">
                <h2>Interview details</h2>
                 <div class="content"> 
                    <div class="input-box">
                        <label for="name">First name :</label>
                        <input type="text" id="fname" value="<?php echo $data[0]['fname']?>" placeholder="Enter the fullname" name="fname">
                    </div>
                    <div class="input-box">
                        <label for="name">Last name :</label>
                        <input type="text" id="lname" value="<?php echo $data[0]['lname']?>" placeholder="Enter the lastname" name="lname">
                    </div>
                    <div class="input-box">
                        <label for="">Post applied for :</label><br><br>
                        <label for="">Program analyst:</label><br>
                        <input type="checkbox" id="ab" name="cb1" value="<?php echo $data[0]['cb1']?>"><br>
                        <label for="">Office assitant:</label>
                        <input type="checkbox" id="cd" name="cb2" value="<?php echo $data[0]['cb1']?>"><br>
                        <label for="">Business analyst:</label>
                        <input type="checkbox" id="ef" name="cb3" value="<?php echo $data[0]['cb1']?>"><br>
                        <label for="">Client advocate:</label>
                        <input type="checkbox" id="gh" name="cb4" value="<?php echo $data[0]['cb1']?>"><br>
                        <label for="">Business consoltant:</label>
                        <input type="checkbox" id="ij" name="cb5" value="<?php echo $data[0]['cb1']?>"><br>
                        <!-- <input type="submit" value="Submit"> -->
                    </div>
                    <div class="input-box">
                        <label for="name">Email :</label>
                        <input type="email" id="email" value="<?php echo $data[0]['email']?>" placeholder="Enter the valid email" name="email">
                    </div>
                    <div class="input-box">
                        <label for="name">Mobile number :</label>
                        <input type="number" id="mnumber" value="<?php echo $data[0]['mnumber']?>" placeholder="Enter the valid number" name="mnumber">
                    </div>
                    <div class="input-box">
    <label for="gender">Gender:</label>
    <select id="gender" name="gender">
        <option value="">Select your gender</option>
        <option value="male" <?php if($data[0]['gender'] == 'Male') echo 'selected'; ?>>Male</option>
        <option value="female" <?php if($data[0]['gender'] == 'Female') echo 'selected'; ?>>Female</option>
        <option value="others" <?php if($data[0]['gender'] == 'Others') echo 'selected'; ?>>Others</option>
    </select>
</div>

                    <div class="input-box">
                        <label for="name">Date of birth :</label>d
                        <input type="date" id="dob" value="<?php echo $data[0]['birth']?>" placeholder="Enter your dob" name="date of birth">
                    </div>
                    <div class="input-box">
                        <label for="name">Date of interview :</label>
                        <input type="date" id="doi" value="<?php echo $data[0]['interview']?>" placeholder="This field is required" name="date of interview" min="2023-04-01" max="2023-04-31">
                    </div>
                    <div id="">
                        <label for="yes_no_radio">Have you attended before ?</label>
                        <input type="radio" name="yes no"  value="<?php echo $data[0]['yes']?>" id="" checked/>yes
                      <input type="radio" name="yes no"  value="<?php echo $data[0]['no']?>" id=""/>no
                      <!-- <input type="text" name="exp3" id="exp"/>  -->
                    </div>
                    <div class="">
                        <label for="name">Resume :</label>
                        <input type="file" id="resume" value="<?php echo $data[0]['resume']?>" placeholder="This field is required" name="resume">
                    </div>
                     <div class="">
                        <label for="yes_no_radio">Any experience before :</label>
                        <input type="radio" name="yes_no" id="yes" value="yes" <?php echo $data[0]['yes'] == 'yes' ? 'checked' : ''; ?>>Yes
                        <input type="radio" name="yes_no" id="no" value="no" <?php echo $data[0]['yes'] == 'no' ? 'checked' : ''; ?>>No
                       <input type="text" name="exp3" value="<?php echo $data[0]['years']?>" id="exp"/>       
                        <!-- <input type="yes" id="aeb" value="" placeholder="if experinced yes or no" name="aeb"> -->
                        <!-- <input type="no" id="dob" value="" placeholder="if not experinced " name="date of birth"> -->
                    </div> 
                    <div class="alert">
                        <p>By clicking sign up, you agree to our <a href="#">Terms,</a><a href="#">Privacy Policy,</a>
                            and <a href="#">Cookies Policy.</a>You may receive SMS notifications from us and at any  time.</p>
                            
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit" value="submit">Submit</button>
                </div>
                    </div>
            </form>
        </div>
</body>

</html>
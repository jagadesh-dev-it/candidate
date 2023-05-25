<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/candidate.css');?>">
</head>

<!-- jquery script links   -->
<script src="<?php echo base_url('assets/crud.min.js');?>"></script>
<script src="<?php echo base_url('assets/crud.validate.js');?>"></script>

<body>
    <div class="container">
        <form action="<?php echo site_url('Cruddata/updated_list/').$date[0]['id_no'];?>" method="POST" id="form">
            <h1>CANDIDATE DETAILS</h1>
            <div class="content">

                <!-- candidate id  -->
                <div class="input-box">
                    <label>Id number:</label>
                    <input type="text" name="id" id="id" value="<?php echo $date[0]['id'];?>" pattern="[a-zA-Z0-9]+" maxlength="8" placeholder="This field is required">
                </div>

                <!-- candidate first name  -->
                <div class="input-box">
                    <label>First name:</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $date[0]['fname'];?>" placeholder="This field is required">
                </div>

                <!-- candidate last name  -->
                <div class="input-box">
                    <label>Last name:</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $date[0]['lname'];?>" placeholder="This field is required">
                </div>

                <!-- candidate email address  -->
                <div class="input-box">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $date[0]['email'];?>" placeholder="This field is required">
                </div>

                <!-- candidate mobile number  -->
                <div class="input-box">
                    <label>Mobile number:</label>
                    <input type="number" name="mnumber" id="mnumber" value="<?php echo $date[0]['mnumber'];?>" placeholder="This field is required">
                </div>

                <!-- gender category  -->
                <div class="input-box">
                    <label>Gender:</label>
                    <select name="gen" id="gen">
                        <option>select your gender</option>
                        <option value="male"<?php echo($date[0]['gen']=='male')?'selected':"male "?>>Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <!-- candidate date of birth  -->
                <div class="input-box">
                    <label>Date of birth:</label>
                    <input type="date" name="dob" id="dob" value="<?php echo $date[0]['dob'];?>" placeholder="This field is required">
                </div>

                <!-- candidate age  -->
                <div class="input-box">
                    <label>Age:</label>
                    <input type="number" name="age" id="age" value="<?php echo $date[0]['age'];?>" placeholder="This field is required">
                </div>

                <!-- candidate status  -->
                <div class="input-box">
                    <label>Marital status:</label><br>
                    <input type="radio" name="marital" id="marital-married" value="married"<?php echo($date[0]['marital']=='married')?'checked':"married"?>>Married
                    <input type="radio" name="marital" id="marital-unmarried" value="unmarried"<?php echo($date[0]['marital']=='unmarried')?'checked':"unmarried"?>>Unmarried
                </div>

                <!-- spouse details  -->
                <div class="input-box spouse-container" style="display: none;">
                    <label>Spouse name:</label>
                    <input type="text" name="spousename" id="spouse-name" value="<?php echo $date[0]['spousename'];?>"><br>

                    <label>Age:</label>
                    <input type="number" name="spouseage" id="spouse-age" value="<?php echo $date[0]['spouseage'];?>"><br>

                    <label>Currently working:</label>
                    <input type="radio" name="spousework" id="spouse-work-yes" value="yes"<?php echo($date[0]['spousework']=='yes')?'checked':"yes"?>>yes
                        
                    <input type="radio" name="spousework" id="spouse-work-no" value="no"<?php echo($date[0]['spousework']=='no')?'checked':"no"?>>no
                    

                    <!-- <div class="input-box" style="display: none;" id="spouse-company-container"> -->
                        <label>Company name:</label>
                        <input type="text" name="spousecompany" id="spousecompany" value="<?php echo $date[0]['spousecompany'];?>">
                    <!-- </div> -->
                </div>



                <div class="input-box">
                    <label>Have you had previous employment experience?</label><br>
                    <input type="radio" name="hee" id="hee-yes" value="yes">Yes
                    <input type="radio" name="hee" id="hee-no" value="no">No
                </div>
                
                <!-- previous employment details  -->
                <div class="input-box employment-container" style="display: none;">
                    <label>Previous Company:</label>
                    <input type="text" name="prevcompany" id="company" value="<?php echo $date[0]['prevcompany'];?>"><br>
                
                    <label>Number of years worked:</label>
                    <input type="number" name="yearsworked" id="yearsworked" value="<?php echo $date[0]['yearsworked'];?>"><br>
                
                    <label>Designation:</label>
                    <input type="text" name="prevdesignation" id="designation" value="<?php echo $date[0]['prevdesignation'];?>">
                </div>

                <!-- candidate experience  -->
                <div class="input-box">
                    <label>Year of experience:</label>
                    <input type="number" name="yoe" id="yoe" value="<?php echo $date[0]['yoe'];?>" placeholder="This field is required">
                </div>

                <!-- submit button  -->
                <div class="button">
                    <input type="submit" id="button" value="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<!-- java script  -->

<script>
    $(document).ready(function () {
        $('#form').validate({
            rules: {
                id: {
                    required: true,
                    maxlength: 8,
                },
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                mnumber: {
                    required: true,
                },
                gen: {
                    required: true,
                },
                dob: {
                    required: true,
                },
                age: {
                    required: true,
                    maxlength: 3,
                },
                marital: {
                    required: true,
                },
                spousename:{
                    required:true,
                },
                spouseage:{
                    required:true,
                    digits:true,
                    maxlength:3,
                },
                spousework:{
                    required:true,
                },
                spousecompany:{
                    required:true,
                },
                hee: {
                    required: true,
                },
                prevcompany:{
                    required:true,
                },
                yearsworked:{
                    required:true,
                },
                prevdesignation:{
                    required:true,
                },
                yoe: {
                    required: true,
                    maxlength: 3,
                }
            },
            messages: {
                id: {
                    required: "Enter your register number",
                },
                fname: {
                    required: "Enter your first name",
                },
                lname: {
                    required: "Enter your last name",
                },
                email: {
                    required: "Enter your valid email",
                },
                mnumber: {
                    required: "Enter your mobile number",
                },
                gen: {
                    required: "please select your gender",
                },
                dob: {
                    required: "pick your date of birth",
                },
                age: {
                    required: "Enter your age",
                },
                marital: {
                    required: "select your marital status",
                },
                spousename:{
                    required:"Enter her name",
                },
                spouseage:{
                    required:"Enter her age",
                },
                spousework:{
                    required:"please select her work",
                },
                spousecompany:{
                    required:"Enter her company",
                },
                hee: {
                    required: "select your category",
                },
                prevcompany:{
                    required:"Enter your previous company",
                },
                yearsworked:{
                    required:"How many years worked",
                },
                prevdesignation:{
                    required:"Enter prevoius designation"
                },
                yoe: {
                    required: "Enter your experience",
                }
            }
        });
    });
    // get the marital status radio buttons
    const maritalStatus = document.querySelectorAll('input[name="marital"]');

    // get the div container for the additional fields
    const spouseContainer = document.querySelector('.spouse-container');

    // add a change event listener to the marital status radio buttons
    maritalStatus.forEach((radio) => {
        radio.addEventListener('change', (e) => {
            if (e.target.value === 'married') {
                // if the user selects "married", show the additional fields
                spouseContainer.style.display = 'block';
            } else {
                // if the user selects anything else, hide the additional fields
                spouseContainer.style.display = 'none';
            }
        });
    });
    function showSpouseCompany() {
        document.getElementById("spouse-company-container").style.display = "block";
    }
    function hideSpouseCompany() {
        document.getElementById("spouse-company-container").style.display = "none";
    }
     // Show/hide the previous employment details based on whether the user has had previous employment experience
     const employmentContainer = document.querySelector('.employment-container');
    const yesRadioButton = document.getElementById('hee-yes');
    const noRadioButton = document.getElementById('hee-no');

    function toggleEmploymentDetails() {
        if (yesRadioButton.checked) {
            employmentContainer.style.display = 'block';
        } else {
            employmentContainer.style.display = 'none';
        }
    }

    yesRadioButton.addEventListener('change', toggleEmploymentDetails);
    noRadioButton.addEventListener('change', toggleEmploymentDetails);





</script>

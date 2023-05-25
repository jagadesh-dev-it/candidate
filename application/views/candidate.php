<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="<?php echo base_url('assets/crud.min.js');?>"></script>  
    <script src="<?php echo base_url('assets/datatables.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables.min.css');?>">

    <script src="<?php echo base_url('assets/crud.validate.js');?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/candidate.css');?>">
    
<style>
    #mytable{
        border-collapse:collapse;
    }
</style>

</head>

<!-- jquery script links   -->

<body>
    <div class="container">
        <form method="POST" action="<?php echo site_url('Cruddata/save')?>"  id="form">
            <h1>CANDIDATE DETAILS</h1>
            <div class="content">

                <!-- candidate id  -->
                <div class="input-box">
                    <label>Id number:</label>
                    <input type="text" name="id" id="id" value="" pattern="[a-zA-Z0-9]+" maxlength="8" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate first name  -->
                <div class="input-box">
                    <label>First name:</label>
                    <input type="text" name="fname" id="fname" value="" pattern="[a-zA-Z]+" maxlength="50" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate last name  -->
                <div class="input-box">
                    <label>Last name:</label>
                    <input type="text" name="lname" id="lname" value="" maxlength="50" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate email address  -->
                <div class="input-box">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" value="" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate mobile number  -->
               <div class="form-group">
                <label for="mnumber">Mobile number:</label>
                <span class="error" id="phone-error"></span>
                <div class="input-group">,
                    <div class="input-group-prepend">
                    <select class="custom-select" id="country-code" autofocus>
                        <option selected>+91</option>
                        <option >+1</option>
                        <option>+45</option>
                        <option>+53</option>
                        <option>+61</option>
                    </select>
                    </div>
                    <input type="text" name="mnumber" id="mnumber" class="form-control" pattern="/^[0-9]*$/" maxlength="10" placeholder="enter your mobile number" autofocus>
                </div>
               </div>

                <!-- gender category  -->
                <div class="input-box">
                    <label>Gender:</label>
                    <select name="gen" id="gen" autofocus>
                        <option value="">select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>

                <!-- candidate date of birth  -->
                <div class="input-box">
                    <label>Date of birth:</label>
                    <input type="date" name="dob" id="birthdate" value="" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate age  -->
                <div class="input-box">
                    <label>Age:</label>
                    <input type="text" name="age" id="age" value="" pattern="/^[0-9]*$/" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate marital status  -->
                 <div class=""><br>
                    <label for="marital-married">Marital status:</label><br>
                    <input type="radio" name="marital" id="marital-married" value="married" autofocus>Married
                    <label for="married"></label><br>
                    <input type="radio" name="marital" id="marital-unmarried" value="unmarried"autofocus>Unmarried
                    <label for="unmarried"></label><br> 
                </div>
               

                <!-- spouse details  -->
                <div class="input-box spouse-container" style="display: none;"><br>
                    <label>Spouse name:</label><br>
                    <input type="text" name="spousename" id="spouse-name" value="" placeholder="This field is required" autofocus><br>

                    <label>Age:</label><br>
                    <input type="text" name="spouseage" id="spouse-age" value="" placeholder="This field is required" autofocus><br>

                    <label>Currently working:</label><br>
                     <input type="radio" name="spousework" id="spouse-work-yes"  value="yes"
                        onclick="showSpouseCompany()" autofocus>Yes <br>
                         <input type="radio" name="spousework" id="spouse-work-no"  value="no"
                        onclick="hideSpouseCompany()" autofocus>No <br>
                         
                    <!-- <div class="input-box" style="display: none;" id="spouse-company-container"> -->
                        <label>Company name:</label><br>
                        <input type="text" name="spousecompany" id="spousecompany"  value="" placeholder="This field is required" autofocus><br>
                    <!-- </div> -->
                </div><br>



                <div class=""><br>
                    <label for="hee-yes">Have you had previous employment experience?</label><br>
                    <input type="radio" name="hee" id="hee-yes"  value="yes" autofocus>Yes
                    <input type="radio" name="hee" id="hee-no"  value="no" autofocus>No <br>
                </div>
                
                <!-- previous employment details  -->
                <div class="input-box employment-container" style="display: none;">
                    <label>Previous Company:</label>
                    <input type="text" name="prevcompany" id="company" value="" placeholder="This field is required" autofocus>
                
                    <label>Number of years worked:</label>
                    <input type="number" name="yearsworked" id="yearsworked" value="" placeholder="This field is required" autofocus>
                
                    <label>Designation:</label>
                    <input type="text" name="prevdesignation" id="designation" value="" placeholder="This field is required" autofocus>
                </div>

                <!-- candidate experience  -->
                <div class="input-box">
                    <label>Year of experience:</label>
                    <input type="number" name="yoe" id="yoe" value="" placeholder="This field is required" autofocus>
                </div>

               
                <!-- submit button  -->
                <div class="button">
                    <input type="submit" id="button" value="submit">
                </div>
            </div>
        </form>
        <br>
        <table border=1px id="mytable">
    <thead>
        <tr>
            <!-- <th>id_no</th> -->
            <th>Id</th>
            <th>Name</th>
            <!-- <th>lname</th> -->
            <th>Email</th>
            <th>Contact number</th>
            <th>Gender</th>
            <th>Date of birth</th>
            <th>Age</th>
            <th>Marital</th>
            <th>Spousename</th>
            <th>Spouseage</th>
            <!-- <th>spousework</th> -->
            <th>Spousecompany</th>
            <th>Had Experience</th>
            <th>Prevcompany</th>
            <th>Yearsworked</th>
            <th>Year of experience</th>
            <th>revdesignation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($date as $row){?>
            <tr>
            <!-- <td><?php echo $row["id_no"];?></td> -->
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["fname"].$row['lname']?></td>
                <!-- <td><?php echo $row["lname"];?></td> -->
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["mnumber"];?></td>
                <td><?php echo $row["gen"];?></td>
                <td><?php echo $row["dob"];?></td>
                <td><?php echo $row["age"];?></td>
                <td><?php echo $row["marital"];?></td>
                <td><?php echo $row["spousename"];?></td>
                <td><?php echo $row["spouseage"];?></td>
                <!-- <td><?php echo $row["spousework"];?></td> -->
                <td><?php echo $row["spousecompany"];?></td>
                <td><?php echo $row["hee"];?></td>
                <td><?php echo $row["prevcompany"];?></td>
                <td><?php echo $row["yearsworked"];?></td>
                <td><?php echo $row["yoe"];?></td>
                <td><?php echo $row["prevdesignation"];?></td>
              
    </div>
                <td><a id="edit" href="<?php echo base_url('index.php/Cruddata/updating/'.$row['id_no'])?>"><i class="fa-solid fa-pencil"></i></a> 
                <a id="delete" href="<?php echo site_url('Cruddata/delete/'.$row['id_no'])?>"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>  
           
            <?php }?>  
    </tbody>
</table>
<form method="POST" enctype='multipart/form-data' action="<?php echo base_url('index.php/Cruddata/import_data');?>" >
 
 <!-- file upload  -->
 <div class="">
                    <label>Upload file:</label>
                    <input type="file" name="file" id="fileinput">
                    <input type="submit" name="file" id="file" value="upload">
                </div>
</body>
</form>
</html>
<div>
<a href="<?php echo base_url('index.php/Cruddata/exports') ?>">export</a>
</div>

<!-- <a id="export" href="">export</a> -->
<!-- java script  -->

<script>
 	

    $(document).ready(function () {
        $('#mytable').DataTable();
        $('#form').validate({
            rules: {
                id: {
                    required: true,
                    // maxlength: 8,
                },
                fname: {
                    required: true,
                },
                lname: {
                    required: true,
                },
                email: {
                    required: true,
                    remote:{
                url: "<?php echo site_url('cruddata/shift_name_exists'); ?>",
                type: "post",
                data: {
                    stop_name: function(){ 
                        return $("#email").val(); 
                    },
                   
                },
            },
                },
                mnumber: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    numbersOnly: true
                },
                gen: {
                    required: true,
                },
                dob: {
                    required: true,
                },
                age: {
                    required: true,
                    maxlength:2,
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
                    maxlength:2,
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
                    maxlength: 2,
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
                    remote:"Enter Unique Email Id Its Already Exists",
                    
                },
                mnumber: {
                     required: "Please enter your mobile number",
                     minlength: "Mobile number should be 10 digits",
                     maxlength: "Mobile number should be 10 digits",
                     numbersOnly: "Please enter only numbers",
                },
                gen: {
                    required: "Please select your gender",
                },
                dob: {
                    required: "Pick your date of birth",
                },
                age: {
                    required: "Enter your age",
                },
                marital: {
                    required: "Select your marital status",
                },
                spousename:{
                    required:"Enter her name",
                },
                spouseage:{
                    required:"Enter her age",
                },
                spousework:{
                    required:"Please select her work",
                },
                spousecompany:{
                    required:"Enter her company",
                },
                hee: {
                    required: "Select your category",
                },
                prevcompany:{
                    required:"Enter your previous company",
                },
                yearsworked:{
                    required:"How many years worked",
                },
                prevdesignation:{
                    required:"Enter prevoius designation",
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
      showSpouseCompany();
    } else {
      // if the user selects anything else, hide the additional fields
      spouseContainer.style.display = 'none';
      hideSpouseCompany();
    }
  });
});

// number only mobile validation  
$.validator.addMethod("numbersOnly", function(value, element) {
  return this.optional(element) || /^[0-9]+$/.test(value);
}, "Please enter only numbers.");



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

// spouse company work 
$('#spousecompany').hide();
$('#spouse-work-yes').click(function(){
    $('#spousecompany').show();

})
$('#spouse-work-no').click(function(){
    $('#spousecompany').hide();

})

// first name should be capital 

$('#fname').on('input', function(e) {
    var regex = new RegExp("[a-zA-Z\\s]+");
    var inputStr = $(this).val();
    if (regex.test(inputStr)) {
        var capitalizedStr = inputStr.charAt(0).toUpperCase() + inputStr.slice(1);
        $(this).val(capitalizedStr);
    } else {
        e.preventDefault();
        alert('PLEASE ENTER ALPHABETS');
        $( ).val('');
    }
    $('#fname').keypress(function(e) {
    var regex = new RegExp("[a-zA-Z\\s]+");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    else {
        e.preventDefault();
        // alert('PLEASE ENTER ALPHABETS');
        return false;
    }
});
});

$('#lname').on('input', function(e) {
    var regex = new RegExp("[a-zA-Z\\s]+");
    var inputStr = $(this).val();
    if (regex.test(inputStr)) {
        var capitalizedStr = inputStr.charAt(0).toUpperCase() + inputStr.slice(1);
        $(this).val(capitalizedStr);
    } else {
        e.preventDefault();
        alert('PLEASE ENTER ALPHABETS');
        $(this).val('');
    }
    $('#lname').keypress(function(e) {
    var regex = new RegExp("[a-zA-Z\\s]+");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    else {
        e.preventDefault();
        // alert('PLEASE ENTER ALPHABETS');
        return false;
    }
});
});

// auto calculate age with dob 
$(function() {
  $('#birthdate').on('change', function() {
    var age = new Date().getFullYear() - new Date($(this).val()).getFullYear();
    $('#age').val(age);
  });
});

$(document).ready(function() {
    $('#file').on('click', function(e) {
        if ($('#fileinput').get(0).files.length === 0) {
            e.preventDefault(); // prevent form submission
            alert('Please select a file to upload.');
        }
    });
});

</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debit Sales</title> 

    <!-- links  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/sales.css');?>">
    <!-- Latest compiled and minified CSS -->


</head>
<script src="<?php echo base_url('assets/sales.min.js');?>"></script>  
<script src="<?php echo base_url('assets/salesvalidate.js');?>"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- styles  -->

<style>
    .mandatory{
    color:red;
  }
</style>

<body>
    <div class="container">
       
        <form action="<?php echo base_url('index.php/Salescontroller/save');?> "enctype="multipart/form-data" method="post" id="form">
            <h1>Debit sales entry</h1>
            <div class="content">

            <!-- Customer name  -->
                <div class="input-box">
                    <label for="" >Customer name: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="cname" id="cname" value="" pattern="[a-zA-Z]+" maxlength="50" placeholder="Enter your customer name" autofocus required>
                </div> 

                <!-- Registration no  -->
                <div class="input-box">
                    <label for="" >Registration no: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="regno" id="regno" value="" maxlength="8"  placeholder="Enter your registration number" autofocus required>
                </div>

                <!-- Responsible person name  -->
                <div class="input-box">
                    <label for="" >Responsible person name: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="rpname" id="rpname" value="" maxlength="25" placeholder="Enter your responsible person name" autofocus required>
                </div>

                <!-- Branch name  -->
                <div class="input-box">
                    <label for="" >Branch name: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="bname" id="bname" value="" maxlength="25" placeholder="Enter your branch name" autofocus required>
                </div>

                <!-- Customer mobile no  -->
                <div class="input-box">
                    <label for="">Customer mobile no: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="cno" id="cno" value="" maxlength="10" placeholder="Enter your customer mobile number" autofocus required>
                </div>

                <!-- Accessories executive name  -->
                <div class="input-box">
                    <label for="">Accessories executive name: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="acname" id="acname" value="" maxlength="25" placeholder="Enter your accessories executive name" autofocus required>
                </div>

                <!-- mobile number  -->
                <div class="input-box">
                    <label for="">Mobile no: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="mno" id="mno" value="" maxlength="10" placeholder="Enter your mobile number" autofocus required>
                </div>

                <!-- customer gst invoice  -->
                <div class="input-box">
                    <label for="">Customer Gst no: <span class="mandatory">*</span></label>
                    <input type="text" class="form-control" name="gstno" id="gstno" value="" maxlength="15" placeholder="Enter your customer gst no" autofocus required>
                </div>

                <!-- image upload  -->
                <div class="input-box" style="display: flex; align-items: center;">
                    <label for="">Upload image <span class="mandatory">*</span></label>
                    <input type="file" name="image" value="upload" placeholder="Please upload your image">
                </div>


                
                
                <!-- submit button -->
            </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary" id="button" value="submit">
                
                    <!-- <input type="reset" class="btn btn-info" value="reset" id="reset"> -->
            </div>
            </div>
        <br>

         <!-- customer table   -->
        <table border=1px id="mytable">
            <thead >
                <tr>
                    <th>Product Name</th>
                    <th>Discrption</th>
                    <th>HSN Code</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>GST %</th>
                    <th>Price</th>
                    <th>Invoice Number</th>
                </tr>
            </thead>
            <tbody id="num">
                    <tr>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input id="gst"></td>
                        <td><input></td>
                        <td><input></td>
                    </tr>  
                    <tr>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                    </tr>  
                    <tr>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                    </tr>  
                    <tr>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                    </tr>  
                    <tr>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                        <td><input></td>
                    </tr>  
                    
            </tbody>
        </table>
        <div id="table"></div>
        <button id="add">Add</button>
    </div>
    <!-- total  -->
  <div class="jaga">
                <label for="name">Total:</label>
                <input type="text">
                <!-- </div> -->
                
                <!-- output gst  -->
                <!-- <div class="jaga"> -->
                <label for="name">Output GST %</label>
                <input type="text" id="gstno" >
                <!-- </div> -->

                <!-- discount  -->
                <!-- <div class="jaga"> -->
                <label for="name">Discount %</label>
                <input type="text">
                <!-- </div> -->

                <!-- net amount -->
                <!-- <div class="jaga"> -->
                <label for="name">Net Amount:</label>
                <input type="text">
                </div>
                </form>
            </body>
</html>
 
<script>
 $(document).ready(function () {
    
    // jQuery.validator.addMethod("alphabetonly", function(value, element) {
    // return this.value.replace(/[^0-9\.]/g);
    // }, "Please specify the correct domain for your documents");

        $('#form').validate({
            rules: {
                cname: {
                    required: true,
                    // alphabetonly:true,

                },
                regno: {
                    required: true,
                    minlength:8,
                    maxlength:8,

                    // alphabetonly:true,
                },
                rpname: {
                    required: true,
                    
                },
                bname:{
                    required:true,
                },
                cno:{
                    required:true,
                    minlength:10,
                    maxlength:10,
                },
                acname:{
                    required:true,
                },
                mno:{
                    required:true,
                    digits:true,
                    minlength:10,
                    maxlength:10,
                    // phoneUS:true,
                },
                gstno:{
                    required:true,
                    minlength:15,
                    maxlength:15,
                },
                image:{
                    required:true,
                }
            },
            messages: {
                cname: {
                    required:"Enter your Full name" ,
                },
                regno: {
                     required:"Enter your Registration number",
                     minlength: "Register number should be 8 digits",
                     maxlength: "Register number should be 8 digits",
                     numbersOnly: "Please enter only numbers",
                },
                rpname: {
                    required: "Enter your Responsible person name",
                },
                bname:{
                    required:"Enter your Branch name"
                },
                cno:{
                     required:"Enter Customer mobile no",
                     minlength: "Mobile number should be 10 digits",
                     maxlength: "Mobile number should be 10 digits",
                     numbersOnly: "Please enter only numbers",
                     digits:true,

                },
                acname:{
                    required:"Enter Accessories executive name"
                },
                mno:{
                    required:"Enter Mobile no",
                    minlength: "Mobile number should be 10 digits",
                     maxlength: "Mobile number should be 10 digits",
                     numbersOnly: "Please enter only numbers",
                },
                gstno:{
                     required:"Enter Customer Gst no",
                     minlength: "Mobile number should be 15 digits",
                     maxlength: "Mobile number should be 15 digits",
                     numbersOnly: "Please enter only numbers",
                },
                image:{
                    required:"Please upload your image",
                }
            }
        });
    });

    // customer name only alphabets

    $('#cname').on('input', function(e) {
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
    
    $('#cname').keypress(function(e) {
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

// mobile number only numbers 

$('#mno').keypress(function () {
    $('#mno').keypress(function (event) {
        var keycode;

        keycode = event.keyCode ? event.keyCode : event.which;

        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 ||
                keycode == 37 ||keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });
});
 
$('#cno').keypress(function () {
    $('#cno').keypress(function (event) {
        var keycode;

        keycode = event.keyCode ? event.keyCode : event.which;

        if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 ||
                keycode == 37 ||keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
            event.preventDefault();
        }
    });
});


// Responsible person name

$('#rpname').on('input', function(e) {
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
    $('#rpname').keypress(function(e) {
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

// Branch name 
$('#bname').on('input', function(e) {
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
    $('#bname').keypress(function(e) {
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

// Accessories executive name 

$('#acname').on('input', function(e) {
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
    $('#acname').keypress(function(e) {
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

// alpha numeric validation 
$("input[name='gstno'] ").focus(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
			event.preventDefault();
		}
	}).keyup(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
		event.preventDefault();
			}
	}).keypress(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
			event.preventDefault();
		}
	
	});


    $("input[name='regno'] ").focus(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
			event.preventDefault();
		}
	}).keyup(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
		event.preventDefault();
			}
	}).keypress(function (e) {
		if (!(e.which != 8 && e.which != 0 && ((e.which >= 48 && e.which <= 57)  || (e.which >= 65 && e.which <= 90) || (e.which >= 97 && e.which <= 122) ))) {
			event.preventDefault();
		}
	
	});

// ajax auto fill fields to fetch data 

$(document).ready(function(){

$('#mno').change(function(){
    name=$('#mno').val();
alert(name);
$.ajax({
    url:'<?php echo site_url('Salescontroller/getname')?>',
    type:"post",
    data:{name:name},
    dataType:'json',
    success:function(data){
        console.log(data);
            $('#cname').val(data.cname)
            $('#regno').val(data.regno);
            $('#rpname').val(data.rpname);
            $('#bname').val(data.bname);
            $('#cno').val(data.cno);
            $('#acname').val(data.acname);
            $('#gstno').val(data.gstno);

        
    }
});
});

// auto calculate gst 

$('#gst').change(function(){
    gst=$(this).val();
    alert(gst);
    $('#gstno').val(gst);
})


// table adding rows function 

$('#add').click(function(){
    
    $('#mytable').append('<tr><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td></tr>');
})
});



</script>

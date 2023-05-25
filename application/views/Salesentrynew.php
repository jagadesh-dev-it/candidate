<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assement</title> 

    <!-- links  -->
    <script src="<?php echo base_url('assets/sales.min.js');?>"></script>  
    <script src="<?php echo base_url('assets/salesvalidate.js');?>"></script>  
    <link rel="stylesheet" href="<?php echo base_url('assets/sales.css');?>">



</head>
<body>
    <div class="container">
        <form action="<?php echo base_url('index.php/Salesentry/updated_list/'.$date[0]['id']);?>" enctype="multipart/form-data" method="post" id="form">
            <h1>Debit sales entry</h1>
            <div class="content">

            <!-- Customer name  -->
                <div class="input-box">
                    <label for="">Customer name:</label>
                    <input type="text" name="cname" id="cname" value="<?php echo $date[0]['cname'];?>" pattern="[a-zA-Z]+" maxlength="50" placeholder="This field is required" autofocus>
                </div> 

                <!-- Registration no  -->
                <div class="input-box">
                    <label for="">Registration no:</label>
                    <input type="number" name="regno" id="regno" value="<?php echo $date[0]['regno'];?>" pattern=" /^[0-9]+$/" placeholder="This field is required" autofocus>
                </div>

                <!-- Responsible person name  -->
                <div class="input-box">
                    <label for="">Responsible person name:</label>
                    <input type="text" name="rpname" id="rpname" value="<?php echo $date[0]['rpname'];?>" placeholder="This field is required" autofocus>
                </div>

                <!-- Branch name  -->
                <div class="input-box">
                    <label for="">Branch name:</label>
                    <input type="text" name="bname" id="bname" value="<?php echo $date[0]['bname'];?>" placeholder="This field is required" autofocus>
                </div>

                <!-- Customer mobile no  -->
                <div class="input-box">
                    <label for="">Customer mobile no:</label>
                    <input type="number" name="cno" id="cno" value="<?php echo $date[0]['cno'];?>" placeholder="This field is required" autofocus>
                </div>

                <!-- Accessories executive name  -->
                <div class="input-box">
                    <label for="">Accessories executive name:</label>
                    <input type="text" name="acname" id="acname" value="<?php echo $date[0]['acname'];?>" placeholder="This field is required" autofocus>
                </div>

                <!-- mobile number  -->
                <div class="input-box">
                    <label for="">Mobile no:</label>
                    <input type="number" name="mno" id="mno" value="<?php echo $date[0]['mno'];?>" placeholder="This field is required" autofocus>
                </div>

                <!-- customer gst invoice  -->
                <div class="input-box">
                    <label for="">Customer Gst no:</label>
                    <input type="number" name="gstno" id="gstno" value="<?php echo $date[0]['gstno'];?>" placeholder="This field is required" autofocus>
                </div>

                 <!-- submit button -->
               
                    <input type="submit" id="button" value="submit">
                

                <!-- total  -->
                <div class="input-box"><br><br><br>
                <label for="name">total</label>
                <input type="text">
                </div>
                
                <!-- output gst  -->
                <div class="input-box"><br><br>
                <label for="name">output gst %</label>
                <input type="text">
                </div>

                <!-- discount  -->
                <div class="input-box"><br><br>
                <label for="name">Discount %</label>
                <input type="text">
                </div>

                <!-- net amount -->
                <div class="input-box">
                <label for="name">Net amount</label>
                <input type="text">
                </div>
            </div>
            </div>
    
        <br>

         <!-- customer table   -->
        <table border=1px id="mytable">
            <thead >
                <tr>
                    <th>Product name</th>
                    <th>Descrption</th>
                    <th>HSN code</th>
                    <th>Stock</th>
                    <th>Quantity</th>
                    <th>gst %</th>
                    <th>Price</th>
                    <th>Invoice number</th>
                </tr>
            </thead>
            <tbody>
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
        
    </div>
    </form>
   
</body>

</html>

<script>
 $(document).ready(function () {
        $('#form').validate({
            rules: {
                cname: {
                    required: true,
                },
                regno: {
                    required: true,
                },
                rpname: {
                    required: true,
                },
                bname:{
                    required:true,
                },
                cno:{
                    required:true,
                },
                acname:{
                    required:true,
                },
                mno:{
                    required:true,
                },
                gstno:{
                    required:true,
                }
            },
            messages: {
                cname: {
                    required:"Enter your Full name" ,
                },
                regno: {
                    required:"Enter your Registration number",
                },
                rpname: {
                    required: "Enter your Responsible person name",
                },
                bname:{
                    required:"Enter your Branch name"
                },
                cno:{
                    required:"Enter Customer mobile no"
                },
                acname:{
                    required:"Enter Accessories executive name"
                },
                mno:{
                    required:"Enter Mobile no"
                },
                gstno:{
                    required:"Enter Customer Gst no"
                }
            }
        });
    });

    // customer name 

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


Responsible person name

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
only number 



</script>

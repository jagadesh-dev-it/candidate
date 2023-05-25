
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="<?php echo base_url('assets/Login.min.js');?>"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='<?php echo base_url('assets/datatables.min.js');?>'></script>




</head>
<style>
table{
    
    border-collapse:collapse;
}
#export {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
#edit{
  background-color:blue;
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}
#delete{
  background-color: red;
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

</style>
<body>
    <table border=1px id="myTable">
    <thead>
        <tr>
            <th>id</th>
            <th>User login</th>
            <th>Password</th>
            <th>Action</th>
           

        </tr>
    </thead>
    
        <?php foreach($data as $row){?>
            <tbody>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["psw"];?></td>
                
                
                <td><a id="edit" href="<?php echo base_url('index.php/Login/updating/'.$row['id'])?>"><i class="fa-solid fa-pen"></i></a><a id="delete" href="<?php echo site_url('Login/delete/'.$row['id'])?>"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>  
            </tbody>
            <?php 
        }?>  
   
</table>

</body>
</html>
<script>
    let table = new DataTable('#myTable');
</script>


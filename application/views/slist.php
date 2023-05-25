<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1px>
    <thead>
        <tr>
            <th>Customer name</th>
            <th>Register no</th>
            <th>Responsible person name</th>
            <th>Branch name</th>
            <th>Customer mobile no</th>
            <th>Accessories executive name</th>
            <th>Mobile no</th>
            <th>Customer GST.no:</th>
            <!-- <th>Action</th> -->
        </tr>
    </thead>
    <tbody>
        <?php foreach($date as $row){?>
            <tr>
            <td><?php echo $row["cname"];?></td>
                <td><?php echo $row["regno"];?></td>
                <td><?php echo $row["rpname"]?></td>
                <td><?php echo $row["bname"];?></td>
                <td><?php echo $row["cno"];?></td>
                <td><?php echo $row["acname"];?></td>
                <td><?php echo $row["mno"];?></td>
                <td><?php echo $row["mno"];?></td>
                
                <!-- <td><a id="edit" href="<?php echo base_url('index.php/Cruddata/updating/'.$row['id_no'])?>">edit</a> <a id="delete" href="<?php echo site_url('Cruddata/delete/'.$row['id_no'])?>">delete</a></td> -->
            </tr>  

            <?php }?>  
    </tbody>
</table>
</body>
</html>

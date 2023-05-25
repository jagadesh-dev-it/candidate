<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DataTables</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script src="assets/Login.min.js"></script>


</head>
<body>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>email</th>
                <th>psw</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($date as $row){?>
                <tr>
                    <td><?php echo $row->["id"];?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->psw;?></td>
                    <td><a href="<?php echo base_url().'Login/updating/'.$row->id;?>">Edit</a></td>
                    <td><a href="<?php echo base_url().'Login/delete/'.$row->id;?>">Delete</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>

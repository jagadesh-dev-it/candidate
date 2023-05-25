<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DataTables</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
</head>
<body>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Spouse Name</th>
                <th>Spouse Age</th>
                <th>Spouse Company</th>
                <th>Current Employer</th>
                <th>Years Worked</th>
                <th>Years of Experience</th>
                <th>Previous Designation</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($date as $row){?>
                <tr>
                    <td><?php echo $row["id_no"];?></td>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->fname;?></td>
                    <td><?php echo $row->lname;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->mnumber;?></td>
                    <td><?php echo $row->gen;?></td>
                    <td><?php echo $row->dob;?></td>
                    <td><?php echo $row->age;?></td>
                    <td><?php echo $row->marital;?></td>
                    <td><?php echo $row->spousename;?></td>
                    <td><?php echo $row->spouseage;?></td>
                    <td><?php echo $row->spousecompany;?></td>
                    <td><?php echo $row->hee;?></td>
                    <td><?php echo $row->yearsworked;?></td>
                    <td><?php echo $row->yoe;?></td>
                    <td><?php echo $row->prevdesignation;?></td>
                    <td><a href="<?php echo base_url().'Cruddata/updating/'.$row->id;?>">Edit</a></td>
                    <td><a href="<?php echo base_url().'Cruddata/delete/'.$row->id;?>">Delete</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>

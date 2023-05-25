<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>email</th>
            <th>mnumber</th>
            <th>gen</th>
            <th>dob</th>
            <th>age</th>
            <th>marital</th>
            <th>spousename</th>
            <th>spouseage</th>
            <th>spousework</th>
            <th>spousecompany</th>
            <th>hee</th>
            <th>prevcompany</th>
            <th>yearsworked</th>
            <th>prevdesignation</th>
            </tr>
        </thead>
        <?php
        foreach($date as $row){ print_r($row);?>
        <tbody>
            <tr>
                <td><?php echo $rows["id"];?></td>
                <td><?php echo $rows["fname"];?></td>
                <td><?php echo $rows["lname"];?></td>
                <td><?php echo $rows["email"];?></td>
                <td><?php echo $rows["mnumber"];?></td>
                <td><?php echo $rows["gen"];?></td>
                <td><?php echo $rows["dob"];?></td>
                <td><?php echo $rows["age"];?></td>
                <td><?php echo $rows["marital"];?></td>
                <td><?php echo $rows["spousename"];?></td>
                <td><?php echo $rows["spouseage"];?></td>
                <td><?php echo $rows["spousework"];?></td>
                <td><?php echo $rows["hee"];?></td>
                <td><?php echo $rows["prevcompany"];?></td>
                <td><?php echo $rows["yearsworked"];?></td>
                <td><?php echo $rows["yearsworked"];?></td>
                <td><?php echo $rows["prevdesignation"];?></td>
            </tr>
        <?php}
        ?>
       
    </table>
</body>
</html>
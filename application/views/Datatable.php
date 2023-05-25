
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
</head>

<!-- table css  -->
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
            <tr>
              
            </tr>  
            </tbody>
   
</table>

</body>

<script>
$('#myTable').DataTable({                                                                         

"sPaginationType": "full_numbers",
      
      'bProcessing'    : true,
      'bServerSide'    :true,
      "bLengthChange": true,
      'bSearchable'	 :true,
      'bAutoWidth'     : false,
      'sAjaxSource'    : '<?php echo site_url('Salescontroller/search'); ?>',


    
      'aoColumns' : [
          { "sName": 'id' },
          { "sName": 'cname' },
          { "sName": 'regno' },
          { "sName": 'rpname' },
          { "sName": 'bname' },
          { "sName": 'cno' },
          { "sName": 'acname' },
          { "sName": 'mno' },
          { "sName": 'gstno' },
      ],
      "aaSorting": [[0, "asc"]],
      'fnServerData': function (sSource, aoData, fnCallback)
          {
              $.ajax({
                  'dataType': 'json',
                  'type': 'POST',
                  'url': sSource,
                  'data': aoData,
                  'success': fnCallback,
              });
              $("div.dataTables_filter input").focus();
          },
        });
</script>

<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>


        table {
            border-collapse: collapse;
        }

        #export, #edit, #delete {
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

        /* .dataTables_wrapper .dataTables_paginate .paginate_button {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 2px;
        } */
    </style>
</head>

<body>
    <table border="1px" id="myTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Customer Name</th>
                <th>Register No</th>
                <th>Responsible Person Name</th>
                <th>Branch Name</th>
                <th>Customer Mobile No</th>
                <th>Accessories Executive Name</th>
                <th>Mobile No</th>
                <th>Customer GST.No:</th>
                <th>Image</th>
                <th>download</th>
            </tr>
        </thead>
        <tbody>

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
          { "sName": 'image',
            "render": function (data, type, row){
            return '<img src=" <?php echo base_url('uploads'); ?>/'+data+'" style="max-width: 300px; max-height: 200px;"> ';
          }

        },
        {
                        'sName': 'image',
                        'render': function (data, type, row) {
                            return '<a href="<?php echo base_url('uploads/'); ?>/'+row[9]+'" download>Download</a>';
                        }
                    }
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
</tbody>

    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>

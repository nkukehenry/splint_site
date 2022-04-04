<html>
<head>
    <style type="text/css">
        
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
        }

        table{
            border-collapse: collapse;
        }

        td{
            padding: 5px;
        }

        .text-center{
            text-align: center;
            width: 100%;
        }

        tr:nth-child(even) {background: #CCC}
        tr:nth-child(odd) {background: #FFF}

    </style>
</head>
<body>

<h2 class="text-center">FITSPA Downloads Report, <?=date('Y-m-d')?></h2>

<hr>
<br>
<table border="1">

   <thead>
     <tr>
        <th>Date</th>
        <th>Email</th>
        <th>File</th>
     <tr>
    </thead>

    <?php foreach($downloads as $row): ?>
        <tr>
            <td><?php echo $row->due_date;?></td>
            <td><?php echo $row->email_address;?> </td>
            <td><?php echo $row->file;?></td>
        </tr>
   <?php endforeach; ?>
</table>

</body>
</html>
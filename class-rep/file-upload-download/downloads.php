<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    td{
      padding: 10px;
      border:none;
    }
    th{
      background: #eaeaea;
      border:none;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
  </style>
  <title>resource page</title>
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
</head>
<body>

  <center><h1 style="font-family: 'Cinzel Decorative', cursive;">RESOURCE PAGE</h1></center>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>Size</th>
    <th>Downloads</th>
    <th>Download</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>" style="text-decoration: none; color: black;
      padding: 7px; background: lightgreen; border-radius: 5px;">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
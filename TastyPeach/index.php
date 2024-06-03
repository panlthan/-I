<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regrade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron" style="background-color: rgb(45,49,66); text-align: center; color:white ">
                <h2>Document Customer</h2>
            </div>
        </div>
        <div style="text-align: right; margin:10px">
            <a href="data_add.php" class="btn btn-success">Add Data</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NationID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $sql =  'SELECT NationID From data';
                $result = mysqli_query($conn, $sql);
                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                    echo '<tr>';
                    echo '<td>' . $row['NationID'] . '</td>';
                    echo '<td>';
                ?>
                    <a href="detail.php?NationID=<?php echo $row['NationID']; ?>" class="btn btn-primary">Detail</a>
                    <a href="data_edit.php?NationID=<?php echo $row['NationID']; ?>" class="btn btn-warning">Edit</a>
                    <a href="JavaScript:if(confirm('ยืนยันการลบ')==true){window.location='data_delete.php?NationID=<?php echo $row["NationID"]; ?>'}" class="btn btn-danger">Delete</a>
                <?php
                    echo '</td>';
                    echo '</tr>';
                }
                mysqli_free_result($result);
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <img src="https://media.tenor.com/2l4-h42qnmcAAAAi/toothless-dancing-toothless.gif" style="display: block; margin-left: auto; margin-right: auto; width:700px">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
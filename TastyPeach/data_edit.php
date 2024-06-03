<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <h2 style="color:white" >Edit Profile</h2>
                <?php
                $NationID = $_REQUEST['NationID'];
                if (isset($_GET['submit'])) {
                    $NationID = $_REQUEST['NationID'];
                    $Name = $_GET['Name'];
                    $Email = $_GET['Email'];
                    $Address = $_GET['Address'];
                    $age = $_GET['age'];
                    $status = $_GET['status'];
                    $sql = "UPDATE data SET ";
                    $sql .= "Name='$Name', Email='$Email', Address='$Address', age='$age', status='$status' ";
                    $sql .= "WHERE NationID='$NationID'";
                    include 'connect.php';
                    mysqli_query($conn, $sql);
                    mysqli_close($conn);
                    echo "<div class='alert alert-success' role='alert'>Done!</div>";
                    echo '<a href="index.php" class="btn btn-primary">Back</a>';
                } else {
                    include 'connect.php';
                    $sql2 = "select * from data where NationID='$NationID'";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
                    $Name = $row2['Name'];
                    $Email = $row2['Email'];
                    $Address = $row2['Address'];
                    $age = $row2['age'];
                    $status = $row2['status'];
                ?>
                    <form class="form" role="form" name="data_edit" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="hidden" name="NationID" id="NationID" value="<?php echo $NationID; ?>">
                        <div class="mb-4">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" class="form-control" value="<?php echo $Name; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" name="Email" id="Email" class="form-control" value="<?php echo $Email; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" name="Address" id="Address" class="form-control" value="<?php echo $Address; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" id="age" class="form-control" value="<?php echo $age; ?>">
                        </div>
                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" name="status" id="status" class="form-control" value="<?php echo $status; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <a href="index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>

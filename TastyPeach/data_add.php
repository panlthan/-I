<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-5">Add Data</h2>
                        <?php
                        if (isset($_REQUEST['submit'])) {
                            $Title = $_REQUEST['Title'];
                            $Name = $_REQUEST['Name'];
                            $Email = $_REQUEST['Email'];
                            $Phone = $_REQUEST['Phone'];
                            $Address = $_REQUEST['Address'];
                            $NationID = $_REQUEST['NationID'];
                            $birthday = $_REQUEST['birthday'];
                            $gender = $_REQUEST['gender'];
                            $age = $_REQUEST['age'];
                            $status = $_REQUEST['status'];
                            $sql = "INSERT INTO data (Title, Name, Email, Phone, Address, NationID, birthday, gender, age, status) ";
                            $sql .= "VALUES ('$Title', '$Name', '$Email', '$Phone', '$Address', '$NationID', '$birthday', '$gender', '$age', '$status')";
                            include 'connect.php';
                            mysqli_query($conn, $sql);
                            mysqli_close($conn);
                            echo "<p class='alert alert-success'>Add $NationID $Name Successfully!</p>";
                            echo "<a href='index.php' class='btn btn-primary'>Back to list</a>";
                        } else {
                        ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Title</label>
                                    <input type="text" name="Title" id="Title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" name="Name" id="Name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" name="Email" id="Email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Phone" class="form-label">Phone</label>
                                    <input type="text" name="Phone" id="Phone" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Address" class="form-label">Address</label>
                                    <input type="text" name="Address" id="Address" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="NationID" class="form-label">NationID</label>
                                    <input type="text" name="NationID" id="NationID" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" name="birthday" id="birthday" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <input type="text" name="gender" id="gender" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" name="age" id="age" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input type="text" name="status" id="status" class="form-control">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

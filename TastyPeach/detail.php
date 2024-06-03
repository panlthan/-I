<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h2 style="height: 60px; color: white; ">User Detail</h2>
            <?php
            include 'connect.php';

            if (isset($_GET['NationID'])) {
                $nationID = $_GET['NationID'];

                $sql = "SELECT * FROM data WHERE NationID = '$nationID'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
            ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nation ID: <?php echo $row['NationID']; ?></h5>
                            <p class="card-text">Title: <?php echo $row['Title']; ?></p>
                            <p class="card-text">Name: <?php echo $row['Name']; ?></p>
                            <p class="card-text">Email: <?php echo $row['Email']; ?></p>
                            <p class="card-text">Phone: <?php echo $row['Phone']; ?></p>
                            <p class="card-text">Address: <?php echo $row['Address']; ?></p>
                            <p class="card-text">Birthday: <?php echo $row['birthday']; ?></p>
                            <p class="card-text">Gender: <?php echo $row['gender']; ?></p>
                            <p class="card-text">Age: <?php echo $row['age']; ?></p>
                            <p class="card-text">Status: <?php echo $row['status']; ?></p>
                        </div>
                    </div>
            <?php
                } else {
                    echo "<p>User not found.</p>";
                }

                mysqli_free_result($result);
            } else {
                echo "<p>Invalid request.</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
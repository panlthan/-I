<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        include 'connect.php';
        $NationID = $_GET['NationID'];
        $sql = "DELETE FROM data WHERE NationID='$NationID'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">Delete Successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Oops! Something went wrong.';
        }
        mysqli_close($conn);
        ?>
        <a href="index.php" class="btn btn-primary mt-3">Back to Home</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

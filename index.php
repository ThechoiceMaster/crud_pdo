<?php 
    require_once('connection')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    
    <table class="table table-striped table-bordered table-hover">
        
            <thead class="thead-light">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Edit Name</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $select_stmt = $db->prepare("SELECT * FROM tbl_person");
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO:FETCH_ASSOC)) {
                ?>
                <tr>
                <td><?php echo $row("firstname"); ?></td>
                <td><?php echo $row("lastname"); ?></td>
                <td><a href="edit.php?update_id=<?php echo $row["id"]; ?>" class="btn-warning">Edit</a></td>
                <td><a href="?delete_id=<?php echo $row["id"]; ?>" class="btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        
    </table>


    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
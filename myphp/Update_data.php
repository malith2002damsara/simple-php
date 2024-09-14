<?php include 'myphptest1.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body>
    <?php
    $query= "UPDATE table1 SET firstname='sasila' WHERE id=1";
    $result = mysqli_query($con,$query);

    if($result){
      
        echo mysqli_affected_rows($con);

    }else {
        echo "Query is wrong";
    }

    ?>

</body>
</html>
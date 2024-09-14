<?php include 'myphptest1.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Data</title>
</head>
<body>
    <?php
    $query= "DELETE FROM table1 WHERE id=3";
    $result = mysqli_query($con,$query);

    if($result){
      
        echo mysqli_affected_rows($con);

    }else {
        echo "Query is fAILED";
    }

    ?>

</body>
</html>
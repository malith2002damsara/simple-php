<?php include 'myphptest1.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Get Data</title>
</head>
<body>
    <?php
    $query= "SELECT *FROM table1";
    $result = mysqli_query($con,$query);

    if($result){
        echo "Number of rows in data table ="; 
        echo mysqli_num_rows($result);

        //get a 1st row data.
        $r = mysqli_fetch_assoc($result);
        echo "<pre>";
        print_r($r);
        echo "</pre>";
        
        //get a 2nd row data.
        $r = mysqli_fetch_assoc($result);
        echo "<pre>";
        print_r($r);
        echo "</pre>";

        // while(1){
        //     $r = mysqli_fetch_assoc($result);
        //     echo "<pre>";
        //     print_r($r);
        //     echo "</pre>";

        // }

    }else {
        echo "There is no data found";
    }

    ?>

</body>
</html>
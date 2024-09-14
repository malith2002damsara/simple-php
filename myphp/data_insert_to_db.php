<?php include 'myphptest1.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    // SQL query to insert data into the user table
    $dbQuery = "INSERT INTO table1 (id, firstname, lastname, age) VALUES ('$id', '$fname', '$lname', '$age')";


    // Execute the query
    $result = mysqli_query($con, $dbQuery);

    if ($result) {
        echo "Record has been added successfully.";
    } else {
        echo "Error: Record was not added. " . mysqli_error($con);
    }
}
?>

    <form action="data_insert_to_db.php" method="POST">
        Id: <input type="number" name="id" required> <br>
        First Name: <input type="text" name="firstname" required> <br>
        Last Name: <input type="text" name="lastname" required> <br>
        Age: <input type="number" name="age" required> <br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>

<?php 
// Close the database connection
mysqli_close($con); 
?>

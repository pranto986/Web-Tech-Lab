<?php include 'db.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Reg No: <input type="text" name="reg"><br>
    Department: <input type="text" name="dept"><br>
    <button type="submit" name="submit">Add</button>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reg = $_POST['reg'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO students(name,email,registration_no,department)
            VALUES('$name','$email','$reg','$dept')";

    if(mysqli_query($conn,$sql)){
        echo "Student Added Successfully";
    }
}
?>
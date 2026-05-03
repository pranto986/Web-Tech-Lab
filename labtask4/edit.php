<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    Department: <input type="text" name="dept" value="<?php echo $row['department']; ?>"><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];

    mysqli_query($conn, "UPDATE students 
        SET name='$name', email='$email', department='$dept'
        WHERE id=$id");

    echo "Updated Successfully";
}
?>
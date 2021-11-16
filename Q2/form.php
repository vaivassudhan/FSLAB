<?php
    $db = mysqli_connect('localhost','root','','FS-Lab') or die("Cant connect");
    $sql = "SELECT * FROM q2";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0){
        echo"<ul>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<li>".$row['name']."</li>";
                
        }
        echo"</ul>";
    
    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $number = $_POST['number'];
        $date  = $_POST['date'];
        $about = $_POST['about'];
        $sql = "INSERT INTO q2 VALUES ('$name','$country','$email','$number','$date','$about')";
        $result = mysqli_query($db,$sql);
    }

?>
<!-- user form -->
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>User</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="Country">Country:</label>
        <input type="text" name="country" id="country">
        <label for="number">Mobile Number:</label>
        <input type="text" name="number" id="number">
        <label for="dob">Date of birth :</label>
        <input type="date" name="date" id="date">
        <label for="about">About you:</label>
        <textarea name="about" id="about" cols="30" rows="10"></textarea>
        <button type="submit"></button>
    </form>
</body>
</html>
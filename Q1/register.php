

<?php
$db = mysqli_connect('localhost', 'root', '', 'FS-Lab');  
if(isset($_POST['name']))
{  
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $sid = $_POST['sid'];
    $email = $_POST['email'];
    $slot = $_POST['slot']; 

    $q = "SELECT * FROM Schedule WHERE id='{$slot}'";
    $result = mysqli_query($db,$q);
    if(mysqli_num_rows($result)==1)
    {
        $row = mysqli_fetch_assoc($result);
        $available = (int)$row['available'];
        $available = $available - 1;

        echo $available;
    }
    $q = "UPDATE Schedule SET available = '{$available}' WHERE id='{$slot}'";
    $result = mysqli_query($db,$q);
    if($result)
    {
        echo "Success";
    }

    $query = "INSERT INTO labs VALUES('{$name}','{$fname}','{$sid}','{$email}','{$slot}')";
    $result = mysqli_query($db,$query);
    if($result)
    {
        echo '<script>alert("Successfully Registered")</script>';
    }
    else
    {
        echo '<script>alert("Error")</script>';
    }   
    }   

?>

<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form action="register.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="name">First Name</label>
            <input type="text" name="fname">

            <label for="name">SID</label>
            <input type="text" name="sid">

            <label for="name">Email</label>
            <input type="email" name="email">
            
            <select name="slot" id="slot">
        <?php
            $query = "SELECT * FROM Schedule";
            $res = mysqli_query($db, $query);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<option value='".$row['id']."'>".$row['slot']." ".$row['available']." Remaining</option>";   
                }
            }
        ?>
            </select>
                
            
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
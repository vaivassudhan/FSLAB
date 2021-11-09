<?php
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $sid = $_POST['sid'];
    $email = $_POST['email'];
    $dept = $_POST['dept']; 
    $db = mysqli_connect('localhost', 'root', '', 'registration');  
    echo $name;
?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration</h1>
        <form method="post">
            <label for="name">Name</label>
            <input type="text" id="name">

            <label for="name">First Name</label>
            <input type="text" id="fname">

            <label for="name">SID</label>
            <input type="text" id="sid">

            <label for="name">Email</label>
            <input type="email" id="email">

            <select name="" id="">
                <option value="CSE">CSE</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>



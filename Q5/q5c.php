<?php
    if(isset($_POST['amount'])){
        $amount = $_POST['amount'];
        $camount = $amount*0.69;
    }
?>
<html>
    <head>
        <title>Currency convertor</title>
    </head>
    <body>
        <p>Hello</p>
        <?php
            echo "<p>"."${camount}"."</p>";
        ?>
    </body>
</html>
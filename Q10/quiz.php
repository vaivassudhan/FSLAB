<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<body>
    <form action="ques.php" method="post">
        <label for="number">Choose the number of questions: </label>
        <select name="number" id="number">
            <?php
                for($i=1;$i<=10;$i++)
                {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
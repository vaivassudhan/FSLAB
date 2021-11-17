<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    
</head>
<body>
    <script>
        function checkans(i){
            console.log(i);
            var ans=document.getElementById("ans").value;
            var e = document.getElementsByName(i);
            for(var j=0;j<e.length;j++){
                if(e[j].checked==true){
                    var selected = e[j].value;
                }
            }
            console.log(selected,ans);
            if(selected==ans){
                alert("Correct ans");
            }
            else{             
                alert("Wrong ans");
            }
        }
    </script>
    <?php
        echo"Hello";
            $noofq=$_POST['number'];
            $question =["What is your name? ", "Where are you from? "];
            $optionA = ["A. Ali", "A. Pakistan"];
            $optionB = ["B. Sami", "B. USA"];
            $optionC = ["C. Hamza", "C. UK"];
            $ans = ["A","C"];
            for($i=0;$i<2;$i++)
            {
                // echo '<form action="ques.php" method="post">';
                echo '<h2>'.$question[$i].'</h2>';
                echo '<input type="radio" id="'.$i.'" name="'.$i.'" value="A">'.$optionA[$i].'<br>';
                echo '<input type="radio" id="'.$i.'" name="'.$i.'" value="B">'.$optionB[$i].'<br>';
                echo '<input type="radio" id="'.$i.'" name="'.$i.'" value="C">'.$optionC[$i].'<br>';
                echo '<input type="hidden" id="ans" name="ans" value='.$ans[$i].'><br>';
                echo '<button onclick="checkans('.$i.')">Check Ans</button>';
                echo "console.log({$i})";
                // echo '</form>';
                //echo "<button onclick='checkans">Check Ans</button>";
            }
    
    ?>
</body>
</html>
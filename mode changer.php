<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mode Changer</title>
    <h1>Mode Changer</h1>
</head>
<body>
<style> body{ background: rgb(239, 240, 240); color: rgb(19, 18, 18); padding: 20px;}</style>
    <form action="mode changer.php" method="get"><br>
       <label for="mode">Select Mode:</label><br>
       Dark Mode :<input type="radio" name="mode" value="darkmode"><br>
       Light Mode :<input type="radio" name="mode" value="lightmode">
       <br><br><input type="submit">
    </form>

    <?php

       $mode=$_GET["mode"];

       if($mode=="darkmode"){
        echo ("<style> body{ background: rgb(19, 18, 18); color: rgb(239, 240, 240)}</style>");
       }

       if($mode=="lightmode"){
        echo ("<style> body{ background: rgb(239, 240, 240); color: rgb(19, 18, 18)}</style>");
       }


    ?>

</body>
</html>
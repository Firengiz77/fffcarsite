<html>
    <head>
    </head>
    <title>About</title>
    <body>

<form action="about.php" method="post">
    Do You Have Any Account? <br>
<input type="text " name="text" >
<input type="submit">
</form>


    <form action="about.php" method="post">
     Email: <input type="email" name="Email"><br>
     Password:<input type="password" name="Password"><br>
    <input type="submit"><br>


    </form>
        
<?php  echo $_POST["text"]
 if($_POST["text"]=="Yes"){

 }  


 else{

 }
  



?>






    </body>
</html>
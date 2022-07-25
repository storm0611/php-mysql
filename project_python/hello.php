<html>
<body>
<h3>Enter your name:</h3>

<form action="hello.php" method="post">
    Name: <input type="text" name="name"><br>
    <input name="submit" type="submit" >
</form>
<br><br>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    // add ' ' around multiple strings so they are treated as single command line args
    $name = escapeshellarg($_POST[name]);

    // build the linux command that you want executed;  
    $command = 'python3 hello.py ' . $name;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // echo then run the command
    echo "command: $command <br>";
    system($command);           
}
?>



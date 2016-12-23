<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
    <body>
    
<?php
$name = $_POST['visitor_name'];
$email = $_POST['visitor_email'];
        
echo $name . ' ' . $email . '<br><br>';
        
if(isset($_POST['visitor_name']) && isset($_POST['visitor_email'])) {
    $data = $name . ' - ' . $email . '/n';
    $ret = file_put_contents('list.txt', $data, FILE_APPEND | LOCK_EX);
    
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file <br><br>";
    } 
}
        
else {
   die('no post data to process');
}
?>
        <a href="./list.txt">View List</a><br>
        <a href="next.html">Continue</a>
        
        
    </body>
</html>


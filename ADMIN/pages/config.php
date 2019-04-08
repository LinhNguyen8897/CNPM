
<?php
$conn = mysqli_connect('localhost', 'root', '', 'course');  
mysqli_set_charset($conn, 'UTF8'); 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
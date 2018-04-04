<?php
    include_once 'header.php';
?>
<?php
    if (isset($_POST['submit'])){
        $user=$_POST['username'];
        echo $user;
    }
?>
<?php
    include_once 'footer.php';
?>
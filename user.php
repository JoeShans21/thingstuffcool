<?php
    include_once 'header.php';
?>
<?php
    include_once 'includes/dbh.inc.php';
    $username=$_GET['username'];
    $sql="SELECT * FROM users WHERE user_uid='" . $username ."'";
    $result=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
    $first=$row['user_first'];
    $last=$row['user_last'];
    $email=$row['user_email'];
?>
<html>
    <h1>
        <?php
            echo $first . " " . $last;
        ?>
    </h1>
    <p>Username:
        <?php
            echo $username;
        ?>
    </p>
    <p>Email:
        <?php
            echo $email;
        ?>
    </p>
</html>
<?php
    include_once 'footer.php';
?> 
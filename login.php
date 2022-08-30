<body>
    <center>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","gym_database");

if($conn === false)
{
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $uID = $_POST['myID'];
    $password = $_POST['my_pw'];
    $id_search = "select *from client where USERID = '$uID'";
    $query = mysqli_query($conn,$id_search);
    
    $id_count = mysqli_num_rows($query);
    
    if($id_count){
        $id_pass = mysqli_fetch_assoc($query);
        $db_pass = $id_pass['PASSWORD'];
        $_SESSION['USERNAME'] = $id_pass['USERNAME'];
        $_SESSION['EMAIL'] = $id_pass['EMAIL'];
        $_SESSION['MY_PLAN'] = $id_pass['MY_PLAN'];
        $password = md5($password);
        if($password==$db_pass){
            echo "login successful, wait while we redirect you";
            ?>
            <script>
                location.replace("afterLogIn.php");
                </script>
        <?php
        }
        else {
            echo "PASSWORD INCORRECT";
        }
    }
    else{
        echo "USER ID DOES NOT EXIST";
    }
}
mysqli_close($conn);
?>
</center>
</body>
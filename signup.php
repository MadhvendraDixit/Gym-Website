<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => gym_database
        $conn = mysqli_connect("localhost", "root", "", "gym_database");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $my_userID = $_REQUEST['my_userID'];
        $query = mysqli_query($conn, "SELECT *FROM client WHERE USERID = '$my_userID'");
        if (mysqli_num_rows($query) > 0) {
            echo "User ID already exist";
        } else {
            $my_username =  $_REQUEST['my_username'];
            $my_email =  $_REQUEST['my_email'];
            $my_pw = $_REQUEST['my_pw'];
            $my_plan = $_REQUEST['plan_id'];
            // Performing insert query execution
            // here our table name is Client
            $password=md5($my_pw);
            $sql = "INSERT INTO Client(USERNAME,USERID,EMAIL,PASSWORD,MY_PLAN)  VALUES ('$my_username', 
            '$my_userID','$my_email','$password','$my_plan')";

            if (mysqli_query($conn, $sql)) {
                header("Location: Gym_login_page.html");
                //echo "Data inserted successfuly, Go LogIn";
            }
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
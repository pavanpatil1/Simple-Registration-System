


<html>
    <head>
        <title>Redirecting</title>
    </head>
    <body>
    <?php

    $conn = mysqli_connect('localhost','root','','registration');

    if(!$conn){
        echo 'Not connected';
    }

    $fullname = $_POST['fullname'];
    $emailaddress = $_POST['emailaddress'];
    $mobilenumber = $_POST['mobilenumber'];
    $college = $_POST['college'];
    $qualification = $_POST['qualification'];

    $sql = "INSERT INTO users (fullname,emailaddress,mobilenumber,college,qualification) VALUES ('$fullname','$emailaddress','$mobilenumber','$college','$qualification')";

    if(!mysqli_query($conn,$sql)){
        echo 'Not inserted';
    }
    else{
        echo "<h1>";
        echo 'You will be redirected to main page.';
        echo "</h1>";
    }

    header("refresh:2; url=index.html");

    ?>
    </body>
</html>
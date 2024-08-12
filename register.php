<?php
    include("connection.php");
    if(isset($_POST['submit'])){    // if the submit button is clicked,post method will executed and data will be sent to regiser.php
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
       
        $no_telefon = mysqli_real_escape_string($conn, $_POST['phone']); // add this line to get the phone number from the form
        $no_IC = mysqli_real_escape_string($conn, $_POST['IC']); // add this line to get the IC from the form
        $taraf = mysqli_real_escape_string($conn, $_POST['radio-group']);


        $sql= "select * from register where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql= "select * from register where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email == 0){
        
                $sql = "INSERT INTO register(username, email, no_telefon, no_IC, taraf_jawatan) VALUES('$username', '$email', '$no_telefon', '$no_IC', '$taraf')";
                $result = mysqli_query($conn, $sql);    
                if($result){
                    header("Location: welcome.php");
                }
           }
           
    }
    else{
        if($count_user>0){
            echo '<script>
                window.location.href="index.php";
                alert("Username already Exist!!!");
            </script>';
        }
        if($count_email>0){
            echo '<script>
                window.location.href="index.php";
                alert("Email already Exist!!!");
            </script>';
            }
    
        }
    
?>
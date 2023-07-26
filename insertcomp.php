<?php
    $conn = mysqli_connect('localhost', 'root', '', 'porthole');
    if(!$conn)
    {
        echo "error in connection";
    }
    if (isset($_POST['submit'])) {
        // echo"hi";
       $name = $_POST['name'];
       $a_name = $_POST['a_name'];
       $mobileno = $_POST['mobileno'];
       $add = $_POST['add'];
       $r_name = $_POST['r_name'];
       $city = $_POST['city'];
       $pin = $_POST['pin'];
       $email = $_POST['email'];
       $description = $_POST['description'];
    $s_image_file_name = $_FILES['image']['name'];
	$s_image_file_size = $_FILES['image']['size'];
	$s_image_file_tmp = $_FILES['image']['tmp_name'];
	$s_image_file_type = $_FILES['image']['type'];

    move_uploaded_file($s_image_file_tmp, "image/" . $s_image_file_name);

    //    echo $name;

$sql = "INSERT INTO `complain`(`name`, `adhaar_no`, `mobile_no`, `address`, `rode_name`, `city`, `pin_code`, `email`, `description`,`photo`) VALUES ('$name','$a_name','$mobileno','$add','$r_name','$city','$pin','$email','$description','$s_image_file_name')";
            $r=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            // echo"$r";
            
            if ($r) {
                
                ?>
        
                <script>
                    alert('You have successfully Registered');
                    window.location = "./home.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('You have not successfully Registered');
                    window.location = "./complain form.php";
                    
                </script>
        <?php
            }
        }
        // }
        // }
        mysqli_close($conn);
        ?>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'porthole');
    if(!$conn)
    {
        echo "error in connection";
    }
    if (isset($_POST['submit'])) {
        // echo"hi";
        $name = $_POST['name'];
        $conid = $_POST['conid'];
        $address = $_POST['address'];
        $roadname = $_POST['roadname'];
        $pincode = $_POST['pincode'];
        $cost = $_POST['cost'];
        $ctime= $_POST['ctime'];
        $img = $_POST['img'];
        $description = $_POST['description'];
        $img = $_POST['img'];
    // $s_image_file_name = $_FILES['image']['name'];
	// $s_image_file_size = $_FILES['image']['size'];
	// $s_image_file_tmp = $_FILES['image']['tmp_name'];
	// $s_image_file_type = $_FILES['image']['type'];

    // move_uploaded_file($s_image_file_tmp, "image/" . $s_image_file_name);

    //    echo $name;

$sql = "INSERT INTO `contract`(`name`, `conid`, `address`, `roadname`, `pincode`,`cost`, `ctime`, `img`, `description`) VALUES ('$name','$conid','$address','$roadname','$pincode','$cost','$ctime','$img','$description')";
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
<html>
    <head>
        <title>contractor form</title>
        <mata charset=" UTF-8">
            <mata http-equiv="X-UA-Compatible" content="IE=edge">
            <mata name="viewport" content="width=device-width,initial-scale=1.0">
            
            <link rel="stylesheet" href="homestyle.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
    
    <section class="contact" id="contact">
        <h2 class="heading">Review<span>Form</span></h2>
         
        <form action="#" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <input name="name" type="text" placeholder="contractor Name" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="number" name="conid" placeholder="contractor ID" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="address" placeholder="Address" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="roadname" placeholder="Rode Name/Number" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="pincode" placeholder="PINcode" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="cost"placeholder="Cost" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text"  name="ctime"placeholder="Time to complete" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="file" name="img" placeholder="Image" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="description" placeholder="Enter the Description" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="btn-box btns">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>
</body>
</html>
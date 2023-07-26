<?php
 $con = mysqli_connect("localhost", "root", "", "porthole");
 if ($con) {
    //  echo "sucess";
        
    // $var = $_POST['email'];
    // echo $var;
?>
        <table border='1'>
            <thead>
                <th>Name</th>
                <th>Aadhaar Number</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Rode Name/Number</th>
                <th>City</th>
                <th>PINcode</th>
                <th>Email</th>
                <th>Description</th>
                <th>Image</th>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * from `complain`";
                $result = mysqli_query($con, $query);

                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $adhaar_no = $row['adhaar_no'];
                    $mobile_no = $row['mobile_no'];
                    $address = $row['address'];
                    $rode_name = $row['rode_name'];
                    $city = $row['city'];
                    $pin_code = $row['pin_code'];
                    $email = $row['email'];
                    $description = $row['description'];
                    $photo = $row['photo'];
                     ?>
                    <tr>
                        <td><?php echo $name; ?></td>

                        <td><?php echo $adhaar_no; ?></td>
                        <td><?php echo $mobile_no; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $rode_name; ?></td>
                        <td><?php echo $city; ?></td>
                        <td><?php echo $pin_code; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $photo; ?></td>
                        <!-- <td>
                            <form action="revi.php" method="post">
                                <input type="hidden" name="email" value="<?php echo $row['email']; ?>" />
                                <button type="submit" name="review">Review</button>

                            </form>
                        </td>
                        <td>
                             <form action="delete.php" method="post">
                                <input type="hidden" name="email" value="<?php echo $row['email']; ?>" />
                                <button type="submit" name="check">Check</button>
                            </form>
                        </td> -->
                    </tr>

                <?php
                
                ?>
            </tbody>
    <?php


    }
} else {
    echo 'page not found';
}

    ?>
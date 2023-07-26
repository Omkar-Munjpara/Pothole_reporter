<html>
    <head>
        <title>Complaint Form</title>
        <mata charset=" UTF-8">
            <mata http-equiv="X-UA-Compatible" content="IE=edge">
            <mata name="viewport" content="width=device-width,initial-scale=1.0">
            
            <link rel="stylesheet" href="homestyle.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
<body>
    
    <section class="contact" id="contact">
        <h2 class="heading">Complaint<span>Form</span></h2>
         
        <form action="./insertcomp.php" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="number" name="a_name" placeholder="Aadhaar Number" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="number" name="mobileno" placeholder="Mobile Number" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="add" placeholder="Address" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="r_name" placeholder="Rode Name/Number" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="city" placeholder="City" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="pin" placeholder="PINcode" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="email" placeholder="Email" required>
                    <span class="focus"></span>
                </div>
            </div>
            
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="description" placeholder="Enter the Description" required>
                    <span class="focus"></span>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="file" name="image" placeholder="Image" required>
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
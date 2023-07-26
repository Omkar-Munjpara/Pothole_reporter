<! DOCTYPE html>
<html lang="en">

<head>
    <title>Home page</title>
    <mata charset=" UTF-8">
    <mata http-equiv="X-UA-Compatible" content="IE=edge">
    <mata name="viewport" content="width=device-width,initial-scale=1.0">
    
    <link rel="stylesheet" href="homestyle.css">
<!----------------------------------------------------------------------------------------------->
<style>
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      max-width: 400px;
      height: 400px;
    }
    .img2 {
      display: block;
      margin-left: 43.5%;
      max-width: 300px;
      height: 300px;
    }
    .img3 {
      display: block;
      margin-left: auto;
      margin-right: auto;
      max-width: 250px;
      height: 250px;
    }

    </style>
 <!---------------------------------------- bix icons -------------------------------------------->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!------------------------------------- HEADER DESINGN --------------------------------------->
        <header class="header">
            <a href="#" class="logo">POTHOLE</a>
            
            <div class="bx bx-menu" id="menu-icon"></div>

            <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#education">Complaint</a>
                <a href="#skills">Login</a>
                <a href="#contact">Review</a>
                
            </nav>    
        </header>
    <!------------------------------------ home section desing  ----------------------------------->
        <section class="home" id="home">
            
            <div class="home-content">
                <h1>POT<span>HOLE</span></h1>
                <div class="text-animate">
                 <h3>The Make a transportation Infrastructure Safe and Strong</h3>
                </div>
            </div>

        </section>
    <!----------------------------------------- ABOUT SECTION DESIGN -------------------------------->
        <section class="about" id="about">
            <h2 class="heading">Ab<span>out</span></h2>

            <img src="images/aboutimg.jpg" alt="Paris" style="width:50%">
            <div class="about-content">
                <h3> Abstract <br></h3>
                  <p>- Provide a concise summary of the project, highlighting its objectives, key features,and outcomes. <br>Mention the importance of addressing the issue of road potholes<br> and the significance of the "Road Pothole Reporter" project.</p>
                  <p>- To know more about our project, click the "Read more" button below -</p>

            <div class="btn-box btns">
                    <a href="About.php">
                    <button type="submit" class="btn">Read more</button>
                    </a>
                </div>

        </section>

    <!----------------------------------------- education section desing------------------------------->
        <section class="education" id="education">

            <h2 class="heading">Com<span>plaint</span></h2>
            <br><br>

            <img src="images/com.png" alt="Paris" style="width:50%" class="img2">
            <br>

            <div class="about-content">
                <h3> Complaint Register</h3>
                <p>- Pothole Reporter is an industry led solution to speed up pothole repairs.<br> <br>- Document the pothole: Take clear photos or videos of the pothole,<br> making sure to capture its size, depth, and location.<br> This evidence will be helpful when submitting your complaint. </p>
                <P>- Filed contact information: Look for the contact information of you.<br> Responsible authority person can usually find this on their official<br> website or by searching for the Pothole location and contact details.<br> Look for a specific email address, phone number, or online complaint form.</P>

                <div class="btn-box btns">
                    <a href="complain form.php">
                    <button type="submit" class="btn">Complaint</button>
                    </a>
                </div>
                
        </section> 

<!-------------------------------------------- skills sectoion desing ------------------------------------------->

        <section class="skills" id="skills">
            <h2 class="heading">Lo<span>gin</span></h2>
            <br><br>

            <img src="images/ministry.png" alt="Paris" style="width:50%" class="img3"><br>

            <div class="about-content">
                <h3> Login for Authority</h3>
                <p>- The official website of the responsible authority or organization.<br>This could be a local municipality, department of transportation,<br> or a dedicated agency.</p>
                <p>- Look for the reporting portal or login section: Explore the website to find <br>the section specifically designed for reporting potholes or road-related issues.<br> This section might be labeled as "Report a Pothole" or "Road Maintenance."</p>

                <div class="btn-box btns">
                    <a href="both login.php">
                    <button type="submit" class="btn">Login</button>
                    </a>
                </div>
   
        </section>

<!-----------------------------------contact section desing----------------------------------->

        <section class="contact" id="contact">

            <h2 class="heading">Re<span>view</span></h2>

            <img src="images/rating.png" alt="Paris" style="width:50%" class="img3"><br><br>
            <div class="about-content">
                <h3>Complaint Review</h3>
                <p>- After filing and completion of your complaint, you can review it on this page.</P>
                <p>- To know more about the review, click the "Review" button below -</p>

                <br>
                <div class="btn-box btns">
                    <a href="./review.php">
                    <button type="submit" class="btn">Review</button>
                    </a>
                </div>    
        </section>

     <script src="script.js"></script>   
</body>
</html>
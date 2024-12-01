<?php
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $select = $_POST["select"];
    $bno=mt_rand(10000000,999999999);

    // Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TBdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    //if ($conn->connect_error) {
        /*die("Connection failed: " . $conn->connect_error);
    }
*/
    // Prepare and execute SQL query to insert data into the database
    /*$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
    $query=mysqli_query($conn,"insert into booking(Name,Email,Phone,Date,Time,Seat,bno) values('$name','$email','$phone','$date','$time','$select','$bno')");
if($query){
echo '<script>alert("Your order sent successfully. Booking number is "+"'.$bno.'")</script>';
echo "<script type='text/javascript'> document.location = 'dine.html'; </script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
}

    // Close database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Our Products, Organic ​Breads, ​Brownies, Pastries, etc, Contact Us">
    <meta name="description" content="">
    <title>DINE</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="DINE.css" media="screen">

    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.6.0, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Bruno+Ace+SC:400|Electrolize:400">
    <style>
      
    </style>
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2",
		"logo": "images/vsquare-mall-high-resolution-logo-transparent-2.png"
}</script>
    <meta name="theme-color" content="#1b356a">
    <meta property="og:title" content="DINE">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-gradient u-header u-sticky u-sticky-0996 u-header" id="sec-cede"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-hover-feature u-image u-logo u-image-1" data-image-width="2000" data-image-height="429">
          <img src="images/vsquare-mall-high-resolution-logo-transparent-2.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="HOME.html" style="padding: 10px 0px;">HOME</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="brands.html" style="padding: 10px 0px;">Brands</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="DINE.html" style="padding: 10px 0px;">DINE</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="ENTERTAINMENT.html" style="padding: 10px 0px;">Entertainment</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="ABOUT.html" style="padding: 10px 0px;">About</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="CONTACT.html" style="padding: 10px 0px;">CONTACT</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="HOME.html">HOME</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="brands.html">Brands</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="DINE.html">DINE</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="ENTERTAINMENT.html">Entertainment</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="ABOUT.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="CONTACT.html">CONTACT</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
   
      </div>
    </section>
    <section style="height:100vh; background-size:cover" class="u-align-center u-clearfix u-image u-section-3" id="carousel_1747" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Make a reservation</h2>
        <div class="u-form u-form-1">
          <form action="#" method="post" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" source="email "style="padding: 0;"  name="form">
            <div class="u-form-group u-form-name u-form-partition-factor-2">
              <label style="background-color: black:" for="name-f2a8" class="u-label u-text-white u-label-1">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-f2a8" name="name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group u-form-partition-factor-2">
              <label for="email-f2a8" class="u-label u-text-white u-label-2">E-mail</label>
              <input type="email" placeholder="Enter a valid email address" id="email-f2a8" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-phone u-form-group-3">
              <label for="phone-447e" class="u-label u-text-white u-label-3">Phone</label>
              <input type="tel"  placeholder="Enter your phone (e.g. +14155552675)" id="phone-447e" name="phone" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-time u-form-group-4">
              <label style="text-color: black;"for="time-71df" class="u-label u-text-white u-label-4">Time</label>
              <input type="time" id="time-71df" name="time" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" min="10:00am" max="10:00pm">
            </div>
            <div class="u-form-date u-form-group u-form-group-5">
              <label for="date-4441" class="u-label u-text-white u-label-5">Date</label>
              <input type="text" placeholder="YYYY/DD/MM" id="date-4441" name="date" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" data-date-format="dd/mm/yyyy">
            </div>
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="select-32c5" class="u-label u-text-white u-label-6">NO.OF.SEATS</label>
              <div class="u-form-select-wrapper">
                <select id="select-32c5" name="select" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle">
                  <option value="1 seat" data-calc="">1 seat</option>
                  <option value="2 seat" data-calc="">2 seat</option>
                  <option value="3 seat" data-calc="">3 seat</option>
                  <option value="4 seat" data-calc="">4 seat</option>
                  <option value="5 seat" data-calc="">5 seat</option>
                  <option value="6 seat" data-calc="">6 seat</option>
                  <option value="7 seat" data-calc="">7 seat</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div>
              
            <input  style="color: white; background-color: black; foreground-color: #f0f0f0font-family: Arial, sans-serif; border: 1px solid white; border-radius:2px; padding:5px white; position:absolute; left:250px" type="submit" value="Reserve a Table" name="submit">
           <button style="color: white; background-color: black; foreground-color: #f0f0f0font-family: Arial, sans-serif padding:20px; border: 1px solid white; border border-radius:2px; position:relative; left:500px" onclick="navigateToPage()">BACK</button>

<script>
    function navigateToPage() {
        // Change the URL to the desired page
        window.location.href = 'dine.html';
    }
</script>>
            </div>
            
          </form>
        </div>
      </div>
    </section>
    
    
    
  
</body></html>

<?php
include('db_conitem.php');

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$itemName = $_POST["itemName"];
	$description = $_POST["description"];
	$year = $_POST["year"];
	$quality = $_POST["quality"]; // Updated to use the selected category

	// SQL query to insert the item into the 'items' table
	$sql = "INSERT INTO items (itemName, description, year, quality) VALUES (?, ?, ?, ?)";

	// Prepare the statement
	$stmt = $conn->prepare($sql);

	if ($stmt) {
		// Bind parameters
		$stmt->bind_param("ssis", $itemName, $description, $year, $quality);

		// Execute the query
		if ($stmt->execute()) {
			echo "Item added successfully!<br>";
		} else {
			echo "Error: " . $stmt->error;
		}

		// Close the statement
		$stmt->close();
	} else {
		echo "Error: " . $conn->error;
	}
}

// Close the database connection
$conn->close();

// Define the list of categories
$categories = array('New', 'Used');

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capstone</title>
  <link href="style_home.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <title>Shoe Resell Mockup</title>
  <link rel="stylesheet" href="style.css">
  </head> 



  <body>

    <header>
      <div class="navbar">
        <div class="navlogo">
          <div class="logo border">
            <a href="index.php"><div class="index border">
             <img src="duck.png" alt="logo" width="50" height="50">
	</div></a></div>
</div>

        <div class="navadd border">
          <p class="addfirst icon" >Deliver to</p>
          <div class="addicon">
            <i class="fa-solid fa-location-dot icon"></i>
            <p class="addsecond icon">Pembroke</p>
          </div>
        </div>
      <div class="nav-search">
        <select class="search-option1">
          <option value="All" class="search-option2">All</option>
        </select>
        <div class="form-look">
          <form action="search.php" method="post">
            <input type2="text" placeholder="Search Shoe Resell Mockup" name="search" class="search-input">         </div>
        <div class="search-icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        </form>
 
                            <head>
          <link rel="stylesheet" href="style_login.css">
          <script src="script.js" defer></script>
        </head>

           </div>
           <div class="languageoption border">
            <div class="american"></div>
            <select class="lanoption">
                <option value="lan">EN</option>
            </select>
           </div>
          

      <div class="sign border">
            <p class="hello">
            
            </p>
             <header>
                 <nav class="navbar">
                     <span class="hamburger-btn material-symbols-rounded"></span>
                     <ul class="links">
                         <span class="close-btn material-symbols-rounded"></span>
                     </ul>
                    <button class="login-btn">Log In</button>
                 </nav>
             </header>
           
             <div class="blur-bg-overlay"></div>
             <div class="form-popup">
                 <span class="close-btn material-symbols-rounded">close</span>
                 <div class="form-box login">
                     <div class="form-details">
                         <h2>Welcome Back</h2>
                         <p>Please log in using your personal information to stay connected with us.</p>
                     </div>
                     <div class="form-content">
                         <h2>LOGIN</h2>
                         <form action="signin.php" method="post">
                             <div class="input-field">
                                 <input type="text" id="email" name="email"required>
                                 <label>Email</label>
                             </div>
                             <div class="input-field">
                                 <input type="password" id="password" name="password"required>
                                 <label>Password</label>
                             </div>
                             <a href="#" class="forgot-pass-link">Forgot password?</a>
                             <button type="submit">Log In</button>
                         </form>
                         <div class="bottom-link">
                             Don't have an account?
                             <a href="#" id="signup-link">Signup</a>
                         </div>
                     </div>
                 </div>

                 <div class="form-box signup">
                     <div class="form-details">
                         <h2>Create Account</h2>
                         <p>To become a part of our community, please sign up using your personal information.</p>
                     </div>
                     <div class="form-content">
                         <h2>SIGNUP</h2>
                         <form action="index.php" method="post">
                             <div class="input-field">
                                 <input type="text" id="email" name="email"required>
                                 <label>Enter your email</label>
                             </div>
                             <div class="input-field">
                                 <input type="password" id="password" name="password"required>
                                 <label>Create password</label>
                             </div>
                             <div class="policy-text">
                                 <input type="checkbox" id="policy">
                                 <label for="policy">
                                     I agree the
                                     <a href="#" class="option">Terms & Conditions</a>
                                 </label>
                             </div>
                             <button type="submit">Sign Up</button>
                         </form>
                         <div class="bottom-link">
                             Already have an account? 
                             <a href="#" id="login-link">Login</a>
                         </div>
                     </div>
                 </div>
             </div>



	 </div>
           <div class="box6 border">
            <p class="return">
	    <a href="vendorItem.php">Sell</a>
            </p>
            <p class="order">
	    <a href="vendorItem.php">& Donate</a>
            </p>
           </div>
           <a href="cart.php"><div class="cart border">
            <i class="fa-solid fa-cart-shopping"></i>
            Storage
           </div></a>
      </div>



      <div class="second-nav">
        <div class="allicon border">
          <i class="fa-solid fa-bars"></i>
         <p class="list">All</p>
        </div>
        <div class="panel-ops">
          <p class="ptag border">Today's Deals</p>
	<a href="cs.php">
          <p class="ptag border">Customer Service</p>
	</a>
        </div>
        <div class="deals">
          <p>Shop deals in Shoes</p>
        </div>
      </div>
  </header>
  </div>


	<form method="post" action="vendorItem.php">
        <label for="itemName">Shoe Name:</label>
        <input type="text" name="itemName" required><br><br>

        <label for="description">Description:</label>
        <input type="text" name="description" required><br><br>

        <label for="quantity">Release Year:</label>
        <input type="number" name="year" required><br><br>

        <label for="category">Quality:</label>
        <select name="quality" required>
          <?php
            // Generate options for each category
            foreach ($categories as $cat) {
                echo "<option value=\"$cat\">$cat</option>";
            }
            ?>

        </select><br><br>

        <input type="submit" value="Donate">
    </form>


    
     <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
    
  </body>
</html>
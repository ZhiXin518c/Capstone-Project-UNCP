<?php
include('db_conitem.php');


$search = $_POST['search'];


if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM items where itemName like '%$search%'";



$result = $conn->query($sql);

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capstone</title>
  <link href="style_home.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Shoe Resell Mockup</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <header>
    <div class="navbar">
      <div class="navlogo">
        <div class="logo border">
          <a href="index.php">
            <div class="index border">
              <img src="duck.png" alt="logo" width="50" height="50">
            </div>
          </a>
        </div>
      </div>

      <div class="navadd border">
        <p class="addfirst icon">Deliver to</p>
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
		<a href="logout.php">
            <button class="login-btn">Log Out</button>
         </a> </nav>
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
                  <input type="text" id="email" name="email" required>
                  <label>Email</label>
                </div>
                <div class="input-field">
                  <input type="password" id="password" name="password" required>
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
                  <input type="text" id="email" name="email" required>
                  <label>Enter your email</label>
                </div>
                <div class="input-field">
                  <input type="password" id="password" name="password" required>
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
      <a href="cart.php">
        <div class="cart border">
          <i class="fa-solid fa-cart-shopping"></i>
          Storage
        </div>
      </a>
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


  <table border="1">
    <tr>
      <th>Item ID</th>
      <th>Item Name</th>
      <th>Description</th>
      <th>Year</th>
      <th>Quality</th>
      <th>Action</th>
    </tr>
    <br></br>

    <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["itemID"] . "</td>";
                echo "<td>" . $row["itemName"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["year"] . "</td>";
                echo "<td>" . $row["quality"] . "</td>";
                echo "<td><form method='post'><input type='hidden' name='itemID' value='" . $row["itemID"] . "'><input type='submit' name='removeItem' value='Remove'></form></td>";
                echo "</tr>";
            }
        } else {
            echo "No items found.";
        }
        ?>
  </table>



  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

</body>

</html>
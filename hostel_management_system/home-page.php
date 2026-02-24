<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  
}

/* Header/logo Title */
.header {
  padding: 50px;
  text-align: center;
  background:#B0C4DE;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
/* Add a black background color to the top navigation */
.topnav {
  background-color: #000080;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #2F4F4F;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  position: fixed;
  bottom :0;
  padding: 5px;
  width:100%;
  text-align: center;
  background-color: #000080;

}
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%, -50%);
}


</style>
</head>
<body>

<div class="header">
  <h1>Hostel Management System</h1>
  
</div>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Room Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="search_room.php">Search Room</a>
      <a href="furniture_details.php">furniture details</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Student Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="search_student.php">Search Student</a>
      <a href="display_student.php">Display Students</a>
      <a href="select_operation.php">Operations</a>
    </div>
  </div>
  <a href="warden_details.php">Warden Details</a>
  <a href="mesh_details.php">Mesh Details</a>
  <a href="payment.php">Payment Details</a>
  <a href="about.php" style="float:right;">About Us</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div class="container">
<img src="hostel_img.jpg" style="width:100%; height : 1000%; filter: blur(8 px); -webkit-filter: blur(4px);">
  <div class="centered"> <h3>
        Welcome to AVPTI girls hostel.</br>
        You can learn about how the avpti girls hostel works through this website,
        you can do different type of tasks like see the student detsils, room details, warden details etc.</br>
        hopefully this website will help you through all your concerns, for any qury you can contact us with our contact number.
        THANK YOU!!</br><h3>
</p></br></br>
        <h1>Why Do Hostels Need Hostel Management Systems?</h1><br>
<h2>Hostel management systems allow those involved in managing hostels – as well as their employees – to centralize important information and data. This, in turn, allows individuals to carry out a wide range of common tasks from a single place, which can be especially valuable for improving efficiency.</br>

As with other businesses within the hospitality industry, hostels are busy workplaces where many elements must be overseen simultaneously. This could include everything from managing inventory and reservations to processing payments and selling additional products or services to customers.</br>

The best hostel management systems not only allow hostel owners and staff members to manage these various aspects of the business from one location, they also offer the possibility for employees to access the system remotely, and information that is updated within the system will automatically update for everyone using it.</br>

Many parts of the travel industry are seasonal, which can sometimes mean handling sudden spikes in demand with limited staff. Hostel management systems can make work within a hostel easier and more efficient, while the automation options available can also help free up staff to focus on other parts of their job.</br></h2>
</div>
</div>

<div class="footer">
  <h2><a href="contact.php" style="color:white;">Contact-Us</a></h2>
</div>

</body>
</html>

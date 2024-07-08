<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DR. PARCON HOSPITAL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for the search icon -->
      <link rel="shortcut icon" href="../img/spa.ico" type="image/x-icon">
</head>
<style>
 
    /* Center the search bar */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
        background-color: #f0f0f0; /* Change this to your desired background color */
    }

    /* Style the search bar */
    .search-container {
        display: flex;
        justify-content: space-between; /* Align items to the ends */
        align-items: center;
        width: 80%; /* Adjust width of the container */
        max-width: 1000px; /* Set a maximum width */
        flex-direction: column; /* Stack items vertically */
    }

    .search-form {
        display: flex;
        align-items: center;
        position: relative;
        width: 75%; /* Adjust width for the search input */
    }

    .search-input {
        padding: 20px 60px 20px 60px; /* Adjust padding for icon placement */
        border: 3px solid #F57C00;
        border-radius: 30px; /* Smoother rounded corners */
        width: 100%; /* Occupy remaining space */
        font-size: 20px;
        outline: none;
        color: #F57C00;
       
    }

  .search-button {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    padding: 15px;
    border: none;
    color: white;
    border-radius: 100%;
    cursor: pointer;
    transition: background-color 0.3s ease;
}


    .search-button:hover {
        background-color: #3c78d8; /* Darker shade on hover */
    }

    .image-container {
        width: 30%; /* Adjust width for the image container */
        margin-bottom: 20px; /* Spacing between image and search bar */
    }

    .custom-image {
        width: 100%; /* Ensure the image occupies container space */
        height: auto;
        display: block;
    }



  .custom-image {
    width: 100%; /* Ensure the image occupies container space */
    height: auto;
    display: block;
    max-width: 60%; /* Make the image resizable */
    margin: 0 auto; /* Center the image horizontally */
}

/* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}






    #web-view-menu {
        display: block; /* Hide the web view menu on smaller screens */

    }

    #android-view-menu {
        display: none; /* Display the Android view menu on smaller screens */
    }












.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}





 





/* Styling the navigation */
.top-nav {
    background-color: #F57C00;
    color: #fff;
    width: 100%;
    /* Ensures the navigation spans the entire width */
    position: fixed;
    top: 0;
    z-index: 1000; /* Ensures the navigation is above other content */
}

.top-nav ul {
    display: inline-block;
    margin: 0;
    padding: 0;
    vertical-align: top; /* Align them to the top of the container */
}

/* Style the list items and anchor tags */
.top-nav li {
    display: inline; /* Display list items inline */
    margin: 0;
    padding: 0;
}

.top-nav a {
    display: inline-block;
    padding: 15px 20px;
    text-decoration: none;
    color: #fff;
}






.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 45px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}








    /* Media query for smaller screens */
    @media screen and (max-width: 768px) {
    


  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 15px;}


  
    #web-view-menu {
        display: none; /* Hide the web view menu on smaller screens */

    }

    #android-view-menu {
        display: block; /* Display the Android view menu on smaller screens */
    }






    .search-input {
        padding: 15px 60px 15px 60px; /* Adjust padding for icon placement */
        border: 3px solid #F57C00;
        border-radius: 50px; /* Smoother rounded corners */
        width: 100%; /* Occupy remaining space */
        font-size: 17px;
        outline: none;
        color: #F57C00;


    }

        .search-button {
            padding: 15px;
            font-size: 14px;
        }

        .search-container {
            align-items: flex-start; /* Align items to the start */
        }

        .search-form {
            width: 100%; /* Full width for smaller screens */
            margin-bottom: 15px; /* Add space between elements */
        }

        .image-container {
            width: 100%; /* Full width for smaller screens */
        }






    }


</style>



<body>








<nav class="top-nav">
  
<ul id="web-view-menu">
    <li><a href="#home" class="fas fa-chart-bar" > Dashboard</a></li>
    <li><a href="#about" class="fas fa-user-plus" > Registration</a></li>
    <li><a href="#services" class="fas fa-file-alt" > Referral Form</a></li>
    <li><a href="#contact" class="fas fa-notes-medical" >Clinical Form </a> </li>
</ul>

<ul id="android-view-menu">
    <li><a href="#home"><i class="fas fa-list" onclick="openNav()"></i> </a></li>
</ul>

</nav>






    <div class="search-container">
        <div class="image-container">
            <img src="spa.png" alt="Your Image" class="custom-image">
        </div>
       <form class="search-form" action="search.php" method="GET">
        <button class="search-button"><i class="fas fa-search"></i></button>
        <input type="text" class="search-input" name="search"  autocomplete="off">
    <div class="search-results"></div
</form>

    </div>




<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br>
  <br>
  <a href="#"><i class="fas fa-chart-bar"></i> Dashboard</a>
  <a href="Registration.php"><i class="fas fa-user-plus"></i> Registration</a>
  <a href="#"><i class="fas fa-file-alt"></i> Referral Form </a>
  <a href="#"><i class="fas fa-notes-medical"></i> Clinical Form</a>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>








    <script>  

        const button = document.querySelector('.search-button');
const colors = ['#F57C00', '#00ADEF', '#8BC34A','#FFD700']; // Add more colors if needed

let index = 0;

setInterval(() => {
    button.style.backgroundColor = colors[index];
    index = (index + 1) % colors.length;
}, 1000);
 </script>




</body>
</html>

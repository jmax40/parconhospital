<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PARCON HOSPITAL</title>
  <link rel="shortcut icon" href="../img/spa.ico" type="image/x-icon">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
  .top-nav {
    background-color: #3498db; /* Change this to your preferred shade of blue */
    color: black;
    padding: 10px;
}
.top-nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: flex-end; /* Aligns items to the right */
}

.top-nav ul li {
    margin-right: 20px;
    cursor: pointer;
}
.top-nav ul li:hover {
    text-decoration: underline;
}

        .main-content {
            flex: 1;
            display: flex;
        }
        nav {
            width: 75%;
            background-color: #333;
            color: white;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            padding: 10px;
            cursor: pointer;
        }
        nav ul li:hover {
            background-color: #555;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        /* Style for form elements with an orange aesthetic */
.my-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffcc99; /* Light orange background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}



/* Base styles */
/* Base styles */
.my-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffcc99; /* Light orange background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-size: 16px;
}



.form-row {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    color: #ff6600; /* Orange text for labels */
}


.radio-buttons label {
    display: inline-block;
    margin-right: 20px;
}

.radio-buttons input[type="radio"] {
    display: inline-block;
    vertical-align: middle;
    margin-right: 5px; /* Adjust spacing between the radio button and text */
}
 

input[type="text"],
input[type="radio"] {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ff9900; /* Orange border for input fields */
    box-sizing: border-box;
}


/* Style for submit and cancel buttons with an orange theme */
.submit-button,
.cancel-button {
    padding: 10px 20px;
    margin-top: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.submit-button {
    background-color: #ff6600; /* Orange submit button */
    color: white;
}

.cancel-button {
    background-color: #e74c3c; /* Red cancel button */
    color: white;
    margin-left: 10px;
}


/* Modern style for the form */
.my-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f7fd; /* Light blue background */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-row {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    color: #305f80; /* Dark blue text for labels */
    margin-bottom: 6px;
}

input[type="text"],
input[type="radio"] {
    width: calc(100% - 22px); /* Adjusting for padding and border */
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #a9c8e8; /* Light blue border for input fields */
    box-sizing: border-box;
    transition: border-color 0.3s ease-in-out;
    font-size: 16px; /* Increased font size for better readability */
}

input[type="text"]:focus,
input[type="radio"]:focus {
    outline: none;
    border-color: #305f80; /* Dark blue border on focus */
}





/* Style for submit and cancel buttons */
.submit-button,
.cancel-button {
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    font-size: 16px; /* Increased font size for better visibility */
}

.submit-button {
    background-color: #305f80; /* Dark blue submit button */
    color: white;
}

.cancel-button {
    background-color: #e76868; /* Red cancel button */
    color: white;
    margin-left: 10px;
}

.submit-button:hover,
.cancel-button:hover {
    filter: brightness(90%); /* Slight color change on hover */
}
.resizable-nav {
    max-width: 100%; /* Set maximum width to maintain responsiveness */
    max-height: 100%; /* Set maximum height to maintain aspect ratio */
    overflow: hidden; /* Hide any content that overflows the container */
    position: relative; /* Establish positioning context */
}

.resizable-nav img {
    width: 100%; /* Make the image fill the container horizontally */
    height: 100%; /* Allow the height to adjust proportionally */
    display: block; /* Remove default image spacing */
}
/* Styles for dropdowns */
select {
    width: calc(100% - 22px);
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #a9c8e8;
    box-sizing: border-box;
    transition: border-color 0.3s ease-in-out;
    font-size: 16px;
    outline: none;
}

select:focus {
    border-color: #305f80;
}
 


.top-nav a {
  color: white;
  text-decoration: none;
  font-size: 16px;
  font-family: Arial, sans-serif; /* Change to Arial font */
}




/* Previous CSS remains unchanged */

/* Media query for smaller screens */
@media screen and (max-width: 500px){
    /* Other responsive styles for smaller screens */


#topnav{


    display: none;
    
}

    nav {
        width: 0%;
        background-color: #333;
        color: blue;
    }

    .resizable-nav img {
        display: none; /* Hide the image on screens below 800px */
    }
}




.tooltip {
    visibility: hidden;
    width: auto;
    background-color: #f44336;
    color: white;
    text-align: center;
    padding: 5px 10px;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    bottom: 100%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

/* Triangle arrow for tooltip */
.tooltip::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #f44336 transparent transparent transparent;
}

.tooltip.show {
    visibility: visible;
    opacity: 1;
}



    </style>


</head>
<body>



<div class="top-nav" id="topnav">
  <ul class="top-nav" style="display: flex; justify-content: flex-end; align-items: center;">
    <li style="margin-right: auto;"> 
      <a href="index.html" class="brand-logo">
        <div style="max-width: 50px; max-height: 40px;">
          <img src="../img/spa.png" alt="Logo Description" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
      </a>
    </li>
    <li><a href="Referalform.html"><i class="fas fa-notes-medical"></i> Referral Form</li>
    <li><a href="clinicalrecord.html"><i class="fas fa-notes-medical"></i> Clinical Form</a></li>
    <li><a href="registration.php"><i class="fas fa-notes-medical"></i> Registration Form</a></li>
    <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
  </ul>
</div>


    <div class="main-content">
    <nav class="resizable-nav">
    <img src="../img/doctor.gif" alt="Animated GIF">
</nav>


        <div class="content">


 <form id="registrationForm" class="my-form" action="process.php" method="post">
      <h2>
        <img src="../img/header.png" alt="Registration Image" style="max-width: 100%;">
      </h2>

 <div class="form-row">
    <label for="record_no">M.R No:</label>
    <input type="text" id="record_no" name="record_no" required>
    <div class="tooltip">Record # already used</div>
</div>


      <div class="form-row">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
      </div>

      <div class="form-row">
        <label for="age">Age:</label>
        <input type="text" name="age" required>
      </div>


  <div class="form-row">
  <label for="gender">Gender:</label>
  <select id="gender" name="sex" required>
    <option value="" disabled selected>Select Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
</div>

      <div class="form-row">
  <label for="gender">Status:</label>
  <select id="gender" name="status" required>
    <option value="" disabled selected>Select Status</option>
    <option value="Single">Single</option>
    <option value="Merried">Merried</option>
    <option value="Widowed">Widowed</option>
  </select>
</div>

  <div class="form-row">
        <label for="birthplace">Address:</label>
        <input type="text" name="address" required>
      </div>

      <div class="form-row">
        <label for="birthplace">Birthplace:</label>
        <input type="text" name="birthplace" required>
      </div>
      <div class="form-row">
        <label for="occupation"></label>
        <input type="hidden" name="occupation" value ="NONE" required>
      </div>

      <div class="form-row">
        <label for="birthday">Birthday:</label>
        <input type="text" name="birthday" required>
      </div>

      <div class="form-row">
        <label for="religion">Religion:</label>
        <input type="text" name="religion" required>
      </div>

      <div class="form-row">
        <label for="contact_no">Contact Number:</label>
        <input type="text" name="contact_no" required>
      </div>



<center> 
      <button type="submit" name="submit" class="submit-button">
  <i class="fas fa-check"></i> Register
</button>
  <button type="button" id="clearFormButton" class="cancel-button">
            <i class="fas fa-times"></i> Clear
        </button>
</center>

    </form>
        </div>
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#record_no').on('input', function() {
        var enteredValue = $(this).val();

        // Call a function to check the database for the entered value
        checkDatabase(enteredValue);
    });

    $('#record_no').hover(
        function() {
            $('.tooltip').addClass('show');
        },
        function() {
            $('.tooltip').removeClass('show');
        }
    );
});

function checkDatabase(value) {
    // Perform an AJAX request to check the database
    $.ajax({
        type: 'POST',
        url: 'check_record.php',
        data: { record_no: value },
        success: function(response) {
            // Apply red color if the record exists
            if (response === 'exists') {
                $('#record_no').css('border', '1px solid red');
                $('.tooltip').addClass('show');
            } else {
                // Apply default style if the record doesn't exist
                $('#record_no').css('border', '1px solid black');
                $('.tooltip').removeClass('show');
            }
        }
    });
}








document.addEventListener('DOMContentLoaded', function() {
    var clearButton = document.getElementById('clearFormButton');
    var form = document.getElementById('registrationForm');

    clearButton.addEventListener('click', function() {
        // Clear all input fields within the form
        var inputFields = form.querySelectorAll('input, select, textarea');
        inputFields.forEach(function(field) {
            if (field.type !== 'hidden') {
                field.value = '';
            }
        });
    });
});



</script>




</body>
</html>

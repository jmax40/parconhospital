
<?php
// Start the session at the very beginning
session_start();

// Include necessary files
require_once('../session.php');
require('process.php');

// Rest of your code...
?>




<!DOCTYPE html>
<html>
<head>
  <title>Pharmacy Management</title>
  
  <!-- Include DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <!-- Include jQuery (required for DataTables) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include DataTables JavaScript -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


  <link rel="shortcut icon" href="../img/spa.ico" type="image/x-icon">



  <!-- Import Google Icon Font -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom CSS for the search field */
    .search-bar {
  display: flex;
  align-items: center;
  width: 300px;
  height: 40px;
  background-color: #f5f5f5;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 0px 0px rgba(47, 46, 46, 0.1);
  border: 3px solid #bbdefb; /* Set the border color */
}


    .search-bar input {
      flex: 1;
      border: none;
      outline: none;
      padding: 10px;
      font-size: 16px;
      background-color: transparent;
      text-align: center;
    }

    .search-bar button {
      border: none;
      background-color: #bbdefb;
      color: #fff;
      padding: 10px;
      border-radius: 0 20px 20px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .search-bar button:hover {
      background-color: #f44211;
    }

  

    .add-button {
  background-color: #bbdefb;
  color: #ffffff;
  border-radius: 50%;
  border: 3px solid #bbdefb; 
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 20px;
   /* Add some margin to separate the buttons */
}




/* Add overlay form */

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1;
  text-align: center;
}

.form-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.my-form {
  /* Form styles */
}

.close-button {
  margin-top: 10px;
  background-color: #ccc;
  border: none;
  padding: 5px 10px;
  cursor: pointer;
  border-radius: 5px;
}

.close-button:hover {
  background-color: #aaa;
}








/* Form registration styles */

.my-form {
  max-height: 600px; /* Adjust the height as needed */
  overflow-y: auto;
}

.my-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}


.form-row label {
  flex: 1;
  text-align: left;
  padding-right: 10px;
}

.form-row select {
    width: calc(100% - 20px); /* Adjust the width */
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 10px;
    flex 2; /* Add margin-top for separation */
}


.form-row input {
  flex: 3;
}

.my-form button[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.my-form button[type="submit"]:hover {
  background-color: #45a049;
}




.blue-button {
        background-color: lightgreen;
        color: green; /* Text color is set to white for visibility */
        padding: 10px 20px;
        border: none;
        border-radius: 0px;
        cursor: pointer;
    }

    table {
            width: 100%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table horizontally */
        }
        th, td {
            padding: 50px; 
            text-align: center; /* Center text horizontally within cells */
            font-size: 30px; /* Adjust the font size as needed */
            color: #333; /* Set the text color to a dark gray (#333), you can change it to your preferred color */
        }

#reciepttable{


    padding: 50px; 
            text-align: center; /* Center text horizontally within cells */
            font-size: 10px; /* Adjust the font size as needed */
            color: #333; 
}


        th {
            background-color: #bbdefb;
        }

/* Style the search input for #yourTableID */
#yourTableID_wrapper input[type="search"] {
    width: 100%;
    padding: 0;
    height: 80px; /* Set your desired height */
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    background-color: #f5f5f5;
    color: green;
    font-size: 40px;
    transition: border-color 0.2s, box-shadow 0.2s;
}

/* Style the search input for #yourTableID when focused */
#yourTableID_wrapper input[type="search"]:focus {
    border-color: #87CEFA;
    box-shadow: 0 0 5px rgba(135, 206, 250, 0.5);
}



/* Style the search input for #cartTable when not focused */
#cartTable_wrapper input[type="search"] {
    width: 100%;
    padding: 0;
    height: 50px; /* Set your desired height */
    border: 1px solid #00ff00; /* Neon green border color */
    border-radius: 4px;
    background-color: #000;
    color: white;
    font-size: 40px;
    transition: border-color 0.2s, box-shadow 0.2s, text-shadow 0.2s;
}


/* Add neon-style border when not focused */
#cartTable_wrapper input[type="search"]:not(:focus) {
    box-shadow: 0 0 10px #00ff00; /* Neon green box-shadow */
}

/* Style the search input for #yourTableID when focused */
#cartTable_wrapper input[type="search"]:focus {
    border-color: #87CEFA;
    box-shadow: 0 0 5px rgba(135, 206, 250, 0.5);
}






         
        body {
  background-image: url('../img/pharmacy.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
}


        
        .overlay1 {
  display: none; /* Add this line to hide the overlay by default */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1;
  text-align: center;
}

.form-container1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 40px; /* Adjust padding as needed */
  width: 20%; /* Increase the width as needed */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

@media (max-width: 768px) {
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

@media (max-width: 576px) {

  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.submit-button {
  background-color: green;
  color: white;
  border: none;
  padding: 20px 35px; /* Increase the padding for width and height */
  cursor: pointer;
  border-radius: 10px; /* Increase the border-radius for rounded corners */
}

.cancel-button {
  background-color: red;
  color: white;
  border: none;
  padding: 20px 35px; /* Increase the padding for width and height */
  cursor: pointer;
  border-radius: 10px; /* Increase the border-radius for rounded corners */
}
.centered-text {
      text-align: center;
      font-size: 50px;
      
   
    }

 .submit-add {
      display: inline-block;
      vertical-align: middle;
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 15px;
      cursor: pointer;
    }

    .centered-text {
      font-size: 20px;
      width: 50px;
      text-align: center;
    }
  


  html, body {
    height: 100%;
    margin: 0;
}
  
 #navbar1 {
            background-color: #white;
            color: white;
            padding: 10px;
            width: 100%;
            float: left;
        }



#navbar2 {
    background-color: #333;
    color: white;
    padding: 10px;
    width: 0%;
    height: 100%;
    float: right;

    
}



#navbar2 th, td {
            border: 1px solid #white;
            padding: 8px;
            text-align: center;
        }




        #cartTable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}


        #cartTable th, #cartTable td {
            border: 0px solid white;
            padding: 15px;
            text-align: center;
            font-size: 10px;
        }

        #cartTable th {
            background-color: #555;
            color: white;
        }

        #cartTable tbody td:last-child {
            font-weight: bold;
        }
  





            #looksGoodButton {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            box-shadow: 0 0 10px rgba(124, 252, 0, 0.8), 0 0 20px rgba(124, 252, 0, 0.6), 0 0 30px rgba(124, 252, 0, 0.4);
        }

        #looksGoodButton:hover {
            background-color: #45a049;
            box-shadow: 0 0 10px rgba(124, 252, 0, 1), 0 0 20px rgba(124, 252, 0, 0.8), 0 0 30px rgba(124, 252, 0, 0.6);
        }




.overlay1 .custom-select {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-top: 10px;
    flex: 2;
}

/* Add margin-top for separation */
.overlay1 .form-row select {
    margin-top: 10px;
}




.custom-background {
    background-color: #2c3e50; /* Set the default background color */
    padding: 0px; /* Add padding for better visibility */
}



  </style>

</head>

<body>
<?php require_once'../session.php'; ?>
<?php require('process.php'); ?>



<nav>
  <div class="nav-wrapper blue lighten-1">

    <a href="index.html" class="brand-logo">
        <div style="max-width: 60px; max-height: 60px;">
          <img src="../img/spa.png" alt="Logo Description" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
      </a>
      

    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <li><a href="index_out.php"><i class="fas fa-box"></i> Outpatient</a></li>
    <li class="custom-background"><a href="index_out.php"><i class="fas fa-box"></i> Inpatient</a></li>
    <li><a href="purchased.php"><i class="fas fa-shopping-cart"></i> Purchased</a></li>

<li><a href="Sales.php"><i class="fas fa-chart-bar"></i> Sales</a></li>
<li>
<form method="post" action="#" name="logoutForm">
    <a href="#" class="logout-link" onclick="document.logoutForm.submit();">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
    <input type="hidden" name="end_session" value="1">
</form>


</li>


    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
<li ><a href="index_out.php"><i class="fas fa-box"></i> Product</a></li>
<li ><a href="purchased.php"><i class="fas fa-shopping-cart"></i> Purchased</a></li>
<li><a href="Sales.php"><i class="fas fa-chart-bar"></i> Sales</a></li>
<li><a  href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>

</ul>

<br>
<br>
<!-- 
<center>
  <div class="search-bar">
    <input type="text" id="searchInput" class="text-input" placeholder="Search">
    <button onclick="performSearch()">
      <i class="fas fa-search"></i>
    </button>
  
  </div>

</center>
Navbar Start -->


<span>



  <button onclick="resetSearch()" class="add-button" style="display: inline;">
    <i class="fas fa-file-excel"></i>
  </button>

  <button id="toggleSearchButton" class="add-button" style="display: inline;">
  <i class="fas fa-search"></i>
  </button>



  <button id="toggleButton" class="add-button" style="display: inline;">
  <i class="fas fa-list"></i>
  </button>


</span>



<br>
<br>



<script>
    document.getElementById('toggleButton').addEventListener('click', function() {
        var navbar2 = document.getElementById('navbar2');
        var navbar1 = document.getElementById('navbar1');
        var cartTable = document.getElementById('yourTableID');

        if (navbar2.style.display === 'none' || navbar2.style.display === '') {
            // Show navbar2 with 25% width
            navbar2.style.display = 'block';
            navbar2.style.width = '25%';

            // Adjust width of navbar1 and cartTable
            navbar1.style.width = '75%';
            cartTable.style.width = '100%';
        } else {
            // Hide navbar2
            navbar2.style.display = 'none';

            // Adjust width of navbar1 and cartTable to 100%
            navbar1.style.width = '100%';
            cartTable.style.width = '100%';
        }
    });
</script>






 <div id="navbar1">
            <!-- Your first navigation bar content goes here -->


<table id="yourTableID" class="display" >
        <thead style="background-color: #bbdefb;">
            <tr>
                <th>ID</th>
                <th>Article</th>
                <th>Info</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <!-- Your PHP code will dynamically populate the table rows here -->
        </tbody>
    </table>
    <script>
    function openForm1(id, article, info, price) {
        // Your existing code to open a form with the provided data
        // For demonstration purposes, let's just show an alert with the data
        alert('Buy clicked for Article: ' + article + ', ID: ' + id + ', Price: ' + price);
    }

    $(document).ready(function () {
    // Check if DataTable is already initialized and destroy it if necessary
    if ($.fn.dataTable.isDataTable('#yourTableID')) {
        $('#yourTableID').DataTable().destroy();
    }

    // Initialize DataTable
    var dataTable = $('#yourTableID').DataTable({
        ajax: {
            url: 'tabledisplay.php', // URL to your PHP file
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'article' },
            { data: 'info' },
            { data: 'price' },
            { data: 'quantity' },
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="blue-button" onclick="openForm1(' + row.id + ', \'' + row.article + '\', \'' + row.info + '\', \'' + row.price + '\')"><i class="fas fa-shopping-cart"></i> Buy</button>';
                }
            }
        ]
    });

    // Reload the table every 5 seconds
    setInterval(function () {
        dataTable.ajax.reload(null, false); // Set to false to use the existing page number
    }, 5000);
});

</script>


          
        </div>






















        <div id="navbar2">

        <button id="looksGoodButton">CASH RECEIVED</button>

    <input type="checkbox" id="checkbox1" name="checkbox1">
    <input type="checkbox" id="checkbox2" name="checkbox2">
    
    <table id="cartTable" >
        <thead>
            <tr>
                <th>QTY</th>
                <th>PRODUCT NAME</th>
                <th>PRICE</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>


<script>


    $(document).ready(function () {
        // Check if DataTable is already initialized and destroy it if necessary
        if ($.fn.dataTable.isDataTable('#cartTable')) {
            $('#cartTable').DataTable().destroy();
        }

        // Initialize DataTable
        var dataTable = $('#cartTable').DataTable({
            ajax: {
                url: 'receipttable.php', // URL to your PHP file
                dataSrc: ''
            },
            columns: [
                { data: 'quantity' },
                { data: 'article' },
                { data: 'price' },
                { data: 'cost' }
            ]
        });

        // Reload the table every 5 seconds
        setInterval(function () {
            dataTable.ajax.reload(null, false); // Set to false to use the existing page number
        }, 5000);
    });


</script>






<script>
$(document).ready(function() {
    $("#looksGoodButton").on("click", function() {
        // Show a confirmation dialog
        var userConfirmation = confirm("Are you sure you want to save this?");
        
        // If the user clicks "OK", proceed with the AJAX request
        if (userConfirmation) {
            console.log("Button clicked");  // Add this line for debugging
            // Make an AJAX request
            $.ajax({
                url: "updatereceipt.php",
                type: "POST",
                data: { action: "updateCashReceived" },
                success: function(response) {
                    // Handle the response from the server
                    console.log("Update successful:", response);
                },
                error: function(xhr, status, error) {
                    // Handle errors
                    console.error("Error updating:", status, error);
                }
            });
        } else {
            // If the user clicks "Cancel", you can add additional handling here
            console.log("Update canceled by user");
        }
    });
});
</script>











<div class="overlay1" id="overlay1">
    <div class="form-container1" id="form-container1">
        <form id="updateForm" action="insertorder.php" method="post">

            <div class="form-column">
                <input type="hidden" id="field1" name="id">
            </div>

            <div class="form-row">
                <button name="minus" class="submit-add" onclick="updateQuantity(event, -1)">
                    <i class="fas fa-minus"></i>
                </button>
                <input type="text" name="quantity" id="quantityInput" class="centered-text" style="font-size: 50px;" value="1">
                <button name="add" class="submit-add" onclick="updateQuantity(event, 1)">
                    <i class="fas fa-plus"></i>
                </button>
  
            </div>
     

   

            <div class="form-column">
                <input type="hidden" id="field2" name="article">
            </div>

            <div class="form-column">
                <input type="hidden" id="field3" name="info">
            </div>

            <div class="form-column">
                <input type="hidden" id="field4" name="price">
            </div>

            <button type="button" name="buy" class="submit-button" onclick="submitForm()">
                <i class="fas fa-shopping-cart"></i>  ORDER
            </button>
            <button class="cancel-button" type="button" onclick="closeForm()">
                <i class="fas fa-trash"></i> CANCEL
            </button>
        </form>
    </div>
</div>


<!-- Your existing HTML code -->
<!-- Your existing HTML code -->

<script>
    function submitForm() {
        var id = document.getElementById('field1').value;
        var quantity = document.getElementById('quantityInput').value;
        var article = document.getElementById('field2').value;
        var info = document.getElementById('field3').value;
        var price = document.getElementById('field4').value;

        // Check if quantity is greater than zero
        if (parseInt(quantity) <= 0) {
            alert('Quantity must be greater than zero.');
            return; // Do not proceed with the Ajax request
        }

        $.ajax({
            type: 'POST',
            url: 'insertorder.php', // Update with your PHP script URL
            data: {
                id: id,
                quantity: quantity,
                article: article,
                info: info,
                price: price
            },
            success: function(response) {
                // Handle successful response
                alert('Successfully updated quantity!');
                closeForm(); // Close the form after displaying the success message
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('Error updating quantity:', error);
            }
        });
    }
</script>










<script>
  function updateQuantity(event, value) {
    event.preventDefault(); // Prevent the default form submission behavior
    var quantityInput = document.getElementById('quantityInput');
    var currentQuantity = parseInt(quantityInput.value, 10);

    // Ensure the quantity doesn't go below 1
    if (currentQuantity + value >= 1) {
      quantityInput.value = currentQuantity + value;
    }
  }
</script>



<script>




  function performSearch() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var tableRows = document.querySelectorAll("tbody tr");

    tableRows.forEach(function(row) {
      var rowData = row.textContent.toLowerCase();
      if (rowData.includes(input)) {
        row.style.display = "table-row";
      } else {
        row.style.display = "none";
      }
    });
  }




  $(document).ready(function() {
    var table = $('#yourTableID').DataTable({
        "paging": true, // Enable pagination
        "lengthMenu": [10, 25, 50, -1], // Define the number of entries per page
        "info": true, // Show entry count information
        "order": [[0, 'desc']] // Sort the first column (Date) in descending order
    });

    // Hide the search input initially
    $('.dataTables_filter').hide();

    $('#toggleSearchButton').on('click', function() {
        toggleSearchInput();
    });

    $('#searchButton').on('click', function() {
        performSearch(table);
    });
});

function toggleSearchInput() {
    var searchInput = $('.dataTables_filter');

    if (searchInput.is(':visible')) {
        searchInput.hide();
    } else {
        searchInput.show();
        $('#searchInput').focus();
    }
}

function performSearch(table) {
    var input = $('#searchInput').val().toLowerCase();

    // Use DataTables' built-in search
    table.search(input).draw();
}





function openForm1(id, article, info, price) {
    // Populate the form fields with the data
    document.getElementById('field1').value = id;
    document.getElementById('field2').value = article;
    document.getElementById('field3').value = info;
    document.getElementById('field4').value = price;

    // Show the overlay
    document.getElementById('overlay1').style.display = 'block';
}




        function closeForm() {
            // Hide the overlay
            document.getElementById('overlay1').style.display = 'none';
        }




</script>





<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

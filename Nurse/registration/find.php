
<!DOCTYPE html>
<html>
<head>
  <title>Nurse Management</title>

  <link rel="shortcut icon" href="../img/spa.ico" type="image/x-icon">



  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <!-- Include jQuery (required for DataTables) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include DataTables JavaScript -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>



  
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





.overlay2 {
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
  padding: 20px; /* Adjust padding as needed */
  width: 30%; /* Increase the width as needed */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}



.form-container2 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: white;
  padding: 20px; /* Adjust padding as needed */
  width: 30%; /* Increase the width as needed */
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
  overflow: auto; /* Add this property to enable scrolling */
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
  max-width: 90vw;
  max-height: 90vh;
  overflow: auto; /* Add this property to enable scrolling inside the form container */
}

@media (max-width: 768px) {
  .form-container {
    width: 90vw;
  }
}

@media (max-width: 480px) {
  .form-container {
    width: 95vw;
  }
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

.form-row input,
.form-row textarea {
  flex: 3;
  width: 100%;
}

/* Additional style for textarea */
.form-row textarea {
  resize: vertical;
  height: 100px; /* Increase the height */
}

/* Button hover style */
.my-form button[type="submit"]:hover {
  background-color: #45a049;
}







/* color blue of button in table  */

.blue-button {
        background-color: lightblue;
        color: white; /* Text color is set to white for visibility */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }











          div.dataTables_wrapper input[type="search"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #e5e5e5;
        border-radius: 4px;
        background-color: #f5f5f5;
        color: green;
        font-size: 40px;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    /* Style the search input when focused */
    div.dataTables_wrapper input[type="search"]:focus {
        border-color: #87CEFA; /* Change the border color to light blue (#87CEFA) */
        box-shadow: 0 0 5px rgba(135, 206, 250, 0.5); /* Change the box shadow color to light blue */
    }










    /* Red Button for Delete */
.red-button {
    background-color: red;
    color: white;
    border: none;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
}

/* Green Button for Edit */
.green-button {
    background-color: green;
    color: white;
    border: none;
    padding: 5px 15px;
    border-radius: 5px;
    cursor: pointer;
}











.button-container {
  display: flex;
  justify-content: space-between;
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










/* Radio button styling */
.radio-buttons {
  display: flex;
  align-items: center;
}

.radio-buttons label {
  display: flex;
  align-items: center;
  cursor: pointer;
  user-select: none;
  margin-right: 20px; /* Adjust the margin-right for spacing */
}

.radio-buttons label:last-child {
  margin-right: 70px; /* Remove margin-right for the last radio button */
}

.radio-buttons input[type="radio"] {
  display: none; /* Hide the actual radio input */
}

/* Style radio button when selected */
.radio-buttons input[type="radio"]:checked + span::before {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  border: 2px solid green; /* Change the border color for the selected radio button */
  border-radius: 50%;
  margin-right: 5px; /* Adjust margin-right for spacing between radio and text */
}



.radio-buttons1 {
  display: flex;
  align-items: center;
}

.radio-buttons1 label {
  display: flex;
  align-items: center;
  cursor: pointer;
  user-select: none;
  margin-right: 20px; /* Adjust the margin-right for spacing */
}

.radio-buttons1 label:last-child {
  margin-right: 0px; /* Remove margin-right for the last radio button */
}

.radio-buttons1 input[type="radio"] {
  display: none; /* Hide the actual radio input */
}

/* Style radio button when selected */
.radio-buttons1 input[type="radio"]:checked + span::before {
  content: '';
  display: inline-block;
  width: 12px;
  height: 12px;
  border: 2px solid green; /* Change the border color for the selected radio button */
  border-radius: 50%;
  margin-right: 5px; /* Adjust margin-right for spacing between radio and text */
}




.nav-wrapper {
  background-color: #2196F3; /* Change to the desired background color */
  padding: 0 20px; /* Add padding to the sides if needed */
  max-width: 100%; /* Set a maximum width of 100% */
}

/* Add media queries for responsiveness */

/* You can add more media queries for other screen sizes as needed */
body {
  background-image: url('../img/registration.png');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center center;
}




  </style>



</head>
<body>

  <a href="process.php"></a>

<!-- Navbar Start -->
<nav>
  <div class="nav-wrapper">

  <a href="index.html" class="brand-logo">
        <div style="max-width: 60px; max-height: 60px;">
          <img src="../img/spa.png" alt="Logo Description" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
      </a>
      

    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
    <li><a href="registration.php"><i class="fas fa-notes-medical"></i> Medical Records</a></li>
  <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="registration.php"><i class="fas fa-notes-medical"></i> Medical Records</a></li>
  <li><a href="../login.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
</ul>


<br>
<br>



<span>
 
  <button onclick="resetSearch()" class="add-button" style="display: inline;">
    <i class="fas fa-file-excel"></i>
  </button>
  <button id="toggleSearchButton" class="add-button" style="display: inline;">
  <i class="fas fa-search"></i>
  </button>



</span>

<div id="overlay3" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 9999;">
  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
    
    <img src="810.gif">
  </div>
</div>



  
<br>
<br>

<table id="yourTableID" class="display">
    <thead style="background-color: #bbdefb;">
        <tr>
            <th>Date</th>
            <th>M.R No:</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Address</th>
            <th>Birth Place</th>
            <th>Birthday</th>
            <th>Religion</th>
            <th>Contact No.</th>
            <th>Delete</th>
            <th>Update</th>
             <th>Medcert</th>
        </tr>
    </thead>
    <tbody>
        <?php include 'findprocess.php'; // Include the PHP file here ?>

        <?php while ($row = $medical_record->fetch_assoc()): ?>
            <tr>
                <td><?= strtoupper($row['date']) ?></td>
                <td><?= strtoupper($row['record_no']) ?></td>
                <td><?= strtoupper($row['name']) ?></td>
                <td><?= strtoupper($row['age']) ?></td>
                <td><?= strtoupper($row['sex']) ?></td>
                <td><?= strtoupper($row['status']) ?></td>
                <td><?= strtoupper($row['address']) ?></td>
                <td><?= strtoupper($row['birthplace']) ?></td>
                <td><?= strtoupper($row['birthday']) ?></td>
                <td><?= strtoupper($row['religion']) ?></td>
                <td><?= strtoupper($row['contact_no']) ?></td>
                <td>
                    <button class="red-button delete-record" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </td>
                <td>
                    <button class="green-button" onclick="openForm1(<?= $row['id'] ?>, 
                        '<?= strtoupper($row['record_no']) ?>', 
                        '<?= strtoupper($row['name']) ?>', 
                        '<?= strtoupper($row['age']) ?>', 
                        '<?= strtoupper($row['address']) ?>', 
                        '<?= strtoupper($row['sex']) ?>', 
                        '<?= strtoupper($row['status']) ?>', 
                        '<?= strtoupper($row['birthplace']) ?>', 
                        '<?= strtoupper($row['occupation']) ?>',
                        '<?= strtoupper($row['birthday']) ?>', 
                        '<?= strtoupper($row['religion']) ?>',
                        '<?= strtoupper($row['contact_no']) ?>', 
                        '<?= strtoupper($row['date']) ?>')">
                        <i class="fas fa-edit"></i> Update
                    </button>
                </td>



    <td>
                    <button class="green-button" onclick="openForm2(<?= $row['id'] ?>, 
                        '<?= strtoupper($row['record_no']) ?>', 
                        '<?= strtoupper($row['name']) ?>', 
                        '<?= strtoupper($row['age']) ?>', 
                        '<?= strtoupper($row['address']) ?>', 
                        '<?= strtoupper($row['sex']) ?>')">
                        <i class="fas fa-list"></i> Medcert
                    </button>
                </td>






            </tr>
        <?php endwhile; ?>
    </tbody>
</table>









    <div id="overlay" class="overlay">
  <div id="formContainer" class="form-container">
    <form id="registrationForm" class="my-form" action="findprocess.php" method="post">
      <h2>
        <img src="../img/header.png" alt="Registration Image" style="max-width: 100%;">
      </h2>

      <div class="form-row">
        <label for="record_no">M.R No:</label>
        <input type="text" name="record_no" required>
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
  <label>Gender:</label>
  <div class="radio-buttons">
    <label>
      <input type="radio" name="sex" value="Male" required>
      <span>Male</span>
    </label>
    <label>
      <input type="radio" name="sex" value="Female" required>
      <span>Female</span>
    </label>
  </div>
</div>


<div class="form-row">
        <label for="address">Address:</label>
        <input type="text" name="address" required>
      </div>

      

<div class="form-row">
  <label>Status:</label>
  <div class="radio-buttons1">
    <label>
      <input type="radio" name="status" value="Single" required>
      <span>Single</span>
    </label>
    <label>
      <input type="radio" name="status" value="Married" required>
      <span>Married</span>
    </label>
    <label>
      <input type="radio" name="status" value="Widowed" required>
      <span>Widowed</span>
    </label>
  </div>
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

      <!-- The existing fields remain here -->

      <button type="submit" name="submit" class="submit-button">
  <i class="fas fa-check"></i> Register
</button>
<button type="submit" id="closeFormButton" class="cancel-button">
  <i class="fas fa-times"></i> Cancel
</button>

    </form>
  </div>
</div>













<div class="overlay1" id="overlay1">
    <div class="form-container2" id="form-container2">


      <h2>
       Update Form
      </h2> 
    

        <form id="updateForm" action="process.php" method="post">
            <div class="form-row">
                <label for="field1"></label>
                <input type="hidden" id="field1" name="id">
            </div>
            <div class="form-row">
                <label for="field2">M.R. No:</label>
                <input type="text" id="field2" name="record_no">
            </div>
            <div class="form-row">
                <label for="field3">Name:</label>
                <input type ="text" id="field3" name="name">
            </div>
            <div class="form-row">
                <label for="field4">Age:</label>
                <input type="text" id="field4" name="age">
            </div>
            <div class="form-row">
                <label for="field5">Address:</label>
                <input type="text" id="field5" name="address">
            </div>
            <div class="form-row">
                <label for="field6">Gender:</label>
                <input type="text" id="field6" name="gender">
            </div>
            <div class="form-row">
                <label for="field7">Status:</label>
                <input type="text" id="field7" name="status">
            </div>
            <div class="form-row">
                <label for="field8">Birthplace:</label>
                <input type="text" id="field8" name="birthplace">
            </div>
            <div class="form-row">
                <label for="field9">Occupation:</label>
                <input type="text" id="field9" name="occupation">
            </div>
            <div class="form-row">
                <label for="field10">Birthday:</label>
                <input type="text" id="field10" name="birthday">
            </div>
            <div class="form-row">
                <label for="field11">Religion:</label>
                <input type="text" id="field11" name="religion">
            </div>
            <div class="form-row">
                <label for="field12">Contact No:</label>
                <input type="text" id="field12" name="contact_no">
            </div>
            <button type="submit" name="update" class="submit-button">
    <i class="fas fa-edit"></i> Update
</button>
            <button class="cancel-button"type="button" onclick="closeForm()">
             <i class="fas fa-trash"></i> Close</button>
        </form>
    </div>
</div>





<div class="overlay2" id="overlay2">

    <div class="form-container1" id="form-container1">
        <form id="updateForm" action="medcert.php" method="post">
               <h2>
        Medical Certificate
      </h2> 
            <div class="form-row">
                <label for="field1"></label>
                <input type="hidden" id="field01" name="id">
            </div>
            <div class="form-row">
                <input type="hidden" id="field02" name="record_no">
            </div>
            <div class="form-row">
                <label for="field3">Name:</label>
                <input type ="text" id="field03" name="name">
            </div>
            <div class="form-row">
                <label for="field4">Age:</label>
                <input type="text" id="field04" name="age">
            </div>
            <div class="form-row">
                <label for="field5">Address:</label>
                <input type="text" id="field05" name="address">
            </div>
            <div class="form-row">
                <label for="field6">Gender:</label>
                <input type="text" id="field06" name="gender">
            </div>



  <div class="form-row">
     <label for="field7">Diagnoses:</label>
     <textarea id="field07" name="info"></textarea>
   </div>


   <div class="form-row">
     <label for="field7">Remarks:</label>
     <textarea id="field08" name="info2"></textarea>
   </div>

        
            <div class="form-row">
                <label for="field8">Issued to:</label>
                <input type="text" id="field09" name="issue">
            </div>

          <div class="form-row">
    <label for="field9">Examine Date:</label>
    <input type="date" id="field010" name="date2">
</div>

         <div class="form-row">
    <label for="field10">Release Date:</label>
    <input type="date" id="field011" name="date">
</div>
   

         
            <button type="submit" name="update" class="submit-button">
    <i class="fas fa-edit"></i> Medical Certificate
</button>
            <button class="cancel-button"type="button" onclick="closeForm2()">
             <i class="fas fa-trash"></i> Close</button>
        </form>
    </div>
</div>






<script>




window.onload = function() {
  // Display overlay when the page starts to load
  document.getElementById('overlay3').style.display = 'block';

  // Hide the overlay after a set time (e.g., 3 seconds) to simulate content loading
  setTimeout(function() {
    document.getElementById('overlay3').style.display = 'none';
  }, 5000); // Change this timeout duration as needed
}



  document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('field010').value = today;
    });


  document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('field011').value = today;
    });



function openForm1(id, record_no, name, age, address, sex, status, birthplace, occupation, birthday, religion, contact_no, date) {
    // Populate the form fields with the data
    document.getElementById('field1').value = id;
    document.getElementById('field2').value = record_no;
    document.getElementById('field3').value = name;  // Corrected field ID
    document.getElementById('field4').value = age;
    document.getElementById('field5').value = address;
    document.getElementById('field6').value = sex;
    document.getElementById('field7').value = status;
    document.getElementById('field8').value = birthplace;
    document.getElementById('field9').value = occupation;
    document.getElementById('field10').value = birthday;
    document.getElementById('field11').value = religion;
    document.getElementById('field12').value = contact_no;

    // Show the overlay
    document.getElementById('overlay1').style.display = 'block';
}



        function closeForm() {
            // Hide the overlay
            document.getElementById('overlay1').style.display = 'none';
        }












function openForm2(id, record_no, name, age, address, sex) {
    // Populate the form fields with the data
    document.getElementById('field01').value = id;
    document.getElementById('field02').value = record_no;
    document.getElementById('field03').value = name;  // Corrected field ID
    document.getElementById('field04').value = age;
    document.getElementById('field05').value = address;
    document.getElementById('field06').value = sex;
    document.getElementById('field09').value = name; 

    // Show the overlay
    document.getElementById('overlay2').style.display = 'block';
}



        function closeForm2() {
            // Hide the overlay
            document.getElementById('overlay2').style.display = 'none';
        }


















function confirmDelete(recordId) {
  if (confirm('Are you sure you want to permanently delete this account?')) {
    window.location.href = 'process.php?nurseDel=' + recordId;
  }
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
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

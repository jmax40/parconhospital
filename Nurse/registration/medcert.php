

<?php
// Check if the form is submitted and process the data








if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $address = $_POST['address'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $info = $_POST['info'] ?? '';
    $info2 = $_POST['info2'] ?? ''; // Change this to the correct field name
    $issue = $_POST['issue'] ?? ''; 
   $date2 = $_POST['date2'] ?? '';
 $date = $_POST['date'] ?? '';


if (!empty($date)) {
    $formattedDate = date("F j, Y", strtotime($date));
    $formattedDate2 = date("n-j-Y", strtotime($date));
 
}



if (!empty($date2)) {
    $formattedDate3 = date("F j, Y", strtotime($date2));
}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>




    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Certification</title>
    <style>
            body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 30px;
        }


        <style>
  .container {
    display: flex;
    justify-content: space-between;
  }

  .big-box {
    flex: 1;
    margin: 0 10px;
    text-align: center;
  }

  /* Increase checkbox size */
  input[type="checkbox"] {
    transform: scale(4.5); /* Increase checkbox size */
    margin-bottom: 5px; /* Adjust spacing */
  }
  .underline-input {
            width: 100%; /* Set the input fields to take full width */
            border: none;
            border-bottom: 1px solid white; /* Change the border color to white */
            outline: none; /* Removes the default focus outline */
            font-size: 40px; /* Set the font size */
            font-family: 'Times New Roman', Times, serif; /* Set the font family */
            font-weight: bold; /* Make the text bold */
            resize: both; /* Allow resizing of the input fields */
            color: black; /* Set text color */
            background-color: transparent; /* Set background color to transparent */
        }


    .align-left {
    margin-left: 800px; /* Adjust this value as needed for spacing */
  }
    .no-spacing {
    margin: 0;
    padding: 0;
  }

  /* Center align text */
  .no-spacing center {
    text-align: center;
  }

    .responsive-input {
    width: 100%;
    box-sizing: border-box; /* Include padding and border in the width calculation */
  }
    .responsive-image {
    max-width: 100%;
    height: auto;
    display: block; /* Remove default inline block space */
  }



.cutting-line {
  height: 2px;
  width: 100%;
  max-width: 5000px;
  border-top: 5px dotted #000;
  margin-right: auto;
  margin-left: auto;
}

 .flex-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }



        .align-right {
            text-align: left;
        }



textarea.textarea-border {
    border: 1px solid #ccc; /* Add a border */
    height: 150px; /* Increase the height */
    padding: 10px; /* Add padding inside the textarea */
    margin: 10px 0; /* Add spacing outside the textarea */
}



</style>

</head>
<body>







    <form>
           


        <center>
        <img src="heading.png" alt="Description of the image" class="responsive-image">
       </center>

            <div class="flex-container">
            <div>
                 <div style="display: flex; flex-direction: column; align-items: center;">
                <label style="margin-top: 5px;"></label>

       
            </div>
            </div>
            <div class="align-right">
              <div style="display: flex; flex-direction: column; align-items: center;">
                
                <label style="margin-top: 5px;"> <?php echo $formattedDate; ?></label>
             
            </div>
            </div>
        </div>


        <p>To whom it may concern:</p>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This is to certify that <?php echo $name; ?>,   <?php echo $age;?> y.o/<?php echo $gender; ?> a resident of
          <?php echo $address; ?> Has been examined on <?php echo $formattedDate3; ?>.</p>
        <br>

      <h2><?php echo $info; ?></h2>
      <h2><?php echo $info2; ?></h2>

         
      

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This certification is issue <?php echo $issue; ?> for whatever purpose it may serve him/her best.</p>
        <br>
        <br>
         <br>
    
        


 <div class="flex-container">
            <div>
                 <div style="display: flex; flex-direction: column; align-items: center;">
                <label style="margin-top: 5px;">Note: Not for medico legal</label>
                <label style="margin-top: 5px;">Not valid without seal</label>
                <label style="margin-top: 5px;"><?php echo $formattedDate2;?></label>
       
            </div>
            </div>
            <div class="align-right">
              <div style="display: flex; flex-direction: column; align-items: center;">
                
                <label style="margin-top: 5px;">HASMIN P. TAMPUS, MD</label>
                <label style="margin-top: 5px;">LIC. No.0116789</label>
            </div>
            </div>
        </div>



    </form>
</body>
</html>

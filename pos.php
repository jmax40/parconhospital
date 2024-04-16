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
    background-color: #333; /* Change this to your preferred shade of blue */
    color: black;
    padding: 0px;
}
.top-nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: flex-start; /* Aligns items to the right */
}

.top-nav ul li {
    margin-left: 20px;
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
            width: 70%;
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
            padding: 0px;
        }



.top-nav a {
  color: white;
  text-decoration: none;
  font-size: 16px;
  font-family: Arial, sans-serif; /* Change to Arial font */
}




.product-row {
  display: wrap;
  justify-content: space-between; /* Distribute items along the row */
  align-items: flex-end; /* Align items to the start */
  flex-wrap: wrap; /* Allow items to wrap to the next line */
  padding: 10px;
  background-color: #333;
  color: white;
   font-size: 10px;
  font-family: 'Courier New', monospace;
}

.product-container {
  flex: 0 0 calc(75% - 75px); /* Calculate width for 5 items per row with increased size */
  margin: 5px; /* Adjust margin between boxes */
  padding: 30px;
  border-radius: 5px;
  background-color: black;
  max-width: calc(24% - 24px); /* Calculate maximum width with increased size */
  text-align: center;
  box-sizing: border-box;
  box-shadow: 0 0 2px 2px rgba(0, 255, 255, 0.5);

  cursor: pointer; /* Change cursor to indicate interactivity */
  transition: background-color 0.3s ease; /* Add a smooth transition effect */
  /* Add button-like styles */
  display: inline-block; /* Ensure inline block display */
  text-decoration: none; /* Include padding and border in element's total width */
}



.product-container:hover {
  background-color: #6eff9e; /* Change background color on hover to a light green */
  border-color: #ff0000; /* Change border color on hover */
  /* Adjust other styles on hover if needed */
}







.search-input {
  width: calc(100% - 5px); /* Set input width to 100% minus the border width */
  padding: 10px; /* Adjust padding as needed */
  border: 5px solid #00ffcc; /* Neon green border */
  border-radius: 5px;
  background-color: black; /* Black background */
  color: white; /* Text color */
  outline: none;
  transition: border-color 0.3s ease;
  box-sizing: border-box; /* Ensure the padding is included within the width */
  /* Other styles for search input */
}



.search-input:focus {
  border-color: #33ffcc;
  /* Other styles on focus */
}


.product-table {
  width: 100%;
  border-collapse: collapse;
}

.product-table th, .product-table td {
  border: 1px solid #ccc;
  padding: 8px;
}

.product-table th {
  background-color: lightblue;
}


  .full-width-button {
    width: 100%;
    padding: 20px;
    background-color: lightgreen;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-sizing: border-box;
  }

  .full-width-button {
    width: 100%;
    padding: 10px;
    background-color: #0f0; /* Neon light green background */
    border: none;
    color: #black; /* White text color */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    box-shadow: 0 0 40px #0f0; /* Neon glow effect */
  }
/* Container for the search input row */
.search-container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Styling for the row containing the search input */
.row-style {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
    background-color: #f0f0f0;
    /* Add any other styling you want for this row */
}

/* Example styles for the search input */
.input-group {
    display: flex;
    align-items: center;
    width: 100%;
}

.search-input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    /* Add any other styling you want for the search input */
}

.input-group-addon {
    padding: 0 10px;
    color: #777;
    cursor: pointer;
}







#hide-on-web {
    display: none; /* Change to 'none' to hide */
  }






/* Media query for smaller screens */
@media screen and (max-width: 768px) {

  .product-row {
    justify-content: flex-start; /* Align items to the start in column layout */
  }

  .product-container {
    flex: 0 0 calc(50% - 20px); /* Calculate width for 2 items per row */
    max-width: calc(50% - 20px); /* Calculate maximum width */
  }

    nav {
            width: 100%;
            background-color: #333;
            color: white;
        }

         .content {
            flex: 0;
            padding: 0px;
        }

#reciept-area{

    display: none;
}


   #hide-on-web {
      display: block;
    }


}





.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 100px;
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



    </style>


</head>
<body>




<div class="top-nav">
  <ul class="top-nav" style="display: flex; justify-content: flex-end; align-items: center;">


  <li id="hide-on-web" > <a  onclick="openNav()" ><i class="fas fa-receipt"></i> Receipt </a></li>

    


    <li> <a href="../login.php"><i class="fas fa-cog "></i> Settings </a></li>
  
  </ul>
</div>


<div class="search-container">
    <div class="row-style">
        <div class="input-group">
           <div class="input-group-addon">
                <i class="fa fa-search"></i>
            </div>
            <input type="text" class="search-input" placeholder="Find item code">
           
        </div>
    </div>
</div>



<div class="main-content">


 <nav class="product-row">

        

        <?php include 'fetch_products.php'; ?>



        

      <?php if (!empty($products)): ?>
    <?php foreach ($products as $product): ?>
        <div class="product-container">
            <div class="product-title"><?php echo $product["info"]; ?></div>
            <div class="product-price"><?php echo $product["price"]; ?></div>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <div class="no-products-message">No products found</div>
<?php endif; ?>

    </nav>


<script>
   const searchInput = document.querySelector('.search-input');
  const productRow = document.querySelector('.product-row');
  const originalProductsHTML = productRow.innerHTML;

  searchInput.addEventListener('input', function () {
    const searchText = this.value.toLowerCase().trim();

    if (searchText === '') {
      productRow.innerHTML = originalProductsHTML;
      return;
    }

    fetch(`fetch_products.php?searchText=${searchText}`)
      .then(response => response.json())
      .then(displayProducts)
      .catch(error => {
        console.error('Error fetching products:', error);
      });
  });

  function displayProducts(products) {
    productRow.innerHTML = '';

    products.forEach(product => {
      const productContainer = createProductElement('div', 'product-container');
      const productTitle = createProductElement('div', 'product-title', product.info);
      const productPrice = createProductElement('div', 'product-price', product.price);

      appendChildren(productContainer, [productTitle, productPrice]);
      productRow.appendChild(productContainer);
    });
  }

  function createProductElement(elementType, className, textContent = '') {
    const element = document.createElement(elementType);
    element.classList.add(className);
    element.textContent = textContent;
    return element;
  }

  function appendChildren(parent, children) {
    children.forEach(child => {
      parent.appendChild(child);
    });
  }

</script>





<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



</div>






<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>






 <div class="content" id="reciept-area">
<button class="full-width-button">CHECK OUT</button>
 <table class="product-table">
  <thead>
    <tr>
        <th>Quantity</th>
      <th>Product</th>
      <th>Subtotal</th>
       <th>Action</th>
     
    </tr>
  </thead>
  <tbody>

    <tr>
        <td>10 x</td>
      <td>Product 1</td>
      <td>$10</td>
        <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
         <td>10 x</td>
      <td>Product 2</td>
      <td>$20</td>
       <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
</table>
  </div>







</div>



</div>



</body>
</html>

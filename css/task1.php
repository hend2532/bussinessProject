<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Order</title>
	<link rel="stylesheet" type="text/css" href="order.css">
   <link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="normalize.css">
   <!-- font Awesome libarary -->
   <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<div class="header">
      <img class="logo" src="images/logo.png" alt="">
      <div class="header-logo">
         <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="task1.php">Order</a></li>
            <li class="active"><a href="contact.php">Contact us</a></li>
         </ul>
      </div>
   </div>
	<h1 class="order">Your  Orders</h1>
	<form method="post" action="submit.php">
	<fieldset>
		<legend>customer information</legend>
		name <br><input type="text" name="name" required/>
		<br>
		Email <br> <input type="text" name="email" required/>
		<br>
		Password <br><input type="text" name="password" required/>
		<br>
		Confirm_Password <br><input type="text" name="confirm_password" required/>
		<br>
		Phone <br><input type="int" name="phone" required/>
		<br>
		Address <br><input type="text" name="address" required/>
		<br>
	</fieldset>
	<fieldset>
		<legend>list of food</legend>
		<table>
			<tr>
				<th>Dish</th>
				<th>Quantity</th>
				<th>ٍSize</th>
			</tr>
			<tr>
				<td>pizza</td>
				<td><input type="number" name="pizza" value="0" min="0" onchange="calculateTotal()"></td>
				<td>
					<select name="pizza_size" onchange="calculateTotals()">
						<option value="100">small</option>
						<option value="150">medium</option>
						<option value="200">large</option>
						<option value="250">x-large</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>burger</td>
				<td><input type="number" name="burger" value="0" min="0" onchange="calculateTotal()"></td>
				<td>
					<select name="burger_size" onchange="calculateTotals()">
						<option value="150">small</option>
						<option value="200">medium</option>
						<option value="250">large</option>
						<option value="300">x-large</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>shawarma</td>
				<td><input type="number" name="shawarma" value="0" min="0" onchange="calculateTotal()"></td>
				<td>
					<select name="shawarma_size" onchange="calculateTotals()">
						<option value="50">small</option>
						<option value="100">medium</option>
						<option value="150">large</option>
						<option value="200">x-large</option>
					</select>
				</td>
			</tr>
		</table>
	</fieldset>
	<div class="total">
		<label>Total</label>
		<span id="total">0
		</span><br>
</div>
<div class="total">
	<label>Total price</label>
	<span id="totals">0</span><br>
</div>
<button type="submit" name="send">Submit your order</button>
</form>
<script>
	function calculateTotals() {
		// جمع قيم الكميات
		var pizzaQuantity = parseInt(document.getElementsByName("pizza")[0].value);
		var burgerQuantity = parseInt(document.getElementsByName("burger")[0].value);
		var shawarmaQuantity = parseInt(document.getElementsByName("shawarma")[0].value);

		// جمع قيم حجم الطلبات
		var pizzaSize = parseInt(document.querySelector('select[name="pizza_size"]').value);
		var burgerSize = parseInt(document.querySelector('select[name="burger_size"]').value);
		var shawarmaSize = parseInt(document.querySelector('select[name="shawarma_size"]').value);
		// حساب المجموع
		var pizzaTotal = pizzaQuantity * pizzaSize;
		var burgerTotal = burgerQuantity * burgerSize;
		var shawarmaTotal = shawarmaQuantity * shawarmaSize;
		var totals = pizzaTotal + burgerTotal + shawarmaTotal;
		// عرض المجموع في العنصر ذو الهوية "totals"
		document.getElementById("totals").textContent = totals;
	}
	function calculateTotal() {
		// جمع قيم الكميات
		var pizzaQuantity = parseInt(document.getElementsByName("pizza")[0].value);
		var burgerQuantity = parseInt(document.getElementsByName("burger")[0].value);
		var shawarmaQuantity = parseInt(document.getElementsByName("shawarma")[0].value);
		// حساب المجموع
		var total = pizzaQuantity + burgerQuantity + shawarmaQuantity;
		// عرض المجموع في العنصر ذو الهوية "total"
		document.getElementById("total").textContent = total;
	}
</script>
   <footer>
      <img class="logo" src="images/logo.png" alt="">
      <a href="#"> <li class="fab fa-facebook-f"></li> </a>
      <a href="task1.php"> <li class="fa-sharp fa-solid fa-truck-fast"></li> </a>
      <a href="contact.php"><li class="fa-sharp fa-solid fa-envelope"></li></a>
      <div class="parent">
         <div class="footer1">
            <h3>Our Locations</h3>
            <p>564 Cairo
            <br>+123 456 7890</p>
         </div>
         <div class="footer2">
            <h3>Opening Hours</h3>
            <p>Monday - Friday : 8AM to 11PM <br>  Saturday - Sunday : 9Am to 12PM</p>
         </div>
      </div>
      <a href="#">Demolink@mail.com</a>
      <div class="name">Made By <span>Hend,Mariam,Ghada</span></div>
      </footer>
</body>
</html>

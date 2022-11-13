<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=2">
	<title></title>
</head>
<body>
<h1>Page:2 Conversion Rate</h1>
<fieldset>
	<p style="font-size: 25px;" align='center'>
			   <a href="Home.php"> Home </a>|
			   <a href="Converstion.php">Converstion Rate</a>|
			   <a href="History.php">History</a>
	</p>
    <?php
		session_start();

		$value="";
		$valueErr = "";
		$isValid = true;

		if (isset($_SESSION['value'])) {		
			header("location: Home.php");
		}
	

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (!isset($_POST['value']) || empty($_POST['value'])) {

				$valueErr = "value is required";
				$isValid = false;
			}
			else{
				$value = $_POST['value'];
			}

			
		}
        
	?>
    <div style="width:800px">
	
    <?php
    if (isset($message)) {
         echo "$message";
     } 
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post";novalidate>
        <fieldset>
        <label for="value">Select Catagory:</label>
        <select name="value" id="value">
            <option value="Select a value">Select a value</option>
            <option value="USD to BDT">USD to BDT</option>
            <option value="CAD to BDT">CAD to BDT</option>
        </select>
        <br><br> 
        <label for="text">value:</label>
        <input type="text" name="username" placeholder= "Enter value" value="<?php echo $value;?>"><span class="red">*<?php echo $valueErr?></span>
        <input type="submit" name="submit" value="Submit">
        <br><br>
        <label for="text">Result:</label>
        <input type="text" id="result" name="result">
        </fieldset>
    </form>
</div>
</body>
</html>
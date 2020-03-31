<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="style.css"/>
<head>
    <title>Future Value Calculator</title>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>
        
        <form  method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="0"/><br/>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="0"/><br/>

                <label>Number of Years:</label>
                <input type="text" name="years" value="0"/>
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"/><br/>
            </div>
        </form> <span>

        <?php 
        	if ($_SERVER["REQUEST_METHOD"] == "POST"){
        		$investment = $_POST["investment"];
        		$rate = $_POST["rate"];
        		$years = $_POST["years"];

        		$oneYear = $investment +($investment * $rate/100);
        		$FutureValue = $oneYear*$years;

        		echo "<span>Investment Amount:</span>$".$investment."</br>";
        		echo " <span>Yearly Interest Rate:</span>%".$rate."</br>";
        		echo " <span>Number of Years:</span>".$years."</br>";
        		echo " <span>Future Value:</span>$".$FutureValue."</br>";
        	}
         ?>
         
        
        
        
    </div>
</body>
</html>
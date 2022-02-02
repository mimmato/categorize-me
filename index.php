<?php
$csvfile=file("data.csv");
$data=[];
foreach ($csvfile as $line){
    $data[] = str_getcsv($line);

}
//print_r($data);
?>

<!DOCTYPE html>
    <html>
    	<head>

    		<meta charset="utf-8">
    		<title>Categorize Me!</title>
    		<link href="style.css" rel="stylesheet" type="text/css">

    	</head>

    	<body>
        <nav class="navtop">
        	<div>
        		<h1>Cetegorize me (ticketing)</h1>
                <a href="submit-ticket.php">Submit ticket</a>
        	</div>
        </nav>




<div class="input-field-div">
    <p align="center"> Email issues </p>

    <textarea readonly required type="text" id="email" name="email" rows="10" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to Email issues">

<?php if($_POST["requestType"]=="Email") {
    echo "Name: " . $_POST ["name"], PHP_EOL;
    echo "Email address: " . $_POST["email"], PHP_EOL;
    echo "Issue description: " . $_POST["msg"], PHP_EOL;
    }
?>
    </textarea></br>
</div>



<div class="input-field-div">
    <p align="center"> WordPress </p>
    <textarea readonly type="text" id="name" name="name" rows="10" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to WordPress">
<?php if($_POST["requestType"]=="WordPress") {
    echo "Name: " . $_POST ["name"], PHP_EOL;
    echo "Email address: " . $_POST["email"], PHP_EOL;
    echo "Issue description: " . $_POST["msg"], PHP_EOL;
    }
?>

    </textarea></br>
</div>

<div class="input-field-div">
    <p align="center"> Server error </p>
    <textarea readonly type="text" name="errors" id="errors" rows="10" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to Server errors">

<?php if($_POST["requestType"]=="ServerError") {
    echo "Name: " . $_POST ["name"], PHP_EOL;
    echo "Email address: " . $_POST["email"], PHP_EOL;
    echo "Issue description: " . $_POST["msg"], PHP_EOL;
    }
?>
    </textarea>
</div>

</body>
</html>

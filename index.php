<?php
$csvfile=file("data.csv");
$data=[];
foreach ($csvfile as $line => $keys) {
    $data[] = str_getcsv($line);
}
//print_r($data);

    echo $keys . " ";
    //print_r($keys);
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



a.cs
<div class="input-field-div">
    <p align="center"> Email issues </p>

    <textarea readonly required type="text" id="email" name="email" rows="40" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to Email issues">

<?php if($_POST["requestType"]=="Email") {
    echo "Name: " . $_POST ["name"], PHP_EOL;
    echo "Email address: " . $_POST["email"], PHP_EOL;
    echo "Issue description: " . $_POST["msg"], PHP_EOL;
    }
?>




<?php
$csvfile=file("data.csv");
$data=[];
foreach ($csvfile as $line) {
        echo $line . " ";
        echo "\n";
    $data[] = str_getcsv($line);
// foreach ($data as $value){
//     echo $value . "";
// }

// $mail="Email";
// if ($data[0][2] == Email){
//  echo $mail;
// }
// print_r($mail);

}


 print_r($data);
// echo $data[0][0];
//
// if($data=$data[0][0])
// echo $data[0][2];


// if($data == $data[2]) {
//    echo "Name: " . $data[0], PHP_EOL;
//     echo "Name: " . $data[1], PHP_EOL;
//    echo "Name: " . $data[3], PHP_EOL;
// }

// $found = in_array(Email,$data2);
//
// if($found){
//     echo $data2;
// }else
//     echo "NO";




//print_r($data);
?>



    </textarea></br>
</div>



<div class="input-field-div">
    <p align="center"> WordPress </p>
    <textarea readonly type="text" id="name" name="name" rows="40" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to WordPress">
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
    <textarea readonly type="text" name="errors" id="errors" rows="40" placeholder="This box will include information that the client puts in the submit-ticket.php form that relates to Server errors">

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

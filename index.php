<?php
$file = 'data.csv';
    //string literal
    $data_to_write = "{$_POST["name"]},{$_POST["email"]},{$_POST["requestType"]},{$_POST["msg"]}" .PHP_EOL;
    file_put_contents($file, $data_to_write, FILE_APPEND);

$csvfile=file("data.csv");
$data=[];

foreach ($csvfile as $line) {
    $data[] = str_getcsv($line);
}
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
            <a href="submit_to_csv.php">Submit ticket</a>
        </div>
    </nav>

<div class="input-field-div">
    <p align="center"> Email issues </p>

    <textarea readonly required type="text" id="email" name="email" rows="40" placeholder="This box will include information that the client puts in the submit_to_csv.php form that relates to Email issues">

<?php
foreach($data as $row){
    if($row[2]=="Email"){
//        print_r($row);
        echo PHP_EOL;
        echo "NAME: " . $row[0], PHP_EOL;
        echo "ADDRESS: " . $row[1], PHP_EOL;
        echo "MESSAGE: " . $row[3], PHP_EOL;
    }
}
?>
    </textarea></br>
</div>

<div class="input-field-div">
    <p align="center"> WordPress </p>
    <textarea readonly type="text" id="name" name="name" rows="40" placeholder="This box will include information that the client puts in the submit_to_csv.php form that relates to WordPress">

<?php
foreach($data as $row){
    if($row[2]=="WordPress"){
        echo PHP_EOL;
        echo "NAME: " . $ro//        print_r($row);
w[0], PHP_EOL;
        echo "ADDRESS: " . $row[1], PHP_EOL;
        echo "MESSAGE: " . $row[3], PHP_EOL;
    }
}
?>
    </textarea></br>
</div>

<div class="input-field-div">
    <p align="center"> Server error </p>
    <textarea readonly type="text" name="errors" id="errors" rows="40" placeholder="This box will include information that the client puts in the submit_to_csv.php form that relates to Server errors">

<?php
foreach($data as $row){
    if($row[2]=="ServerError"){
//        print_r($row);
        echo PHP_EOL;
        echo "NAME: " . $row[0], PHP_EOL;
        echo "ADDRESS: " . $row[1], PHP_EOL;
        echo "MESSAGE: " . $row[3], PHP_EOL;
    }
}
?>
    </textarea>
</div>

</body>
</html>

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




<form>

            <label for="title">Email issues</label></br>
            <input type="text" name="title" placeholder="This box will include information that the client puts in the submit-ticket.php form" id="title" required size="60" maxLength="60">
        	<br>

            <label for="email">WordPress</label></br>
            <input type="email" name="email" placeholder="This box will include information that the client puts in the submit-ticket.php form" id="email" required size="60" maxLength="60"></br>

            <label for="msg">Server error</label></br>
            <input type="text" id="name" name="name" required required size="60" maxLength="60" placeholder="This box will include information that the client puts in the submit-ticket.php form"><br>

</form>

<?php echo $_POST["name"]; ?>
<?php echo $_POST["email"]; ?>
<?php echo $_POST["requestType"]; ?>
<?php echo $_POST["msg"]; ?>
<?php echo $_POST["msg"]; ?>

</body>
</html>

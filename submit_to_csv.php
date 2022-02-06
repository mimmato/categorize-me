<html>
    <head>
        <meta charset="utf-8">
	    <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    	<nav class="navtop">
    		<div>
    			<h1>Cetegorize me (ticketing)</h1>
    			<a href="index.php">Review tickets</a>
    		</div>
    	</nav>

<?php/*
            if(isset($_POST['submit'])){
                $name=$_POST["name"];
                $email=$_POST["email"];
                $requestType=$_POST["requestType"];
                $msg=$_POST["msg"];
            }
*/?>

        <form class="form" action="index.php" method="POST">

        <div class="input">
            <label for="name">Name</label></br>
            <input type="text" name="name" placeholder="Please enter your first and last name" id="name" required size="60" maxLength="60"></br>
        </div>

        <div class="input">
            <label for="email">Email</label></br>
            <input type="email" name="email" placeholder="youremail@yourdomain.com" id="email" required size="60" maxLength="60"></br>
        </div>

        <div class="input">
            <label for="requestType">Issue category</label></br>
            <select name="requestType" id="requestType">
                <option label="Email" value="Email">Email</option>
                <option label="WordPress" value="WordPress">WordPress</option>
                <option label="Server Error" value="ServerError">Server Error</option>
            </select></br>
        </div>

        <div class="input">
            <label for="msg">Message</label></br>
            <textarea id="msg" name="msg" rows="10" placeholder="Describe your request in a few words" required></textarea></br>
        </div>

        <div class="input">
            <input type="submit" value="Submit ticket">
        </div>
        </form>
    </body>
</html>

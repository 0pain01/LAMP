<?php
	echo "First Program";
?>
<!DOCTYPE html>
<html>
    <head><title>HTML Form</title></head>
    <body>
        <form method="GET" action="form2.html" >
            Username <input type="text" name="username" placeholder="Enter your Username" required><br><br>
            Password <input type="password" name="password" placeholder="Enter your password" required><br><br>
            Interests :
            Codings <input type="checkbox" value="codings"  name="interest[]">
            Mobile games <input type="checkbox" value="mobile games" name="interest[]">
            Outdoor games <input type="checkbox" value="out games" name="interest[]">
            paintings <input type="checkbox" value="painting" name="interest[]"><br>
            <input type="submit">
        </form>
    </body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Connection Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
    // USe your own details in the next line
    $dbc = mysql_connect("silva.computing.dundee.ac.uk","jaredmomanyi","ac32006");
	
    if (!$dbc)
    {
        die("Could not connect: " . mysql_error());
    }
    else
    {
        echo ("CONNECTED!");
    }
	
    mysql_close($dbc);
	
?>
</body>
</html>
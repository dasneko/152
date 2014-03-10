<?php
    // get the data from the form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mood = $_POST['mydropdown'];
    
 //loop 
  if ($age <= 9) {
        $age_message = 'teens'; 
    } else if ($age < 19) {
        $age_message = 'twenties'; 
    } else if ( $age < 29) {
        $age_message = 'thirties';        
    } else {
        $age_message = 'not young age';
    }
        echo $name;
           
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Great Doge Fortune</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Great Doge Fortune</h1>

        <label>Your Fortune:</label>
        <span><?php echo $age_message; ?></span><br />
        <p>&nbsp;</p>
    </div>
</body>
</html>

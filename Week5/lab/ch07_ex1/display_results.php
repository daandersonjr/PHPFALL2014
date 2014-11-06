<?php
    // get the data from the form
    $email = $_POST['email'];

    // get the rest of the data for the form
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    // for the heard_from radio buttons,
    // display a value of 'Unknown' if the user doesn't select a radio button

    $hearRadio = filter_input(INPUT_POST, 'heard_from');
    
    
   
    // for the wants_updates check box,
    // display a value of 'Yes' or 'No'
    
    $wantsUpdates = filter_input(INPUT_POST, 'wants_updates');
    
    $contact = filter_input(INPUT_POST, 'contact_via');
    
    $comments = filter_input(INPUT_POST, 'comments');
         
    $comments = htmlspecialchars($comments);
    
    
?>
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br />

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br />

        <label>Heard From:</label>
        <span><?php  echo htmlspecialchars ($hearRadio) ; 
                
                if ($hearRadio == ""){
                    echo 'Unknown';
                }
        
        ?></span><br />

        <label>Send Updates:</label>
        <span><?php if ($wantsUpdates == 'on') {
            echo 'Yes';
        }
            else {echo 'No';}
            
            ?>
            
            
            </span><br />

        <label>Contact Via:</label>
        <span></span><?php echo htmlspecialchars($contact); ?><br /><br />

        <span>Comments:</span><br />
        <span><?php echo nl2br($comments) ; ?></span><br />
        
        <p>&nbsp;</p>
    </div>
</body>
</html>
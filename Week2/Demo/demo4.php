<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php        
            $fname = '';
            $lname = '';
            $errorMsg = '';
            if ( !empty($_POST) ) {
               $fname = $_POST['fname'];
               $lname = $_POST['lname']; 
            }        
            
            
            
         if ( empty($errorMsg) === false ) {
             echo '<p>', $errorMsg , '</p>';
         }
        
        ?>
        <h1> My Form </h1>
        <form action="#" method="post">            
           F Name: <input type="text" name="fname" value="<?php echo $fname; ?>" /> <br />
           L Name: <input type="text" name="lname" value="<?php echo $lname; ?>" /> <br />
            <input type="submit" />            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
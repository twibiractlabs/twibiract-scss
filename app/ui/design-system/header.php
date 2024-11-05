<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/twibiractlabs.min.css">
    <title>
        <?php 
            if(isset($TITE_WEBSITE)){
                echo $TITE_WEBSITE;
            }else{
                echo "twibiract";
            }
        ?>
    </title>
</head>
<body data-bs-theme="dark">
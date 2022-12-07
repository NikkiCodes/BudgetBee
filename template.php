<!doctype html>
<html>
    <head>
        <title><?php echo $companyName; ?></title>
    </head>
    <body>
        <header style='text-align:center;font-weight:bold;font-size:22px;'>
            <?php echo $companyName . " - " . $releasedate; ?>  
        </header>

        <p style="text-align:center;">
            <img src="bee.png" style="width:125px;">
        </p>
        <p style="text-align:center;"> <?php echo $companyName; ?> is a useful app will assist in simplifying your life.</p>
        
        <footer style="text-align:center;">
            Contact <?php echo $companyName; ?> with questions.
            <br> 
            copyright <?php echo $year; ?>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Jeremy Alexander - Web Designer</title>
    <meta name="description" content="Jeremy Alexander, freelance web design based in Portland, Oregon.">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/navigation.css">
    
    <!-- Imported Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
     <!-- PHP header include -->
    <?php
        include 'includes/header.php';
    ?>
    
    <!-- Navigation -->
    <nav class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>    
            <a href="index.php" class="active">Home</a>

        <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
            x.className = "topnav";
            }
            } 
        </script>     
    </nav>
    
    <main>
    <p>Thank you for your message! You can use the navigation to return to <a href="index.php" class="highlight">Jeremy Alexander's portfolio</a></p>
    </main>
    
</body>
</html>
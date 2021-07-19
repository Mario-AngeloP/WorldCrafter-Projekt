<?php 

	require_once './php/settings.php';

?>

<!DOCTYPE html>

<html lang="en"><!-- Basic -->

<head>

	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">   

    <!-- Mobile Metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

 

     <!-- Site Metas -->

    <title>WorldCrafter - <?php echo getSiteName()?></title>  

    <meta name="keywords" content="Plugins, Minecraft, Coding, Java, Programmieren, German, Deutsch, Worldcrafter">

    <meta name="description" content="">

    <meta name="author" content="WorldCrafter">



    <!-- Site Icons -->

    <link rel="shortcut icon" href="images/worldcrafter_icon.png" type="image/png">

    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">    

	<!-- Site CSS -->

    <link rel="stylesheet" href="css/style.css">    

    <!-- Responsive CSS -->

    <link rel="stylesheet" href="css/responsive.css">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/custom.css">



    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>



<body>

	<?php include_once './html/header.php'?>

	

	<?php include_once './html/' . getTargetInclude() . '.php'?>

	

	<?php include_once './html/footer.php'?>

</body>

</html>
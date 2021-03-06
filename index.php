<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta property="fb:admins" content="100000950747566"/>
    <meta property="fb:app_id" content="2008080342764714"/>
    <title>Facebook authorization</title>
    <!-- jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/style.css">
    <script src="js/custom.js"></script>
    <script src="js/fb_api_init.js"></script>
</head>
<body>
    <div class="container entry page-header">
        <?php require_once('inc/auth.php') ?>
    </div>
    <div class="container bottom">
        <img src="inc/load.gif" class="load">
        <?php require_once('inc/title.php') ?>
    </div>
</body>
</html>
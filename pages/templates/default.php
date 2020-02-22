
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title><?= \APP\App::getTitle();?></title>

    <!-- Bootstrap core CSS -->

</head>

<body clas="abc" style="background-color: white;">

<nav class="navbar navbar-inverse">

    <!--<div class="cont">-->
    <div class="navbar-header" id="block2" class="col-sm-6 col-md-4 col-lg-3">
        <button type="button" class="navbar-toggle" date-toggle="collapse" data-target="#monMenu"></button>
        <a href="#" class="navbar-brand">Heading</a>

    </div>

    <div class="abc" style="float: right;">

    </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 100px">
        <?= $content; ?>
    </div>

</div>
<!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
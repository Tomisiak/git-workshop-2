<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiedy ciasto</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="row text-center">
    <div class="col-xs-12">
        <div class="header text-center"><h1>Jest dziś ciasto!</h1>
            <img src="http://simpleicon.com/wp-content/uploads/smile.png" class="photo"></div>
        <div class="col-md-offset-5 col-md-2 col-xs-12">
            <button class="btn btn-warning" >Dodaj ciasto</button>
        </div>

        <div id="formularz" class="col-md-offset-5 col-md-2 col-xs-12">
            <form role="form" action="">
                <div class="form-group">
                    <label for="user">Dane o przynoszącym</label>
                    <input type="text" id="user" placeholder="Wpisz imię i nazwisko lub ksywkę" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Nazwa ciasta</label>
                    <input type="text" id="name" placeholder="Wpisz nazwę ciasta" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Data</label>
                    <input type="date" id="date" placeholder="Wybierz datę" class="form-control">
                </div>
                <div class="form-group">
                    <label for="time">Godzina</label>
                    <input type="time" id="time" placeholder="Określ godzinę" class="form-control">
                </div>

                <div class="col-xs-12 text-center">
                    <button type="submit" class="dodaj">Dodaj ciasto</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
</body>
</html>
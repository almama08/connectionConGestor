<html>
    <head>
        <title>Welcome to LAMP Infrastructure</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?="<h1>Hello, Welcome DAW Student!</h1>";?>
        <a href="index.php?accion=agregar">Agregar Alumnado</a>
        <div class="container-fluid">
            <?='<table class="table table-striped">';?>
            <?='<thead><tr><th>id</th><th>name</th></tr></thead>';?>
            <?php
                foreach($arrayPersonas as $persona){
                    echo '<tr>';
                    echo '<td>' . $persona->getId() . '</td>';
                    echo '<td>' . $persona->getNombre() . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            ?>
        </div>
    </body>
</html>
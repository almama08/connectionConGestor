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
            <?='<thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>';?>
            <?php foreach($arrayPersonas as $persona):?>
                    <tr>
                        <td><?=$persona->getId()?></td>
                        <td><?=$persona->getNombre()?></td>

                        <td>
                            <!--Botón editar-->
                            <form method="POST" action="index.php?accion=editar" style="display:inline;">
                                <input type="hidden" name="id" value="<?=$persona->getId()?>">
                                Nombre: <input type="text" name="nombre" value="<?=$persona->getNombre()?>" required>
                                <button type="submit">Guardar</button>
                                <!--Botón eliminar-->
                                <td><a href="index.php?accion=eliminar&id=<?=$persona->getId()?>">Eliminar</a></td>
                            </form>
                        </td>
                    </tr>
            <?php endforeach ?>
        </div>
    </body>
</html>
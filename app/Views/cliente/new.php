<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo Cliente</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        form {
            margin: 0 auto;
            width: 70%;
            background-color: lightgray;
            padding: 1em;
            border-radius: .5em;
            box-shadow: 5px 5px 5px grey;;
        }
        form div {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: .5em;
        }

        form div:last-child{
            margin-top: 2em;
        }

        label, input, select, textarea{
            padding: .2em 0;
            border-radius: .5em;
            border-width: 0;
        }
        input[type="submit"]{
            padding: .5em;
            background-color: grey;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Crear nuevo cliente</h1>
    <?= $validation->listErrors(); ?>
    <form action="<?= base_url('cliente') ?>" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="Yeyo">
        </div>
        <div>
            <label for="rfc">RFC:</label>
            <input type="text" name="rfc" value="YEYE950214YV5">
        </div>
        <div>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" value="Simon Bolivear 25">
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" value="8345689475">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="yeyo@gmail.com">
        </div>
        <div>
            <label for="contacto">Nombre del contacto:</label>
            <input type="text" name="contacto" value="andrea">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>
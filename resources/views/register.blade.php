<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuarios</title>
    <style>
        /* Agrega aquí tus estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Registro de Usuarios</h2>

        <form method="POST">
            @csrf

            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name">

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">

            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>

</html>
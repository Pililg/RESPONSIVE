<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Menu.css">
    <link rel="icon" href="IMG/camisa (6).png">
    <style>
        body {
            
            background-color:#d7d7ed;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        nav {
            max-width: 900px;
            margin: auto;
            background-color: rgb(35, 24, 152);
            font-size: 20px;
            margin-top: 80px;
        }

        .menu-horizontal {
            list-style: none;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
        }

        .menu-horizontal > li {
            position: relative;
        }

        .menu-horizontal > li > a {
            display: block;
            padding: 10px 40px;
            color: white;
            text-decoration: none;
        }

        .menu-horizontal > li:hover {
            background: linear-gradient(150deg, #d7d7ed, #0F40F5);
        }

        .menu-vertical {
            position: absolute;
            display: none;
            list-style: none;
            width: 200px;
            background-color: rgba(0, 0, 0, .5);
            padding: 0;
            margin: 0;
            top: 100%;
            left: 0;
            z-index: 1000;
        }

        .menu-horizontal li:hover .menu-vertical {
            display: block;
        }

        .menu-vertical li {
            position: relative;
        }

        .menu-vertical li:hover {
            background: linear-gradient(150deg, #d7d7ed, #0F40F5);
        }

        .menu-vertical li a {
            display: block;
            color: white;
            padding: 15px 15px 15px 20px;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            nav {
                width: 100%;
                margin-top: 0;
            }

            .menu-horizontal {
                flex-direction: column;
                text-align: center;
            }

            .menu-horizontal > li > a {
                padding: 10px 20px;
            }

            .menu-vertical {
                position: static;
                width: 100%;
            }

            .menu-vertical li a {
                padding: 10px;
            }

            .menu-horizontal li:hover .menu-vertical {
                display: none;
            }

            .menu-horizontal li:active .menu-vertical {
                display: block;
            }
        }

        @media (max-width: 300px) {
            .menu-horizontal > li > a {
                padding: 10px;
                font-size: 16px;
            }

            .menu-vertical li a {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul class="menu-horizontal">
            <li><a href="#">Inicio</a></li>
            <li>
                <a href="#">Quienes Somos</a>
                <ul class="menu-vertical">
                    <li><a href="#">Vision</a></li>    
                    <li><a href="#">Mision</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Categorias</a>
                <ul class="menu-vertical">
                    <li><a href="Inventario.php">Inventarios</a></li>
                    <li><a href="#">Ventas</a></li>
                    <li><a href="#">Usuarios</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Configuraciones</a></li>
                </ul>
            </li>
            <li>
                <a href="index.php">Cerrar Sesion</a>
                <ul class="menu-vertical">
                    <li><a href="index.php">Salir</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INICIO DE SESION</title>
    <link rel="stylesheet" href="InicioS.css">
    <link rel="icon" href="IMG/camisa (6).png">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(150deg, #d7d7ed, #0F40F5);
            font-family: Arial, Helvetica, sans-serif;
        }
        
        #pantalla-dividida {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }
        
        .izquierda, .derecha {
            flex: 1;
            height: 100%;
        }
        
        .izquierda {
            background: url(IMG/inicio.png) no-repeat center center;
            background-size: cover;
        }
        
        .derecha {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            padding: 20px;
        }
        
        form {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        h1 {
            margin-bottom: 20px;
            font-size: xx-large;
        }
        
        input {
            width: 100%;
            margin: 10px 0;
            font-size: 16px;
            height: 35px;
            padding: 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .forget {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        
        .forget label {
            margin-left: 5px;
            font-size: 14px;
        }
        
        button[type="submit"] {
            width: 100%;
            height: 40px;
            border: none;
            background: linear-gradient(150deg, #181884, #0F40F5);
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        button[type="submit"]:hover {
            background: linear-gradient(150deg, #9500ff, #09f, #00ddff);
        }
        
        .recordar {
            margin-top: 20px;
            font-size: 14px;
        }
        
        a {
            text-decoration: none;
            color: gainsboro;
            font-weight: 500;
            margin: 0 5px;
        }
        
        a:hover {
            color: #ffffff;
            font-weight: 700;
        }
        
        @media (max-width: 768px) {
            .izquierda, .derecha {
                width: 100%;
                height: auto;
            }
            
            .izquierda {
                height: 50vh;
            }
        }

        @media (max-width: 300px) {
            #pantalla-dividida {
                flex-direction: column;
            }
            
            .izquierda, .derecha {
                width: 100%;
                height: auto;
            }
            
            form {
                width: 100%;
                padding: 10px;
            }
            
            h1 {
                font-size: large;
            }
            
            input {
                font-size: 14px;
                height: 30px;
            }
            
            button[type="submit"] {
                height: 35px;
                font-size: 16px;
            }
            
            .recordar {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <section id="pantalla-dividida">
        <div class="izquierda"></div>    
        <div class="derecha">
            <form class="col-12"> 
                <h1>INICIO DE SESION</h1>
                <center><img src="IMG/avatar-fotor-20230922163936.png" style="width: 100px; height: 100px;"/></center>
                <div class="form-group" id="rol-group">
                    <input type="text" class="form-control" placeholder="Rol de usuario"/>
                </div>
                <div class="form-group" id="user-group">    
                    <input type="text" class="form-control" placeholder="Usuario"/>
                </div>
                <div class="form-group" id="contrasena-group">    
                    <input type="password" class="form-control" placeholder="Contraseña"/>
                </div>
                <div class="forget">
                    <label><input type="checkbox"> Recuerdame</label>
                </div>
                <button type="submit" class="btn-primary"><i class="fas fa-sign-in-alt"></i> <a href="Menu.php">INGRESAR </button></a> 
            </form>
        </div>
    </section>
</body>
</html>

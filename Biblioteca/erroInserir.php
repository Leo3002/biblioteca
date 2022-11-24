<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/erro.css">
    <title>Free Book</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Ubuntu", sans-serif;
            
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
	
        }
        div#parallelogram {
            background: #00acd7;
            width: 800px;
            height: 350px;
            max-width: 70vw;
            border-radius: 10px;
            box-shadow: 5px 5px 15px;
            transform: skew(10deg, 2deg);
            position: absolute;
            z-index: -1;
        }
        
        button {
	
            margin-left: 10px;
            width: calc(100% - 10px);
            height: 70px;
            background-color: #00acd7;
            color: #fff;
            font-size: 20px;
            border:none;
            border-radius: 20px;
            cursor: pointer;
            transition: .3s linear;

        }
        button:hover {
	        opacity: 0.85;
        }
        section {
            display: flex;
            background: #fff;
            padding: 30px 5px;
            border-radius: 10px;
            box-shadow: 5px 5px 15px;
            max-width: 70vw;
        
        }

        section h1 {
            padding: 40px 10px;
            text-align: center;
        }
        
        fieldset{
            border:none;
            
            
        }

        fieldset:nth-child(2) {
            display: flex;
        }

        fieldset:nth-child(4) {
            display: flex;
            padding-top: 20px;
        }

        fieldset:nth-child(5) {
            display: flex;
            height: 50%;
            width: 100%;
            margin-top: 30px;
            padding: 0px 10px;
        }
        .container {
	    position: relative;
        }
        section img {
            width: 250px;
            height: 250px;
            margin: auto 40px;
        }
        @media only screen and (max-width: 1080px) {
            div#parallelogram {
                height: 300px;
                width: 480px;
            }

            section img {
                display: none;
            }
        }

        @media only screen and (max-width: 510px) {
            div#parallelogram {
                display: none;
            }

            section {
                min-width: 95vw;
                
            }

            form {
                width: 100%;
            }


            fieldset:nth-child(2),
            fieldset:nth-child(4),
            fieldset:nth-child(5) {
                flex-direction: column;
            }

            fieldset:nth-child(4) {
                padding: 0px;
            }

            button {
                margin-top: 10px;
                width: 100%;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<div id="parallelogram"></div>
    <section>
    <img src="imagens/erro.jpg" alt="User">
            <form action="cadastroUsu.php">
                
                <h1>Email já cadastrado!!!</h1>
                
                    <fieldset>
                        <div class="container">
                            <button>Tentar novamente</button>
                        </div>
                        <div class="container">
                            <a href="esqueciSenha.php"><button>esqueci a senha</button></a>
                        </div>
                        
                        
                    </fieldset>
                    
            </form>
            
        </section>
        
    
</body>
</html>
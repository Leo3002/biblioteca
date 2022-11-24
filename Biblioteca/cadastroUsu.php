<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="jquery.maskedinput-1.1.4.pack.js"/></script>
    <style>
               @charset "UTF-8";

@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');


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
    height: 530px;
    max-width: 70vw;
    border-radius: 10px;
    box-shadow: 5px 5px 15px;
    transform: skew(10deg, 2deg);
    position: absolute;
    z-index: -1;
}

section {
    display: flex;
    background: #fff;
    padding: 30px 5px;
    border-radius: 10px;
    box-shadow: 5px 5px 15px;
    max-width: 50vw;
    max-height: 80vh;

}

section h1 {
    padding: 10px 10px;
    text-align: center;
}

fieldset{
    border:none;
}

fieldset:nth-child(2) {
    display: flex;
}
fieldset:nth-child(3) {
    display: flex;
}

fieldset:nth-child(4) {
    display: flex;
    padding-top: 20px;
}

fieldset:nth-child(5) {
    display: flex;
    width: 100%;
    margin-top: 20px;
    padding: 0px 10px;
}
.voltar{
    color: #00acd7;
    padding-left: 40px;
    margin-left: 10px;
}

.container {
    position: relative;
}

.container input {
    margin: 10px;
    width: calc(100% - 10px);
    height: 70px;
    border: none;
    background-color: #ededed;
    border-radius: 4px;
    color: #333;
    font-size: 18px;
    font-weight: 700;
    padding: 14px 10px 0 30px;
}

.container label {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 700;
    color: #9d9d9d;
    position: absolute;
    line-height: 70px;
    top: 10px;
    left: 20px;
    user-select: none;
    pointer-events: none;
    transition: 0.5s;
}

.container input:focus ~ label,
.container input:valid ~ label {
    left: 30px;
    top: -10px;
    color: #00acd7;
}
.voltar:hover{
    opacity: 0.5;
    color: #00acd7;
}

#check {
    width: 50%;
    text-transform: uppercase;
    font-size: 14px;
    display: flex;
}

#check input{
    width: 25px;
    height: 25px;
    margin: auto 0;
}

#check label {
    margin: auto 10px;
    color: #555;
    transition: 0.5s
}

#check input:checked ~ label,
#check input:valid ~ label {
    color: #00acd7;
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

form a {
    text-decoration: none;
    font-size: 16px;
    color: #555;
    font-weight: 500;
    
    text-transform: uppercase;
    text-align: center;
    display: block;
}

form a:hover {
    color: #111;
}

section img {
    width: 250px;
    height: 250px;
    margin: auto 40px;
}

@media only screen and (max-width: 1080px) {
    div#parallelogram {
        height: 690px;
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
    .voltar{
        margin: 10px;
        padding: 10px;
        
    }

    fieldset:nth-child(2),
    fieldset:nth-child(4),
    fieldset:nth-child(5) {
        flex-direction: column;
    }

    fieldset:nth-child(4) {
        padding: 0px;
    }

    div#check {
        width: 100%;
    }

    button {
        width: 100%;
        margin-left: 0;
    }
}

    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cep").mask("99999-999");
        });
    </script>
    
</head>
<body>
<?php
        include 'conexao.php';
    ?>
        <div id="parallelogram"></div>

        <section>
        <form action="inserirUsu.php" method="POST">
			<h1>Crie sua conta</h1>
			<fieldset>
				<div class="container">
					<input type="text" required name="name" id="nome" autofocus>

					<label>Nome</label>
				</div>

				<div class="container">
					<input type="text" required name="Email" id="email">

					<label>Email</label>
				</div>

                
			</fieldset>

			<fieldset>
				<div class="container">
					<input type="password" required name="password" id="senha">

					<label>Senha</label>
				</div>
                <div class="container">
					<input type="text"  required name="cep"id="cep">

					<label>Cep</label>
				</div>
                
			</fieldset>

			<fieldset>
				<div class="container">
					<input type="text" required name="cidade" id="cidade">

					<label>Cidade</label>
				</div>

				
                <div class="container">
					<input type="text" required name="endereco" id="endereco">

					<label>Endereço</label>
				</div>
			</fieldset>

			<fieldset>
				<button name="submit">Criar conta</button>
			</fieldset>

			
		</form>

            
        </section>

</body>
</html>
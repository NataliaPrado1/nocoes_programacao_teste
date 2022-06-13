<?php
print_r($_POST);
//echo "Olá a todos!";
if(isset($_POST ['nome'])){

}
?>
<center>
    <a> Oi </a><br>
    <h1>Oi2</h1><br>
    <h2>Oi3</h2><br>
<a href="aula3.php">Voltar</a>
<form action="" method="POST">
    <label>
    <b style="color: red;"> Por favor,</b>
    <b style="color: blue;">informe o seu Nome: </b>
    </label>

    <input type="text" name="nome"><br><br>

    <label>
        <b>Informe o seu Sobrenome: </b>
    </label>
    <input type="text" name="sobrenome"><br><br>

    <label>
        <b>Informe sua idade: </b>
    </label>
    <input type="number" name="idade"><br><br>

    <label>
        <b>Informe sua data de nascimento: </b>
    </label>
    <input type="date" name="idade"><br><br>

    <button type="submit">Gravar</button>
</form>
<img src="imagens/carro.png" width="100%" height="100%">
<img src="imagens/moto.png" width="100%" height="100%">

</center>
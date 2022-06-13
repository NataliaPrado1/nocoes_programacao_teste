<html>
    <head>
        <title>Nosso primeiro Sistema</title>
    </head>
    <body bgcolor="green">
        <center>
        <form action=""method="POST">
        <h1>REGISTRO DE ALUNOS</h1>
        <h4>Preencha o formulario com os dados do aluno</h4><br>
        <label><b style="color: white;">Nome: </b></label><br>
        <input type="text" name="nome"><br><br>

        <label><b style="color: white;">Data de nascimento: </b></label><br>
        <input type="date" name="idade"><br><br>

        <label><b style="color: white;">Documento (RG ou CPF): </b></label><br>
        <input type="number" name="doc"><br><br>

        <label><b style="color: white;">Endereço: </b></label><br>
        <input type="text" name="end"><br><br>

        <label><b style="color: white;">Curso: </b></label><br>
        <input type="text" name="curso"><br><br>

        <label><b style="color: white;">Ano/Semestre: </b></label><br>
        <input type="text" name="sem"><br><br>

        <label><b style="color: white;">Turno: </b></label><br>
        <input type="text" name="turn"><br><br>

        <button type="submit">Salvar</button>
        </form>
        </center>
    </body>
</html>
<?php
if(isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['doc']) && isset($_POST['end']))
{ if($_POST['nome']==""){
    echo "<h2 style='color:black;'>O nome não foi informado</h2>";}
    else if($_POST['nome'] == "Natalia"){
    echo "o nome é Natalia";
    }else{
    echo "<h2 style='color:green;'>Seu cadastro foi efetuado com sucesso!";}
}
?>
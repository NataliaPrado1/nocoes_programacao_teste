<html>
    <head>
        <title>Tarumã SP</title>
        <meta charset = "UTF-8">
    </head>
    <body bgcolor="pink">
            <center>
            <form action=""method="POST">
            <h1 style="color: brown;">FORMULÁRIO</h1>

            <label><b style="color: brown;">Cidade: </b></label><br>
            <input type="text" name="cidade" required> <br><br>

            <label><b style="color: brown;">Estado: </b></label><br>
            <input type="text" name="estado" required><br><br>

            <button type="submit">Salvar</button>
            </center>

        </form>
        <center>
        <?php
        class pessoa_obj{};
        $pessoa = new pessoa_obj();
        $pessoa->name = "Nick";
        $pessoa->sobrenome = "Doe";
        $pessoa->idade = 20;
        $pessoa->date = '01/01/2002';
        $pessoa->peso = 8;
        $pessoa->cidade = "Florinea";
        $pessoa->estado = "SP";

        $pessoa2 = new pessoa_obj();
        $pessoa2->name = "Edson";
        $pessoa2->sobrenome = "Marangoni";
        $pessoa2->idade = 21;
        $pessoa2-> date = '09/06/2000';
        $pessoa->peso = 97;
        $pessoa->cidade = "tarumã";
        $pessoa->estado = "SP";

        $pessoa3 = new pessoa_obj();
        $pessoa3->name = "Kauan";
        $pessoa3->sobrenome = "Borsoi";
        $pessoa3->idade = 19;
        $pessoa3-> date = '04/06/2003';
        $pessoa3->peso = 68;
        $pessoa->cidade = "Tarumã";
        $pessoa->estado = "SP";

        //print_r($pessoa);
       // echo "<Br><br>";
       // print_r($pessoa2);
        //echo "<Br><br>";
       //print_r($pessoa3);
        //echo "<Br>";

        $arrayPessoas = array();
        echo "<br>O meu array de pessoas: <br>";
        print_r($arrayPessoas);
        array_push($arrayPessoas, $pessoa);
        array_push($arrayPessoas, $pessoa2);
        array_push($arrayPessoas, $pessoa3);
        echo"<br><br><pre>";
        print_r($arrayPessoas);
        echo"</pre><br><br>";

        echo"<table border='1'>";
        for ($posicao=0; $posicao < count($arrayPessoas); $posicao++) { 
            if($arrayPessoas[$posicao]->idade<20){
                echo"<tr>";
                echo "<td>" .$arrayPessoas[$posicao]->name."</td>";
                echo "<td>" .$arrayPessoas[$posicao]->sobrenome."</td>";
                echo"</tr>"; 
            }
        }
        
        echo"</table>";
        if(isset($_POST['cidade']) && isset($_POST['estado'])){
            if($_POST['cidade'] == ""){
                echo "Sr Usuário, o campo cidade não foi preenchido.";
            }else if($_POST['estado'] == ""){
                echo "Sr Usuário, o campo estado não foi preenchido.";
            }else{
                echo "Dados Cadastrados com Sucesso";
            }
        }
        ?>
        <table border="1">
            <tr>
                <td>Cidade </td>
                <td>Estado </td>
            
            </tr>
            <tr>
                <td>Tarumã </td>
                <td>São Paulo </td>
            </tr>
            <tr>
                <td>Ourinhos</td>
                <td> São Paulo</td>
            </tr>
            <tr>
                <td>Goiania </td>
                <td>Goiás </td>
            </tr>
            <tr>
                <td>Belo Horizonte </td>
                <td>Minas Gerais </td>
            </tr>
            </center>
        </table>

        <?php
        print_r($_POST);
        if (isset($_POST['cidade'])){
            if($_POST['cidade'] == ""){
                echo "Atenção, o campo Cidade não foi preenchido.";
            }else if($_POST['estado'] == ""){
                echo "Atenção o campo Estado não foi preenchido.";
            }else{
                echo "Dados Cadastrados com sucesso";} 
        }
        
        
            
        
        ?>
    </body>
</html>
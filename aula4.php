<html>
    <head>
        <title>Nosso primeiro Sistema</title>
    </head>
    <body bgcolor="pink">
        <center>
        <form action=""method="POST">

        <label><b style="color: brown;">Nome: </b></label><br>
        <input type="text" name="nome"><br><br>

        <label><b style="color: brown;">Sobrenome: </b></label><br>
        <input type="text" name="sobrenome"><br><br>

        <button type="submit">Salvar</button>
        </center>

        </form>
        <?php
        print_r($_POST);
        if(isset ($_POST['nome'])){
        if($_POST['nome'] == "Natalia"){
            echo "Natalia";
        }else if($_POST['nome']=="Danila"){
            echo "Danila";
        }else if($_POST['nome']=="Cristina"){
            echo"Cristina";
        }

        if($_POST['nome']=="Natalia"|| $_POST['nome']=="Danila"||$_POST['nome']=="Cristina"){
            echo "Estudam no Polo";
        }
        }
        
        ?>
    </body>
</html>
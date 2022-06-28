<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <style>
            button{
                height:57px;
                width:57px;
                font-size:14pt;
                background-color:pink;
                font-weight: bold;
                color: aliceblue
            }
        </style>
    </head>
    <body>
        <center>
        <input id="numero"style="width:163px;height:50px;"><br><br>
        <button>7</button><button>8</button><button>9</button><br>
        <button>4</button><button>5</button><button>6</button><br>
        <button>1</button><button>2</button><button>3</button><br>
        <button onclick="soma()">+</button><button>0</button><button onclick="subtracao()">-</button><br>
        </center>
        <script>
            //var botao=document.getElemetByTagName('button');
            var somatoria = 0;
            function soma(){
                var numero = document.getElementById('numero'). value;
                somatoria = parseInt(somatoria) + parseInt(numero)
                document.getElementById('numero'). value=somatoria;
                
            }
            function subtracao(){
                alert("Você clicou no botão de subtração")
            }
        </script>
    </body>

</html>
<!DOCTYPE html>
<html lang="ptbr">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <style>
            button{
                height:57px;
                width:50px;
                font-size:20pt;
                background-color:green;
                font-weight: bold;
                color: aliceblue
            }
        </style>
    </head>
    <body>
        <center>
        <input id="numero" style="width:190px;height:50px;"><br>
        <button>7</button><button>8</button><button>9</button><button onclick= "limpa()">CE</button><br>
        <button>4</button><button>5</button><button>6</button><button onclick= "soma()">+</button><br>
        <button>1</button><button>2</button><button>3</button><button onclick= "multiplica()">X</button><br>
        <button>.</button><button>0</button><button onclick= "igual()">=</button><button onclick= "divide ()">/</button><br>
        </center>
        <script>
            var botoes = document.getElementsByTagName('button');
            var entrada = document.getElementById('numero');
            var somatoria = 0;
            var alternar = false;
            var operacao = null;

            for(var i = 0;i<botoes.length;i++){
                botoes[i].addEventListener("click", function(e){
                    var btn = e.target.innerHTML;

                    if(btn !== "=" && btn !== "+" && btn !== "X" && btn !== "/" && btn !== "CE"){
                        if(alternar){
                            entrada.value = "";
                            alternar = false;
                         }
                        var txt = entrada.value;
                        txt = txt + btn;
                        entrada.value = txt;                 
                    }
                }, false);
            }

            function soma(){
                var numero = document.getElementById('numero'). value;
                somatoria = parseInt(somatoria) + parseInt(numero)
                document.getElementById('numero'). value=somatoria;
                operacao = "+";
                alternar = true;
            }
            function limpa(){
                document.getElementById('numero').value = "";
                somatoria = 0;
            }
            
                function igual(){
                switch(operacao){
                case "+":
                    somatoria = somatoria + parseInt(entrada.value);
                    document.getElementById('numero').value = somatoria;
                    break;
                    case "X":
                    somatoria = somatoria * parseInt(entrada.value)
                }
               
            }
            function multiplica(){
                var numero = document.getElementById('numero'). value;
                if(somatoria ===0){
                    somatoria = 1;
                }
                somatoria = parseInt(somatoria) * parseInt(numero);
                document.getElementById('numero').value=somatoria;
                operacao = "X";
                alternar = true;
            }
        </script>
    </body>

</html>
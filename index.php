<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Escola </title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="resultado.php" method="post">
            <p>
                Nome do aluno:  <input type="text" name="nome"  />
            </p>

            <p>
                Nota 1: <input type="number" name="n1" />
            </p>
            
            <p>
               Nota 2: <input type="number" name="n2" />
            </p>
            
            <p>
                Quantidade de aulas: <input type="number" name="quantA" />
            </p>

            <p>
                Quantidade de faltas: <input type="number" name="quantF" />    
            </p>
            
            <p>
                <input type="submit" value="Calcular" />
            </p>

        </form>

    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>PHP REPORT</title>
    </head>

    <body>

        <h1> OLÁ :)</h1>

        <h3> Preencha a descrição que irá colocar no relatório usando POST: </h3>

        <form action="exemplorelatorio.php" method="post">

            Título: <input type="text" value="" name="titulo"><br><br>
            Page Header: <input type="text" value="" name="pageheader"><br><br>
            Descrição: <input type="text" value="" name="descricao"><br><br>
            Footer: <input type="text" value="" name="footer"><br><br>
            Page Footer: <input type="text" value="" name="pagefooter"><br><br>
            Summary: <input type="text" value="" name="summary"><br><br>

            <input type="submit" value="ENVIAR POR POST">

        </form>

        <hr>

        <h3> Preencha a descrição que irá colocar no relatório usando GET: </h3>

        <form action="exemplorelatorio.php" method="get">

            Título: <input type="text" value="" name="titulo"><br><br>
            Page Header: <input type="text" value="" name="pageheader"><br><br>
            Descrição: <input type="text" value="" name="descricao"><br><br>
            Footer: <input type="text" value="" name="footer"><br><br>
            Page Footer: <input type="text" value="" name="pagefooter"><br><br>
            Summary: <input type="text" value="" name="summary"><br><br>
            <input type="submit" value="ENVIAR POR GET">

        </form>


    </body>
</html> 
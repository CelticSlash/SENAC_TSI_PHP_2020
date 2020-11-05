<html>
    <head>
        <title>Meu site</title>
    </head>
    <body>
        <center>
            <table border="1">
                <tr>
                    <td>
                        <form method="post" action="index.php">
                            <br>
                            <?php
                                if(isset($msg))
                                {
                                    echo $msg;
                                }
                            ?>
                            <br>
                            <label for="login">Login</label>
                            <input type="text" name="login">
                            <br><br>
                            <label for="login">Senha</label>
                            <input type="password" name="senha">
                            <br><br>
                            <input type="submit" name="entrar" value="Entrar">
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
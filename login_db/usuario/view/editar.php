<html>
    <body>
        <center>
            <h1>Editar Cadastro</h1>
            <table border="1">
                <tr>
                    <td>
                        <form method="post">
                            <br>
                            
                            <?php
                                if(isset($editado_ok))
                                {
                                    echo "<font color = 'green'> Editado com sucesso </font>";
                                }
                            ?>
                            <font color="red">
                                <?php
                                    if(isset($erros))
                                    {
                                        if(count($erros) > 0)
                                        {
                                            foreach($erros as $erro)
                                            {
                                                echo $erro . '<br>';
                                            }
                                        }
                                    }
                                ?>
                            </font>
                            <br>
                            <input type="hidden" name="id" value="<?php echo $_GET['editar'];?>">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required>
                            <br>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                            <br>
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" required>
                            <br>
                            <label for="confSenha">Confirmar Senha</label>
                            <input type="password" id="confSenha" name="confSenha" required>
                            <br><br>
                            <input type="submit" name="salvar" value="Salvar">
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
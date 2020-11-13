<?php

    chdir( __DIR__ );

    require_once '../../db.php';

    function listar(int $id = null): array 
    {
        global $db;

        if(is_null($id))
        {
            $str = '';
        }
        else
        {
            //Caso o usuário passe um parâmetro para listar(), será adicionada a cláusula WHERE na consulta SQL.
            //preg_replace previne SQL injection
            $str = 'WHERE id = ' . preg_replace('/\D/', '', $id);
        }

        $r = $db->query("SELECT id, nome, email FROM usuario $str");
        $reg = $r->fetchAll();
        
        return is_array($reg) ? $reg : [];
    }

    function ja_existe_email( string $email ): bool
    {
        if ( empty($email) ) return false;

        global $db;

        $stmt = $db->prepare('SELECT id FROM usuario WHERE email = :email');

        $stmt->bindParam(':email', $email);					

        $stmt->execute();

        $registro = $stmt->fetch();

        return is_array($registro) ? true : false;
    }

    function gravar_usuario( string $nome, string $email, string $senha): ?int 
    {
        global $db;

        $senha = password_hash( $senha, PASSWORD_DEFAULT);

        $stmt = $db->prepare('	INSERT INTO usuario 
                                    ( nome, email, senha) 
                                VALUES 
                                    ( :nome, :email, :senha)');

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        return (int) $db->lastInsertId();
    }

    function apagar_usuario( int $id ): bool
    {
        if ( is_numeric($id) ) {

            global $db;

            if ( $db->exec("DELETE FROM usuario WHERE id = $id") > 0 ) {

                return true;

            } else {

                return false;
            }

        } else {

            return false;
        }
    }

    function editar_usuario(int $id, string $nome, string $email, string $senha): bool
    {
        global $db;

        $senha = password_hash( $senha, PASSWORD_DEFAULT);

        $stmt = $db->prepare('	UPDATE 
                                    usuario 
                                SET
                                    nome = :nome, email = :email, senha = :senha 
                                WHERE
                                    id = :id');

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        return $stmt->execute();
    }
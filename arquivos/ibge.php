<?php
    include 'db.php';

    $fp = $fp = fopen('CIDADES_CAPITAIS_IBGE.csv', 'r');

    for($i = 0; $linha = fgets($fp); $i++)
    {
        if($i != 0)
        {
            $registro = explode(';', $linha);

            $insert = $db->prepare("  INSERT INTO ibge 
                                        (id_cidade, nome, latitude, longitude) 
                                    VALUES 
                                        (:id, :nome, :latitude, :longitude)");
            
            $insert->bindParam(':id', $registro[0]);
            $insert->bindParam(':nome', $registro[1]);
            $insert->bindParam(':latitude', $registro[2]);
            $insert->bindParam(':longitude', $registro[3]);

            $insert->execute();

        }
        else
        {
            echo 'Fim da pesquisa.';
        }
    }
    fclose($fp);
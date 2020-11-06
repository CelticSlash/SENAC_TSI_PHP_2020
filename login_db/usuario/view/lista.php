<?php
    include '../header_tpl.php';
    include '../index_menu_tpl.php';

    echo '<center>
          <table border="1" width="50%">
            <th>
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
            </th>';

    foreach($lista as $usuario)
    {
        echo "<tr>
                <td>{$usuario['id']}</td>
                <td>{$usuario['nome']}</td>
                <td>{$usuario['email']}</td>
              </tr>";
    }

    echo "</table>
          </center>";

    include '../footer_tpl.php';

<?php
    $html = "<h1>Produtos</h1>";
    $html.= "<ul>";
    foreach ($produtos as $p) {
        $html.="<li>Nome: {$p->nome}, Descrição: {$p->descricao}</li>";
    }
    $html.= "</ul>";

    echo $html;
?>
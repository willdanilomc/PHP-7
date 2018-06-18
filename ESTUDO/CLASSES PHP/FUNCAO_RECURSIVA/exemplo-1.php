<?php

$hirarquia = array (
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            // Inicio Diretor  Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>
                //
                array(
                    'nome_cargo'=>'Gerente de Vendas',
                )
                //
            ),
            // termino Diretor  Comercial
            // Diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                // Inicio
                'subordinados'=> array(
                    'nome_cargo'=>'Gerente de contas a pagar'
                ),
                // termino
            )
            //Termino Diretor financeiro
        )
    )
);

function exibe($cargos){
    $html = '<ul>';
    foreach ($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        $html .= "</li>";
    }
    $html .= "</ul>";
    return $html;
}

echo exibe($hirarquia);


?>
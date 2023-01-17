<?php
//recomendado não usar, usando apenas em casos excepcionais
/*$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: diretor
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                   array(
                    'Nome_cargo'=>'Gerente de Vendas'
                   )

                ),
            ), //termino diretor

            //inicio diretor financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    'nome_cargo'=>'Gerente de Contas a Pagar',
                    'subordinados'=>array(
                        array(
                            'nome_cargo'=>'supervisor de Pagamentos'
                        )
                        ),
                 
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                        )
                    
                )
              

                

            )
            
        )

    )
); */
$hierarquia = array(

    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de Vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Termino: Gerente de Vendas    
                )
            ),
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Pagamentos
                        )
                    ),
                    //Termino: Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Termino: Supervisor de Suprimentos
                        )

                    )
                    //Termino: Gerente de Compras
                )
            )
            //Termino: Diretor Financeiro
        )
    )

);

function exibe($cargos){
    $html = '<ul>';
    
    foreach ($cargos as $cargo) {
        # code...
        $html .="<li>"; 
        $html .= $cargo[ 'nome_cargo' ];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) >0 ) { //count conta quantos elementos tem numa chave de array ou no array completo
            $html.= exibe($cargo['subordinados']);
            # code...
        }

        $html .="</li>";
    }

    $html .='</ul>';//.= é acumulativo

    return $html;
}

echo exibe($hierarquia);
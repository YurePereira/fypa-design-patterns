<?php

require_once 'IComponentCriterio.class.php';
require_once 'Filter.class.php';

# Instacia da classe Filter
## Teste com String
$filter1 = new Filter( 'nm_usuario', '=', 'Yure' );
## Teste com Array
$filter2 = new Filter( 'nm_usuario', 'IN', array('Yure', 'Igor') );
## Teste com Integer
$filter3 = new Filter( 'qt_usuario', '>', 100 );
## Teste com Boolean
$filter4 = new Filter( 'qt_usuario', '=', true );
## Teste com Field SQL
$filter5 = new Filter( 'qt_usuario', '=', '´qt_usuario´' );

#Mostrar string de filtro

echo $filter1->dump();
echo '<br />';
echo $filter2->dump();
echo '<br />';
echo $filter3->dump();
echo '<br />';
echo $filter4->dump();
echo '<br />';
echo $filter5->dump();



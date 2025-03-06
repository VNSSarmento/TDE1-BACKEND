<?php
 
$n_brink = 6;
$altura = 120;
$altura_nec = [200,90,100,123,120,169];
$pode_ir = 0;

for( $i = 0; $i < $n_brink; $i++ ) {
    if( $altura >= $altura_nec[$i] ) {
        $pode_ir++;
        }
}

echo($pode_ir);

?>
<?php

for ($i=1; $i <= 100 ; $i++) { 

// imposto le condizioni per trovare i multipli e sostituirli con le parole fornite
if($i % 3 == 0 && $i % 5 == 0){
echo "HACKADEMY \n";
}
elseif ($i % 3 == 0) {
echo "PHP \n";
}elseif ($i % 5 == 0) {
echo "JAVASCRIPT \n";
}
// se non rispetta le altre condizioni stampa semplicemente il numero
else {
    
    echo $i . "\n";
}


}

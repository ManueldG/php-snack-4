<?
function media($array){
    $somma=0;
    $i=0;
    
    

    foreach($array as $num){
        $somma += $num;
        $i++;
    }
    return ($somma/$i);
    
}
?>
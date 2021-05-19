<?

/*Creare un array contenente qualche alunno di un’ipotetica classe.
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */
include 'db.php';
include 'function.php';

foreach ( $db as $alunno )
    echo ( " ".$alunno['name']." ".$alunno['lastName']." ".media($alunno['vote'])."<br>");
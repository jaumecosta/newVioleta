<?php 
if($_REQUEST) {

    echo "Todo OK";

    echo('<pre>');
    print_r($_REQUEST);
    echo('</pre>');
} else {

    echo "Mal";
}

?>
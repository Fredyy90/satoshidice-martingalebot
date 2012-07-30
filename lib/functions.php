<?php
function f($num, $count = 8){
    return (number_format($num, $count, '.', '') +0);
}


function showresult(){
    global $starting_balance, $balance_c, $total_fees;

    echo 'Starting Balance    : ' . f($starting_balance) . "\n";
    echo 'Ending Balance      : ' . f($balance_c) . "\n";
    echo 'Total Fees          : ' . f($total_fees) . "\n";
    echo 'Net Profit          : ' . f($balance_c - $starting_balance) . "\n\n";

}

?>
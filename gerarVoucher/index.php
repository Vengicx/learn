<?php
    $a = 0;
    while ($a <= 2) {
        $url = file_get_contents('http://www.gazin.com.br/admin/Voucher/generateVoucher');
        echo "$url";
    }

?>
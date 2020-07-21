<?php

function tanggal()
{
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date("d F Y H:i:s", time());
    return $waktu;
}

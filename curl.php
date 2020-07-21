<?php

// buat fungsi http_request

function http_request($url)
{
    // persiapan curl
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    // aktifkan fungsi  transfer nilai yg berupa string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $output = curl_exec($ch);

    curl_close($ch);

    return $output;
}

$data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

$data = json_decode($data, TRUE);

$jumlah = count($data);

$nomor = 1;

for ($i = 0; $i < $jumlah; $i++) {
    $hasil = $data[$i]['attributes'];

?>


    <tr>
        <td><?= $nomor++; ?></td>
        <td><?= $hasil["Provinsi"]; ?></td>
        <td><?= number_format($hasil["Kasus_Posi"]); ?></td>
        <td><?= number_format($hasil["Kasus_Semb"]); ?></td>
        <td><?= number_format($hasil["Kasus_Meni"]); ?></td>
    </tr>

<?php
}
?>
$(document).ready(function () {

    // panggil functions
    semuaData();
    dataNegara();
    dataProvinsi();
    tanggalSekarang();

    setInterval(() => {
        semuaData();
        dataNegara();
        dataProvinsi();
        tanggalSekarang();
    }, 1000);

    function semuaData() {
        $.ajax({
            url: 'https://coronavirus-19-api.herokuapp.com/all',
            success: function (data) {
                try {
                    var formatter = new Intl.NumberFormat('en');
                    var json = data;
                    var kasus = data.cases;
                    var meninggal = data.deaths;
                    var sembuh = data.recovered;

                    $('#datakasus').html(formatter.format(kasus));
                    $('#datamati').html(formatter.format(meninggal));
                    $('#datasembuh').html(formatter.format(sembuh));


                } catch {
                    alert('error');
                }
            }
        });
    }

    function dataNegara() {
        $.ajax({
            url: 'https://coronavirus-19-api.herokuapp.com/countries',
            success: function (data) {
                try {
                    var formatter = new Intl.NumberFormat('en');
                    var json = data;
                    var html = [];

                    if (json.length > 0) {
                        var i;
                        for (i = 0; i < json.length; i++) {
                            var datanegara = json[i];
                            var namanegara = datanegara.country;
                            if (namanegara === 'Indonesia') {
                                var kasus = datanegara.cases;
                                var mati = datanegara.deaths;
                                var sembuh = datanegara.recovered;

                                $('#dataid').html(
                                    'Positif : ' + formatter.format(kasus) + ' orang <br> Meninggal : ' + formatter.format(mati) + ' orang <br> Sembuh : ' + formatter.format(sembuh) + ' orang ')
                            }

                        }
                    }



                } catch {
                    alert('error');
                }
            }
        });
    }

    function dataProvinsi() {
        $.ajax({
            url: 'curl.php',
            type: 'GET',
            success: function (data) {
                try {
                    $('#table-data').html(data);


                } catch {
                    alert('error');
                }
            }
        });
    }

});
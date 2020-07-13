$(document).ready(function () {

    // panggil functions
    semuaData();
    dataNegara();

    setInterval(() => {
        semuaData();
        dataNegara();
    }, 1000);

    function semuaData() {
        $.ajax({
            url: 'https://coronavirus-19-api.herokuapp.com/all',
            success: function (data) {
                try {
                    var json = data;
                    var kasus = data.cases;
                    var meninggal = data.deaths;
                    var sembuh = data.recovered;

                    $('#datakasus').html(kasus);
                    $('#datamati').html(meninggal);
                    $('#datasembuh').html(sembuh);


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
                                    'Positif : ' + kasus + ' orang <br> Meninggal : ' + mati + ' orang <br> Sembuh : ' + sembuh + ' orang ')
                            }

                        }
                    }



                } catch {
                    alert('error');
                }
            }
        });
    }
});
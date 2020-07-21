<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pemantauan Virus Corona</title>
    <style>
        @media (max-width: 768px) {
            .card {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>

    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <div class="container text-center">
            <h1 class="display-4">Corona virus</h1>
            <p class="lead">
                <h4>
                    PEMANTAUAN PENYEBARAN VIRUS COVID-19 DI DUNIA
                    <br> SECARA REAL-TIME
                    <br> Mari Bersama menjaga kesehatan diri kita dari corona.
                </h4>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-danger text-white py-3 px-4">
                    <div class="row">
                        <div class="col-md-7">
                            <h5>Positif</h5>
                            <h2 id="datakasus"></h2>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="img/sad.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info text-white py-3 px-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Meninggal</h5>
                            <h2 id="datamati"></h2>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                            <img src="img/cry.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white py-3 px-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Sembuh</h5>
                            <h2 id="datasembuh"></h2>
                            <h5>Orang</h5>
                        </div>
                        <div class="col-md-4">
                            <img src="img/happy.svg" style="width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="card bg-primary text-white py-3 px-4">
                    <div class="row">
                        <div class="col-md-3">
                            <h2>INDONESIA</h2>
                            <h5 id="dataid">
                        </div>
                        <div class="col-md-4">
                            <img src="img/indonesia.svg" style="width: 150px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir row -->
        <div class="card text-white bg-secondary mt-5">
            <div class="card-body">
                <h3 class="text-center">Data Kasus Virus Corona Di Indonesia berdasarkan Provinsi</h3>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody id="table-data">

                </tbody>
            </table>
        </div>
    </div>
    <!-- akhir container -->

    <footer class="bg-primary mt-3 text-white text-center pt-2 pb-2">
        &copy; Copyright Created By: Hafizh Maulana Y.
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
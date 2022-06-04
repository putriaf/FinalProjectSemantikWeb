<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>Phonology</title>
</head>

<body id="home">
    <!--PHP-->
    <?php
    require_once("sparqllib.php");
    $test = "";
    if (isset($_POST['search-phone'])) {
        $test = $_POST['search-phone'];
        $data = sparql_get(
            "http://localhost:3030/smartphone",
            "
            PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            PREFIX d: <http://phonology.com/ns/data#>
            PREFIX i: <http://phonology.com/ns/info#>

            SELECT ?phoneID ?phoneName ?phoneBrand ?batteryCapacity ?chipset ?price ?weight ?operatingSystem ?RAM ?memoryCapacity ?diagonalWidth ?camera
            WHERE
            { 
            ?phone  i:phoneID ?phoneID ;
                    i:phoneName ?phoneName;
                    i:phoneBrand ?phoneBrand;
                    i:batteryCapacity ?batteryCapacity;
                    i:chipset ?chipset;
                    i:price ?price;
                    i:weight ?weight;
                    i:operatingSystem ?operatingSystem;
                    i:RAM ?RAM;
                    i:memoryCapacity ?memoryCapacity;
                    i:diagonalWidth ?diagonalWidth;
                    i:camera ?camera.
                    FILTER (regex (?phoneID,  '$test', 'i') || regex (?phoneName,  '$test', 'i') || regex (?phoneBrand,  '$test', 'i') || regex (?batteryCapacity,  '$test', 'i') || regex (?operatingSystem,  '$test', 'i') || regex (?memoryCapacity,  '$test', 'i'))
            }
            "
        );
    } else {
        $data = sparql_get(
            "http://localhost:3030/smartphone",
            "
            PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
            PREFIX d: <http://phonology.com/ns/data#>
            PREFIX i: <http://phonology.com/ns/info#>

            SELECT ?phoneID ?phoneName ?phoneBrand ?batteryCapacity ?chipset ?price ?weight ?operatingSystem ?RAM ?memoryCapacity ?diagonalWidth ?camera
            WHERE
            { 
                ?phone  i:phoneID ?phoneID ;
                        i:phoneName ?phoneName;
                        i:phoneBrand ?phoneBrand;
                        i:batteryCapacity ?batteryCapacity;
                        i:chipset ?chipset;
                        i:price ?price;
                        i:weight ?weight;
                        i:operatingSystem ?operatingSystem;
                        i:RAM ?RAM;
                        i:memoryCapacity ?memoryCapacity;
                        i:diagonalWidth ?diagonalWidth;
                        i:camera ?camera.
            }
            "
        );
    }

    if (!isset($data)) {
        print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
    }

    ?>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/1.png" alt="" width="450" />
        <form action="" method="post" id="nameform">
            <div class="search-box">
                <input type="text" name="search-phone" placeholder="Cari Minuman" />
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            <i class="bi bi-search"></i>
        </form>
    </section>
    <!-- End of Jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row tentang">
                <div class="col-lg-6">
                    <img src="img/2.jpg" alt="tentang" class="img-fluid" />
                </div>
                <div class="col-lg">
                    <h3>Apa itu <span>Sedrinks ?</span></h3>
                    <p>
                        Sedrinks adalah sebuah website pencarian menu minuman. Dengan Sedrinks, anda bisa mengetahui
                        segala tentang minuman yang akan anda pesan. Sehingga tidak khawatir lagi dengan kandungan minuman
                        dan tentunya tidak salah memilih jenis minuman yang aman untuk disajikan bersama orang orang terdekat anda.
                    </p>
                </div>
            </div>

            <div class="row rekom row text-center mb-3">
                <div class="col">
                    <h2>Find Your Favorite Smartphone</h2>
                    <br>
                </div>
            </div>

            <!-- Search Result -->
            <div class="row text-center mb-3 hasil">
                <div class="col">
                    <h2>Hasil Pencarian</h2>
                </div>
            </div>
            <div class="row fs-5">
                <div class="col-md-5">
                    <p>
                        Menampilkan pencarian :
                        <br />
                    </p>
                    <p>
                        <span>
                            <?php
                            if ($test != NULL) {
                                echo $test;
                            } else {
                                echo "Find Smartphone :";
                            }
                            ?></span>
                    </p>
                </div>
            </div>

            <div class="row">

                <?php $i = 0; ?>
                <?php foreach ($data as $dat) : ?>
                    <div class="col-md-4">
                        <div class="box">
                            <ul class="list-group list-group-flush">
                                <div class="header-data"> <b>Smartphone Name :</b></div>
                                <div class="item-data"><?= $dat['phoneName'] ?></div>

                                <div class="header-data"> <b>Smartphone Brand :</b></div>
                                <div class="item-data"><?= $dat['phoneBrand'] ?></div>

                                <div class="header-data"> <b>Battery Capacity :</b></div>
                                <div class="item-data"><?= $dat['batteryCapacity'] ?></div>

                                <div class="header-data"> <b>Chipset/Processor :</b></div>
                                <div class="item-data"><?= $dat['chipset'] ?></div>

                                <div class="header-data"> <b>Price :</b></div>
                                <div class="item-data"><?= $dat['price'] ?></div>

                                <div class="header-data"> <b>RAM :</b></div>
                                <div class="item-data"><?= $dat['RAM'] ?></div>

                            </ul>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- End of About -->

    <!-- Footer -->
    <footer class="footer text-black text-center pb-3">
        <p><i class="text-primary"></i>Putri Ainur Fitri</p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
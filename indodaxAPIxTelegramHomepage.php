<?php 
    $sumber = "https://indodax.com/api/tickers";
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);

?>

<?php 
    // pagination
    $page = !isset($_GET['page']) ? 1 : $_GET['page'];
    $limitData = 15;
    $startData_InPagination = ($page - 1) * $limitData; 
    $datanya = $data['tickers'];
    $total_coin = count($data['tickers']);
    $total_page = ceil($total_coin / $limitData);
    $final =array_splice($datanya,$startData_InPagination,$limitData);
    $limitPagination=2;
    $paginationRows=5;
    $endPagination= $total_page - $limitPagination;
    $firstPage = 1;
    $lastPage = $total_page;
?>

<?php 
    header( "refresh:30" );
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <!-- link gasp3 //buat animasi di home section-->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

        <!-- link css semb -->
        <link rel="stylesheet" href="style.css">

        <title>Homepage Indodax API Website</title>
    </head>

    <body>
        <nav id="navbarContainer" class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a id="homeBrand" class="navbar-brand" href="">Indodax API x Kelompok 7</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <p class="time-Container">
                                <span class="liveMarket-Time" id="date"></span>
                                <span class="liveMarket-Time" id="month"></span>
                                <span class="liveMarket-Time" id="year"></span>,
                                <span class="liveMarket-Time" id="hours"></span>.<span class="liveMarket-Time" id="minute"></span>.<span class="liveMarket-Time" id="second"></span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section id="liveMarket">
                <div class="container-fluid">
                    <div class="container">
                        <p class="liveMarket-Title">Cryptocurrency x Indodax API Monitoring</p>
                        <div id="Timer"></div>
                        <table class="tableOutput">
                            <tr>
                                <th class="tableNomor">No</th>
                                <th class="tableAsset">Asset</th>
                                <th class="tableLast">Last Price</th>
                                <th class="tableHigh">High 24H</th>
                                <th class="tableLow">Low 24H</th>
                                <th class="tableLastLow">Sell</th>
                                <th class="tableLastHigh">Buy</th>
                                <th class="tableIsHigh">High-Last</th>
                                <th class="tableIsLow">Last-Low</th>
                                <th class="tableStatus">Status</th>
                            </tr>
                            <?php 
                            $nomor = $startData_InPagination+1;
                            $nomorBot = 0;
                            foreach($final as $row => $value){
                        ?>
                            <tr>
                                <th class="tableBawah">
                                    <?php echo $nomor++ ?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo $row?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo number_format($value['last']) ?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo number_format($value['high']) ?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo number_format($value['low']) ?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo number_format($value['sell']) ?>
                                </th>
                                <th class="tableBawah">
                                    <?php echo number_format($value['buy']) ?>
                                </th>
                                <th class="tableIsHigh">
                                    <?php 
                                    $isHigh = ($value['high'] - $value['last']);

                                    echo number_format($isHigh);
                                ?>
                                </th>
                                <th class="tableIsLow">
                                    <?php 
                                    $isLow = ($value['last'] - $value['low']);

                                    echo number_format($isLow);
                                ?>
                                </th>
                                <?php 
                                    $batasAmanBuy = $value['low'] * 1/100;
                                    $batasAmanSell = $value['high'] * 1/100;

                                    if ($value['last'] > 1 && ($value['high'] - $value['last']) < $batasAmanSell) { ?>
                                <th style="background-color: red; color: red">
                                    .
                                </th>
                            <?php } else if ($value['last'] > 1 && ($value['last'] - $value['low']) < $batasAmanBuy) { ?>
                                <th style="background-color: green; color: green">
                                    .
                                </th>
                            <?php } else if ($isHigh == $isLow && $value['last'] > 1 && ($value['last'] - $value['low']) < $batasAmanBuy && ($value['high'] - $value['last']) < $batasAmanSell) {?>
                                <th style="background-color: cadetblue; color: cadetblue">
                                    .
                                </th>
                            <?php } else { ?>
                                <th style="background-color: yellow; color: yellow">
                                    .
                                </th>
                                <?php }
                                ?>
                            </tr>
                            <?php 
                            }
                        ?>
                        </table>
                        <div class="pagination">
                            <?php if($page > $limitPagination+1 && $page < $endPagination) {?>
                            <?php 
                                $start_pagination = ($page - $limitPagination);
                                $end_pagination = ($page + $limitPagination);
                            ?>
                            <a id="active<?php echo $page-1?>" href='?page=<?php echo $page-1; ?>'>
                                prev
                            </a>
                            <a id="active<?php echo $firstPage?>" href='?page=<?php echo $firstPage; ?>'>
                                <?php echo $firstPage; ?>
                            </a>
                            <a id="noactive">
                                ...
                            </a>
                            <?php for($x = $start_pagination; $x <= $end_pagination; $x++): ?>
                            <a id="active<?php echo $x?>" href='?page=<?php echo $x; ?>'>
                                <?php echo $x; ?>
                            </a>
                            <?php endfor; ?>
                            <a id="noactive">
                                ...
                            </a>
                            <a id="active<?php echo $total_page?>" href='?page=<?php echo $total_page; ?>'>
                                <?php echo $total_page; ?>
                            </a>
                            <a id="active<?php echo $page+1?>" href='?page=<?php echo $page+1; ?>'>
                                next
                            </a>
                        <?php } elseif($page > ($endPagination-1)) { ?>
                            <?php 
            $start_inEndPagination = ($total_page - 5);    
        ?>
                            <?php if($page == $lastPage) { ?>
                            <a id="active<?php echo $page-1?>" href='?page=<?php echo $page-1; ?>'>
                                prev
                            </a>
                            <a id="active<?php echo $firstPage?>" href='?page=<?php echo $firstPage; ?>'>
                                <?php echo $firstPage; ?>
                            </a>
                            <a id="noactive">
                                ...
                            </a>
                            <?php for($x = $start_inEndPagination; $x <= $total_page; $x++): ?>
                            <a id="active<?php echo $x?>" href='?page=<?php echo $x; ?>'>
                                <?php echo $x; ?>
                            </a>
                            <?php endfor; ?>
                            <a id="noactive">
                                next
                            </a>
                        <?php } else {  ?>
                            <a id="active<?php echo $page-1?>" href='?page=<?php echo $page-1; ?>'>
                                prev
                            </a>
                            <a id="active<?php echo $firstPage?>" href='?page=<?php echo $firstPage; ?>'>
                                <?php echo $firstPage; ?>
                            </a>
                            <a id="noactive">
                                ...
                            </a>
                            <?php for($x = $start_inEndPagination; $x <= $total_page; $x++): ?>
                            <a id="active<?php echo $x?>" href='?page=<?php echo $x; ?>'>
                                <?php echo $x; ?>
                            </a>
                            <?php endfor; ?>
                            <a id="active<?php echo $page+1?>" href='?page=<?php echo $page+1; ?>'>
                                next
                            </a>
                            <?php } ?>
                        <?php } else { ?>
                            <?php if($page == $firstPage) { ?>
                            <a id="noactive">
                                prev
                            </a>
                            <?php for($x = 1; $x <= $paginationRows; $x++): ?>
                            <a id="active<?php echo $x?>" href='?page=<?php echo $x; ?>'>
                                <?php echo $x; ?>
                            </a>
                            <?php endfor; ?>
                            <a id="noactive">
                                ...
                            </a>
                            <a id="active<?php echo $total_page?>" href='?page=<?php echo $total_page; ?>'>
                                <?php echo $total_page; ?>
                            </a>
                            <a id="active<?php echo $page+1?>" href='?page=<?php echo $page+1; ?>'>
                                next
                            </a>
                        <?php } else { ?>
                            <a id="active<?php echo $page-1?>" href='?page=<?php echo $page-1; ?>'>
                                prev
                            </a>
                            <?php for($x = 1; $x <= $paginationRows; $x++): ?>
                            <a id="active<?php echo $x?>" href='?page=<?php echo $x; ?>'>
                                <?php echo $x; ?>
                            </a>
                            <?php endfor; ?>
                            <a id="noactive">
                                ...
                            </a>
                            <a id="active<?php echo $total_page?>" href='?page=<?php echo $total_page; ?>'>
                                <?php echo $total_page; ?>
                            </a>
                            <a id="active<?php echo $page+1?>" href='?page=<?php echo $page+1; ?>'>
                                next
                            </a>
                            <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="row footernya">
                            <div class="col-4">
                                <ul class="penjelasanWarna">
                                    <p class="judulPenjelasanWarna">Penjelasan Warna :</p>
                                    <li>
                                        <div class="penjelasanWarna-container">
                                            <div class="colorContainerSkip"></div>
                                            <p>Bisa Menjadi WatchList</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="penjelasanWarna-container">
                                            <div class="colorContainerSell"></div>
                                            <p>direkomendasikan untuk dijual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="penjelasanWarna-container">
                                            <div class="colorContainerBuy"></div>
                                            <p>direkomendasikan untuk dibeli</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-8" >
                                <p class="textFooter">Design and Developed by
                                    <span>SpaceCapt Tech Industry</span>
                                    @2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Optional JavaScript; choose one of the two! -->

        <script>
            var x = document.getElementById("active<?php echo $page?>");
            x
                .classList
                .add("active");
        </script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>

</html>
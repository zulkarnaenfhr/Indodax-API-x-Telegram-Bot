<?php 
    $sumber = "https://indodax.com/api/tickers";
    $konten = file_get_contents($sumber);
    $data = json_decode($konten, true);
?>

<?php 
    // pagination
    $page = !isset($_GET['page']) ? 1 : $_GET['page'];
    $limitData = 10;
    $offset = ($page - 1) * $limitData; 
    $datanya = $data['tickers'];
    $total_coin = count($data['tickers']);
    $total_page = ceil($total_coin / $limitData);
    $final =array_splice($datanya,$offset,$limitData);
    $limitPagination=2;
    $paginationRows=5;
    $endPagination= $total_page - $limitPagination;
    $firstPage = 1;
    $lastPage = $total_page;
?>

<?php 
    header( "refresh:10" );
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- link css navbar  -->
    <link rel="stylesheet" href="style.css">
    <title>Homepage Indodax API Website</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a id="homeBrand" class="navbar-brand" href="">Indodax API x Kelompok 7</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="navbar-menu" class="nav-link active" aria-current="page"
                            href="sendNotificationMaster.php">Message status bot telegram</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="liveMarket">
            <div class="container-fluid">
                <div class="container">
                    <p class="liveMarket-Title">Cryptocurrency x Indodax API Homepage</p>
                    <div class="row">
                        <div class="col-6 indicatorLeftSection">
                            <p><span class="liveMarket-Time" id="date"></span> <span class="liveMarket-Time"
                                    id="month"></span> <span class="liveMarket-Time" id="year"></span>,
                                <span class="liveMarket-Time" id="hours"></span>.<span class="liveMarket-Time"
                                    id="minute"></span>.<span class="liveMarket-Time" id="second"></span>
                            </p>
                        </div>
                        <div class="col-6 indicatorRightSection">
                            <a href="liveCryptoMarket.html">
                                <button class="spaceCaptButton">View Live Market</button>
                            </a>
                        </div>
                    </div>
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
                        </tr>
                        <?php 
                            $nomor = $offset+1;
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
                                <?php echo $value['last'] ?>
                            </th>
                            <th class="tableBawah">
                                <?php echo $value['high'] ?>
                            </th>
                            <th class="tableBawah">
                                <?php echo $value['low'] ?>
                            </th>
                            <th class="tableBawah">
                                <?php echo $value['sell'] ?>
                            </th>
                            <th class="tableBawah">
                                <?php echo $value['buy'] ?>
                            </th>
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
                </div>
            </div>
        </section>
        <section id="footer">
            <p class="textFooter">Design and Developed by <span>SpaceCapt Tech Industry</span> @2021</p>
        </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        var x = document.getElementById("active<?php echo $page?>");
        x.classList.add("active");
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
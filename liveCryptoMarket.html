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
    <title>Live Cryptocurrency Market</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a id="homeBrand" class="navbar-brand" href="bigBonxTelegramHomepage.php">BigBon API x Kelompok 7</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="navbar-menu" class="nav-link active" aria-current="page" href="sendNotificationMaster.php">Message status bot
                            telegram</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section id="liveMarket">
            <div class="container-fluid">
                <div class="container">
                    <p class="liveMarket-Title">Cryptocurrency Live Market using Bigbon API</p>
                    <div class="row">
                        <div class="col-6 indicatorLeftSection">
                            <p><span class="liveMarket-Time" id="date"></span> <span class="liveMarket-Time"
                                    id="month"></span> <span class="liveMarket-Time" id="year"></span>,
                                <span class="liveMarket-Time" id="hours"></span>.<span class="liveMarket-Time"
                                    id="minute"></span>.<span class="liveMarket-Time" id="second"></span>
                            </p>
                        </div>
                        <div class="col-6 indicatorRightSection">
                            <a href="bigBonxTelegramHomepage.php">
                                <button class="spaceCaptButton">Back To HomePage</button>
                            </a>
                        </div>
                    </div>

                    <table id="tablenya" class="tableOutput">
                        <script>
                            let htmlJudulSection = document.getElementById("tablenya");
                            let html = '';
                            fetch('https://api.bingbon.com/api/v1/market/symbols').then(function (response) {
                                return response.json();
                            }).then(function (data) {
                                let htmlJudul = `<tr class="tableJudul">
                                                    <th class="tableNomor">No</th>
                                                    <th class="tableAsset">Asset</th>
                                                    <th class="tablePair">Pair</th>
                                                    <th class="tableLast">Last Price</th>
                                                    <th class="tableHigh">High</th>
                                                    <th class="tableLow">Low</th>
                                                    <th class="tableLastLow">H-Last</th>
                                                    <th class="tableLastHigh">Last-L</th>
                                                </tr>`
                                html += htmlJudul
                                for (let i = 1; i < Object.keys(data.data.result).length; i++) {
                                    let htmlFunction = `<tr>
                                                            <th class="tableBawah tableNomor" id="tableNomor${i}"></th>
                                                            <th class="tableBawah tableAsset" id="tableAsset${i}"></th>
                                                            <th class="tableBawah tablePair" id="tablePair${i}"></th>
                                                            <th class="tableBawah tableLast" id="tableLast${i}"></th>
                                                            <th class="tableBawah tableHigh" id="tableHigh${i}"></th>
                                                            <th class="tableBawah tableLow" id="tableLow${i}"></th>
                                                            <th class="tableBawah tableLastLow" id="tableLastLow${i}"></th>
                                                            <th class="tableBawah tableLastHigh" id="tableLastHigh${i}"></th>
                                                        </tr>`;
                                    html += htmlFunction;
                                    htmlJudulSection.innerHTML = html;
                                }
                                setInterval(function () {
                                    fetch('https://api.bingbon.com/api/v1/market/symbols').then(function (response) {
                                        return response.json()
                                    }).then(function (data) {
                                        for (let i = 1; i < Object.keys(data.data.result).length; i++) {
                                            tableNomor = document.getElementById("tableNomor" + i)
                                            tableAsset = document.getElementById("tableAsset" + i)
                                            tablePair = document.getElementById("tablePair" + i)
                                            tableLast = document.getElementById("tableLast" + i)
                                            tableHigh = document.getElementById("tableHigh" + i)
                                            tableLow = document.getElementById("tableLow" + i)
                                            tableLastLow = document.getElementById("tableLastLow" + i)
                                            tableLastHigh = document.getElementById("tableLastHigh" + i)

                                            let isLastHigh = data.data.result[i].high - data.data.result[i].last_price;
                                            isLastHigh = isLastHigh.toFixed(4);

                                            let isLastLow = data.data.result[i].last_price - data.data.result[i].low;
                                            isLastLow = isLastLow.toFixed(4);

                                            tableNomor.innerHTML = `${i}`;
                                            tableAsset.innerHTML = `${data.data.result[i].base_currency}`;
                                            tablePair.innerHTML = `${data.data.result[i].quote_currency}`;
                                            tableLast.innerHTML = `${data.data.result[i].last_price}`;
                                            tableHigh.innerHTML = `${data.data.result[i].high}`;
                                            tableLow.innerHTML = `${data.data.result[i].low}`;
                                            tableLastLow.innerHTML = isLastHigh;
                                            tableLastHigh.innerHTML = isLastLow;
                                        }
                                    })
                                }, 1000);
                            })
                        </script>
                    </table>
                </div>
            </div>
        </section>
        <section id="footer">
            <p class="textFooter">Design and Developed by <span>SpaceCapt Tech Industry</span> @2021</p>
        </section>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
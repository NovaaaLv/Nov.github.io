<!DOCTYPE html>
<html>
<head>
    <title>Proses Order</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .card-img img {
            width: 282px;
        }


        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            width: 300px;
            margin: 200px auto;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['orderName'], $_POST['orderValue'], $_POST['orderText'], $_POST['trailer_link'], $_POST['update_link'], $_POST['gameplay_link'])) {
    $orderValue = $_POST['orderValue'];
    $orderName = $_POST['orderName'];
    $orderText = $_POST['orderText'];
    $trailer_link = $_POST['trailer_link'];
    $update_link = $_POST['update_link'];
    $gameplay_link = $_POST['gameplay_link'];
} else {
    $orderValue = '';
    $orderName = '';
    $orderText = '';
    $trailer_link = '';
    $update_link = '';
    $gameplay_link = '';
}
?>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo isset($_POST['pict']) ? $_POST['pict'] : ''; ?>"
                alt="..."/>
        </div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">
                <?php
                echo "$orderName";
                ?>
            </h1>
            <p>
                <?php
                echo "$orderText";
                ?>
            </p>
            <p class="text-muted">
                <?php
                echo "Harga : $orderValue";
                ?>
            </p>
            <!-- Tambahkan tombol "BUY" -->
            <a class="btn btn-primary" href="#!" id="buyButton">BUY</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0" style="font-size: 25px">Gameplay</p>
        </div>
    </div>
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Trailer</h2>
                    <div class="card-img">
                        <img src="<?php echo isset($_POST['trailer']) ? $_POST['trailer'] : ''; ?>" alt="" />
                    </div>
                    <p class="card-text">
                        Trailer dari Game <?php
                        echo "$orderName";
                        ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-sm" href="<?php
                    echo "$trailer_link";
                    ?>">Tonton</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">New Update</h2>
                    <div class="card-img">
                        <img src="<?php echo isset($_POST['update']) ? $_POST['update'] : ''; ?>" alt="">
                    </div>
                    <p class="card-text">
                        Updatean terbaru dari game <?php
                        echo "$orderName";
                        ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-sm" href="<?php
                    echo "$update_link";
                    ?>">Tonton</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Gameplay</h2>
                    <div class="card-img">
                        <img src="<?php echo isset($_POST['gameplay']) ? $_POST['gameplay'] : ''; ?>" alt="">
                    </div>
                    <p class="card-text">
                        Gampelay dari Game <?php
                        echo "$orderName";
                        ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary btn-sm" href="<?php
                    echo "$gameplay__link";
                    ?>">Tonton</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan popup -->
<div id="popup" class="modal">
    <div class="modal-content">
        <p>Coming soon</p>
        <button id="closePopup">OK</button>
    </div>
</div>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">
            Copyright &copy; Your Website 2023
        </p>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script>
    // Fungsi untuk menampilkan popup
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
    }

    // Fungsi untuk menyembunyikan popup
    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
    }

    // Tambahkan event listener ke tombol "BUY" untuk menampilkan popup
    var buyButton = document.getElementById("buyButton");
    buyButton.addEventListener("click", showPopup);

    // Tambahkan event listener ke tombol "OK" di dalam popup untuk menyembunyikan popup
    var closePopupButton = document.getElementById("closePopup");
    closePopupButton.addEventListener("click", hidePopup);
</script>
</body>
</html>

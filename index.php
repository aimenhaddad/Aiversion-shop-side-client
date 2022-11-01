<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skycode_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM produits";
$result = $conn->query($sql);



$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />  
        <meta name="author" content="" />
        <title>Skycode-dz Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="Product-table.php">
                    <img src="assets/logo.svg" width="100" height="30" class="d-inline-block align-top" alt="">
                </a>
                <div>
                    <form class="form-inline my-2 my-lg-0 ">
                        <div>
                            <span>  Skycode-dz Shop</span>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Skycode-dz Shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">The best from the best.</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row justify-content-center">

                <?php
                        if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-sm-12 col-md-4 col-xl-3 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src=<?php echo $row["image"]?> alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $row["Name_Pro"]?></h5>
                                    <!-- Product price-->
                                  <?php echo $row["Price"]?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                

                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="product_detail_page.php?id=<?php echo  $row["ID_Pro"] ?>">View options</a></div>
                            </div>
                        </div>
                    </div>
                 <?php 
                 }}?>   
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Skycode-dz 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

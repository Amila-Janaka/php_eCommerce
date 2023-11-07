<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link  -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a href="#">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Pages/products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Total Price <i class="fa fa-shopping-cart"
                                aria-hidden="true"></i></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success me-2" type="submit">Search</button>
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>
    </div>
    <!-- Navbar start -->
    <div class="container-fluid p-0">
        <!-- firts child  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/White Flower.jpg" alt="logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcomer guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child  -->

        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>
        <!-- third child  -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
                <div>
                    <a href="#">
                        <img src="../img/Ramboda View.jpg" alt="" class="admin_image">
                    </a>
                    <p class="text-light text-center">
                        Admin Name
                    </p>
                </div>
                <div class="button text-center mx-3">
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?insert_products"
                            class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?view_products"
                            class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?insert_category"
                            class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?view_categories"
                            class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?insert_brand"
                            class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?view_brands"
                            class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?all_orders"
                            class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?all_payments"
                            class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?list_users.php"
                            class="nav-link text-light bg-info my-1">List Uers</a></button>
                    <button class="btn btn-info my-1 mx-1"><a href="./admin.php?logout.php"
                            class="nav-link text-light bg-info my-1">Logout</a></button>

                </div>
            </div>
        </div>
        <!-- fourth child-->
        <div class="container my-5">
            <?php
            if (isset($_GET['insert_category'])) {
                include('./sub_admin_pages/insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('./sub_admin_pages/insert_brands.php');
            }
            if (isset($_GET['insert_products'])) {
                include('./sub_admin_pages/insert_products.php');
            }
            if (isset($_GET['view_products'])) {
                include('./sub_admin_pages/view_products.php');
            }
            if (isset($_GET['view_categories'])) {
                include('./sub_admin_pages/view_categories.php');
            }
            if (isset($_GET['view_brands'])) {
                include('./sub_admin_pages/view_brands.php');
            }
            if (isset($_GET['all_orders'])) {
                include('./sub_admin_pages/all_orders.php');
            }
            if (isset($_GET['list_users'])) {
                include('./sub_admin_pages/list_users.php');
            }
            if (isset($_GET['logout'])) {
                include('./sub_admin_pages/logout.php');
            }
            ?>
        </div>

    </div>
    <!-- Navbar end -->
    <!-- last child  -->
    <div class="bg-dark text-center footer">
        <p style="color: whitesmoke;">Amila Janaka</p>
        <p>git pushed</p>
    </div>
    <!-- end of last child  -->


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
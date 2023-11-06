<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link  -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
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
                    <button><a href="./admin.php?insert_category" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="./admin.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">List Uers</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>

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
            ?>
        </div>
        
    </div>
    <!-- Navbar end -->
    <!-- last child  -->
    <div class="bg-dark text-center p-4 footer">
        <p style="color: whitesmoke;">Amila Janaka</p>
        <p>git pushed</p>
    </div>
    <!-- end of last child  -->


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
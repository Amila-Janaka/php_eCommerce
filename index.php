<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css link -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- navbar -->
    <div class="navBar" class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a href="#">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- second child  -->
    <div class="row">
        <!-- side navbar -->
        <div class="col-2 bg-secondary text-center p-0">
            <ul class="navbar-nav me-auto">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">Delevery Brands</a>
                </li>
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">Brands 1</a>
                </li>
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">Brands 2</a>
                </li>
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">Brands 3</a>
                </li>
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light">Brands 4</a>
                </li>
            </ul>
        </div>
        <!-- item side  -->
        <div class="col-10 text-center">
            <h1>Items</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/White Flower.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/Night Sky 2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/cropped.jpg " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/White Flower.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/Night Sky 2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/cropped.jpg " class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of second child  -->

    <!-- last child  -->
    <div class="bg-dark text-center p-4">
        <p style="color: whitesmoke;">Amila Janaka</p>
    </div>
    <!-- end of last child  -->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
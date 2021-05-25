<header class="topbar bg-transparent">
    <div class="container-fluid my-2 ">
        <div class="row align-items-center">
            <div class="col-3  d-none d-lg-block ">
                <h5 href="index.html">My Eshop.</h5>
                <small>It's never been so easy </small>
            </div>
            <div class="col-5  d-none d-lg-block ">
                <div class="input-group ">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Setect Category <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-laptop"></i> Informatics </a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"></i> Clothing</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-car"></i> Vehicules</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-home"></i> Home Deco </a></li>
                    </ul>
                    <input type="text" class="form-control " placeholder="Search Article Here..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="col-4  d-none d-lg-block ">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">
                        <!-- Button trigger modal for Login-->
                        <button type="button" class="btn btn-light  " data-bs-toggle="modal" data-bs-target="#ModalLogin">
                            <i title="Login" class="fa fa-sign-in-alt "></i> Login
                        </button>
                        <?php
                        include('login.php');
                        ?>
                    </div>
                    <div class="p-2 bd-highlight">
                        <!-- Button trigger modal for Register-->
                        <button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#ModalRegister">
                            <i title="Register" class="fa fa-user-alt "></i> Register
                        </button>
                        <?php
                        include('register.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="tab bg-dark py-2 ">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                    <div class="col-5 d-lg-inline d-none">
                        <button class="btn btn-light btn-lg btn_2 " type="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-bars px-2" aria-hidden="true"></i>All
                            Category
                            </i></button>
                        <ul class="dropdown-menu w-25">
                            <li><a class="dropdown-item" href="#"><i class="fa fa-laptop"></i>
                                    Informatics </a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-tshirt"></i>
                                    Clothing</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-car"></i>
                                    Vehicules</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-home"></i> Home
                                    Deco </a></li>
                        </ul>
                    </div>
                    <h4 class="navbar-brand d-lg-none d-block" href="index.html">My Eshop.</h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Best Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item d-lg-none d-block">
                                <a class="nav-link">Login</a>
                            </li>
                            <li class="nav-item d-lg-none d-block">
                                <a class="nav-link">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
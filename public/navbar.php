   <!-- Bootstrap NavBar -->
   <nav class="navbar navbar-expand-md navbar-light light-blue lighten-2">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" id="brand" href="../public/test.php">Shop Inventory System</a> 
    <div class="collapse navbar-collapse" id="navbar-list-4">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <!-- <a class="dropdown-item" href="#">Edit Profile</a> -->
                <a class="dropdown-item" href="register.php">Log Out</a>
                </div>
         </ul>
    </div>
</nav>  
<!-- NavBar END -->
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed" style="background-color: #333333;">
                <small>MAIN MENU</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="../public/test.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                </div>
            </a>
    
            <a href="../public/test.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
            <a href="../public/inventory.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Inventory</span>
                </div>
            </a>

<<<<<<< HEAD
            <a href="../public/test.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
=======
            <a href="../public/stock.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
>>>>>>> d4e642b864e0612e8963910660f77510e3087d86
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Stocks</span>
                </div>
            </a>

<<<<<<< HEAD
            <a href="../public/test.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
=======
            <a href="../public/cashflow.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
>>>>>>> d4e642b864e0612e8963910660f77510e3087d86
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                    <span class="menu-collapsed">Cash Flow</span>
                </div>
            </a>

            <a href="#submenu5" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                    <span class="menu-collapsed">Reports</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu5' class="collapse sidebar-submenu">
                <a href="sales-rep.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Sales</span>
                </a>
                <a href="stock-rep.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Stocks</span>
                </a>
            </div>
           
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed" style="background-color: #333333;">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
<<<<<<< HEAD
            <a href="../public/test.php" class="bg-dark list-group-item list-group-item-action">
=======
            <a href="../public/customers.php" class="bg-dark list-group-item list-group-item-action">
>>>>>>> d4e642b864e0612e8963910660f77510e3087d86
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Customers</span>
                </div>
            </a>

            <a href="../public/supplier.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Suppliers</span>
                </div>
            </a>

            <a href="#submenu8" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-clipboard-list fa-fw mr-3"></span>
                    <span class="menu-collapsed">Products</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu8' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Add Product</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Categories</span>
                </a>
            </div>
            
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed" style="background-color: #333333;"></li>
            <!-- /END Separator -->
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>
            <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Collapse</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
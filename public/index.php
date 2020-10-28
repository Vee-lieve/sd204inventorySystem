<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../src/css/index.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<style>
#logo{
    margin-left: 12px;
}

</style>

<body>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#"><i class="fas fa-sign-out-alt tmy-icon"></i>Logout</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="#">Notifications</a></li>
    <li class="divider"></li>
    <li><a href="#">More</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper cyan">
      <a href="#" class="brand-logo" id="logo">IMS</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="#"><i class="material-icons dropdown-button" data-activates="dropdown2">notifications</i></a></li> -->
        <li><a href="#"><i class="material-icons dropdown-button" data-activates="dropdown1">account_circle</i></a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <ul id="slide-out" class="side-nav fixed main-side">
    <li class="user-li"><div class="user-view">
      <div class="background">
      </div>
      <p class="no-margin"><span class="white-text email">Admin</span></p>
    </div></li>
    <li class="lone">
      <a href="#"><i class="fas fa-home my-icon"></i>Dashboards</a></li>
      <div class="divider"></div>
    </li>

    <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-calculator my-icon"></i>Inventory</a></li>
    <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-clipboard my-icon"></i>Stock</a></li>
    <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-dollar-sign my-icon"></i>Cash Flow</a></li>
    <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-users my-icon"></i>Suppliers</a></li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="lone">   
    <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-id-card my-icon"></i>Customers</a></li>
          </div>
          <!-- <div class="collapsible-body drop-body">
            <ul class="drop-body">
              <li><a class="waves-effect" href="#">Customer Management</a></li>
              <li><a class="waves-effect" href="#">Document Types</a></li>
            </ul>
          </div> -->
        </li>
      </ul>
    </li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fas fa-shopping-basket my-icon"></i>Products<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body">
            <ul>
              <li><a class="waves-effect" href="#">Add Product</a></li>
              <li><a class="waves-effect" href="#">Categories</a></li>
              <!-- <li><a class="waves-effect" href="#">Measurements</a></li> -->
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fas fa-clipboard-list my-icon"></i>Reports<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body">
            <ul>
              <li><a class="waves-effect" href="#">Sales Report</a></li>
              <li><a class="waves-effect" href="#">Stock Report</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <!-- <li class="lone"><a class="waves-effect" href="#"><i class="fas fa-clipboard-list my-icon"></i>Reports</a></li> -->
  </ul>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../src/js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script></script>
  <!-- fas fa-id-card my-icon -->
</body>
</html>
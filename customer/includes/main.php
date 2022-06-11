</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest";
         }
          else
          {
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>


        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Register</a>';
          }
            else
            {
                echo '<a href="my_account.php?my_orders" class="login__link">My Account</a>';
            }
?>
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Sign In</a>';
          }
            else
            {
                echo '<a href="../logout.php" class="login__link">Log out</a>';
            }
?>

          </li>
        </ul>


      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <img class="logo__img" src="images/trlogo.png" alt="Image logotype" width="80" height="19">
            <img class="logo__img" src="images/textlogo.png" alt="Text logotype" width="150" height="19">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="../index.php" style="color:#860945;font-weight:bold;">
                S3.SkinMe
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" target = '_blank' href="http://wa.me/601117950194">
                Chat with Us
              </a>
            </li>


            <li class="categories__item">
              <a class="categories__link categories__link--active" href="../shop.php">
                Shop
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../about.php">
                About us
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="my_account.php?my_orders">
                My Account
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>

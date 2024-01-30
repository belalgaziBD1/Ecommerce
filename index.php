<?php 
include('include/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bazarbd</title>
    <!--------CSS Custom ---------> 
    <link rel='stylesheet'  href='css/style.css?v=<?=$version ?>'>

    <!--------CSS Icon Boxicons ---------> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--------CSS fontwesome --------->
    <link rel='stylesheet'  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
</head>
<body>
<!------Header Start------>
<header class="header">
    <a href="#" class="logo"><i class='bx bx-cart-alt'> </i>Bazarbd</a>
   
    <nav class="navber">
    <a href="#">Home</a>
    <a href="#">Feature</a>
    <a href="#">Products</a>
    <a href="#">Categoriecs</a>
    <a href="#">Blogs</a>
    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="manu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="ct-btn"></div>
        <div class="fas fa-user" id="user-btn"></div>
    </div>
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Search here....">
        <label for="search-box" class="fa fa-search"></label>
    </form>
    <div class="shopping-cart" >
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="images/1 (1).jpg"alt="">
            <div class="content">
                <h3>water malon</h3>
                <span class="price">$4.99</span>
                <span class="qty">Qty:2</span>

            </div>
        </div>

        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="images/1 (5).jpg"alt="">
            <div class="content">
                <h3>water malon</h3>
                <span class="price">$4.99</span>
                <span class="qty">Qty:2</span>

            </div>
        </div>
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="images/1 (6).jpg"alt="">
            <div class="content">
                <h3>water malon</h3>
                <span class="price">$4.99</span>
                <span class="qty">Qty:2</span>

            </div>
        </div>
        <div class="total">Total:19.99</div>
        <a href="#" class="btn">Checkout</a>


    </div>

    <form action="" class="login-form">
        <h3>Login Now</h3>
        <input type="username" placeholder="Enter User Name" class="boxfil">
        <input type="password" placeholder="Enter Password" class="boxfil">
        <button type="submit" class="btn">login Now</button>
        <P>Forget your password<a>Click Here!</a> </P>
        <P>Don't have an account ?<a>Signup</a> </P>
    </form>
    
</header>
    
 <!--------JS Custom --------->
 
 <script type="text/javascript" src='js/main.js?v=<?=$version ?>'></script>
</body>
</html>
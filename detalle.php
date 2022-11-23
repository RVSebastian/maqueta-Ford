<?php include'./includes/components/header.php';?>



<div class="login-form-container">
    <span id="close-login-form" class="fas fa-times"></span>

    <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn-main">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn-main"> google </a>
            <a href="#" class="btn-main"> facebook </a>
        </div>
        <p> don't have an account <a href="#">create one</a> </p>
    </form>
</div>
<?php include'./includes/components/carrouselb.php'; ?>
<section class="icons-container">
    <div class="icons" style="border-radius: 10px">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons"  style="border-radius: 10px">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons"  style="border-radius: 10px">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons" style="border-radius: 10px">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>




<?php include'./includes/components/footer.php';?>
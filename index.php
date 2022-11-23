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

<?php include'./includes/components/carrouselb.php';?>



<section class="vehicles" id="vehicles">
    <h1 class="heading">Los mas <span>vendidos</span> </h1>
    <?php include'./includes/components/card.php';?>
    <?php include'./includes/components/card.php';?>
    <?php include'./includes/components/card.php';?>
</section>

<?php include'./includes/components/marcas.php';?>

<section class="vehicles" id="vehicles">
    <?php include'./includes/components/repuestos/card.php';?>
</section>

<section class="services" id="services">
    <style>
    .btn-main {
        display: inline-block;
        margin-top: 1rem;
        padding: .8rem 3rem;
        background: var(--main);
        color: var(--white);
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: .5rem;
        font-weight: 500;
        text-align: center;
    }

    .btn-main:hover {
        background: var(--white);
    }
    </style>
    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn-main"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn-main"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn-main"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn-main"> read more</a>
        </div>



        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn-main"> read more</a>
        </div>

    </div>

</section>



<section class="contact" id="contact">

    <h1 class="heading">Contactanos</h1>

    <div class="row">

        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>Sugerencias o reportes</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn-main">
        </form>

    </div>

</section>


<?php include'./includes/components/footer.php';?>
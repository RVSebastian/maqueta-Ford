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
    <h1 class="heading">Los mas vendidos</h1>
    <?php include'./includes/components/card.php';?>
    <h1 class="heading">Usados</h1>
    <?php include'./includes/components/card.php';?>
    <h1 class="heading">Motocicletas</h1>
    <?php include'./includes/components/card.php';?>
</section>

<section class="vehicles" id="repuestos">
<h1 class="heading">Repuestos</h1>
    <?php include'./includes/components/repuestos/card.php';?>
</section>
<?php include'./includes/components/marcas.php';?>

<section class="contact" id="contact">

    <h1 class="heading">Contactanos</h1>

    <div class="row">

        <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin"
            allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>Sugerencias o reportes</h3>
            <input type="text" placeholder="Nombre completo" class="box">
            <input type="text" placeholder="Telefono" class="box">
            <input type="email" placeholder="Correo electronico" class="box">
            <textarea placeholder="Mensaje o reporte" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn btn-dark">
        </form>

    </div>

</section>


<?php include'./includes/components/footer.php';?>
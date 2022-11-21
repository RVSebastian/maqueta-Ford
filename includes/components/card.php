<style>
.card {
    margin: 30px;
    height: 300px;
    background-color: white;
    border: 0;
    border-radius: 4px;
    cellAlign: center;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 18px 50px -10px;
}

.card img {
    margin-left: auto;
    margin-right: auto;
}

.card:hover {
    transform: translatey(-15px);
    box-shadow: #2c3b6d 0px 20px 30px -3px;
}

.card .precio {
    background-color: #EEEE;
    color: black
}

.card-carousel{
    height: 20%;
}
</style>

<!-- hola grr el que lea esto es mongol -->
<div class="card-carousel"
    data-flickity='{ "cellAlign": "left", "contain": true, "prevNextButtons": false, "pageDots": false  }'>
    <div class="card vehicles carousel-cell" style="width: 30rem;">
        <img src="./image/car-1.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4>
                    <span class="badge text-bg-dark">300.000km</span>
                    <span class="badge text-bg-dark">4x4</span>
                    <span class="badge text-bg-dark">1.8V</span>
                </h4>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
            <h3>Precio estimado</p>

        </div>
    </div>
    <div class="card vehicles carousel-cell" style="width: 30rem;">
        <img src="./image/car-2.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4><span class="badge text-bg-dark">300.000km</span> <span class="badge text-bg-dark">4x4</span> <span
                        class="badge text-bg-dark">1.8V</span>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
                <h3>Precio estimado</p>
        </div>
    </div>
    <div class="card vehicles carousel-cell" style="width: 30rem;">
        <img src="./image/car-3.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4><span class="badge text-bg-dark">300.000km</span> <span class="badge text-bg-dark">4x4</span> <span
                        class="badge text-bg-dark">1.8V</span>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
                <h3>Precio estimado</p>
        </div>
    </div>
    <div class="card vehicles carousel-cell" style="width: 30rem;">
        <img src="./image/car-4.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4><span class="badge text-bg-dark">300.000km</span> <span class="badge text-bg-dark">4x4</span> <span
                        class="badge text-bg-dark">1.8V</span>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
                <h3>Precio estimado</p>
        </div>
    </div>
    <div class="card vehicle carousel-cells" style="width: 30rem;">
        <img src="./image/car-5.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4><span class="badge text-bg-dark">300.000km</span> <span class="badge text-bg-dark">4x4</span> <span
                        class="badge text-bg-dark">1.8V</span>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
                <h3>Precio estimado</p>
        </div>
    </div>
    <div class="card vehicles carousel-cell" style="width: 30rem;">
        <img src="./image/car-6.png" class="card-img-top" style="width: 23rem; height:  13rem" alt="...">
        <div class="card-body">
            <h2 class="card-title">Card title</h5>
                <h4><span class="badge text-bg-dark">300.000km</span> <span class="badge text-bg-dark">4x4</span> <span
                        class="badge text-bg-dark">1.8V</span>
            </h2>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <div class="bg-dark text-light text-center pt-2">
            <h3>$40.000.0000 COP</h4>
                <h3>Precio estimado</p>
        </div>
    </div>

</div>

<script>
var elem = document.querySelector('.card-carrousel');
var flkty = new Flickity(elem, {
    // options
    cellAlign: 'center',
    contain: true,
    autoPlay: 1500,
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity('.card-carrousel', {
    // options
});
</script>
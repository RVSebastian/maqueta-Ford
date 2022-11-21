<style>

.carousel-cell {
  width: 100%;
  height: 50rem;
  margin-right: 10px;
  border-radius: 5px;
}
</style>

<div class="container main-carousel" style="padding-top: 11rem; width: 100%; margin-bottom: 5rem"
    data-flickity='{ "cellAlign": "left", "contain": true, "prevNextButtons": false, "pageDots": false  }'>
    <div class="carousel-cell"> <img src="image/bannerp.png" alt=""></div>
    <div class="carousel-cell"> <img src="image/bannerp.png" alt=""></div>
    <div class="carousel-cell"> <img src="image/bannerp.png" alt=""></div>
</div>

<script>
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity(elem, {
    // options
    cellAlign: 'left',
    contain: true
});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity('.main-carousel', {
    // options
});
</script>

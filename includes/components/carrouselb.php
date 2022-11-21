<style>

.carousel-cell {
  width: 100%;
  
  margin-right: 10px;
  border-radius: 5px;
  display: flex;
  align-items: center;
  
}
.carrousel-img{
    min-width: 20%;
    min-height: 20%;
    max-width: 100
    ;
    max-height: 100%;
}
</style>

<div class="main-carousel" style="padding-top: 12rem; width: 100%; margin-bottom: 5rem"
    data-flickity='{ "cellAlign": "left", "contain": true, "prevNextButtons": "false", "pageDots": "false"  }'>
    <div class="carousel-cell"> <img class="carrousel-img" src="image/bannerp.png" alt=""></div>
    <div class="carousel-cell"> <img  class="carrousel-img"src="image/bannerp.png" alt=""></div>
    <div class="carousel-cell"> <img  class="carrousel-img"src="image/bannerp.png" alt=""></div>
</div>

<script>
var elem = document.querySelector('.main-carousel');
var flkty = new Flickity(elem, {
    // options
    cellAlign: 'left',
    contain: true,  

});

// element argument can be a selector string
//   for an individual element
var flkty = new Flickity('.main-carousel', {
    // options
});
</script>

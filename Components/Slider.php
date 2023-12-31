<?php
namespace Components;

class Slider {
    function __construct(...$imgs)
    {
        $this->Start();
        foreach($imgs as $img){
           $this->Page($img);
        }
        $this->Finish();
    }   

    private function Page($file){
        ?>
        <div class='carousel-item active'>
        <img src='./assets/img/slider/<?php echo "$file";?>' class='d-block w-100' alt="...">
        <div class='carousel-caption'>
          
        </div>
        
      </div>
      <?php
    }

    private function Start(){
        ?>
        <div id="carouselExample" class="carousel slide slider">
  <div class="carousel-inner">
        <?php
    }

    private function Finish(){
?>
  </div>
  <button class="carousel-control-prev" typse="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<?php
    }
}
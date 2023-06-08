<?php
class DestacadasCard
{
  public $imgSrc;
  public $imgAlt;
  public $price;
  public $bkgImgSrc;
  public $bkgImgAlt;

  public function __construct($imgSrc, $imgAlt, $price, $bkgImgSrc, $bkgImgAlt)
  {
    $this->imgSrc = $imgSrc;
    $this->imgAlt = $imgAlt;
    $this->price = $price;
    $this->bkgImgSrc = $bkgImgSrc;
    $this->bkgImgAlt = $bkgImgAlt;
  }

  public function display()
  {
    echo '<div class="col">';
    echo '<div class="destacadasCard">';
    echo '<img src="' . $this->imgSrc . '" alt="' . $this->imgAlt . '">';
    echo '<div class="infoContainer">';
    echo '<div class="price">' . $this->price . '</div>';
    echo '<a class="btn cartBtn" href="#" role="button">Agregar al carrito</a>';
    echo '</div>';
    echo '<img class="bkgCard" src="' . $this->bkgImgSrc . '" alt="' . $this->bkgImgAlt . '">';
    echo '</div>';
    echo '</div>';
  }
}

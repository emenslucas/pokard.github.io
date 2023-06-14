<?php
class DestacadasCard
{
  private $imgSrc;
  private $price;
  private $bkgImgSrc;

  public function __construct($imgSrc, $price, $bkgImgSrc)
  {
    $this->imgSrc = $imgSrc;
    $this->price = $price;
    $this->bkgImgSrc = $bkgImgSrc;
  }

  public function display()
  {
    echo '<div class="col">';
    echo '<div class="destacadasCard">';
    echo '<img class="imgCard" src="../img/cartas/' . $this->imgSrc . '" alt="">';
    echo '<div class="infoContainer">';
    echo '<div class="price">$' . $this->price . '</div>';
    echo '<a class="btn cartBtn" href="#" role="button">Agregar al carrito</a>';
    echo '</div>';
    echo '<img class="bkgCard" src="../img/cartas/' . $this->bkgImgSrc . '" alt="">';
    echo '</div>';
    echo '</div>';
  }
}

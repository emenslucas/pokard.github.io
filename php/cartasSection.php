<section id="cartas">
      <div class="container">
        <h2 class="text-center mb-5">Cartas Destacadas</h2>
      <div class="row">
      <?php
      require_once "php/DestacadasCard.php";

      $cards = [
        new DestacadasCard("img/card1.svg", "", "$1000", "img/card1.svg", ""),
        new DestacadasCard("img/card2.svg", "", "$1000", "img/card2.svg", ""),
        new DestacadasCard("img/card3.svg", "", "$1000", "img/card3.svg", ""),
      ];

      if (count($cards) % 2 == 0) {
        foreach ($cards as $card) {
          echo '<div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">';
          $card->display();
          echo "</div>";
        }
      } else {
        for ($i = 0; $i < count($cards) - 1; $i++) {
          echo '<div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">';
          $cards[$i]->display();
          echo "</div>";
        }

        echo '<div class="col-12 col-lg-4 mt-4 mb-4">';
        $cards[count($cards) - 1]->display();
        echo "</div>";
      }
      ?>

      </div>
      </div>
    </section>
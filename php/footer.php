<footer>
  <div class="container d-flex align-items-center justify-content-center w-100 h-100 gap-4">
    <a class="navbar-brand" href="#"><span>Pokard</span><img src="../img/favicon.svg" alt="Icono de Pokard" /></a>
    <span>©2023 Pokémon. ©1995 - 2023 Nintendo/Creatures Inc./GAME FREAK inc. TM, ®Nintendo.</span>
  </div>
</footer>

<script>
  let footer = document.querySelector('footer');
  let bodyHeight = document.body.scrollHeight;
  if (bodyHeight < window.innerHeight) {
    footer.style.position = 'absolute';
    footer.style.bottom = '0';
  }
</script>


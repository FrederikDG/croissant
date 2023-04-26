<style>
  .detail__background {
    background-image: url('https://cdn.akamai.steamstatic.com/steam/apps/<?php echo $game->game_code ?>/header.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    filter: blur(5px) grayscale(100%) brightness(0.5);
  }

  .detail__container {
    position: relative;
    z-index: 1;
  }

  .detail__color {
    background-color: black;
    filter: blur(0px) grayscale(100%) brightness(0.5);
  }
</style>
<!-- BACKGROUND -->

<div class="detail__background detail__color"></div>
<div class="detail__background"></div>

<!-- CONTENT -->

<div class="detail__container">
  <div class="detail__box nav__box">
    <nav>
      <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">&#11164 BACK</a>
    </nav>
  </div>
  <div class="detail__box name__box">
    <div class="detail__header">
      <h1 class="detail__name">
        <?php echo ($game->name) ?>
      </h1>

      <h2 class="detail__genre">
        <?php echo ($game->genre) ?>
      </h2>
    </div> <br>
    <p class="detail__description">
      <?php echo ($game->game_description) ?>
    </p>
  </div>
  <div class="detail__box price__box">
    <a href="<?php echo ($game->url) ?>">
      <img src="./assets/img/steamlogo.png" alt="steamlogo" width="300" height=auto>
      <p>
        $<?php echo ($game->price) ?>
      </p>
    </a>
  </div>
  <!-- <div class="detail__box suggestion__box">
    <h2>
      suggestions:
    </h2>

  </div>-->
  <div class="detail__box details__box">
    <img src="https://cdn.akamai.steamstatic.com/steam/apps/<?php echo ($game->game_code) ?>/header.jpg" alt="<?php ($game->name) ?>" width="auto" height="auto">
    <h2>
      <div class="summary__title">Developer:</div> <?php echo ($game->developer) ?>
    </h2>
    <h2>
      <div class="summary__title">Publisher:</div> <?php echo ($game->publisher) ?>
    </h2>
    <h2>
      <div class="summary__title">Achievements:</div> <?php echo ($game->achievements) ?>
    </h2>
    <h2>
      <div class="summary__title">Release Date:</div> <?php echo ($game->release_date) ?>
    </h2>
    <h2>
      <div class="summary__title">Languages:</div> <?php echo ($game->languages) ?>
    </h2>
    <h2>
      <div class="summary__title">Mature Content:</div> <?php echo ($game->mature_content) ?>
    </h2>
  </div>
</div>
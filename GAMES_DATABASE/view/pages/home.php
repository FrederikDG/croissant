<div class="home__container">
<header class="home__header">
  <div class="title__container">
<h1 class="main__title">STEAM GAMES</h1>
<h2 class="main__subtitle"><strong>DATABASE</strong></h2>
</div>
<form class="sorting__form" method="get" action="index.php?page=game#ranking">
            <label>
                <select name="sort_by">
                    <option value="rating" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'rating') {
                                                        echo ' selected';
                                                    } ?>>rating</option>

                </select>
            </label>
            <label>
                <select name="sorting">
                    <option value="asc" <?php if (!empty($_GET['sorting']) && $_GET['sorting'] == 'asc') {
                                            echo ' selected';
                                        } ?>>ascending</option>
                    <option value="desc" <?php if (!empty($_GET['sorting']) && $_GET['sorting'] == 'desc') {
                                                echo ' selected';
                                            } ?>>descending</option>
                </select>
            </label>
            <label>
                <select name="genre">
                <option value="asc" <?php if (!empty($_GET['sorting']) && $_GET['sorting'] == 'asc') {
                                            echo ' selected';
                                        } ?>>adventure</option>
                    <option value="desc" <?php if (!empty($_GET['sorting']) && $_GET['sorting'] == 'desc') {
                                                echo ' selected';
                                            } ?>>horror</option>
                </select>
            </label>
            <input type="submit">
        </form>
</header>
<main class="home__content">
  <div></div>
  <ul class="game__display"> 
  <?php 
foreach ($games as $game){
  echo('<ul class="game__box"><a class="game__content" href="index.php?page=detail&id=' . $game->id . '">
  <ul class="game__text">
  <li class="game__title">'. $game->name . '</li>
  <li class="game__developer">'. $game->developer . '</li>
  </ul>
  <li><img src="https://cdn.akamai.steamstatic.com/steam/apps/'. $game->game_code .'/header.jpg" alt="' . $game->name . '" width="auto" height="150px"></li>
  </a></ul>');
}
?>
  </ul>
</main>
<nav class="scroller__container">
    <ul class="page__scroller">
    <li <?php 
        if($currentPage == 0  || $currentPage == 1){
          echo('class="hide"');
        }else {
          echo('class="show"');
        }?> ><a  class="cycle__button"href="index.php?p=<?php echo(0); ?>" >&#11164&#11164</a></li>
        
      <li <?php 
        if($currentPage == 0){
          echo('class="hide"');
        }else {
          echo('class="show"');
        }?> ><a class="cycle__button" href="index.php?p=<?php echo($currentPage-1); ?>" >&#11164</a></li>

<li class="cycle__button"><?php echo($currentPage)?></li>

      <li <?php 
      if($currentPage == $totalPages-1){
        echo('class="hide"');
      }else{
        echo('class="show"');
      }
      ?> ><a class="cycle__button" href="index.php?p=<?php echo($currentPage+1);   ?>" >&#11166</a></li>

    <li <?php 
      if($currentPage == $totalPages-1){
        echo('class="hide"');
      }else{
        echo('class="show"');
      }
      ?> ><a class="cycle__button" href="index.php?p=<?php echo($totalPages-1);   ?>" >&#11166&#11166</a></li>
    </ul></nav></div>
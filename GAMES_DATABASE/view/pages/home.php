<div class="home__container">
  <header class="home__header">
    <div class="title__container">
      <h1 class="main__title">STEAM GAMES</h1>
      <h2 class="main__subtitle"><strong>DATABASE</strong></h2>s
    </div>
    <form class="sorting__form" method="get" action="index.php?page=home">
      <label>
        <select name="sort_by">
          <option value="" disabled selected>sort by</option>
          <option value="id" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'id') {
                                echo ' selected';
                              } ?>>id</option>
          <option value="name" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'name') {
                                  echo ' selected';
                                } ?>>name</option>
          <option value="developer" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'developer') {
                                      echo ' selected';
                                    } ?>>developer</option>
          <option value="publisher" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'publisher') {
                                      echo ' selected';
                                    } ?>>publisher</option>
          <option value="release_date" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'release_date') {
                                          echo ' selected';
                                        } ?>>release date</option>
          <option value="price" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'price') {
                                  echo ' selected';
                                } ?>>price</option>
          <option value="reviews" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'reviews') {
                                    echo ' selected';
                                  } ?>>reviews</option>
          <option value="achievements" <?php if (!empty($_GET['sort_by']) && $_GET['sort_by'] == 'achievements') {
                                          echo ' selected';
                                        } ?>>achievements</option>
        </select>
      </label>
      <label>
        <select name="direction">
          <option value="" disabled selected>sorting</option>
          <option value="asc" <?php if (!empty($_GET['direction']) && $_GET['direction'] == 'asc') {
                                echo ' selected';
                              } ?>>ascending</option>
          <option value="desc" <?php if (!empty($_GET['direction']) && $_GET['direction'] == 'desc') {
                                  echo ' selected';
                                } ?>>descending</option>
        </select>
      </label>
      <label>
        <select name="genre">
          <option value="" disabled selected>genre</option>
          <option value="all" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'all') {
                                echo ' selected';
                              } ?>>all</option>
          <option value="action" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'action') {
                                    echo ' selected';
                                  } ?>>action</option>
          <option value="adventure" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'adventure') {
                                      echo ' selected';
                                    } ?>>adventure</option>
          <option value="strategy" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'strategy') {
                                      echo ' selected';
                                    } ?>>strategy</option>
          <option value="indie" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'indie') {
                                  echo ' selected';
                                } ?>>indie</option>
          <option value="racing" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'racing') {
                                    echo ' selected';
                                  } ?>>racing</option>
          <option value="rpg" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'rpg') {
                                echo ' selected';
                              } ?>>RPG</option>
          <option value="free_to_play" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'free_to_play') {
                                          echo ' selected';
                                        } ?>>free to play</option>
          <option value="casual" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'casual') {
                                    echo ' selected';
                                  } ?>>casual</option>
          <option value="simulation" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'simulation') {
                                        echo ' selected';
                                      } ?>>simulation</option>
          <option value="valve" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'valve') {
                                  echo ' selected';
                                } ?>>valve</option>
          <option value="massively_multiplayer" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'massively_multiplayer') {
                                                  echo ' selected';
                                                } ?>>massively multiplayer</option>
          <option value="animation_&_modeling" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'animation_&_modeling') {
                                                  echo ' selected';
                                                } ?>>animation & modeling</option>
          <option value="utilities" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'utilities') {
                                      echo ' selected';
                                    } ?>>utilities</option>
          <option value="design_&_illustration" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'design_&_illustration') {
                                                  echo ' selected';
                                                } ?>>design & illustration</option>
          <option value="video_production" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'video_production') {
                                              echo ' selected';
                                            } ?>>video production</option>
          <option value="sports" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'sports') {
                                    echo ' selected';
                                  } ?>>sports</option>
          <option value="audio_production" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'audio_production') {
                                              echo ' selected';
                                            } ?>>audio production</option>
          <option value="web_publishing" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'web_publishing') {
                                            echo ' selected';
                                          } ?>>web publishing</option>
          <option value="accounting" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'accounting') {
                                        echo ' selected';
                                      } ?>>accounting</option>
          <option value="education" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'education') {
                                      echo ' selected';
                                    } ?>>education</option>
          <option value="software_training" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'software_training') {
                                              echo ' selected';
                                            } ?>>software training</option>
          <option value="photo_editing" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'photo_editing') {
                                          echo ' selected';
                                        } ?>>photo editing</option>
          <option value="game_development" <?php if (!empty($_GET['genre']) && $_GET['genre'] == 'game_development') {
                                              echo ' selected';
                                            } ?>>game development</option>
        </select>
      </label>
      <label><select name="mature_content">
          <option value="" disabled selected>age</option>
          <option value="both" <?php if (!empty($_GET['mature_content']) && $_GET['mature_content'] == 'both') {
                                            echo ' selected';
                                          } ?>>both</option>
          <option value="0" <?php if (!empty($_GET['mature_content']) && $_GET['mature_content'] == '0') {
                                            echo ' selected';
                                          } ?>>16-</option>
          <option value="1" <?php if (!empty($_GET['mature_content']) && $_GET['mature_content'] == '1') {
                                            echo ' selected';
                                          } ?>>16+</option>
        </select> </label>
      <input type="submit" value="SEARCH">
    </form>
  </header>
  <main class="home__content">
    <div></div>
    <ul class="game__display">
      <?php
      foreach ($gamesQuery as $game) {
        echo ('<ul class="game__box"><a class="game__content" href="index.php?page=detail&id=' . $game->id . '">
  <ul class="game__text">
  <li class="game__title">' . $game->name . '</li>
  <li class="game__developer">' . $game->developer . '</li>
  </ul>
  <li><img src="https://cdn.akamai.steamstatic.com/steam/apps/' . $game->game_code . '/header.jpg" alt="' . $game->name . '" width="auto" height="150px"></li>
  </a></ul>');
      }
      ?>
    </ul>
  </main>
  <nav class="scroller__container">
    <ul class="page__scroller">
      <li <?php
          if ($currentPage == 0  || $currentPage == 1) {
            echo ('class="hide"');
          } else {
            echo ('class="show"');
          } ?>><a class="cycle__button" href="index.php?p=<?php echo $pageQuery . 'p=' . (0); ?>">&#11164&#11164</a></li>

      <li <?php
          if ($currentPage == 0) {
            echo ('class="hide"');
          } else {
            echo ('class="show"');
          } ?>><a class="cycle__button" href="index.php?p=<?php echo $pageQuery . 'p=' . ($currentPage - 1); ?>">&#11164</a></li>

      <li class="cycle__button"><?php echo ($currentPage) ?></li>

      <li <?php
          if ($currentPage == $totalPages - 1) {
            echo ('class="hide"');
          } else {
            echo ('class="show"');
          }
          ?>><a class="cycle__button" href="<?php echo $pageQuery . 'p=' . ($currentPage + 1);   ?>">&#11166</a></li>

      <li <?php
          if ($currentPage == $totalPages - 1) {
            echo ('class="hide"');
          } else {
            echo ('class="show"');
          }
          ?>><a class="cycle__button" href="index.php?p=<?php echo $pageQuery . 'p=' . ($totalPages - 1);   ?>">&#11166&#11166</a></li>
    </ul>
  </nav>
</div>
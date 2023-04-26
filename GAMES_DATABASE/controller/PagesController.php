<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '../../model/SteamGame.php';


class PagesController extends Controller
{

  // HOME PAGE
  public function home()
  {
    if (!empty($_GET['genre'])) {
      if ($_GET['genre'] != 'all') {
        $numGames = SteamGame::where('genre', $_GET['genre'])->count();
      } else {
        $numGames = SteamGame::count();
      }
    } else {
      $numGames = SteamGame::count();
    }

    $itemsPerPage = 5;
    $totalPages = ceil($numGames / $itemsPerPage);

    if (isset($_GET['p'])) {
      if ($_GET['p'] < 0 || $_GET['p'] > $totalPages) {
        header('Location:index.php');
        exit();
      }
      $currentPage = $_GET['p'];
    } else {
      $currentPage = 0;
    }
    $offset = $currentPage * $itemsPerPage;
    $games = SteamGame::orderBy('id', 'asc')->offset($offset)->limit($itemsPerPage)->get();


    $this->set('games', $games);
    $this->set('currentPage', $currentPage);
    $this->set('totalPages', $totalPages);


    $gamesQuery = SteamGame::offset($offset)->limit($itemsPerPage);

    if (!empty($_GET['direction'])) {
      $direction = $_GET['direction'];
      $this->set('direction', $direction);
    } else {
      $direction = 'asc';
    }

    if (!empty($_GET['sort_by'])) {
      $sort_by = $_GET['sort_by'];
      $this->set('sort_by', $sort_by);
    } else {
      $sort_by = 'id';
    }
    if (!empty($_GET['sort_by'])) {
      $gamesQuery = $gamesQuery->orderBy($sort_by, $direction);
    }



    if (!empty($_GET['genre'])) {

      $genre = $_GET['genre'];

      $this->set('genre', $genre);
      if ($genre != 'all') {
        $gamesQuery = $gamesQuery->where('genre', $genre);
      }
    } else {
      $genre = 'all';
      //mature content
    }

    if (!empty($_GET['mature_content'])) {
      $mature_content = $_GET['mature_content'];

      if ($mature_content != 'both') {
        $gamesQuery = $gamesQuery->where('mature_content', $mature_content);
      }
    } else {
      $mature_content = 'both';
    }

    $gamesQuery = $gamesQuery->get();
    $this->set('mature_content', $mature_content);
    $this->set('gamesQuery', $gamesQuery);

    $pageQuery = 'index.php?';
    if (!empty($_GET['sort_by'])) {
      $pageQuery = $pageQuery . '&sort_by=' . $_GET['sort_by'];
    }
    if (!empty($_GET['sorting'])) {
      $pageQuery = $pageQuery . '&sorting=' . $_GET['sorting'];
    }
    if (!empty($_GET['genre'])) {
      $pageQuery = $pageQuery . '&genre=' . $_GET['genre'];
    }
    if (!empty($_GET['mature_content'])) {
      $pageQuery = $pageQuery . '&mature_content=' . $_GET['mature_content'];
    }
    $pageQuery = $pageQuery . '&';
    $this->set('pageQuery', $pageQuery);
  }
  // DETAIL PAGE
  public function detail()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
    } else {
      header('Location:index.php');
      exit();
    }
    $game = SteamGame::find($id);
    $this->set('game', $game);
  }
}

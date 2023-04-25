<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '../../model/SteamGame.php';


class PagesController extends Controller 
{

      // HOME PAGE
  public function home() 
  {
        if (!empty($_GET['sort_by'])) {
      $sortBy = $_GET['sort_by'];
    } else {
      $sortBy = 'id';
    }

    // ---------- sorting asc / desc variable ---------- //
    if (!empty($_GET['sorting'])) {
      $sorting = $_GET['sorting'];
    } else {
      $sorting = 'asc';
    }

    $itemsPerPage = 5;
    $numGames =SteamGame::count();
    $totalPages = ceil($numGames/$itemsPerPage);

    if(isset($_GET['p'])){
      if($_GET['p'] < 0 || $_GET['p'] > $totalPages ){
        header('Location:index.php');
        exit();
      }
      $currentPage = $_GET['p'];
    }else{
        $currentPage = 0;
    }

    $offset = $currentPage * $itemsPerPage;
    $games = SteamGame::orderBy('id', 'asc')->offset($offset)->limit($itemsPerPage)->get();

    $this->set('games',$games);
    $this->set('currentPage',$currentPage);
    $this->set('totalPages',$totalPages);
  }
    // DETAIL PAGE
  public function detail() {
    if(isset($_GET['id'])){
      $id = $_GET['id'];
    }else{
      header('Location:index.php');
        exit();
    }
    $game = SteamGame::find($id);
    $this->set('game',$game);
  }
}
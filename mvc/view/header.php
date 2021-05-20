<!doctype html>
<html lang="fr">
  <head>
      <link rel="stylesheet" href="assets/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../js/controle.js" ></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c3be74198.js" crossorigin="anonymous"></script> <!--pour insérer des icônes-->
    <title>Location de voitures pour les handicapés</title>
  </head>
  <body> 
      <!--nav-->
      <nav class="navbar navbar-expand-md navbar-light " id="haut">
        <!--boutton pour afficher l'élément groupé((menu + zone de rechereche pour les petits écrans--> 
        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--end-boutton -->
        <!-- Groupement de zone de recherche + menu par Div (pour pouvoir les disparaître ensuite -->
        <div class="collapse navbar-collapse justify-content-between" id="nav"> <!--pour disparaitre et apparaitre selon la dimension-->
        <ul class="navbar-nav">
            <li class="nav-item d-flex " >
                <a class="nav-link text-white font-weight-bold bg-success px-3"href="index.php?controller=voiture&action=create">inscrire ma voiture</a></li>
            <li class="nav-item dropdown"> <!--Menu déroulant-->
                <a class="nav-link text-dark font-weight-bold px-3 dropdown-toggle"  data-toggle="dropdown" href="#" >Aide</a> <!--date-toggl="dropdown" : Bouton qui ouvre un menu déroulant-->
                <div class="dropdown-menu">
                    <a  class="dropdown-item" href="index.php?controller=faq">Une question ?</a>
                    <a class="dropdown-item"href="#">Comment ça marche?</a>
                    <a class="dropdown-item" href="index.php?controller=contact&action=create">Contactez-nous</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link text-dark font-weight-bold px-3" href="index.php?controller=compte">Se connecter</a></li>
            <li class="nav-item"><a class="nav-link text-dark font-weight-bold px-3" href="index.php?controller=utilisateur&action=create">S'inscrire</a></li>
        </ul>
        
        <form class="form-inline ml-3">
          <div class="input-group"> <!--pour regrouper la zone de recherche et le boutton-->
            <input  type="search" placeholder="Search" class="form-control" >
            <div class="input-group-append"> <!--pour supprimer l'espace entre la zone de saisie et le boutton-->
            <button type="button " class="btn bg-dark"><i class="fas fa-search text-success"></i></button>
            </div>
          </div>   
        </form>
       </div>
      </nav>
      <script type="text/javascript">
      var nav = document.getElementById('haut');

       window.onscroll = function () {

         if(window.pageYOffset > 100){

          nav.style.position = "fixed";
          nav.style.top = 0;

          }else{
            // nav.style.position = "absolute";
            nav.style.position = 'relative'; //fixed
            nav.style.top = 100;
          }
       }
      </script>


      <!--end of nav-->


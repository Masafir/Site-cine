<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Critique Film </title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="wrapper">
      <?php 
        /* if (strstr($_SERVER['PHP_SELF'],'contact.php'))
        {
          $classPhoto = 'leftFace';
        }
        else {
          $classPhoto = 'left';
        } */
      ?>
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left" <?php include('../../../base/inc/filmsAssociatif.php');

      echo'style="background-image: url(\''.$filmsAssociatif[$film]['affiche'].' \');"' ?>>
        <h1 class="left__title">Cinéma Gaumont Pathé</h1>
        <div class="left__paragraph">
          <!-- <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p> -->
        </div>

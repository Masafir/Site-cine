<?php
$image='../../images/face.jpg';
include('../template/nav.php');

?>


<main class="right">
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Contact</h2>
        <?php 
            if (isset($_GET['firstname']))
            {
                echo'<h1>Bonjour '.$_GET['firstname'].'</h1>';
            }
        ?>

        <form class="contact_page" action="contact.php"   method="get">

            <div class="nom_prenom">

            <div class="radio" >
                <input type= "radio"  name="genre" value="mme" checked >Mme \
                <input  type= "radio" name="genre" value="mr" >Mr
            </div> 
                <input class="input" type="text" name ='firstname'placeholder="Prénom" required>
                <input class="input" type="text" placeholder="Nom" required>
            </div>
            <div >
                <input class="email" type="email" placeholder="Adresse e-mail" required>
            </div>
            <div >
                J'ai connu ce site grâce à ? :
                <select class="select" placeholder="Choisir">
                <option value="faceboook">Facebook</option>
                <option value="twitter">twitter</option>
                <option value="google">Google</option>
                <option value="bouche à oreilles">Bouche à oreilles</option>
                <option value="JT  de 13h de JPP">JT de 13h de JPP</option>
                <option value="Autre">Autre</option>
                </select>
            </div>
            <hr>
            <div id="commentaire">
                Pour laisser un commentaire libre à Propos d'Oclock, c'est par ici : <br>
                <textarea class="textarea" placeholder="Votre message " name="messsage" style="width:100%;" cols="30" rows="5">
                </textarea>

            </div>
            <hr>
            <div class="check">

                <input class ="checkbox"type="checkbox" value="veracité">Je certifie la véracité de ces informations
            </div>
            <hr>
            <div class="parcourir">
                Ajouter un fichier : 
                <input type="file" value="parcourir" name="Parcourir .." >
            </div>
            <hr>
            <button type="submit">Envoyer</button>

        </form>
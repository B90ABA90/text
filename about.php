<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acceuil</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Objectifs ?</h3>
         <h2>CEFOPXD LE CHOIX DE L´EXCELLENTE DE VOTRE CURCUS ACCADEMIQUE</h2>
         <p>Nous comtribuons a l´epanouissement socioeconmique des jeunes,promouvoir la formation professionnelle chez les jeunes,accompagner les jeunes demunis dans les curcus accademique.</p>
         <a href="courses.html" class="inline-btn">Nos cours</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>Cours en ligne</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>Etudiants brilliants</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>les experts Professeurs </span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Boulot placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Avis des Etudiants </h1>

   <div class="box-container">

      <div class="box">
         <p>"<p>Une administration non transparente et des professeurs régulièrement present.Des suivis pour la recherche d'alternance ou de stage chaque vacances,recommande cette école a tous ceus qui souhaite une formation adequate.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Agbokou Chantal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Je conseille fortement cette école,un centre de formation bien organisation,si vous rechercher une ecole d´excellence alors vous etes au bon port,avec des experts professeurs ce qui garentis votre parcours
         </p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Anani Joel</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Grâce à cette école,On poura intégré une entreprise en alternance et trouvé rapidement un contrat CDI à la fin de mon cursus. L'école regorge des professeurs  très actif, un réel plus pour notre intégration ! Je recommande cette école à ceux qui veulent une formation très axée pratique.
</p><div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Kokou Isaac</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Une administration non transparente et des professeurs régulièrement present.Des suivis pour la recherche d'alternance ou de stage chaque vacances,recommande cette école a tous ceus qui souhaite une formation adequate.</p>
          <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>isaac kossi</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Une superbe école que je recommande à toutes personnes qui souhaitent acquérir une vraie expérience professionnelle tout au long de leurs apprentissages dès la 1er année </p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Nukunu Sorlange</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>la qualité de l'enseignement est honorable,La formation qui est proposée par l'école est très bonne. Le gros avantage étant qu'elles sont données par des professionnels dans leur domaine, ce qui permet aux cours d'être concrets et pas rébarbatifs</p> <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Kodjo Christ</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
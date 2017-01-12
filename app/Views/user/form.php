<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
<h2>Page formulaire</h2>
<p>Yolo formulaire</p>
<form method="post" action="">
   <p>
       <label for="pseudo">Pseudo :</label>
       <input type="text" name="pseudo" id="pseudo" placeholder="yoloswag"/>
       
       <br />
       <label for="email">Email :</label>
       <input type="text" name="email" id="email" />
       
       <br />
       <label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass" id="pass" />
       
   </p>
</form>
<?php $this->stop('main_content') ?>


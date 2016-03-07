<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

  
 
  // Récupération des variables et sécurisation des données
  $nom     = htmlentities($_POST['name']); 
  $email   = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
  $objet   = htmlentities($_POST['object']);
  
  // Variables concernant l'email
  
  $destinataire = 'theatre@efrei.net'; 
  
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez recu un message a partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; 
  
  $headers = 'MIME-Version: 1.0'."\n";
  $headers .= 'Content-type: text/html; charset=UTF-8'."\n";

  //Envoyer l'email
  if(mail($destinataire, $objet, $contenu, $headers)){
    header('Location: contact.php?email=send#message');
  }

  else{
    header('Location: contact.php?email=error#message');
  }
  
}
?>
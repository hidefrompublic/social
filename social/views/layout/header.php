<!DOCTYPE html>
<html lang="en">
    <head>

      <title>Social</title>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->

      <!-- Bootstrap CSS CDN-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

      <!-- Font Awesome CDN-->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

      <!-- Custom App CSS -->
      <!-- The issue with not fiding path was due to config/config/base_url (line 26), neeeded to add / -->
      <!-- <link rel="stylesheet" href="<?php //echo base_url('social/assets/css/signin.css');?>" type="text/css"> -->
      <?php 
      // var_dump($stylesheets);
      // var_dump($content_view);
        if(isset($stylesheets)) {
          echo '<link rel="stylesheet" href="' . base_url($stylesheets) . '" rel="stylesheet" type="text/css">';
        }
      ?>


    </head>
  <body>



<?php
  require 'vendor/autoload.php';
  Flight::set('flight.views.path', 'views');

  Flight::route('GET /', function() {
    Flight::render('pocetna');
  });

  // Restaurants index route
  Flight::route('GET /restaurants', function() {
    Flight::render('restorani');

  });

  // Restaurants new route
  Flight::route('GET /restaurants/new', function() {
    Flight::render('dodajRestoran');
  });

  // Restaurants index route
  Flight::route('POST /restaurants', function() {
    Flight::redirect('/restaurants');
  });





  Flight::start();
?>

<?php
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    $sid='####'; //ID from you twilio account
    $token='####'; //token from you twilio account
    $twilioNum='#####'; //Your twilio number
    $fileName = "enrollment.csv";

    $client = new Twilio\Rest\Client($sid, $token);

    function index(){
      $response = new Twilio\Twiml();
      $response->message("Hi there! Thank you for contacting the center, how may I help you today?");
       
      echo $response;
    } 

    function help(){ 
      $response = new Twilio\Twiml();
      $response->message("I don't have enough information to help you. Try sending the text again but please include what you need help with, example would be account, billing, joke, or hours.");         

      echo $response;
    } 

    function account(){ 
      $response = new Twilio\Twiml();
      //Would need to build out some logic to pull account information here
      $response->message("This is an example to response to getting information about your account."); 

      echo $response;
    }

    function billing(){ 
      $response = new Twilio\Twiml();
      //Would need to build out some logic to pull billing information here
      $response->message("This is an example to response to getting information about your billing.");         

      echo $response;
    }

  	function hours(){ 
      $response = new Twilio\Twiml();
      $response->message("We are here to help from 8:00AM to 5:30PM.");         

      echo $response;
  	}

  	function joke(){ 
      $response = new Twilio\Twiml();
      $response->message("I dont mean to brag but I got a B+ on the Turing test.");         

      echo $response;
    } 

    
    if(stripos($body, "index") !== FALSE {
        index());
    } else if(stripos($body, "help") !== FALSE) {
        help();
    } else if(stripos($body, "account") !== FALSE) {
        account();
    } else if(stripos($body, "billing") !== FALSE) {
        billing();
    } else if(stripos($body, "hours") !== FALSE) {
        hours();
    } else if(stripos($body, "joke") !== FALSE) {
        joke();
    }    
    
?>
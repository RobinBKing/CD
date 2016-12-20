<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetGenerator.php";

    $app = new Silex\Application();
    
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_leet_speak", function() use ($app) {
        $my_LeetGenerator  = new LeetGenerator;            
        $leet_speak_phrase = $my_LeetGenerator->makeLeetSpeak($_GET['phrase']);
        return $app['twig']->render('leet_speek.html.twig', array('result' => $leet_speak_phrase));
      });

    return $app;
?>
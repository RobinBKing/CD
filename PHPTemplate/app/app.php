<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TaskGenerator.php";

    $app = new Silex\Application();
    
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    
    $app->get("/", function() use ($app) {

        return $app['twig']->render('form_template.html.twig');

    });

    $app->get("/view_template", function() use ($app) {
        $my_TaskGenerator  = new TaskGenerator;            
        $my_task = $my_TaskGenerator->makeTask($_GET['task']);
        return $app['twig']->render('tasks.html.twig', array('result' => $task));
      });

    return $app;
?>
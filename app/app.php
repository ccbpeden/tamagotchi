<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamago.php";

    session_start();

    if(empty($_SESSION['tamagotchi'])) {
        $_SESSION['tamagotchi'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('create_tamago.html.twig', array('tamagotchi' => Tamago::getAll()));
    });

    $app->post("/create_tamago", function() use ($app) {
        $tamago = new Tamago($_POST['name']);
        $tamago->save();
        return $app['twig']->render('create_tamago.html.twig', array('tamagotchi' => Tamago::getAll()));
    });

    $app->post("/feed_Tamago", function() use ($app) {
        Tamago::setFed();
        return $app['twig']->render('create_tamago.html.twig', array('tamagotchi' => Tamago::getAll()));
    });

    $app->post("/attend_Tamago", function() use ($app) {
        Tamago::setAttention();
        return $app['twig']->render('create_tamago.html.twig', array('tamagotchi' => Tamago::getAll()));
    });

    $app->post("/rest_Tamago", function() use ($app) {
        Tamago::setRest();
        return $app['twig']->render('create_tamago.html.twig', array('tamagotchi' => Tamago::getAll()));
    });


return $app;
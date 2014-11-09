<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

// Templates
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig');
});

$app->get('/login', function () use ($app) {
    return $app['twig']->render('login.html.twig');
});

$app->get('/sign-up', function () use ($app) {
    return $app['twig']->render('sign_up.html.twig');
});

$app->get('/profile', function () use ($app) {
    return $app['twig']->render('profile.html.twig');
});

$app->post('/profile', function () use ($app) {
    return $app['twig']->render('profile.html.twig');
});

$app->get('/brewery', function () use ($app) {
    return $app['twig']->render('brewery.html.twig');
});

$app->get('/create', function () use ($app) {
    return $app['twig']->render('create.html.twig');
});

$app->get('/party', function () use ($app) {
    return $app['twig']->render('party.html.twig');
});

$app->post('/party', function () use ($app) {
    return $app['twig']->render('party.html.twig');
});

$app->get('/choose', function () use ($app) {
    return $app['twig']->render('choose.html.twig');
});

$app->post('/choose', function () use ($app) {
    return $app['twig']->render('choose.html.twig');
});

$app->get('/payment', function () use ($app) {
    return $app['twig']->render('payment.html.twig');
});

$app->post('/payment', function () use ($app) {
    return $app['twig']->render('payment.html.twig');
});



$app->run();
<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    // $app->options('/{routes:.*}', function (Request $request, Response $response) {
    //     // CORS Pre-Flight OPTIONS Request Handler
    //     return $response;
    // });

    // $app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    //     $name = $args['name'];
    //     $response->getBody()->write('Hello world!' .  $name);
    //     return $response;
    // });

    // $app->group('/users', function (Group $group) {
    //     $group->get('', ListUsersAction::class);
    //     $group->get('/{id}', ViewUserAction::class);
    // });

    $app->get('/hello', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('Hello I am using the slim framework');
        return $response;
    });
};

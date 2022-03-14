<?php

namespace Acme\Todo;

use Psr\Http\Message\ServerRequestInterface;
use React\Http\Message\Response;

class UserController
{
    public function __invoke(ServerRequestInterface $request)
    {
        // var_dump($request);die();
        return Response::plaintext(
            "Hello " . $request->getAttribute('name') . "!\n"
        );
    }
}
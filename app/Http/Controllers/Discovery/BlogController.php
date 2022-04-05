<?php

namespace App\Http\Controllers\Discovery;

use Spatie\RouteDiscovery\Attributes\Route;

#[Route(middleware:'my-custom-middleware')]
class BlogController
{
    #[Route(name:'my-custom-route')]
    public function index()
    {

    }

    public function store()
    {

    }
}

<?php

namespace Router;

use App\Exceptions\NotFoundException;

class Router
{
    public string $path;
    public array $routes = [];

    public function __construct(string $path)
    {
        $this->path = '/'.trim($path, '/');
    }

    public function get(string $path, string $action): void
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post(string $path, string $action): void
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    /**
     * @throws NotFoundException
     */
    public function run()
    {
        /** @var Route $route */
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->path)) {
                return $route->execute();
            }
        }

        throw new NotFoundException("La page demandée est introuvable.");
    }
}

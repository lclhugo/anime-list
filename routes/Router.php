<?php

namespace Router;

use App\Exceptions\NotFoundException;
use Exception;

class Router
{
    public const AVAILABLE_HTTP_METHODS = ['GET', 'POST'];
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
     * @throws Exception
     */
    public function run()
    {
        $m = $_SERVER['REQUEST_METHOD'];
        if (!in_array($m, self::AVAILABLE_HTTP_METHODS)) {
            throw new Exception(sprintf('Invalid HTTP method %s,. Available: %s', $m, implode(',', self::AVAILABLE_HTTP_METHODS)));
        }

        /** @var Route $route */
        foreach ($this->routes[$m] as $route) {
            if ($route->matches($this->path)) {
                return $route->execute();
            }
        }

        throw new NotFoundException("La page demandée est introuvable.");
    }
}

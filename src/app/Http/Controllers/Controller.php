<?php

namespace DeschutesDesignGroupLLC\App\Http\Controllers;

use WHMCS\Authentication\CurrentUser;
use WHMCS\User\User;

abstract class Controller
{
    protected ?User $currentUser = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->currentUser = (new CurrentUser)->user();
    }

    public function dispatch(array $parameters = []): array|string|null
    {
        $controller = new static;

        $method = match (true) {
            $_SERVER['REQUEST_METHOD'] === 'POST' => 'store',
            $_SERVER['REQUEST_METHOD'] === 'PUT' => 'update',
            $_SERVER['REQUEST_METHOD'] === 'DELETE' => 'delete',
            default => 'index'
        };

        if (is_callable([$controller, $method])) {
            return $controller->$method($parameters);
        }

        return [];
    }
}

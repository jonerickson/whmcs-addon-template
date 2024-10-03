<?php

namespace DeschutesDesignGroupLLC\App\Http\Controllers;

use Illuminate\Http\Request;
use WHMCS\Authentication\CurrentUser;
use WHMCS\User\User;

abstract class Controller
{
    protected ?User $currentUser = null;

    /**
     * Constructor
     */
    public function __construct(protected Request $request)
    {
        $this->currentUser = (new CurrentUser)->user();
    }

    public function dispatch(array $parameters = []): array|string|null
    {
        $method = match (true) {
            $this->request->method() === 'POST' => 'store',
            $this->request->method() === 'PUT' => 'update',
            $this->request->method() === 'DELETE' => 'delete',
            default => 'index'
        };

        if (is_callable([$this, $method])) {
            return $this->$method($parameters);
        }

        return [];
    }
}

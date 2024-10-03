<?php

namespace DeschutesDesignGroupLLC\App\Http\Controllers;

class ClientController extends Controller
{
    public function index(): array
    {
        return [
            'pagetitle' => 'Hello World',
            'breadcrumb' => [
                'index.php?m=hello_world' => 'Hello World',
            ],
            'templatefile' => 'index',
            'requirelogin' => false,
            'vars' => [
                'first_name' => $this->currentUser->first_name,
                'last_name' => $this->currentUser->last_name,
            ],
        ];
    }
}

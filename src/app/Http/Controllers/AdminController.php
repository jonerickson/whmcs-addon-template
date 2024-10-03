<?php

namespace DeschutesDesignGroupLLC\App\Http\Controllers;

class AdminController extends Controller
{
    public function index(): string
    {
        return <<<'HTML'
<div>Hello, World!</div>
HTML;
    }
}

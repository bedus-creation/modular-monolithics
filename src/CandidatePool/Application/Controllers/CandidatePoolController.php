<?php

namespace Src\CandidatePool\Application\Controllers;

use Inertia\Response;
use Inertia\ResponseFactory;

class CandidatePoolController
{
    public function index(): Response|ResponseFactory
    {
        \inertia()->setRootView('candidate-pool');

        return inertia()->render("Example", []);
    }
}

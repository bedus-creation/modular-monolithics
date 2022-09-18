<?php

namespace Src\CandidateManagement\Application\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;

class CandidateManagementController extends Controller
{
    public function index(): Response|ResponseFactory
    {
        \inertia()->setRootView('candidate-management');

        return inertia()->render("Example",[]);
    }
}

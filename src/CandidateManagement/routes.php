<?php

use Illuminate\Support\Facades\Route;
use Src\CandidateManagement\Application\Controllers\CandidateManagementController;

Route::get('/candidate-management', [CandidateManagementController::class, "index"]);

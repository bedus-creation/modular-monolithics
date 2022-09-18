<?php

use Illuminate\Support\Facades\Route;
use Src\CandidatePool\Application\Controllers\CandidatePoolController;

Route::get('/candidate-pool', [CandidatePoolController::class, "index"]);

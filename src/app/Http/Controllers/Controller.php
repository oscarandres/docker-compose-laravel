<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use TCG\Voyager\Http\Controllers\VoyagerController;

class Controller extends VoyagerController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

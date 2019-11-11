<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;

class TermController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'collection' => Term::advancedFilter()
            ]);
    }
}

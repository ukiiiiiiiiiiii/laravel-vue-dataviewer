<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Dataviewer;

class Term extends Model
{
    use Dataviewer;

    protected $allowedFilters = [
        /*'id',*/ 'country', 'national_term', 'english_term', 'national_definition',
        'english_definition', 'english_document', 'national_document', 'year'
    ];

    protected $orderable = [
        'country', 'national_term', 'english_term', 'national_definition',
        'english_definition', 'english_document', 'national_document', 'year'
    ];
}

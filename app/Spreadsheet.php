<?php

namespace DoiAssistant;

use Illuminate\Database\Eloquent\Model;

class Spreadsheet extends Model
{
    //To create a DOI, you need this as a minumum
    protected $arrRequiredFields = array('url', 'creator', 'title', 'publisher', 'year', 'resource_type');
}

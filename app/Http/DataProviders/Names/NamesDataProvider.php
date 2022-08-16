<?php

namespace App\Http\DataProviders\Names;

use App\Http\Requests\Names\IndexRequest;
use App\Models\Name;

class NamesDataProvider
{
    public $request;

     public function __construct(IndexRequest $request)
    {
        $this->request = $request;
    }

    public function getData()
    {
        return Name::where('name', $this->request->get('name'))->exists();
    }
}

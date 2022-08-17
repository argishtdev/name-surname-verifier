<?php

namespace App\Http\DataProviders\Names;

use App\Http\Requests\Names\IndexRequest;
use App\Models\LastName;
use App\Models\Name;

class NamesDataProvider
{
    public $request;

     public function __construct(IndexRequest $request)
    {
        $this->request = $request;
    }

    public function getName()
    {
        return Name::where('name', $this->request->get('name'))->exists();
    }

    public function getLastName()
    {
        return LastName::where('last_name', $this->request->get('last_name'))->exists();
    }

     public function getGender()
    {
        return Name::where('name', $this->request->get('name'))->first();
    }
}

<?php

namespace App\Http\Controllers\Name;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Names\NamesDataProvider;
use App\Http\Requests\Names\IndexRequest;

class NameController extends Controller
{
    public function index(IndexRequest $request, NamesDataProvider $dataProvider)
    {
        $data = $dataProvider->getData();

        return view('pages.name.index', compact('data'));
    }
}

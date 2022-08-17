<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Names\NamesDataProvider;
use App\Http\Requests\Names\IndexRequest;

class InformationController extends Controller
{
    public function names(IndexRequest $request, NamesDataProvider $dataProvider)
    {
        $data = $dataProvider->getName();

        return view('pages.information.name', compact('data'));
    }

    public function lastName(\App\Http\Requests\LastNames\IndexRequest $request, NamesDataProvider $dataProvider)
    {
        $data = $dataProvider->getLastName();

        return view('pages.information.lastName', compact('data'));
    }

    public function gender(IndexRequest $request, NamesDataProvider $dataProvider)
    {
        $data = $dataProvider->getGender();

        return view('pages.information.gender', compact('data'));
    }
}

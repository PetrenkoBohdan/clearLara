<?php

namespace App\Http\Controllers;

use App\JiraFilter;
use App\Request\JiraFilterRequest;
use App\Services\JiraProvider;

class SearchJiraFiltersController extends Controller
{
    //

    public function index()
    {
        $jiraFilters = (new JiraProvider())->searchForFilters();

        return view('filters', compact('jiraFilters'));
    }

    public function store(JiraFilterRequest $request)
    {
        $base = new JiraFilter($request->all());
        $base->save();
    }
}

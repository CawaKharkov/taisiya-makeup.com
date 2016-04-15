<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Admin\StaticPage;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * @param StaticPage $page
     * @return mixed
     */
    public function view(StaticPage $page)
    {
        return view('staticPage.view',['page' => $page]);
    }
}

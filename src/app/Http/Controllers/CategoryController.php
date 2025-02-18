<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return \view('categories.index');
    }

    public function form(): View
    {
        return \view('categories.form');
    }

    public function store(): RedirectResponse
    {
        return redirect(route('categories.index'));
    }

    public function update(): RedirectResponse
    {
        return redirect(route('categories.index'));
    }

    public function destroy(): RedirectResponse
    {
        return redirect(route('categories.index'));
    }
}

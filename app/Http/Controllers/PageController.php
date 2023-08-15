<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
{
    // Fetches and displays a listing of products
}

public function create()
{
    // Displays a form to create a new product
}

public function store(Request $request)
{
    // Handles the creation of a new product
}

public function show($id)
{
    // Displays a specific product
}

public function edit($id)
{
    // Displays a form to edit an existing product
}

public function update(Request $request, $id)
{
    // Handles the update of an existing product
}

public function destroy($id)
{
    // Handles the deletion of a product
}
}

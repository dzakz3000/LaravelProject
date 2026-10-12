<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Me',
            'nama' => 'Dzakiy Denendra',
            'hobi' => 'Bermain game kompetitif dan traveling',
            'repository' => 'https://github.com/dzakz3000?tab=repositories'
        ];

        return view('admin.about', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}

<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
 
interface UserInterface {
    //public function list()
    //public function show(int $id): array;
    //public function edit(int $id, Request $request): array;
    public function store(Request $request);
}

?>
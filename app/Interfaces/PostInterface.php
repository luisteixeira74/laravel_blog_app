<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
 
interface PostInterface {
    public function list(): array;
    public function show(int $id): array;
    public function edit(): array;
    public function storage(Request $request): array;
}

?>
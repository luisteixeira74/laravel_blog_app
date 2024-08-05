<?php

namespace App\Interfaces;
 
interface PostsInterface {
    public function list(): array;
    public function show(int $id): array;
    public function edit(): array;
    public function storage(): array;
}

?>
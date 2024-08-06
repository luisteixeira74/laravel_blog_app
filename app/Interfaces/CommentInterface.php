<?php

namespace App\Interfaces;
 
interface CommentInterface {
    public function list(): array;
    public function show(int $id): array;
    public function edit(): array;
    public function storage(): array;
}

?>
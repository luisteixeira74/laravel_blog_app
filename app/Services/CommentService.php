<?php

namespace App\Services;

use App\Interfaces\CommentInterface;
use App\Models\Comment;
use DateTime;

class CommentService implements CommentInterface
{
    /**
     * List function
     *
     * @return array
     */
    public function list(): array    {
        $orders = Comment::where('is_published', 1)->get()->toArray();
        return $orders;
    }

    public function show(int $id): array
    {
        $order = Comment::where('is_published', 1)->get()->toArray();
        return $order;
    }

    public function storage(): array
    {
        return [];
    }

    public function edit(): array
    {
        return [];
    }
}
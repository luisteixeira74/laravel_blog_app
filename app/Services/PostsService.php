<?php

namespace App\Services;

use App\Interfaces\PostsInterface;
use App\Models\Post;
use DateTime;
use Illuminate\Support\Facades\DB;


class PostsService implements PostsInterface
{
    /**
     * List function
     *
     * @return array
     */
    public function list(): array    {
        $orders = Post::where('status', 1)->get()->toArray();
        return $orders;
    }

    public function show(int $id): array
    {
        $order = Post::where('id', $id)->get()->toArray();
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
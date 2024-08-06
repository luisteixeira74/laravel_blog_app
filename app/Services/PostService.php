<?php

namespace App\Services;

use App\Interfaces\PostInterface;
use App\Models\Post;
use DateTime;
use Illuminate\Http\Request;

class PostService implements PostInterface
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

    public function storage(Request $request): array
    {
        $post  = new Post([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $post->save();

        return response()->json('Post add success');
    }

    public function edit(): array
    {
        return [];
    }
}
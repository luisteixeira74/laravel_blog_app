<?php
 
namespace App\Http\Controllers;

use App\Services\PostsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * @var PostsService
     */
    protected $postsService;

    /**
     * @param PostsService $postsService
     */
    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;    
    }

    /**
     * list function
     *
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        $posts = $this->postsService->list();

        return response()->json($posts, 200, []);
    }

    /**
     * show function
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $post = $this->postsService->show($id);
        return response()->json($post, 200, []);
    }

    /**
     * edit function
     *
     * @param string $id
     * @param Request $request
     * @return JsonResponse
     */
    public function edit(string $id, Request $request): JsonResponse
    {
        $post =  $this->postsService->edit($id, $request);
        return response()->json($post, 200, []);
    }

    /**
     * storage function
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storage(Request $request): JsonResponse
    {
        $post = $this->postsService->storage($request);
        return response()->json($post, 200, []);
    }
}
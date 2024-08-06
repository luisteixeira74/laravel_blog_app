<?php
 
namespace App\Http\Controllers;

use App\Services\CommentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * @var CommentService
     */
    protected $commentService;

    /**
     * @param CommentService $postsService
     */
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;    
    }

    /**
     * list function
     *
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        $comment = $this->commentService->list();

        return response()->json($comment, 200, []);
    }

    /**
     * show function
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        $comment = $this->commentService->show($id);
        return response()->json($comment, 200, []);
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
        dd($request);
        $comment =  $this->commentService->edit($id, $request);
        return response()->json($comment, 200, []);
    }

    /**
     * storage function
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function storage(Request $request): JsonResponse
    {
        dd($request);
        $comment = $this->commentService->storage($request);
        return response()->json($comment, 200, []);
    }
}
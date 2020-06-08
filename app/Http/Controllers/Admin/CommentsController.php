<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = (new Comment())->get();
        $params = [
            'comments' => $comments
        ];
        return view('admin.comments', $params);
    }

    public function acceptComment($id)
    {

        \DB::table('comments')->where('id', $id)->update(['status' => true]);
        return back();
    }
    public function deleteComment(Request $request)
    {
        if ($request->ajax()) {
            $id = (int)$request->input('id');
            $objComment = new Comment();

            $objComment->where('id', $id)->delete();

            echo "success";
        }
    }
}

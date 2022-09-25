<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use function array_unshift;
use function view;

class Comments extends Component
{

    public $comments;

    public $newComment;

    public function mount()
    {
        $this->comments = Comment::latest()->get();
    }

    public function addComment()
    {
        // // empty new comment not allowed
        // if ($this->newComment === null || $this->newComment === "") {
        // return;
        // }

        // validate
        $this->validate([
            'newComment' => 'required|max:255'
        ]);

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1]);

        $this->comments->prepend($createdComment);

        $this->newComment = "";
    }


    // delete comment
    public function remove($commentId)
    {
        // find comment
        $comment = Comment::find($commentId);

        // delete comment
        $comment->delete();

        // remove comment from dom
        // method 1:
        //$this->comments = $this->comments->where('id', '!==', $commentId);
        // method 2:
        $this->comments = $this->comments->except($commentId);
    }


    public function render()
    {
        // public variables are available in below view
        return view('livewire.comments');
    }
}

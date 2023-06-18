<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;


class Comments extends Component
{

  public $comments = [
    [
      'body' => 'Starting example text.',
      'created_at' => '3 min ago',
      'creator' => 'John Doe',
    ]
  ];


  public $newComment;
  public function addComment()
  {
    array_unshift($this->comments, [
      'body' => $this->newComment,
      'created_at' => Carbon::now()->diffForHumans(),
      'creator' => 'Jim Sample',
    ]);
    $this->newComment = "";
  }

  public function render()
  {
    return view('livewire.comments');
  }
}

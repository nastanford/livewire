<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{

  public $comments = [
    [
      'body' => 'Starting example text.',
      'created_at' => '3 min ago',
      'creator' => 'John Doe',
    ]
  ];

  public function addComment()
  {
    $this->comments[] = [
      'body' => 'New Comment',
      'created_at' => '1 min ago',
      'creator' => 'Jim Sample',
    ];
  }

  public function render()
  {
    return view('livewire.comments');
  }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{

  public $comments = [
    [
      'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel
      eleifend felis. Donec eget augue euismod, ultricies nunc quis, ultrices',
      'created_at' => '3 min ago',
      'creator' => 'John Doe',
    ]
  ];

  public function addComment()
  {
    dd($this->comments);

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

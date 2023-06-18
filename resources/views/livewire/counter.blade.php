<div class="container">
  <div class="row">
    <div class="col-4 offset-3 h1">
      <button wire:click="increment" class="btn btn-secondary">+</button>
      {{ $count }}
      <button wire:click="decrement" class="btn btn-secondary">-</button>
    </div>
  </div>
</div>


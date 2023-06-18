<div class="container">
  <div class="row">
    <div class="col-12 h1">
      Comments
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="row align-items-center">
        <div class="col-10">
          <div class="input-group">
            <input type="text" class="form-control" id="comment" placeholder="">
          </div>
        </div>
        <div class="col-2">
          <button class="btn btn-primary" wire:click="addComment">Add</button>
      </div>
      @foreach ($comments as $index => $comment)
        <div class="col-12" wire:key="comment-{{ $index }}">
          <div class="border border-1 border-muted rounded mt-4 pb-2 px-4">
            <b>{{ $comment['creator'] }}</b> <span class="text-muted">{{ $comment['created_at'] }}</span><br>
              {{ $comment['body'] }}
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">

    </div>
  </div>
  <div class="row">
    <div class="col-12">

    </div>
  </div>
</div>

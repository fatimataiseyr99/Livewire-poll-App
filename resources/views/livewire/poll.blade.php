<div>
   <form>
    @forelse($polls as $poll)
    <div class="mb-4">
    <h3> {{ $poll->title }}</h3>
    </div>
    @foreach ($poll->options as $option)
    <div class="mb-2">
      <button class="btn" wire:click="vote({{ $option->id }})">Vote</button>
      {{ $option->name }} ({{ $option->votes->count() }})
    </div>
  @endforeach
    
    @empty
   
        <div class="text-gray-500">
            No polls available
          </div>

    @endforelse 
    <form>
</div>

<div>
  <form wire:submit.prevent="createPoll">
    <label> poll Title </label>
    <input type="text" wire:model="title" >
    Current Title : {{ $title }}
    @error("title")
    <div class="text-red-500">{{ $message }}</div>
    @enderror
<div class="mb-4 mt-4">
    <button class="btn" wire:click.prevent="addOption">ADD OPTION</button>
</div>
@foreach($options as $index => $option)
<div class="mb-4">
    <label>Option {{ $index + 1 }}</label>
    <div class="flex gap-2">
      <input type="text" wire:model="options.{{ $index }}" />
      <button class="btn"
        wire:click.prevent="removeOption({{ $index }})">Remove</button>
    </div>
    @error("option.{$index}")
    <div class="text-red-500">{{ $message }}</div>
    @enderror
</div>
@endforeach
<button  type="submit" class="btn"  >CREATE POLL</button>
</div>
</form>

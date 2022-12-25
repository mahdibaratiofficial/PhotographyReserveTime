<div>
    <div class="form-group">
        <input type="password" class="form-control form-control-lg rounded @error('password')  is-invalid  @enderror" id="exampleInputPassword1" placeholder="گذر واژه" wire:model.debounce.1000ms="password">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
      <input type="password" class="form-control form-control-lg rounded @error('confirm')  is-invalid  @enderror" id="exampleInputPassword1" placeholder="تکرار گذر واژه" wire:model.debounce.1000ms="password">
      @error('confirm')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>
</div>

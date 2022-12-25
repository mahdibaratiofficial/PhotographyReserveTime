<div>
    <input type="text" class="form-control form-control-lg rounded @error('email')  is-invalid  @enderror"
             id="exampleInputUsername1" placeholder="ایمیل" wire:model.debounce.1000ms="email" value="{{ $email }}">

    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div>
    <input type="text" name="username" class="form-control form-control-lg rounded @error('username')  is-invalid  @enderror"
             id="exampleInputUsername1" placeholder="نام کاربری" wire:model.debounce.1000ms="username" value="{{ $username }}">

    @error('username')
        <span class="text-danger">{{ $message }}</span>
    @enderror

    {{-- @if($valid)
    <div class="valid-feedback">
        نام کاربری صحیح است!
      </div>
    @endif --}}
</div>

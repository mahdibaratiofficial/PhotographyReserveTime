<div>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light rounded text-left py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <img src="../../images/logo.svg" alt="logo">
                  </div>
                  <h4 class="text-right">ورود</h4>
                  <h6 class="font-weight-light text-right">خوش اومدی رفیق!</h6>
                <form class="pt-3" wire:submit.prevent="login" wire:keyup.enter="login">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg rounded" id="exampleInputEmail1" placeholder="نام کاربری یا ایمیل یا شماره تلفن" wire:model.defer="username" value="{{ $username }}">
                      @error('username')
                      <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-lg rounded " id="exampleInputPassword1" placeholder="رمز عبور" wire:model.defer="password" value="{{ $password }}">
                      @error('password')
                      <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                        @if($errorType===null)
                            <div class="alert alert-danger"> کاربر پیدا نشد </div>
                        @elseif($errorType===false)
                            <div class="alert alert-danger"> رمز عبور یا نام کاربری اشتباه است </div>
                        @endif
                    <div class="mt-3">
                      <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="ورود">

                     
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          منو یادتون باشه
                        </label>
                      </div>
                      <a href="#" class="auth-link text-black">رمز عبور خود را فراموش کردید؟</a>
                    </div>
                    <div class="mb-2">
                      <button type="button" type="submit" class="btn btn-block btn-danger auth-form-btn">
                       ورود با گوگل
                      </button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                     حساب کاربری ندارید ؟<a href="{{ url('auth/register') }}" class="text-primary">ساخت حساب کاربری</a>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

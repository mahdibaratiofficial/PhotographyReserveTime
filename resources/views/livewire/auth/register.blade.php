<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4  class="text-right text-primary">حساب کاربری ندارید؟</h4>
              <h6 class="font-weight-light text-right">با چند قدم ساده حساب کاربری خود را بسازید</h6>
                <form class="pt-3" wire:submit.prevent="register">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-lg rounded @error('username')  is-invalid  @enderror"
                                 id="exampleInputUsername1" placeholder="نام کاربری" wire:model.debounce.1000ms="username" value="{{ $username }}">
                          @error('username')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>


                    <div class="form-group">
                      <input type="text"  class="form-control form-control-lg rounded @error('name')  is-invalid  @enderror"
                               id="exampleInputUsername1" placeholder="نام" wire:model.debounce.1000ms="name" value="{{ $name }}">
                  
                      @error('name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      
                      <input type="email" class="form-control form-control-lg rounded @error('email')  is-invalid  @enderror"
                      id="exampleInputUsername1" placeholder="ایمیل" wire:model.debounce.1000ms="email" value="{{ $email }}">
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">

                      <input type="password" class="form-control form-control-lg rounded @error('password')  is-invalid  @enderror" id="exampleInputPassword1" placeholder="گذر واژه" wire:model.debounce.1000ms="password">
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                      </div>
                  
                      <div class="form-group">
                        <input type="password" class="form-control form-control-lg rounded @error('password_confirmation')  is-invalid  @enderror" id="exampleInputPassword1" placeholder="تکرار گذر واژه" wire:model.debounce.1000ms="password_confirmation">
                        @error('password_confirmation')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    
                    <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">ثبت نام</button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                    یه اکانت داری? <a href="login.html" class="text-primary">ورود</a>
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
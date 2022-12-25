    <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">درخواست های دیده نشده</p>
                <p class="fs-30 mb-2">{{ $unseen }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">کار های امروز</p>
                <p class="fs-30 mb-2">{{ $today_work }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">تعداد کل کاربران</p>
                <p class="fs-30 mb-2">{{ \App\Models\User::all()->count() }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">درآمد این ماه</p>
                <p class="fs-30 mb-2">47033</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="main-panel text-justify">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-lg-12 order-3">
                          <div class="card p-3">
                            <table class="table table-borderless">

                                <tbody>

                                    @foreach ($users as $user )
                                    <tr>
                                        <td id="profile" class=" p-0 m-0">
                                            <div class="float-left bg-info" style="width:40px ;height:40px;border-radius: 50%;">
                                            </div>
                                        </td>

                                        <td id="username">
                                            <div class="row align-items-center p-0">
                                                <p class="col-12 m-0 text-right" style="direction: ltr;"> {{ "@".$user->username }}</p>
                                                <p class="col-12 text-muted m-0 text-right" style="direction: ltr;">{{$user->name}}</p>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="preview-thumbnail">

                                                <button type="button" class="btn btn-rounded"  id="" >
                                                    <span class="badge badge-primary">تبدیل کاربر به مدیر</span>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

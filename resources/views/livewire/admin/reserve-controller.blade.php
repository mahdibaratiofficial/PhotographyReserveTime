<div class="main-panel text-justify">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-lg-12 order-3">
                      <div class="card p-3">
                        <table class="table table-borderless">

                            <tbody>

                                @foreach ($this->allReserves() as $reserve )
                                <tr>
                                    <td id="username">
                                        <div class="row align-items-center p-0">
                                            <p class="col-12 m-0 text-right" style="direction: ltr;"> {{ "@".$reserve->user()->first()->username }}</p>
                                            <p class="col-12 text-muted m-0 text-right" style="direction: ltr;">{{$reserve->user()->first()->name}}</p>
                                        </div>
                                    </td>

                                    <td>

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

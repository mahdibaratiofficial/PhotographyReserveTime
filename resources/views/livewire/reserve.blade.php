<div class="container">
    <div class="row justify-content-center align-items-center p-5">
        <div class="col-8 m-5 border" style="">

            <form wire:submit.prevent="reserveTime">
                <div class="h3 text-center">رزرو وقت</div>
                <div class="text-center text-muted">دوست عزیز لطفا اطلاعات را با دقت وارد کنید</div>
                <div class="mt-3"></div>
                <div class="row">
                <div class="col-3 mt-4">
                    نام و نام خوانوادگی :
                </div>
    
                <div class="col-9  mt-4">
                    <input type="text" class="c-form-control" wire:model.defer="name" >
                </div>

                <div class="mt-3"></div>

                <div class="col-3  mt-4">
                    شماره:
                </div>

                <div class="col-9  mt-4">
                    <input type="text" class="c-form-control" wire:change="isTrueNumber($event.target.value)"   placeholder="نمونه : 09022611464" >
                </div>

                <div class="mt-3"></div>


                <div class="col-12  mt-4">
                    <div class="row justify-content-center">
                        <div class="col-3">نوع رزرو :</div>
                        <div class="col-3"><button type="button" class="c-btn c-btn-primary">وقت عکاسی</button></div>
                        <div class="col-3"><button type="button" class="c-btn c-btn-primary"> وقت فیلم</button></div>
                        <div class="col-3"><button type="button" class="c-btn c-btn-primary">طراحی</button></div>
                    </div>
                </div>
                <div class="col-12" >





                    {{-- Calender start --}}

                    <div class="row " style="margin: 30px 50px 30px 1px">
                        <div class="col-5 bg-info">
                            اطلاعات روز و رزرو در اینجا
                        </div>

                        <div class="col-7 bg-warning">
                            <div class="cal-head">
                                ماه سال
                                <br>
                                روز های هفتهgeid
                            </div>

                            <div class="cal-body">
                                <div class="x-container space">
                                    @php
                                        $is_start=true;
                                    @endphp

                                    @while ($is_start)
                                    <span></span>
                                        @php
                                            $is_start=false;
                                        @endphp
                                        @break                                        
                                    @endwhile

                                    @foreach (range(1,30) as $days )
                                    
                                       <span class="cal-item"> {{ $days }} </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Calender Ends --}}


                </div>
                <button type="submit" class="c-btn c-btn-primary">رزرو تایم</button>
            </div>


            </form>

        </div>
    </div>
</div>
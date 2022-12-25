<div class="container">
    <div class="row justify-content-center align-items-center p-5">
        <div class="col-8 m-5" style="border:1px solid #ccc;border-radius:30px;padding:10px">

            <form wire:submit.prevent>
                <div class="h3 text-center">رزرو تایم</div>
                <div class="text-center text-muted">{{ auth()->user()->name }}  عزیز لطفا اطلاعات را با دقت وارد کنید </div>
                <div class="mt-3"></div>
                <div class="row">

                <div class="mt-3"></div>

                <div class="mt-3"></div>


                <div class="col-12  mt-4">
                    <div class="row">
                        <div class="col-2 align-self-center ">نوع رزرو :</div>
                        <div class="col-10 pl-3 pr-3">
                            <div class="row d-flex justify-content-around align-items-center ">
                                <button type="col-3 button m-2" class="c-btn {{ $this->btnClass('photography') }}" wire:click="selectType('photography')">وقت عکاسی</button>
                                <button type="col-3 button m-2" class="c-btn {{ $this->btnClass('film') }}" wire:click="selectType('film')""> وقت فیلم</button>
                                <button type="col-3 button m-2" class="c-btn {{ $this->btnClass('design') }}" wire:click="selectType('design')"">طراحی</button>
                                <button type="col-3 button m-2" class="c-btn {{ $this->btnClass('poster') }}" wire:click="selectType('poster')"">طراحی پوستر</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="offset-1"></div> --}}
                <div class="col-12 " >
                    {{-- Calender start --}}
                    <livewire:calendar-component />
                    {{-- Calender Ends --}}
                </div>

                <div class="col-12 d-flex justify-content-around mt-5">
                    <button class="c-btn c-btn-primary" wire:ignore wire:click="reserveTime">رزرو تایم</button>
                    <a href="{{ url('/') }}" class="c-btn">لغو </a>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
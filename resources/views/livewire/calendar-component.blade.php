<div class="row calander" >
    <div class="col-5 calendar-info">
        <div class="row text-center" dir="ltr">
            <div class="col-12">
                @if(isset($dayName,$day,$month))
                <h5 class="mt-3 text-white">{{ $dayName." ".$day." ".$monthName }}</h5>
                @else
                <h5 class="mt-3 text-white">روز مورد نطر را انتخاب کنید</h5>
                @endif
            </div>

            @if($this->day)
            <div class="col-12">
                <p> تایم های خالی</p>
                @foreach ($this->freeTime()  as $times)
                @php
                    $time="'".$times."'";
                @endphp
                    <button class="c-badge {{ $this->btnClassPart($time) }}" wire:click="selectPart({{ $time }})">{{ $times }}</button>
                @endforeach
            </div>

            <div class="col-12 mt-3">
                <p> چطور با شما تماس بگیریم؟ </p>
                <button class="c-badge {{ $this->btnClassConncetion('sms') }}" wire:click="selectConnectionType('sms')">پیامک</button>
                <button class="c-badge {{ $this->btnClassConncetion('email') }}" wire:click="selectConnectionType('email')">ایمیل</button>
                <button class="c-badge {{ $this->btnClassConncetion('call') }}" wire:click="selectConnectionType('call')">تماس</button>
            </div>

            <div class="col-12 mt-5">
                <button type="button" class="c-btn c-btn-light-outline" wire:click="checkAllVarable"> ثبت تایم  </button>
            </div>
            @endif
        </div>
    </div>

    <div class="col-7 ">
        <div class="">
            <div class="mounth">
                <select class="c-btn" wire:model="month">
                    <option value="1">
                        فروردین
                    </option>

                    <option value="2">
                        اردیبهشت
                    </option>

                    <option value="3">
                        خرداد
                    </option>

                    <option value="4">
                        تیر
                    </option>

                    <option value="5">
                        مرداد
                    </option>

                    <option value="6">
                        شهریور
                    </option>

                    <option value="7">
                        مهر
                    </option>

                    <option value="8">
                        آبان
                    </option>

                    <option value="9">
                        آذر
                    </option>

                    <option value="10">
                        دی
                    </option>

                    <option value="11">
                        بهمن
                    </option>

                    <option value="12">
                        اسفند
                    </option>
                </select>
            </div>
            <br>
        </div>

        <div class="cal-body">
            
            <div class="x-container space">

                {{-- Days of Week --}}
                @php
                    $days=[
                        'ش',
                        'ی',
                        'د',
                        'س',
                        'چ',
                        'پ',
                        'ج',
                    ]
                @endphp

                    @foreach ($days as $day)
                        <span class="dayName">{{ $day }}</span>
                    @endforeach 
                
                {{-- Days Of Week End --}}

                @php
                    $is_start=$this->month()['date']->instace->getDayOfWeek();
                @endphp

                @for($i=1;$i<=$is_start;$i++)
                    <span style="opacity: 20%"></span>                                     
                @endfor

                
                <!-- finished days start -->
                @isset($this->month()['finished'])
                    @foreach ($this->month()['finished'] as $finished)
                        <span class="" style="opacity: 20%">{{ $finished }}</span>
                    @endforeach
                @endisset
                <!-- finished days end -->


                <!-- not finished days start -->
                @isset($this->month()['not-finished'])
                    @foreach ($this->month()['not-finished'] as $not_finished)
                        <span class="" wire:click="showInfo({{ "'".$not_finished."'" }},{{ "'".$this->month()['date']->instace->format('m')."'" }})" :key="$not-finished.rand()">{{ $not_finished }}</span>
                    @endforeach
                @endisset
                <!-- not finished days end -->
            </div>
        </div>
    </div>

   @if(count($errors))
   {{ $errors }}
   @endif
</div>
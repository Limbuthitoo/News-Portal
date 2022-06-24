<div class="container-fluid bg-light py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-2">
                <img src="{{asset($nepalnews->logo)}}" alt="" width="300" class="img-fluid">
            </div>
            <div class="col-lg-7">
                <div class="row">

                    <div class="col-3 justify-center vl py-2">
                        <p style="font-size: 12px;" class="h6">अध्यक्ष तथा प्रबन्ध निर्देशक:</p>
                        <h6 class="d-flex justify-content-between">{{$nepalnews->निर्देशक}}</h6>
                    </div>
                    <div class="col-3 justify-center vl py-2">
                        <p style="font-size: 12px;" class="h6">प्रधान सम्पादकः</p>
                        <h6 class="d-flex justify-content-between">{{$nepalnews->सम्पादक}}</h6>
                    </div>
                    <div class="col-3 justify-center vl py-2">
                        <p style="font-size: 12px;" class="h6">सूचना विभाग दर्ता नं.</p>
                        <h6 class="d-flex justify-content-between">{{$nepalnews->doib}}</h6>
                    </div>
                    <div class="col-3 justify-center vl py-2">
                        <p style="font-size: 12px;" class="h6">{{$nepalnews->contact}}</p>
                        <p style="font-size: 12px;" class="h6">{{$nepalnews->email}}</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 vl">
                <p style="font-size: 12px;" class="h6">{{$nepalnews->address}}</p>
                        <p style="font-size: 12px;" class="h6">© २००६-२०२२ Nepalnews.com सर्वाधिकार सुरक्षित</p>
            </div>
        </div>
    </div>
</div>

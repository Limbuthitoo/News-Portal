@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card p-4">
                <div class="card-title">
                    <span class="h3">General Setting</span>
                </div>
                <div class="card-body">
                    <form action="/nepalnews" method="post" class="form-sample" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="">Company Name:</label>
                            <input class="form-control" type="text" id="name" name="name"
                                placeholder="Enter Company Name">
                        </div>
                        <div class="form-group">
                            <label for="address" class="">Company Address:</label>
                            <input class="form-control" type="text" id="address" name="address"
                                placeholder="Enter Company Address">
                        </div>
                        <div class="form-group">
                            <label for="email" class="">Company Email:</label>
                            <input class="form-control" type="text" id="email" name="email"
                                placeholder="Enter Company Email">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact" class="">Company Contact :</label>
                                    <input class="form-control" type="text" id="contact" name="contact"
                                        placeholder="Enter company contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="registration" class="">Company Registration No:</label>
                                    <input class="form-control" type="text" id="registration" name="registration"
                                        placeholder="Enter company registration no">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pan" class="">Company PAN no:</label>
                                    <input class="form-control" type="text" id="pan" name="pan"
                                        placeholder="Enter Company Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doib" class="">Company DOIB No:</label>
                                    <input class="form-control" type="text" id="doib" name="doib"
                                        placeholder="Enter Company DOIB No">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="निर्देशक" class="">अध्यक्ष तथा प्रबन्ध
                                        निर्देशक:</label>
                                    <input class="form-control" type="text" id="निर्देशक" name="निर्देशक"
                                        placeholder="अध्यक्ष तथा प्रबन्ध निर्देशक Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="सम्पादक" class="">कार्यकारी सम्पादक:</label>
                                    <input class="form-control" type="text" id="सम्पादक" name="सम्पादक"
                                        placeholder="कार्यकारी सम्पादक Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="संवाददाता" class="">संवाददाता:</label>
                            <input class="form-control" type="text" id="संवाददाता" name="संवाददाता"
                                placeholder="संवाददाता Name">
                        </div>
                        <div class="form-group">
                            <label for="logo" class="">Update Logo:</label>
                            <input class="form-control" type="file" id="logo" name="logo"
                                placeholder="Update Logo" accept="image/jpg, image/png">
                        </div>
                        <button type="submit" class="btn btn-success">Save Record</button>
                        <a href="/posts" class="btn btn-danger">Back</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.app');
@section('content')
    <div class="row">
        <div class="continer col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-title">
                    <span class="h3">General Setting</span>
                </div>
                <div class="card-body">

                    <form action="/nepalnews/{{ $company->id }}" method="post" class="form-sample"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name" class="">Company Name:</label>
                            <input class="form-control" type="text" id="name" name="name"
                                value="{{ $company->name }}">
                        </div>


                        <div class="form-group">
                            <label for="address" class="">Company Address:</label>
                            <input class="form-control" type="text" id="address" name="address"
                                value="{{ $company->address }}">
                        </div>


                        <div class="form-group">
                            <label for="email" class="">Company Email:</label>
                            <input class="form-control" type="text" id="email" name="email"
                                value="{{ $company->email }}">
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact" class="">Company Contact :</label>
                                    <input class="form-control" type="text" id="contact" name="contact"
                                        value="{{ $company->contact }}">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="registration" class="">Company Registration No:</label>
                                    <input class="form-control" type="text" id="registration" name="registration"
                                        value="{{ $company->registration }}">
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pan" class="">Company PAN no:</label>
                                    <input class="form-control" type="text" id="pan" name="pan"
                                        value="{{ $company->pan }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doib" class="">Company DOIB No:</label>
                                    <input class="form-control" type="text" id="doib" name="doib"
                                        value="{{ $company->doib }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="निर्देशक" class="">अध्यक्ष तथा प्रबन्ध
                                        निर्देशक:</label>
                                    <input class="form-control" type="text" id="निर्देशक" name="निर्देशक"
                                        value="{{ $company->निर्देशक }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="सम्पादक" class="">कार्यकारी
                                        सम्पादक:</label>
                                    <input class="form-control" type="text" id="सम्पादक" name="सम्पादक"
                                        value="{{ $company->सम्पादक }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="संवाददाता" class="">संवाददाता:</label>
                            <input class="form-control" type="text" id="संवाददाता" name="संवाददाता"
                                value="{{ $company->संवाददाता }}">
                        </div>
                        <div class="form-group">
                            <div>
                                <img src="{{ asset($company->logo) }}" width="150" alt="">
                            </div>
                            <label for="logo" class="py-2">Update Logo:</label>
                            <input class="form-control" type="file" id="logo" name="logo"
                                placeholder="Update Logo" accept="image/jpg, image/png">
                        </div>
                        <button type="submit" class="btn btn-success">Save
                            Record</button>
                        <a href="/nepalnews" class="btn btn-danger">Cancel</a>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection

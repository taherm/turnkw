@extends('layouts.master-en')
@section('content')


<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <h1 class="text-center">Careers</h1>

        </div>

    </div>

</div>

<br>





<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <form action="/careers-mail" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col">
                        <label>Your name *</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Your email address *</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Position *</label>
                        <input type="text" value="" data-msg-required="Please enter the Postion applying for." maxlength="100" class="form-control" name="position" id="position" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Attach CV (Only PDF Files) *</label>
                        <input type="file" value="" class="form-control" name="cv" id="cv" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Message *</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input style="background-color: #666666;" type="submit" style="color:white !important;background:#666666" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            @endif
        </div>
    </div>

</div>



@endsection
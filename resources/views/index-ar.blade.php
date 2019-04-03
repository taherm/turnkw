@extends('layouts.master-ar')
@section('content')

<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <img src="{{asset('uploads/home.jpeg')}}" width="100%" height="auto">
        </div>

    </div>

</div>
<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <p>
                يقوم أغلب موظفي التسويق باختيار وسائل الإعلان السنوية لحجز إعلانات شبكات التواصل الإجتماعي والتلفزيون والطرق السريعة، وتصميم مجموعة من المطبوعات ويحدد ميزانيتها، ثم يكرر العملية عند نهاية كل عام ويضيف ١٠٪ على الميزانية الجديدة لزيادة حجم الإعلانات وتبقى النتائج واحدة. <a href="/about-ar" style="color:#0099e6 !important">أكثر من</a>
            </p>
        </div>

    </div>

</div>

<br>



<div class="container">



    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

        @foreach($ser as $s)
        <div class="col-lg-4 isotope-item websites" id="websites">
            <div class="portfolio-item">
                <a href="{{ url('services_ar/'.$s->id) }}">
                    <span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="{{asset('uploads/'.$s->image)}}" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner text-1 line-height-xs pt-1">{{$s->title_ar}}</span>

                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        @endforeach


    </div>
</div>



<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <form action="/contact-mail" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col">
                        <label>الاسم*</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>البريد الإلكتروني</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>الموضوع</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>محتوى الموضوع</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" style="color:white !important" value="إرسال" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>



@endsection 
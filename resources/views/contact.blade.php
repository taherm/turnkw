@extends('layouts.master-en')
@section('content')

<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.8159598536026!2d47.975546115099654!3d29.37567748213051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84eb8a14d6c9%3A0x6512d4c4b4b4c36a!2stasaweeq!5e0!3m2!1sen!2skw!4v1527412677689" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>

</div>
<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <h1 class="text-center">Contact Us</h1>
            <p>
                <ul>
                    <li> Telephone:+965 2291 33 67</li>

                    <li>Address:</li>

                    <li>State of Kuwait – East – Plot 6 – Mubarak Al – Kabeer Street – Tower Aldarawza 51 – Floor 7</li>

                    <li>E-mail: info@tasaweeq.com </li>
                </ul>
            </p>
        </div>

    </div>

</div>

<br>





<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <form action="/contact-mail" method="POST">
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
                        <label>Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
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
                        <input type="submit" style="color:white !important" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>



@endsection 
@extends('layouts.web')

@section('content')
<!-- /contact-form -->
<section class="w3l-contact-main">
    <div class="contact-infhny py-5">
        <div class="container">
            <div class="contact-grids row py-lg-5 mt-lg-4">
                <div class="contact-left col-lg-6">
                    <h3>Contact</h3>
                    <h4>Everything Start With A Hello!</h4>
                    <h6>We're here to answer any questions you may have and create an effective solution for your instructional needs.</h6>
                </div>
                <div class="contact-right col-lg-6">
                    <form action="" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="w3lName" placeholder="Full name" class="contact-input" />
                            <input type="email" name="w3lSender" placeholder="Your email" class="contact-input" />
                            <input type="text" name="w3lSubect" placeholder="Subject" class="contact-input" />
                            <input type="number" name="w3lPhone" placeholder="Phone number" class="contact-input" />
                        </div>
                        <div class="form-input mb-3">
                            <textarea name="w3lMessage" placeholder="Type your message here" required=""></textarea>
                        </div>
                        <div class="form-input mb-5">
                            <label class="container">
                                <p>Send me a copy <a href="#">privacy policy.</a></p>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button class="btn submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
</section>
<!-- //contact-form -->
@endsection
 @extends('frontend.layouts.app')
@section('content')
  <div class="contact">
        <div class="contacts">
            <div class="contact-middle">Get in Touch</div>
            <div class="contact-form">
                <div class="contact-left">
                    <div class="contact-detail">
                        <i class="material-icons">place</i>
                        <span>Kirtipur, kathmandu</span>
                    </div>
                    <div class="contact-detail">
                        <i class="material-icons">local_phone </i>
                        <span>+000 -00000</span>
                    </div>
                    <div class="contact-detail">
                        <i class="material-icons">phone_android </i>
                        <span>+977-9813503419</span>
                    </div>
                    <div class="contact-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="map">
                        <div style="width: 100%">
                            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=kathmandu+(Ktm%20city%20trip%20planner)&amp;t=k&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="http://www.gps.ie/">Google Maps coordinates</a></div>
                    </div>
                </div>
                <div class="contact-right">
                    <label>Leave us a message</label>
                    <input type="text" placeholder="Full Name">
                    <input type="text" placeholder="Email">
                    <textarea></textarea>
                    <button>Send</button>
                </div>

            </div>
        </div>
    </div>


 @endsection
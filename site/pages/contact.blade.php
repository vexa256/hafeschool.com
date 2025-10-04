<section class="space space-extra-bottom overflow-hidden">
    <div class="container">
      <div class="row gx-60">
        <div class="col-lg-5 mb-30">
          <div class="vs-title title-anime animation-style2 mb-3">
            <div class="title-anime__wrap">
              <span class="vs-title__sub">contact us</span>
              <h2 class="vs-title__main">Get In Touch</h2>
            </div>
          </div>
          <div class="contact-info mb-20 wow animate__fadeInUp" data-wow-delay="0.45s">
            <span>Address:</span> Plot {{ $generalSettings->Plot }}, {{ $generalSettings->Address }}
          </div>
          <div class="mb-20">
            <div class="address-info wow animate__fadeInUp" data-wow-delay="0.55s">
              <div class="address-info__icon">
                <i class="fa-light fa-phone-volume"></i>
              </div>
              <div class="address-info__content">
                <span>Customer Service :</span>
                <a href="tel:{{ $generalSettings->Code }}{{ $generalSettings->Phone }}">{{ $generalSettings->Code }} {{ $generalSettings->Phone }},</a>
                <a href="tel:{{ $generalSettings->Code }}{{ $generalSettings->Phone2 }}">{{ $generalSettings->Code }} {{ $generalSettings->Phone2 }}</a>
              </div>
            </div>
            <div class="address-info wow animate__fadeInUp" data-wow-delay="0.65s">
              <div class="address-info__icon">
                <i class="fa-regular fa-envelope"></i>
              </div>
              <div class="address-info__content">
                <span>careers :</span>
                <a class="text-lowercase" href="mailto:{{ $generalSettings->Email }}">{{ $generalSettings->Email }}</a>
              </div>
            </div>
          </div>
          <img class="contact-divider" src="assets/img/elements/divider-contact.svg" alt="toddly">
          <div class="social-style style2">
            <span class="social-style__label">Follow Us :</span>
            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="col-lg-7 mb-30">
          <form action="#" method="post" class="form-style2 ajax-contact wow animate__fadeInUp" data-wow-delay="0.95s">
            <div class="row gx-20">
              <!-- First Name -->
              <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="fname" id="fname" placeholder="Your Name *">
              </div>
              <!-- Last Name -->
              <div class="col-md-6 form-group">
                <input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name *">
              </div>
              <!-- Email Address -->
              <div class="col-md-6 form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email Address *">
              </div>
              <!-- Phone Number -->
              <div class="col-md-6 form-group">
                <input class="form-control" type="tel" name="phone" id="phone" placeholder="Phone *">
              </div>
              <!-- Message -->
              <div class="col-12 form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Type Your Message *" rows="5"></textarea>
              </div>
              <!-- Submit Button -->
              <div class="col-12">
                <button class="vs-btn"><span class="vs-btn__border"></span>Send Message</button>
              </div>
            </div>
            <!-- Form Messages -->
          </form>
          <p class="form-messages mb-0 mt-3"></p>
        </div>
      </div>
    </div>
  </section>

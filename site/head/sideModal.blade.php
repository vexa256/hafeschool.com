<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
      <div class="sidemenu-logo sidemenu-item">
        <a href="/"><img src="{{ asset($generalSettings->Logo) }}" style="width: 30%" alt="{{ $generalSettings->CompanyName }}" class="logo"></a>
        <button class="closeButton sideMenuCls">X</button>
      </div>
      <hr class="sidemenu-hr sidemenu-item">
      <div class="sidemenu-inner">
        <div class="sidemenu-body">
          <p class="sidemenu-item text-white mb-30">The school caters to children from pre and primary levels, providing quality education with a focus on holistic development and modern teaching methodologies.</p>
          <h4 class="sidemenu-subtitle sidemenu-item">CONTACT US</h4>
          <div class="sidemenu-contact">
            <ul>
              <li class="sidemenu-item">
                <a href="tel:+{{ $generalSettings->Code }}{{ $generalSettings->Phone }}" class="sidemenu-link">{{ $generalSettings->Code }} {{ $generalSettings->Phone }}</a>
              </li>
              <li class="sidemenu-item">
                <a href="mailto:{{ $generalSettings->Email }}" class="sidemenu-link">{{ $generalSettings->Email }}</a>
              </li>
              <li class="sidemenu-item">
                <a href="/">{{ $generalSettings->Address }}</a>
              </li>
            </ul>
          </div>
          <h4 class="sidemenu-subtitle style2 text-uppercase sidemenu-item">Gallery
          </h4>
          <div class="sidebar-gallery sidemenu-item">


            @foreach ($Gallery as $data)
            <div class="gallery-thumb">
              <img src="{{ asset($data->Image) }}" alt="Gallery Image" class="w-100">
              <a href="{{ asset($data->Image) }}" class="popup-image gal-btn"><i class="fal fa-plus"></i></a>
            </div>
            @endforeach


          </div>
        </div>
        <div class="sidemenu-footer">
          <hr class="sidemenu-hr sidemenu-item">
          <div class="footer-social sidemenu-item">
            <span>follow us on :</span>
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

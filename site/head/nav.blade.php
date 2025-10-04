<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <div class="mobile-logo">
        <a href="/"><img src="{{ asset('uploads/logo.png') }}" alt="{{ $generalSettings->CompanyName }}" class="logo"></a>
        <button class="vs-menu-toggle">
          <i class="fa-solid fa-xmark"></i>
        </button>
      </div>
      <div class="vs-header__right pt-4">
        <button class="searchBoxTggler" type="button">
          <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.4174 16.6954L17.2213 13.4773C19.3155 10.0703 18.8936 5.54217 15.9593 2.58766C12.5328 -0.862552 6.9769 -0.862552 3.55037 2.58766C0.123835 6.03787 0.123835 11.6322 3.55037 15.0824C6.5354 18.088 11.1341 18.4736 14.5333 16.2469L17.7019 19.4335C18.4521 20.1888 19.6711 20.1888 20.4213 19.4335C21.1675 18.6781 21.1675 17.4507 20.4174 16.6954ZM5.711 12.9029C3.48395 10.6604 3.48395 7.00959 5.711 4.76715C7.93805 2.52471 11.5638 2.52471 13.7909 4.76715C16.018 7.00959 16.018 10.6604 13.7909 12.9029C11.5638 15.1453 7.93805 15.1453 5.711 12.9029Z" fill="#F6F5F5"></path>
          </svg>
        </button>
        <button class="sideMenuToggler" type="button">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.4307 36H4.16306C1.86757 36 0 34.1324 0 31.8369V23.5693C0 21.2738 1.86757 19.4062 4.16306 19.4062H12.4307C14.7262 19.4062 16.5938 21.2738 16.5938 23.5693V31.8369C16.5938 34.1324 14.7262 36 12.4307 36ZM13.7812 23.5693C13.7812 22.8246 13.1754 22.2188 12.4307 22.2188H4.16306C3.41838 22.2188 2.8125 22.8246 2.8125 23.5693V31.8369C2.8125 32.5816 3.41838 33.1875 4.16306 33.1875H12.4307C13.1754 33.1875 13.7812 32.5816 13.7812 31.8369V23.5693Z" fill="#4A2559"></path>
            <path d="M31.7812 36H23.625C21.2988 36 19.4062 34.1075 19.4062 31.7812V23.625C19.4062 21.2988 21.2988 19.4062 23.625 19.4062H31.7812C34.1075 19.4062 36 21.2988 36 23.625V31.7812C36 34.1075 34.1075 36 31.7812 36ZM33.1875 23.625C33.1875 22.8496 32.5567 22.2188 31.7812 22.2188H23.625C22.8496 22.2188 22.2188 22.8496 22.2188 23.625V31.7812C22.2188 32.5567 22.8496 33.1875 23.625 33.1875H31.7812C32.5567 33.1875 33.1875 32.5567 33.1875 31.7812V23.625Z" fill="#D18109"></path>
            <path d="M12.4307 16.5938H4.16306C1.86757 16.5938 0 14.7262 0 12.4307V4.16306C0 1.86757 1.86757 0 4.16306 0H12.4307C14.7262 0 16.5938 1.86757 16.5938 4.16306V12.4307C16.5938 14.7262 14.7262 16.5938 12.4307 16.5938ZM13.7812 4.16306C13.7812 3.41838 13.1754 2.8125 12.4307 2.8125H4.16306C3.41838 2.8125 2.8125 3.41838 2.8125 4.16306V12.4307C2.8125 13.1754 3.41838 13.7812 4.16306 13.7812H12.4307C13.1754 13.7812 13.7812 13.1754 13.7812 12.4307V4.16306Z" fill="#D18109"></path>
            <path d="M31.7812 16.5938H23.625C21.2988 16.5938 19.4062 14.7012 19.4062 12.375V4.21875C19.4062 1.89253 21.2988 0 23.625 0H31.7812C34.1075 0 36 1.89253 36 4.21875V12.375C36 14.7012 34.1075 16.5938 31.7812 16.5938ZM33.1875 4.21875C33.1875 3.44334 32.5567 2.8125 31.7812 2.8125H23.625C22.8496 2.8125 22.2188 3.44334 22.2188 4.21875V12.375C22.2188 13.1504 22.8496 13.7812 23.625 13.7812H31.7812C32.5567 13.7812 33.1875 13.1504 33.1875 12.375V4.21875Z" fill="#4A2559"></path>
          </svg>
        </button>
      </div>
      <div class="vs-mobile-menu">

        @include('head.menu')

      </div>





      <div class="px-20 py-20">
        <div class="sidemenu-contact style2">
          <ul>
            <li>
              <a href="tel:{{ $generalSettings->Code }}{{ $generalSettings->Phone }}" class="sidemenu-link">{{ $generalSettings->Code }} {{ $generalSettings->Phone }}</a>
            </li>
            <li>
              <a href="mailto:{{ $generalSettings->Email }}" class="sidemenu-link">{{ $generalSettings->Email }}</a>
            </li>
            <li>
              <a href="/">{{ $generalSettings->Address }}</a>
            </li>
          </ul>
        </div>
        <div class="footer-social mb-20">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://behance.com/"><i class="fab fa-behance"></i></a>
        </div>
        <p class="sidemenu-text sidemenu-text--footer text-center mb-0">Copyright © 2025 <a class="vs-theme-color" href="/">{{ $generalSettings->CompanyName }}</a>.
          All
          rights reserved.
        </p>
      </div>
    </div>
  </div>




    <!-- ==============================
    	Popup Search Box
    ============================== -->
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
          <input id="search-field" type="text" class="border-theme" placeholder="What are you looking for">
          <button type="submit"><i class="fal fa-search"></i></button>
        </form>
      </div>
      <!--==============================
        Cart Sidebar
      ===============================-->
      <div class="sideCart-wrapper">
        <div class="cart-sidebar-content">
          <!-- Close Button -->
          <div class="sidemenu-logo cart-animation-item">
            <a href="/"><img src="{{ asset('uploads/logo.png') }}" alt="{{ $generalSettings->CompanyName }}" class="logo"></a>
            <button class="cart-close-button">X</button>
          </div>
          <!-- Shopping Cart Widget -->
          <div class="shopping-cart-widget">
            <div class="shopping-cart-content">
              <div class="cart-items">
                <div class="cart-item cart-animation-item">
                  <img class="cart-item__image" src="{{ asset('assets/img/shop/shop-sidebar-1-1.png') }}" alt="Premium Headphones">
                  <div class="item-details">
                    <h3><a href="shop-nft.html">NFT Game</a></h3>
                    <div class="item-controls">
                      <div class="quantity">
                        <div class="quantity__field quantity-container">
                          <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                          <div class="quantity__buttons">
                            <button class="quantity-plus qty-btn"><i class="fa-solid fa-angle-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="fa-solid fa-angle-down"></i></button>
                          </div>
                        </div>
                      </div>
                      <span class="item-price">× $100.00</span>
                    </div>
                  </div>
                  <button class="remove-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18" />
                      <path d="m6 6 12 12" />
                    </svg>
                  </button>
                </div>
                <div class="cart-item cart-animation-item">
                  <img class="cart-item__image" src="{{ asset('assets/img/shop/shop-sidebar-1-2.png') }}" alt="Premium Headphones">
                  <div class="item-details">
                    <h3><a href="shop-nft.html">Game Controller</a></h3>
                    <div class="item-controls">
                      <div class="quantity">
                        <div class="quantity__field quantity-container">
                          <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                          <div class="quantity__buttons">
                            <button class="quantity-plus qty-btn"><i class="fa-solid fa-angle-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="fa-solid fa-angle-down"></i></button>
                          </div>
                        </div>
                      </div>
                      <span class="item-price">× $100.00</span>
                    </div>
                  </div>
                  <button class="remove-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18" />
                      <path d="m6 6 12 12" />
                    </svg>
                  </button>
                </div>
                <div class="cart-item cart-animation-item">
                  <img class="cart-item__image" src="{{ asset('assets/img/shop/shop-sidebar-1-3.png') }}" alt="Premium Headphones">
                  <div class="item-details">
                    <h3><a href="shop-nft.html">NFT Game Two</a></h3>
                    <div class="item-controls">
                      <div class="quantity">
                        <div class="quantity__field quantity-container">
                          <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                          <div class="quantity__buttons">
                            <button class="quantity-plus qty-btn"><i class="fa-solid fa-angle-up"></i></button>
                            <button class="quantity-minus qty-btn"><i class="fa-solid fa-angle-down"></i></button>
                          </div>
                        </div>
                      </div>
                      <span class="item-price">× $100.00</span>
                    </div>
                  </div>
                  <button class="remove-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 6 6 18" />
                      <path d="m6 6 12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="cart-footer">
                <div class="subtotal cart-animation-item">
                  <span>Subtotal:</span>
                  <span class="total-amount">$110.00</span>
                </div>
                <div class="cart-actions">
                  <a href="cart.html" class="vs-btn cart-animation-item"><span class="vs-btn__border"></span>View Cart</a>
                  <a href="checkout.html" class="vs-btn style4 cart-animation-item"><span
                      class="vs-btn__border"></span>Checkout</a>
                </div>
              </div>
              <!-- Social Media Links -->
              <div class="footer-social social-style">
                <h4 class="social-style__title mb-0 cart-animation-item">Follow Us :</h4>
                <ul class="cart-animation-item">
                  <li><a href="https://twitter.com/"><i class="fa-brands fa-x-twitter"></i></a></li>
                  <li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--==============================
            Offcanvas
        ============================== -->
@include('head.sideModal')

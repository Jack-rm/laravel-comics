<footer>
    <div class="my_footer-start">
      <div class="my_footer-wrapper">
        <div>
          <div class="my_footer-columns">
            <div class="my_column">
              <h5>Dc Comics</h5>
              <ul>
                  @foreach ($header_links as $link)
                      <li>
                          <a href="{{ $link['route'] }}">{{ $link['text'] }}</a>
                      </li>
                  @endforeach
              </ul>
              <h5>Shop</h5>
              <ul>
                @foreach ($footer_shop as $item)  
                  <li >
                    <a href="#"> {{ $item['text'] }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
            <div class="my_column">
              <h5>Dc</h5>
              <ul>
                @foreach ($footer_nav as $item)
                <li>
                  <a href="#"> {{ $item['text'] }} </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="my_column">
              <h5>Sites</h5>
              <ul>
                @foreach ($footer_sites as $item)
                <li>
                  <a href="#"> {{ $item['text'] }} </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="my_footer-disc">
            <p>All Site Content TM and c 202 DC Enterainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
            <a href="#"> Cookies Settings </a>
          </div>
        </div>

        <div class="my_footer-img-box">
        </div>
      </div>

    </div>

    <div class="my_footer-end">
      <div class="my_footer-wrapper">

        <button class="my_btn-dark">Sign-up now!</button>
        
        <div class="my_footer-socials">
          <ul>
            <li>
              <span>Follow Us</span>
              </li>
            <li>
              <a href="#">
                <img src="{{ asset('images/footer-facebook.png') }}" alt="logo di Facebook">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('images/footer-twitter.png') }}" alt="logo di Twitter">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('images/footer-youtube.png') }}" alt="logo di YouTube">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('images/footer-pinterest.png') }}" alt="logo di Pinterest">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('images/footer-periscope.png') }}" alt="Periscope">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
</footer>
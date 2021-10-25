<footer>
    <div class="my_footer-start">
      <div class="my_footer-wrapper">
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
              <li ><a href="#"> test </a></li>
            </ul>
          </div>
          <div class="my_column">
            <h5>Dc</h5>
            <ul>
              <li><a href="#"> test </a></li>
            </ul>
          </div>
          <div class="my_column">
            <h5>Sites</h5>
            <ul>
              <li><a href="#"> test </a></li>
            </ul>
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
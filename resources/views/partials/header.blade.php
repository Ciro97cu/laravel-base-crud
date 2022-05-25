<header>
    <section class="dc_head">
      <div class="container-sm">
        <div class="row justify-content-end ">
          <div class="col-auto text-white">
            <span class="pe-5">DC POWER&trade;VISA	&reg;</span>
            <span>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>
          </div>
        </div>
      </div>
    </section>
    <div class="container py-3">
      <div class="row">
        <div class="col-sm-1">
          <div class="logo_wrapper">
            <img src="/images/dc-logo.png" alt="logo-dc" />
          </div>
        </div>
        <div class="col-sm-9">
          <ul class="row justify-content-between">
            @foreach ($navLink as $link)
              <li class="col-auto">
                <a href="#">
                  {{$link}}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
        <div class="col-sm-2">
          <input type="text" placeholder="Search &#xf002;">
        </div>
      </div>
    </div>
  </header>
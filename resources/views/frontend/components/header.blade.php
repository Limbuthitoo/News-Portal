<div class="container">
    <div class="row py-4">
        <div class="col-md-3">
            <a href="/"><img src="{{asset($nepalnews->logo)}}" class="img-fluid" alt=""></a>
        </div>
        <div class="col-md-3 py-2"></div>
        <div class="col-md-6 float-end">
            <div class="card overflow-hidden">
                <a href=""><img src="{{asset($adstop->ad_image)}}" class=" card-img-top" alt=""></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a href=""></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-danger" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header bg-white">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="{{asset($nepalnews->logo)}}" class="img-fluid" width="250" alt=""></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
        <ul class="navbar-nav py-2">
        @foreach ($menus as $index=> $menu)
       @if ($index == 0)
        <li class="nav-item px-2 ">
            <a class="nav-link fw-bold text-white" aria-current="page" href="/">{{$menu->cat_nep}}</a>
            </li>
        @elseif ($index>0 && $index<10)
        <li class="nav-item px-3 ">
            <a class="nav-link fw-bold text-white" aria-current="page" href="/category/{{ $menu->slug }}">{{$menu->cat_nep}}</a>
        </li>
        @endif
        @endforeach

        <!-- Dropdown Menu -->

            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    थप+
                </a>
                <ul class="dropdown-menu dropdown-menu-danger" aria-labelledby="navbarDangerDropdownMenuLink">
                  <li>
                    @foreach ($menus as $index=> $menu)
                    @if ($index>9)
                    <a class="dropdown-item text-danger fw-bold" href="/category/{{ $menu->slug }}">{{$menu->cat_nep}}</a>
                    @endif
                    @endforeach
                </li>
                </ul>
              </li>
            </ul>
        </ul>
      </div>
    </div>
  </nav>

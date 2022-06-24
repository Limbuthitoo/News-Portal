<div class="container">
    <div class="row py-4">
        <div class="col-md-3">
            <a href=""><img src="{{asset($nepalnews->logo)}}" class="img-fluid" alt=""></a>
        </div>
        <div class="col-md-3 py-2"></div>
        <div class="col-md-6 float-end">
            <a href=""><img src="{{asset($adstop->ad_image)}}" class="img-fluid" alt=""></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a href=""></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        @foreach ($menus as $index=> $menu)
       @if ($index == 0)
        <li class="nav-item px-3">
            <a class="nav-link text-white fw-bold" aria-current="page" href="/">{{$menu->cat_nep}}</a>
            </li>
        @else
        <li class="nav-item px-3">
            <a class="nav-link text-white fw-bold" aria-current="page" href="/category/{{ $menu->slug }}">{{$menu->cat_nep}}</a>
        </li>
       @endif


        @endforeach
        </ul>
      </div>
    </div>
  </nav>

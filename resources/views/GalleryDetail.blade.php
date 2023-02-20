@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      @for ($i=0;$i<15;$i++)
      <div class="col-md-4">
        <a href="#">
          <img src="
          https://ansab.org.np/uploads/main_slider/1569738894-1.%20Ecosystem-based%20Commercial%20Agriculture.JPG
          " alt="Image 1" class="img-responsive thumbnail">
        </a>
      </div>
      @endfor

    </div>
  </div>

@endsection

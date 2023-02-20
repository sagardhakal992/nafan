@extends("layout")

@section("content")
<div class="container">
    <div class="row">
     @for ($i=0;$i<10;$i++)
     <div class="col-md-4" style="margin-top:20px">
        <div class="card">
          <img src="https://ansab.org.np/uploads/main_slider/1569738894-1.%20Ecosystem-based%20Commercial%20Agriculture.JPG" alt="Card image" class="img-responsive">
          <div class="card-body">
            <h4 class="card-title">
                <a href="/gallery/50">
                    Project Title
                </a>
            </h4>
          </div>
        </div>
      </div>
     @endfor

    </div>
  </div>

@endsection

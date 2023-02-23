@extends("layout")

@section("content")
<div class="container">
    <div class="row">
     @foreach ($galleries as $gallery)
     <div class="col-md-4" style="margin:20px">
        <div class="card">
          <img src="/storage/{{$gallery->thumbnail}}" alt="Card image" class="img-responsive">
          <div class="card-body">
            <h4 class="card-title">
                <a href="/gallery/{{$gallery->id}}">
                    {{$gallery->name}}
                </a>
            </h4>
          </div>
        </div>
      </div>
     @endforeach


    </div>
  </div>

@endsection

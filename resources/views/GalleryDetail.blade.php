@extends("layout")
@section("content")
<div class="container">
    <div class="row">
      @forelse ($images as $image)
      <div class="col-md-4">
        <a href="#">
          <img src="/storage/{{$image->file_url}}
          " alt="Image 1" class="img-responsive thumbnail">
        </a>
      </div>
      @empty
      <div class="col-md-full" style="margin:20px,auto">
        <a href="/">
          <h4>No Images Found Return Back To home Page</h4>
        </a>
      </div>
      @endforelse


    </div>
  </div>

@endsection

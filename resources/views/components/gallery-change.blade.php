<div>
    <div class="gallery-section">
        <div class="row">
           <div class="col-xs-12">
              <h1 style="color:#00ADEF">Recent Activities</h1>
              <a class="view-more" style="color:#00ADEF" href="/gallery">View More</a>
           </div>
           <div class="col-xs-12">
              <div class="messy-wrapper">
                 @foreach ($items as $item)
                        <div class="item" data-fancybox="gallery" data-caption="1569741851-gallery-3.jpg">
                            <div class="image-as-bg" data-bg="/storage/{{$item['file_url']}}"></div>
                        </div>
                 @endforeach
              </div>
           </div>
        </div>
     </div>
</div>

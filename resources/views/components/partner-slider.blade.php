<div class="partner-list">

    <div class="partner-container" style="display:flex;justify-content:center">
    @foreach ($partners as $partner)
            <div class="partner-item">
                <img src="{{asset('storage/'.$partner->image_link)}}" alt="Partner 2" width="300" height="100">
            </div>
    @endforeach
    </div>

  </div>

  @push("scripts")
  <script>
    var partnerContainer = document.getElementById("partner-container");
var partnerItems = partnerContainer.getElementsByClassName("partner-item");
var partnerCount = partnerItems.length;
var itemWidth = partnerItems[0].offsetWidth;
var scrollPosition = 0;
var scrollSpeed = 10; // Adjust scroll speed as needed

function autoScroll() {
  scrollPosition -= scrollSpeed;
  partnerContainer.style.transform = "translateX(" + scrollPosition + "px)";

  if (scrollPosition <= -itemWidth) {
    scrollPosition += itemWidth;
    partnerContainer.appendChild(partnerItems[0]);
  }

  requestAnimationFrame(autoScroll);
}

autoScroll();

  </script>
  @endpush


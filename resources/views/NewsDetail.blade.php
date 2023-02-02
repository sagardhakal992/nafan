@extends("layout")
@section("content")
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 text-black prod__detail">
                           <h2>{{$post->title}}</h2>
                           <p><strong></strong>{{date($post->created_at)}}<br />
                           </p>
                           <?php echo $post->description  ?>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pl-sm-0 pr-sm-0 sticky-div">
                           <div class="bg-white shadow pr pl pt pb mb">
                           </div>
                           <div class="bg-green pr pl pt pb mb">

                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

               @endsection

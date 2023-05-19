@extends("layout")
@section("content")
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                           <div class="cont-heading">
                              <h2>Publications</h2>
                              <div class="head__details">
                                 <h4><strong>Nafan Has Published Following Publications:</strong></h4>
                              </div>
                           </div>
                           <div>
                              <ul>
                                 @foreach ($publications as $publication)
                                 <li>
                                    <a target="_blank" href="/storage/{{$publication->file_url}}">{{$publication->name}}</a>
                                    <p><small>{{$publication->created_at->diffForHumans()}}</small></p>
                                </li>
                                 @endforeach

                              </ul>
                           </div>
                        </div>

                     </div>
                  </div>
               </section>
 @endsection

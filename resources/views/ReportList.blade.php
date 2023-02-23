@extends("layout")
@section("content")
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                           <div class="cont-heading">
                              <h2>Reports</h2>
                              <div class="head__details">
                                 <h4><strong>Nafan Has Following Reports :</strong></h4>
                              </div>
                           </div>
                           <div>
                              <ul>
                                 @foreach ($reports as $report)
                                 <li>
                                    <a href="/storage/{{$report->file}}">{{$report->name}}</a>
                                    <p><small> {{$report->created_at->diffForHumans()}}</small></p>
                                 </li>
                                 @endforeach

                              </ul>

                           </div>
                        </div>
                     </div>
                  </div>
               </section>
 @endsection

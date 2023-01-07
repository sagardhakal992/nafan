@extends("layout")
@section("content")
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                           <div class="cont-heading">
                              <h2>Current Projects</h2>
                              <div class="head__details">
                                 <h4><strong>Nafan is currently implementing the following projects:</strong></h4>
                              </div>
                           </div>
                           <div>
                              <ul>
                                 @foreach ($projects as $project)
                                 <li>
                                    <a href="{{'/projects/details/'.$project->id}}">{{$project->title}}</a>
                                    <p><small> {{$project->created_at->diffForHumans()}}</small></p>
                                 </li>
                                 @endforeach

                              </ul>
                              {{$projects->links()}}
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pl-sm-0 pr-sm-0 sticky-div">
                           <div class="bg-white shadow pr pl pt pb mb">
                              <table class="table table-hover mb-0">
                                 <thead>
                                    <tr>
                                       <th>Current Projects</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><a href="/projects/past-projects" title="Past Projects">Past Projects</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
 @endsection

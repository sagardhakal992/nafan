@extends("layout")
@section("content")
               <section class="page">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9 text-black prod__detail">
                           <h2>{{$project->title}}</h2>
                           <p><strong>Starting Date:</strong>{{$project->start_date}}<br />
                              <strong>Ending Date:</strong>{{$project->end_date}}<br />
                              <strong>Location:</strong>{{$project->location}}<br />
                              <strong>Donor(s):{{$project->donor}}
                           </p>
                           <?php echo $project->description  ?>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 pl-sm-0 pr-sm-0 sticky-div">
                           <div class="bg-white shadow pr pl pt pb mb">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Projects</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><a href="/projects/past-projects" title="Past Projects">Past Projects</a></td>
                                    </tr>
                                    <tr>
                                       <td><a href="/projects" title="Current Projects">Current Projects</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="bg-green pr pl pt pb mb">

                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

               @endsection

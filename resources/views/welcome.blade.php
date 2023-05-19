
@extends("layout")
@section("content")
               <section class="banner">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-md-9">
                           <div id="banner" class="owl-carousel owl-theme captioned-image">
                              <div class="item">
                                 <img src="https://nafan.org/media/1679737567656.jpeg" alt="1. Sustainable Forest Management" class="item img-responsive">
                                 <div class="caption">
                                    <a href="#">
                                       <h2></h2>
                                    </a>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="https://nafan.org/media/1679736545784.jpeg" alt="2. Ecosystem-based Commercial Agriculture" class="item img-responsive">
                                 <div class="caption">
                                    <a href="#">
                                       <h2></h2>
                                    </a>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="https://nafan.org/media/1679736545868.jpeg" alt="3. Non-Timber Forest Products" class="item img-responsive">
                                 <div class="caption">
                                    <a href="#">
                                       <h2></h2>
                                    </a>
                                 </div>
                              </div>
                              <div class="item">
                                 <img src="https://nafan.org/media/1679736823729.jpeg" alt="4. Small and Medium Natural Resource based Enterprises" class="item img-responsive">
                                 <div class="caption">
                                    <a href="#">
                                       <h2></h2>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="text-justify welcome">
                              <h1 class="text-center"></h1>
                              <p>
                              <p>National Forum for Advocacy Nepal (NAFAN) is a non-governmental organization registered in the district administration office of Lalitpur district. It is a non-profit making organization working to uplift the socio–economic condition of marginalized communities by following rights-based approaches to development programming. Gender-friendly development, biodiversity conservation, equitable access to natural resources, and mainstreaming unprivileged groups in development are some of the priorities of NAFAN.</p>
                              <br />
                              <p>NAFAN was founded in June 2004 by professionals trained in human rights, law, environment, and advocacy strategies. The organization was taken as an umbrella of such professionals so that they could share experiences, and lessons and enhance advocacy knowledge and skills of not only NAFAN members but also many other like-minded organizations in Nepal. This is the reason for naming this organization as a national forum. </p>
                              </p>
                              </p>
                           </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                           <div class="shadow p-3 bg-white">
                              <h2 class="panel-head-text">Latest Post</h2>
                              <div class="news">

                                 @foreach ($posts as $post)
                                 <a href={{"/news/details/".$post->id}}>
                                    <p>{{$post->title}}</p>
                                    <small> <i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</small>
                                 </a>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="about-section">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12">
                           <hr>
                        </div>
                        <div class="col-xs-12">
                           <h1 style="color:#00ADEF">About</h1>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                           <a href="/about-us">
                              <div class="panel panel-about text-center image-as-bg" data-bg="https://nafan.org/media/ghar.jpeg">
                                 <div class="panel-body">
                                    <h3 class="mt-0 mb-0">Vision</h3>
                                    <p>Peace and prosperity of the nation and environmental conservation. </p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                           <a href="/about-us">
                              <div class="panel panel-about text-center image-as-bg" data-bg="https://nafan.org/media/home.jpg">
                                 <div class="panel-body">
                                    <h3 class="mt-0 mb-0">Mission</h3>
                                    <p> Influence, encourage and shape the plan, policies and decisions in political, social, economic and environmental dimension </p>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                           <a href="/about-us">
                              <div class="panel panel-about text-center image-as-bg" data-bg="https://nafan.org/media/impact.jpg">
                                 <div class="panel-body">
                                    <h3 class="mt-0 mb-0">Impact</h3>
                                    <p>Promote Human Rights in socially and economically marginalized communities.
                                        Promote cultural and economic rights of different classes and communities.
                                    Enhance access of marginalized classes to the environment, natural resources, climate change, and biodiversity. </p>
                                 </div>
                              </div>
                           </a>
                        </div>
                     </div>
                     <hr>

                     <hr>
                     <div class="resource">
                        <div class="row">
                           <div class="col-xs-12 col-lg-6">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <h1 style="color:#00ADEF">Projects</h1>
                                 </div>
                                 <div class="col-xs-12">
                                    <div class="panel-group" id="accordion">
                                       <div class="panel panel-default panel-project">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a  href="/projects" style="color:#00ADEF">CURRENT PROJECTS</a>
                                             </h4>
                                          </div>
                                          <div id="collapse1" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                   @foreach ($currentProjects as $project)
                                                   <li>
                                                    <a style="color:#00ADEF" href="{{'/projects/details/'.$project->id}}">
                                                    <i class="fa fa-link"></i> {{$project->title}}
                                                    </a>
                                                 </li>
                                                   @endforeach
                                                </ul>
                                                <a style="color:#00ADEF" href="/projects" class="btn btn-sm btn-info">Read More</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="panel panel-default panel-project">
                                          <div class="panel-heading">
                                             <h4 class="panel-title">
                                                <a style="color:#00ADEF"  href="/projects/past-projects">PAST PROJECTS</a>
                                             </h4>
                                          </div>
                                          <div id="collapse2" class="panel-collapse collapse in">
                                             <div class="panel-body">
                                                <ul>
                                                    @foreach ($pastProjects as $project)
                                                   <li>
                                                    <a href="{{'/projects/details/'.$project->id}}">
                                                    <i class="fa fa-link"></i> {{$project->title}}
                                                    </a>
                                                 </li>
                                                   @endforeach

                                                </ul>
                                                <a style="color:#00ADEF" href="/projects/past-projects" class="btn btn-sm btn-info">Read More</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-lg-6">
                              <div class="row">
                                 <div class="col-xs-12">
                                    {{-- <h1>Resources</h1> --}}
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-lg-12">
                                    <div class="panel panel-resource">
                                       <div class="panel-heading">
                                          <span class="icon-wrapper"><i class="fa fa-bar-chart"></i></span>
                                          <h4><a style="color:#00ADEF" href="/about-us">Rationale – why NAFAN was needed?</a></h4>
                                       </div>
                                       <div class="panel-body">
                                          <p style="text-align:justify">After political changes in 1990, some non-governmental organizations advocated and persuaded the government to change some policies and legislations relating to forestry, women's property rights, and consumer protection issues. Some of these policy changes brought good impacts on the protection of rights of the underprivileged, marginalized communities and women. Some of the groups launched movements for ensuring access to natural resources and benefit sharing. Some organizations raised issues of gender and equity, and some others raised the issues of bounded labor and so on. All of such organizations and groups faced a tough time during the movements. Therefore, such members of civil society organizations realized that Public Advocacy in isolation did not produce the intended results. Since then the need for a national-level forum as a resource organization for public advocacy on various issues was strongly felt</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-6 col-lg-12 right">
                                    <div class="panel panel-resource">
                                       <div class="panel-heading">
                                          <span class="icon-wrapper"><i class="fa fa-book"></i></span>
                                          <h4><a style="color:#00ADEF" href="/publications">PUBLICATIONS</a></h4>
                                       </div>
                                       <div class="panel-body">
                                        <ul>
                                            @foreach ($publications as $publication)
                                           <li>
                                            <a target="_blank" href="/storage/{{$publication->file_url}}"><i class="fa fa-link"></i>{{$publication->name}}</a>

                                         </li>
                                           @endforeach
                                          {{-- <div style="text-align:justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</div> --}}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     {{-- <div class="gallery-section">
                        <div class="row">
                           <div class="col-xs-12">
                              <h1 style="color:#00ADEF">Our Gallery</h1>
                              <a style="color:#00ADEF" class="view-more" href="/gallery">View More</a>
                           </div>
                           <div class="col-xs-12">
                              <div class="messy-wrapper">
                                 {{-- <div class="item" data-fancybox="gallery" data-caption="1569741851-gallery-3.jpg">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/bhola1.jpg')}}"></div>
                                 </div> --}}
                                 <div class="item" data-fancybox="gallery" data-caption="1569741805-gallery-1.jpg">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/banner.jpg')}}"></div>
                                 </div>
                                 <div class="item" data-fancybox="gallery" data-caption="1592284941-Bhishma Subedi.JPG">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/group2.jpg')}}"></div>
                                 </div>
                                 <div class="item" data-fancybox="gallery" data-caption="1592546737-Plastic Dryer House.JPG">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/grouppic.jpg')}}"></div>
                                 </div>
                                 <div class="item" data-fancybox="gallery" data-caption="1592547041-ECA.JPG">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/presentation.jpg')}}"></div>
                                 </div>
                                 <div class="item" data-fancybox="gallery" data-caption="1592547244-Home Garden Training (Jiri).JPG">
                                    <div class="image-as-bg" data-bg="{{asset('assets/gallery/pressmeet.jpg')}}"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr> --}}

                     <hr />
                     <x-gallery-change :items=$gallery />

                  </div>
               </section>

@endsection


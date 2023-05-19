@extends("layout")
@section("content")
               <link rel="stylesheet" href="{{asset('assets/frontend/css/contact-main.css')}}">
               <section class="contact-area ptb-100">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="contact-info-box">
                              <h3>Email</h3>
                              <p><a href="mailto:nafannepal8@gmail.com">nafannepal8@gmail.com</a></p>
                              </br>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="contact-info-box">
                              <h3>Location</h3>
                              <p><a href="" target="_blank">Lalitpur-10,Kupandole,UN-Park</a>
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                           <div class="contact-info-box">
                              <h3>Call</h3>
                              <p><a href="Tel:9841325488 ">Tel: 9841325488 </a></p>
                              <p><a href="Tel:9851074770 ">Tel:9851074770 </a></p>
                              <p><a href="Tel:9841444966 ">Tel:9841444966 </a></p>
                           </div>
                        </div>
                     </div>
                     </br>
                     </br>
                     <section class="contact-map">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2613617963116!2d85.3239030695906!3d27.684990198512203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b832bcb967%3A0x7f3c96b92c33eda2!2sDhantil%20Barahi%20Marg%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1684486885371!5m2!1sen!2snp"
                         width="1100" height="700" style="border:2px solid green;" allowfullscreen="true" loading="lazy"  referrerpolicy="no-referrer-when-downgrade" style="border: -radius:4px"></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d883.2613617963116!2d85.3239030695906!3d27.684990198512203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1b787c78f%3A0x4b9655e17b052c7e!2sBMS%20Nepal!5e0!3m2!1sen!2snp!4v1684486998792!5m2!1sen!2snp"
                        width="1100" height="700" style="border:2px solid green;" allowfullscreen="true" loading="lazy"  referrerpolicy="no-referrer-when-downgrade" style="border: -radius:4px"></iframe>
                     </section>
                     <div class="section-title">
                        <span class="sub-title">Contact Us</span>
                        <h2>Drop us Message for any Query</h2>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                     </div>
                     <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4">
                           <div class="contact-image">
                              <img src="{{asset('assets/frontend/img/contact.png')}}" alt="image">
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                           <div class="contact-form">
                              <form method="post" id="contactForm" novalidate="true" action="/contact">
                                 @csrf
                                 <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                       <div class="form-group">
                                          <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Name">

                                          <div class="help-block with-errors">
                                            @error('name')
                                          {{$message}}
                                          @enderror
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <div class="form-group">
                                          <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Email">
                                          <div class="help-block with-errors">
                                            @error('email')
                                          {{$message}}
                                          @enderror
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <div class="form-group">
                                          <input type="text" name="phone" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Phone">
                                          <div class="help-block with-errors">
                                            @error('phone')
                                          {{$message}}
                                          @enderror
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       <div class="form-group">
                                          <input type="text" name="subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Subject">
                                          <div class="help-block with-errors"></div>
                                          @error('subject')
                                          {{$message}}
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                       <div class="form-group">
                                          <textarea name="description" class="form-control" id="message" cols="30" rows="5" required="" data-error="Write your message" placeholder="Your Message"></textarea>
                                          <div class="help-block with-errors"></div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                       <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Send Message <span></span></button>
                                       <div id="msgSubmit" class="h3 text-center hidden"></div>
                                       <div class="clearfix"></div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
@endsection

<div class="container foot">
            <div class="row">

                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{url('images/home/under.png')}}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Citations</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{url('images/AE.jpg')}}" alt="" style="height:81px;width:81px; "></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Le monde est dangereux à vivre ! Non pas tant à cause de ceux qui font le mal, mais à cause de ceux qui regardent et laissent faire.</blockquote>
                                <h3><a href="#">- Albert Einstein</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{url('images/VH.jpg')}}" alt="" style="height:81px;width:81px; "></a>
                            </div>
                            <div class="media-body">
                                <blockquote>On passe une moitié de sa vie à attendre ceux qu'on aimera et l'autre moitié à quitter ceux qu'on aime.</blockquote>
                                <h3><a href="">- Victor Hugo</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">souibalaa@gmail.com</a> <br> 
                        Phone: 06 66 10 31 66 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        HAY TARGA <br> 
                        NR° 545 <br> 
                        MARRAKECH<br> 
                        MAROC<br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                          <form action="{{ url('/contact')}}" method="POST" id="form">
                          {{ csrf_field()}}
                            <div class="form-group">
                              <label name="email">Email:</label>
                              <input id="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                              <label name="subject">Subject:</label>
                              <input id="subject" name="subject" class="form-control">
                            </div>

                            <div class="form-group">
                              <label name="message">Message:</label>
                              <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                            </div>
                             <div style="margin-top:10px; margin-bottom:10px;" class="g-recaptcha" data-sitekey="6Lc6_yUTAAAAANMiR9cEISB1CrpZzPL9_d9DYXwG"></div>

                            <input type="submit" value="Send Message" class="btn btn-success hvr-grow ">

                          </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center" style="color:black;">
                        <p>&copy; Lryosaki 2016. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="https://github.com/Lryosaki/Blog">LRYOSAKI</a></p>
                    </div>
                </div>
            </div>
        </div>
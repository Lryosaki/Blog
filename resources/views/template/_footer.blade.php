<div class="container">
            <div class="row">

                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{url('images/home/under.png')}}" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Citations</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{url('images/Confucius.jpg')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés.</blockquote>
                                <h3><a href="#">- Confucius</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="{{url('images/Albert Einstein.jpg')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Le monde est dangereux à vivre ! Non pas tant à cause de ceux qui font le mal, mais à cause de ceux qui regardent et laissent faire.</blockquote>
                                <h3><a href="">- Albert Einstein</a></h3>
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
                          <form action="{{ url('/contact')}}" method="POST">
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

                            <input type="submit" value="Send Message" class="btn btn-success hvr-grow">
                          </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2016. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">LRYOSAKI</a></p>
                    </div>
                </div>
            </div>
        </div>
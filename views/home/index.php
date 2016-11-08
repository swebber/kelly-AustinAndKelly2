<div id="page">
    <!-- start nav bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#header">AUSTIN &amp; KELLY</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#rsvp" data-toggle="collapse" data-target=".navbar-collapse.in">RSVP</a></li>
                    <li><a href="#about" data-toggle="collapse" data-target=".navbar-collapse.in">About</a></li>
                    <li><a href="#lodging-transportation" data-toggle="collapse" data-target=".navbar-collapse.in">Lodging/Transportation</a></li>
                    <li><a href="#registry" data-toggle="collapse" data-target=".navbar-collapse.in">Registry</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <!-- end nav bar -->
    <!-- start header -->
    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <img src="assets/images/photo-web-720px.png" class="img-responsive" alt=""/>
                </div>
                <div class="col-xs-12 col-sm-7 text-center name-date">
                    <h1>AUSTIN &amp; KELLY</h1>
                    <h2>16 June 2017</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->
    <!-- rsvp section -->
    <section id='rsvp'>
        <div class="container">
            <h1 class="text-center">RSVP</h1>
            <p class="text-center">Please RSVP by May 25th</p>
            <form id="rsvpForm" method="post" action="/rsvp">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="guestNames">Guest Name(s)</label>
                            <input type="text" class="form-control" id="guestNames" data-error="Please tell us your names." required></input>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="willAttend">Will You Be Attending?</label>
                            <select class="form-control" id="willAttend" data-error="Let us know if you will be attending." required>
                                <option value="">Select ...</option>
                                <option value="1">Yes of course!</option>
                                <option value="0">No I am unable to attend.</option>   
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="needTrans">Will You Need Transportation?</label>
                            <select class="form-control" id="needTrans" data-odd="odd">
                                <option value="NA">Select ...</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>   
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="form-group">
                            <label for="dietInfo">Dietary Restrictions</label>
                            <input type="text" class="form-control" id="dietInfo" name="dietInfo"></input>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                        <div class="form-group">
                            <input type="hidden" value="NA" id="notRobot" data-captchacheck="captchacheck" data-validate="true" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                        <input type="submit" class="btn btn-default" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- end rsvp section -->
    <!-- about section -->
    <section id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <h1>ABOUT THE WEDDING</h1>
                    <p class="about-address">
                        <b>THE ANCHOR INN</b><br />
                        7617 WATER OAK POINT ROAD<br />
                        PASADENA, MARYLAND 21122
                    </p>
                    <p class="about-venue">
                        We are getting married at the Anchor Inn on June 16th at 6:00 PM.
                        The ceremony and reception are both taking place at the same venue and
                        will be both indoors and outdoors. For those of you bringing small children please
                        be mindful as the venue is on the water.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    <!-- lodging and transportation section -->
    <section id="lodging-transportation">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <h1>LODGING & TRANSPORTATION</h1>
                    <p>
                        A block of rooms has been reserved at the Hamilton Hotel. The hotel is within
                        minutes of the Baltimore International Airport. There will be a shuttle from the 
                        airport to the Anchor Inn leaving the hotel at 5:30 PM, 
                        and taking people back to the hotel after the reception.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2 col-xs-12">
                    <p>
                        <b>SHUTTLE SERVICE</b><br />
                        DEPARTS AT 5:15 PM<br />
                        LEAVES RECEPTION AT 11:00 PM
                    </p>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p>
                        <b>HAMILTON HOTEL</b><br />
                        7617 WATER OAK POINT ROAD<br />
                        PASADENA, MARYLAND 21122
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- end lodging and transportation section -->
    <!-- registry section -->
    <section id="registry">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <h1>REGISTERY</h1>
                    <p>We are registered at <a href="http://www.registery.com" target="_blank">registery.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end registry section -->
</div>
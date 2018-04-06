<?php require_once('header.php'); ?>


<div class="container-fluid">
	
	
    <!-- Banner Slider -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
      <!--<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>

       </ol>-->
       <!-- Wrapper for slides -->
		<div class="container">
     <div class="carousel-inner" role="listbox">
           <div class="item active">
               <img src="img/slider/Gail-FenceFullslider.jpg" alt="Plane" class="img-responsive 1" />
               <div class="carousel-caption">Welcome to the Gail S. Halvorsen Aviation Education Foundation</div>
            </div>
            <div class="item">
                <img src="img/slider/civil-air-patrol1.jpg" alt="Civil Air Patrol" class="img-responsive 2" />
                <div class="carousel-caption">Meet our Board Members
                    <a href="about_overview.php" class="btn btn-primary btn-lg">The Foundation</a>
                </div>

            </div>
            <div class="item">
                 <img src="img/slider/candyDrop.jpg" alt="Candy Drop" class="img-responsive 3" />
                 <div class="carousel-caption"> Play our Candy Drop Game!<br>
                     <a href="activities.php" class="btn btn-primary btn-lg">Candy Drop</a>
                 </div>
            </div>
        </div>
	  </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i>

</button>

    <div class="mobileJumbotron">
      <div class="container">
        <h2>Gail S. Halvorsen Aviation Education Foundation</h2>
      </div>
    </div>

    <!-- Action Bar -->
    <div class="action-bar">
		<div class="container">
        <h3 class=" col-sm-12 col-md-8"> Add your own touch and buy a brick </h3>
        <div class="col-sm-12 col-md-2">
            <a href="contribute.php" class="btn btn-primary btn-lg">BUY A BRICK</a>
			</div>
			<div class="col-md-2">
			</div>
        </div>
    </div>


    <div class="container">
		<div class="mission">
		<div class="row">
			<div class="col-sm-12">
			<h2 class="header2">Our Mission</h2>
			</div>
		</div>
			<div clas="row">
				<div class="col-sm-12">
					<p>The Gail S. Halvorsen Aviation Education Foundation advances aviation education, promotes youth leadership development, enhances community capacity for emergency response, and encourages humanitarian service on macro- and micro-levels.</p>
				</div>
			</div>
		</div>
    </div>


      <!-- Quick Links -->
    <div class="container">
		<div class="quicklinks">
          <div class="row">
            <div class="col-md-4 quicklinksection">
                <img class="img-responsive center-block" src="img/GailStory.jpg">
				<h4 class="quickh3"><strong><a href="gail_overview.php">Gail's Story</a></strong></h4>
                <p>The Gail S. Halvorsen Aviation Education Foundation was formed in 2016 by a group of community-minded volunteers who sought to perpetuate the Candy Bomber’s legacy.</p>

            </div>
            <div class="col-md-4 quicklinksection">
                <img class="img-responsive center-block" src="img/AviationEducationCenter.jpg">
				<h4 class="quickh3"><strong><a href="about_overview.php">The Foundation</a></strong></h4>
                <p>We are grateful to all who donate to the foundation. Please visit our support page for more information on our sponsors and how to donate to the foundation.</p>

           </div>
            <div class="col-md-4 quicklinksection">
                <img class="img-responsive center-block" src="img/Gail-FenceFull.jpg">
				<h4 class="quickh3"><strong><a href="educators overview.php">Educators</a></strong></h4>
                <p>We help educators find enriching STEM Activities for their students. From videos, hands-on activities, and lesson plans, we hope to inspire more love for STEM in the classroom.</p>

            </div>
          </div>
		</div>
    </div>

    <!--Blue Section-->
    <div class="container-fluid">
        <div class="sub-section">
			<div class="mainpage">
			<div class="container">
            <div class="row">
                <h2 class="col-md-12 text-center">Utah Civil Air Patrol &amp; Future Exhibit</h2>
            </div>
            <div class="row">
				<div class="col-md-2">
				</div>
                <div class=" col-sm-12 col-md-8">
                    <!--<div class="img-container">-->
					<div class="videoWrapper">
                        <iframe  src="https://www.youtube.com/embed/eKpG3q9qGrw"    allowfullscreen></iframe>
                    <!--</div>-->
					</div>
					<div class="col-md-2">
				</div>
                </div>
                
				</div>
            </div>
        </div>
		</div>
    </div>

    <!--Black Section-->
    <div class="container-fluid">
        <div class="sub-section black-section">
			<div class="container">
            <div class="row">
                <h2 class="col-md-12 text-center">Support Gail and the Foundation</h2>
            </div>
            <div class="row">
                <p class="col-md-12"> We provide education by giving free lectures and multimedia presentations on aviation, science, technology, engineering, and mathematics (STEM) topics at local schools, community groups, and at our own facility at the Spanish Fork-Springville Airport. Further, we partner with like-minded organizations that are engaged in community service activities which support the Foundation’s objectives.
				The Gail S. Halvorsen Aviation Education Foundation is incorporated in the State of Utah as a charitable educational organization and is licensed by the Utah Department of Commerce to solicit charitable donations. The Foundation is recognized as a Section 501c3 charitable foundation by the Internal Revenue Service.
                </p>
                <div class="col-md-12">
                    <a href="contribute.php" class="btn btn-primary btn-lg center-block">DONATE</a>
				</div>
				
            </div>
			</div>
        </div>
    </div>

</div> <!-- /container -->

<?php require_once('footer.php'); ?>
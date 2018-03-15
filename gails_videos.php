<?php require_once('header.php'); ?>
<div class="container-fluid">


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i>

</button>
    <!-- Overview -->
    <div class="container" style="padding: 20px 40px;">
        <div class="row">
            <h2 class="header2 text-center">Video Gallery</h2>
        </div>
        <div class="row videos" style="margin: 50px auto auto auto;">
            <div class="col-md-4" style="margin-bottom: 50px;">
                <h3 class="blueHeader text-center">PBS Documentary</h3>
                <div>
                    <img class="img-responsive" src="img/gails-videos/PBSsquare.png" data-toggle="modal" data-target="#Atmospheric" style="cursor: pointer;">
                </div>
                <p>History Documentary PBS: Gail Halvorsen - The Candy Bomber :the Berlin Airlift To children living in the rubble of post-war Germany.</p>
                <a class="btn btn-primary btn-sm AboutButtonBlue center-block" data-toggle="modal" data-target="#Atmospheric">VIEW VIDEO</a>


                <!-- Modal -->
                <div class="modal fade" id="Atmospheric" tabindex="-1" role="dialog" aria-labelledby="Atmospheric" aria-hidden="true">
                    <div id="modal-dialog" class="modal-dialog" role="document">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="modal-iframe" class="modal-iframe" width="560" height="315" style="width:100%;" src="https://www.youtube.com/embed/1bzfsq2XCA0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4" style="margin-bottom: 50px;">
                <h3 class="blueHeader text-center">Christmas from Heaven</h3>
                <div>
                    <img class="img-responsive"  src="img/gails-videos/christmas-from-heavensquare.png" data-toggle="modal" data-target="#Bernoulli" style="cursor: pointer;">
                </div>
                <p>Tom Brokaw tells the story of Gail Halvorsen (The Candy Bomber) during the 2012 Mormon Tabernacle Choir Christmas Concert. With the Orchestra at Temple Square and the Choir providing musical accompaniment, Brokaw chronicles Halvorsen’s efforts to share candy and gum with the children of war-torn Germany.</p>
                <a class="btn btn-primary btn-sm AboutButtonBlue center-block" data-toggle="modal" data-target="#Bernoulli">VIEW VIDEO</a>


                <!-- Modal -->
                <div class="modal fade" id="Bernoulli" tabindex="-1" role="dialog" aria-labelledby="Bernoulli" aria-hidden="true">
                    <div id="modal-dialog" class="modal-dialog" role="document">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="modal-iframe" class="modal-iframe" width="560" height="315" style="width:100%;" src="https://www.youtube.com/embed/Hjz8yu5MWC0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-4" style="margin-bottom: 50px;">
                <h3 class="blueHeader text-center">Interview</h3>
                <img class="img-responsive"  src="img/gails-videos/tom-interviewsquare.png" data-toggle="modal" data-target="#Flying" style="cursor: pointer;">
                <p>Tom Brokaw interviews Gail Halvorsen (The Candy Bomber) and the two discuss Halvorsen’s efforts to share candy and gum with the children of war-torn Germany and the impact of his charitable activities.</p>
                <a class="btn btn-primary btn-sm AboutButtonBlue center-block" data-toggle="modal" data-target="#Flying">VIEW VIDEO</a>


                <!-- Modal -->
                <div class="modal fade" id="Flying" tabindex="-1" role="dialog" aria-labelledby="Flying" aria-hidden="true">
                    <div id="modal-dialog" class="modal-dialog" role="document">
                        <div class="modal-content" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="modal-iframe" class="modal-iframe" width="560" height="315" style="width:100%;" src="https://www.youtube.com/embed/QWbISrde2mQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->









<?php require_once('footer.php'); ?>
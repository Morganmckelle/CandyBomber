<?php require_once('header.php'); ?>


<div class="container-fluid">

    <div class="container">
        <div class="mission">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="header2">Contact Us</h2>
                </div>
            </div>
	
            <div class="row">
                <div class="col-sm-12">
                    <p>Feel free to contact us with any questions you have.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 contactForm">
            <form action="#" method="post" class="col-sm-8 center-block">
                <h4>Name:</h4>
                <input type="text" name="name" class="contactInput col-xs-12" placeholder="Who are you?">
                <br>
                <br>
				 <h4>Email:</h4>
                <input type="text" name="name" class="contactInput col-xs-12" placeholder="email@email.com"><br><br>
                <h4>Comment:</h4>
                <textarea type="text" name="comment" class="contactInput col-xs-12" placeholder="Add a message..." style="height:200px; resize: none; margin-bottom: 30px;"></textarea>

                <input class="submitBtn" type="submit" name="submit" value="Send Message">

            </form>
            <div style="clear: both;"></div>
        </div>

    </div>






</div> <!-- /container -->

<?php require_once('footer.php'); ?>
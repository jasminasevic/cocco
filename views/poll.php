      <!-- page-header-start -->
      <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="page-section">
                        <h1 class="page-title ">Poll</h1>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Opinion Poll</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
                    <div class="page-section">
                        <p>Discover the Latest Fashion, Health &amp; Travel News on Cocco Magazine</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-header-close -->
   <!-- testimonials-start -->
   <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="mb30">
                        <div class="contact-form">
                            <h1>Your opinion is important to us! </h1>
                            <p class="mb40">Let us know which magazine category
                            would you like to see added to Cocco Magazine?</p>
                            
                            <div id="poll">
                                <?php
                                    $query = "SELECT * FROM poll_votes";
                                    $voting = executeQuery($query);                    
                                ?>
                                <form action='<?php echo $_SERVER["PHP_SELF"]."?page=poll" ; ?>' method="POST">
                                
                                    <?php foreach($voting as $vote): ?>
                                        <button type="button" class="btn btn-primary btnSubmitVote" data-id='<?= $vote->id_vote?>' value='<?= $vote->id_vote?>'>
                                                    <?= $vote->answer; ?> 
                                                    <span class="badge badge-light">
                                                        <?= $vote->count_votes; ?>
                                                    </span>
                                        </button><br/>
                                    <?php endforeach;?>
                                
                                </form>
                            </div>

                        </div>   
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4 col-sm-12 col-xs-12">
                    <div class="widget">
                        <h2 class="widget-title">
                contact info</h2>
                        <div class="contact-info">
                            <ul>
                                <li><i class="icon-placeholder"></i>Knez Mihailova 1, Belgrade, Serbia</li>
                                <li><i class="icon-phone-call"></i>+38111-123-4567</li>
                                <li><i class="icon-envelope"></i><a href="mailto:info@cocco.com">info@cocco.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
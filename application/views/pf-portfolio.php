<!DOCTYPE html>
<html lang='en-US'>
  <head>
    <?php $this->load->view('partial-portfolio-head'); ?>
    <?php // var_dump($projects); ?>
  </head>
  <body>
    <div class='container-fluid'>
      <div class='headinger pagination-centered row'>
          <div class='headinger-title col-sm-12 col-md-6'>
            <h1>DEREK SCHUBERT</h1>
          </div>
          <div class='headinger-nav col-sm-12 col-md-6'>
            <div class='ds-nav'>
              <ul class='pull-right'>
                <li><a href='/me'>.about</a></li>
                <li><a id='active' href=''>.portfolio</a></li>
                <li><a href='/skills'>.skills</a></li>
                <li><a href='/contact'>.contact</a></li>
              </ul>
            </div>
          </div>
      </div>

      <div class='container'>
        <div class='content-container'>
          <div class='text-center title'>
            <h2>PORTFOLIO</h2>
          </div>
            <?php //var_dump($projects); ?>
          <div class='page page-small'>
            <div class='stuffs stuffs-small'>
              <div class='row p-thumbnails'>
              <?php
                foreach($projects as $project) { ?>
                      <div class='col-xs-6 col-md-4'>
                        <a class='p-thumbnail-link' href='/' target="_blank"><div class='p-th-1 p-thumbnail'>
                          <h4><?= $project['name'] ?></h4>
                        </div></a>
                      </div>
              <?php
                }
              ?>
            </div>
              <div class='row p-descriptions'>
                <div class='col-md-3'>

                </div>
                <div class='col-md-3'>

                </div>
                <div class='col-md-3'>

                </div>
              </div>
            </div>
            <div class='size text-center'>
              <a class='p-bn' id='disabled' href=''>Back</a>
              <a class='p-bn' id='disabled' href=''>Next</a>
            </div>
          </div>
          <div class='p-categories text-center'>
            <a class='p-c' href=''>PHP PROJECTS</a>
            <span>//</span>
            <a class='p-c' href=''>iOS PROJECTS</a>
            <span>//</span>
            <a class='p-c' href=''>MEAN PROJECTS</a>
          </div>
        </div>

      </div>

    </div>
    <div class='social-links'>
      <div class='s-l-wrapper'>
        <a class='fa fa-github-square fa-3x' target="_blank" href='https://github.com/LifeOne'></a>
        <a class='fa fa-linkedin-square fa-3x' target="_blank" href='https://www.linkedin.com/in/derek-schubert-665714117'></a>
        <a class='fa fa-twitter-square fa-3x' target="_blank" href=''></a>
      </div>
    </div>
  </body>
</html>

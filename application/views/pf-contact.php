<!DOCTYPE html>
<html lang='en-US'>
  <head>
    <meta charset='utf-8'>
    <title>Contact</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
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
                <li><a href='/portfolio'>.portfolio</a></li>
                <li><a href='/skills'>.skills</a></li>
                <li><a id='active' href=''>.contact</a></li>
              </ul>
            </div>
          </div>
      </div>

      <div class='container'>
        <div class='content-container'>
          <div class='text-center title'>
            <h2>CONTACT</h2>
          </div>
          <div class='page page-small'>
            <div class='stuffs stuffs-small stuffs-contact'>

                <p class='text-center c-h1'>contact@derekschubert.com</p>
                <div class='quick-email row'>
                  <form action='/home/contactme' method='post'>
                    <div class='contact-col col-md-8'>
                      <textarea placeholder='Your lovely message' name='email-msg'></textarea>
                    </div>
                    <div class='col-md-4'>
                      <input class='email-from' type='email' name='email-from' placeholder='your@email.here'></input>
                      <input class='email-submit' type='submit' value='SEND'></input>
                    </div>
                  </form>
                </div>
            </div>
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

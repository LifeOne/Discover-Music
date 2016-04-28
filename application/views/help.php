<!DOCTYPE html>
<html>
<head>
  <title>Help | Discover Music</title>

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Custom CSS -->

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <style>
    html,body        {height:100%;}
    .wrapper         {width:60%;height:100%;margin:0 auto;}
    .h_iframe        {position:relative;}
    .h_iframe .ratio {display:block;width:100%;height:auto;}
    .h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}
    body {
      background: rgba(46,124,148,1);
      background: -moz-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(46,124,148,1)), color-stop(100%, rgba(0,31,82,1)));
      background: -webkit-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -o-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: -ms-linear-gradient(-45deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      background: linear-gradient(135deg, rgba(46,124,148,1) 0%, rgba(0,31,82,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2e7c94', endColorstr='#001f52', GradientType=1 );
    }
    .navbar {
      /*height: 50px;*/
    }
    a {
      color: black;
    }
    a:hover {
      color: black;
      text-decoration: none;
    }
    .settings {
      margin: 10px;
      opacity: .3;
    }
    .settings:hover {
      opacity: .8;
    }
    .next {
      color: white;
    }
    .next:hover {
      color: lightblue;
    }
    .logout {
      margin: 10px;
      color: white;
      opacity: .3;
      font-size: 16px;
      font-weight: bold;
    }
    .logout:hover {
      opacity: 1;
      color: white;
    }
    form {
      text-align: center;
    }
    .submit-btn {
      margin-bottom: 5px;
      border-radius: 20%;
      border: none;
      opacity: .8;
    }
    .input-channel {
      border-radius: 20%;
    }
    table {
      width: 100%;
    }
    th {
      padding: 5px;
      color: white;
    }
    .th-1 {
      width: 40%
    }
    .th-2 {
      width: 45%
    }
    .th-3 {
      width: 15%
    }
    tr {
      padding: 5px 0;
    }
    td {
      padding: 2px;
    }
    .white {
      color: white;
    }
    .help-section {
      margin-bottom: 50px;
    }
    /*.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
       background-color: white;
    }*/
    .table-striped>tbody>tr:nth-child(odd)>td {
      background-color: white;
    }
    .table-striped>tbody>tr:nth-child(even)>td {
      background-color: #e6e6e6;
    }
    .help-link {
      color: #C0C0C0;
    }
    .help-link:hover {
      color: #808080;
    }
  </style>
</head>
<body>
  <div class='navbar'>
    <a href='/settings' class='settings fa  fa-arrow-left fa-3x'></a>
    <a href='/logout' class='logout pull-right'>Logout</a>
  </div>
  <div class="container">
    <div class="h_iframe" id="results">
        <!-- a transparent image is preferable -->
        <img class="ratio" src="http://placehold.it/16x9"/>
        <iframe src="https://www.youtube.com/embed/hW4TuBJMW1w" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

</body>
</html>

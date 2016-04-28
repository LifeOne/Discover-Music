<!DOCTYPE html>
<html>
<head>
  <title>Settings | Discover Music</title>

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Custom CSS -->

  <!-- Custom Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

  <script src="/assets/js/jquery-1.12.1.min.js"></script>
  <script src="/assets/js/listenLifeOne.js"></script>
  <style>
    html,body        {height:100%;}
    .wrapper         {width:60%;height:100%;margin:0 auto;}
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
    <a href='/' class='settings fa  fa-arrow-left fa-3x'></a>
    <a href='/logout' class='logout pull-right'>Logout</a>
  </div>
  <div class="wrapper">
    <h1 class='text-center white'>Settings</h1>
    <div class='text-center help-section'>
      <a class='help-link' href='/help'>Please make sure channel name is exact! Click me for help!</a>
    </div>
    <form action='/home/add_channel/' method='post'>
      <input class='input-channel'type='text' name='channel' placeholder='Channelname'>
      <input class='submit-btn' type='submit' value='Add'>
    </form>
    <div class='row'>
      <div class='col-md-8 col-md-offset-2'>
        <table class='table table-striped'>
          <thead>
            <th class='th-1'>Channel</th>
            <th class='th-2'>Last Song</th>
            <th class='th-3'>Remove</th>
          </thead>
          <tbody>
            <?php foreach($data as $channel) {?>
              <tr><td><?= $channel['channelurl'] ?></td><td><?= $channel['last_video'] ?></td><td><a href='/remove/<?= $channel['id'] ?>'><button type="button" class="btn btn-danger">-</button></a></td></tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>
</html>

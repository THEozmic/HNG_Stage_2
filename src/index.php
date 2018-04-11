<?php
  $date_time = new DateTime('now', new DateTimezone('Africa/Lagos'));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>HNG Internship</title>
    <link href="index.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
  </head>
  <body>
    <div class="time-container">
      <div class="time"><?php $date_time->format('g:i a'); ?></div>
    </div>
    <div class="background"></div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
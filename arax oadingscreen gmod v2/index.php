<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <audio id="loading" src="music/music.mp3" autoplay="true" hidden="true" loop="true"></audio>
<div class="img-center">
    <img class="img-logo" src="img/logo.png">
    <h1 class="server-name"><?php echo $server_name ?></h1>
</div>
<div class="video-background">
    <video autoplay="autoplay" class="video" muted><source src="video/video.mp4" type="video/mp4" /></video>
</div><br>
    <div id="box-rules">
        <h1 class="title"><b><?php echo $title_rules ?></b></h1>
        <hr>
        <div class="box-scroll">
        <h1 class="name"><?php echo $rule_1 ?></h1>
        <h1 class="name"><?php echo $rule_2 ?></h1>
        <h1 class="name"><?php echo $rule_3 ?></h1>
        <h1 class="name"><?php echo $rule_4 ?></h1>
        <h1 class="name"><?php echo $rule_5 ?></h1>
        <h1 class="name"><?php echo $rule_6 ?></h1>
        <h1 class="name"><?php echo $rule_7 ?></h1>
        <h1 class="name"><?php echo $rule_8 ?></h1>
        <h1 class="name"><?php echo $rule_9 ?></h1>
        <h1 class="name"><?php echo $rule_10 ?></h1>
        <h1 class="name"><?php echo $rule_11 ?></h1>
        </div>
      </div>
      <div id="box-faq">
        <h1 class="title"><b><?php echo $title_faq ?></b></h1>
        <hr class="line">
        <div class="box-scroll">
        <h1 class="name">
            Q: <?php echo $question_1 ?>
            <br>
            A: <?php echo $answer_1 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_2 ?>
            <br>
            A: <?php echo $answer_2 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_3 ?>
            <br>
            A: <?php echo $answer_3 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_4 ?>
            <br>
            A: <?php echo $answer_4 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_5 ?>
            <br>
            A: <?php echo $answer_5 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_6 ?>
            <br>
            A: <?php echo $answer_6 ?>
        </h1>
        <h1 class="name">
            Q: <?php echo $question_7 ?>
            <br>
            A: <?php echo $answer_7 ?>
        </h1>
        </div>
      </div>
      <div class="gradient-border" id="box-staff">
        <h1 class="title"><b><?php echo $title_staff ?></b></h1>
        <hr>
        <div>
            <div class="box-staff-founder">
                <img src="img/staff1.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_1 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_1 ?></h1>
            </div>
            <div class="box-staff-developer">
                <img src="img/staff2.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_2 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_2 ?></h1>
            </div>
            <div class="box-staff-developer">
                <img src="img/staff3.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_3 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_3 ?></h1>
            </div>
            <div class="box-staff-administrator">
                <img src="img/staff4.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_4 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_4 ?></h1>
            </div>
            <div class="box-staff-moderator">
                <img src="img/staff5.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_5 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_5 ?></h1>
            </div>
            <div class="box-staff-moderator">
                <img src="img/staff6.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_6 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_6 ?></h1>
            </div>
            <div class="box-staff-moderator">
                <img src="img/staff7.png" class="img-staff">
                <h1 class="name-staff"><?php echo $username_7 ?></h1>
                <h1 class="grade-staff"><?php echo $grade_7 ?></h1>
            </div>
        </div>
      </div>

    </div>

    <div class="footer">
        <h1 class="website"><?php echo $title_website ?> <span class="color-footer"><?php echo $website_link ?></span></h1>
        <h1 class="discord"><?php echo $title_discord ?> <span class="color-footer"><?php echo $discord_link ?></span></h1>
    </div>
    <script>
      var vid = document.getElementById("loading");
      vid.volume = <?php echo $volume ?>;
    </script>
    <script src='js/script.js'></script>
</body>
</html>
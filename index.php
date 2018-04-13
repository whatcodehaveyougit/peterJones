
    <?php include('header.php'); ?>

    <link rel="stylesheet" type="text/css" href="p.jones.css">

    <div id="slider-container">


    <div><img name = "slider" width="100%" height="100%"></div><div><br><br></div>

    <div id = "table-cols">
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>It is not only his passion for being an entrepreneur that is woven into Peter's DNA; it is also his commitment to encourage the next generation. More details</p> </div>
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>Don't miss Peter's 10 Golden Rules, and his no-nonsense guide on getting your ideas to the market. More details </p></div>
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>The latest media interest and coverage. More details </p> </div>
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>It is not only his passion for being an entrepreneur that is woven into Peter's DNA; it is also his commitment to encourage the next generation. More details</p> </div>
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>Don't miss Peter's 10 Golden Rules, and his no-nonsense guide on getting your ideas to the market. More details </p></div>
      <div> <img src = "images/p.jones.jpg" class="cent-img" width = "80% height = "30%"> <p>The latest media interest and coverage. More details </p> </div>

    </div>

    <div id = "social-sidebar">
      <div class = "socialClass"> <iframe width="100%" height="150" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/329069175&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe></div>
      <div class = "socialClass"><h4>Latest News News</h4></div>
      <div class = "socialClass"> Feed Here <br><br><br><br><br> </div>
    </div>

    <div class = "clearfix"></div>

      <br><br>
    <div id = "news">
      <div class = "new-story"> <img src = "images/pete.jpg" class = "news-img" width="25%" height="150px"><h5>ARE YOU AGED 16-19 AND HAVE WHAT IT TAKES TO BE THE NEXT BIG THING?</h5><p>My business academy is designed to equip budding entrepreneurs with the tools and mindset to succeed. If you're passionate about developing your entrepreneurial spirit please visit the Peter Jones Enterprise Academy to learn more about our courses in enterprise and entrepreneurship.</p> </div> <div class = "clearfix"></div>

      <div class = "new-story"> <img src = "images/peto.jpg" class = "news-img" width="25%" height="150px"> <h5>Tycoon in Schools
        Ever wanted to start and run a business at your school?</h5> <p> We’re looking for primary and secondary schools across the country to take part in our national enterprise competition, Tycoon in Schools. By taking part in this initiative, you’ll be helping to stimulate a more enterprising culture that will have a lasting impact across Britain.</p><br><br><br></div>
    </div>
  </div>

<div class = "clearfix"></div>

<div><br><br><br><div>  <!--- A crude hack - surely there was a better way..! -->


<?php include('footer.php'); ?>

</body>

<script type="text/javascript">

  function myFunction() {
    document.getElementById("box_two").style.color = "red";
    document.getElementById("box_two").innerHTML = "JONES";
  }

  function oi() {
  document.getElementById("Peter").innerHTML = "PETER";
  }


  var i = 0;
  var images = [];
  var time = 3000;

  images[0] = 'images/IMG1.jpg';
  images[1] = 'images/IMG2.jpg';
  images[2] = 'images/IMG3.jpg';

  function changeImg(){
    document.slider.src = images[i];
    if (i < images.length - 1){
      i++
    } else {
      i = 0;
    }
    setTimeout("changeImg()", time);
  }

window.onload = changeImg;



    </script>

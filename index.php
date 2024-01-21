<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="assets/css/style.css?v=5.0.0" rel="stylesheet">
  <title>Stuttie Pakistan</title>
  <!-- description -->
  <meta name="description" content="Stuttie Pakistan - A Project by Coduko Inc.">
  <!-- keywords -->
  <meta name="keywords" content="Stuttie Pakistan, Stuttie, Pakistan, Coduko, Coduko Inc, Coduko Pakistan, Coduko Inc Pakistan, Tutor, Teacher, Freelancer, Freelance, Freelance Teacher, Freelance Tutor, Freelance Teacher Pakistan, Freelance Tutor Pakistan, Freelance Teacher Lahore, Freelance Tutor Lahore, Freelance Teacher Karachi, Freelance Tutor Karachi, Freelance Teacher Islamabad, Freelance Tutor Islamabad, Freelance Teacher Rawalpindi, Freelance Tutor Rawalpindi, Freelance Teacher Peshawar, Freelance Tutor Peshawar, Freelance Teacher Quetta, Freelance Tutor Quetta, Freelance Teacher Faisalabad, Freelance Tutor Faisalabad, Freelance Teacher Multan, Freelance Tutor Multan, Freelance Teacher Hyderabad, Freelance Tutor Hyderabad, Freelance Teacher Gujranwala, Freelance Tutor Gujranwala, Freelance Teacher Sialkot, Freelance Tutor Sialkot, Freelance Teacher Sargodha, Freelance Tutor Sargodha, Freelance Teacher Bahawalpur, Freelance Tutor Bahawalpur">
</head>

<body>
  <header class="header header2 sticky-bar" style="background-color: #F7F7F7;">
    <div class="container">
      <div class="main-header py-3">
        <div class="header-left">
          <div class="header-logo">
            <a class="d-flex" href="index.html">
              <img alt="Ecom" src="assets/image/logo/logo.jpeg">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>



  <main class="main">
    <section class="section mt-90">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-40"><span class="btn btn-tag wow animate__animated animate__fadeIn" data-wow-delay=".0s">Under Construction</span>
            <h1 class="color-brand-1 mt-15 mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".0s">We are
              coming soon</h1>
            <div class="box-count box-count-square mb-50">
              <div class="deals-countdown" id="countdown">
                <span class="countdown-section">
                  <span class="countdown-amount font-sm-bold lh-16">
                    <?php
                    $target_date = strtotime("2024-02-15 00:00:00");
                    $remaining = $target_date - time();
                    $days_remaining = floor($remaining / 86400);
                    echo $days_remaining;
                    ?>
                  </span>
                  <span class="countdown-period lh-14 font-xs"> days </span>
                </span>

                <span class="countdown-section">
                  <span class="countdown-amount font-sm-bold lh-16">
                    <?php
                    $hours_remaining = floor(($remaining % 86400) / 3600);
                    echo $hours_remaining;
                    ?>
                  </span>
                  <span class="countdown-period lh-14 font-xs"> hours </span>
                </span>

                <span class="countdown-section">
                  <span class="countdown-amount font-sm-bold lh-16">
                    <?php
                    $minutes_remaining = floor(($remaining % 3600) / 60);
                    echo $minutes_remaining;
                    ?>
                  </span>
                  <span class="countdown-period lh-14 font-xs"> mins </span>
                </span>

                <span class="countdown-section">
                  <span class="countdown-amount font-sm-bold lh-16">
                    <?php
                    $seconds_remaining = $remaining % 60;
                    echo $seconds_remaining;
                    ?>
                  </span>
                  <span class="countdown-period lh-14 font-xs"> secs </span>
                </span>
              </div>

            </div>
            <p class="font-md color-grey-500 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
              Are you a Tutor?
              <br class="d-none d-lg-block">
              and wants to teach as freelancer?
            </p>
            <div class="row">
              <div class="col-lg-3">
                <a class="btn btn-brand-1 btn-block mt-15 wow animate__animated animate__fadeIn" data-wow-delay=".0s" href="https://forms.gle/jnqruHGf5eNpoPYR9" target="_blank">
                  Apply Now
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 mb-40">
            <object data="assets/imgs/page/coming/coming_soon.svg" type="image/svg+xml"></object>
          </div>
        </div>
        <div class="border-bottom mb-0 mt-50"></div>
      </div>
    </section>
    <section class="section mt-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".0s">
            <div class="card-small card-small-2">
              <div class="card-image">
                <div class="box-image">
                  <i class="bi bi-headset h3"></i>
                </div>
              </div>
              <div class="card-info">
                <h6 class="color-brand-1 mb-10">Help &amp; support</h6>
                <p class="font-xs color-grey-500">Email
                  <a class="color-success" href="mailto:connect@stuttie.pk">
                    connect@stuttie.pk
                  </a>
                  <br>
                  For help with a current product or service or refer to FAQs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
            <div class="card-small card-small-2">
              <div class="card-image">
                <div class="box-image">
                  <i class="bi bi-phone h3"></i>
                </div>
              </div>
              <div class="card-info">
                <h6 class="color-brand-1 mb-10">Call Us</h6>
                <p class="font-xs color-grey-500">Call us to speak to a member of our team.<br>(+92) 315 6000784<br>(+92)
                  344 6342205</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <div class="card-small card-small-2">
              <div class="card-image">
                <div class="box-image">
                  <i class="bi bi-bar-chart-fill h3"></i>
                </div>
              </div>
              <div class="card-info">
                <h6 class="color-brand-1 mb-10">Bussiness Department</h6>
                <p class="font-xs color-grey-500">Contact the sales department about cooperation projects<br>(+01) 306
                  8886763</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 wow animate__animated animate__fadeIn" data-wow-delay=".3s">
            <div class="card-small card-small-2">
              <div class="card-image">
                <div class="box-image">
                  <i class="bi bi-globe-asia-australia h3"></i>
                </div>
              </div>
              <div class="card-info">
                <h6 class="color-brand-1 mb-10">Global branch</h6>
                <p class="font-xs color-grey-500">Contact us to open our branches globally.<br>connect@stuttie.pk</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class=" mt-20"> </footer>
  <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendors/wow.js"></script>
  <!-- <script src="assets/js/vendors/scrollup.js"></script> -->
  <!-- Count down-->
  <script src="assets/js/vendors/counterup.js"></script>
  <script src="assets/js/vendors/jquery.countdown.min.js"></script>
  <!-- Count down-->
  <script src="assets/js/main.js?v=5.0.0"></script>

  <script>
    // Set the target date
    var targetDate = new Date("2024-02-15T00:00:00").getTime();

    // Update the countdown every second
    var countdownInterval = setInterval(function() {
      var now = new Date().getTime();
      var remaining = targetDate - now;

      var days = Math.floor(remaining / (1000 * 60 * 60 * 24));
      var hours = Math.floor((remaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((remaining % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((remaining % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML =
        "<span class='countdown-section'>" +
        "<span class='countdown-amount font-sm-bold lh-16'>" + days + "</span>" +
        "<span class='countdown-period lh-14 font-xs'> days </span>" +
        "</span>" +

        "<span class='countdown-section'>" +
        "<span class='countdown-amount font-sm-bold lh-16'>" + hours + "</span>" +
        "<span class='countdown-period lh-14 font-xs'> hours </span>" +
        "</span>" +

        "<span class='countdown-section'>" +
        "<span class='countdown-amount font-sm-bold lh-16'>" + minutes + "</span>" +
        "<span class='countdown-period lh-14 font-xs'> mins </span>" +
        "</span>" +

        "<span class='countdown-section'>" +
        "<span class='countdown-amount font-sm-bold lh-16'>" + seconds + "</span>" +
        "<span class='countdown-period lh-14 font-xs'> secs </span>" +
        "</span>";

      // If the countdown is over, clear the interval
      if (remaining < 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "Expired";
      }
    }, 1000); // Update every second
  </script>
</body>

</html>
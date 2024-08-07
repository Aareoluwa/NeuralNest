<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="/cascading sheet/header.css" />
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="/cascading_sheet/card.css" />
    <link rel="stylesheet" href="/cascading_sheet/review.css" />
    <link rel="stylesheet" href="/cascading_sheet/option1.css" />
    <link rel="stylesheet" href="/cascading_sheet/accordion.css" />
    <link rel="stylesheet" href="/cascading_sheet/call.css" />
    <link rel="stylesheet" href="/cascading_sheet/iconCustomize.css" />
    <link rel="stylesheet" href="/cascading_sheet/location.css" />
    <link rel="stylesheet" href="/cascading_sheet/whoIsItFor.css" />
    <link rel="stylesheet" href="cascading_sheet/calender.css" />
    <link rel="stylesheet" href="/cascading_sheet/genderFee.css" />
    <link rel="stylesheet" href="/cascading_sheet/range.css" />
    <link rel="stylesheet" href="/cascading_sheet/button.css" />
    <link rel="stylesheet" href="/cascading_sheet/flexContainerIcon.css" />
    <link rel="stylesheet" href="/cascading_sheet/flexContainerIcon2.css" />
    <link rel="stylesheet" href="/cascading_sheet/rating.css" />
    <link rel="stylesheet" href="/about/styless.css ">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>

  <body>
    <div class="cont">
      <div class="cons">
        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >I need help with...</span
              ><i class="fa-solid fa-sort-down round"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/option1.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <i class="fa-solid fa-sort-down round space"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/call.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span
                style="
                  font-size: 13px;
                  color: #000000;
                  font-weight: 100;
                  margin-right: 50px;
                "
                >Locaton</span
              ><i class="fa-solid fa-sort-down round"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/location.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Who is the therapy for?</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/whoIsItFor.html"></div>
            </div>
          </div>
        </div>

        <!--For Calendar-->

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Available Dates</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div class="wrappper">
                <article>
                  <p class="current-date"></p>
                  <div class="icons">
                    <span
                      id="prev"
                      class="material-symbols-rounded"
                      style="font-size: 25px"
                      >chevron_left</span
                    >
                    <span
                      id="next"
                      class="material-symbols-rounded"
                      style="font-size: 25px"
                      >chevron_right</span
                    >
                  </div>
                </article>
                <div class="calendar">
                  <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                  </ul>
                  <ul class="days"></ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Avaiable Times</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/time.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Gneder</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/genderFee.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Fee</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/price.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Type of Theraphy</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/typeOfTherapy.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Type of Theraphy</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/range.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Accreditation</span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/Accreditation.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Therapist title<title></title></span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/TherapistTitle.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Therapist <title></title></span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/language.html"></div>
            </div>
          </div>
        </div>

        <div class="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <span style="font-size: 13px; color: #000000; font-weight: 100"
                >Therapist <title></title></span
              ><i class="fa-solid fa-sort-down round rounds"></i>
            </h2>
            <div class="accordion-content">
              <div w3-include-html="./html/Theraphist.html"></div>
            </div>
          </div>
        </div>

        <div w3-include-html="./html/button.html"></div>
      </div>
    </div>




    <div id="therapy-hint">
      <p>
        <strong>Find a Therapist.</strong> Book counselling with a professional
        therapist in minutes. To start therapy, simply choose from our
        professional psychologists, counsellors, and psychotherapists listed
        above.
      </p>
    </div>

    <div class="recent-views">
      <p class="recent-views-title">Your last view</p>
      <button type="button" class="therapist-card">
        <div class="therapist-image-container">
          <img
            src="/about/profile1.jpg"
            alt="Therapist Sue Aspinall"
            class="therapist-photo"
          />
        </div>
        <div class="inline-container">
          <span class="therapist-name">Sue Aspinall</span>
          <span class="session-price">£85</span>
        </div>
        <input type="date">
        <h1 class="session-availability">Available Thu, Feb 22nd</h1>
      </button>
      <p class="clear-history"><a href="#">X clear history</a></p>
    </div>

    <footer class="down-bar">
      <article><a href="#">Book a Therapist&nbsp;</a></article>
      <article><a href="#"> Search</a></article>
      <article><a href="#">Sign out</a></article>
      <br />
      <article><a href="#">Home</a></article>
      <article><a href="#"> About</a></article>
      <article><a href="#"> Help</a></article>
      <article><a href="#"> Glossary</a></article>
      <article>
        <a href="#"> Contact us <br /><br /></a>
      </article>

      <p>Copyright © 2024 Harley Therapy Platform</p>
      <p>10 Harley Street, London, W1G 9PF</p>
      <p><a href="#">Site Terms</a> | <a href="#">Privacy Policy</a></p>
    </footer>



    <script>
      w3.includeHTML();
    </script>
    <script src="./script/accordion.js"></script>
    <script src="./script/calendar.js"></script>
  </body>
</html>

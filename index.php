<?php require_once('googleauth.php');?>
<?php
  if(isset($_GET['logout'])){
      session_destroy();
      header('location: main.php');
  }
?>
<?php
if(substr($_SESSION['login_email'],0,2) !=="rs"){
  echo '<script>alert("Alert: Use Colege Mail!");</script>';
  echo '<script>window.location.href = "http://localhost/Texel/main.php";</script>';
  session_destroy();
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="dashboardstyle.css">

</head>

<body>
  <div class="wrapper">
    <div class="left-side">
      <a href="./?logout">
      <svg viewBox="0 0 512 512" fill="currentColor" >
        <path
          d="M255.2 468.6H63.8a21.3 21.3 0 01-21.3-21.2V64.6c0-11.7 9.6-21.2 21.3-21.2h191.4a21.2 21.2 0 100-42.5H63.8A63.9 63.9 0 000 64.6v382.8A63.9 63.9 0 0063.8 511H255a21.2 21.2 0 100-42.5z" />
        <path
          d="M505.7 240.9L376.4 113.3a21.3 21.3 0 10-29.9 30.3l92.4 91.1H191.4a21.2 21.2 0 100 42.6h247.5l-92.4 91.1a21.3 21.3 0 1029.9 30.3l129.3-127.6a21.3 21.3 0 000-30.2z" />
      </svg></a>
    </div>
    <div class="main-container">
      
      <div class="user-box first-box">
        <div class="activity card" style="--delay: .2s">
          <div class="title">User Activities</div>
          <div class="subtitle">Hoo - is an adaptive Online Courses Application with a wide range of course directions.
            The students will have a great possibility to study.</div>
          
          <div class="destination">
            
            
          </div>
        </div>
        <div class="discount card" style="--delay: .4s">
          <div class="title">Discount Offers</div>
          <div class="discount-wrapper">
            <div class="discount-info">
              <div class="subtitle">The Best Offer is:</div>
              <div class="subtitle-count">$5</div>
              <div class="subtitle">Distance:</div>
              <div class="subtitle-count dist">4.5 Km</div>
            </div>
            <div class="discount-chart">
              <div class="circle">
                <div class="pie">
                  <svg>
                    <circle cx="60" cy="60" r="50"></circle>
                  </svg>
                </div>
                <div class="counter">0</div>
              </div>
            </div>
          </div>
          
          <div class="button offer-button">Get Offer</div>
        </div>
        <div class="discount card" style="--delay: .4s">
          <div class="title">Discount Offers</div>
          <div class="discount-wrapper">
            <div class="discount-info">
              <div class="subtitle">The Best Offer is:</div>
              <div class="subtitle-count">$5</div>
              <div class="subtitle">Distance:</div>
              <div class="subtitle-count dist">4.5 Km</div>
            </div>
            <div class="discount-chart">
              <div class="circle">
                <div class="pie">
                  <svg>
                    <circle cx="60" cy="60" r="50"></circle>
                  </svg>
                </div>
                <div class="counter">0</div>
              </div>
            </div>
          </div>
          
          <div class="button offer-button">Get Offer</div>
        </div>
        <div class="account-wrapper" style="--delay: .8s">
          <div class="account-profile">
            <img
              src="<?= $_SESSION['login_picture'] ?>"alt="Error in retriving Your profile Picture">
            <div class="blob-wrap">
              <div class="blob"></div>
              <div class="blob"></div>
              <div class="blob"></div>
            </div>
            <div class="account-name"><?= ucwords($_SESSION['login_givenName'] . " " .$_SESSION['login_familyName']) ?></div>
            <div class="account-title"><?= $_SESSION['login_email']  ?></div>
          </div>
          
        </div>
      </div>
      <div class="user-box second-box">
        <div class="cards-wrapper" style="--delay: 1s">
          <div class="cards-header">
            
            <div class="cards-header-date">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                <path d="M15 18l-6-6 6-6" />
              </svg>
              <div class="title">Sat, Nov 25 2020</div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <path d="M9 18l6-6-6-6" />
              </svg>
            </div>
            <div class="cards-button button">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
              Create
            </div>
          </div>
          <div class="cards card">
            <table class="table">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Event Name</th>
                  <th>Oraganiser</th>
                  <th>Venue</th>
                  <th> </th>
                  <th>Time</th>
                  <th> </th>
                  <th>Amount</th>
                  <th>Active Participants</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="time">1</span>
                  </td>
                  <td>John D</td>
                  <td>Sudbury Station</td>
                  <td>N</td>
                  <td></td>
                  <td>€</td>
                  <td></td>
                  <td><svg viewBox="-22 0 134 134.06032" fill="currentColor">
                      <path
                        d="M23.347656 134.058594C8.445312 84.953125 39.933594 67.023438 39.933594 67.023438c-2.203125 26.203124 12.6875 46.617187 12.6875 46.617187 5.476562-1.652344 15.929687-9.375 15.929687-9.375 0 9.375-5.515625 29.78125-5.515625 29.78125s19.308594-14.929687 25.386719-39.726563c6.070313-24.796874-11.5625-49.691406-11.5625-49.691406 1.0625 17.550782-4.875 34.8125-16.507813 48 .582032-.671875 1.070313-1.417968 1.445313-2.226562 2.089844-4.179688 5.445313-15.042969 3.480469-40.199219C62.511719 14.890625 30.515625 0 30.515625 0c2.757813 21.515625-5.511719 26.472656-24.882813 67.3125-19.371093 40.832031 17.714844 66.746094 17.714844 66.746094zm0 0" />
                    </svg></td>
                  <td>
                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 6L9 17l-5-5" />
                      </svg>
                      789
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
  
                    <span class="time">2</span>
                  </td>
                  <td>Rufi</td>
                  <td>One Beacon</td>
                  <td>N</td>
                  <td></td>
                  <td>€</td>
                  <td></td>
                  <td><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="feather feather-activity">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                    </svg></td>
                  <td>
                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6L9 17l-5-5" />
                    </svg>
                    789
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="time">3</span>
                  </td>
                  <td>Alfred</td>
                  <td>5 Main High</td>
                  <td>N</td>
                  <td></td>
                  <td>€</td>
                  <td></td>
                  <td><svg viewBox="-22 0 134 134.06032" fill="currentColor">
                      <path
                        d="M23.347656 134.058594C8.445312 84.953125 39.933594 67.023438 39.933594 67.023438c-2.203125 26.203124 12.6875 46.617187 12.6875 46.617187 5.476562-1.652344 15.929687-9.375 15.929687-9.375 0 9.375-5.515625 29.78125-5.515625 29.78125s19.308594-14.929687 25.386719-39.726563c6.070313-24.796874-11.5625-49.691406-11.5625-49.691406 1.0625 17.550782-4.875 34.8125-16.507813 48 .582032-.671875 1.070313-1.417968 1.445313-2.226562 2.089844-4.179688 5.445313-15.042969 3.480469-40.199219C62.511719 14.890625 30.515625 0 30.515625 0c2.757813 21.515625-5.511719 26.472656-24.882813 67.3125-19.371093 40.832031 17.714844 66.746094 17.714844 66.746094zm0 0" />
                    </svg></td>
                  <td>
                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6L9 17l-5-5" />
                    </svg>
                    789
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="time">4</span>
                  </td>
                  <td>Mike J.</td>
                  <td>Brooklyn 99</td>
                  <td>N</td>
                  <td></td>
                  <td>€</td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6L9 17l-5-5" />
                    </svg>
                    789
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="time">5</span>
                  </td>
                  <td>Hermann B.</td>
                  <td>Janburg Station</td>
                    <td>N</td>
                  <td></td>
                  <td>€</td>
                  <td></td>
                  <td><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="feather feather-activity">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                    </svg></td>
                  <td>
                    <div class="status is-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M20 6L9 17l-5-5" />
                    </svg>
                    789
                  </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      
      </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="dashboardscript.js"></script>

</body>

</html>
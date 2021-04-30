<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>The band</title>
</head>
<body>
    <div id="main">
         <!-- Phần đầu  -->
        <div id="heade">
            <ul id="nav">
                <li><a href="">Home</a></li>
                <li><a href="">Band</a></li>
                <li><a href="">Tour</a></li>
                <li><a href="">Contact</a></li>
                <li>
                    <a href="">More
                        <i class="fa fa-caret-down"></i>
                    </a>
                   
                    <ul class="subnav">
                        <li><a href="">Merchadise</a></li>
                        <li><a href="">Extra</a></li>
                        <li><a href="">Media</a></li>
                    </ul>
                </li>
            </ul>
            <div class="search">
                <i class="fa fa-search"></i>
            </div>
            <!-- //mobile -->
            <div class="nav-mobile">
                <a class="home">Home</a>
                <i class="fa fa-bars mt"></i>
                <ul class="nav-menu">
                    <li><a>Band</a></li>
                    <li><a>Tour</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- /* HếtPhần đầu */ -->

        <!-- /*Silde*/ -->
        <div id="silder">
            <div class="mysilde"><img src="img/1.jpg" alt="">
                <div class="content">
                    <h1>Los Angeles</h1>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div></div>
            <div class="mysilde"><img src="img/2.jpg" alt="">
                <div class="content">
                    <h1>New York</h1>
                    <p>The atmosphere in New York is lorem ipsum.</p>
                </div>
            </div>
            <div class="mysilde"><img src="img/3.jpg" alt="">
                <div class="content">
                    <h1>Chicago</h1>
                    <p>Thank you, Chicago - A night we won't forget.</p>
                </div>
            </div>
        </div>
        <!-- /* Hết Silde*/ -->

        <!-- /* Nội Dung*/ -->
        <div id="content">
            <div class="section-content">
                <h1 class="section-heading">THE BAND</h1>
                <p class="section-dection">We love music</p>
                <p class="text-content">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="merber-list">
                    <div class="merber-item">
                      <p>name</p>
                      <img src="img/4.jpg" alt="">  
                    </div>
                    <div class="merber-item">
                        <p>name</p>
                        <img src="img/5.jpg" alt="">  
                    </div>
                    <div class="merber-item">
                        <p>name</p>
                        <img src="img/6.jpg" alt="">  
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="section-content mt">
                <h1 class="section-heading">TOUR DATES</h1>
                <p class="section-dection">Remember to book your tickets!</p>
                <div class="calendar">
                    <ul>
                        <li><p>September <span>sold out</span></p></li>
                        <li><p>October <span>sold out</span> </p> </li>
                        <li>November <span>3</span></li>
                    </ul>
                </div>
                <div class="info-tour">
                    <div class="tuor-item">
                        <img src="img/13.jpg" alt="">
                        <div class="tuor-content">
                            <h1>New York</h1>
                            <p>Fri 27 Nov 2016</p>
                            <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
                            <br>
                            <button>Buy Tickets</button>
                        </div>
                        
                    </div>
                    <div class="tuor-item">
                        <img src="img/11.jpg" alt="">
                        <div class="tuor-content">
                            <h1>Paris</h1>
                            <p>Sat 28 Nov 2016</p>
                            <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
                            <br>
                            <button>Buy Tickets</button>
                        </div>
                    </div>
                    <div class="tuor-item">
                        <img src="img/12.jpg" alt="">
                        <div class="tuor-content">
                            <h1>San Francisco</h1>
                            <p>Sun 29 Nov 2016</p>
                            <span>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</span>
                           <br>
                            <button>Buy Tickets</button>
                        </div>
                    </div>  
                    <div class="clear"></div>
                </div>
            </div>
            <div class="section-content">
                <h1 class="section-heading">CONTACT</h1>
                <p class="section-dection">Fan? Drop a note!</p>
              <div class="contatctcontent">
                <div class="section-contact">
                    <div class="address">
                      <i class="fa fa-map-marker"></i>
                      <p>Chicago, US</p>
                    </div>
                    <div class="phone">
                      <i class="fa fa-phone"></i>
                      <p>Phone: +00 151515</p>
                    </div>
                    <div class="email">
                      <i class="fa fa-envelope"></i>
                      <p>Email: mail@mail.com</p>
                    </div>
                   
                </div>
                <div class="input-contact">
                  <input type="text" name="name" placeholder="name" >
                  <input type="text"name="email" placeholder="email">
                  <input type="text" name="message" placeholder="message">
                  <br>
                  <button>Send</button>
              </div>
              </div>
              
            </div>
            <div class="map">
                <img src="img/10.jpg" alt="">
            </div>
        </div>
        <!-- /* Hết Nội dung */

        /* Chân trang*/ -->
        <div id="footer">
        <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-google"></i>
            
        </div>
        <p>Nguyễn Minh Thao</p>
        </div>
        <!-- /* Hết Chân Trang*/ -->
    </div>
    <script src="public/js/main.js"></script>
</body>
</html>
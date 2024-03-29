<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'constants.php';
session_start();

$user = empty($_SESSION['user']) ? false : $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Fastcheckouts" />
    <meta name="keywords" content="Payecards" />
    <title>Fastcheckouts | Features</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="shortcut icon"
      href="./images/techfordem-favicon.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css"
    />
  </head>
  <body>
    <section class="py_Header">
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3">
          <a
            href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none"
          >
            <!-- <div style="width: 180px; margin-left: 20px">
              <img src="/images/logo.png" alt="img" width="100%" />
            </div> -->
            <p class="logo-text">fastcheckouts</p>
          </a>

          <ul class="nav nav-pills">
            <!-- <li class="nav-item">
              <a href="tel:+254811231053" class="nav-link py_headerLink"
                >+254811231053</a
              >
            </li> -->
            <li class="nav-item">
              <a href="/" class="nav-link py_headerLink">Home</a>
            </li>
            <li class="nav-item">
              <a href="./trading-platform.php" class="nav-link py_headerLink"
                >Trading Platforms</a
              >
            </li>
            <li class="nav-item active-item">
              <a href="./features.php" class="nav-link py_headerLink"
                >Features</a
              >
            </li>
            <li class="nav-item">
              <a href="./about.php" class="nav-link py_headerLink">About us</a>
            </li>
            <li class="nav-item">
              <a href="./contact.php" class="nav-link py_headerLink">Contact</a>
            </li>
            <?php if($user): ?>
            <li class="nav-item">
              <a href="<?= BASE_URL; ?>/logout.php" class="nav-link py_logout"
                >Logout</a
              >
            </li>
            <?php else: ?>
            <li class="nav-item">
              <a href="<?= BASE_URL; ?>/login.php" class="nav-link py_loginit"
                >Login</a
              >
            </li>
            <?php endif; ?>
          </ul>
        </header>
      </div>
    </section>

    <div id="pageMessages"></div>

    <section class="py_Web-slider features-slider">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="py_Slider-content">
              <p class="title">
                Fastcheckouts Features: <br />
                Unleashing Your Trading<br />
                Potentia
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-section-services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-1.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Forex (Foreign Exchange):</p>
                <p class="content">
                  "Trade a vast array of currency pairs, from major to exotic.
                  Our Forex trading options cater to all skill levels, offering
                  competitive spreads, real-time market analysis, and strategic
                  insights to leverage market fluctuations.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-1.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Forex (Foreign Exchange):</p>
                <p class="content">
                  "Trade a vast array of currency pairs, from major to exotic.
                  Our Forex trading options cater to all skill levels, offering
                  competitive spreads, real-time market analysis, and strategic
                  insights to leverage market fluctuations.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-2.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Indices:</p>
                <p class="content">
                  Gain access to the world's leading indices like the S&P 500
                  and Nikkei 225. Our Indices trading opens doors to diverse
                  economies and sectors, offering a panoramic view of global
                  market trends.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-3.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Commodities:</p>
                <p class="content">
                  Explore the commodities market with our extensive options in
                  metals and energy. Our Commodities trading is a gateway to
                  capitalize on market trends and diversify your portfolio.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-4.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Cryptocurrencies:</p>
                <p class="content">
                  Embrace the digital currency era with popular cryptocurrencies
                  like Bitcoin and Ethereum. Fastcheckouts provides a robust
                  platform to navigate the high-potential crypto market.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-5.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Stocks & Bonds:</p>
                <p class="content">
                  Invest in the success stories of leading companies with our
                  Stocks & Bonds options. From tech giants to retail leaders, we
                  offer a broad spectrum of stocks and bonds, enabling you to
                  tailor your investment portfolio.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-6.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Enhanced Trading Tools:</p>
                <p class="content">
                  Our platform is equipped with advanced tools for precise
                  trading. Benefit from sophisticated charting, risk management
                  features, and real-time insights for informed decision-making.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-7.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Education and Resources:</p>
                <p class="content">
                  Elevate your trading with our comprehensive educational suite.
                  Our resources cater to all levels, covering every aspect of
                  trading with live webinars, market trends exploration, and
                  in-depth technical analysis.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12">
            <div class="services-box features-services">
              <img
                src="/images/features-img-8.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <div class="service-text-box">
                <p class="services-title-2">Zero Commission:</p>
                <p class="content">
                  We advocate for transparent and equitable trading with zero
                  commission on trades. Our competitive spreads and no hidden
                  fees policy ensure a cost-effective trading environment
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <h2 class="logo-text" style="color: #ffffff; margin-bottom: 2rem">
              fastcheckouts
            </h2>
            <div class="footer-box-title">
              <p class="title mb-5">
                Stay Focused, <br />
                Stay Driven
              </p>
              <p class="content">
                <strong>Address: </strong>
                <a
                  class="py-link"
                  href="address:Mombasa Maldini Highway, building: 197/Bombolulu"
                  >Plot No/Building Name LAIBONI CENTER Street/Road LENANA ROAD
                  Town/County NAIROBI Postal Address 2126 Post Code 80100</a
                >
              </p>
              <p class="content">
                <strong>Email: </strong>
                <a class="py-link" href="mail:admin@fastcheckouts.com"
                  >admin@fastcheckouts.com</a
                >
              </p>
              <p class="content">
                <strong>Telephone: </strong>
                <a class="py-link" href="tel:+254702732570">+254702732570</a>
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-8">
            <div class="py-Newsletter-box">
              <div
                class="newsletter-boxs"
                style="display: flex; align-items: center; gap: 10px"
              >
                <input
                  class="py-newsletter-input"
                  placeholder="Email"
                  type="text"
                  style="border-radius: 30px; padding: 12px 8rem 12px 2rem"
                />
                <a
                  href="javascript:void(0)"
                  class="nav-link active py_TryItNow"
                  aria-current="page"
                  onclick="createAlert('','Subscribed!','Congratulations, you have subscribed to the newsletter','success',true,true,'pageMessages');"
                  >Subscribe
                </a>
              </div>
              <div
                style="
                  display: flex;
                  align-items: center;
                  gap: 10px;
                  margin-top: 15px;
                "
              >
                <input
                  style="margin-top: -20px"
                  type="checkbox"
                  name=""
                  id=""
                />
                <p
                  style="
                    font-weight: 400;
                    font-size: 12px;
                    line-height: 14px;
                    color: #ffffff;
                  "
                >
                  I agree to be contacted by email or phone to receive
                  information about<br class="mobile-hide" />
                  fastcheckouts product, offers, and events. I understand I
                  can<br class="mobile-hide" />
                  unsubscribe at any time.
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="col-sm-12 col-md-3">
            <div class="footer-trading-box">
              <p class="title">Trading</p>
              <p class="content">Trading Accounts</p>
              <p class="content">Trading Platforms</p>
              <p class="content">Trading Conditions</p>
              <p class="content">Market Hours, and Events</p>
              <p class="content">Deposits & Withdrawals</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-trading-box">
              <p class="title">Trading market</p>
              <p class="content">Crypto CFDs</p>
              <p class="content">Share CFDs</p>
              <p class="content">Commodities</p>
              <p class="content">Spot Metals</p>
              <p class="content">Energies</p>
              <p class="content">Indices</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-trading-box">
              <p class="title">Education</p>
              <p class="content">Market News</p>
              <p class="content">FXT Analysis</p>
              <p class="content">Webinars</p>
              <p class="content">Trading Insight</p>
              <p class="content">FXT Navigator Guide</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="footer-trading-box">
              <p class="title">Company</p>
              <p class="content">Why Choose Us?</p>
              <p class="content">Regulation</p>
              <p class="content">FXT News</p>
              <p class="content">Careers</p>
              <p class="content">Reviews</p>
            </div>
          </div> -->
          <div class="col-sm-12 col-md-12">
            <hr
              style="
                border: 0.5px solid #5c86e4;
                opacity: 1;
                margin-top: 30px;
                margin-bottom: 30px;
              "
            />
            <p style="color: #ffffff">© Copyright fastcheckouts</p>
            <p style="color: #ffffff; text-align: center; margin-top: 3rem">
              Terms & Conditions, Privacy Policy, Risk Disclosure, Cookie
              Policy, Regulatory Information
            </p>
          </div>
        </div>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="./javascript/javascript.js"></script>
  </body>
</html>

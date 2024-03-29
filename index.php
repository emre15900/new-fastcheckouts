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
    <title>Fastcheckouts</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="shortcut icon"
      href="../images/techfordem-favicon.png"
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
              <img src="./images/logo.png" alt="img" width="100%" />
            </div> -->
            <p class="logo-text">fastcheckouts</p>
          </a>

          <ul class="nav nav-pills">
            <!-- <li class="nav-item">
              <a href="tel:+254811231053" class="nav-link py_headerLink"
                >+254811231053</a
              >
            </li> -->
            <li class="nav-item active-item">
              <a href="/" class="nav-link py_headerLink">Home</a>
            </li>
            <li class="nav-item">
              <a href="./trading-platform.php" class="nav-link py_headerLink"
                >Trading Platforms</a
              >
            </li>
            <li class="nav-item">
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
                <a href="<?= BASE_URL; ?>/logout.php" class="nav-link py_logout">Logout</a>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a
                  href="<?= BASE_URL; ?>/login.php"
                  class="nav-link py_loginit"
                  >Login</a
                >
              </li>
            <?php endif; ?>
          </ul>
        </header>
      </div>
    </section>

    <div id="pageMessages"></div>

    <section class="py_Web-slider">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="py_Slider-content">
              <p class="title">
                Super charge Your <br />
                Trading & Investment
              </p>
              <p class="content">
                Take advantage of the competitive trading costs that beat 80% of
                <br class="mobile-hide" />
                the competition, all the time. FXTRADING.com offers top-shelf
                <br class="mobile-hide" />
                industry trading conditions, designed for your trading success
                <br class="mobile-hide" />
              </p>
              <div class="py_sliderButtons mt-4">
                <a
                  href="<?= BASE_URL; ?>/signup.php"
                  class="nav-link active py_TryItNow"
                  aria-current="page"
                  >Start trading
                </a>
                <?php if(!$user): ?>
                  <a
                    href="<?= BASE_URL; ?>/login.php"
                    class="nav-link active py_freeTrial"
                    aria-current="page"
                    >Client login</a
                  >
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-section-msps">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div>
              <p class="title">
                We are committed to <br class="mobile-hide" />
                meeting your CFD and FX <br class="mobile-hide" />
                trading needs
              </p>
              <p class="content">
                Oin the trading community with more than 60,000 clients in
                <br class="mobile-hide" />
                over 100 countries. We make trading easy and transparent
                <br class="mobile-hide" />
                for traders at all levels. Become a smarter and better trader
                <br class="mobile-hide" />
                with a globally regulated brokerage.
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="shapes-box">
              <img
                src="./images/shapes.png"
                width="300px"
                alt="img"
                style="margin-bottom: 20px"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-section-services">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div class="services-title">
              <p class="title">
                Why Trade with <br />
                fastcheckouts?
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-1.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">
                Multi-Asset <br />
                Platform
              </p>
              <p class="content">
                Trade over 10,000 instruments <br class="mobile-hide" />
                covering stocks, crypto, forex,<br class="mobile-hide" />
                commodities and more
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-2.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">
                Top Shelf Trading <br />Environment
              </p>
              <p class="content">
                Enjoy top-shelf trading<br class="mobile-hide" />
                conditions, with costs that<br class="mobile-hide" />
                beat 80% of our peers
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-3.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">Experience-Driven <br />Innovation</p>
              <p class="content">
                FXT’s product developers aren’t <br class="mobile-hide" />just
                technical experts – they're<br class="mobile-hide" />
                traders who’ve been in the<br class="mobile-hide" />
                trenches themselves
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-4.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">
                Advanced <br />
                Trading Tools
              </p>
              <p class="content">
                Cutting-edge trading tools <br class="mobile-hide" />developed
                by an in-house <br class="mobile-hide" />team to drive the
                success<br class="mobile-hide" />
                of traders at all levels
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-5.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">
                Fully Regulated <br />
                Brokerage
              </p>
              <p class="content">
                We’re licensed and fully <br class="mobile-hide" />
                compliant across multiple <br class="mobile-hide" />
                jurisdictions to ensure the<br class="mobile-hide" />
                highest levels of integrity
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="services-box">
              <img
                src="./images/service-img-6.png"
                width="100%"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">
                Veteran <br />
                Expertise
              </p>
              <p class="content">
                FXT’s team consists of<br class="mobile-hide" />
                trading veterans with a deep,<br class="mobile-hide" />
                first-hand understanding of<br class="mobile-hide" />
                markets
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-section-single">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div>
              <p class="first-title">TRADING 101</p>
              <p class="title">
                Outsmart the Market <br class="mobile-hide" />
                with FXT Navigator
              </p>
              <p class="subtitle">
                The trading tools offered by FXT Navigator were developed by<br
                  class="mobile-hide"
                />
                traders, for traders. Our fintech developers and market
                <br class="mobile-hide" />veterans create innovative,
                institutional-calibre trading<br class="mobile-hide" />
                analytics that are user-friendly and accessible. Take your<br
                  class="mobile-hide"
                />
                trading to the next level with FXT Navigator
              </p>
              <a
                href="./login.php"
                class="py_freeTrial"
                aria-current="page"
                >Get started</a
              >
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div>
              <div class="webinar">
                <p class="first-titles">Webinars</p>
                <img src="../images/right-left.png" alt="" width="200px" />
              </div>
              <div class="webinar-img">
                <img src="../images/world-vector.png" alt="" width="100%" />
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="services-box">
              <img
                src="./images/sub-service-1.png"
                width="70px"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">Analytics</p>
              <p class="content">
                Learn more about the markets and your trading performance and
                risk profile
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="services-box">
              <img
                src="./images/sub-service-2.png"
                width="70px"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">Alerts</p>
              <p class="content">
                Be alerted when markets selected are trending or are
                overbought/oversold
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="services-box">
              <img
                src="./images/sub-service-3.png"
                width="70px"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">Screeners</p>
              <p class="content">
                Use popular trade setups to identify high probability trades
                across 1000’s of symbols
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="services-box">
              <img
                src="./images/sub-service-4.png"
                width="70px"
                alt="img"
                style="margin-bottom: 20px"
              />
              <p class="services-title-2">Signals</p>
              <p class="content">
                Turn your screener analysis into high probability trade signals
                delivered conveniently and on time
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py_Web-section-msps">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <div>
              <div class="step-title">
                <p class="title">How to Get Started?</p>
              </div>
              <div class="step-box">
                <p class="title">01 Register</p>
                <p class="title">02 Verify</p>
                <p class="title">03 Fund</p>
                <p class="title">04 Trade</p>
              </div>
              <div class="step-main-box">
                <a
                  href="./login.php"
                  class="py_freeTrial-2 mt-5"
                  aria-current="page"
                  >Get started</a
                >
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

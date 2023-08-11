<?php
session_start();
if($_SESSION['uname'])
{

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crypo.netlify.app/settings-profile-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 06:21:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>vendXtrade</title>
  <link rel="icon" href="assets/img/vendxtradenew.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header class="light-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="index.php"><img src="assets/img/vendxtradenew.png" height="1000px" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          
        <a class="nav-link " href="profile.php" role="button"  aria-haspopup="true"
              aria-expanded="false">
              Profile
            </a>
           
          </li>
          
            <a class="nav-link " href="exchange.php" >
              Exchange
            </a>
           
          </li>
          
            <a class="nav-link " href="market.php">
              Markets
            </a>
            
          </li>
          
            <!-- <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Dashboard
            </a>
            -->
          </li>
          
          <div class="dropdown">
  <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Others
</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <li><a class="dropdown-item" href="market_news.php">Market News</a></li>
    <li><a class="dropdown-item" href="trending.php">Trending</a></li>
    <li><a class="dropdown-item" href="ipos.php">Recent IPOS</a></li>
    <li><a class="dropdown-item" href="learn.php">Learn with Us</a></li>
  </div>
</div>
           
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>
          <li class="nav-item dropdown header-custom-icon">
            <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="icon ion-md-notifications"></i>
              <span class="circle-pulse"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium">6 New Notifications</p>
                <a href="#!" class="text-muted">Clear all</a>
              </div>
              <div class="dropdown-body">
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-lock"></i>
                  </div>
                  <div class="content">
                    <p>Account password change</p>
                    <p class="sub-text text-muted">5 sec ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-md-alert"></i>
                  </div>
                  <div class="content">
                    <p>Solve the security issue</p>
                    <p class="sub-text text-muted">10 min ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-android"></i>
                  </div>
                  <div class="content">
                    <p>Download android app</p>
                    <p class="sub-text text-muted">1 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-bitcoin"></i>
                  </div>
                  <div class="content">
                    <p>Bitcoin price is high now</p>
                    <p class="sub-text text-muted">2 hrs ago</p>
                  </div>
                </a>
                <a href="#!" class="dropdown-item">
                  <div class="icon">
                    <i class="icon ion-logo-usd"></i>
                  </div>
                  <div class="content">
                    <p>Payment completed</p>
                    <p class="sub-text text-muted">4 hrs ago</p>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer d-flex align-items-center justify-content-center">
                <a href="#!">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="assets/img/avatar.svg" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="assets/img/avatar.svg" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0"><?php echo $_SESSION["uname"];?></p>
                  <p class="email text-muted mb-3"><?php echo $_SESSION["email"];?></p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a href="profile.php" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="profile.php" class="nav-link">
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings-light.html" class="nav-link">
                      <i class="icon ion-md-settings"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="nav-item" id="changeThemeLight">
                    <a href="#!" class="nav-link">
                      <i class="icon ion-md-sunny"></i>
                      <span>Theme</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="logout.php" class="nav-link red">
                      <i class="icon ion-md-power"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<div class="markets ptb70">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="markets-container">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_b60d8"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "BINANCE:BTCUSDT",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "0",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_b60d8"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
     
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_472e2"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/EURUSD/?exchange=OANDA" rel="noopener" target="_blank"><span class="blue-text">EUR USD chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:EURUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_472e2"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="markets-container">
         <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_c4193"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/USDJPY/?exchange=OANDA" rel="noopener" target="_blank"><span class="blue-text">USD JPY chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:USDJPY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "0",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_c4193"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<!-- TradingView Widget END -->

          </div>
        </div>
        <div class="col-md-12">
          <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Market data</span></a> by vendXtrade</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": "1100",
  "height": "450",
  "symbolsGroups": [
    {
      "name": "Forex",
      "originalName": "Forex",
      "symbols": [
        {
          "name": "FX:EURUSD"
        },
        {
          "name": "FX:GBPUSD"
        },
        {
          "name": "FX:USDJPY"
        },
        {
          "name": "FX:GBPJPY"
        },
        {
          "name": "FX:AUDUSD"
        },
        {
          "name": "FX:USDCAD"
        },
        {
          "name": "OANDA:EURJPY"
        },
        {
          "name": "FX:NZDUSD"
        },
        {
          "name": "OANDA:EURJPY"
        },
        {
          "name": "FX:CADCHF"
        },
        {
          "name": "OANDA:EURNZD"
        },
        {
          "name": "CAPITALCOM:EURUSD"
        },
        {
          "name": "FX_IDC:USDRUB"
        },
        {
          "name": "OANDA:GBPCHF"
        },
        {
          "name": "OANDA:EURNZD"
        }
      ]
    },
    {
      "name": "Crypto",
      "symbols": [
        {
          "name": "BITSTAMP:BTCUSD"
        },
        {
          "name": "BINANCE:BTCUSDT"
        },
        {
          "name": "COINBASE:BTCUSD"
        },
        {
          "name": "BINANCE:BTCUSDT.P"
        },
        {
          "name": "BINANCE:ETHUSDT"
        },
        {
          "name": "BYBIT:BTCUSDT.P"
        },
        {
          "name": "INDEX:BTCUSD"
        },
        {
          "name": "BITSTAMP:ETHUSD"
        },
        {
          "name": "BINANCE:MATICUSDT"
        },
        {
          "name": "BINANCE:ADAUSDT"
        },
        {
          "name": "BINANCE:XRPUSDT"
        },
        {
          "name": "BINANCE:SHIBUSDT"
        },
        {
          "name": "BINANCE:GALAUSDT"
        },
        {
          "name": "BINANCE:BTCBUSD"
        },
        {
          "name": "BINANCE:EOSUSDT"
        },
        {
          "name": "BYBIT:SOLUSDT.P"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
          <!-- <div class="markets-pair-list">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#STAR" role="tab" aria-selected="false"><i
                    class="icon ion-md-star"></i> Favorites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#BTC" role="tab" aria-selected="true">BTC</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#KCS" role="tab" aria-selected="true">KCS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#USDT" role="tab" aria-selected="true">USDT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#ALTS" role="tab" aria-selected="true">ALTS</a>
              </li>
            </ul> -->
           
             
              <div class="tab-pane fade show" id="ALTS" role="tabpanel">
                


<div class="container">

</div>










              </div>
              </div>
              </div>
             
            </div>

            <!-- <div class="text-center">
              <a href="#" class="load-more btn">Load More <i class="icon ion-md-arrow-down"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/amcharts-core.min.js"></script>
  <script src="assets/js/amcharts.min.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from crypo.netlify.app/markets-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 06:21:40 GMT -->
</html>
<?php
}
else
{
    header('Location:signin.php');
}
?>
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
            </a> -->
           
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
                    <a href="settings-profile-light.html" class="nav-link">
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="settings-wallet-light.html" class="nav-link">
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
    <div class="container-fluid mtb15 no-fluid">
    <div class="row sm-gutters">
      <div class="col-md-3">
        <div class="market-pairs">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm"><i class="icon ion-md-search"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
          </div>
          <br>
          <div class="tab-content">
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by vendXtrade</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "light",
  "dateRange": "1M",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "380",
  "height": "850",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(106, 109, 120, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD",
          "d": "EUR/USD"
        },
        {
          "s": "FX:GBPUSD",
          "d": "GBP/USD"
        },
        {
          "s": "FX:USDJPY",
          "d": "USD/JPY"
        },
        {
          "s": "FX:USDCHF",
          "d": "USD/CHF"
        },
        {
          "s": "FX:AUDUSD",
          "d": "AUD/USD"
        },
        {
          "s": "FX:USDCAD",
          "d": "USD/CAD"
        },
        {
          "s": "FX:EURNZD"
        },
        {
          "s": "FX:GBPCAD"
        },
        {
          "s": "PEPPERSTONE:EURUSD"
        },
        {
          "s": "FX:NZDCAD"
        },
        {
          "s": "FX:CADCHF"
        },
        {
          "s": "OANDA:EURNZD"
        },
        {
          "s": "OANDA:EURAUD"
        },
        {
          "s": "FOREXCOM:USDJPY"
        },
        {
          "s": "FX:CADCHF"
        },
        {
          "s": "OANDA:GBPUSD"
        },
        {
          "s": "FX:EURCHF"
        },
        {
          "s": "FX:EURCHF"
        }
      ],
      "originalTitle": "Forex"
    },
    {
      "title": "Crypto",
      "symbols": [
        {
          "s": "BINANCE:BTCUSDT"
        },
        {
          "s": "BITSTAMP:BTCUSD"
        },
        {
          "s": "BINANCE:ETHUSDT"
        },
        {
          "s": "BINANCE:SOLUSDT"
        },
        {
          "s": "CRYPTOCAP:BTC.D"
        },
        {
          "s": "COINBASE:ETHUSD"
        },
        {
          "s": "BINANCE:DOGEUSDT"
        },
        {
          "s": "KUCOIN:BTCUSDT"
        },
        {
          "s": "BINANCE:ADAUSDT"
        },
        {
          "s": "BINANCE:SHIBUSDT"
        },
        {
          "s": "CRYPTOCAP:TOTAL2"
        },
        {
          "s": "BINANCE:STXUSDT"
        },
        {
          "s": "BINANCE:EGLDUSDT"
        },
        {
          "s": "BYBIT:SOLUSDT.P"
        },
        {
          "s": "BINANCE:FTMUSDT"
        },
        {
          "s": "BINANCE:SXPUSDT.P"
        },
        {
          "s": "BINANCE:FTMUSD.P"
        }
      ]
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
            
            <div class="tab-pane fade show" id="ETH" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade show" id="NEO" role="tabpanel">
              <table class="table">
                <thead>
                  <tr>
                    <th>Pairs</th>
                    <th>Last Price</th>
                    <th>Change</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="main-chart mb15">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_e8053"></div>
            <script src="../s3.tradingview.com/tv.js"></script>
            <script>
              new TradingView.widget(
                {
                  "width": "100%",
                  "height": 550,
                  "symbol": "BITSTAMP:BTCUSD",
                  "interval": "D",
                  "timezone": "Etc/UTC",
                  "theme": "Light",
                  "style": "1",
                  "locale": "en",
                  "toolbar_bg": "#f1f3f6",
                  "enable_publishing": false,
                  "withdateranges": true,
                  "hide_side_toolbar": false,
                  "allow_symbol_change": true,
                  "show_popup_button": true,
                  "popup_width": "1000",
                  "popup_height": "650",
                  "container_id": "tradingview_e8053"
                }
              );
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="market-trade">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-trade-limit" role="tab"
                aria-selected="true">Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-market" role="tab" aria-selected="false">Market</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-limit" role="tab" aria-selected="false">Stop
                Limit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-stop-market" role="tab" aria-selected="false">Stop
                Market</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-trade-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                  
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">Quantity</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount" >
                    <div class="input-group-append">
                      <span class="input-group-text">Amount</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button type="button" onclick='xyz()' class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">Quantity</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">Amount</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell" onclick=xyz()>Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy </button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-limit" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-stop-market" role="tabpanel">
              <div class="d-flex justify-content-between">
                <div class="market-trade-buy">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn buy">Buy</button>
                </div>
                <div class="market-trade-sell">
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Price">
                    <div class="input-group-append">
                      <span class="input-group-text">BTC</span>
                    </div>
                  </div>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Amount">
                    <div class="input-group-append">
                      <span class="input-group-text">ETH</span>
                    </div>
                  </div>
                  <ul class="market-trade-list">
                    <li><a href="#!">25%</a></li>
                    <li><a href="#!">50%</a></li>
                    <li><a href="#!">75%</a></li>
                    <li><a href="#!">100%</a></li>
                  </ul>
                  <p>Available: <span>0 BTC = 0 USD</span></p>
                  <p>Volume: <span>0 BTC = 0 USD</span></p>
                  <p>Margin: <span>0 BTC = 0 USD</span></p>
                  <p>Fee: <span>0 BTC = 0 USD</span></p>
                  <button class="btn sell">Sell</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        
            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Market today</span></a> by vendXtrade</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
  "colorTheme": "light",
  "dateRange": "12M",
  "exchange": "NASDAQ",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": false,
  "showFloatingTooltip": false,
  "width": "400",
  "height": "800",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(106, 109, 120, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
}
  </script>
</div>
<!-- TradingView Widget END -->
            <div class="tab-pane fade" id="market-depth" role="tabpanel">
              <div class="depth-chart-container">
                <div class="depth-chart-inner">
                  <div id="lightDepthChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="col-md-3"> -->
        <div class="container">
      <div class="col-md-12">
        <div class="market-history market-order mt15">
          <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#open-orders" role="tab" aria-selected="true">Open
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#stop-orders" role="tab" aria-selected="false">Closed
                Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#order-history" role="tab" aria-selected="false">Order
                history</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#trade-history" role="tab" aria-selected="false">Balance</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="open-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="stop-orders" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="order-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
            <div class="tab-pane fade" id="trade-history" role="tabpanel">
              <ul class="d-flex justify-content-between market-order-item">
                <li>Time</li>
                <li>All pairs</li>
                <li>All Types</li>
                <li>Buy/Sell</li>
                <li>Price</li>
                <li>Amount</li>
                <li>Executed</li>
                <li>Unexecuted</li>
              </ul>
              <span class="no-data">
                <i class="icon ion-md-document"></i>
                No data
              </span>
            </div>
          </div>
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
  <script src="assets/js/jquery.mCustomScrollbar.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    $('tbody, .market-news ul').mCustomScrollbar({
      theme: 'minimal',
    });
    function xyz()
    {
      alert("Oops!!Sorry for the inconvenience.We are not yet registered to exchange");
    }
  </script>
</body>


<!-- Mirrored from crypo.netlify.app/exchange-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 06:21:15 GMT -->
</html>
<?php
}
else
{
    header('Location:signin.php');
}
?>
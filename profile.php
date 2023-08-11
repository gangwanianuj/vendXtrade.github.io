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
  <link rel="icon" href="assets/img/vendxtradenew.png"" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header class="light-bb">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="index.php">
      <img src="assets/img/vendxtradenew.png" height="1000px" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          
            <a class="nav-link " href="profile.php" role="button" 
              aria-expanded="false">
              Profile
            </a>
           
          <!-- </li> -->
          
            <a class="nav-link " href="exchange.php" >
              Exchange
            </a>
           
         
          
            <a class="nav-link " href="market.php">
              Markets
            </a>
            
           
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
          
</ul>
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
                    <a href="" class="nav-link">
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
  <div class="settings mtb15">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-3">
          <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
              aria-controls="settings-profile" aria-selected="true"><i class="icon ion-md-person"></i> Profile</a>
            <a class="nav-link" id="settings-wallet-tab" data-toggle="pill" href="#settings-wallet" role="tab"
              aria-controls="settings-wallet" aria-selected="false"><i class="icon ion-md-wallet"></i> Wallet</a>
            <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab"
              aria-controls="settings" aria-selected="false"><i class="icon ion-md-settings"></i> Settings</a>
          </div>
        </div>
        <div class="col-md-12 col-lg-9">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
              aria-labelledby="settings-profile-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">General Information</h5>
                  <div class="settings-profile">
                    <form>
                      <img src="assets/img/avatar.svg" alt="avatar">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fileUpload">
                        <label class="custom-file-label" for="fileUpload">Choose avatar</label>
                      </div>
                      <div class="form-row mt-4">
                        <div class="col-md-6">
                          <label for="formFirst">First name</label>
                          <input id="formFirst" type="text" class="form-control" placeholder="First name" value="<?php echo $_SESSION['uname'];?>">
                        </div>
                        <div class="col-md-6">
                          <label for="formLast">Last name</label>
                          <input id="formLast" type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-md-6">
                          <label for="emailAddress">Email</label>
                          <input id="emailAddress" type="text" class="form-control" value="<?php echo $_SESSION['email'];?>" placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                          <label for="phoneNumber">Phone</label>
                          <input id="phoneNumber" type="text" class="form-control" placeholder="Enter phone number">
                        </div>
                        <div class="col-md-6">
                          <label for="selectLanguage">Language</label>
                          <select id="selectLanguage" class="custom-select">
                            <option selected>English</option>
                            <option>Mandarin Chinese</option>
                            <option>Spanish</option>
                            <option>Arabic</option>
                            <option>Russian</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="selectCurrency">Currency</label>
                          <select id="selectCurrency" class="custom-select">
                            <option selected>USD</option>
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>CHF</option>
                          </select>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Security Information</h5>
                  <div class="settings-profile">
                    <form>
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="currentPass">Current password</label>
                          <input id="currentPass" type="text" class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="col-md-6">
                          <label for="newPass">New password</label>
                          <input id="newPass" type="text" class="form-control" placeholder="Enter new password">
                        </div>
                        <div class="col-md-6">
                          <label for="securityOne">Security questions #1</label>
                          <select id="securityOne" class="custom-select">
                            <option selected>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityAnsOne">Answer</label>
                          <input id="securityAnsOne" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-6">
                          <label for="securityTwo">Security questions #2</label>
                          <select id="securityTwo" class="custom-select">
                            <option selected>Choose...</option>
                            <option>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityAnsTwo">Answer</label>
                          <input id="securityAnsTwo" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-6">
                          <label for="securityThree">Security questions #3</label>
                          <select id="securityThree" class="custom-select">
                            <option selected>Choose...</option>
                            <option>What was the name of your first pet?</option>
                            <option>What's your Mother's middle name?</option>
                            <option>What was the name of your first school?</option>
                            <option>Where did you travel for the first time?</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="securityFore">Answer</label>
                          <input id="securityFore" type="text" class="form-control" placeholder="Enter your answer">
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>


            <?php
$email=$_SESSION['email'];
require("conn.php");
$query1="SELECT  * FROM `users` WHERE `email` = '$email';";
    $res1=mysqli_query($dbconn,$query1);
    $row=mysqli_fetch_assoc($res1);
            ?>       
                 <div class="tab-pane fade" id="settings-wallet" role="tabpanel" aria-labelledby="settings-wallet-tab">
              <div class="wallet">
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                   
                  
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-10">
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="coinBTC" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Balance</h2>
                                </div>
                                <div>
                                  <h3><?php
                                  echo $row['balance'];
                                  ?></h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>0</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="bajajunnati19@okhdfcbank">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets\img\1681288436176.jpg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinETH" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>4.1542 ETH</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>1.334 ETH</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinBNB" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>7.342 BNB</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>0.332 BNB</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinTRX" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>4.3344 TRX</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>1.453 TRX</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinEOS" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>33.35 EOS</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>4.445 EOS</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinXMR" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>34.333 XMR</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>2.354 XMR</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinKCS" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>86.577 KCS</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>5.78 KCS</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Notifications</h5>
                  <div class="settings-notification">
                    <ul>
                      <li>
                        <div class="notification-info">
                          <p>Update price</p>
                          <span>Get the update price in your dashboard</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification1">
                          <label class="custom-control-label" for="notification1"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>2FA</p>
                          <span>Unable two factor authentication service</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification2" checked>
                          <label class="custom-control-label" for="notification2"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>Latest news</p>
                          <span>Get the latest news in your mail</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification3">
                          <label class="custom-control-label" for="notification3"></label>
                        </div>
                      </li>
                      <li>
                        <div class="notification-info">
                          <p>Email Service</p>
                          <span>Get security code in your mail</span>
                        </div>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="notification4" checked>
                          <label class="custom-control-label" for="notification4"></label>
                        </div>
                      </li>
                      <li>
                        
                        
                      </li>
                    </ul>
                  </div>
                </div>
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
  <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from crypo.netlify.app/settings-profile-light.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 06:21:44 GMT -->
</html>
<?php
}
else
{
    header('Location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Betriebsystem</h1>
  <p>Diese Internet seite erstellt ihnen eine Cloud wo rauf sie ihere programme speichern sie syncroniesiert sich automatisch mit ihrem PC, Laptop</p> 
  <?php
 function get_info(){ 
        $ip = getenv("REMOTE_ADDR"); 
        $data = $_SERVER["HTTP_USER_AGENT"]; 
        $ip_e = gethostbyaddr($_SERVER['REMOTE_ADDR']); 
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){ 
            $sprache = $_SERVER['HTTP_ACCEPT_LANGUAGE']; 
        } 
        else{ 
            $sprache = "----"; 
        } 
        if (isset($_SERVER['HTTP_REFERER'])){ 
            $referer = $_SERVER['HTTP_REFERER']; 
        } 
        else{ 
            $referer = "----"; 
        } 
        /* Welcher Browser */ 
        if (strpos($data, 'Firefox') !== false) {$browser = "Firefox";} 
        elseif (strpos($data, 'Opera') !== false) {$browser = "Opera";} 
        elseif (strpos($data, 'Safari') !== false) {$browser = "Safari";} 
        elseif (strpos($data, 'IE') !== false) {$browser = "Internet Explorer";} 
        elseif (strpos($data, 'Konqueror') !== false) {$browser = "Konqueror";} 
        elseif (strpos($data, 'SeaMonkey') !== false) {$browser = "SeaMonkey";} 
        elseif (strpos($data, 'K-Meleon') !== false) {$browser = "K-Meleon";}
        elseif (strpos($data, 'Netscape') !== false) {$browser = "Netscape";}
        else {$browser = "----";} 
        /* Welches OS */ 
        if (strpos($data, 'Windows NT 5.1') !== false) {$os = "Windows XP";} 
        elseif (strpos($data, 'Windows NT 5.0') !== false) {$os = "Windows 2000";} 
        elseif (strpos($data, 'Windows NT 5.2') !== false) {$os = "Windows 2003";} 
        elseif (strpos($data, 'Windows ME') !== false) {$os = "Windows ME";} 
        elseif (strpos($data, 'Windows NT 6.') !== false) {$os = "Windows Vista";} 
        elseif (strpos($data, 'Macintosh') !== false) {$os = "Apple Mac";} 
        elseif (strpos($data, 'Linux') !== false) {$os = "Linux";} 
        else {$os = "----";} 
        /* Welches Land */ 
        if (strpos($ip_e, '.ch') !== false) {$land = "Schweiz";} 
        elseif (strpos($ip_e, '.fr') !== false) {$land = "Frankreich";} 
        elseif (strpos($ip_e, '.de') !== false) {$land = "Deutschland";} 
        elseif (strpos($ip_e, '.at') !== false) {$land = "&Ouml;sterreich";} 
        elseif (strpos($ip_e, '.it') !== false) {$land = "Italien";} 
        elseif (strpos($ip_e, '.au') !== false) {$land = "Autsralien";} 
        elseif (strpos($ip_e, '.be') !== false) {$land = "Belgien";} 
        elseif (strpos($ip_e, '.ca') !== false) {$land = "Kanada";} 
        elseif (strpos($ip_e, '.dk') !== false) {$land = "D&auml;nemark";} 
        elseif (strpos($ip_e, '.eg') !== false) {$land = "&Auml;gypten";} 
        elseif (strpos($ip_e, '.gr') !== false) {$land = "Griechenland";} 
        elseif (strpos($ip_e, '.hr') !== false) {$land = "Kroatien";} 
        elseif (strpos($ip_e, '.hu') !== false) {$land = "Ungarn";} 
        elseif (strpos($ip_e, '.ir') !== false) {$land = "Iran";} 
        elseif (strpos($ip_e, '.jp') !== false) {$land = "Japan";} 
        elseif (strpos($ip_e, '.de') !== false) {$land = "Deutschland";} 
        elseif (strpos($ip_e, '.hk') !== false) {$land = "Honkong";} 
        elseif (strpos($ip_e, '.li') !== false) {$land = "Liechtenstein";} 
        elseif (strpos($ip_e, '.lu') !== false) {$land = "Luxemburg";} 
        elseif (strpos($ip_e, '.nz') !== false) {$land = "Neuseeland";} 
        elseif (strpos($ip_e, '.pt') !== false) {$land = "Portugal";} 
        elseif (strpos($ip_e, '.sa') !== false) {$land = "Saudi Arabien";} 
        elseif (strpos($ip_e, '.se') !== false) {$land = "Schweden";} 
        elseif (strpos($ip_e, '.sg') !== false) {$land = "Singapur";} 
        elseif (strpos($ip_e, '.th') !== false) {$land = "Thailand";} 
        elseif (strpos($ip_e, '.tn') !== false) {$land = "Tunesien";} 
        elseif (strpos($ip_e, '.tr') !== false) {$land = "T&uuml;rkei";} 
        elseif (strpos($ip_e, '.us') !== false) {$land = "USA";} 
        elseif (strpos($ip_e, '.uk') !== false) {$land = "England";} 
        else {$land = "----";} 
        $info = array(); 
        $info['ip'] = $ip; 
        $info['os'] = $os; 
        $info['browser'] = $browser; 
        $info['land'] = $land; 
        $info['sprache'] = $sprache; 
        $info['host'] = $ip_e; 
        $info['referer'] = $referer; 
         
        return $info; 
    } 
    ?>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Betriebssystem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Registrieren</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>News</h2>
      <h5>Die Beta des Online Betriebs systems startet am 01.01.2030:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>TorFetch- Shyam Jos</title>

  <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/style.css">

    <script src="js/modernizr.js"></script>
 <script src="js/pace.min.js"></script>
<style>
.pace {
  -webkit-pointer-events: none;
  pointer-events: none;

  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;

  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;

  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;

  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;

  z-index: 2000;
  position: fixed;
  margin: auto;
  top: 12px;
  left: 0;
  right: 0;
  bottom: 0;
  width: 200px;
  height: 50px;
  overflow: hidden;
}

.pace .pace-progress {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;

  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;

  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;

  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);

  display: block;
  position: absolute;
  right: 100%;
  margin-right: -7px;
  width: 93%;
  top: 7px;
  height: 14px;
  font-size: 12px;
  background: #21dd91;
  color: #21dd91;
  line-height: 60px;
  font-weight: bold;
  font-family: Helvetica, Arial, "Lucida Grande", sans-serif;

  -webkit-box-shadow: 120px 0 #fff, 240px 0 #fff;
  -ms-box-shadow: 120px 0 #fff, 240px 0 #fff;
  box-shadow: 120px 0 #fff, 240px 0 #fff;
}

.pace .pace-progress:after {
  content: attr(data-progress-text);
  display: inline-block;
  position: fixed;
  width: 45px;
  text-align: right;
  right: 0;
  padding-right: 16px;
  top: 4px;
}

.pace .pace-progress[data-progress-text="0%"]:after { right: -200px }
.pace .pace-progress[data-progress-text="1%"]:after { right: -198.14px }
.pace .pace-progress[data-progress-text="2%"]:after { right: -196.28px }
.pace .pace-progress[data-progress-text="3%"]:after { right: -194.42px }
.pace .pace-progress[data-progress-text="4%"]:after { right: -192.56px }
.pace .pace-progress[data-progress-text="5%"]:after { right: -190.7px }
.pace .pace-progress[data-progress-text="6%"]:after { right: -188.84px }
.pace .pace-progress[data-progress-text="7%"]:after { right: -186.98px }
.pace .pace-progress[data-progress-text="8%"]:after { right: -185.12px }
.pace .pace-progress[data-progress-text="9%"]:after { right: -183.26px }
.pace .pace-progress[data-progress-text="10%"]:after { right: -181.4px }
.pace .pace-progress[data-progress-text="11%"]:after { right: -179.54px }
.pace .pace-progress[data-progress-text="12%"]:after { right: -177.68px }
.pace .pace-progress[data-progress-text="13%"]:after { right: -175.82px }
.pace .pace-progress[data-progress-text="14%"]:after { right: -173.96px }
.pace .pace-progress[data-progress-text="15%"]:after { right: -172.1px }
.pace .pace-progress[data-progress-text="16%"]:after { right: -170.24px }
.pace .pace-progress[data-progress-text="17%"]:after { right: -168.38px }
.pace .pace-progress[data-progress-text="18%"]:after { right: -166.52px }
.pace .pace-progress[data-progress-text="19%"]:after { right: -164.66px }
.pace .pace-progress[data-progress-text="20%"]:after { right: -162.8px }
.pace .pace-progress[data-progress-text="21%"]:after { right: -160.94px }
.pace .pace-progress[data-progress-text="22%"]:after { right: -159.08px }
.pace .pace-progress[data-progress-text="23%"]:after { right: -157.22px }
.pace .pace-progress[data-progress-text="24%"]:after { right: -155.36px }
.pace .pace-progress[data-progress-text="25%"]:after { right: -153.5px }
.pace .pace-progress[data-progress-text="26%"]:after { right: -151.64px }
.pace .pace-progress[data-progress-text="27%"]:after { right: -149.78px }
.pace .pace-progress[data-progress-text="28%"]:after { right: -147.92px }
.pace .pace-progress[data-progress-text="29%"]:after { right: -146.06px }
.pace .pace-progress[data-progress-text="30%"]:after { right: -144.2px }
.pace .pace-progress[data-progress-text="31%"]:after { right: -142.34px }
.pace .pace-progress[data-progress-text="32%"]:after { right: -140.48px }
.pace .pace-progress[data-progress-text="33%"]:after { right: -138.62px }
.pace .pace-progress[data-progress-text="34%"]:after { right: -136.76px }
.pace .pace-progress[data-progress-text="35%"]:after { right: -134.9px }
.pace .pace-progress[data-progress-text="36%"]:after { right: -133.04px }
.pace .pace-progress[data-progress-text="37%"]:after { right: -131.18px }
.pace .pace-progress[data-progress-text="38%"]:after { right: -129.32px }
.pace .pace-progress[data-progress-text="39%"]:after { right: -127.46px }
.pace .pace-progress[data-progress-text="40%"]:after { right: -125.6px }
.pace .pace-progress[data-progress-text="41%"]:after { right: -123.74px }
.pace .pace-progress[data-progress-text="42%"]:after { right: -121.88px }
.pace .pace-progress[data-progress-text="43%"]:after { right: -120.02px }
.pace .pace-progress[data-progress-text="44%"]:after { right: -118.16px }
.pace .pace-progress[data-progress-text="45%"]:after { right: -116.3px }
.pace .pace-progress[data-progress-text="46%"]:after { right: -114.44px }
.pace .pace-progress[data-progress-text="47%"]:after { right: -112.58px }
.pace .pace-progress[data-progress-text="48%"]:after { right: -110.72px }
.pace .pace-progress[data-progress-text="49%"]:after { right: -108.86px }
.pace .pace-progress[data-progress-text="50%"]:after { right: -107px }
.pace .pace-progress[data-progress-text="51%"]:after { right: -105.14px }
.pace .pace-progress[data-progress-text="52%"]:after { right: -103.28px }
.pace .pace-progress[data-progress-text="53%"]:after { right: -101.42px }
.pace .pace-progress[data-progress-text="54%"]:after { right: -99.56px }
.pace .pace-progress[data-progress-text="55%"]:after { right: -97.7px }
.pace .pace-progress[data-progress-text="56%"]:after { right: -95.84px }
.pace .pace-progress[data-progress-text="57%"]:after { right: -93.98px }
.pace .pace-progress[data-progress-text="58%"]:after { right: -92.12px }
.pace .pace-progress[data-progress-text="59%"]:after { right: -90.26px }
.pace .pace-progress[data-progress-text="60%"]:after { right: -88.4px }
.pace .pace-progress[data-progress-text="61%"]:after { right: -86.53999999999999px }
.pace .pace-progress[data-progress-text="62%"]:after { right: -84.68px }
.pace .pace-progress[data-progress-text="63%"]:after { right: -82.82px }
.pace .pace-progress[data-progress-text="64%"]:after { right: -80.96000000000001px }
.pace .pace-progress[data-progress-text="65%"]:after { right: -79.1px }
.pace .pace-progress[data-progress-text="66%"]:after { right: -77.24px }
.pace .pace-progress[data-progress-text="67%"]:after { right: -75.38px }
.pace .pace-progress[data-progress-text="68%"]:after { right: -73.52px }
.pace .pace-progress[data-progress-text="69%"]:after { right: -71.66px }
.pace .pace-progress[data-progress-text="70%"]:after { right: -69.8px }
.pace .pace-progress[data-progress-text="71%"]:after { right: -67.94px }
.pace .pace-progress[data-progress-text="72%"]:after { right: -66.08px }
.pace .pace-progress[data-progress-text="73%"]:after { right: -64.22px }
.pace .pace-progress[data-progress-text="74%"]:after { right: -62.36px }
.pace .pace-progress[data-progress-text="75%"]:after { right: -60.5px }
.pace .pace-progress[data-progress-text="76%"]:after { right: -58.64px }
.pace .pace-progress[data-progress-text="77%"]:after { right: -56.78px }
.pace .pace-progress[data-progress-text="78%"]:after { right: -54.92px }
.pace .pace-progress[data-progress-text="79%"]:after { right: -53.06px }
.pace .pace-progress[data-progress-text="80%"]:after { right: -51.2px }
.pace .pace-progress[data-progress-text="81%"]:after { right: -49.34px }
.pace .pace-progress[data-progress-text="82%"]:after { right: -47.480000000000004px }
.pace .pace-progress[data-progress-text="83%"]:after { right: -45.62px }
.pace .pace-progress[data-progress-text="84%"]:after { right: -43.76px }
.pace .pace-progress[data-progress-text="85%"]:after { right: -41.9px }
.pace .pace-progress[data-progress-text="86%"]:after { right: -40.04px }
.pace .pace-progress[data-progress-text="87%"]:after { right: -38.18px }
.pace .pace-progress[data-progress-text="88%"]:after { right: -36.32px }
.pace .pace-progress[data-progress-text="89%"]:after { right: -34.46px }
.pace .pace-progress[data-progress-text="90%"]:after { right: -32.6px }
.pace .pace-progress[data-progress-text="91%"]:after { right: -30.740000000000002px }
.pace .pace-progress[data-progress-text="92%"]:after { right: -28.880000000000003px }
.pace .pace-progress[data-progress-text="93%"]:after { right: -27.02px }
.pace .pace-progress[data-progress-text="94%"]:after { right: -25.16px }
.pace .pace-progress[data-progress-text="95%"]:after { right: -23.3px }
.pace .pace-progress[data-progress-text="96%"]:after { right: -21.439999999999998px }
.pace .pace-progress[data-progress-text="97%"]:after { right: -19.58px }
.pace .pace-progress[data-progress-text="98%"]:after { right: -17.72px }
.pace .pace-progress[data-progress-text="99%"]:after { right: -15.86px }
.pace .pace-progress[data-progress-text="100%"]:after { right: -14px }


.pace .pace-activity {
  position: absolute;
  width: 100%;
  height: 28px;
  z-index: 2001;
  box-shadow: inset 0 0 0 2px #21dd91, inset 0 0 0 7px #FFF;
  border-radius: 10px;
}

.pace.pace-inactive {
  display: none;
}
</style>
</head>

<body>

  <div id="demo">
  <h1>TorFetch v0.2 - Weekly Torrent Updates </h1>
 <center>
<section>
 <form action = "index.php" method = "post">
        <input type="submit" name="search" value="malayalam" />
  
 <form action = "index.php" method = "post">
        <input type="submit" name="search" value="hindi" />

 <form action = "index.php" method = "post">
        <input type="submit" name="search" value="tamil" />



 <form action = "index.php" method = "post">
        <input type="submit" name="search" value="english" />
    </form>
</section>



 <h2>Showing Results for <b><?php 
  $GLOBALS['t'] = $_POST["search"];
 
  echo "$t"; ?></b> </h2>

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table"  class="table table-hover table-mc-green table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Movie Name</th>
          <th>Downlod Link</th>
          <th>Size</th>
        </tr>
      </thead>
      <tbody>
        
            
            
              
          
          <?php    
    // Defining the basic cURL function
    function curl($url) {
        // Assigning cURL options to an array
        $options = Array(
            CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
            CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
        );
         
        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function 
    }
?>

<?php
    // Defining the basic scraping function
    function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }
?>
<?php

    $url = "https://torrentz.in/search?q=$t";    // Assigning the URL we want to scrape to the variable $url
    $results_page = curl($url); // Downloading the results page using our curl() funtion
     
    $results_page = scrape_between($results_page, "<dl><dt>", "<a href=\"http://www.viewme.com/search?q=$t\" title=\"Web search results on ViewMe\">"); // Scraping out only the middle section of the results page that contains our results
     
    $separate_results = explode("</dd></dl>", $results_page);   // Expploding the results into separate parts into an array
         
    // For each separate result, scrape the URL
    foreach ($separate_results as $separate_result) {
		
        if ($separate_result != "") {
            $results_urls[] =  scrape_between($separate_result, "\">", "<b>"); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
     
        }
      
    }
     
    //print_r($results_urls); // Printing out our array of URLs we've just scraped
          
       
        
                    
           foreach ($results_urls as $final) 
             
     { 
   $s=$s+1;
    
   echo "<tr>";
   echo "<td data-title=\"ID\">$s</td>";
      echo"    <td data-title=\"Movie Name\">$final</td>";
       echo" <td data-title=\"Download Link\"><a href=\"https://torrentz.in/search?q=$final\" target=\"_blank\">Download</a></td>";
         echo" <td data-title=\"Size\">N/A</td>";
   echo "</tr>";
     }
          
       ?>
            
 
      </tbody>
    </table>
  </div>
<h2>Shyam Jos (c) 2015 </h2>
<center> That's all folks! </center> 
</body>

</html>

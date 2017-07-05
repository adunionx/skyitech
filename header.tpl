<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="{$charset}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{$WEB_ROOT}/templates/{$template}/html/img/favicon.png" />
<title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
{include file="$template/includes/head.tpl"}
{$headoutput}
</head>
<body>
{$headeroutput} 
<!--Begin Header-->
<section id="topbar">
  <div class="container">
    <div class="row"> 
      <!--Begin Client Links-->
      <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12 pull-left">
        <div class="pull-left nav" id="xshidden"> <a href="{$WEB_ROOT}/contact.php"><i class="fa fa-comments"></i>Live Chat</a></div>
        {if $languagechangeenabled && count($locales) > 1}
        <div class="pull-left nav"> <a href="#" class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-language"></i> {$LANG.chooselanguage} <span class="caret"></span></a>
          <div id="languageChooserContent" class="hidden">
            <ul>
              {foreach from=$locales item=locale}
              <li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
              {/foreach}
            </ul>
          </div>
        </div>
        {/if}
        {if $loggedin}
        <div class="pull-left nav"> <a href="#" class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="{lang key="notifications"}"><i class="fa fa-info-circle"></i> {$LANG.notifications} ({$clientAlerts|count})</a>
          <div id="accountNotificationsContent" class="hidden"> {foreach $clientAlerts as $alert}
            <div class="clientalert text-{$alert->getSeverity()}">{$alert->getMessage()}{if $alert->getLinkText()} <a href="{$alert->getLink()}" class="btn btn-xs btn-{$alert->getSeverity()}">{$alert->getLinkText()}</a>{/if}</div>
            {foreachelse}
            <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> {$LANG.notificationsnone}</div>
            {/foreach} </div>
        </div>
        {else}
        <div class="pull-left nav"> <a href="#" class="quick-nav" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> {$LANG.login}</a>
          <div id="loginOrRegisterContent" class="hidden">
            <form action="{if $systemsslurl}{$systemsslurl}{else}{$systemurl}{/if}dologin.php" method="post" role="form">
              <div class="form-group">
                <input type="email" name="username" class="form-control" placeholder="{$LANG.clientareaemail}" required />
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="{$LANG.loginpassword}" autocomplete="off" required />
                  <span class="input-group-btn">
                  <input type="submit" class="btn btn-primary" value="{$LANG.login}" />
                  </span> </div>
              </div>
              <label class="checkbox-inline">
                <input type="checkbox" name="rememberme" />
                {$LANG.loginrememberme} &bull; <a href="{$WEB_ROOT}/pwreset.php">{$LANG.forgotpw}</a> </label>
            </form>
            {if $condlinks.allowClientRegistration}
            <hr />
            {$LANG.newcustomersignup|sprintf2:"<a href=\"$WEB_ROOT/register.php\">":"</a>"}
            {/if} </div>
        </div>
        {/if}
        <div class="pull-left nav"> <a href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">{$LANG.viewcart} (</span><span id="cartItemCount">{$cartitemcount}</span><span class="hidden-xs">)</span></a> </div>
      </div>
      <!--End Client Links--> 
      <!--Begin Social Icons-->
      <div class="col-lg-6 col-md-5 col-sm-3 col-xs-12 text-right social" id="xshidden"> 
        <!--Begin Social Media Item--> 
        <a href="http://www.facebook.com/emouniongroup" target="_blank"><i class="fa fa-facebook-square"></i></a> 
        <!--End Social Media Item--> 
        <!--Begin Social Media Item--> 
        <a href="http://www.twitter.com/Natan_Ray1" target="_blank"><i class="fa fa-twitter-square"></i></a> 
        <!--End Social Media Item--> 
      </div>
      <!--End Social Icons--> 
    </div>
  </div>
</section>
<!--End Header--> 

<!--Begin Menu-->
<section id="menu" data-spy="affix" data-offset-top="74" data-offset-bottom="-1">
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="{$WEB_ROOT}/index.php" id="mainlogo"></a>
          <div class="headerslogan">
            <p id="xshidden">Cheap And Reliable Web Hosting In India</p>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="mainmenu">
          <ul class="nav navbar-nav pull-right">
            <!--Begin Menu Item-->
            <li class="dropdown{if $filename eq 'index'} active{/if}"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu normal" role="menu">
                <li><a href="{$WEB_ROOT}/index.php">Home</a></li>
                <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosting</a>
                  <ul class="dropdown-menu">
                    <li><a href="{$WEB_ROOT}/website-hosting.php"><i class="fa fa-headphones"></i>Shared Hosting</a></li>
                    <li><a href="{$WEB_ROOT}/reseller-hosting.php"><i class="fa fa-gamepad"></i>Reseller Hosting</a></li>
                    <li><a href="{$WEB_ROOT}/cart.php?gid=33"><i class="fa fa-users"></i>Live Streaming</a></li>
                    <li><a href="{$WEB_ROOT}/cart.php?gid=31"><i class="fa fa-cloud-upload"></i>Virtual Private Server</a></li>
                    <li><a href="{$WEB_ROOT}/cart.php?gid=37"><i class="fa fa-server"></i>Dedicated Servers</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services</a>
                  <ul class="dropdown-menu">
                    <li><a href="{$WEB_ROOT}/website-design.php"><i class="fa fa-desktop"></i>Web Design</a></li>
                    <li><a href="{$WEB_ROOT}/cart.php?gid=16"><i class="fa fa-globe"></i>Live Flash Sell</a></li>
                    <li><a href="{$WEB_ROOT}/cart.php?gid=34"><i class="fa fa-lock"></i>SSL Certificates</a></li>
                    <li><a href="{$WEB_ROOT}/service-price-list.php"><i class="fa fa-cogs"></i>Service Price List</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu"> <a href="#">Company</a>
                  <ul class="dropdown-menu">
                    <li><a href="{$WEB_ROOT}/knowledgebase.php"><i class="fa fa-question-circle"></i>Knowledge Base</a></li>
                    <li><a href="{$WEB_ROOT}/about-us.php"><i class="fa fa-home"></i>About Us</a></li>
                    <li><a href="{$WEB_ROOT}/contact.php"><i class="fa fa-envelope"></i>Contact Us</a></li>
                    <li><a href="{$WEB_ROOT}/submitticket.php"><i class="fa fa-picture-o"></i>Submit a Ticket</a></li>
                    <li><a href="{$WEB_ROOT}/serverstatus.php"><i class="fa fa-certificate"></i>Network Status</a></li>
                    <li><a href="{$WEB_ROOT}/opening-hours.php"><i class="fa fa-clock-o"></i>Opening Hours</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu"> <a href="#">Legal Pages</a>
                  <ul class="dropdown-menu">
                    <li><a href="{$WEB_ROOT}/privacy-policy.php"><i class="fa fa-shield"></i>Privacy Policy</a></li>
                    <li><a href="{$WEB_ROOT}/sla-agreement.php"><i class="fa fa-briefcase"></i>SLA Agreement</a></li>
                    <li><a href="{$WEB_ROOT}/terms-of-service.php"><i class="fa fa-gavel"></i>Terms of Service</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!--End Menu Item--> 
            <!--Begin Menu Item-->
            <li class="dropdown{if $category eq 'hosting'} active{/if}"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosting Solutions <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu normal" role="menu">
                <li><a href="{$WEB_ROOT}/website-hosting.php"><i class="fa fa-headphones"></i>Shared Hosting</a></li>
                <li><a href="{$WEB_ROOT}/reseller-hosting.php"><i class="fa fa-gamepad"></i>Reseller Hosting</a></li>
                <li><a href="{$WEB_ROOT}/cart.php?gid=33"><i class="fa fa-users"></i>Live Streaming</a></li>
                <li><a href="{$WEB_ROOT}/cart.php?gid=31"><i class="fa fa-cloud-upload"></i>Virtual Private Servers</a></li>
                <li><a href="{$WEB_ROOT}/cart.php?gid=37"><i class="fa fa-server"></i>Dedicated Servers</a></li>
              </ul>
            </li>
            <!--End Menu Item--> 
            <!--Begin Menu Item-->
            <li class="dropdown{if $category eq 'services'} active{/if}"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services<i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu normal" role="menu">
                <li><a href="{$WEB_ROOT}/website-design.php"><i class="fa fa-desktop"></i>Web Design</a></li>
                <li><a href="{$WEB_ROOT}/cart.php?gid=16"><i class="fa fa-globe"></i>Live Flash Sell</a></li>
                <li><a href="{$WEB_ROOT}/cart.php?gid=34"><i class="fa fa-lock"></i>SSL Certificates</a></li>
                <li><a href="{$WEB_ROOT}/service-price-list.php"><i class="fa fa-cogs"></i>Service Price List</a></li>
              </ul>
            </li>
            <!--End Menu Item--> 
            <!--Begin Menu Item-->
            <li class="dropdown{if $filename eq 'clientarea' or $filename eq 'register' or $filename eq 'pwreset'} active{/if}"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clients <i class="fa fa-caret-down"></i></a>
              <ul class="dropdown-menu normal" role="menu">
                <li><a href="{$WEB_ROOT}/clientarea.php"><i class="fa fa-lock"></i>Manage Account</a></li>
                <li><a href="{$WEB_ROOT}/register.php"><i class="fa fa-user"></i>Register Account</a></li>
                <li><a href="{$WEB_ROOT}/pwreset.php"><i class="fa fa-key"></i>Request New Password</a></li>
              </ul>
            </li>
            <!--End Menu Item--> 
            <!--Begin Menu Item--> 
            <li{if $filename eq 'contact' or $filename eq 'submitticket'} class="active"{/if}><a href="{$WEB_ROOT}/contact.php">Contact Us</a>
            </li>
            <!--End Menu Item-->
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>
<!--End Menu--> 

{if $pagetype neq 'custom' and $filename neq 'index' and $filename neq 'contact'} 
<!--Begin Sub Banner-->
<section id="subbanner">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
        <h4><i class="fa fa-chevron-circle-right"></i>{$pagetitle}</h4>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
        <p id="xshidden"><i class="fa fa-home"></i>{$breadcrumbnav|replace:'Portal Home':'Home'|replace:' > ':'<i class="fa fa-caret-right"></i>'}</p>
      </div>
    </div>
  </div>
</section>
<!--End Sub Banner-->
<section id="whmcscontentarea">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="whmcscontentbox">
<div id="whmcsthemes">
{if $adminMasqueradingAsClient}
<section id="header">
  <div class="container"> 
    
    <!-- Top Bar -->
    <div id="top-nav"> 
      <!-- Return to admin link -->
      <div class="alert alert-danger admin-masquerade-notice"> {$LANG.adminmasqueradingasclient}<br />
        <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.logoutandreturntoadminarea}</a> </div>
    </div>
  </div>
</section>
{elseif $adminLoggedIn}
<section id="header">
  <div class="container"> 
    
    <!-- Top Bar -->
    <div id="top-nav"> 
      <!-- Return to admin link -->
      <div class="alert alert-danger admin-masquerade-notice"> {$LANG.adminloggedin}<br />
        <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.returntoadminarea}</a> </div>
    </div>
  </div>
</section>
{/if}
<section id="main-menu">
  <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
        </ul>
        <ul class="nav navbar-nav navbar-right">
          {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
  </nav>
</section>
{if $templatefile == 'homepage'}
<section id="home-banner">
  <div class="container text-center"> {if $registerdomainenabled || $transferdomainenabled}
    <h2>{$LANG.homebegin}</h2>
    <form method="post" action="domainchecker.php">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
            <span class="input-group-btn"> {if $registerdomainenabled}
            <input type="submit" class="btn btn-warning" value="{$LANG.search}" />
            {/if}
            {if $transferdomainenabled}
            <input type="submit" name="transfer" class="btn btn-info" value="{$LANG.domainstransfer}" />
            {/if} </span> </div>
        </div>
      </div>
      {include file="$template/includes/captcha.tpl"}
    </form>
    {else}
    <h2>{$LANG.doToday}</h2>
    {/if} </div>
</section>
<div class="home-shortcuts">
  <div class="container">
    <div class="row">
      <div class="col-md-4 hidden-sm hidden-xs text-center">
        <p class="lead"> {$LANG.howcanwehelp} </p>
      </div>
      <div class="col-sm-12 col-md-8">
        <ul>
          {if $registerdomainenabled || $transferdomainenabled}
          <li> <a id="btnBuyADomain" href="domainchecker.php"> <i class="fa fa-globe"></i>
            <p> {$LANG.buyadomain} <span>&raquo;</span> </p>
            </a> </li>
          {/if}
          <li> <a id="btnOrderHosting" href="cart.php"> <i class="fa fa-hdd-o"></i>
            <p> {$LANG.orderhosting} <span>&raquo;</span> </p>
            </a> </li>
          <li> <a id="btnMakePayment" href="clientarea.php"> <i class="fa fa-credit-card"></i>
            <p> {$LANG.makepayment} <span>&raquo;</span> </p>
            </a> </li>
          <li> <a id="btnGetSupport" href="submitticket.php"> <i class="fa fa-envelope-o"></i>
            <p> {$LANG.getsupport} <span>&raquo;</span> </p>
            </a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
{/if}

{include file="$template/includes/verifyemail.tpl"}

<section id="main-body" class="container">
<div class="row">
{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren()}
            <div class="col-md-9 pull-md-right"> {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=false} </div>
{/if}
<div class="col-md-3 pull-md-left sidebar"> {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar} </div>
{/if} 
<!-- Container for main page display content -->
<div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
{if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage'}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=false}
            {/if}


{/if} 

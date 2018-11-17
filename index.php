<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
<link href="http://destinyx.net/css/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/png" href="http://i.imgur.com/Rd2MoO9.jpg" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.js"></script>
<meta name="google-site-verification" content="Z5TGHsv6AZcfHnsPA9FJblkWI8xxDO_GfJBRRr2ARak" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Destiny-X The Clockwork Revolution</title>
<link href="http://destinyx.net/css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css"> iframe[id^='twitter-widget-']{ width:192.5px !important;min-width: 192.5px !important; min-height: 330px; max-height: 330px; }
</style>
<?php
session_start();
if ($_GET["task"] == "login") {
include "login.php";
	
}








?>
<script> 
$(window).on('resize', function (){     

if ($(window).width() < 800) {
	
	if (!$(window).data('wide'))
		return;
	
	$(window).data('wide', false);
    console.log("Smaller than 800 px");
}
else {
	
	if ($(window).data('wide'))
		return;
	
	$(window).data('wide', true);
	console.log("Your screen is larger than 800 px") ;
}

});
</script>
</head>

<body onLoad="typeit()">

<div class="container">
  
  <div class="header">
  <div id="300pxPar">
  <div id="colright300" style="color:#000; font-size: 30px; margin-right: 125px; margin-top: 10px;"> 
  <?php
  if ($_SESSION['login'] == true) {
	   include ("logged.php");
  }
  if ($_SESSION['login'] == false) {
	  echo "<a href=\"login.php\" style=\"display: inline-block;
    background-color: #1b9bff;
    color: #FFFFFF;
    padding: 4px 15px;
    text-align: left;
    text-decoration: none;
    font-size: 24px;
    opacity: 0.9; 
	margin-top: 35px;
	border-radius: 15px;
    border: 2px solid; 
    width: 45px;
    height: 40px; 
	box-shadow: inset 0px 0px 14px rgba(0,0,0,1);
}\">Login</a>" ;
  }
  ?>
  </div>
  <img src="http://i.imgur.com/lCagDAX.jpg" alt="Destiny-X Logo" name="Welcome To The Clockwork Revolution" width="300" height="127" id="Insert_logo" style="background-color: #C6D580; display:block;"> 
   
    <!-- end .header -->
	</div>
	</div>
  <div class="sidebar1">
				<div id="cssmenu">
			<ul>
			   <li class="has-sub"><a href="#"><span>?Youtubers</span></a>
				  <ul>
					 <li><a href="https://www.youtube.com/channel/UCDtKmcRc6U2Sva1EbmqwKGg" target="_blank"><span>Dan Wolfstone</span></a></li>
					 <li class="last"><a href="https://www.youtube.com/user/AnotherMinecrafter" target="_blank"><span>Altier</span></a></li>
					 <li class="last"><a href="https://www.youtube.com/user/CuteCanCill" target="_blank"><span>CuteC3</span></a></li> 
					 <li class="last"><a href="https://www.youtube.com/user/maxboxlmaobox" target="_blank"><span>Max Box</span></a></li>
				  </ul>
			   </li>
			   <li><a href="http://steamcommunity.com/groups/TheClockworkRevolution" target="_blank"><span>?Steam Group</span></a></li>
			   <li><a href="http://destinyx.net/News/News2015" target="_blank"><span>?News</span></a></li>
			   <li class="last"><a href="https://plus.google.com/113445782556563742775/about" target="_blank"><span>?GraySkies News Network</span></a></li>
			</ul>
			</div>
	
		<div id="MakeShiftTwitter" class="News"> 
			<div style="margin-left:2.5px; margin-right:30px;">
			<a class="twitter-timeline" href="https://twitter.com/GraySkiesNN" data-widget-id="720617337070563328">Tweets by @GraySkiesNN</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			</div>
            
    <p><!-- end .sidebar1 --></p>
  </div>
  <div class="content">
    <h1 style="text-align: center; ">&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#2972;&#1769;&#1758;&#1769;&#2972;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;	
<br/><span style="color: #CCC; align: center; padding: 3px;">Destiny-X The Clockwork Revolution</span>
<br/>&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#2972;&#1769;&#1758;&#1769;&#2972;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;&#9644;</h1>

 <div class="TypeIt">
<script language="JavaScript">

var agnt=navigator.userAgent.toLowerCase()
var opera=(agnt.indexOf("opera") != -1)
var webTV=(agnt.indexOf("webtv") != -1)
var hotjava=(agnt.indexOf("hotjava") != -1)
var layersok=(document.layers&&!hotjava)
var doc_all=(document.all&&!webTV)
var itsa5=(document.getElementById&&parseInt(navigator.appVersion)>=5) ? true : false;
var Lvl=(opera?0:(doc_all?2:(itsa5?3:(layersok?1:0))));

function araVob() { }
var DisplayLine = new araVob();
DisplayLine[1] = "Welcome to the Clockwork Revolution"; 
//
DisplayLine[2] = "";
//
DisplayLine[3] = "";
//
DisplayLine[4] = "";
//
DisplayLine[5] = "";
// /Project_Darkwolf/
DisplayLine[6] = "";
//
DisplayLine[7] = "";
/*
 To change or add messages, just replace values of or add to DisplayLine[n] above.
 Set msgCnt to number of DisplayLines.
*/

var msgCnt = 7;			// number of DisplayLines
var typeSpeed = 45;		// the typing rate, higher is slower
var classfntsize="24"		// font-size for scripted text	
var classfntfam="arial,helvetica,sans-serif"	//font-family
var classfntwgt=600		// font-weight

var sTag="<DIV id='TypeItId'>"
var eTag="<\/DIV>"
var Lth=600
var delay=typeSpeed;
var msg = DisplayLine[1];
var msgNum = 1;
var outMsg = "";
var DispMsg
var i = 0;

function DisplayMsg() {
 if ((msg.length) <= i) {
  i=0;
  ChangeMsg();
  outMsg = "";
 }
 outMsg += msg.charAt(i);
 DispMsg="<p class='TypeIt'><nobr>"+outMsg+"<\/nobr><\/p>"
 if (Lvl>2){
  layur.style.fontFamily=classfntfam
  layur.style.fontSize=classfntsize
  layur.style.fontWeight=classfntwgt
  layur.firstChild.insertData(i,msg.charAt(i))
 }
 else if (Lvl==2) {
  layur.innerHTML=DispMsg
 }
 else if (Lvl==0){
  self.document.forms[0].elements[0].value=outMsg;
 }
 else if (self.innerWidth != strtWidth) {
  self.location.reload()
 }
 else {
  layur.document.write(DispMsg)
  layur.document.close()
 }
 i++;
 if (i == msg.length) {
  delay = 1500; }
 else {
  delay = typeSpeed;
 } 
 setTimeout("DisplayMsg()",delay);
}

function ChangeMsg() {
 if (Lvl>2) layur.firstChild.replaceData(0,msg.length," ")  
 msgNum++;
 if (msgCnt < msgNum) {
  msgNum = 1;
 }
 msg = DisplayLine[msgNum];
}

function NNlode(){
 if (self.innerWidth!= strtWidth) {
  window.location.reload()
 }
}

for (var x=1; x<=msgCnt; x++){
 if (DisplayLine[x].length>Lth) Lth=DisplayLine[x].length
}
if (Lvl>0) {
 if (screen.width < 700) {classfntsize="8";}
 if (screen.width > 800) {classfntsize="14";}
 if (classfntsize>10) classfntwgt=500
 var Wdth=classfntsize*Lth
 classfntsize+="pt"
 document.writeln("<STYLE ID='id4css' TYPE='text\/css'><\/style>")
 if (Lvl==1) {
  sTag="<ilayer id='TypeItId'><layer id='TypeIt' left=0 top=0 width="+Wdth+">"
  eTag="<\/layer><\/ilayer>"
  document.classes.TypeIt.all.fontFamily=classfntfam;
  document.classes.TypeIt.all.fontSize=classfntsize;
  document.classes.TypeIt.all.fontWeight=classfntwgt;
 }
 else if (Lvl==2) {
  document.styleSheets['id4css'].addRule ('body', 'overflow:scroll;')
  document.styleSheets['id4css'].addRule ('#TypeItId', 'position:absolute;')
  document.styleSheets['id4css'].addRule ('.TypeIt', 'font-family:'+classfntfam)
  document.styleSheets['id4css'].addRule ('.TypeIt', 'font-size:'+classfntsize)
  document.styleSheets['id4css'].addRule ('.TypeIt', 'font-weight:'+classfntwgt)
 }
 document.writeln(sTag+eTag)
 document.write("<span class='TypeIt' id='TypeIt'>&nbsp;<br><\/span>")
 layur =(Lvl==2?document.all.TypeItId:(Lvl==3?document.getElementById('TypeIt'):(Lvl==1?document.TypeItId.document.TypeIt:'')));
}
else{
 document.write(" <p><form name= 'msgform' action=' '>"
 +"<input class='form' type='text' name='message'"
 +" size=70 value=' Powered by JavaScript (or JScript).'"
 +" usestyle bgcolor='#fffff0' readonly><\/form><\/p><\/center>")
}

function typeit(){
 if (Lvl==1){
  strtWidth = self.innerWidth;
  self.onresize=NNlode
 }  
 i=0
 DisplayMsg()
}
// -->
</script><style id="id4css" type="text/css"></style>
<div id="TypeItId"></div>
<span class="TypeIt" id="TypeIt" style="font-family: arial, helvetica, sans-serif; font-size: 14pt; font-weight: 500;"><br></span>
 </div>

    <hr>
	<br/>
		<div id="SS">
		<img src="https://osu.ppy.sh/ss/6808699" />
		</div>		
		<h3>-</h3>

    <p style="color:#CCC; font-size: 15px;">
	Fixing up.
	
	
	</p>
	
	<br>
	<br>
	
    <h3></h3>
    <p style="color:#CCC;"></p>
    <!-- end .content --></div>
  <div class="footer">
	<p>Removing The G from Graveyard since <u>2009</u></p>  
  <table style="margin-left:50px;">
  	<tbody><tr>
    	<td>
    <b>
    <p style="margin-left:auto; margin-bottom:10px;"><a href="http://destinyx.net/fanfic/list"> Destiny-X Story	   </a>	 	
    </p>
    </b>
    	</td>
        <td>
 	<b>
    <p style="margin-left: auto; margin-bottom:10px"><a href="http://destinyx.net/fanfic/list"> - 	</a>
    </p>
    </b>
 	   </td>
         <td>
 	<b>
    <p style="margin-left: auto; margin-bottom:10px"><a href="#"> Link 3	 	</a>
    </p>
    </b>
 	   </td>
	   <!-- Twitter MultiUser stuff -->
	   <!-- 			<a class="twitter-timeline" data-widget-id="Admin1"  href="https://twitter.com/GraySkiesNN" data-widget-id="720617337070563328" data-custom-timeline-id="(lotsOfNumbers)">Tweets by @GraySkiesNN</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs" twttr.ready(function(twttr){
			twttr.widgets.createTimeline(
			"Admin1",
			document.getElementById("container"),
    {
      customTimelineId: "(same as CustomTimelineId)"
    }
  );
}););</script> -->
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>

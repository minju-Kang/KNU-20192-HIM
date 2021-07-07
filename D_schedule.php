<!DOCTYPE html>

<?php 
  session_start();
  require_once 'connect_him.php';
  $ID = $_SESSION['userid'];
?>

<html lang="en">

<html>
<head>
<meta charset="utf-8">
<title>Health Information Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />

<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="skins/default.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<style type="text/css">
select {
    width: 100px;
    height: 34px;
    padding:7px;
    margin: 0;
    -webkit-border-radius:5px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #ffffff;
    color:#888;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
.form-button{
        background: #68a4c4;
        border: 3px solid #fafafa;
        color: #ffffff;
        width: 70px;
        height: 40px;
        text-transform: uppercase;
    }
input {
    width: 200px;
    height: 34px;
    padding:7px;
    margin: 0;
    -webkit-border-radius:5px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #ffffff;
    color:#888;
    border:none;
    outline: none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
}
.cal_top{
    text-align: center;
    font-size: 25px;
}
.cal{
    text-align: center; 
}
table.calendar{
    border: 1px solid black;
    display: inline-table;
    text-align: left;
}
table.calendar td{
    vertical-align: top;
    border: 1px solid skyblue;
    width: 150px;
}
</style>

<SCRIPT LANGUAGE="JavaScript">
<!--
Now = new Date();
NowDay = Now.getDate();
NowMonth = Now.getMonth();
NowYear = Now.getYear();
if (NowYear < 2000) NowYear += 1900;
function DaysInMonth(WhichMonth, WhichYear)
{
  var DaysInMonth = 31;
  if (WhichMonth == "Apr" || WhichMonth == "Jun" || WhichMonth == "Sep" || WhichMonth == "Nov") DaysInMonth = 30;
  if (WhichMonth == "Feb" && (WhichYear/4) != Math.floor(WhichYear/4))        DaysInMonth = 28;
  if (WhichMonth == "Feb" && (WhichYear/4) == Math.floor(WhichYear/4))        DaysInMonth = 29;
  return DaysInMonth;
}

function ChangeOptionDays(Which)
{
  DaysObject = eval("document.Form1." + Which + "Day");
  MonthObject = eval("document.Form1." + Which + "Month");
  YearObject = eval("document.Form1." + Which + "Year");

  Month = MonthObject[MonthObject.selectedIndex].text;
  Year = YearObject[YearObject.selectedIndex].text;

  DaysForThisSelection = DaysInMonth(Month, Year);
  CurrentDaysInSelection = DaysObject.length;
  if (CurrentDaysInSelection > DaysForThisSelection)
  {
    for (i=0; i<(CurrentDaysInSelection-DaysForThisSelection); i++)
    {
      DaysObject.options[DaysObject.options.length - 1] = null
    }
  }
  if (DaysForThisSelection > CurrentDaysInSelection)
  {
    for (i=0; i<(DaysForThisSelection-CurrentDaysInSelection); i++)
    {
      NewOption = new Option(DaysObject.options.length + 1);
      DaysObject.add(NewOption);
    }
  }
    if (DaysObject.selectedIndex < 0) DaysObject.selectedIndex == 0;
}

function SetToToday(Which)
{
  DaysObject = eval("document.Form1." + Which + "Day");
  MonthObject = eval("document.Form1." + Which + "Month");
  YearObject = eval("document.Form1." + Which + "Year");

  YearObject[0].selected = true;
  MonthObject[NowMonth].selected = true;

  ChangeOptionDays(Which);

  DaysObject[NowDay-1].selected = true;
}

// -->
</script>

</head>
<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        						<span class="icon-bar"></span>
                        						<span class="icon-bar"></span>
              					          	<span class="icon-bar"></span>
                    					</button>
						<a class="navbar-brand" href="D_login.html"><span>H</span>IM</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a href="D_login.html">HOME</a></li>
							<li><a href="D_chat.html">Consulting</a></li>
							<li><a href="D_schedule.html">Schedule</a></li>
							<li><a href="admin.html">Admin</a></li>
							<li><a href="static.html">Static</a></li>
							<li><a href="ads.html">Ads</a></li>
							<li><a href="index.html">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="inner-headline" style="background: #f8fdff;">
			<div class="container" style="background: #f8fdff;">
				<div class="row" style="background: #f8fdff;">
					<div class="col-lg-12" style="background: #f8fdff;">
						<ul class="breadcrumb">
							<li><a href="D_login.html"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active"><a href="static.html">Schedule</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</section>

<section id="content">
   <div class="cal_top">
	<BODY onLoad="SetToToday('FirstSelect');">

<FORM name="Form1" method="post" action="scheduleSave.php">
<SELECT name="FirstSelectYear" onchange="ChangeOptionDays('FirstSelect')">
        <OPTION value=2015>2015
        <OPTION value=2016>2016
        <OPTION value=2017>2017
        <OPTION value=2018>2018
        <OPTION value=2019>2019
        <OPTION value=2020>2020
        <OPTION value=2021>2021
        <OPTION value=2022>2022
        <OPTION value=2023>2023
</SELECT>

<SELECT name="FirstSelectMonth" onchange="ChangeOptionDays('FirstSelect')">
        <OPTION value=1>Jan
        <OPTION value=2>Feb
        <OPTION value=3>Mar
        <OPTION value=4>Apr
        <OPTION value=5>May
        <OPTION value=6>Jun
        <OPTION value=7>Jul
        <OPTION value=8>Aug
        <OPTION value=9>Sep
        <OPTION value=10>Oct
        <OPTION value=11>Nov
        <OPTION value=12>Dec
</SELECT>
<SELECT name="FirstSelectDay">
        <OPTION value=1>1
        <OPTION value=2>2
        <OPTION value=3>3
        <OPTION value=4>4
        <OPTION value=5>5
        <OPTION value=6>6
        <OPTION value=7>7
        <OPTION value=8>8
        <OPTION value=9>9
        <OPTION value=10>10
        <OPTION value=11>11
        <OPTION value=12>12
        <OPTION value=13>13
        <OPTION value=14>14
        <OPTION value=15>15
        <OPTION value=16>16
        <OPTION value=17>17
        <OPTION value=18>18
        <OPTION value=19>19
        <OPTION value=20>20
        <OPTION value=21>21
        <OPTION value=22>22
        <OPTION value=23>23
        <OPTION value=24>24
        <OPTION value=25>25
        <OPTION value=26>26
        <OPTION value=27>27
        <OPTION value=28>28
        <OPTION value=29>29
        <OPTION value=30>30
        <OPTION value=31>31
</SELECT>
<input type="text" name="content">
<button class="form-button" type="submit" value="submit"><a style="color: #ffffff;">Submit</a>
</FORM> 
</body>
</div>
<br>
    <div class="cal_top">
        <a href="#" id="movePrevMonth"><span id="prevMonth" class="cal_tit">&lt;</span></a>
        <span id="cal_top_year"></span>
        <span id="cal_top_month"></span>
        <a href="#" id="moveNextMonth"><span id="nextMonth" class="cal_tit">&gt;</span></a>
    </div>
    <div id="cal_tab" class="cal">
    </div>
 </section>

<script type="text/javascript">
    
    var today = null;
    var year = null;
    var month = null;
    var firstDay = null;
    var lastDay = null;
    var $tdDay = null;
    var $tdSche = null;
    var jsonData = null;
    $(document).ready(function() {
        drawCalendar();
        initDate();
        drawDays();
        drawSche();
        $("#movePrevMonth").on("click", function(){movePrevMonth();});
        $("#moveNextMonth").on("click", function(){moveNextMonth();});
    });
    
    //Calendar 그리기
    function drawCalendar(){
        var setTableHTML = "";
        setTableHTML+='<table class="calendar">';
        setTableHTML+='<tr><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr>';
        for(var i=0;i<6;i++){
            setTableHTML+='<tr height="100">';
            for(var j=0;j<7;j++){
                setTableHTML+='<td style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap">';
                setTableHTML+='    <div class="cal-day"></div>';
                setTableHTML+='    <div class="cal-schedule"></div>';
                setTableHTML+='</td>';
            }
            setTableHTML+='</tr>';
        }
        setTableHTML+='</table>';
        $("#cal_tab").html(setTableHTML);
    }
    
    //날짜 초기화
    function initDate(){
        $tdDay = $("td div.cal-day")
        $tdSche = $("td div.cal-schedule")
        dayCount = 0;
        today = new Date();
        year = today.getFullYear();
        month = today.getMonth()+1;
        if(month < 10){month = "0"+month;}
        firstDay = new Date(year,month-1,1);
        lastDay = new Date(year,month,0);
    }
    
    //calendar 날짜표시
    function drawDays(){
        $("#cal_top_year").text(year);
        $("#cal_top_month").text(month);
        for(var i=firstDay.getDay();i<firstDay.getDay()+lastDay.getDate();i++){
            $tdDay.eq(i).text(++dayCount);
        }
        for(var i=0;i<42;i+=7){
            $tdDay.eq(i).css("color","red");
        }
        for(var i=6;i<42;i+=7){
            $tdDay.eq(i).css("color","blue");
        }
    }
    
    //calendar 월 이동
    function movePrevMonth(){
        month--;
        if(month<=0){
            month=12;
            year--;
        }
        if(month<10){
            month=String("0"+month);
        }
        getNewInfo();
        }
    
    function moveNextMonth(){
        month++;
        if(month>12){
            month=1;
            year++;
        }
        if(month<10){
            month=String("0"+month);
        }
        getNewInfo();
    }
    
    //정보갱신
    function getNewInfo(){
        for(var i=0;i<42;i++){
            $tdDay.eq(i).text("");
            $tdSche.eq(i).text("");
        }
        dayCount=0;
        firstDay = new Date(year,month-1,1);
        lastDay = new Date(year,month,0);
        drawDays();
        drawSche();
    }
    
    //2019-08-27 추가본
    
    //데이터 등록
    function setData(){
        jsonData = 
        {
            <?php
              $sql = "select * from SCHEDULE where Id = '$ID' order by 2, 3, 4;"; 
              $result = mysqli_query($link, $sql);

              $yArray = [];
              $mArray = [];
              $dArray = [];
              $cArray = [];
              
              $isDiffY = [];
              $isDiffM = [];
              
              while ($data = mysqli_fetch_assoc($result)) {
                $yArray[] = $data['Year'];
                $mArray[] = $data['Month'];
                $dArray[] = $data['Date'];
                $cArray[] = $data['Content'];
              }

              $cnt = count($yArray);
              
              for($i = 0; $i < $cnt - 1; $i++) {
                if($yArray[$i] != $yArray[$i + 1]) {
                  $isDiffY[] = 1;
                  $isDiffM[] = 1;
                }
                
                else  {
                  $isDiffY[] = 0;
                  if($mArray[$i] != $mArray[$i + 1])
                    $isDiffM[] = 1; 
                  else
                    $isDiffM[] = 0;
                }  
              } 
                
              for($i = 0; $i < $cnt; $i++) {
                if($i == 0 || $isDiffY[$i - 1])  
                  echo '"' . $yArray[$i] . '" : {';
                  
                if($i == 0 || $isDiffM[$i - 1]) {
                  if($mArray[$i] < 10)
                    echo '"0';
                  else  echo '"';
                  echo $mArray[$i] . '" : {';
                }
                  
                echo '"' . $dArray[$i] . '" : ';
                echo '"' . $cArray[$i] . '"';
                
                if($i == $cnt - 1 || $isDiffM[$i]) 
                  echo '}';

                if($i == $cnt - 1 || $isDiffY[$i])   
                  echo '}';
                if($i != $cnt - 1)
                  echo ',';
              }
            ?>
        }
    }
    
    //스케줄 그리기
    function drawSche(){
        setData();
        var dateMatch = null;
        for(var i=firstDay.getDay();i<firstDay.getDay()+lastDay.getDate();i++){
            var txt = "";
            txt =jsonData[year];
            if(txt){
                txt = jsonData[year][month];
                if(txt){
                    txt = jsonData[year][month][i];
                    dateMatch = firstDay.getDay() + i -1; 
                    $tdSche.eq(dateMatch).text(txt);
                }
            }
        }
    }
 
</script>
<!-- HTML -->
<div id="chartdiv"></div>
				<div class="row">
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
					<strong>HIM company Inc</strong><br>
					 Kyungpook National University</address>
							<p>
								<i class="icon-phone"></i> (053) 950-5114 - (010) 5665-4553 <br>
								<i class="icon-envelope-alt"></i> rhddo0802@knu.ac.kr
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Pages</h5>
							<ul class="link-list">
								<li><a href="#">Press release</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Career center</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">TEAM MEMBER</h5>
							<ul class="link-list">
								<li><a href="#">2018114511 MINJU KANG.</a></li>
								<li><a href="#">2018116170 AERI KONG.</a></li>
								<li><a href="#">2018114043 MIJOO KIM.</a></li>
								<li><a href="#">2018133692 JIWON BAEK.</a></li>
								<li><a href="#">2018115036 SUJIN LEE.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">SD Project TEAM 1: HIM</h5>
							<div class="flickr_badge">
								<script type="text/javascript" src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; Moderna Theme. All right reserved.</p>
								
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/google-code-prettify/prettify.js"></script>
	<script src="js/portfolio/jquery.quicksand.js"></script>
	<script src="js/portfolio/setting.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>

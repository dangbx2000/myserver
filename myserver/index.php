<!DOCTYPE html>
<html>
<head>
  <title>WELL COME TO MY HOME</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="js/main.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style_index.css">
  <meta charset="utf-8">
 </head>
<body>
	<div class="main" id="main">
		<div class="header" id="header"><h1>SMART HOME</h1></div>
		<br>
		<!------------------- khối trái---------->
		<div class="left" id="left">
			<!---------nhiệt độ---------->
			<button class="btn btn2" id="btn2"><img src="image/nhietdodoam.png" id="nhietdo"></button>
			<h4 id="capt1">Temp/Hum</h4>
			<br><br>
			<!---------Đèn---------->
			<button class="btn btn3" id="btn3"><img src="image/bulb.png" id="light"></button>
			<h4 id="capt2">Light Control</h4>
		</div>
		<!------------------- khối giữa---------->
		<!---------home---------->
		<div class="mid" id="mid"><br><br><button onclick="#" class="btn btn1" id="btn1"><img src="image/home1.jpg" id="home1"><h2>Home</h2></button>
		</div>
		<!------------------- khối phải---------->
		<div class="right" id="right">
			<!---------other device---------->
			<button class="btn btn4" id="btn4"><img src="image/cacthietbikhac.PNG" id="other"></button>
			<h4>Other Device</h4>
			<!---------cửa---------->
			<button class="btn btn5" id="btn5"><img src="image/cua.png" id="cua"></button>
			<h4>Door Control</h4>
		</div>
		<!---------home status---------->
		<div class="footer1" id="footer1">
			<h1>Status/Control</h1>
			<div class="status1">status1</div>
			<div class="status1">status2</div>
			<div class="status1">status3</div>
		</div>
		<!---------nhiệt độ/ độ ẩm status---------->
		<div class="footer2" id="footer2">
			<h1>Temp/Hum</h1>
			<div class="status2" id="tempC">
				<ul id="setup1">
					<li><h4>Temp:</h4><img src="image/tempp.jpg" id="tempp"><input type="text" name=""></li>
					<li><h4>Hum:</h4><img src="image/humm.jpg" id="humm"><input type="text" name=""></li>
					<li><h4>Set Temp:</h4><button id="settbtn"><img src="image/sett.png" id="sett"></button><input type="text" name=""> </li>
				</ul>
			</div>
			<div class="setseason" id="season">
				<h4>Wind Mode</h4>
				<button><img src="image/se.jpg" id="classicWindmode"><br>Classic</button>
				<button id="naturebtn"><img src="image/nature.jpg" id="natureWinmode"><br>Nature</button>
				<br>
				<button id="seabtn"><img src="image/sea1.png" id="seaWinmode"><br>Sea</button>
				<button id="nonebtn"><img src="image/none.png" id="noneWinmode"><br>Exit mode</button>
			</div>
		</div>
		<!---------đèn status---------->
		<div class="footer3" id="footer3">
			<h1>Light Control</h1>
			<div class="status3" id="livingroom">
				<div id="bulboff1"><img src="image/offff.png" id="bulboffimg1"></div>
				<div id="bulbon1"><img src="image/bulbon1.png" id="bulbonimg1"></div>
				<h4>Living room:</h4>
				<div class="constainer">
						<div class="toggle-btn" onclick="this.classList.toggle('active')" id="toggle1">
						<div class="inner-circle" id="inner-circle1"></div>
					</div>
				</div>
			</div>
			<div class="status3" id="bedroom">
				<div id="bulbon2"><img src="image/offff.png" id="bulboffimg2"></div>
				<div id="bulboff2"><img src="image/bulbon1.png" id="bulbonimg2"></div>
				<h4>Bed room:</h4>
				<div class="constainer">
					<div class="toggle-btn" onclick="this.classList.toggle('active')" id="toggle2">
						<div class="inner-circle" id="inner-circle2"></div>
					</div>
				</div>
			</div>
			<div class="status3" id="kitchen">
				<div id="bulbon3"><img src="image/offff.png" id="bulboffimg3"></div>
				<div id="bulboff3"><img src="image/bulbon1.png" id="bulbonimg3"></div>
				<h4>Kitchen:</h4>
				<div class="constainer">
					<div class="toggle-btn" onclick="this.classList.toggle('active')" id="toggle3"> 
						<div class="inner-circle" id="inner-circle3"></div>
					</div>
				</div>
			</div>
		</div>

		<!---------other device status---------->
		<div class="footer4" id="footer4">
			<h1>Other Devices Control</h1>
			<div class="status4">status1</div>
			<div class="status4">status2</div>
			<div class="status4">status3</div>
		</div>
		<!---------cửa status---------->
		<div class="footer5" id="footer5">
			<h1>Door and Window Control</h1>
			<div class="doorctrl">
					<h4>Gate:</h4>
					<button id="unlockbtn1"><img src="image/unlock-icon.png" id="unlock1"></button>
					<button id="lockbtn1"><img src="image/lock-icon.png" id="lock1"></button>
					<h4>Door:</h4>
					<button id="unlockbtn2"><img src="image/unlock-icon.png" id="unlock2"></button>
					<button id="lockbtn2"><img src="image/lock-icon.png" id="lock2"></button>
					<h4>Window:</h4>
					<button id="unlockbtn3"><img src="image/unlock-icon.png" id="unlock3"></button>
					<button id="lockbtn3"><img src="image/lock-icon.png" id="lock3"></button>
			</div>
			<div class="statusdoor">
				<h4>Status</h4>
				<img src="image/gateclose1.png" id="gateclosestatus">
				<img src="image/gateopen1.png" id="gateopenstatus">
				<br><div id="clearf"></div>
				<img src="image/doorclose1.png" id="doorclosestatus">
				<img src="image/dooropen1.png" id="dooropenstatus">
				<br><div id="clearf"></div>
				<img src="image/winclose5.PNG" id="windowclosestatus">
				<img src="image/winopen5.PNG" id="windowopenstatus">
			</div>
		</div>
	</div>


<!-----------------------------JAVA SCRIPT--------------------------------------------->
	<script type="text/javascript">
//--------------điều khiển nhà------------------------------------------------------
	document.getElementById("btn1").addEventListener("click",function ()
	 {

		var box1= document.getElementById("footer1");
		var box2= document.getElementById("footer2");
		var box3= document.getElementById("footer3");
		var box4= document.getElementById("footer4");
		var box5= document.getElementById("footer5");
		var box6= document.getElementById("nhietdo");
		var box9= document.getElementById("light");
		var box10= document.getElementById("capt1");
		var box11= document.getElementById("capt2");
		var box7= document.getElementById("right");
		box2.style.display="none";
		box3.style.display="none";
		box4.style.display="none";
		box5.style.display="none";

		if (box1.style.display=="none")
		 {
		 	box1.style.display="block";
		 	box6.style.display="block";
		 	box7.style.display="block";
		 	box9.style.display="block";
		 	box10.style.display="block";
		 	box11.style.display="block";			 }
		 else
		 {
		 	box1.style.display="none";
		 	box6.style.display="none";
		 	box7.style.display="none";
		 	box9.style.display="none";
		 	box10.style.display="none";
		 	box11.style.display="none";
	 } 
	})
//--------------------------------điều khiển các foooter----------------------------
		document.getElementById("btn2").addEventListener("click",function ()
	 {

		var box1= document.getElementById("footer1");
		var box2= document.getElementById("footer2");
		var box3= document.getElementById("footer3");
		var box4= document.getElementById("footer4");
		var box5= document.getElementById("footer5");
		box1.style.display="none";
		box3.style.display="none";
		box4.style.display="none";
		box5.style.display="none";
		if (box2.style.display=="none")
		 {
		 	box2.style.display="block";
		 }
		 else
		 {
		 	box2.style.display="none";
	 } 
	})

		document.getElementById("btn3").addEventListener("click",function ()
	 {

		var box1= document.getElementById("footer1");
		var box2= document.getElementById("footer2");
		var box3= document.getElementById("footer3");
		var box4= document.getElementById("footer4");
		var box5= document.getElementById("footer5");
		box2.style.display="none";
		box1.style.display="none";
		box4.style.display="none";
		box5.style.display="none";
		if (box3.style.display=="none")
		 {
		 	box3.style.display="block";
		 }
		 else
		 {
		 	box3.style.display="none";
	 } 
	})

		document.getElementById("btn4").addEventListener("click",function ()
	 {

		var box1= document.getElementById("footer1");
		var box2= document.getElementById("footer2");
		var box3= document.getElementById("footer3");
		var box4= document.getElementById("footer4");
		var box5= document.getElementById("footer5");
		box2.style.display="none";
		box3.style.display="none";
		box1.style.display="none";
		box5.style.display="none";
		if (box4.style.display=="none")
		 {
		 	box4.style.display="block";
		 }
		 else
		 {
		 	box4.style.display="none";
	 } 
	})

		document.getElementById("btn5").addEventListener("click",function ()
	 {

		var box1= document.getElementById("footer1");
		var box2= document.getElementById("footer2");
		var box3= document.getElementById("footer3");
		var box4= document.getElementById("footer4");
		var box5= document.getElementById("footer5");
		box2.style.display="none";
		box3.style.display="none";
		box4.style.display="none";
		box1.style.display="none";
		if (box5.style.display=="none")
		 {
		 	box5.style.display="block";
		 }
		 else
		 {
		 	box5.style.display="none";
	 } 
	})

//--------------------------------------điều khiển đèn--------------------
		document.getElementById("toggle1").addEventListener("click",function()
		{
			var box1= document.getElementById("bulboffimg1");
			var box2= document.getElementById("bulbonimg1");
			if (box1.style.display=="none") 
			{
				box1.style.display="block";
				box2.style.display="none";
			}
			else
			{
				box2.style.display="block";
				box1.style.display="none";
			}
		})
		document.getElementById("toggle2").addEventListener("click",function()
		{
			var box1= document.getElementById("bulboffimg2");
			var box2= document.getElementById("bulbonimg2");
			if (box1.style.display=="none") 
			{
				box1.style.display="block";
				box2.style.display="none";
			}
			else
			{
				box2.style.display="block";
				box1.style.display="none";
			}
		})
		document.getElementById("toggle3").addEventListener("click",function()
		{
			var box1= document.getElementById("bulboffimg3");
			var box2= document.getElementById("bulbonimg3");
			if (box1.style.display=="none") 
			{
				box1.style.display="block";
				box2.style.display="none";
			}
			else
			{
				box2.style.display="block";
				box1.style.display="none";
			}
		})
//-------------------điều khiển cửa------------------------
//------------------gate------------------------------
		document.getElementById("unlockbtn1").addEventListener("click",function()
		{
			var box2= document.getElementById("gateclosestatus");
			var box1= document.getElementById("gateopenstatus");
				box1.style.display="block";
				box2.style.display="none";
		})
		document.getElementById("lockbtn1").addEventListener("click",function()
		{
			var box1= document.getElementById("gateclosestatus");
			var box2= document.getElementById("gateopenstatus");
				box1.style.display="block";
				box2.style.display="none";
		})
//---------------------door---------------------------------------------
		document.getElementById("unlockbtn2").addEventListener("click",function()
		{
			var box2= document.getElementById("doorclosestatus");
			var box1= document.getElementById("dooropenstatus");
			box2.style.display="none";
			box1.style.display="block";
		})
		document.getElementById("lockbtn2").addEventListener("click",function()
		{
			var box1= document.getElementById("doorclosestatus");
			var box2= document.getElementById("dooropenstatus");
				box1.style.display="block";
				box2.style.display="none";
		})
//----------------------------------window---------------------------------------------
		document.getElementById("unlockbtn3").addEventListener("click",function()
		{
			var box2= document.getElementById("windowclosestatus");
			var box1= document.getElementById("windowopenstatus");
				box1.style.display="block";
				box2.style.display="none";
		})
		document.getElementById("lockbtn3").addEventListener("click",function()
		{
			var box1= document.getElementById("windowclosestatus");
			var box2= document.getElementById("windowopenstatus");
				box1.style.display="block";
				box2.style.display="none";
		})
//============================AJAX=============================//
		


		var xhttp = new XMLHttpRequest();
		//==============Thiet lap du lieu va gui Request==================
		function getdata(url){
			xhttp.open("GET","/"+url,true);
			xhttp.onreadystatechange()=process;
			xhttp.send();
		}
//=========================kiem tra respone===========================
		
		function process(){
          if(xhttp.readyState == 4 && xhttp.status == 200){
            //------Updat data sử dụng javascript----------
            ketqua = xhttp.responseText; 
            document.getElementById("reponsetext").innerHTML=ketqua;       
          }
        }
        //------------Kiểm tra trạng thái chân D1 D2------
        function getstatusD1D2(){
          xhttp.open("GET","getstatusD1D2",true);
          xhttp.onreadystatechange = process_json;
          xhttp.send();
        }
        //-----------Kiểm tra response-------------------------------
        function process_json(){
          if(xhttp.readyState == 4 && xhttp.status == 200){
            //------Update data sử dụng javascript-------------------
            var trangthaiD1D2_JSON = xhttp.responseText;
            var Obj = JSON.parse(trangthaiD1D2_JSON);
            document.getElementById("trangthaiD1").innerHTML = Obj.D1;
            document.getElementById("trangthaiD2").innerHTML = Obj.D2;
          }
        }
        //---Ham update duu lieu tu dong---
        setInterval(function() {
          getstatusD1D2();
        }, 1000);


	</script>

</body>
</html>
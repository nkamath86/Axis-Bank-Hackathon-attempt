<!DOCTYPE html>
<html>
<head>
    <title>Tabbed Content</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="tabcontent.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body style="background:#F6F9FC; font-family:Arial;">
<?php 
include('header.php');
?>
    <div style="width: 500px; margin: 0 auto;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Credit Card</a></li>
            <li><a href="#view2">Debit Card</a></li>
            <li><a href="#view3">Net Banking</a></li>
        </ul>
        <center>
        <div class="tabcontents">
            <div id="view1" style="padding: 2px; margin: 2px;">
                
				<input class="form-control input-lg" placeholder="Card No." type="number" id="inputSmall" name="legal"  required="true" style="height:40px; width:500px;">
				<table style="margin:4%">
				<tr>
  					<!-- <td><label class="control-label" for="inputSmall">Expiry Date : </label></td> -->
  					<td>
  						<SELECT class="form-control input-lg"placeholder=""name="month" style="height: 40px;width:150px">
  						<option style="color:gray">Month</option>
  							<option>
  								01(Jan)
  							</option>
  							
  							<option>02(Feb)</option>
  							<option>03(Mar)</option>
  							<option>04(Apr)</option>
  							<option>05(May)</option>
  							<option>06(Jun)</option>
  							<option>07(Jul)</option>
  							<option>08(Aug)</option>
  							<option>09(Sep)</option>
  							<option>10(Oct)</option>
  							<option>11(Nov)</option>
	  						<option>12(Dec)</option>
	  						</SELECT>

  					</td>
  					<td>
  						<SELECT class="form-control input-lg"placeholder=""name="year" style="height: 40px;width:150px">
  						<option style="color:gray">Year</option>
  							<option>
  								2018
  							</option>
  							
  							<option>2019</option>
  							<option>2020</option>
  							<option>2021</option>
  							<option>2022</option>
  							<option>2023</option>
  							<option>2024</option>
  							<option>2025</option>
  							<option>2026</option>
  							<option>2027</option>
  							<option>2028</option>
	  						<option>2029</option>
	  						<option>2030</option>
	  						<option>2031</option>
	  						<option>2032</option>
	  						<option>2033</option>
	  						</SELECT>
  					</td>
					<!-- <td><label> </label></td> -->
  					<!-- <td><label class="control-label" for="inputSmall">CVV No. : </label></td> -->
  					<td><input class="form-control input-lg" type="password" id="inputSmall" size="3" style="height:40px; width:150px" min="0" max="999" placeholder="C V V No." name="legal" required="true"></td>
				</tr>
				</table>
				<input type="username" name="firstname" id="firstname" class="form-control input-lg" required="required" style="width: 500px" 
                    placeholder="first name">

                
            </div>
			<br>
                
          </div>
          <div id="view2">
                <input class="form-control input-lg" placeholder="Card No." type="number" id="inputSmall" name="legal"  required="true" style="height:40px; width:500px;">
                <br>
				<table style="margin:2%">
				<tr>
  					<!-- <td><label class="control-label" for="inputSmall">Expiry Date : </label></td> -->
  					<td>
  						<SELECT class="form-control input-lg"placeholder=""name="month" style="height: 40px;width:150px">
  						<option style="color:gray">Month</option>
  							<option>
  								01(Jan)
  							</option>
  							
  							<option>02(Feb)</option>
  							<option>03(Mar)</option>
  							<option>04(Apr)</option>
  							<option>05(May)</option>
  							<option>06(Jun)</option>
  							<option>07(Jul)</option>
  							<option>08(Aug)</option>
  							<option>09(Sep)</option>
  							<option>10(Oct)</option>
  							<option>11(Nov)</option>
	  						<option>12(Dec)</option>
	  						</SELECT>

  					</td>
  					<td>
  						<SELECT class="form-control input-lg"placeholder=""name="year" style="height: 40px;width:150px">
  						<option style="color:gray">Year</option>
  							<option>
  								2018
  							</option>
  							
  							<option>2019</option>
  							<option>2020</option>
  							<option>2021</option>
  							<option>2022</option>
  							<option>2023</option>
  							<option>2024</option>
  							<option>2025</option>
  							<option>2026</option>
  							<option>2027</option>
  							<option>2028</option>
	  						<option>2029</option>
	  						<option>2030</option>
	  						<option>2031</option>
	  						<option>2032</option>
	  						<option>2033</option>
	  						</SELECT>
  					</td>
					<!-- <td><label> </label></td> -->
  					<!-- <td><label class="control-label" for="inputSmall">CVV No. : </label></td> -->
  					<td><input class="form-control input-lg" type="password" id="inputSmall" size="3" style="height:40px; width:150px" min="0" max="999" placeholder="C V V No." name="legal" required="true"></td>
				</tr>
				</table>
				<br>
				<input type="username" name="firstname" id="firstname" class="form-control input-lg" required="required" style="width: 500px" 
                    placeholder="first name">
                
				
            </div>
            <div id="view3">
                <center>
                	<img src="Axis_B.jpg">
                </center>
                <table>
                <tr><td>
                	Login :</td><td> <input type="text" name="firstname" id="firstname" class="form-control input-lg" required="required" placeholder="first name"></td>
                	</tr>
                	<br><tr><td> <label></label></td></tr>
                	<tr><td><br>Password :</td><td> <input class="form-control input-lg" type="password" placeholder="Password" id="inputSmall" name="legal" style="height:40px; width:300px;border-radius: 2px" required="true"></input></td></tr>
                </table>
                
            </div>
            <br><br>
            <table cellspacing="50px"><tr><input type="submit" name="submit" value="submit" class="btn btn-lg btn-block" style="background-color: #8c001a;color:white">
                	
                </input>

                

                <input type="button" action="demo.php" name="cancel" value="cancel" class="btn btn-lg btn-block" style="background-color: #8c001a;color:white">
                	
                </input>
                
                </tr>
                </table>
        </div>
      </center>
    </div>
</body>
</html>

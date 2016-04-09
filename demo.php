<!DOCTYPE html>
<html>
<head>
    <title>Tabbed Content</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="tabcontent.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body style="background:#F6F9FC; font-family:Arial;">
    <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Credit Card</a></li>
            <li><a href="#view2">Debit Card</a></li>
            <li><a href="#view3">Net Banking</a></li>
        </ul>
        <center>
        <div class="tabcontents">
            <div id="view1" style="padding: 2px; margin: 2px;">
                
				<input class="form-control input-sm" placeholder="Card No." type="number" id="inputSmall" name="legal"  required="true" style="height:40px;border-radius: 2px; width:300px;">
				<table style="margin:10%">
				<tr>
  					<!-- <td><label class="control-label" for="inputSmall">Expiry Date : </label></td> -->
  					<td>
  						<SELECT placeholder=""name="month" style="height: 40px;width:90px">
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
  						<SELECT placeholder=""name="year" style="height: 40px;width:90px">
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
  					<td><input class="form-control input-sm" type="password" id="inputSmall" size="3" style="height:40px; width:110px" min="0" max="999" placeholder="C V V No." name="legal" required="true"></td>
				</tr>
				</table>
				<input class="form-control input-sm" type="text" placeholder="Name on Card" id="inputSmall" name="legal" style="height:40px; width:300px;border-radius: 2px" required="true">
                
            </div>
            <div id="view2" style="padding: 2px; margin: 2px;">
                <input class="form-control input-sm" placeholder="Card No." type="number" id="inputSmall" name="legal"  required="true" style="height:40px;border-radius: 2px; width:300px;">
				<table style="margin:10%">
				<tr>
  					<!-- <td><label class="control-label" for="inputSmall">Expiry Date : </label></td> -->
  					<td>
  						<SELECT placeholder=""name="month" style="height: 40px;width:90px">
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
  						<SELECT placeholder=""name="year" style="height: 40px;width:90px">
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
  					<td><input class="form-control input-sm" type="password" id="inputSmall" size="3" style="height:40px; width:110px" min="0" max="999" placeholder="C V V No." name="legal" required="true"></td>
				</tr>
				</table>
				<input class="form-control input-sm" type="text" placeholder="Name on Card" id="inputSmall" name="legal" style="height:40px; width:300px;border-radius: 2px" required="true">   
            </div>
            <div id="view3">
                <b>Advanced</b>
                <p>If you expect a more feature-rich version of the tabber, you can use the advanced version of the script, 
                    <a href="http://www.menucool.com/jquery-tabs">McTabs - jQuery Tabs</a>:</p>
                <ul>
                    <li>URL support: a hash id in the URL can select a tab</li>
                    <li>Bookmark support: select a tab via bookmark anchor</li>
                    <li>Select tabs by mouse over</li>
                    <li>Auto advance</li>
                    <li>Smooth transitional effect</li>
                    <li>Content can retrieved from other documents or pages through Ajax</li>
                    <li>... and more</li>     
                </ul>
            </div>
        </div>
        </center>
    </div>
</body>
</html>

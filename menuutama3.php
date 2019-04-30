<!--
<br/><br/><br/>
	
		
        <script type="text/javascript">
<!--
  var caldate = new Date();
  var thisday = caldate.getDate();
  var thismonth = caldate.getMonth();
  var thisyear = caldate.getFullYear();
  var first_day;
  var month = thismonth;
  var year = thisyear;
  var months = new Array(12);
  
  function setup(d, months_list) {
    var monthnr;
    first_day = d;
    caldate.setDate(1);
    months = months_list.split(',',12);
    fill_calendar();
  }
  
  function fill_calendar() {
    var calday = new Date();
    var daynr, firstcalday, myclass, slotid, slotnr;
    caldate.setFullYear(year, month, 1);
    element = document.getElementById('mmyyyy');
    element.innerHTML = months[month] + ' ' + year;
    //
    calday = caldate;
    firstcalday = 1 - caldate.getDay() + first_day;
    if (firstcalday > 1) {
      firstcalday = firstcalday - 7;
    }
    calday.setDate(firstcalday);
    for (slotnr=0; slotnr<42; slotnr++) {
      daynr = calday.getDate();
      if (calday.getMonth() == month) {
        myclass='day'
      } else {
        myclass='otherday'
        }
      slotid = 's' + slotnr;
      element = document.getElementById(slotid);
      if (daynr < 10 ) {
        daynrstr = '&nbsp;' + daynr;
      } else {
          daynrstr = daynr;
        }
      if (daynr == thisday && month == thismonth && myclass=='day' && year == thisyear) {
        element.innerHTML = '<strong>' + daynrstr + '</strong>';
        myclass = 'today';
      } else {      
          element.innerHTML = daynrstr;
        }      
      element.className=myclass;
      calday.setDate(calday.getDate() + 1);
    }
  }
  
  function next_month() {
    month= month + 1;
    if (month > 11) {
      month = 0;
      year = year + 1;
    }
    fill_calendar();
  }
  
  function last_month() {
    month= month - 1;
    if (month < 0) {
      month = 11;
      year = year - 1;
    }
    fill_calendar();
  }
  
  function next_year() {
    year = year + 1;
    fill_calendar();
  }
  
  function last_year() {
    year = year - 1;
    fill_calendar();
  }
//
</script>


<div id="calendar_wrap"><table width="280" height="208" id="ndikendii-calendar">
 <caption><div id="mmyyyy">April 2013</div></caption>
 <thead>
 <tr>
  <th scope="col" title="Monday" class="mm">M</th>
  <th scope="col" title="Tuesday" class="mm">T</th>
  <th scope="col" title="Wednesday" class="mm">W</th>
  <th scope="col" title="Thursday" class="mm">T</th>
  <th scope="col" title="Friday" class="mm">F</th>
  <th scope="col" title="Saturday" class="mm">S</th>
  <th scope="col" title="Sunday" class="mm">S</th>
 </tr>
 </thead>

 <tfoot>
 <tr>
  <td colspan="3" id="prev" class="prev" onclick="last_month()">Prev</td>
  <td class="pad"></td>
  <td colspan="3" id="next" class="next" onclick="next_month()">Next</td>
 </tr>
 </tfoot>
 <tbody>

 <tr>
 <td id="s0" class="otherday" >28</td>
 <td id="s1" class="otherday" >29</td>
 <td id="s2" class="otherday" >30</td>
 <td id="s3" class="otherday" >31</td>
 <td id="s4" class="day" >1</td>
 <td id="s5" class="day" >2</td>
 <td id="s6" class="day" >3</td>
 </tr>
 <tr>
 <td id="s7" class="day" >4</td>
 <td id="s8" class="day" >5</td>
 <td id="s9" class="today" >6</td>
 <td id="s10" class="day" >7</td>
 <td id="s11" class="day" >8</td>
 <td id="s12" class="day" >9</td>
 <td id="s13" class="day" >10</td>
 </tr>
 <tr>
 <td id="s14" class="day" >11</td>
 <td id="s15" class="day" >12</td>
 <td id="s16" class="day" >13</td>
 <td id="s17" class="day" >14</td>
 <td id="s18" class="day" >15</td>
 <td id="s19" class="day" >16</td>
 <td id="s20" class="day" >17</td>
 </tr>
 <tr>
 <td id="s21" class="day" >18</td>
 <td id="s22" class="day" >19</td>
 <td id="s23" class="day" >20</td>
 <td id="s24" class="day" >21</td>
 <td id="s25" class="day" >22</td>
 <td id="s26" class="day" >23</td>
 <td id="s27" class="day" >24</td>
 </tr>
 <tr>
 <td id="s28" class="day" >25</td>
 <td id="s29" class="day" >26</td>
 <td id="s30" class="day" >27</td>
 <td id="s31" class="day" >28</td>
 <td id="s32" class="day" >29</td>
 <td id="s33" class="day" >30</td>
 <td id="s34" class="otherday" >1</td>
 </tr>
 <tr>
 <td id="s35" class="otherday" >2</td>
 <td id="s36" class="otherday" >3</td>
 <td id="s37" class="otherday" >4</td>
 <td id="s38" class="otherday" >5</td>
 <td id="s39" class="otherday" >6</td>
 <td id="s40" class="otherday" >7</td>
 <td id="s41" class="otherday" >8</td>
 </tr>
 </tbody>
 </table></div>
<script type="text/javascript">
setup(0,"JANUARY,FEBRUARY,MARCH,APRIL,MAY,JUNE,JULY,AUGUST,SEPTEMBER,OCTOBER,NOVEMBER,DECEMBER");
</script>
<link type="text/css" rel="stylesheet" href="tanggal.css"/>
        
        
        
        
        
        
        <br/><br/>
		<br/> <br/><br/>
		<br/>-->
		<h3></h3><br/>
		<p style="text-align:justify">
			 	<br/>
          
			<br/>
		</p></div></div><div></div><div></div><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="control-group" >
            
            <div class="controls">
              <div class="input-append" >
               	 <?php include "menuutama.php"; ?>
		
              </div>
            </div>
      </div>
		<!--<input type="text" class="input-large" style="font-size:15px;" placeholder="Email">
		<button type="submit" class="btn btn-large" style="color:#000; font-weight:bold; ">Subscribe</button> -->
		</form>	
	</div>

<div class="row-fluid">
	<div class="span4">
	
	<center>
	<a data-toggle="modal" href="#myModal" ><img src="img/ak.jpg"/></a>
	<div class="modal hide" id="myModal">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
	
    <img src="img/ak1.jpg" style="width:600px; height:300px"/>
    </div>
	</div>
	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">Lomba olimpiade akuntansi di <br/> Universitas Muhammadiyah Jember</a>
	</center>
	</div>
    
    
    
	<div class="span4">
	<center>
	<a data-toggle="modal" href="#myModal1" ><img src="img/pensi.jpg"/></a>
	<div class="modal hide" id="myModal1">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
	
    <img src="img/pensi1.jpg" style="width:600px; height:300px"/>
    </div>
	</div>
	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">Lepas pisah KK-PPL UNEJ<br/> dan pentas seni</a>
	</center>
	</div>

	<div class="span4">
	<center>
	<a data-toggle="modal" href="#myModal2" ><img src="img/car.jpg"/></a>
	<div class="modal hide" id="myModal2">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>

    <img src="img/car1.jpg" style="width:600px; height:300px"/>
    </div>
	</div>
	<br/><br/>
	
	<a class="btn" style="width:285px;" href="#">Juara 2 carnaval<br/> 2014 di tanggul</a>
	</center>
	
	</div>
</div>
</div>

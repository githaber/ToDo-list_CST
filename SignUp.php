<!DOCTYPE HTML>
<html>
	
		<style>
			p.size {font-size:22;}
			body 
				{
					background-color:#d0e4fe;
				}
			.centre
				{
					margin-left:auto;
					margin-right:auto;
					border-width:20px;
				
				}
			.but { button-align:center;}
			h3 { color:orange; font-family: "Times New Roman"; text-align:center; }
		</style><br /><br /><br /><br /><br /><br /><br /> 
		
			<h3> SignUp Now and save your time <h3>
		
		<button class="but">		
			<div id="centre">
				<table bodrder="5">
					<tr>
						<td>
							<form action='' method='post' >
							<form>
								<input type="text" name="First Name" placeholder="First Name" > <br><br>
								<input type="text" name="second name" placeholder="Second Name" > <br><br>
								<input type="text" name="mail" placeholder="Enter Your E-mail" > <br><br>
								<input type="password" name="password" placeholder="Enter password" > <br><br>
								<input type="password" name="password" placeholder="Re-Enter password" > <br><br>
							</form>
						</td>
					</tr>
				
			<form>
				<div class='birth' > <p class='size'>Birthday</p> </div>
				<div class='somth'>
				<span class='somth' data-type='selectors' data-name='birthday_wrappers' >
				<span>
					<select name='birthday_month' id='month' class='5dba'>
						<option value="0" selected="1">Month</option>
						<option value="1"> Jan </option>
						<option value="2"> Feb </option>
						<option value="3"> Mar </option>
						<option value="4"> Apr </option>
						<option value="5"> May </option>
						<option value="6"> Jun </option>
						<option value="7"> Jul </option>
						<option value="8"> Aug </option>
						<option value="9"> Sep </option>
						<option value="10"> Oct </option>
						<option value="11"> Nov </option>
						<option value="12"> Dec </option>
					</select>
					
					<select name='birthday_day' id='day' class='5bda'>
						<option value='0' selected='1'> Day </option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
						<option value='6'>6</option>
						<option value='7'>7</option>
						<option value='8'>8</option>
						<option value='9'>9</option>
						<option value='10'>10</option>
						<option value='11'>11</option>
						<option value='12'>12</option>
						<option value='13'>13</option>
						<option value='14'>14</option>
						<option value='15'>15</option>
						<option value='16'>16</option>
						<option value='17'>17</option>
						<option value='18'>18</option>
						<option value='19'>19</option>
						<option value='20'>20</option>
						<option value='21'>21</option>
						<option value='22'>22</option>
						<option value='23'>23</option>
						<option value='24'>24</option>
						<option value='25'>25</option>
						<option value='26'>26</option>
						<option value='27'>27</option>
						<option value='28'>28</option>
						<option value='29'>29</option>
						<option value='30'>30</option>
						<option value='31'>31</option>
						<!--<option value='4'>4</option>-->
					</select>
					
					<select name='birthday_year' id='year' class='5bda'>
						<option value='0' select='1'> Year </option>
						<option value='2013'>2013</option>
						<option value='2012'>2012</option>
						<option value='2011'>2011</option>
						<option value='2010'>2010</option>
						<option value='2009'>2009</option>
						<option value='2008'>2008</option>
						<option value='2007'>2007</option>
						<option value='2006'>2006</option>
						<option value='2005'>2005</option>
						<option value='2004'>2004</option>
						<option value='2003'>2003</option>
						<option value='2002'>2002</option>
						<option value='2001'>2001</option>
						<option value='2000'>2000</option>
						<option value='1999'>1999</option>
						<option value='1998'>1998</option>
						<option value='1997'>1997</option>
						<option value='1996'>1996</option>
						<option value='1995'>1995</option>
						<option value='1994'>1994</option>
						<option value='1993'>1993</option>
						<option value='1992'>1992</option>
						<option value='1991'>1991</option>
						<option value='1990'>1990</option>
						<option value='1989'>1989</option>
						<option value='1988'>1988</option>
						<option value='1987'>1987</option>
						<option value='1986'>1986</option>
						<option value='1985'>1985</option>
						<option value='1984'>1984</option>
						<option value='1983'>1983</option>
						<option value='1982'>1982</option>
						<option value='1981'>1981</option>
						<option value='1980'>1980</option>
						<option value='1979'>1979</option>
						<option value='1978'>1978</option>
						<option value='1977'>1977</option>
						<option value='1976'>1976</option>
						<option value='1975'>1975</option>
						<option value='1974'>1974</option>
						<option value='1973'>1973</option>
						<option value='1972'>1972</option>
						<option value='1971'>1971</option>
						<option value='1970'>1970</option>
						<option value='1969'>1969</option>
						<option value='1968'>1968</option>
						<option value='1967'>1967</option>
						<option value='1966'>1966</option>
						<option value='1965'>1965</option>
						<option value='1964'>1964</option>
						<option value='1963'>1963</option>
						<option value='1962'>1962</option>
						<option value='1961'>1961</option>
						<option value='1960'>1960</option>
						<option value='1959'>1959</option>
					</select>
					
					<select name="Sex" >
						<option value='0' select='1' > Gender </option>
						<option value='Male'> Male </option>
						<option value="Female" > Female </option>
					</select>
						
						
					
			<!--<select><br>
				<option value="year"> Year </option>
				#<?php 
				#for ( $i = 2014; $i >=1925; $i-- )
				#{
				#	echo "<option value=year$i>",$i,"</option>";
				#}
				#?>	
			</select>
			
			<select>
				<option value="month"> Month </option>
				#<?php 
				#	for ($j = 1; $j <= 12; $j++)
				#	{
				#		echo "<option value=month$j>",$j,"</option>";
				#	}
				#?>
			</select>-->
		
		</div>
		<input type="submit" name="submit" value='submit' />
		</table>
	</body>
	</button>
	
	
</html>
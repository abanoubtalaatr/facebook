
    <div class="navbar">
    	<div class="container">
	    	<div class="brand">
	    		<h1>facebook</h1>
	    	</div>
    	<div class="form_login">
    		<form>
    			<div class="contai_label_input">
    				<label>Email or phone </label>
    			    <input type="text" id="email_log_in" placeholder="Email or phone" maxlength="12">
    			   
    			</div>
    			<div class="contai_label_input">
    				<label>password </label>
    			    <input id="password_log_in" type="password" placeholder="password"maxlength="12">
    			</div>
    		   <div class="contai_label_input log_button" >
    		   	<button id="login">log in</button>
    		   </div>
    		</form>

    	</div>
    	
    	</div>
    <div class="container">
	    	<div class="forgotten">
	    		<a href="#">Forgotten account?</a>
	    	</div>
    	</div>
      </div>

   <div class="create_new_account aside">

	   	<h1>create new account</h1>
	   	<span>It's free and always will be</span>
	   	<form class="form_signUp" method="POST" enctype="application/x-www-form-urlencoded">

			<div class="contain_half_width">
				<input class="" type="text" name="form_signUp_first_name" placeholder="First Name" maxlength="12" minlength="3" >
			    <input class="surname" type="text" name="form_signUp_surname" placeholder="surname" maxlength="12">

			</div>
			<div class="contain_half_width">
				<div id='firstname' class="error" style="display: inline-block;margin-left: 5px;margin-bottom: 6px;"></div>
				<div id='surname' class="error" style="display: inline-block;margin-bottom: 6px;margin-bottom: 6px;float: right;margin-right: 17%;"></div>
			</div>
		   <div class="contain_full_width">
		   	  <input 
			   	  class="full_width"
			   	  type="text" 
			   	  name="form_signUp_email_or_phone"
			   	  placeholder="mobile number or Email">
               <div class="contain_full_width">
               	<div id='email' class="error" style="padding-left: 10px;margin-bottom: 6px"></div>
               </div>
		      <input 
		          class="full_width"
		          type="password" 
		          name="form_signUp_password"
		          placeholder="new password">
		            <div class="contain_full_width">
               	<div id='password' class="error" style="padding-left: 10px;margin-bottom: 6px"></div>
               </div>
		   </div>
		   <h3>brithday</h3>
		   <div class="contain_selects">
		   	<select name="form_signUp_days">
		   		<option>days</option>
		   		<?php for($year = 1 ;$year <31 ; $year++){
		   			echo "<option value ='  $year'>$year</option>";
		   		}
		   		?>
		   	</select>
		   	<select name="form_signUp_monthes">
		   		<option>mothes</option>
		   		<option value="January">January</option>
		   		<option value="February">February</option>
		   		<option value="March">March</option>
		   		<option value="April">April</option>
		   		<option value="May">May</option>
		   		<option value="June">June</option>
		   		<option value="July">July</option>
		   		<option value="August">August</option>
		   		<option value="September">September</option>
		   		<option value="October">October</option>
		   		<option value="November">November</option>
		   		<option value="December">December</option>
	            
		   		
		   	</select>
		    <select name="form_signUp_years">
		   		<option>year</option>
		   		<?php for($year = 1950 ;$year <2018 ; $year++){
		   			echo "<option value = '$year'>$year</option>";
		   		}
		   		?>
		   	</select>
		   </div>
		   <div class="radio">
		   	<input type="radio"  id="male" name='form_signUp_gender' value="male">
		   	<label for="male">male</label>

		   	<input type="radio"  id="female" name='form_signUp_gender' value="female">
		   	<label for='female'>female</label>
		   
		   </div>
		   
		     <button class="signUp" id="button" name="signUp">sign up</button>
		   
	   	</form>  
   </div>

   <div id='cont'></div>
   <div class="image">
   	<img src="http://localhost/facebook/images/sign-up-here.png">
   </div>
  
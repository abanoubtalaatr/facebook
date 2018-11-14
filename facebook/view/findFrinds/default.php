<div class="container_friends">
<div class="your_friends_request">
	<h3>Respond to Your Friend Requests</h3>
<div class="surronded">
	<div class="friends">
		<div class="image">
			<img src="http://localhost/facebook/images/abanoub.jpg">
		</div>
		<div class="head">
			<a href="#"> <h3>my freinds</h3> </a>
			<span> about this frinds </span>
		</div>
		<div class="control">
	       <button>confirm</button>
	       <button>delete request</button>		
		</div>
	</div>
</div>
<div class="surronded">
	<div class="friends">
		<div class="image">
			<img src="http://localhost/facebook/images/abanoub.jpg">
		</div>
		<div class="head">
			<a href="#"> <h3>my frinds</h3> </a>
			<span> about this frinds </span>
		</div>
		<div class="control">
	       <button>confirm</button>
	       <button>delete request</button>		
		</div>
	</div>
</div>

<div class="surronded">
	<div class="friends">
		<div class="image">
			<img src="http://localhost/facebook/images/abanoub.jpg">
		</div>
		<div class="head">
			<a href="#"> <h3>my freinds</h3> </a>
			<span> about this frinds </span>
		</div>
		<div class="control">
	       <button>confirm</button>
	       <button>delete request</button>		
		</div>
	</div>
</div>
</div>
</div>



<div class="container_friends">
	<div class="people_you_now">
		<h3>people you maybe now</h3>
		<?php 
		$first_and_surname = $this->data['name'];
		$count = 0;
		foreach ($first_and_surname as $value) {
            
			 echo "<div class='surronded to_hidden'>
					<div class='friends'>
						<div class='image'>
							<img src='http://localhost/facebook/images/abanoub.jpg'>
						</div>
						<div class='head'>
							<a href='#'> <h3>{$value['firstname']} {$value['surname']}</h3> </a>
							<span> about this frinds </span>
						</div>
						<div class='control'>
					       <button class='send_request'>add freind</button>
					       <button>remove</button>		
						</div>
					</div>
		       </div>";
		       $count++;
		}
        
		?>
	</div>
</div>

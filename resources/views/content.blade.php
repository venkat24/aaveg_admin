@extends('base')

@section('main')

		<h2>Enter Roll Number</h2>
	<div class="row">
	    <div class="input-field">
	      <input id="roll_no" type="text" class="validate">
	      <label for="last_name">Roll Number</label>
	        <button class="btn waves-effect waves-light" type="submit" name="action" onclick="search();return false;">Search
		      <i class="material-icons right">search</i>
		    </button>
	    </div>
	  </div>
	  
		<script id="display" type="text/template">
			<div class="container">
			<ul class="collapsible" data-collapsible="expandable">
				    <li>
				      <div class="collapsible-header active">
				      	  <i class="material-icons">label</i>
				      	  <b>@{{message.name}}</b>
				      </div>
				      <div class="collapsible-body row"><p>
				        <div class="col s4 center-align">@{{message.roll_no}}</div>
					    <div class="col s4 center-align">@{{message.hostel}}</div>
					    <div class="col s4 center-align">@{{message.mobile_number}}</div>
				      </p></div>
				    </li>
					<li>
				      <div class="collapsible-header"><b>What do you think are the responsibilities of the Content Team?</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer1}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>If you could choose to be raised by robots, dinosaurs or aliens, who would you choose? Why?</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer2}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>You have just finished your 300 page autobiography. Please submit page 217.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer3}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Find x.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer4}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>If the movie industry made a movie about your life, who should play the lead role as you, and why?</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer5}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>You have 150 words. Take a risk.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer6}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Come up with a new event idea for Aaveg 2017. Explain.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer7}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Write a WhatsApp post that will be circulated among all first years, publicizing your new event.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer8}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Tell us why you should be a part of the Content Team using alliterations.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer9}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Are you interested in MoC-ing for events?</b></div>
				      <div class="collapsible-body row">
					      <p>
					      @{{message.answer10}}
					      </p>
					  </div>
				  	</li>
			</ul>
			</div>
		</script>
<script type="text/javascript" src="/content.js"></script>
@endsection
<!-- REMEMBER DISPLAY -->
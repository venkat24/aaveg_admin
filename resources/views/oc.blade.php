@extends('base')

@section('main')
 	<div class="center-align red-text text-lighten-2">
 	<h1>OC Selection</h1>
 	</div>
		<h3>Enter Roll Number</h3>
	<div class="row">
	    <div class="input-field">
	      <input id="roll_no" type="text" class="validate">
	      <label for="last_name">Roll Number</label>
	        <button class="btn waves-effect waves-light" type="submit" name="action" id="search" onclick="search();return false;">Search
		      <i class="material-icons right">search</i>
		    </button>
	    </div>
	  </div>
	  
		<script id="display" type="text/template">
			<div class="container" id="answers">
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
				      <div class="collapsible-header"><b>Come up with a new tagline for Aaveg.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer1}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>What is your solution to irregular CT schedules, and conflicting event schedules?</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer2}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Do you have an inclination towards arts/ambiance work? If yes, explain your interests, and your past work.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer3}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>There is an important Barn Hall event scheduled.Explain the steps you will take to bring people down to the event.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer4}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>People LOVE you! State 3 reasons why. </b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer5}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>People HATE you! State 3 reasons why.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer6}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>Explain the procedure to book an A hall.</b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer7}}
				      	</p>
				      </div>
				  	</li>
					<li>
				      <div class="collapsible-header"><b>You need judges for the following clusters. State the club that you'll contact for each one of these clusters. </b></div>
				      <div class="collapsible-body row">
				      	<p>	
				      		@{{message.answer8}}
				      	</p>
				      </div>
				  	</li>
			  </ul>
			  <div class="row">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field">
			          <i class="material-icons prefix">mode_edit</i>
			          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			          <label class="active" for="icon_prefix2">Remarks</label>
			        </div>
			      </div>
			    </form>
			  </div>
			<div class="center-align">
				<a class="waves-effect waves-light btn-large col s4" onclick="select();">
					<i class="material-icons left">
						thumb_up
					</i>
					Select
				</a>
				
				<a class="waves-effect waves-light btn-large col s4 red lighten-2" onclick="reject();">
					<i class="material-icons left">
						thumb_down
					</i>
					Rejected
				</a>
				
				<a class="waves-effect waves-light btn-large col s4 amber accent-4" onclick="shortlist();">
					<i class="material-icons left">thumbs_up_down
					</i>
					Shortlist
				</a>
			</div>
			</div>
		</script>
<script type="text/javascript" src="/oc.js"></script>
@endsection
<!-- REMEMBER DISPLAY -->
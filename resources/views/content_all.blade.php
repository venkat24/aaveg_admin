@extends('base')

@section('main')
 	<div class="center-align red-text text-lighten-2">
 	<h1>Content Candidates</h1>
 	</div>

		<script id="selected-script" type="text/template">
			<div class="container" id="selected">
		<h3 class="green-text text-lighten-2">Selected</h3>
			<ul class="collapsible" data-collapsible="accordian">
			@{{#each message}}
				    <li>
				      <div class="collapsible-header">
				      	  <i class="material-icons">label</i>
				      	  <b>@{{name}}</b>
				      </div>
				      <div class="collapsible-body row"><p>
				        <div class="col s4 center-align">
				        @{{roll_no}}<br />
				        @{{hostel}}<br />
				        @{{mobile_number}}
				        </div>
				        <div class="col s4 center-align">
				        @{{pref1}}<br />
				        @{{pref2}}<br />
				        @{{pref3}}<br />
				        </div>
				        <div class="col s4 center-align">
				        @{{remarks}}
				        </div>
				      </p></div>
				    </li>
			  @{{/each}}
			  </ul>
			</div>
		</script>
		<script id="shortlisted-script" type="text/template">
			<div class="container" id="selected">
		<h3 class="amber-text text-accent-2">Shortlisted</h3>
			<ul class="collapsible" data-collapsible="accordian">
			@{{#each message}}
				    <li>
				      <div class="collapsible-header">
				      	  <i class="material-icons">label</i>
				      	  <b>@{{name}}</b>
				      </div>
				      <div class="collapsible-body row"><p>
				        <div class="col s4 center-align">
				        @{{roll_no}}<br />
				        @{{hostel}}<br />
				        @{{mobile_number}}
				        </div>
				        <div class="col s4 center-align">
				        @{{pref1}}<br />
				        @{{pref2}}<br />
				        @{{pref3}}<br />
				        </div>
				        <div class="col s4 center-align">
				        @{{remarks}}
				        </div>
				      </p></div>
				    </li>
			  @{{/each}}
			  </ul>
			</div>
		</script>
		<script id="rejected-script" type="text/template">
			<div class="container" id="selected">
		<h3 class="red-text">Rejected</h3>
			<ul class="collapsible" data-collapsible="accordian">
			@{{#each message}}
				    <li>
				      <div class="collapsible-header">
				      	  <i class="material-icons">label</i>
				      	  <b>@{{name}}</b>
				      </div>
				      <div class="collapsible-body row"><p>
				        <div class="col s4 center-align">
				        @{{roll_no}}<br />
				        @{{hostel}}<br />
				        @{{mobile_number}}
				        </div>
				        <div class="col s4 center-align">
				        @{{pref1}}<br />
				        @{{pref2}}<br />
				        @{{pref3}}<br />
				        </div>
				        <div class="col s4 center-align">
				        @{{remarks}}
				        </div>
				      </p></div>
				    </li>
			  @{{/each}}
			  </ul>
			</div>
		</script>
		
<script type="text/javascript" src="/content_all.js"></script>
@endsection
<!-- REMEMBER DISPLAY -->
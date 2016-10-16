@extends('base')

@section('main')
<script id="table" type="text/template">
	<br />
	<div class="container">
		<div class="valgn-wrapper" >
			<ul class="collapsible popout" data-collapsible="accordion">
				@{{#each message}}
				    <li>
				      <div class="collapsible-header">@{{name}}</div>
				      <div class="collapsible-body row"><p>
				        <div class="col s4 center-align">@{{pref1}}</div>
					    <div class="col s4 center-align">@{{pref2}}</div>
					    <div class="col s4 center-align">@{{pref3}}</div>
				      </p></div>
				    </li>
				@{{/each}}
			</ul>
		</div>
	</div>
</script>
<script type="text/javascript" src="/home.js"></script>
@endsection
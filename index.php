<?php 	$pagetitle = "Changes to Training";
		$metadescription = "Information about temporary changes to training due to refurbishment of our normal pool.";
		$navcolour = "default";
    $locationrd = "https://www.chesterlestreetasc.co.uk/squads";
?>
<?php include_once '/resources/header-2017temp.php'; ?>

<!-- Page Content -->
<div class="TOP TOPchesterRed">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="m-t-0 display">Changes to Training<br>at Chester-le-Street ASC</h1>
			</div>
		</div>
	</div>
</div>

<!-- Page Content -->
<div class="container">
<!-- Opening three divs must be specifically written in for cols, rows and containers -->

<style>
a.list-group-item, button.list-group-item{font-weight:600;font-size:18px}
</style>

<div class="row">
	<div class="col-md-12">
		<p class="lead">Information about temporary changes to training during refurbishment work at Chester-le-Street Leisure Centre.</p>
		<hr>
		<h2 class="m-t-0">View Sessions by Squad or Pool</h2>
		<div class="row">
			<div class="col-sm-6 text-center">
				<h3>Squad</h3>
				<div class="list-group">
				  <a href="/squads/ab1" class="list-group-item">A and B1</a>
				  <a href="/squads/b2" class="list-group-item">B2</a>
				  <a href="/squads/b3" class="list-group-item">B3</a>
				  <a href="/squads/c" class="list-group-item">C Squad</a>
				  <a href="/squads/d" class="list-group-item">D Squad</a>
				  <a href="/squads/e" class="list-group-item">E Squad</a>
				  <a href="/squads/smallpool" class="list-group-item">Tadpoles, Frogs and Dolphins</a>
				</div>
			</div>
			<div class="col-sm-6 text-center">
				<h3>Pool</h3>
				<div class="list-group">
				  <a href="/venues/birtley" class="list-group-item">Birtley</a>
				  <a href="/venues/castleview" class="list-group-item">Castleview Academy</a>
				  <a href="/venues/consett" class="list-group-item">Consett</a>
				  <a href="/venues/durham" class="list-group-item">Freeman's Quay</a>
				  <a href="/venues/stanley" class="list-group-item">The Louisa Centre</a>
				  <a href="/venues/crossfitCLS" class="list-group-item">CrossFit CLS</a>
				</div>
			</div>
			<div class="col-xs-12">
				<p>Printable Squad Timetables are available on each page</p>
			</div>
		</div>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2 class="m-t-0">Important Information</h2>
		<ul>
			<li><?php
			$date = date("m/d/Y");
			$refDate = date("m/d/Y", strtotime("09/04/2017"));
			if($date < $refDate) {
				echo 'The temporary timetable takes effect on <strong>Monday 4 September</strong>';
			}
			elseif($date == $refDate) {
				echo 'The temporary timetable <strong>takes effect today</strong>';
			}
			else {
				echo 'The temporary timetable is now in effect';
			} ?></li>
			<li>For some squads, attendance requirements will be relaxed</li>
			<li>Monthly fees will stay the same during this period as they are averaged over the course of the year and the club is incurring significant additional costs in order to ensure the continued delivery of training</li>
			<li>Metafit is suspended during the disruption</li>
			<li>Keep up to date on our <a href="https://www.chesterlestreetasc.co.uk" target="_blank">website</a>.</li>
		</ul>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2 class="m-t-0">About the Squads</h2>
		<p class="lead">Chester-le-Street ASC is a competitive club and our training programmes have been designed in order to help swimmers progress from absolute beginners all the way to national level competition.</p>
		<p>It is worth noting that there are no age limits set against any of the squads and any movement of swimmers between squads will be solely at the coaches discretion.</p>
		<p>It is important for parents to notify coaches if swimmers are going to be absent for any length of time. This is especially important for swimmers in the competitive squads.</p>
		<p>Some swimmers are selected for further training with Swim England (at a county, regional and national level) and British Swimming on the UK level. <a href="https://www.chesterlestreetasc.co.uk/wp-content/uploads/2016/03/SE-Pathway-Booklet-FINAL.pdf" target="_blank" rel="noopener">Read this document</a> by Swim England to learn about the progression routes for eligible swimmers. <a href="https://www.chesterlestreetasc.co.uk/wp-content/uploads/2016/03/NDSA-Swimming-Development-Programme-2017-2018-Performance-Sessions-Selec....pdf" target="_blank">Click here</a> for further information about these programmes in Northumberland and Durham.</p>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<?php include_once '/customers/9/d/e/chesterlestreetasc.co.uk/httpd.www/disruption2017/venues/venueinformation.php'; ?>
	</div>
</div>
</div>
<div class="cls-global-footer cls-global-footer-body hidden-print" style="margin:21px 0 -21px 0;background-color:#e7e7e7"><div class="container"><div class="row"><div class="col-md-9 col-sm-10"><h4 class="m-t-0 m-b-0">Could we improve this site?</h4>
Let us know how by sending us an email as it's really important that the information here is as clear as possible!</div><div class="col-md-3 col-sm-2 hidden-xs"><a class="btn btn-default pull-right" href="mailto:websitefeedback@chesterlestreetasc.co.uk">Website Feedback</a></div><div class="col-xs-12 visible-xs"><br><a class="btn btn-default" href="mailto:websitefeedback@chesterlestreetasc.co.uk">Website Feedback</a></div></div></div></div>
<!-- Three closing divs are provided in the footer for cols, rows and containers -->

<div><div>
<?php include_once '/resources/footer.php'; ?>
<!-- /customers/9/d/e/chesterlestreetasc.co.uk/httpd.www/www2/tempchanges -->

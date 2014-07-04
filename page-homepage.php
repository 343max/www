<div class="home-top-row row-blue">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="color: white;">
			<h1 style="font-size: 3em;" >Your data - under your control</h1>
			<h2 style="margin-top: -10px; margin-bottom: 26px; font-size: 1.6em; font-weight: 300;">With ownCloud you can sync & share your files, calendar, contacts and more. 
				Access your data from all your devices, on an open platform you can extend and modify.</h2>
				<a href="/install" class="btn btn-lg btn-primary">Download now</a>&nbsp;&nbsp;or&nbsp;&nbsp;
				<a href="/providers" class="btn btn-lg btn-default">Find hosting</a>
		</div>
	</div>
	<div class="row" style="padding-bottom: 0; overflow: hidden;">
		<div class="home-splash col-md-8 col-md-offset-2">
			<div><img style="width: 90%; margin-bottom: -100px" src="https://cloud.needham.im/public.php?service=files&t=4816bbe6add9f123b8f6f10366006ccf&download"></img></div>
			<div><a style="opacity: 1 !important; position: absolute; top: 54%; left: 46%;" href="https://demo.owncloud.org" class="btn btn-lg btn-default"><i class="icon-play"></i>&nbsp&nbspDemo</a></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12" style="text-align: center; padding: 33px 0;">
		<h3><a href="/conf">ownCloud Contributor Conference - August 2014, Berlin</a></h3>
		<small>The awesome community behind ownCloud will get together at the TU Berlin for 5 days of writing code and sharing beer, knowledge and inspiration.</small>
	</div>
</div>
<div class="row">
	<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>

	<div class="contribook col-md-8 col-md-offset-2">
		<div class="col-md-4">
			<h2><i class="icon-twitter"></i> The latest twitter posts</h2>
			<?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,3); } ?>
		</div>
		<div class="col-md-4">
			<h2><i class="icon-comment"></i> The latest from the forum</h2>
			<?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,7); }?>
		</div>
		<div class="col-md-4">
			<h2><i class="icon-cloud"></i> ownCloud.com news</h2>
			<?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,7); } ?>
		</div>
	</div>
</div>

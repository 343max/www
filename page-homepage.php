<div class="home-top-row row-blue">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 style="font-size: 3em;" >Your data - under your control</h1>
			<h2 style="font-size: 1.6em; font-weight: 300;">With ownCloud you can sync & share your files, calendar, contacts and more. 
				Access your data from all your devices, on an open platform you can extend and modify.</h2>
				<a href="/install" class="btn btn-lg btn-default">Download now</a> or 
				<a href="/providers" class="btn btn-lg btn-default">Find hosting</a>
		</div>
	</div>
	<div class="row" style="padding-bottom: 0; overflow: hidden;">
		<div class="col-md-8 col-md-offset-2">
			<img style="width: 90%; margin-bottom: -100px" src="https://cloud.needham.im/public.php?service=files&t=4816bbe6add9f123b8f6f10366006ccf&download"></img>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12" style="text-align: center; padding: 25px 0 35px 0">
		<h3><a href="/conf">ownCloud Contributor Conference - August 2014, Berlin</a></h3>
		<small>The awesome community behind ownCloud will get together at the TU Berlin for 5 days of writing code and sharing beer, knowledge and inspiration.</small>
	</div>
</div>
<div class="row row-blue" style="padding: 40px 0 40px 0">
	<div class="col-md-2 col-md-offset-2"><a class="btn btn-block btn-lg join-button btn-primary" href="/conf" role="button">Hackathon, Berlin</a></div>
	<div class="col-md-2"><a class="btn btn-block btn-primary btn-lg join-button" href="/contribute" role="button">Join development</a></div>
	<div class="col-md-2"><a class="btn btn-block btn-primary btn-lg join-button" href="https://github.com/owncloud/core/issues" role="button">Report an issue</a></div>
	<div class="col-md-2"><a class="btn btn-block btn-primary btn-lg join-button" href="https://www.transifex.com/projects/p/owncloud/" role="button">Help translating</a></div>
</div>
<div class="container" role="document">
	<div class="row" style="margin-top: 30px;">
		<main class="main <?php echo roots_main_class(); ?>" role="main">

			<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>

			<div class="row 3-column-lg-md-sm">
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
					<h2><i class="icon-twitter"></i> The latest twitter posts</h2>
					<?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,3); } ?>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
					<h2><i class="icon-comment"></i> The latest from the forum</h2>
					<?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,7); }?>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
					<h2><i class="icon-cloud"></i> ownCloud.com news</h2>
					<?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,7); } ?>
				</div>
			</div>
		</main><!-- /.main -->
	</div><!-- /.content -->
</div><!-- /.wrap -->

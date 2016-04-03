@extends('maintemplate')

@section('breadcrumb')
	<li>Informasi Koridor</li>
@endsection

@section('page-header')
	Informasi Koridor
	<small>
		<i class="ace-icon fa fa-angle-double-right"></i>
		overview &amp; stats
	</small>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="col-sm-12">
				<!-- <h3 class="header smaller lighter red">Bootstrap Wells</h3> -->

				<div class="well">
					<h4 class="green smaller lighter">Koridor 1</h4>
					Use the well as a simple effect on an element to give it an inset effect.
					<br>
					<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
									&nbsp; Content Slider inside Modal Box &nbsp;
					</a>
				</div>

				<div class="well well-lg">
					<h4 class="blue">Koridor 2</h4>
					Control padding and rounded corners with two optional modifier classes.
					<br>
					<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
									&nbsp; Content Slider inside Modal Box &nbsp;
								</a>
				</div>
				<div class="well well-sm"> This is a small well </div>
			</div>
		</div>
	</div>
	<div id="my-modal" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="smaller lighter blue no-margin">A modal with a slider in it!</h3>
				</div>

				<div class="modal-body">
					Some content
					<br />
					<br />
					<br />
					<br />
					<br />
					1
					<br />
					<br />
					<br />
					<br />
					<br />
					2
				</div>

				<div class="modal-footer">
					<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						Close
					</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div>
@endsection
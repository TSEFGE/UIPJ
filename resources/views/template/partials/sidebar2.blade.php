<aside class="control-sidebar control-sidebar-dark">
	<!-- Tabs -->
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a>
		</li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<!-- Home tab content -->
		<div class="tab-pane active" id="control-sidebar-home-tab">
			<h5>Notifications</h5>
			<div class="media">
				<div class="media-left">
					<i class="fa fa-birthday-cake bg-danger size-40 img-rounded"></i>
				</div>
				<div class="media-body">
					<h6 class="m-0">Langdon's Birthday</h6>
					<p class="text-sm">Will be 23 on April 24th</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<i class="fa fa-clock-o bg-success size-40 img-rounded"></i>
				</div>
				<div class="media-body">
					<h6 class="m-0">Call Robert</h6>
					<p class="text-sm">6:00 PM</p>
				</div>
			</div>

			<h5 class="control-sidebar-heading">Tasks Progress</h5>
			<ul class="list-unstyled">
				<li>
					<h6>
						<a href="#">
							Custom Theme Design
							<span class="badge badge-danger float-xs-right">70%</span>
						</a>
					</h6>
					<progress class="progress progress-danger progress-xs" value="70" max="100"></progress>
				</li>
				<li>
					<h6>
						<a href="#">
							Create Shipping Tags
							<span class="badge badge-warning float-xs-right">60%</span>
						</a>
					</h6>
					<progress class="progress progress-warning progress-xs" value="60" max="100"></progress>
				</li>
				<li>
					<h6>
						<a href="#">
							Send Invitations
							<span class="badge badge-info float-xs-right">40%</span>
						</a>
					</h6>
					<progress class="progress progress-info progress-xs" value="40" max="100"></progress>
				</li>
			</ul>
			<!-- /.control-sidebar-menu -->
		</div>
		<!-- /.tab-pane -->

		<!-- Settings tab content -->
		<div class="tab-pane" id="control-sidebar-settings-tab">
			<form method="post">
				<h5>General Settings</h5>

				<div class="form-check">
					<label class="form-control-label d-block">
						<input type="checkbox" class="form-check-input float-xs-right" checked>
						Report panel usage
					</label>
					<small class='form-text'>Some information about this general settings option</small>
				</div>
				<!-- /.form-check -->
			</form>
		</div>
		<!-- /.tab-pane -->
	</div>
</aside>
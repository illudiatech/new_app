<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-default/libs/summernote/summernote.css?1425218701" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-5/libs/jquery-ui/jquery-ui-theme.css?1423393666" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/theme-5/libs/fullcalendar/fullcalendar.css?1425466619" />


<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li class="active">Calendar</li>
						</ol>
					</div>
					<div class="section-body">
						<div class="row">

							<!-- BEGIN CALENDAR EVENTS -->

							<!-- BEGIN CALENDAR -->
							<div class="col-sm-9">
								<div class="card">
									<div class="card-head style-primary">
										<header>
											<span class="selected-day">Saturday</span> &nbsp;<small class="selected-date">09 January 2016</small>
										</header>
										<div class="tools">
											<div class="btn-group">
												<a id="calender-prev" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-angle-left"></i></a>
												<a id="calender-next" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-angle-right"></i></a>
											</div>
											<div class="btn-group pull-right">
											</div>
										</div>
										<ul class="nav nav-tabs tabs-text-contrast tabs-accent" data-toggle="tabs">
											<li data-mode="month" class="active"><a href="#">Month</a></li>
											<li data-mode="agendaWeek"><a href="#">Week</a></li>
											<li data-mode="agendaDay"><a href="#">Day</a></li>
										</ul>
									</div><!--end .card-head -->
									<div class="card-body no-padding">
										<div id="calendar" class="fc fc-ltr fc-unthemed"><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view"><table><thead><tr><td class="fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody><tr><td class="fc-widget-content"><div class="fc-day-grid-container"><div class="fc-day-grid"><div class="fc-row fc-week fc-widget-content" style="height: 110px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2015-12-27"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2015-12-28"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2015-12-29"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2015-12-30"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2015-12-31"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2016-01-01"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2016-01-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2015-12-27">27</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2015-12-28">28</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2015-12-29">29</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2015-12-30">30</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2015-12-31">31</td><td class="fc-day-number fc-fri fc-past" data-date="2016-01-01">1</td><td class="fc-day-number fc-sat fc-past" data-date="2016-01-02">2</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 110px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2016-01-03"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2016-01-04"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2016-01-05"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2016-01-06"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2016-01-07"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2016-01-08"></td><td class="fc-day fc-widget-content fc-sat fc-today fc-state-highlight" data-date="2016-01-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2016-01-03">3</td><td class="fc-day-number fc-mon fc-past" data-date="2016-01-04">4</td><td class="fc-day-number fc-tue fc-past" data-date="2016-01-05">5</td><td class="fc-day-number fc-wed fc-past" data-date="2016-01-06">6</td><td class="fc-day-number fc-thu fc-past" data-date="2016-01-07">7</td><td class="fc-day-number fc-fri fc-past" data-date="2016-01-08">8</td><td class="fc-day-number fc-sat fc-today fc-state-highlight" data-date="2016-01-09">9</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 110px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-01-10"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-01-11"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-01-12"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-01-13"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-01-14"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-01-15"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-01-16"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-01-10">10</td><td class="fc-day-number fc-mon fc-future" data-date="2016-01-11">11</td><td class="fc-day-number fc-tue fc-future" data-date="2016-01-12">12</td><td class="fc-day-number fc-wed fc-future" data-date="2016-01-13">13</td><td class="fc-day-number fc-thu fc-future" data-date="2016-01-14">14</td><td class="fc-day-number fc-fri fc-future" data-date="2016-01-15">15</td><td class="fc-day-number fc-sat fc-future" data-date="2016-01-16">16</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 110px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-01-17"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-01-18"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-01-19"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-01-20"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-01-21"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-01-22"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-01-23"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-01-17">17</td><td class="fc-day-number fc-mon fc-future" data-date="2016-01-18">18</td><td class="fc-day-number fc-tue fc-future" data-date="2016-01-19">19</td><td class="fc-day-number fc-wed fc-future" data-date="2016-01-20">20</td><td class="fc-day-number fc-thu fc-future" data-date="2016-01-21">21</td><td class="fc-day-number fc-fri fc-future" data-date="2016-01-22">22</td><td class="fc-day-number fc-sat fc-future" data-date="2016-01-23">23</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 110px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-01-24"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2016-01-25"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2016-01-26"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2016-01-27"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2016-01-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2016-01-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2016-01-30"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-01-24">24</td><td class="fc-day-number fc-mon fc-future" data-date="2016-01-25">25</td><td class="fc-day-number fc-tue fc-future" data-date="2016-01-26">26</td><td class="fc-day-number fc-wed fc-future" data-date="2016-01-27">27</td><td class="fc-day-number fc-thu fc-future" data-date="2016-01-28">28</td><td class="fc-day-number fc-fri fc-future" data-date="2016-01-29">29</td><td class="fc-day-number fc-sat fc-future" data-date="2016-01-30">30</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 111px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2016-01-31"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2016-02-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2016-02-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2016-02-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2016-02-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2016-02-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2016-02-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-future" data-date="2016-01-31">31</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2016-02-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2016-02-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2016-02-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2016-02-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2016-02-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2016-02-06">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
									</div><!--end .card-body -->
								</div><!--end .card -->
							</div><!--end .col -->
							<!-- END CALENDAR -->

						</div><!--end .row -->
					</div><!--end .section-body -->
				</section>

		<script src="<?php echo base_url();?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/moment/moment.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/libs/fullcalendar/fullcalendar.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/App.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url();?>assets/js/core/demo/DemoCalendar.js"></script>

@extends('layout.admin')
@section('content-body')
<div class="wrapper">

  @include('components.nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	  <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-primary">
              <h6>
                <span class="text-uppercase">ORDER RECEIVED</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="index.html#">View</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Todays Order</small><p class="font-size-26 mb-0">51,642</p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i> %18 up from<br> last month</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-info">
              <h6>
                <span class="text-uppercase">TAX DEDUCATION</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="index.html#">View</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Monthly Deduction</small><p class="font-size-26 mb-0">$5,354</p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i> 324 more than<br> last year</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->

        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-danger">
              <h6>
                <span class="text-uppercase">REVENUE STATUS</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="index.html#">View</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Weekly Revenue</small><p class="font-size-26 mb-0">$1,642</p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-down-right font-size-18 text-white mr-1"></i> %41 down<br> last year</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-success">
              <h6>
                <span class="text-uppercase">YEARLY SALES</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="index.html#">View</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Yearly Income</small><p class="font-size-26 mb-0">$81,642k</p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i> %37 up<br> last year</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->

      </div>

      <div class="row">

		<div class="col-12 col-lg-6">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Sales Analytics</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="index.html#"></a></li>
                  <li><a class="box-btn-slide" href="index.html#"></a></li>
                  <li><a class="box-btn-fullscreen" href="index.html#"></a></li>
                </ul>
            </div>
            <div class="box-body">
				<ul class="flexbox flex-justified text-center my-10">
					<li class="br-1">
					  <p class="mb-0">Traffic</p>
					  <div class="font-size-20 mb-5">4854,22k</div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+18%</span>
					  </div>
					</li>

					<li class="br-1">
					  <p class="mb-0">Orders</p>
					  <div class="font-size-20 mb-5">854,512k</div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+9%</span>
					  </div>
					</li>

					<li>
					  <p class="mb-0">Revenue</p>
					  <div class="font-size-20 mb-5">4875,84k</div>
					  <div class="font-size-18 text-danger">
					  	<i class="fa fa-arrow-down pr-5"></i><span>-8%</span>
					  </div>
					</li>
				</ul>

				<div class="chart" id="chart_1" style="height: 300px;"></div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


		<div class="col-12 col-lg-6">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Unique Visitors</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="index.html#"></a></li>
                  <li><a class="box-btn-slide" href="index.html#"></a></li>
                  <li><a class="box-btn-fullscreen" href="index.html#"></a></li>
                </ul>
            </div>
            <div class="box-body">
              <div class="chart-responsive">
                <div class="chart" id="bar-chart" style="height: 395px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

		<div class="col-lg-8 col-12">
          <div class="box">
			    <div class="box-header with-border">
				  <h4 class="box-title">Invoice List</h4>
				</div>
            <div class="box-body">
              <div class="table-responsive">
				<table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
					<thead>
						<tr>
							<th>#Invoice</th>
							<th>Description</th>
							<th>Amount</th>
							<th>Status</th>
							<th>Issue</th>
							<th>Due</th>
							<th>View</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>#5010</td>
							<td>Lorem Ipsum</td>
							<td>$548</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5011</td>
							<td>Lorem Ipsum</td>
							<td>$548</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5012</td>
							<td>Lorem Ipsum</td>
							<td>$9658</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5013</td>
							<td>Lorem Ipsum</td>
							<td>$4587</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5014</td>
							<td>Lorem Ipsum</td>
							<td>$856</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5015</td>
							<td>Lorem Ipsum</td>
							<td>$956</td>
							<td><span class="label label-danger">Unpaid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5016</td>
							<td>Lorem Ipsum</td>
							<td>$745</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5017</td>
							<td>Lorem Ipsum</td>
							<td>$953</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5018</td>
							<td>Lorem Ipsum</td>
							<td>$215</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
						<tr>
							<td>#5019</td>
							<td>Lorem Ipsum</td>
							<td>$458</td>
							<td><span class="label label-success">Paid</span> </td>
							<td>12-10-2017</td>
							<td>15-10-2017</td>
							<td>
								<a href="index.html#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>

		<div class="col-12 col-lg-4">
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Top 10 Products</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="index.html#"></a></li>
                  <li><a class="box-btn-slide" href="index.html#"></a></li>
                  <li><a class="box-btn-fullscreen" href="index.html#"></a></li>
                </ul>
            </div>
            <div class="box-body">
			  <div class="flexbox align-items-center">
				 <div><div id="e_chart_3" class="w-200" style="height:200px;"></div></div>
				 <div>
				 	<ul class="list-inline">
					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-primary"></span>
						  <span>iPhone X</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-secondary"></span>
						  <span>Mi tv4 55"</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-success"></span>
						  <span>S9 plus</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-info"></span>
						  <span>Pixal 2</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-warning"></span>
						  <span>Macbook Air</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-danger"></span>
						  <span>iPhone 8 plus</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-purple"></span>
						  <span>Mi Note 7</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-pink"></span>
						  <span>Lg G9</span>
					  </li>

					  <li class="mb-5">
						  <span class="badge badge-dot badge-lg mr-1 badge-yellow"></span>
						  <span>iMac 21"</span>
					  </li>

					  <li>
						  <span class="badge badge-dot badge-lg mr-1 badge-brown"></span>
						  <span>Google Home</span>
					  </li>
					</ul>
				 </div>
			  </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Site Traffic</h4>
					<div class="box-tool pull-right">
						<small class="mt-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>
					</div>
				</div>
				<div class="box-body">
					<ul class="flexbox flex-justified text-center my-20">
						<li class="br-1">
						  <div class="font-size-18">80.40%</div>
						  <small>Overall Growth</small>
						</li>

						<li class="br-1">
						  <div class="font-size-18">15.40%</div>
						  <small>Montly</small>
						</li>

						<li>
						  <div class="font-size-18">5.50%</div>
						  <small>Day</small>
						</li>
					  </ul>
					<div id="sparkline8"><canvas width="484" height="70" style="display: inline-block; width: 484px; height: 70px; vertical-align: top;"></canvas></div>
				</div>
			</div>

        </div>
      </div>
      <!-- /.row -->
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="index.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="index.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-danger"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-info"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-success"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




@stop
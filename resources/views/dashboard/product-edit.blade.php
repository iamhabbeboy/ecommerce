@extends('layout.admin')
@section('content-body')
<!-- Site wrapper -->
<div class="wrapper">

  @include('components.nav')
  <!-- Left side column. contains the logo and sidebar -->
  @include('components.sidebar')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Products to Stock
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="product-edit.html#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="product-edit.html#">e-Commerce</a></li>
        <li class="breadcrumb-item active">Products Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
		  <div class="col-12">
		    <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">About Product</h3>
				</div>
              <div class="box-body">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <p>{{ session('message')}}</p>
                    </div>
                @endif
				<form method="post" action="{{route('add_product')}}" >
                    @csrf
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label class="text-info">Product Name</label>
								  <input type="text" class="form-control" name="title" required>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								{{-- <div class="form-group">
								   <label class="text-info">Sub text</label>
							       <input type="text" class="form-control" placeholder="Lorem Ipsum Text...">
								</div> --}}
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="text-info">Category</label>
									<select class="form-control" tabindex="1" name="category" required>
                                        <option value="">select</option>
                                        @foreach($categories as $category)
										  <option value="{{ array_get($category, 'title')}}"> {{ array_get($category, 'title') }}</option>
                                        @endforeach
									</select>
                  <p></p>
                  <a href="javascript:void" data-toggle="modal" data-target="#modal-default"> click to add category</a>
                    @include('components.modal')
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
                  <input type="hidden" value="publish" name="status">
						{{-- 			<label class="text-info">Status</label>
									<div class="radio-list">
										<label class="radio-inline p-0 mr-10">
											<div class="radio radio-info">
												<input type="radio" name="status" id="radio1" value="publish">
												<label for="radio1">Published</label>
											</div>
										</label>
										<label class="radio-inline">
											<div class="radio radio-info">
												<input type="radio" name="status" id="radio2" value="draft">
												<label for="radio2">Draft</label>
											</div>
										</label>
									</div> --}}
								</div>
							</div>
							<!--/span-->
						</div>
						<!--/row-->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="text-info">Price</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="ti-money"></i></div>
										<input type="text" class="form-control" name="price" required="" placeholder="&#8358;"> </div>
								</div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								{{-- <div class="form-group">
									<label class="text-info">Discount</label>
									<div class="input-group">
										<div class="input-group-addon"><i class="ti-cut"></i></div>
										<input type="text" name="discount" class="form-control" placeholder="50%"> </div>
								</div> --}}
							</div>

							<!--/span-->
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label class="text-info">Product Description</label>
									<textarea class="form-control" rows="4" name="description" required></textarea>
								</div>
							</div>
						</div>
						<!--/row-->
						<div class="row">
						{{-- 	<div class="col-md-6">
								<div class="form-group">
									<label>Meta Title</label>
									<input type="text" class="form-control"> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group">
									<label>Meta Keyword</label>
									<input type="text" class="form-control"> </div>
							</div>
							<!--/span--> --}}
							<div class="col-md-7">
								<h3 class="box-title mt-20">Upload Image</h3>
								<div class="product-img text-left">
									<img src="/images/avatar.jpg" alt="" id="img-preview">
                                    <div id="product-preview"></div>
                                    <div class="row">
                                        <div class="col-md-4">
                                             <div class="btn btn-success btn-sm" id="fileupload-multiple">
                                        <span><i class="ion-upload mr-5"></i>Upload Image</span>
                                    </div>
                                    </div>

                                        </div>
                                    </div>


									{{-- <button class="btn bg-info btn-sm">Edit</button> --}}

								</div>
							</div>
						</div>

					</div>
					<div class="s mt-10">
						<button class="btn btn-success btn-lg"> <i class="fa fa-check"></i> Save</button>
						<button type="button" class="btn btn-danger btn-lg">Cancel</button>
					</div>
				</form>
                <form method="post" enctype="multipart/form-data" id="product-form">
                    <input type="file" id="upload" name="upload" style="visibility: hidden;">
                </form>
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
			<a class="nav-link" href="product-edit.html#">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; 2018 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="product-edit.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="product-edit.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
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

@extends('admin.layout.app')
@section('content')
	<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">CMS
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									</h1>
									
								</div>
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Row-->
								<div class="card">
									<div class="card-header border-0 pt-6">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
												<h1>Add CMS</h1>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										{{-- <div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
												
												<!--begin::Add user-->
												<a class="btn btn-primary" href="">
												
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
												Add User
												</a>
												<!--end::Add user-->
											</div>
											
										</div> --}}
										<!--end::Card toolbar-->
									</div>
									<form action="" method="">
										<div class="row  px-10 py-10 ">
											<div class="col-md-12 mb-10">
												<label for="" class="required form-label">Title</label>
												<input type="text" name="title"class="form-control" placeholder="Title"/>
											</div>
											<div class="col-md-12 mb-10">
												<label for="" class="required form-label">Description</label>
												<textarea name="description" class="form-control ckeditor " placeholder="Term & Condition"></textarea>
													
											</div>
											

											<div class="col-md-12 mb-15">
												<center><a class="btn btn-primary" href="">Submit</a></center>
											</div>	
										</div>
									</form>
								</div>
								
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
@endsection
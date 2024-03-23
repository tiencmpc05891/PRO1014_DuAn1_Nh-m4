<div class=" d-flex flex-column flex-row-fluid" id="kt_wrapper">
	<!--begin::Header-->
	<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
		data-kt-sticky-offset="{default: '200px', lg: '300px'}">
		<!--begin::Container-->
		<div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
				data-kt-swapper="true" data-kt-swapper-mode="prepend"
				data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
				<!--begin::Heading-->
				<h1 class="text-dark fw-bolder my-0 fs-2">Quản lý danh mục</h1>
				<!--end::Heading-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb fw-bold fs-base my-1">
					<li class="breadcrumb-item text-muted">
						<a href="../../demo7/dist/index.html" class="text-muted">Home</a>
					</li>
					<li class="breadcrumb-item text-muted">Quản lý danh mục</li>
					<li class="breadcrumb-item text-dark">Danh sách danh mục</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title=-->
			<!--begin::Wrapper-->
			<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
				<!--begin::Aside mobile toggle-->
				<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
					<span class="svg-icon svg-icon-2x">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path
								d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
								fill="black" />
							<path opacity="0.3"
								d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
								fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Aside mobile toggle-->
				<!--begin::Logo-->
				<a href="../../demo7/dist/index.html" class="d-flex align-items-center">
					<img alt="Logo" src="assets/media/logos/logo-demo7.svg" class="h-30px" />
				</a>
				<!--end::Logo-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Toolbar wrapper-->
			<div class="d-flex flex-shrink-0">
				<!--begin::Invite user-->
				<div class="d-flex ms-3">
					<a href="#"
						class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
						tooltip="New Member" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
						<span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
									transform="rotate(-90 11.364 20.364)" fill="black" />
								<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<span class="d-none d-md-inline">New Member</span>
					</a>
				</div>
				<!--end::Invite user-->
				<!--begin::Create app-->
				<div class="d-flex ms-3">
					<a href="#"
						class="btn btn-flex flex-center bg-body btn-color-gray-700 btn-active-color-primary w-40px w-md-auto h-40px px-0 px-md-6"
						tooltip="New App" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
						id="kt_toolbar_primary_button">
						<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
						<span class="svg-icon svg-icon-2 svg-icon-primary me-0 me-md-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<path opacity="0.3"
									d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
									fill="black" />
								<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<span class="d-none d-md-inline">New App</span>
					</a>
				</div>
				<!--end::Create app-->
				<!--begin::Chat-->
				<div class="d-flex align-items-center ms-3">
					<!--begin::Menu wrapper-->
					<div class="btn btn-icon btn-primary w-40px h-40px pulse pulse-white" id="kt_drawer_chat_toggle">
						<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<path opacity="0.3"
									d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
									fill="black" />
								<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
								<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<span class="pulse-ring"></span>
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Chat-->
			</div>
			<!--end::Toolbar wrapper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Container-->
		<div class="container-xxl" id="kt_content_container">
			<!--begin::Card-->
			<div class="card card-flush">
				<!--begin::Card header-->
				<div class="card-header mt-6">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1 me-5">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-1 position-absolute ms-6">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
										transform="rotate(45 17.0365 15.1223)" fill="black" />
									<path
										d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
										fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" data-kt-permissions-table-filter="search"
								class="form-control form-control-solid w-250px ps-15" placeholder="Tìm kiếm danh mục" />
						</div>
						<!--end::Search-->
					</div>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Button-->
						<a href="index.php?url=addcate"><input type="button" value="Thêm mới danh mục"
								class="btn btn-light-primary">

						</a>
						<!--end::Button-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
								<th class="min-w-125px">Mã danh mục</th>
								<th class="min-w-250px">Tên danh mục</th>
								<th class="min-w-125px">Ngày được tạo</th>
								<th class="text-end min-w-100px">Hành động</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="fw-bold text-gray-600">
							<tr>
								<!--begin::Name=-->
								<td>1</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 1 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>2</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 2 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>3</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 3 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>4</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 4 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>5</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 5 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>6</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 6 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<!--begin::Name=-->
								<td>7</td>
								<!--end::Name=-->
								<!--begin::Assigned to=-->
								<td>
									Danh mục 7 </td>
								<!--end::Assigned to=-->
								<!--begin::Created Date-->
								<td>19 Aug 2021, 8:43 pm</td>
								<!--end::Created Date-->
								<!--begin::Action=-->
								<td class="text-end">
									<!--begin::Update-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
										data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
													fill="black" />
												<path opacity="0.3"
													d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Update-->
									<!--begin::Delete-->
									<button class="btn btn-icon btn-active-light-primary w-30px h-30px"
										data-kt-permissions-table-filter="delete_row">
										<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
													fill="black" />
												<path opacity="0.5"
													d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
													fill="black" />
												<path opacity="0.5"
													d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Delete-->
								</td>
								<!--end::Action=-->
							</tr>

						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
			<!--begin::Modals-->
			<!--begin::Modal - Add permissions-->
			<div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Thêm danh mục</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary"
								data-kt-permissions-modal-action="close">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<form id="kt_modal_add_permission_form" class="form" action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Tên danh mục</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
											data-bs-trigger="hover" data-bs-html="true"
											data-bs-content="Permission names is required to be unique."></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="Điền tên danh mục"
										name="permission_name" />
									<!--end::Input-->
								</div>

								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3"
										data-kt-permissions-modal-action="cancel">Hủy</button>
									<button type="submit" class="btn btn-primary"
										data-kt-permissions-modal-action="submit">
										<span class="indicator-label">Thêm mới</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Add permissions-->
			<!--begin::Modal - Update permissions-->
			<div class="modal fade" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Cập nhật danh mục</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-icon btn-sm btn-active-icon-primary"
								data-kt-permissions-modal-action="close">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="black" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Notice-->
							<!--begin::Notice-->
							<div
								class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
								<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
										<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
											fill="black" />
										<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
											fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-bold">
										<div class="fs-6 text-gray-700">
											<strong class="me-1">Cảnh báo!</strong> Bằng cách chỉnh sửa tên quyền, bạn
											có thể phá
											vỡ chức năng cấp quyền của hệ thống. Hãy đảm bảo bạn hoàn toàn chắc chắn
											trước khi tiếp tục.
										</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
							<!--end::Notice-->
							<!--begin::Form-->
							<form id="kt_modal_update_permission_form" class="form" action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-7">
									<!--begin::Label-->
									<label class="fs-6 fw-bold form-label mb-2">
										<span class="required">Tên danh mục mới</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
											data-bs-trigger="hover" data-bs-html="true"
											data-bs-content="Tên danh mục chỉ có một."></i>
									</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="Điền tên danh mục mới"
										name="permission_name" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center pt-15">
									<button type="reset" class="btn btn-light me-3"
										data-kt-permissions-modal-action="cancel">Hủy</button>
									<button type="submit" class="btn btn-primary"
										data-kt-permissions-modal-action="submit">
										<span class="indicator-label">Cập nhật</span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - Update permissions-->
			<!--end::Modals-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Content-->
	<!--begin::Footer-->
	<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
		<!--begin::Container-->
		<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-gray-400 fw-bold me-1">Created by</span>
				<a href="https://keenthemes.com" target="_blank"
					class="text-muted text-hover-primary fw-bold me-2 fs-6">Keenthemes</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
				<li class="menu-item">
					<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
				</li>
				<li class="menu-item">
					<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Footer-->
</div>
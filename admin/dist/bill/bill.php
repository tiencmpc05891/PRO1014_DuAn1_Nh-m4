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
				<h1 class="text-dark fw-bolder my-0 fs-2">Quản lý đơn hàng</h1>
				<!--end::Heading-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb fw-bold fs-base my-1">
					<li class="breadcrumb-item text-muted">
						<a href="../../demo7/dist/index.html" class="text-muted">Home</a>
					</li>
					<li class="breadcrumb-item text-muted">Quản lý đơn hàng</li>
					<li class="breadcrumb-item text-dark">Danh sách đơn hàng</li>
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
			<div class="card">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-6">
					<!--begin::Card title-->
					<div class="card-title">
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
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
							<input type="text" data-kt-subscription-table-filter="search"
								class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm đơn hàng" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<!--begin::Toolbar-->
						<div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
							<!--begin::Filter-->
							<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
								data-kt-menu-placement="bottom-end">
								<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path
											d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
											fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->Filter</button>
							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 text-dark fw-bolder">Filter Options</div>
								</div>
								<!--end::Header-->
								<!--begin::Separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Separator-->
								<!--begin::Content-->
								<div class="px-7 py-5" data-kt-subscription-table-filter="form">
									<!--begin::Input group-->
									<div class="mb-10">
										<label class="form-label fs-6 fw-bold">Month:</label>
										<select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
											data-placeholder="Select option" data-allow-clear="true"
											data-kt-subscription-table-filter="month" data-hide-search="true">
											<option></option>
											<option value="jan">January</option>
											<option value="feb">February</option>
											<option value="mar">March</option>
											<option value="apr">April</option>
											<option value="may">May</option>
											<option value="jun">June</option>
											<option value="jul">July</option>
											<option value="aug">August</option>
											<option value="sep">September</option>
											<option value="oct">October</option>
											<option value="nov">November</option>
											<option value="dec">December</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<label class="form-label fs-6 fw-bold">Status:</label>
										<select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
											data-placeholder="Select option" data-allow-clear="true"
											data-kt-subscription-table-filter="status" data-hide-search="true">
											<option></option>
											<option value="Active">Active</option>
											<option value="Expiring">Expiring</option>
											<option value="Suspended">Suspended</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<label class="form-label fs-6 fw-bold">Billing Method:</label>
										<select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
											data-placeholder="Select option" data-allow-clear="true"
											data-kt-subscription-table-filter="billing" data-hide-search="true">
											<option></option>
											<option value="Auto-debit">Auto-debit</option>
											<option value="Manual - Credit Card">Manual - Credit Card</option>
											<option value="Manual - Cash">Manual - Cash</option>
											<option value="Manual - Paypal">Manual - Paypal</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="mb-10">
										<label class="form-label fs-6 fw-bold">Product:</label>
										<select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
											data-placeholder="Select option" data-allow-clear="true"
											data-kt-subscription-table-filter="product" data-hide-search="true">
											<option></option>
											<option value="Basic">Basic</option>
											<option value="Basic Bundle">Basic Bundle</option>
											<option value="Teams">Teams</option>
											<option value="Teams Bundle">Teams Bundle</option>
											<option value="Enterprise">Enterprise</option>
											<option value=" Enterprise Bundle">Enterprise Bundle</option>
										</select>
									</div>
									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset"
											class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
											data-kt-menu-dismiss="true"
											data-kt-subscription-table-filter="reset">Reset</button>
										<button type="submit" class="btn btn-primary fw-bold px-6"
											data-kt-menu-dismiss="true"
											data-kt-subscription-table-filter="filter">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Menu 1-->
							<!--end::Filter-->
							<!--begin::Export-->
							<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
								data-bs-target="#kt_subscriptions_export_modal">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
											transform="rotate(90 12.75 4.25)" fill="black" />
										<path
											d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
											fill="black" />
										<path
											d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
											fill="#C4C4C4" />
									</svg>
								</span>
								<!--end::Svg Icon-->Export</button>
							<!--end::Export-->
							<!--begin::Add subscription-->

							<!--end::Add subscription-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Group actions-->
						<div class="d-flex justify-content-end align-items-center d-none"
							data-kt-subscription-table-toolbar="selected">
							<div class="fw-bolder me-5">
								<span class="me-2" data-kt-subscription-table-select="selected_count"></span>Selected
							</div>
							<button type="button" class="btn btn-danger"
								data-kt-subscription-table-select="delete_selected">Delete Selected</button>
						</div>
						<!--end::Group actions-->
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
						<!--begin::Table head-->
						<thead>
							<!--begin::Table row-->
							<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
								<th class="w-10px pe-2">
									<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
										<input class="form-check-input" type="checkbox" data-kt-check="true"
											data-kt-check-target="#kt_subscriptions_table .form-check-input"
											value="1" />
									</div>
								</th>
								<th class="min-w-125px">Mã đơn hàng</th>
								<th class="min-w-125px">Tên khách hang</th>
								<th class="min-w-125px">Sản phẩm</th>
								<th class="min-w-125px">Tổng tiền</th>
								<th class="min-w-125px">Ngày đặt hàng</th>
								<th class="text-end min-w-70px">Hành động</th>
							</tr>
							<!--end::Table row-->
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody class="text-gray-600 fw-bold">
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									2
								</td>
								<td>
									Khách hàng 2
								</td>
								<td>
									Sản phẩm 2
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									3
								</td>
								<td>
									Khách hàng 3
								</td>
								<td>
									Sản phẩm 3
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									4
								</td>
								<td>
									Khách hàng 4
								</td>
								<td>
									Sản phẩm 4
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									5
								</td>
								<td>
									Khách hàng 5
								</td>
								<td>
									Sản phẩm 5
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</td>
								<!--end::Action=-->
							</tr>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="1" />
									</div>
								</td>
								<td>
									1
								</td>
								<td>
									Khách hàng 1
								</td>
								<td>
									Sản phẩm 1
								</td>
								<td>1000000</td>
								<td>Jun 24, 2021</td>
								<td class="text-end">
									<a href="#" class="btn btn-light btn-active-light-primary btn-sm"
										data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path
													d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
										data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">View</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Edit</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" data-kt-subscriptions-table-filter="delete_row"
												class="menu-link px-3">Delete</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
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
			<!--begin::Modal - Adjust Balance-->
			<div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2 class="fw-bolder">Export Subscriptions</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
							<form id="kt_subscriptions_export_form" class="form" action="#">
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="fs-5 fw-bold form-label mb-5">Select Date Range:</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid" placeholder="Pick a date"
										name="date" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="fs-5 fw-bold form-label mb-5">Select Export Format:</label>
									<!--end::Label-->
									<!--begin::Input-->
									<select data-control="select2" data-placeholder="Select a format"
										data-hide-search="true" name="format" class="form-select form-select-solid">
										<option value="excell">Excel</option>
										<option value="pdf">PDF</option>
										<option value="cvs">CVS</option>
										<option value="zip">ZIP</option>
									</select>
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Row-->
								<div class="row fv-row mb-15">
									<!--begin::Label-->
									<label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
									<!--end::Label-->
									<!--begin::Radio group-->
									<div class="d-flex flex-column">
										<!--begin::Radio button-->
										<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
											<input class="form-check-input" type="checkbox" value="1" checked="checked"
												name="payment_type" />
											<span class="form-check-label text-gray-600 fw-bold">All</span>
										</label>
										<!--end::Radio button-->
										<!--begin::Radio button-->
										<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
											<input class="form-check-input" type="checkbox" value="2" checked="checked"
												name="payment_type" />
											<span class="form-check-label text-gray-600 fw-bold">Visa</span>
										</label>
										<!--end::Radio button-->
										<!--begin::Radio button-->
										<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
											<input class="form-check-input" type="checkbox" value="3"
												name="payment_type" />
											<span class="form-check-label text-gray-600 fw-bold">Mastercard</span>
										</label>
										<!--end::Radio button-->
										<!--begin::Radio button-->
										<label class="form-check form-check-custom form-check-sm form-check-solid">
											<input class="form-check-input" type="checkbox" value="4"
												name="payment_type" />
											<span class="form-check-label text-gray-600 fw-bold">American Express</span>
										</label>
										<!--end::Radio button-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Row-->
								<!--begin::Actions-->
								<div class="text-center">
									<button type="reset" id="kt_subscriptions_export_cancel"
										class="btn btn-light me-3">Discard</button>
									<button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
										<span class="indicator-label">Submit</span>
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
			<!--end::Modal - New Card-->
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
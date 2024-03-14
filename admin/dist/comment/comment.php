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
                <h1 class="text-dark fw-bolder my-0 fs-2">Quản lý bình luận</h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../admin/dist/index.html" class="text-muted">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Quản lý bình luận</li>
                    <li class="breadcrumb-item text-dark">Danh sách bình luận</li>
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
                <a href="../../admin/dist/index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="assets/media/logos/logo-admin.svg" class="h-30px" />
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
                            <input type="text" data-kt-user-table-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm sản phẩm" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
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
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-bold">Role:</label>
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            <option value="Sản phẩm 1">Sản phẩm 1</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-bold">Two Step Verification:</label>
                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true"
                                            data-placeholder="Select option" data-allow-clear="true"
                                            data-kt-user-table-filter="two-step" data-hide-search="true">
                                            <option></option>
                                            <option value="Enabled">Enabled</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset"
                                            class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                            data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-bold px-6"
                                            data-kt-menu-dismiss="true"
                                            data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_export_users">
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
                 
                          
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none"
                            data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger"
                                data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Export Product</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
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
                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="role" data-control="select2"
                                                    data-placeholder="Select a role" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bolder">
                                                    <option></option>
                                                    <option value="Sản phẩm 1">Sản phẩm 1</option>
                                                    <option value="Analyst">Analyst</option>
                                                    <option value="Developer">Developer</option>
                                                    <option value="Support">Support</option>
                                                    <option value="Trial">Trial</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-bold form-label mb-2">Select Export
                                                    Format:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2"
                                                    data-placeholder="Select a format" data-hide-search="true"
                                                    class="form-select form-select-solid fw-bolder">
                                                    <option></option>
                                                    <option value="excel">Excel</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="cvs">CVS</option>
                                                    <option value="zip">ZIP</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
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
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bolder">Thêm mới sản phẩm</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                            data-kt-users-modal-action="close">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
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
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                data-kt-scroll-max-height="auto"
                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-bold fs-6 mb-5">Ảnh sản phẩm</label>
                                                    <!--end::Label-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline"
                                                        data-kt-image-input="true"
                                                        style="background-image: url(assets/media/avatars/blank.png)">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url(assets/media/avatars/150-1.jpg);">
                                                        </div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="avatar"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Các loại tệp được phép: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Tên sản phẩm</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="user_name"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Tên sản phẩm" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-bold fs-6 mb-2">Giá</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="price"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Giá tiền" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-7 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold mb-2">
                                                        <span class="required">Danh mục</span>
                                                        <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                            data-bs-toggle="tooltip" title="Country of origination"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select name="cate" aria-label="Danh mục" data-control="cate"
                                                        class="form-select form-select-solid fw-bolder">
                                                        <option value="">Mời chọn danh mục</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">3</option>
                                                        <option value="">4</option>
                                                    </select>
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3"
                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary"
                                                    data-kt-users-modal-action="submit">
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
                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">Mã bình luận</th>
                                <th class="min-w-125px">Mã sản phẩm</th>
                                <th class="min-w-125px">Mã khách hàng</th>
                                <th class="min-w-125px">Bình luận</th>
                                <th class="min-w-125px">Ngày bình luận</th>
                                <th class="text-end min-w-100px">Hành động</th>
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
                                <td>1</td>

                                <td>Mã sản phẩm 1</td>
                                <td>Mã khách hàng 1</td>
                                <td>
                                 Sản phẩm rất tuyệt vời
                                </td>
                                <!--end::Two step=-->
                                <!--begin::Joined-->
                                <td>19 Aug 2021, 8:43 pm</td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
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
                                            <a href="../../admin/dist/apps/user-management/users/view.html"
                                                class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>1</td>

                             <td>Mã sản phẩm 1</td>
                             <td>Mã khách hàng 1</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>2</td>

                             <td>Mã sản phẩm 2</td>
                             <td>Mã khách hàng 2</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>3</td>

                             <td>Mã sản phẩm 3</td>
                             <td>Mã khách hàng 3</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>4</td>

                             <td>Mã sản phẩm 4</td>
                             <td>Mã khách hàng 4</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>5</td>

                             <td>Mã sản phẩm 5</td>
                             <td>Mã khách hàng 5</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>6</td>

                             <td>Mã sản phẩm 7</td>
                             <td>Mã khách hàng 7</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>7</td>

                             <td>Mã sản phẩm 8</td>
                             <td>Mã khách hàng 8</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>1</td>

                             <td>Mã sản phẩm 1</td>
                             <td>Mã khách hàng 1</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>1</td>

                             <td>Mã sản phẩm 1</td>
                             <td>Mã khách hàng 1</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
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
                             <td>1</td>

                             <td>Mã sản phẩm 1</td>
                             <td>Mã khách hàng 1</td>
                             <td>
                              Sản phẩm rất tuyệt vời
                             </td>
                             <!--end::Two step=-->
                             <!--begin::Joined-->
                             <td>19 Aug 2021, 8:43 pm</td>
                             <!--begin::Joined-->
                             <!--begin::Action=-->
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
                                         <a href="../../admin/dist/apps/user-management/users/view.html"
                                             class="menu-link px-3">Edit</a>
                                     </div>
                                     <!--end::Menu item-->
                                     <!--begin::Menu item-->
                                     <div class="menu-item px-3">
                                         <a href="#" class="menu-link px-3"
                                             data-kt-users-table-filter="delete_row">Delete</a>
                                     </div>
                                     <!--end::Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </td>
                             <!--end::Action=-->
                         </tr>


                            <!--end::Table row-->
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
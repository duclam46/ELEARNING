<div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a class="{{ request()->routeIs('users.*') ? 'text-primary' : '' }}"
                                    href="{{ route('users.index') }}" key="t-default">User</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <span class="badge rounded-pill bg-danger float-end" key="t-hot">Hot</span>
                                <i class="bx bx-layout"></i>
                                <span key="t-layouts">Layouts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Vertical</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="layouts-light-sidebar.html" key="t-light-sidebar">Light Sidebar</a>
                                        </li>
                                        <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact
                                                Sidebar</a></li>
                                        <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a>
                                        </li>
                                        <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                                        <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                                        <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored
                                                Sidebar</a></li>
                                        <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                                        <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar
                                                light</a></li>
                                        <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Boxed width</a>
                                        </li>
                                        <li><a href="layouts-hori-preloader.html" key="t-preloader">Preloader</a></li>
                                        <li><a href="layouts-hori-colored-header.html" key="t-colored-topbar">Colored
                                                Header</a></li>
                                        <li><a href="layouts-hori-scrollable.html" key="t-scrollable">Scrollable</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title" key="t-apps">Apps</li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-calendar"></i>
                                <span key="t-dashboards">Calendars</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="calendar.html" key="t-tui-calendar">TUI Calendar</a></li>
                                <li><a href="calendar-full.html" key="t-full-calendar">Full Calendar</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="chat.html" class="waves-effect">
                                <i class="bx bx-chat"></i>
                                <span key="t-chat">Chat</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-filemanager.html" class="waves-effect">
                                <i class="bx bx-file"></i>
                                <span key="t-file-manager">File Manager</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-store"></i>
                                <span key="t-ecommerce">Ecommerce</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                                <li><a href="ecommerce-product-detail.html" key="t-product-detail">Product Detail</a>
                                </li>
                                <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                                <li><a href="ecommerce-customers.html" key="t-customers">Customers</a></li>
                                <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                                <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                                <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                                <li><a href="ecommerce-add-product.html" key="t-add-product">Add Product</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-bitcoin"></i>
                                <span key="t-crypto">Crypto</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="crypto-wallet.html" key="t-wallet">Wallet</a></li>
                                <li><a href="crypto-buy-sell.html" key="t-buy">Buy/Sell</a></li>
                                <li><a href="crypto-exchange.html" key="t-exchange">Exchange</a></li>
                                <li><a href="crypto-lending.html" key="t-lending">Lending</a></li>
                                <li><a href="crypto-orders.html" key="t-orders">Orders</a></li>
                                <li><a href="crypto-kyc-application.html" key="t-kyc">KYC Application</a></li>
                                <li><a href="crypto-ico-landing.html" key="t-ico">ICO Landing</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-envelope"></i>
                                <span key="t-email">Email</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                                <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                                <li>
                                    <a href="javascript: void(0);">
                                        <span key="t-email-templates">Templates</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a>
                                        </li>
                                        <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                        <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-receipt"></i>
                                <span key="t-invoices">Invoices</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-briefcase-alt-2"></i>
                                <span key="t-projects">Projects</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                                <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                                <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-task"></i>
                                <span key="t-tasks">Tasks</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-user-detail"></i>
                                <span key="t-contacts">Contacts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                                <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                                <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-detail"></i>
                                <span key="t-blog">Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect has-arrow">
                                <i class="bx bx-briefcase-alt"></i>
                                <span key="t-jobs">Jobs</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="job-list.html" key="t-job-list">Job List</a></li>
                                <li><a href="job-grid.html" key="t-job-grid">Job Grid</a></li>
                                <li><a href="job-apply.html" key="t-apply-job">Apply Job</a></li>
                                <li><a href="job-details.html" key="t-job-details">Job Details</a></li>
                                <li><a href="job-categories.html" key="t-Jobs-categories">Jobs Categories</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="candidate-list.html" key="t-list">List</a></li>
                                        <li><a href="candidate-overview.html" key="t-overview">Overview</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-title" key="t-pages">Pages</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-user-circle"></i>
                                <span key="t-authentication">Authentication</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="auth-login.html" key="t-login">Login</a></li>
                                <li><a href="auth-login-2.html" key="t-login-2">Login 2</a></li>
                                <li><a href="auth-register.html" key="t-register">Register</a></li>
                                <li><a href="auth-register-2.html" key="t-register-2">Register 2</a></li>
                                <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a></li>
                                <li><a href="auth-recoverpw-2.html" key="t-recover-password-2">Recover Password 2</a>
                                </li>
                                <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>
                                <li><a href="auth-lock-screen-2.html" key="t-lock-screen-2">Lock Screen 2</a></li>
                                <li><a href="auth-confirm-mail.html" key="t-confirm-mail">Confirm Email</a></li>
                                <li><a href="auth-confirm-mail-2.html" key="t-confirm-mail-2">Confirm Email 2</a></li>
                                <li><a href="auth-email-verification.html" key="t-email-verification">Email
                                        verification</a></li>
                                <li><a href="auth-email-verification-2.html" key="t-email-verification-2">Email
                                        Verification 2</a></li>
                                <li><a href="auth-two-step-verification.html" key="t-two-step-verification">Two Step
                                        Verification</a></li>
                                <li><a href="auth-two-step-verification-2.html" key="t-two-step-verification-2">Two Step
                                        Verification 2</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-file"></i>
                                <span key="t-utility">Utility</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" key="t-starter-page">Starter Page</a></li>
                                <li><a href="pages-maintenance.html" key="t-maintenance">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html" key="t-coming-soon">Coming Soon</a></li>
                                <li><a href="pages-timeline.html" key="t-timeline">Timeline</a></li>
                                <li><a href="pages-faqs.html" key="t-faqs">FAQs</a></li>
                                <li><a href="pages-pricing.html" key="t-pricing">Pricing</a></li>
                                <li><a href="pages-404.html" key="t-error-404">Error 404</a></li>
                                <li><a href="pages-500.html" key="t-error-500">Error 500</a></li>
                            </ul>
                        </li>

                        <li class="menu-title" key="t-components">Components</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-tone"></i>
                                <span key="t-ui-elements">UI Elements</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" key="t-alerts">Alerts</a></li>
                                <li><a href="ui-buttons.html" key="t-buttons">Buttons</a></li>
                                <li><a href="ui-cards.html" key="t-cards">Cards</a></li>
                                <li><a href="ui-carousel.html" key="t-carousel">Carousel</a></li>
                                <li><a href="ui-dropdowns.html" key="t-dropdowns">Dropdowns</a></li>
                                <li><a href="ui-grid.html" key="t-grid">Grid</a></li>
                                <li><a href="ui-images.html" key="t-images">Images</a></li>
                                <li><a href="ui-lightbox.html" key="t-lightbox">Lightbox</a></li>
                                <li><a href="ui-modals.html" key="t-modals">Modals</a></li>
                                <li><a href="ui-offcanvas.html" key="t-offcanvas">Offcanvas</a></li>
                                <li><a href="ui-rangeslider.html" key="t-range-slider">Range Slider</a></li>
                                <li><a href="ui-session-timeout.html" key="t-session-timeout">Session Timeout</a></li>
                                <li><a href="ui-progressbars.html" key="t-progress-bars">Progress Bars</a></li>
                                <li><a href="ui-placeholders.html" key="t-placeholders">Placeholders</a></li>
                                <li><a href="ui-sweet-alert.html" key="t-sweet-alert">Sweet-Alert</a></li>
                                <li><a href="ui-tabs-accordions.html" key="t-tabs-accordions">Tabs & Accordions</a></li>
                                <li><a href="ui-typography.html" key="t-typography">Typography</a></li>
                                <li><a href="ui-toasts.html" key="t-toasts">Toasts</a></li>
                                <li><a href="ui-video.html" key="t-video">Video</a></li>
                                <li><a href="ui-general.html" key="t-general">General</a></li>
                                <li><a href="ui-colors.html" key="t-colors">Colors</a></li>
                                <li><a href="ui-rating.html" key="t-rating">Rating</a></li>
                                <li><a href="ui-notifications.html" key="t-notifications">Notifications</a></li>
                                <li><a href="ui-utilities.html" key="t-utilities">Utilities</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bxs-eraser"></i>
                                <span class="badge rounded-pill bg-danger float-end">10</span>
                                <span key="t-forms">Forms</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" key="t-form-elements">Form Elements</a></li>
                                <li><a href="form-layouts.html" key="t-form-layouts">Form Layouts</a></li>
                                <li><a href="form-validation.html" key="t-form-validation">Form Validation</a></li>
                                <li><a href="form-advanced.html" key="t-form-advanced">Form Advanced</a></li>
                                <li><a href="form-editors.html" key="t-form-editors">Form Editors</a></li>
                                <li><a href="form-uploads.html" key="t-form-upload">Form File Upload</a></li>
                                <li><a href="form-xeditable.html" key="t-form-xeditable">Form Xeditable</a></li>
                                <li><a href="form-repeater.html" key="t-form-repeater">Form Repeater</a></li>
                                <li><a href="form-wizard.html" key="t-form-wizard">Form Wizard</a></li>
                                <li><a href="form-mask.html" key="t-form-mask">Form Mask</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-list-ul"></i>
                                <span key="t-tables">Tables</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" key="t-basic-tables">Basic Tables</a></li>
                                <li><a href="tables-datatable.html" key="t-data-tables">Data Tables</a></li>
                                <li><a href="tables-responsive.html" key="t-responsive-table">Responsive Table</a></li>
                                <li><a href="tables-editable.html" key="t-editable-table">Editable Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bxs-bar-chart-alt-2"></i>
                                <span key="t-charts">Charts</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.html" key="t-apex-charts">Apex Charts</a></li>
                                <li><a href="charts-echart.html" key="t-e-charts">E Charts</a></li>
                                <li><a href="charts-chartjs.html" key="t-chartjs-charts">Chartjs Charts</a></li>
                                <li><a href="charts-flot.html" key="t-flot-charts">Flot Charts</a></li>
                                <li><a href="charts-tui.html" key="t-ui-charts">Toast UI Charts</a></li>
                                <li><a href="charts-knob.html" key="t-knob-charts">Jquery Knob Charts</a></li>
                                <li><a href="charts-sparkline.html" key="t-sparkline-charts">Sparkline Charts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-aperture"></i>
                                <span key="t-icons">Icons</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-boxicons.html" key="t-boxicons">Boxicons</a></li>
                                <li><a href="icons-materialdesign.html" key="t-material-design">Material Design</a></li>
                                <li><a href="icons-dripicons.html" key="t-dripicons">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html" key="t-font-awesome">Font Awesome</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-map"></i>
                                <span key="t-maps">Maps</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.html" key="t-g-maps">Google Maps</a></li>
                                <li><a href="maps-vector.html" key="t-v-maps">Vector Maps</a></li>
                                <li><a href="maps-leaflet.html" key="t-l-maps">Leaflet Maps</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-share-alt"></i>
                                <span key="t-multi-level">Multi Level</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-1-1">Level 1.1</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" key="t-level-1-2">Level 1.2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" key="t-level-2-1">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);" key="t-level-2-2">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
</div>

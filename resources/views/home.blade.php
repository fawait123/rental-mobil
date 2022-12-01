<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StrikingDash</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fontawesome.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/footable.standalone.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet"
        href="{{ asset('assets/backend/assets/vendor_assets') }}/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/leaflet.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/line-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/slick.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/star-rating-svg.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/trumbowyg.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor_assets') }}/css/wickedpicker.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend/style.css') }}">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/backend/img') }}/favicon.png">
</head>

<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="{{ asset('assets/backend/img') }}/svg/bars.svg" alt="img"></a>
                <a class="navbar-brand" href="#"><img class="dark"
                        src="{{ asset('assets/backend/img') }}/logo_dark.png" alt="svg"><img class="light"
                        src="{{ asset('assets/backend/img') }}/logo_white.png" alt="img"></a>
                <form action="/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                </form>
                <div class="top-menu">

                    <div class="strikingDash-top-menu position-relative">
                        <ul>
                            <li class="has-subMenu">
                                <a href="#" class="active">Dashboard</a>
                                <ul class="subMenu">
                                    <li>
                                        <a class="active" href="index.html">Social Media</a>
                                    </li>
                                    <li>
                                        <a class="" href="business.html">FineTech /
                                            Business</a>
                                    </li>
                                    <li>
                                        <a class="" href="performance.html">Site
                                            Performance</a>
                                    </li>
                                    <li>
                                        <a class="" href="ecommerce.html">Ecommerce</a>
                                    </li>
                                    <li>
                                        <a class="" href="crm.html">
                                            CRM</a>
                                    </li>
                                    <li>
                                        <a class="" href="sales.html">
                                            Sales Performance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Layouts</a>
                                <ul class="subMenu">
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="light">Light Mode</a>
                                    </li>
                                    <li class="l_sidebar">
                                        <a href="#" data-layout="dark">Dark Mode</a>
                                    </li>
                                    <li class="l_navbar">
                                        <a href="#" data-layout="top">Top Menu</a>
                                    </li>
                                    <li class="l_navbar">
                                        <a href="#" data-layout="side">Side Menu</a>
                                    </li>
                                    <li class="layout">
                                        <a href="../rtl">RTL</a>
                                    </li>
                                    <li class="layout">
                                        <a href="../ltr">LTR</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Apps</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="message-square" class="nav-icon"></span>
                                            <span class="menu-text">Chat</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="shopping-cart" class="nav-icon"></span>
                                            <span class="menu-text">eCommerce</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="products.html" class="">Products</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html" class="">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="add-product.html" class="">Product
                                                    Add</a>
                                            </li>
                                            <li>
                                                <a href="" class="">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="cart.html" class="">Cart</a>
                                            </li>
                                            <li>
                                                <a href="order.html" class="">Orders</a>
                                            </li>
                                            <li>
                                                <a href="sellers.html" class="">Sellers</a>
                                            </li>
                                            <li>
                                                <a href="invoice.html" class="">Invoices</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="mail" class="nav-icon"></span>
                                            <span class="menu-text">Email</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="inbox.html" class="">Inbox</a>
                                            </li>
                                            <li>
                                                <a href="read-email.html" class="">Read
                                                    Email</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="bookmark" class="nav-icon"></span>
                                            <span class="menu-text">Note</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user" class="nav-icon"></span>
                                            <span class="menu-text">Profile</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="profile.html" class="">Profile</a>
                                            </li>
                                            <li>
                                                <a href="profile-setting.html" class="">Profile Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="user-check" class="nav-icon"></span>
                                            <span class="menu-text">Contact</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="contact-1.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a class="" href="contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="chat.html" class="">
                                            <span data-feather="activity" class="nav-icon"></span>
                                            <span class="menu-text">To-Do</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="kanban.html" class="">
                                            <span data-feather="columns" class="nav-icon"></span>
                                            <span class="menu-text">Kanban Board</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="repeat" class="nav-icon"></span>
                                            <span class="menu-text">Import & Export</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="import.html">Import</a>
                                            </li>
                                            <li>
                                                <a class="" href="export.html">Export</a>
                                            </li>
                                            <li>
                                                <a class="" href="export-selected.html">Export Selected
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="file-manager.html" class="">
                                            <span data-feather="file" class="nav-icon"></span>
                                            <span class="menu-text">File Manager</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="task-app.html" class="">
                                            <span data-feather="clipboard" class="nav-icon"></span>
                                            <span class="menu-text">Task App</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                            <li class="has-subMenu">
                                <a href="#" class="">Crud</a>
                                <ul class="subMenu">
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="shopping-cart" class="nav-icon"></span>
                                            <span class="menu-text">Firestore Crud</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="firestore.html">View All</a>
                                            </li>
                                            <li>
                                                <a class="" href="firestore-add.html">Add
                                                    New</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Pages</a>
                                <ul class="megaMenu-wrapper megaMenu-small">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="projects.html" class="">Project</a>
                                            </li>
                                            <li>
                                                <a href="application-ui.html" class="">Project Details</a>
                                            </li>
                                            <li>
                                                <a href="create.html" class="">Create
                                                    Project</a>
                                            </li>
                                            <li>
                                                <a href="users-card.html" class="">Team</a>
                                            </li>
                                            <li>
                                                <a href="users-card2.html" class="">Users</a>
                                            </li>
                                            <li>
                                                <a href="user-info.html" class="">Users
                                                    Info</a>
                                            </li>
                                            <li>
                                                <a href="users-list.html" class="">Users
                                                    List</a>
                                            </li>
                                            <li>
                                                <a href="users-group.html" class="">Users
                                                    Group</a>
                                            </li>
                                            <li>
                                                <a href="banner.html" class="">
                                                    <span class="menu-text">Banners</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="testimonial.html" class="">
                                                    <span class="menu-text">Testimonial</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="support.html" class="">
                                                    <span class="menu-text">Support Center</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dynamic-table.html" class="">
                                                    <span class="menu-text">Dynamic Table</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="users-datatable.html" class="">Users
                                                    Table</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html" class="">Gallery 1</a>
                                            </li>
                                            <li>
                                                <a href="gallery2.html" class="">Gallery 2</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html" class="">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="faq.html" class="">FAQ's</a>
                                            </li>
                                            <li>
                                                <a href="search.html" class="">Search
                                                    Results</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">Coming
                                                    Soon</a>
                                            </li>
                                            <li>
                                                <a href="404.html" class="">404</a>
                                            </li>
                                            <li>
                                                <a href="maintenance.html" class="">
                                                    <span class="menu-text">Maintenance</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login.html" class="">
                                                    <span class="menu-text">Log In</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html" class="">
                                                    <span class="menu-text">Sign Up</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blank.html" class="">
                                                    <span class="menu-text">Blank</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-item has-subMenu">
                                <a href="#" class="">Components</a>
                                <ul class="megaMenu-wrapper megaMenu-wide">
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="alert.html">Alert</a>
                                            </li>
                                            <li>
                                                <a class="" href="avatar.html">Avatar</a>
                                            </li>
                                            <li>
                                                <a class="" href="badge.html">Badge</a>
                                            </li>
                                            <li>
                                                <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                            </li>
                                            <li>
                                                <a class="" href="buttons.html">Button</a>
                                            </li>
                                            <li>
                                                <a class="" href="cards.html">Cards</a>
                                            </li>
                                            <li>
                                                <a class="" href="carousel.html">Carousel</a>
                                            </li>
                                            <li>
                                                <a class="" href="checkbox.html">Checkbox</a>
                                            </li>
                                            <li>
                                                <a class="" href="collapse.html">Collapse</a>
                                            </li>
                                            <li>
                                                <a class="" href="comments.html">Comments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="dashboard-base.html">Dashboard
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="date-picker.html">DatePicker</a>
                                            </li>
                                            <li>
                                                <a class="" href="drawer.html">Drawer</a>
                                            </li>
                                            <li>
                                                <a class="" href="drag-drop.html">Drag &
                                                    Drop</a>
                                            </li>
                                            <li>
                                                <a class="" href="dropdown.html">Dropdown</a>
                                            </li>
                                            <li>
                                                <a class="" href="empty.html">Empty</a>
                                            </li>
                                            <li>
                                                <a class="" href="input.html">Input</a>
                                            </li>
                                            <li>
                                                <a class="" href="list.html">List</a>
                                            </li>
                                            <li>
                                                <a class="" href="menu.html">Menu</a>
                                            </li>
                                            <li>
                                                <a class="" href="message.html">Message</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="modal.html">Modals</a>
                                            </li>
                                            <li>
                                                <a class="" href="notifications.html">Notification</a>
                                            </li>
                                            <li>
                                                <a class="" href="page-header.html">Page
                                                    Headers</a>
                                            </li>
                                            <li>
                                                <a class="" href="pagination.html">Paginations</a>
                                            </li>
                                            <li>
                                                <a class="" href="progressbar.html">Progress</a>
                                            </li>
                                            <li>
                                                <a class="" href="radio.html">Radio</a>
                                            </li>
                                            <li>
                                                <a class="" href="rate.html">Rate</a>
                                            </li>
                                            <li>
                                                <a class="" href="result.html">Result</a>
                                            </li>
                                            <li>
                                                <a class="" href="select.html">Select</a>
                                            </li>
                                            <li>
                                                <a class="" href="skeleton.html">Skeleton</a>
                                            </li>
                                            <li>
                                                <a class="" href="time-picker.html">Timepicker</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="mega-title">Components</span>
                                        <ul>
                                            <li>
                                                <a class="" href="slider.html">Slider</a>
                                            </li>
                                            <li>
                                                <a class="" href="spin.html">Spinner</a>
                                            </li>
                                            <li>
                                                <a class="" href="statistics.html">Statistic</a>
                                            </li>
                                            <li>
                                                <a class="" href="steps.html">Steps</a>
                                            </li>
                                            <li>
                                                <a class="" href="switch.html">Switch</a>
                                            </li>
                                            <li>
                                                <a class="" href="tab.html">Tabs</a>
                                            </li>
                                            <li>
                                                <a class="" href="tag.html">Tags</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline.html">Timeline</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-2.html">Timeline
                                                    2</a>
                                            </li>
                                            <li>
                                                <a class="" href="timeline-3.html">Timeline
                                                    3</a>
                                            </li>
                                            <li>
                                                <a class="" href="uploads.html">Upload</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-subMenu">
                                <a href="#" class="">Features</a>
                                <ul class="subMenu">
                                    <li>
                                        <a href="editors.html" class="">
                                            <span data-feather="edit" class="nav-icon"></span>
                                            <span class="menu-text">Editors</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="grid" class="nav-icon"></span>
                                            <span class="menu-text">Icons</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="feather.html" class="">Feather icons
                                                    (svg)</a>
                                            </li>
                                            <li>
                                                <a href="fontawesome.html" class="">Font
                                                    Awesome</a>
                                            </li>
                                            <li>
                                                <a href="lineawesome.html" class="">Line
                                                    Awesome</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="bar-chart-2" class="nav-icon"></span>
                                            <span class="menu-text">Charts</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="charts.html">Chart JS</a>
                                            </li>
                                            <li>
                                                <a class="" href="google-chart.html">Google
                                                    Charts</a>
                                            </li>
                                            <li>
                                                <a class="" href="peity-chart.html">Peity
                                                    Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="disc" class="nav-icon"></span>
                                            <span class="menu-text">Froms</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="form.html">Basics</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-layouts.html">Layouts</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-elements.html">Elements</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-components.html">Components</a>
                                            </li>
                                            <li>
                                                <a class="" href="form-validations.html">Validations</a>
                                            </li>
                                        </ul>
                                    </li>



                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="map" class="nav-icon"></span>
                                            <span class="menu-text">Maps</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="google-map.html" class="">Google
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="leaflet-map.html" class="">Leaflet
                                                    Maps</a>
                                            </li>
                                            <li>
                                                <a href="vector-map.html" class="">Vector
                                                    Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="server" class="nav-icon"></span>
                                            <span class="menu-text">Widget</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="widget-charts.html">Chart</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a class="" href="widget-card.html">Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="square" class="nav-icon"></span>
                                            <span class="menu-text">Wizards</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a href="checkout-wizard6.html" class="">Wizard
                                                    1</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard7.html" class="">Wizard
                                                    2</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard8.html" class="">Wizard
                                                    3</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard9.html" class="">Wizard
                                                    4</a>
                                            </li>
                                            <li>
                                                <a href="checkout-wizard10.html" class="">Wizard
                                                    5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="">
                                            <span data-feather="book" class="nav-icon"></span>
                                            <span class="menu-text">Knowledge Base</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li>
                                                <a class="" href="knowledgebase.html">Knowledge
                                                    Base</a>
                                            </li>
                                            <li>
                                                <a class="" href="knowledgebase-2.html">All
                                                    Article</a>
                                            </li>

                                            <li>
                                                <a class="" href="knowledgebase-3.html">Single Article</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="text"
                                placeholder="Search...">
                        </form>
                    </li>
                    <li class="nav-message">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="mail"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span
                                        class="badge-circle badge-success ml-1">2</span></h2>
                                <ul>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="{{ asset('assets/backend/img') }}/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline has-new-message">
                                        <div class="user-avater">
                                            <img src="{{ asset('assets/backend/img') }}/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="{{ asset('assets/backend/img') }}/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="{{ asset('assets/backend/img') }}/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="{{ asset('assets/backend/img') }}/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See All Message</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span
                                        class="badge-circle badge-warning ml-1">4</span></h2>
                                <ul>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <span data-feather="inbox"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--secondary">
                                            <span data-feather="upload"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--success">
                                            <span data-feather="log-in"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--info">
                                            <span data-feather="at-sign"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--danger">
                                            <span data-feather="heart"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate"
                                                    style="max-width: 180px;">James</a>
                                                <span>sent you a message</span>
                                            </p>
                                            <p>
                                                <span class="time-posted">5 hours ago</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-notification -->
                    <li class="nav-settings">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="settings"></span></a>
                            <div class="dropdown-wrapper dropdown-wrapper--large">
                                <ul class="list-settings">
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="{{ asset('assets/backend/img') }}/mail.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">All Features</a>
                                            </h6>
                                            <p>Introducing Increment subscriptions </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img
                                                src="{{ asset('assets/backend/img') }}/color-palette.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Themes</a>
                                            </h6>
                                            <p>Third party themes that are compatible</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="{{ asset('assets/backend/img') }}/home.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Payments</a>
                                            </h6>
                                            <p>We handle billions of dollars</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img
                                                src="{{ asset('assets/backend/img') }}/video-camera.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Design Mockups</a>
                                            </h6>
                                            <p>Share planning visuals with clients</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img src="{{ asset('assets/backend/img') }}/document.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Content Planner</a>
                                            </h6>
                                            <p>Centralize content gethering and editing</p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="mr-3"><img
                                                src="{{ asset('assets/backend/img') }}/microphone.png"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h6>
                                                <a href="" class="stretched-link">Diagram Maker</a>
                                            </h6>
                                            <p>Plan user flows & test scenarios</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-settings -->
                    <li class="nav-support">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="help-circle"></span></a>
                            <div class="dropdown-wrapper">
                                <div class="list-group">
                                    <span>Documentation</span>
                                    <ul>
                                        <li>
                                            <a href="">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="">How to use</a>
                                        </li>
                                        <li>
                                            <a href="">The relation of vertical spacing</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Payments</span>
                                    <ul>
                                        <li>
                                            <a href="">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group">
                                    <span>Content Planner</span>
                                    <ul>
                                        <li>
                                            <a href="">How to customize admin</a>
                                        </li>
                                        <li>
                                            <a href="">How to use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-support -->
                    <li class="nav-flag-select">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img
                                    src="{{ asset('assets/backend/img') }}/flag.png" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href=""><img src="{{ asset('assets/backend/img') }}/eng.png"
                                        alt=""> English</a>
                                <a href=""><img src="{{ asset('assets/backend/img') }}/ger.png"
                                        alt=""> German</a>
                                <a href=""><img src="{{ asset('assets/backend/img') }}/spa.png"
                                        alt=""> Spanish</a>
                                <a href=""><img src="{{ asset('assets/backend/img') }}/tur.png"
                                        alt=""> Turkish</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-flag-select -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img
                                    src="{{ asset('assets/backend/img') }}/author-nav.jpg" alt=""
                                    class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="{{ asset('assets/backend/img') }}/author-nav.jpg" alt=""
                                            class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>Abdullah Bin Talha</h6>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="key"></span> Billing</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="" data-toggle="modal" data-target="#modal-info-confirmed"
                                        class="nav-author__signout">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">

        <aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li class="has-child open">
                            <a href="#" class="active">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="active" href="index.html">Social Media</a>
                                </li>
                                <li>
                                    <a class="" href="business.html">FineTech /
                                        Business</a>
                                </li>
                                <li>
                                    <a class="" href="performance.html">Site
                                        Performance</a>
                                </li>
                                <li>
                                    <a class="" href="ecommerce.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a class="" href="crm.html">
                                        CRM</a>
                                </li>
                                <li>
                                    <a class="" href="sales.html">
                                        Sales Performance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="layout" class="nav-icon"></span>
                                <span class="menu-text">Layouts</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class="l_sidebar">
                                    <a href="#" data-layout="light">Light Mode</a>
                                </li>
                                <li class="l_sidebar">
                                    <a href="#" data-layout="dark">Dark Mode</a>
                                </li>
                                <li class="l_navbar">
                                    <a href="#" data-layout="top">Top Menu</a>
                                </li>
                                <li class="l_navbar">
                                    <a href="#" data-layout="side">Side Menu</a>
                                </li>
                                <li class="layout">
                                    <a href="../rtl">RTL</a>
                                </li>
                                <li class="layout">
                                    <a href="../ltr">LTR</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="changelog.html" class="">
                                <span data-feather="activity" class="nav-icon"></span>
                                <span class="menu-text">Changelog</span>
                                <span class="badge badge-primary menuItem">2.1.6</span>
                            </a>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>Applications</span>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="mail" class="nav-icon"></span>
                                <span class="menu-text">Email</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a class="" href="read-email.html">Read
                                        Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chat.html" class="">
                                <span data-feather="message-square" class="nav-icon"></span>
                                <span class="menu-text">Chat</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="shopping-cart" class="nav-icon"></span>
                                <span class="menu-text">eCommerce</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="products.html" class="">Products</a>
                                </li>
                                <li>
                                    <a href="product-details.html" class="">Product Details</a>
                                </li>
                                <li>
                                    <a href="add-product.html" class="">Product Add</a>
                                </li>
                                <li>
                                    <a href="add-product.html" class="">Product
                                        Edit</a>
                                </li>
                                <li>
                                    <a href="cart.html" class="">Cart</a>
                                </li>
                                <li>
                                    <a href="order.html" class="">Orders</a>
                                </li>
                                <li>
                                    <a href="sellers.html" class="">Sellers</a>
                                </li>
                                <li>
                                    <a href="invoice.html" class="">Invoices</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="aperture" class="nav-icon"></span>
                                <span class="menu-text">Social App</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li class="nav-item">
                                    <a href="profile.html" class="">My Profile</a>
                                </li>
                                <li>
                                    <a href="profile-setting.html" class="">Profile Settings<span
                                            class="badge badge-success menuItem">New</span></a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.html#timeline">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.html#activity">Activity</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="target" class="nav-icon"></span>
                                <span class="menu-text">Project</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="projects.html" class="">Project</a>
                                </li>
                                <li>
                                    <a href="application-ui.html" class="">Project Details</a>
                                </li>
                                <li>
                                    <a href="create.html" class="">Create
                                        Project</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html" class="">
                                <span data-feather="calendar" class="nav-icon"></span>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="folder" class="nav-icon"></span>
                                <span class="menu-text">Users</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="users-membar.html" class="">Team</a>
                                </li>
                                <li>
                                    <a href="users-card.html" class="">Users Grid</a>
                                </li>
                                <li>
                                    <a href="users-list.html" class="">Users List</a>
                                </li>
                                <li>
                                    <a href="users-card2.html" class="">Users Grid
                                        style</a>
                                </li>
                                <li>
                                    <a href="users-group.html" class="">Users
                                        Group</a>
                                </li>
                                <li>
                                    <a href="user-info.html" class=""><span
                                            class="badge badge-success menuItem">New</span>Add User</a>
                                </li>
                                <li>
                                    <a href="users-datatable.html" class="">Users
                                        Table</a>
                                </li>

                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="user-check" class="nav-icon"></span>
                                <span class="menu-text">Contact</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="contact-2.html">Contact Grid</a>
                                </li>
                                <li>
                                    <a class="" href="contact-1.html">Contact List</a>
                                </li>
                                <li>
                                    <a class="" href="contact-3.html">Contact
                                        Create</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="note.html" class="">
                                <span data-feather="file-text" class="nav-icon"></span>
                                <span class="menu-text">Note</span>
                            </a>
                        </li>
                        <li>
                            <a href="to-do.html" class="">
                                <span data-feather="check-square" class="nav-icon"></span>
                                <span class="menu-text">To-Do</span>
                            </a>
                        </li>
                        <li>
                            <a href="kanban.html" class="">
                                <span data-feather="columns" class="nav-icon"></span>
                                <span class="menu-text">Kanban Board</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="repeat" class="nav-icon"></span>
                                <span class="menu-text">Import & Export</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="import.html">Import</a>
                                </li>
                                <li>
                                    <a class="" href="export.html">Export</a>
                                </li>
                                <li>
                                    <a class="" href="export-selected.html">Export Selected
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="file-manager.html" class="">
                                <span data-feather="file" class="nav-icon"></span>
                                <span class="menu-text">File Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="task-app.html" class="">
                                <span data-feather="clipboard" class="nav-icon"></span>
                                <span class="menu-text">Task App</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="bookmarks.html" class="">
                                <span data-feather="bookmark" class="nav-icon"></span>
                                <span class="menu-text">Bookmarks<span
                                        class="badge badge-success menuItem">New</span></span>
                            </a>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>CRUD</span>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="database" class="nav-icon"></span>
                                <span class="menu-text">Firestore Crud</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="firestore.html">View All</a>
                                </li>
                                <li>
                                    <a class="" href="firestore-add.html">Add
                                        New</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>Features</span>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="layers" class="nav-icon"></span>
                                <span class="menu-text">UI Elements</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="alert.html">Alert</a>
                                </li>
                                <li>
                                    <a class="" href="avatar.html">Avatar</a>
                                </li>
                                <li>
                                    <a class="" href="badge.html">Badge</a>
                                </li>
                                <li>
                                    <a class="" href="breadcrumbs.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a class="" href="buttons.html">Button</a>
                                </li>
                                <li>
                                    <a class="" href="cards.html">Cards</a>
                                </li>
                                <li>
                                    <a class="" href="carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a class="" href="checkbox.html">Checkbox</a>
                                </li>
                                <li>
                                    <a class="" href="collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a class="" href="comments.html">Comments</a>
                                </li>
                                <li>
                                    <a class="" href="dashboard-base.html">Dashboard
                                        Base</a>
                                </li>
                                <li>
                                    <a class="" href="date-picker.html">DatePicker</a>
                                </li>
                                <li>
                                    <a class="" href="drawer.html">Drawer</a>
                                </li>
                                <li>
                                    <a class="" href="drag-drop.html">Drag & Drop</a>
                                </li>
                                <li>
                                    <a class="" href="dropdown.html">Dropdown</a>
                                </li>
                                <li>
                                    <a class="" href="empty.html">Empty</a>
                                </li>
                                <li>
                                    <a class="" href="grid.html"><span
                                            class="badge badge-success menuItem">New</span>Grid</a>
                                </li>
                                <li>
                                    <a class="" href="input.html">Input</a>
                                </li>
                                <li>
                                    <a class="" href="list.html">List</a>
                                </li>
                                <li>
                                    <a class="" href="menu.html">Menu</a>
                                </li>
                                <li>
                                    <a class="" href="message.html">Message</a>
                                </li>
                                <li>
                                    <a class="" href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a class="" href="notifications.html">Notification</a>
                                </li>
                                <li>
                                    <a class="" href="page-header.html">Page
                                        Headers</a>
                                </li>
                                <li>
                                    <a class="" href="pagination.html">Paginations</a>
                                </li>
                                <li>
                                    <a class="" href="progressbar.html">Progress</a>
                                </li>
                                <li>
                                    <a class="" href="radio.html">Radio</a>
                                </li>
                                <li>
                                    <a class="" href="rate.html">Rate</a>
                                </li>
                                <li>
                                    <a class="" href="result.html">Result</a>
                                </li>
                                <li>
                                    <a class="" href="select.html">Select</a>
                                </li>
                                <li>
                                    <a class="" href="skeleton.html">Skeleton</a>
                                </li>
                                <li>
                                    <a class="" href="slider.html">Slider</a>
                                </li>
                                <li>
                                    <a class="" href="spin.html">Spinner</a>
                                </li>
                                <li>
                                    <a class="" href="statistics.html">Statistic</a>
                                </li>
                                <li>
                                    <a class="" href="steps.html">Steps</a>
                                </li>
                                <li>
                                    <a class="" href="switch.html">Switch</a>
                                </li>
                                <li>
                                    <a class="" href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a class="" href="tag.html">Tags</a>
                                </li>
                                <li>
                                    <a class="" href="timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a class="" href="timeline-2.html">Timeline 2</a>
                                </li>
                                <li>
                                    <a class="" href="timeline-3.html">Timeline 3</a>
                                </li>
                                <li>
                                    <a class="" href="time-picker.html">Timepicker</a>
                                </li>
                                <li>
                                    <a class="" href="uploads.html">Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="bar-chart-2" class="nav-icon"></span>
                                <span class="menu-text">Charts</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="charts.html">Chart JS</a>
                                </li>
                                <li>
                                    <a class="" href="google-chart.html">Google
                                        Charts</a>
                                </li>
                                <li>
                                    <a class="" href="peity-chart.html">Peity
                                        Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="disc" class="nav-icon"></span>
                                <span class="menu-text">Froms</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="form.html">Basics</a>
                                </li>
                                <li>
                                    <a class="" href="form-layouts.html">Layouts</a>
                                </li>
                                <li>
                                    <a class="" href="form-elements.html">Elements</a>
                                </li>
                                <li>
                                    <a class="" href="form-components.html">Components</a>
                                </li>
                                <li>
                                    <a class="" href="form-validations.html">Validations</a>
                                </li>
                            </ul>
                        </li>



                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="cpu" class="nav-icon"></span>
                                <span class="menu-text">Table</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="basic-table.html" class="">Basic
                                        Table</a>
                                </li>
                                <li>
                                    <a href="datatable.html" class="">Data Table</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="server" class="nav-icon"></span>
                                <span class="menu-text">Widget</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="widget-charts.html">Chart</a>
                                </li>
                                <li>
                                    <a class="" href="widget-mixed.html">Mixed</a>
                                </li>
                                <li>
                                    <a class="" href="widget-card.html">Card</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="square" class="nav-icon"></span>
                                <span class="menu-text">Wizards</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="checkout-wizard6.html" class="">Wizard 1</a>
                                </li>
                                <li>
                                    <a href="checkout-wizard7.html" class="">Wizard 2</a>
                                </li>
                                <li>
                                    <a href="checkout-wizard8.html" class="">Wizard 3</a>
                                </li>
                                <li>
                                    <a href="checkout-wizard9.html" class="">Wizard 4</a>
                                </li>
                                <li>
                                    <a href="checkout-wizard10.html" class="">Wizard
                                        5</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="grid" class="nav-icon"></span>
                                <span class="menu-text">Icons</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="feather.html" class="">Feather icons
                                        (svg)</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html" class="">Font
                                        Awesome</a>
                                </li>
                                <li>
                                    <a href="lineawesome.html" class="">Line
                                        Awesome</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="editors.html" class="">
                                <span data-feather="edit" class="nav-icon"></span>
                                <span class="menu-text">Editors</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="map" class="nav-icon"></span>
                                <span class="menu-text">Maps</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="google-map.html" class="">Google Maps</a>
                                </li>
                                <li>
                                    <a href="leaflet-map.html" class="">Leaflet
                                        Maps</a>
                                </li>
                                <li>
                                    <a href="vector-map.html" class="">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title m-top-30">
                            <span>Pages</span>
                        </li>
                        <li>
                            <a href="profile-setting.html" class="">
                                <span data-feather="settings" class="nav-icon"></span>
                                <span class="menu-text">Settings</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="image" class="nav-icon"></span>
                                <span class="menu-text">Gallery</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="gallery.html" class="">Gallery 1</a>
                                </li>
                                <li>
                                    <a href="gallery2.html" class="">Gallery 2<span
                                            class="badge badge-success menuItem">New</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="pricing.html" class="">
                                <span data-feather="dollar-sign" class="nav-icon"></span>
                                <span class="menu-text">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a href="banner.html" class="">
                                <span data-feather="cast" class="nav-icon"></span>
                                <span class="menu-text">Banners</span>
                            </a>
                        </li>
                        <li>
                            <a href="testimonial.html" class="">
                                <span data-feather="book-open" class="nav-icon"></span>
                                <span class="menu-text">Testimonial</span>
                            </a>
                        </li>

                        <li>
                            <a href="faq.html" class="">
                                <span data-feather="help-circle" class="nav-icon"></span>
                                <span class="menu-text">FAQ's</span>
                            </a>
                        </li>

                        <li>
                            <a href="search.html" class="">
                                <span data-feather="search" class="nav-icon"></span>
                                <span class="menu-text">Search Results</span>
                            </a>
                        </li>
                        <li>
                            <a href="blank.html" class="">
                                <span data-feather="circle" class="nav-icon"></span>
                                <span class="menu-text">Blank Page</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="book" class="nav-icon"></span>
                                <span class="menu-text">Knowledge Base</span>
                                <span class="toggle-icon"></span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="knowledgebase.html">Knowledge
                                        Base</a>
                                </li>
                                <li>
                                    <a class="" href="knowledgebase-2.html">All
                                        Article</a>
                                </li>

                                <li>
                                    <a class="" href="knowledgebase-3.html">Single Article</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="support.html" class="">
                                <span data-feather="headphones" class="nav-icon"></span>
                                <span class="menu-text">Support Center</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="dynamic-table.html" class="">
                                <span data-feather="database" class="nav-icon"></span>
                                <span class="menu-text">Dynamic Table</span>
                                <span class="badge badge-success menuItem">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="maintenance.html" class="">
                                <span data-feather="airplay" class="nav-icon"></span>
                                <span class="menu-text">Maintenance</span>
                            </a>
                        </li>
                        <li>
                            <a href="404.html" class="">
                                <span data-feather="alert-circle" class="nav-icon"></span>
                                <span class="menu-text">404</span>
                            </a>
                        </li>
                        <li>
                            <a href="coming-soon.html" class="">
                                <span data-feather="clock" class="nav-icon"></span>
                                <span class="menu-text">Coming Soon</span>
                            </a>
                        </li>
                        <li>
                            <a href="login.html" class="">
                                <span data-feather="user" class="nav-icon"></span>
                                <span class="menu-text">Log In</span>
                            </a>
                        </li>
                        <li>
                            <a href="sign-up.html" class="">
                                <span data-feather="user-plus" class="nav-icon"></span>
                                <span class="menu-text">Sign Up</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <div class="contents">

            <div class="container-fluid">
                <div class="social-dash-wrap">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Social Media Dashboard</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">

                                        <div class="form-group mb-0">
                                            <div class="input-container icon-left position-relative">
                                                <span class="input-icon icon-left">
                                                    <span data-feather="calendar"></span>
                                                </span>
                                                <input type="text"
                                                    class="form-control form-control-default date-ranger"
                                                    name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                                <span class="input-icon icon-right">
                                                    <span data-feather="chevron-down"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle"
                                            type="button" id="dropdownMenu2" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-download"></i> Export
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <span class="dropdown-item">Export With</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-print"></i> Printer</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-pdf"></i> PDF</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-text"></i> Google Sheets</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-file-csv"></i> CSV</a>
                                        </div>
                                    </div>
                                    <div class="dropdown action-btn">
                                        <button class="btn btn-sm btn-default btn-white dropdown-toggle"
                                            type="button" id="dropdownMenu3" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-share"></i> Share
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                            <span class="dropdown-item">Share Link</span>
                                            <div class="dropdown-divider"></div>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-facebook"></i> Facebook</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-twitter"></i> Twitter</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-google"></i> Google</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-feed"></i> Feed</a>
                                            <a href="" class="dropdown-item">
                                                <i class="la la-instagram"></i> Instagram</a>
                                        </div>
                                    </div>
                                    <div class="action-btn">
                                        <a href="" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 mb-25">
                            <div class="social-overview-wrap">

                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6>Social Media Overview</h6>
                                    </div>
                                    <div class="card-body">
                                        <ul class="social-overview">
                                            <li>
                                                <div class="social-box bg-facebook">
                                                    <span class="la la-facebook"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Likes</p>
                                            </li>
                                            <li>
                                                <div class="social-box bg-twitter">
                                                    <span class="la la-twitter"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Followers</p>
                                            </li>
                                            <li>
                                                <div class="social-box gradientInstragram">
                                                    <span class="la la-instagram"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Followers</p>
                                            </li>
                                            <li>
                                                <div class="social-box bg-youtube">
                                                    <span class="la la-youtube"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Subscribers</p>
                                            </li>
                                            <li>
                                                <div class="social-box bg-pinterest">
                                                    <span class="la la-pinterest"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Followers</p>
                                            </li>
                                            <li>
                                                <div class="social-box bg-linkedin">
                                                    <span class="la la-linkedin"></span>
                                                </div>
                                                <h3>5,461</h3>
                                                <p>Followers</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8 mb-25">

                            <div class="card card-overview border-0">
                                <div class="card-header">
                                    <h6>Facebook Overview</h6>
                                    <div class="card-extra">
                                        <div class="card-tab btn-group nav nav-tabs">
                                            <a class="btn btn-xs btn-white active border-light" id="f_today-tab"
                                                data-toggle="tab" href="#f_overview-today" role="tab"
                                                area-controls="f_overview" aria-selected="true">Today</a>
                                            <a class="btn btn-xs btn-white border-light" id="f_week-tab"
                                                data-toggle="tab" href="#f_overview-week" role="tab"
                                                area-controls="f_overview" aria-selected="false">Week</a>
                                            <a class="btn btn-xs btn-white border-light" id="f_month-tab"
                                                data-toggle="tab" href="#f_overview-month" role="tab"
                                                area-controls="f_overview" aria-selected="false">Month</a>
                                            <a class="btn btn-xs btn-white border-light" id="f_year-tab"
                                                data-toggle="tab" href="#f_overview-year" role="tab"
                                                area-controls="f_overview" aria-selected="false">Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0 pb-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="f_overview-today"
                                            role="" aria-labelledby="f_overview-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-overview__left">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>25,845</h1>
                                                                        <p>Engaged Users</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>25%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartOne"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>2,534</h1>
                                                                        <p>Page Impressions</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>40%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartTwo"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-overview__right">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>2,142</h1>
                                                                        <p>Total Page Likes</p>
                                                                        <div>
                                                                            <span class="color-danger"><i
                                                                                    data-feather="trending-down"></i>
                                                                                <strong>15%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartThree"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>1,132</h1>
                                                                        <p>New Page LIke</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>13%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartFour"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="f_overview-week" role=""
                                            aria-labelledby="f_overview-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-overview__left">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>25,845</h1>
                                                                        <p>Engaged Users</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>25%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartFive"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>92,534</h1>
                                                                        <p>Page Impressions</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>26%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartSix"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-overview__right">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>9,142</h1>
                                                                        <p>Total Page Likes</p>
                                                                        <div>
                                                                            <span class="color-danger"><i
                                                                                    data-feather="trending-down"></i>
                                                                                <strong>23%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartSeven"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>432</h1>
                                                                        <p>New Page LIke</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>44%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartEight"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="f_overview-month" role=""
                                            aria-labelledby="f_overview-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-overview__left">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>25,845</h1>
                                                                        <p>Engaged Users</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>25%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartNine"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>492,534</h1>
                                                                        <p>Page Impressions</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>36%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartTen"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-overview__right">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>12,142</h1>
                                                                        <p>Total Page Likes</p>
                                                                        <div>
                                                                            <span class="color-danger"><i
                                                                                    data-feather="trending-down"></i>
                                                                                <strong>13%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartEleven"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>1,432</h1>
                                                                        <p>New Page LIke</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>14%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas id="lineChartTwelve"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="f_overview-year" role=""
                                            aria-labelledby="f_overview-tab">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-overview__left">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>25,845</h1>
                                                                        <p>Engaged Users</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>25%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas
                                                                                    id="lineChartThirteen"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>492,534</h1>
                                                                        <p>Page Impressions</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>36%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas
                                                                                    id="lineChartFourteen"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-overview__right">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>12,142</h1>
                                                                        <p>Total Page Likes</p>
                                                                        <div>
                                                                            <span class="color-danger"><i
                                                                                    data-feather="trending-down"></i>
                                                                                <strong>13%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas
                                                                                    id="lineChartFifteen"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                                <div class="overview-single">





                                                                    <div class="overview-content">
                                                                        <h1>1,432</h1>
                                                                        <p>New Page LIke</p>
                                                                        <div>
                                                                            <span class="color-success"><i
                                                                                    data-feather="trending-up"></i>
                                                                                <strong>14%</strong></span>
                                                                            <small>20,641 (prev)</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="overview-single__chart">
                                                                        <div class="parentContainer">


                                                                            <div>
                                                                                <canvas
                                                                                    id="lineChartSixteen"></canvas>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ends: .row -->
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-25">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Youtube Subscribers</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav">
                                            <li>
                                                <a href="#y_subscriber-week" class="active" data-toggle="tab"
                                                    id="ys_week-tab" role="tab" area-controls="y_subscriber"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#y_subscriber-month" data-toggle="tab" id="ys_month-tab"
                                                    role="tab" area-controls="y_subscriber"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#y_subscriber-year" id="ys_year-tab" data-toggle="tab"
                                                    role="tab" area-controls="y_subscriber"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="y_subscriber-week"
                                            role="tabpanel" aria-labelledby="y_subscriber-week">
                                            <div class="card-chart-bar d-flex justify-content-between">
                                                <div class="card-bar-top">
                                                    <p>Subscribers</p>
                                                    <h3 class="card-bar-info d-flex align-items-end">25,472
                                                        <sub class="color-success">
                                                            <i data-feather="arrow-up"></i> 25%</sub>
                                                    </h3>
                                                </div>
                                                <ul class="legend-static">
                                                    <li class="custom-label">
                                                        <span
                                                            style="background-color: rgb(95, 99, 242);"></span>Gained
                                                    </li>
                                                    <li class="custom-label">
                                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="ys_barChartOne"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="y_subscriber-month" role="tabpanel"
                                            aria-labelledby="y_subscriber-week">
                                            <div class="card-chart-bar d-flex justify-content-between">
                                                <div class="card-bar-top">
                                                    <p>Subscribers</p>
                                                    <h3 class="card-bar-info d-flex align-items-end">75,582
                                                        <sub class="color-success">
                                                            <i data-feather="arrow-up"></i> 45%</sub>
                                                    </h3>
                                                </div>
                                                <ul class="legend-static">
                                                    <li class="custom-label">
                                                        <span
                                                            style="background-color: rgb(95, 99, 242);"></span>Gained
                                                    </li>
                                                    <li class="custom-label">
                                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="ys_barChartTwo"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="y_subscriber-year" role="tabpanel"
                                            aria-labelledby="y_subscriber-week">
                                            <div class="card-chart-bar d-flex justify-content-between">
                                                <div class="card-bar-top">
                                                    <p>Subscribers</p>
                                                    <h3 class="card-bar-info d-flex align-items-end">124,892
                                                        <sub class="color-success">
                                                            <i data-feather="arrow-up"></i> 65%</sub>
                                                    </h3>
                                                </div>
                                                <ul class="legend-static">
                                                    <li class="custom-label">
                                                        <span
                                                            style="background-color: rgb(95, 99, 242);"></span>Gained
                                                    </li>
                                                    <li class="custom-label">
                                                        <span style="background-color: rgb(255, 77, 79);"></span>Lost
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="ys_barChartThree"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-25">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Twitter Overview</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav">
                                            <li>
                                                <a class="active" href="#to_week" data-toggle="tab"
                                                    id="to_week-tab" role="tab" area-controls="to_week"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#to_month" data-toggle="tab" id="to_month-tab"
                                                    role="tab" area-controls="to_month"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#to_year" data-toggle="tab" id="to_year-tab"
                                                    role="tab" area-controls="to_year"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body linechart-overview-wrap">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="to_week" role="tabpanel"
                                            aria-labelledby="to_week-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweets</span>
                                                    <p class="m-0">
                                                        <strong>278</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpOne"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweet Impressions</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTwo"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpThree"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFour"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Retweets</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFive"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="to_month" role="tabpanel"
                                            aria-labelledby="to_month-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweets</span>
                                                    <p class="m-0">
                                                        <strong>378</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpOneM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweet Impressions</span>
                                                    <p class="m-0">
                                                        <strong>88.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTwoM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>4,417</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpThreeM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>7.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFourM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Retweets</span>
                                                    <p class="m-0">
                                                        <strong>10,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFiveM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="to_year" role="tabpanel"
                                            aria-labelledby="to_year-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweets</span>
                                                    <p class="m-0">
                                                        <strong>578</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpOneY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Tweet Impressions</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTwoY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpThreeY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFourY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Retweets</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpFiveY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ends: .card-body -->
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-25">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Instagram Overview</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav">
                                            <li>
                                                <a class="active" href="#io_week" data-toggle="tab"
                                                    id="io_week-tab" role="tab" area-controls="io_week"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#io_month" data-toggle="tab" id="io_month-tab"
                                                    role="tab" area-controls="io_month"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#io_year" data-toggle="tab" id="io_year-tab"
                                                    role="tab" area-controls="io_year"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="card-body linechart-overview-wrap">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="io_week" role="tabpanel"
                                            aria-labelledby="io_week-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>278</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSix"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSeven"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpEight"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpNine"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTen"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="io_month" role="tabpanel"
                                            aria-labelledby="io_month-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>378</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSixM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSevenM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpEightM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpNineM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTenM"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="io_year" role="tabpanel"
                                            aria-labelledby="io_year-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>578</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSixY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpSevenY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpEightY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpNineY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharpTenY"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-4 col-md-6 mb-25">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Linkedin Overview</h6>
                                    <div class="card-extra">
                                        <ul class="card-tab-links nav-tabs nav">
                                            <li>
                                                <a class="active" href="#lo_week" data-toggle="tab"
                                                    id="lo_week-tab" role="tab" area-controls="lo_week"
                                                    aria-selected="true">Week</a>
                                            </li>
                                            <li>
                                                <a href="#lo_month" data-toggle="tab" id="lo_month-tab"
                                                    role="tab" area-controls="lo_week"
                                                    aria-selected="false">Month</a>
                                            </li>
                                            <li>
                                                <a href="#lo_year" data-toggle="tab" id="lo_year-tab"
                                                    role="tab" area-controls="lo_week"
                                                    aria-selected="false">Year</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="card-body linechart-overview-wrap">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="lo_week" role="tabpanel"
                                            aria-labelledby="lo_week-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>178</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp11"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp12"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp13"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp14"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp15"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lo_month" role="tabpanel"
                                            aria-labelledby="lo_month-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>378</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp11M"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp12M"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp13M"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp14M"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp15M"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lo_year" role="tabpanel"
                                            aria-labelledby="lo_year-tab">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Likes</span>
                                                    <p class="m-0">
                                                        <strong>578</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp11Y"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Comments</span>
                                                    <p class="m-0">
                                                        <strong>78.8k</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp12Y"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>New Followers</span>
                                                    <p class="m-0">
                                                        <strong>3,015</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp13Y"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                                <div class="chart-desc">
                                                    <span>Engagement Rates</span>
                                                    <p class="m-0">
                                                        <strong>5.2</strong>
                                                        <sub class="color-success">
                                                            <i class="la la-arrow-up"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp14Y"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between align-items-end">
                                                <div class="chart-desc">
                                                    <span>Total Post</span>
                                                    <p class="m-0">
                                                        <strong>8,625</strong>
                                                        <sub class="color-danger">
                                                            <i class="la la-arrow-down"></i> 14%</sub>
                                                    </p>
                                                </div>
                                                <div class="border-line-chart">
                                                    <div class="parentContainer">


                                                        <div>
                                                            <canvas id="lineChartSharp15Y"></canvas>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-8 mb-25">

                            <div class="card border-0">
                                <div class="card-header">
                                    <h6>Social Traffic Metrics</h6>
                                    <div class="card-extra">
                                        <div class="card-tab btn-group atbd-button-group mr-3 nav nav-tabs">
                                            <a class="btn btn-xs btn-white active border" id="f_today-tab"
                                                data-toggle="tab" href="#st_matrics-today" role="tab"
                                                area-controls="st_matrics" aria-selected="true">Today</a>
                                            <a class="btn btn-xs btn-white border" id="f_week-tab"
                                                data-toggle="tab" href="#st_matrics-week" role="tab"
                                                area-controls="st_matrics" aria-selected="false">Week</a>
                                            <a class="btn btn-xs btn-white border" id="f_month-tab"
                                                data-toggle="tab" href="#st_matrics-month" role="tab"
                                                area-controls="st_matrics" aria-selected="false">Month</a>
                                            <a class="btn btn-xs btn-white border" id="f_year-tab"
                                                data-toggle="tab" href="#st_matrics-year" role="tab"
                                                area-controls="st_matrics" aria-selected="false">Year</a>
                                        </div>
                                        <div class="dropdown dropleft">
                                            <a href="#" role="button" id="Today"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span data-feather="more-horizontal"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="Today">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="st_matrics-today"
                                            role="" aria-labelledby="st_matrics-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-social">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" colspan="3">Acquisition</th>
                                                            <th scope="col" colspan="3">Behavior</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Social Network</td>
                                                            <td>Users</td>
                                                            <td>New Users</td>
                                                            <td>Sessions</td>
                                                            <td>Bounce Rate</td>
                                                            <td>Pages / Sessions</td>
                                                            <td>Avg. Session Duration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Facebook</a>
                                                            </td>
                                                            <td>1,458</td>
                                                            <td>452</td>
                                                            <td>9,235</td>
                                                            <td>25%</td>
                                                            <td>3.9</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Twitter</a>
                                                            </td>
                                                            <td>4,785</td>
                                                            <td>426</td>
                                                            <td>8,156</td>
                                                            <td>-26%</td>
                                                            <td>1.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Linkedin</a>
                                                            </td>
                                                            <td>3,416</td>
                                                            <td>951</td>
                                                            <td>6,124</td>
                                                            <td>56%</td>
                                                            <td>5.3</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Youtube</a>
                                                            </td>
                                                            <td>5,426</td>
                                                            <td>753</td>
                                                            <td>9,147</td>
                                                            <td>15%</td>
                                                            <td>7.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Instagram</a>
                                                            </td>
                                                            <td>6,258</td>
                                                            <td>852</td>
                                                            <td>4,369</td>
                                                            <td>75%</td>
                                                            <td>2.7</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Google+</a>
                                                            </td>
                                                            <td>9,632</td>
                                                            <td>123</td>
                                                            <td>1,256</td>
                                                            <td>46%</td>
                                                            <td>2.6</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="st_matrics-week" role="tabpanel"
                                            aria-labelledby="st_matrics-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-social">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" colspan="3">Acquisition</th>
                                                            <th scope="col" colspan="3">Behavior</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Social Network</td>
                                                            <td>Users</td>
                                                            <td>New Users</td>
                                                            <td>Sessions</td>
                                                            <td>Bounce Rate</td>
                                                            <td>Pages / Sessions</td>
                                                            <td>Avg. Session Duration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Facebook</a>
                                                            </td>
                                                            <td>1,558</td>
                                                            <td>452</td>
                                                            <td>9,235</td>
                                                            <td>27%</td>
                                                            <td>6.9</td>
                                                            <td>00:06:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Twitter</a>
                                                            </td>
                                                            <td>4,585</td>
                                                            <td>426</td>
                                                            <td>8,856</td>
                                                            <td>-26%</td>
                                                            <td>1.5</td>
                                                            <td>00:03:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Linkedin</a>
                                                            </td>
                                                            <td>3,416</td>
                                                            <td>951</td>
                                                            <td>6,124</td>
                                                            <td>56%</td>
                                                            <td>5.3</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Youtube</a>
                                                            </td>
                                                            <td>5,426</td>
                                                            <td>553</td>
                                                            <td>4,647</td>
                                                            <td>20%</td>
                                                            <td>8.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Instagram</a>
                                                            </td>
                                                            <td>62,258</td>
                                                            <td>452</td>
                                                            <td>4,669</td>
                                                            <td>55%</td>
                                                            <td>1.7</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Google+</a>
                                                            </td>
                                                            <td>6,632</td>
                                                            <td>113</td>
                                                            <td>1,956</td>
                                                            <td>56%</td>
                                                            <td>5.6</td>
                                                            <td>00:06:16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="st_matrics-month" role="tabpanel"
                                            aria-labelledby="st_matrics-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-social">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" colspan="3">Acquisition</th>
                                                            <th scope="col" colspan="3">Behavior</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Social Network</td>
                                                            <td>Users</td>
                                                            <td>New Users</td>
                                                            <td>Sessions</td>
                                                            <td>Bounce Rate</td>
                                                            <td>Pages / Sessions</td>
                                                            <td>Avg. Session Duration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Facebook</a>
                                                            </td>
                                                            <td>1,258</td>
                                                            <td>452</td>
                                                            <td>9,235</td>
                                                            <td>25%</td>
                                                            <td>3.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Twitter</a>
                                                            </td>
                                                            <td>4,785</td>
                                                            <td>423</td>
                                                            <td>8,156</td>
                                                            <td>-26%</td>
                                                            <td>1.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Linkedin</a>
                                                            </td>
                                                            <td>3,416</td>
                                                            <td>956</td>
                                                            <td>6,124</td>
                                                            <td>46%</td>
                                                            <td>5.3</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Youtube</a>
                                                            </td>
                                                            <td>5,426</td>
                                                            <td>753</td>
                                                            <td>9,147</td>
                                                            <td>15%</td>
                                                            <td>7.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Instagram</a>
                                                            </td>
                                                            <td>6,258</td>
                                                            <td>852</td>
                                                            <td>4,369</td>
                                                            <td>75%</td>
                                                            <td>2.7</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Google+</a>
                                                            </td>
                                                            <td>9,632</td>
                                                            <td>123</td>
                                                            <td>1,656</td>
                                                            <td>36%</td>
                                                            <td>2.8</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="st_matrics-year" role="tabpanel"
                                            aria-labelledby="st_matrics-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-social">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col" colspan="3">Acquisition</th>
                                                            <th scope="col" colspan="3">Behavior</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Social Network</td>
                                                            <td>Users</td>
                                                            <td>New Users</td>
                                                            <td>Sessions</td>
                                                            <td>Bounce Rate</td>
                                                            <td>Pages / Sessions</td>
                                                            <td>Avg. Session Duration</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Facebook</a>
                                                            </td>
                                                            <td>1,458</td>
                                                            <td>452</td>
                                                            <td>9,245</td>
                                                            <td>35%</td>
                                                            <td>5.9</td>
                                                            <td>00:08:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Twitter</a>
                                                            </td>
                                                            <td>4,285</td>
                                                            <td>424</td>
                                                            <td>8,356</td>
                                                            <td>-25%</td>
                                                            <td>1.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Linkedin</a>
                                                            </td>
                                                            <td>3,416</td>
                                                            <td>951</td>
                                                            <td>6,124</td>
                                                            <td>56%</td>
                                                            <td>5.3</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Youtube</a>
                                                            </td>
                                                            <td>5,426</td>
                                                            <td>753</td>
                                                            <td>9,147</td>
                                                            <td>15%</td>
                                                            <td>7.5</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Instagram</a>
                                                            </td>
                                                            <td>6,258</td>
                                                            <td>852</td>
                                                            <td>4,369</td>
                                                            <td>75%</td>
                                                            <td>2.7</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="">Google+</a>
                                                            </td>
                                                            <td>9,632</td>
                                                            <td>123</td>
                                                            <td>1,256</td>
                                                            <td>46%</td>
                                                            <td>2.6</td>
                                                            <td>00:05:16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2020 @<a href="#">Aazztech</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Team</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>
    {{-- modal --}}
    <div class="modal-info-confirmed modal fade show" id="modal-info-confirmed" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-info" role="document">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-info-body d-flex">
                            <div class="modal-info-icon warning">
                                <span data-feather="info"></span>
                            </div>

                            <div class="modal-info-text">
                                <h6>Apakah anda yakin ingin keluar ? </h6>
                                <p>Keluar Sekarang.</p>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-outlined btn-sm"
                            data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info btn-sm">Ok</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- ends: .modal-info-confirmed -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery/jquery-ui.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/popper.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment/moment.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/accordion.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/autoComplete.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/Chart.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/charts.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/daterangepicker.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/drawer.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicBadge.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/dynamicCheckbox.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/feather.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/footable.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/fullcalendar@5.2.0.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/google-chart.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.filterizr.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.peity.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/jquery.star-rating-svg.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/leaflet.markercluster.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/loader.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/message.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/moment.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/muuri.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/notification.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/popover.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/select2.full.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/trumbowyg.min.js"></script>
    <script src="{{ asset('assets/backend/assets/vendor_assets') }}/js/wickedpicker.min.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/drag-drop.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/footable.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/full-calendar.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/googlemap-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/icon-loader.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/jvectormap-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/leaflet-init.js"></script>
    <script src="{{ asset('assets/backend/assets/theme_assets') }}/js/main.js"></script>
    <!-- endinject-->
</body>

</html>

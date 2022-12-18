<div class="row ">
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>{{ $count_company }}</h1>
                    <p>Total Company</p>
                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">
                        <div>
                            <canvas id="mychart8"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 1 End -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 2 End  -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>{{ $count_transaction }}</h1>
                    <p>Total Transaction</p>
                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">
                        <div>
                            <canvas id="mychart9"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 End  -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 3 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>{{ $count_car }}</h1>
                    <p>Total Car</p>
                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">
                        <div>
                            <canvas id="mychart10"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 End -->
    </div>
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>{{ $count_user }}</h1>
                    <p>Total User</p>
                </div>

            </div>
            <div class="ap-po-timeChart">
                <div class="overview-single__chart d-md-flex align-items-end">
                    <div class="parentContainer">


                        <div>
                            <canvas id="mychart11"></canvas>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Card 1 End -->
    </div>
    <div class="col-xxl-6 mb-30">
        <div class="card broder-0">
            <div class="card-header">
                <h6>Total Revenue</h6>
                <div class="card-extra">
                    <ul class="card-tab-links mr-3 nav-tabs nav" role="tablist">
                        <li>
                            <a href="#tl_revenue-week" data-toggle="tab" id="tl_revenue-week-tab" role="tab"
                                aria-selected="false">Week</a>
                        </li>
                        <li>
                            <a href="#tl_revenue-month" data-toggle="tab" id="tl_revenue-month-tab" role="tab"
                                aria-selected="false">Month</a>
                        </li>
                        <li>
                            <a class="active" href="#tl_revenue-year" data-toggle="tab" id="tl_revenue-year-tab"
                                role="tab" aria-selected="true">Year</a>
                        </li>
                    </ul>
                    <div class="dropdown dropleft">
                        <a href="#" role="button" id="revenue1" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span data-feather="more-horizontal"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="revenue1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-header -->
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                        aria-labelledby="tl_revenue-week-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">$72,848</strong>
                                <span>Current Period</span>
                            </div>
                            <div>
                                <strong>$52,458</strong>
                                <span>Previous Period</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="myChart6W"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                        aria-labelledby="tl_revenue-month-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">$72,848</strong>
                                <span>Current Period</span>
                            </div>
                            <div>
                                <strong>$52,458</strong>
                                <span>Previous Period</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="myChart6M"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel"
                        aria-labelledby="tl_revenue-year-tab">
                        <div class="revenue-labels">
                            <div>
                                <strong class="text-primary">$72,848</strong>
                                <span>Current Period</span>
                            </div>
                            <div>
                                <strong>$52,458</strong>
                                <span>Previous Period</span>
                            </div>
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="myChart6"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .card-body -->
        </div>

    </div>
</div>
<!-- ends: .row -->

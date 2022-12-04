<div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="ap-overview-tab">
    <div class="ap-content-wrapper">
        <div class="row">
            <div class="col-lg-4 mb-25">
                <!-- Card 1 -->
                <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
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
                                    <canvas id="mychart8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 1 End -->
            </div>
            <div class="col-lg-4 mb-25">
                <!-- Card 2 End  -->
                <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>$72,572</h1>
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
            <div class="col-lg-4 mb-25">
                <!-- Card 3 -->
                <div class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                    <div>
                        <div class="overview-content">
                            <h1>1,274</h1>
                            <p>Total Income</p>
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
            <div class="col-lg-12">
                <!-- Statistics Charts -->
                <div class="card">
                    <div class="card-header text-capitalize px-md-25 px-3">
                        <h6>Transaction Statistics</h6>
                        <div class="dropdown">
                            <a href="#" role="button" id="statistics1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span data-feather="more-horizontal"></span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="ap-statistics-charts">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="profile-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Statistics Charts End -->
            </div>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
        <!-- Card 1 -->
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
                    <h1>{{ $count_car }}</h1>
                    <p>Total Car</p>
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
    <div class="col-xxl-3 col-md-12 col-ssm-12 mb-30">
        <!-- Card 3 -->
        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
            <div>
                <div class="overview-content">
                    <h1>Rp. {{ number_format($count_income, 2, ',', '.') }}</h1>
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
    <div class="col-xxl-6 mb-30">
        <div class="card broder-0">
            <div class="card-header">
                <h6>Total Revenue</h6>
                <div class="card-extra">
                </div>
            </div>
            <!-- ends: .card-header -->
            <div class="card-body pt-0">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                        aria-labelledby="tl_revenue-week-tab">
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="mychart8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                        aria-labelledby="tl_revenue-month-tab">
                        <div class="revenue-labels">
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="mychart8"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="tl_revenue-year" role="tabpanel"
                        aria-labelledby="tl_revenue-year-tab">
                        <div class="revenue-labels">
                        </div>
                        <!-- ends: .performance-stats -->

                        <div class="wp-chart">
                            <div class="parentContainer">
                                <div>
                                    <canvas id="mychart88"></canvas>
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


@push('customjs')
    <script>
        $.ajax({
            url: '{{ route('company.cart') }}',
            method: 'get',
            data: {
                type: 'transaction'
            },
            success: function(res) {
                let labelCart = res.map((el) => el.month)
                let dataCart = res.map((el) => el.count)
                console.log(res)
                chartjsLineChartFour(
                    "mychart88",
                    (bcolor = "#FA8B0C"),
                    (height = "250"),
                    (data = dataCart),
                    (data = dataCart),
                    labels = labelCart,
                );
                chartJsBarChartThree("mychart8", "#FF69A520", "#FF69A5", "Transaction", labelCart, dataCart);
            }
        })
        $.ajax({
            url: '{{ route('company.cart') }}',
            method: 'get',
            data: {
                type: 'income'
            },
            success: function(res) {
                let labelCart = res.map((el) => el.month)
                let dataCart = res.map((el) => el.count)
                chartJsBarChartThree("mychart10", "#20C99720", "#20C997", "Avg. Order", labelCart, dataCart);
            }
        })
    </script>
@endpush

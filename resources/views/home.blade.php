<x-layout>
    @if (Auth()->user()->role == 'admin')
        
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <!-- View sales -->
          <div class="col-xl-4 mb-4 col-lg-5 col-12">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-7">
                  <div class="card-body text-nowrap">
                    <h5 class="card-title mb-0">Congratulations John! 🎉</h5>
                    <p class="mb-2">Best seller of the month</p>
                    <h4 class="text-primary mb-1">$48.9k</h4>
                    <a href="javascript:;" class="btn btn-primary">View Sales</a>
                  </div>
                </div>
                <div class="col-5 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                    <img
                      src="../../assets/img/illustrations/card-advance-sale.png"
                      height="140"
                      alt="view sales" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- View sales -->

          <!-- Statistics -->
          <div class="col-xl-8 mb-4 col-lg-7 col-12">
            <div class="card h-100">
              <div class="card-header">
                <div class="d-flex justify-content-between mb-3">
                  <h5 class="card-title mb-0">Statistics</h5>
                  <small class="text-muted">Updated 1 month ago</small>
                </div>
              </div>
              <div class="card-body">
                <div class="row gy-3">
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-primary me-3 p-2">
                        <i class="ti ti-chart-pie-2 ti-sm"></i>
                      </div>
                      <div class="card-info">
                        <h5 class="mb-0">230k</h5>
                        <small>Sales</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2">
                        <i class="ti ti-users ti-sm"></i>
                      </div>
                      <div class="card-info">
                        <h5 class="mb-0">8.549k</h5>
                        <small>Customers</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-danger me-3 p-2">
                        <i class="ti ti-shopping-cart ti-sm"></i>
                      </div>
                      <div class="card-info">
                        <h5 class="mb-0">1.423k</h5>
                        <small>Products</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-success me-3 p-2">
                        <i class="ti ti-currency-dollar ti-sm"></i>
                      </div>
                      <div class="card-info">
                        <h5 class="mb-0">$9745</h5>
                        <small>Revenue</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Statistics -->

          <div class="col-xl-4 col-12">
            <div class="row">
              <!-- Expenses -->
              <div class="col-xl-6 mb-4 col-md-3 col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5 class="card-title mb-0">82.5k</h5>
                    <small class="text-muted">Expenses</small>
                  </div>
                  <div class="card-body">
                    <div id="expensesChart"></div>
                    <div class="mt-md-2 text-center mt-lg-3 mt-3">
                      <small class="text-muted mt-3">$21k Expenses more than last month</small>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Expenses -->

              <!-- Profit last month -->
              <div class="col-xl-6 mb-4 col-md-3 col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Profit</h5>
                    <small class="text-muted">Last Month</small>
                  </div>
                  <div class="card-body">
                    <div id="profitLastMonth"></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                      <h4 class="mb-0">624k</h4>
                      <small class="text-success">+8.24%</small>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Profit last month -->

              <!-- Generated Leads -->
              <div class="col-xl-12 mb-4 col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="d-flex flex-column">
                        <div class="card-title mb-auto">
                          <h5 class="mb-1 text-nowrap">Generated Leads</h5>
                          <small>Monthly Report</small>
                        </div>
                        <div class="chart-statistics">
                          <h3 class="card-title mb-1">4,350</h3>
                          <small class="text-success text-nowrap fw-medium"
                            ><i class="ti ti-chevron-up me-1"></i> 15.8%</small
                          >
                        </div>
                      </div>
                      <div id="generatedLeadsChart"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Generated Leads -->
            </div>
          </div>

          <!-- Revenue Report -->
          <div class="col-12 col-xl-8 mb-4">
            <div class="card">
              <div class="card-body p-0">
                <div class="row row-bordered g-0">
                  <div class="col-md-8 position-relative p-4">
                    <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                      <h5 class="m-0 card-title">Revenue Report</h5>
                    </div>
                    <div id="totalRevenueChart" class="mt-n1"></div>
                  </div>
                  <div class="col-md-4 p-4">
                    <div class="text-center mt-4">
                      <div class="dropdown">
                        <button
                          class="btn btn-sm btn-outline-primary dropdown-toggle"
                          type="button"
                          id="budgetId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <script>
                            document.write(new Date().getFullYear());
                          </script>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                          <a class="dropdown-item prev-year1" href="javascript:void(0);">
                            <script>
                              document.write(new Date().getFullYear() - 1);
                            </script>
                          </a>
                          <a class="dropdown-item prev-year2" href="javascript:void(0);">
                            <script>
                              document.write(new Date().getFullYear() - 2);
                            </script>
                          </a>
                          <a class="dropdown-item prev-year3" href="javascript:void(0);">
                            <script>
                              document.write(new Date().getFullYear() - 3);
                            </script>
                          </a>
                        </div>
                      </div>
                    </div>
                    <h3 class="text-center pt-4 mb-0">$25,825</h3>
                    <p class="mb-4 text-center"><span class="fw-medium">Budget: </span>56,800</p>
                    <div class="px-3">
                      <div id="budgetChart"></div>
                    </div>
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-primary">Increase Button</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Revenue Report -->

          <!-- Earning Reports -->
          <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title mb-0">
                  <h5 class="m-0 me-2">Earning Reports</h5>
                  <small class="text-muted">Weekly Earnings Overview</small>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="earningReports"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  </div>
                </div>
              </div>
              <div class="card-body pb-0">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-primary"
                        ><i class="ti ti-chart-pie-2 ti-sm"></i
                      ></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Net Profit</h6>
                        <small class="text-muted">12.4k Sales</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <small>$1,619</small>
                        <div class="d-flex align-items-center gap-1">
                          <i class="ti ti-chevron-up text-success"></i>
                          <small class="text-muted">18.6%</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-success"
                        ><i class="ti ti-currency-dollar ti-sm"></i
                      ></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Total Income</h6>
                        <small class="text-muted">Sales, Affiliation</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <small>$3,571</small>
                        <div class="d-flex align-items-center gap-1">
                          <i class="ti ti-chevron-up text-success"></i>
                          <small class="text-muted">39.6%</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3">
                    <div class="avatar flex-shrink-0 me-3">
                      <span class="avatar-initial rounded bg-label-secondary"
                        ><i class="ti ti-credit-card ti-sm"></i
                      ></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Total Expenses</h6>
                        <small class="text-muted">ADVT, Marketing</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-3">
                        <small>$430</small>
                        <div class="d-flex align-items-center gap-1">
                          <i class="ti ti-chevron-up text-success"></i>
                          <small class="text-muted">52.8%</small>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div id="reportBarChart"></div>
              </div>
            </div>
          </div>
          <!--/ Earning Reports -->

          <!-- Popular Product -->
          <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0 me-2">
                  <h5 class="m-0 me-2">Popular Products</h5>
                  <small class="text-muted">Total 10.4k Visitors</small>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="popularProduct"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                      <img src="../../assets/img/products/iphone.png" alt="User" class="rounded" width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Apple iPhone 13</h6>
                        <small class="text-muted d-block">Item: #FXZ-4567</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$999.29</p>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                      <img
                        src="../../assets/img/products/nike-air-jordan.png"
                        alt="User"
                        class="rounded"
                        width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Nike Air Jordan</h6>
                        <small class="text-muted d-block">Item: #FXZ-3456</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$72.40</p>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                      <img src="../../assets/img/products/headphones.png" alt="User" class="rounded" width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Beats Studio 2</h6>
                        <small class="text-muted d-block">Item: #FXZ-9485</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$99</p>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                      <img
                        src="../../assets/img/products/apple-watch.png"
                        alt="User"
                        class="rounded"
                        width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Apple Watch Series 7</h6>
                        <small class="text-muted d-block">Item: #FXZ-2345</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$249.99</p>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-4 pb-1">
                    <div class="me-3">
                      <img
                        src="../../assets/img/products/amazon-echo.png"
                        alt="User"
                        class="rounded"
                        width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Amazon Echo Dot</h6>
                        <small class="text-muted d-block">Item: #FXZ-8959</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$79.40</p>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex">
                    <div class="me-3">
                      <img
                        src="../../assets/img/products/play-station.png"
                        alt="User"
                        class="rounded"
                        width="46" />
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Play Station Console</h6>
                        <small class="text-muted d-block">Item: #FXZ-7892</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <p class="mb-0 fw-medium">$129.48</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ Popular Product -->

          <!-- Sales by Countries tabs-->
          <div class="col-md-6 col-xl-4 col-xl-4 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between pb-2 mb-1">
                <div class="card-title mb-1">
                  <h5 class="m-0 me-2">Sales by Countries</h5>
                  <small class="text-muted">62 Deliveries in Progress</small>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="salesByCountryTabs"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="nav-align-top">
                  <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                      <button
                        type="button"
                        class="nav-link active"
                        role="tab"
                        data-bs-toggle="tab"
                        data-bs-target="#navs-justified-new"
                        aria-controls="navs-justified-new"
                        aria-selected="true">
                        New
                      </button>
                    </li>
                    <li class="nav-item">
                      <button
                        type="button"
                        class="nav-link"
                        role="tab"
                        data-bs-toggle="tab"
                        data-bs-target="#navs-justified-link-preparing"
                        aria-controls="navs-justified-link-preparing"
                        aria-selected="false">
                        Preparing
                      </button>
                    </li>
                    <li class="nav-item">
                      <button
                        type="button"
                        class="nav-link"
                        role="tab"
                        data-bs-toggle="tab"
                        data-bs-target="#navs-justified-link-shipping"
                        aria-controls="navs-justified-link-shipping"
                        aria-selected="false">
                        Shipping
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content pb-0">
                    <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                      <ul class="timeline timeline-advance timeline-advance mb-2 pb-1">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Myrtle Ullrich</h6>
                            <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Barry Schowalter</h6>
                            <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                          </div>
                        </li>
                      </ul>
                      <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                      <ul class="timeline timeline-advance mb-0">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Veronica Herman</h6>
                            <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Helen Jacobs</h6>
                            <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                      <ul class="timeline timeline-advance mb-2 pb-1">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Barry Schowalter</h6>
                            <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Myrtle Ullrich</h6>
                            <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959</p>
                          </div>
                        </li>
                      </ul>
                      <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                      <ul class="timeline timeline-advance mb-0">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Veronica Herman</h6>
                            <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Helen Jacobs</h6>
                            <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
                      <ul class="timeline timeline-advance mb-2 pb-1">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Veronica Herman</h6>
                            <p class="text-muted mb-0 text-nowrap">101 Boulder, California(CA), 95959</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Barry Schowalter</h6>
                            <p class="text-muted mb-0 text-nowrap">939 Orange, California(CA),92118</p>
                          </div>
                        </li>
                      </ul>
                      <div class="border-bottom border-bottom-dashed mt-0 mb-4"></div>
                      <ul class="timeline timeline-advance mb-0">
                        <li class="timeline-item ps-4 border-left-dashed">
                          <span class="timeline-indicator timeline-indicator-success">
                            <i class="ti ti-circle-check"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-success text-uppercase fw-medium">sender</small>
                            </div>
                            <h6 class="mb-0">Myrtle Ullrich</h6>
                            <p class="text-muted mb-0 text-nowrap">162 Windsor, California(CA), 95492</p>
                          </div>
                        </li>
                        <li class="timeline-item ps-4 border-transparent">
                          <span class="timeline-indicator timeline-indicator-primary">
                            <i class="ti ti-map-pin"></i>
                          </span>
                          <div class="timeline-event ps-0 pb-0">
                            <div class="timeline-header">
                              <small class="text-primary text-uppercase fw-medium">Receiver</small>
                            </div>
                            <h6 class="mb-0">Helen Jacobs</h6>
                            <p class="text-muted mb-0 text-nowrap">487 Sunset, California(CA), 94043</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Sales by Countries tabs -->

          <!-- Transactions -->
          <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between">
                <div class="card-title m-0 me-2">
                  <h5 class="m-0 me-2">Transactions</h5>
                  <small class="text-muted">Total 58 Transactions done in this Month</small>
                </div>
                <div class="dropdown">
                  <button
                    class="btn p-0"
                    type="button"
                    id="transactionID"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <ul class="p-0 m-0">
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-primary me-3 rounded p-2">
                      <i class="ti ti-wallet ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Wallet</h6>
                        <small class="text-muted d-block">Starbucks</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-danger">-$75</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-success rounded me-3 p-2">
                      <i class="ti ti-browser-check ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Bank Transfer</h6>
                        <small class="text-muted d-block">Add Money</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-success">+$480</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-danger rounded me-3 p-2">
                      <i class="ti ti-brand-paypal ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Paypal</h6>
                        <small class="text-muted d-block mb-1">Client Payment</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-success">+$268</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-secondary me-3 rounded p-2">
                      <i class="ti ti-credit-card ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Master Card</h6>
                        <small class="text-muted d-block mb-1">Ordered iPhone 13</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-danger">-$699</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-info me-3 rounded p-2">
                      <i class="ti ti-currency-dollar ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Bank Transactions</h6>
                        <small class="text-muted d-block mb-1">Refund</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-success">+$98</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex mb-3 pb-1 align-items-center">
                    <div class="badge bg-label-danger me-3 rounded p-2">
                      <i class="ti ti-brand-paypal ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Paypal</h6>
                        <small class="text-muted d-block mb-1">Client Payment</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-success">+$126</h6>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="badge bg-label-success me-3 rounded p-2">
                      <i class="ti ti-browser-check ti-sm"></i>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                      <div class="me-2">
                        <h6 class="mb-0">Bank Transfer</h6>
                        <small class="text-muted d-block mb-1">Pay Office Rent</small>
                      </div>
                      <div class="user-progress d-flex align-items-center gap-1">
                        <h6 class="mb-0 text-danger">-$1290</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--/ Transactions -->

          <!-- Invoice table -->
          <div class="col-xl-8">
            <div class="card">
              <div class="table-responsive card-datatable">
                <table class="table datatable-invoice border-top">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ID</th>
                      <th><i class="ti ti-trending-up text-secondary"></i></th>
                      <th>Total</th>
                      <th>Issued Date</th>
                      <th>Invoice Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
          <!-- /Invoice table -->
        </div>
      </div>
    @else
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Sales last year -->
                <div class="col-xl-2 col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Sales</h5>
                            <small class="text-muted">Last Year</small>
                        </div>
                        <div id="salesLastYear"></div>
                        <div class="card-body pt-0">
                            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                <h4 class="mb-0">175k</h4>
                                <small class="text-danger">-16.2%</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sessions Last month -->
                <div class="col-xl-2 col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5 class="card-title mb-0">Sessions</h5>
                            <small class="text-muted">Last Month</small>
                        </div>
                        <div class="card-body">
                            <div id="sessionsLastMonth"></div>
                            <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                <h4 class="mb-0">45.1k</h4>
                                <small class="text-success">+12.6%</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Profit -->
                <div class="col-xl-2 col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="badge p-2 bg-label-danger mb-2 rounded">
                                <i class="ti ti-currency-dollar ti-md"></i>
                            </div>
                            <h5 class="card-title mb-1 pt-2">Total Profit</h5>
                            <small class="text-muted">Last week</small>
                            <p class="mb-2 mt-1">1.28k</p>
                            <div class="pt-1">
                                <span class="badge bg-label-secondary">-12.2%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Sales -->
                <div class="col-xl-2 col-md-4 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i>
                            </div>
                            <h5 class="card-title mb-1 pt-2">Total Sales</h5>
                            <small class="text-muted">Last week</small>
                            <p class="mb-2 mt-1">$4,673</p>
                            <div class="pt-1">
                                <span class="badge bg-label-secondary">+25.2%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Revenue Growth -->
                <div class="col-xl-4 col-md-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-column">
                                    <div class="card-title mb-auto">
                                        <h5 class="mb-1 text-nowrap">Revenue Growth</h5>
                                        <small>Weekly Report</small>
                                    </div>
                                    <div class="chart-statistics">
                                        <h3 class="card-title mb-1">$4,673</h3>
                                        <span class="badge bg-label-success">+15.2%</span>
                                    </div>
                                </div>
                                <div id="revenueGrowth"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earning Reports Tabs-->
                <div class="col-12 col-xl-8 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Earning Reports</h5>
                                <small class="text-muted">Yearly Earnings Overview</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="earningReportsTabsId"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap"
                                role="tablist">
                                <li class="nav-item">
                                    <a href="javascript:void(0);"
                                        class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id"
                                        aria-controls="navs-orders-id" aria-selected="true">
                                        <div class="badge bg-label-secondary rounded p-2">
                                            <i class="ti ti-shopping-cart ti-sm"></i>
                                        </div>
                                        <h6 class="tab-widget-title mb-0 mt-2">Orders</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);"
                                        class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id"
                                        aria-controls="navs-sales-id" aria-selected="false">
                                        <div class="badge bg-label-secondary rounded p-2">
                                            <i class="ti ti-chart-bar ti-sm"></i>
                                        </div>
                                        <h6 class="tab-widget-title mb-0 mt-2">Sales</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);"
                                        class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id"
                                        aria-controls="navs-profit-id" aria-selected="false">
                                        <div class="badge bg-label-secondary rounded p-2">
                                            <i class="ti ti-currency-dollar ti-sm"></i>
                                        </div>
                                        <h6 class="tab-widget-title mb-0 mt-2">Profit</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);"
                                        class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id"
                                        aria-controls="navs-income-id" aria-selected="false">
                                        <div class="badge bg-label-secondary rounded p-2">
                                            <i class="ti ti-chart-pie-2 ti-sm"></i>
                                        </div>
                                        <h6 class="tab-widget-title mb-0 mt-2">Income</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);"
                                        class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                        role="tab" data-bs-toggle="tab" aria-selected="false">
                                        <div class="badge bg-label-secondary rounded p-2"><i
                                                class="ti ti-plus ti-sm"></i></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content p-0 ms-0 ms-sm-2">
                                <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                                    <div id="earningReportsTabsOrders"></div>
                                </div>
                                <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                                    <div id="earningReportsTabsSales"></div>
                                </div>
                                <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                                    <div id="earningReportsTabsProfit"></div>
                                </div>
                                <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                                    <div id="earningReportsTabsIncome"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales last 6 months -->
                <div class="col-md-6 col-xl-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Sales</h5>
                                <small class="text-muted">Last 6 Months</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="salesLastMonthMenu"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesLastMonthMenu">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="salesLastMonth"></div>
                        </div>
                    </div>
                </div>

                <!-- Browser States -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title m-0 me-2">
                                <h5 class="m-0 me-2">Browser States</h5>
                                <small class="text-muted">Counter April 2022</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome" height="28"
                                        class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Google Chrome</h6>
                                            </div>

                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">90.4%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="secondary" data-series="85"></div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img src="../../assets/img/icons/brands/safari.png" alt="Safari" height="28"
                                        class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Apple Safari</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">70.6%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="success" data-series="70"></div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox"
                                        height="28" class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Mozilla Firefox</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">35.5%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="primary" data-series="25"></div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img src="../../assets/img/icons/brands/opera.png" alt="Opera" height="28"
                                        class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Opera Mini</h6>
                                            </div>

                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">80.0%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="danger" data-series="75"></div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1 align-items-center">
                                    <img src="../../assets/img/icons/brands/edge.png" alt="Edge" height="28"
                                        class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Internet Explorer</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">62.2%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="info" data-series="60"></div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="../../assets/img/icons/brands/brave.png" alt="Brave" height="28"
                                        class="me-3 rounded" />
                                    <div class="d-flex w-100 align-items-center gap-2">
                                        <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div>
                                                <h6 class="mb-0">Brave</h6>
                                            </div>
                                            <div class="user-progress d-flex align-items-center gap-2">
                                                <h6 class="mb-0">46.3%</h6>
                                            </div>
                                        </div>
                                        <div class="chart-progress" data-color="warning" data-series="45"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Project Status -->
                <div class="col-12 col-xl-4 mb-4 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="mb-0 card-title">Project Status</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="projectStatusId"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatusId">
                                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="badge rounded bg-label-warning p-2 me-3 rounded">
                                    <i class="ti ti-currency-dollar ti-sm"></i>
                                </div>
                                <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                                    <div class="me-2">
                                        <h6 class="mb-0">$4,3742</h6>
                                        <small class="text-muted">Your Earnings</small>
                                    </div>
                                    <p class="mb-0 text-success">+10.2%</p>
                                </div>
                            </div>
                            <div id="projectStatusChart"></div>
                            <div class="d-flex justify-content-between mb-3">
                                <h6 class="mb-0">Donates</h6>
                                <div class="d-flex">
                                    <p class="mb-0 me-3">$756.26</p>
                                    <p class="mb-0 text-danger">-139.34</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3 pb-1">
                                <h6 class="mb-0">Podcasts</h6>
                                <div class="d-flex">
                                    <p class="mb-0 me-3">$2,207.03</p>
                                    <p class="mb-0 text-success">+576.24</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Projects -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <div class="card-title mb-0">
                                <h5 class="mb-0">Active Project</h5>
                                <small class="text-muted">Average 72% Completed</small>
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="activeProjects" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/laravel-logo.png" alt="laravel-logo"
                                            class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">Laravel</h6>
                                            <small class="text-muted">eCommerce</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 54%"
                                                aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">54%</span>
                                    </div>
                                </li>
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/figma-logo.png" alt="figma-logo"
                                            class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">Figma</h6>
                                            <small class="text-muted">App UI Kit</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 86%" aria-valuenow="86" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">86%</span>
                                    </div>
                                </li>
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/vue-logo.png" alt="vue-logo"
                                            class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">VueJs</h6>
                                            <small class="text-muted">Calendar App</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">90%</span>
                                    </div>
                                </li>
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/react-logo.png" alt="react-logo"
                                            class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">React</h6>
                                            <small class="text-muted">Dashboard</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                                aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">37%</span>
                                    </div>
                                </li>
                                <li class="mb-3 pb-1 d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/bootstrap-logo.png"
                                            alt="bootstrap-logo" class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">Bootstrap</h6>
                                            <small class="text-muted">Website</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">22%</span>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="d-flex w-50 align-items-center me-3">
                                        <img src="../../assets/img/icons/brands/sketch-logo.png" alt="sketch-logo"
                                            class="me-3" width="35" />
                                        <div>
                                            <h6 class="mb-0">Sketch</h6>
                                            <small class="text-muted">Website Design</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-grow-1 align-items-center">
                                        <div class="progress w-100 me-3" style="height: 8px">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 29%" aria-valuenow="29" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-muted">29%</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Last Transaction -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title m-0 me-2">Last Transaction</h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="teamMemberList"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless border-top">
                                <thead class="border-bottom">
                                    <tr>
                                        <th>CARD</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                        <th>TREND</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="me-3">
                                                    <img src="../../assets/img/icons/payments/visa-img.png"
                                                        alt="Visa" height="30" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 fw-medium">*4230</p>
                                                    <small class="text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 fw-medium">Sent</p>
                                                <small class="text-muted text-nowrap">17 Mar 2022</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success">Verified</span></td>
                                        <td>
                                            <p class="mb-0 fw-medium">+$1,678</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="me-3">
                                                    <img src="../../assets/img/icons/payments/master-card-img.png"
                                                        alt="Visa" height="30" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 fw-medium">*5578</p>
                                                    <small class="text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 fw-medium">Sent</p>
                                                <small class="text-muted text-nowrap">12 Feb 2022</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-danger">Rejected</span></td>
                                        <td>
                                            <p class="mb-0 fw-medium">-$839</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="me-3">
                                                    <img src="../../assets/img/icons/payments/american-express-img.png"
                                                        alt="Visa" height="30" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 fw-medium">*4567</p>
                                                    <small class="text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 fw-medium">Sent</p>
                                                <small class="text-muted text-nowrap">28 Feb 2022</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-success">Verified</span></td>
                                        <td>
                                            <p class="mb-0 fw-medium">+$435</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="me-3">
                                                    <img src="../../assets/img/icons/payments/visa-img.png"
                                                        alt="Visa" height="30" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 fw-medium">*5699</p>
                                                    <small class="text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 fw-medium">Sent</p>
                                                <small class="text-muted text-nowrap">8 Jan 2022</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-secondary">Pending</span></td>
                                        <td>
                                            <p class="mb-0 fw-medium">+$2,345</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center">
                                                <div class="me-3">
                                                    <img src="../../assets/img/icons/payments/visa-img.png"
                                                        alt="Visa" height="30" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0 fw-medium">*5699</p>
                                                    <small class="text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0 fw-medium">Sent</p>
                                                <small class="text-muted text-nowrap">8 Jan 2022</small>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-label-danger">Rejected</span></td>
                                        <td>
                                            <p class="mb-0 fw-medium">-$234</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Activity Timeline -->
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center">
                                <i class="ti ti-list-details ms-n1 me-2"></i> Activity Timeline
                            </h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="timelineWapper"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                                    <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <ul class="timeline ms-1 mb-0">
                                <li class="timeline-item timeline-item-transparent ps-4">
                                    <span class="timeline-point timeline-point-warning"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">Client Meeting</h6>
                                            <small class="text-muted">Today</small>
                                        </div>
                                        <p class="mb-2">Project meeting with john @10:15am</p>
                                        <div class="d-flex flex-wrap">
                                            <div class="avatar me-2">
                                                <img src="../../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                <span>CEO of Infibeam</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent ps-4">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">Create a new project for client</h6>
                                            <small class="text-muted">2 Day Ago</small>
                                        </div>
                                        <p class="mb-0">Add files to new design folder</p>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent ps-4">
                                    <span class="timeline-point timeline-point-info"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">Shared 2 New Project Files</h6>
                                            <small class="text-muted">6 Day Ago</small>
                                        </div>
                                        <p class="mb-2">Sent by Mollie Dixon</p>
                                        <div class="d-flex flex-wrap gap-2 pt-1">
                                            <a href="javascript:void(0)" class="me-3 d-flex align-items-center">
                                                <i class="ti ti-file-text text-warning me-2 ti-xs"></i>
                                                <span class="fw-medium text-heading">App Guidelines</span>
                                            </a>
                                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                                <i class="ti ti-table text-success me-2 ti-xs"></i>
                                                <span class="fw-medium text-heading">Testing Results</span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent ps-4 border-transparent">
                                    <span class="timeline-point timeline-point-secondary"></span>
                                    <div class="timeline-event pb-0">
                                        <div class="timeline-header">
                                            <h6 class="mb-0">Project status updated</h6>
                                            <small class="text-muted">10 Day Ago</small>
                                        </div>
                                        <p class="mb-0">Woocommerce iOS App Completed</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-layout>

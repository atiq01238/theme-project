<div class="row mb-6 g-6">
          <div class="col-xl-8 col-lg-6">
            <div class="bg-gradient-mixed p-8 py-10 rounded-3 p-lg-7">
              <!--heading-->
              <h1 class="fs-3">👋 Hello {{ Auth::user()->name }}</h1>
              <p class="mb-0">Welcome to your E-commerce Dashboard! Monitor your sales,</p>
              <p>track your progress, and gain valuable insights.</p>
              <a href="#!" class="btn btn-dark">Start AI</a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <!-- card -->
            <div class="card card-lg">
              <!-- card body -->
              <div class="card-body">
                <div class="mb-4 position-relative py-2">
                  <div>
                    <h5 class="mb-1">Ideas for You</h5>
                  </div>
                  <!-- swiper navigation-->
                  <div class="swiper-navigation position-absolute top-50 end-10 me-4 me-lg-8 me-xl-4">
                    <div class="swiper-button-prev ms-n3"></div>
                    <div class="swiper-button-next ms-6"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <!-- swiper -->
                    <div class="swiper-container swiper" id="swiper-1" data-pagination-type="" data-speed="900"
                      data-space-between="100" data-pagination="false" data-navigation="true" data-autoplay="false"
                      data-autoplay-delay="2000"
                      data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}, "1200": {"slidesPerView": 1}}'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div>
                            <h4>Create a Blog Post for your product</h4>

                            <div>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
                            </div>
                            <div class="mt-4">
                              <a href="#!" class="btn btn-white btn-sm">Read Now</a>
                            </div>
                          </div>
                        </div>


                        <!-- Add more slides as needed -->
                      </div>
                      <!-- Add Pagination -->
                      <div class="swiper-pagination"></div>
                      <!-- Add Navigation -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row row-cols-1 row-cols-xl-3 row-cols-md-3 mb-6 g-6">
          <div class="col">
            <!-- card -->
            <div class="card card-lg">
              <!-- card body -->
              <div class="card-body d-flex flex-column gap-8">
                <div class="d-flex align-items-center gap-3">
                  <div class="icon-shape icon-lg rounded-circle bg-warning-darker text-warning-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                      <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                      <path d="M17 17h-11v-14h-2" />
                      <path d="M6 5l14 1l-1 7h-13" />
                    </svg>
                  </div>
                  <div>Orders</div>
                </div>
                <div class="d-flex justify-content-between align-items-center lh-1">
                  <div class="fs-3 fw-bold">5,312</div>
                  <div class="text-success small">
                    <span>2.29%</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 17l6 -6l4 4l8 -8" />
                        <path d="M14 7l7 0l0 7" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <!-- card -->
            <div class="card card-lg">
              <!-- card body -->
              <div class="card-body d-flex flex-column gap-8">
                <div class="d-flex align-items-center gap-3">
                  <div class="icon-shape icon-lg rounded-circle bg-success-darker text-success-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-coin">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                      <path d="M12 7v10" />
                    </svg>
                  </div>
                  <div>Revenue</div>
                </div>
                <div class="d-flex justify-content-between align-items-center lh-1">
                  <div class="fs-3 fw-bold">$120,000</div>
                  <div class="text-warning small">
                    <span>2.19%</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-up">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 17l6 -6l4 4l8 -8" />
                        <path d="M14 7l7 0l0 7" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <!-- card -->
            <div class="card card-lg">
              <!-- card body -->
              <div class="card-body d-flex flex-column gap-8">
                <div class="d-flex align-items-center gap-3">
                  <div class="icon-shape icon-lg rounded-circle bg-info-darker text-info-lighter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                      <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                    </svg>
                  </div>
                  <div>Conversion Rate</div>
                </div>
                <div class="d-flex justify-content-between align-items-center lh-1">
                  <div class="fs-3 fw-bold">3.5%</div>
                  <div class="text-danger small">
                    <span>3.19%</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trending-down">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7l6 6l4 -4l8 8" />
                        <path d="M21 10l0 7l-7 0" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row g-6 mb-6">
          <div class="col-xl-8 col-12">
            <!-- card -->
            <div class="card card-lg">
              <!--  card body -->
              <div class="card-body d-flex flex-column gap-5">
                <div class="mb-4">
                  <!-- heading -->
                  <h5 class="mb-0">Revenue</h5>
                </div>
                <div class="bg-gray-100 p-3 rounded-3">
                  <ul class="nav nav-pills-white nav-fill" id="chartTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="current-week-tab" data-bs-toggle="pill"
                        data-bs-target="#current-week" type="button" role="tab" aria-controls="current-week"
                        aria-selected="true">
                        <span class="d-flex flex-column">
                          <span class="d-flex align-items-center gap-2">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                  d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                              </svg></span><span>Total Income</span>
                          </span>
                          <span class="text-start fs-3 fw-semibold mt-2">$120,000</span>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="past-week-tab" data-bs-toggle="pill" data-bs-target="#past-week"
                        type="button" role="tab" aria-controls="past-week" aria-selected="false">
                        <span class="d-flex flex-column">
                          <span class="d-flex align-items-center gap-2">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                                fill="currentColor"
                                class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-warning">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                  d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                              </svg></span><span>Total expenses</span>
                          </span>
                          <span class="text-start fs-3 fw-semibold mt-2">$198,214</span>
                        </span>
                      </button>
                    </li>
                  </ul>
                </div>

                <div class="tab-content" id="chartTabsContent">
                  <div class="tab-pane fade show active" id="current-week" role="tabpanel"
                    aria-labelledby="current-week-tab">
                    <div id="totalIncomeChart"></div>
                  </div>
                  <div class="tab-pane fade" id="past-week" role="tabpanel" aria-labelledby="past-week-tab">
                    <div id="totalExpensesChart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-12">
            <!-- card -->
            <div class="card card-lg">
              <!-- card body -->
              <div class="card-body">
                <!-- heading -->
                <h5 class="mb-6">Product Sales</h5>
                <div id="totalSale" class="d-flex justify-content-center"></div>
                <!-- table -->
                <table class="table table-sm table-borderless mb-0 mt-5">
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                              fill="currentColor"
                              class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                            </svg>
                          </span>
                          <span class="ms-1">Smartphones</span>
                        </div>
                      </td>
                      <td class="d-flex justify-content-end gap-2">
                        <span> $22,120 </span>
                        <span class="text-secondary">38.1%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                              fill="currentColor"
                              class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-warning">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                            </svg>
                          </span>
                          <span class="ms-1">Laptops</span>
                        </div>
                      </td>
                      <td class="d-flex justify-content-end gap-2">
                        <span> $4510 </span>
                        <span class="text-secondary">28.6%</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                              fill="currentColor"
                              class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-info">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                            </svg>
                          </span>
                          <span class="ms-1">Headphones</span>
                        </div>
                      </td>
                      <td class="d-flex justify-content-end gap-2">
                        <span> $800 </span>
                        <span class="text-secondary"> 23.8% </span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                              fill="currentColor"
                              class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-danger">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path
                                d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                            </svg>
                          </span>
                          <span class="ms-1">Cameras</span>
                        </div>
                      </td>
                      <td class="d-flex justify-content-end gap-2">
                        <span> $420 </span>
                        <span class="text-secondary"> 9.5% </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row g-6 mb-6">
          <div class="col-xl-8">
            <!-- card -->
            <div class="card card-lg">
              <!-- card header -->
              <div class="card-header border-bottom-0">
                <div>
                  <h5 class="mb-0">Orders</h5>
                </div>
              </div>
              <!-- table -->
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 table-centered table-hover">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Amount</th>
                      <th>Shipping Method</th>
                      <th>Delivery Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#DU005</td>
                      <td>$150</td>
                      <td>Standard</td>
                      <td>Jan 20, 2025</td>
                      <td><span class="badge text-info-emphasis bg-info-subtle">Shipped</span></td>
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                    <tr>
                      <td>#DU004</td>
                      <td>$200</td>
                      <td>Express</td>
                      <td>Jan 22, 2025</td>
                      <td><span class="badge text-warning-emphasis bg-warning-subtle">Pending</span></td>
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                    <tr>
                      <td>#DU003</td>
                      <td>$300</td>
                      <td>Overnight</td>
                      <td>Jan 18, 2025</td>
                      <td><span class="badge text-danger-emphasis bg-danger-subtle">Cancel</span></td>
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                    <tr>
                      <td>#DU002</td>
                      <td>$560</td>
                      <td>Overnight</td>
                      <td>Jan 13, 2025</td>
                      <td><span class="badge text-success-emphasis bg-success-subtle">Completed</span></td>
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                    <tr>
                      <td>#DU002</td>
                      <td>$560</td>
                      <td>Overnight</td>
                      <td>Jan 11, 2025</td>
                      <td><span class="badge text-success-emphasis bg-success-subtle">Completed</span></td>
                      <td><a href="#!" class="btn btn-white btn-sm">View</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <!-- card -->
            <div class="card card-lg">
              <!--  card body -->
              <div class="card-body">
                <!-- heading -->
                <h5 class="mb-6">Revenue by Location</h5>
                <div id="map-world" style="width: 100%; height: 250px"></div>
                <div class="d-flex flex-column gap-2">
                  <div>
                    <div class="d-flex justify-content-between align-items-center">
                      <span>United States</span>
                      <span>$22,120</span>
                    </div>
                    <div class="progress mt-1" style="height: 6px">
                      <div class="progress-bar" role="progressbar" aria-label="Example 1px high" style="width: 45%"
                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex justify-content-between align-items-center">
                      <span>India</span>
                      <span>$12,756</span>
                    </div>
                    <div class="progress mt-1" style="height: 6px">
                      <div class="progress-bar bg-success" role="progressbar" aria-label="Example 1px high"
                        style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex justify-content-between align-items-center">
                      <span>United Kingdom</span>
                      <span>$8,864</span>
                    </div>
                    <div class="progress mt-1" style="height: 6px">
                      <div class="progress-bar bg-info" role="progressbar" aria-label="Example 1px high"
                        style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex justify-content-between align-items-center">
                      <span>Sweden</span>
                      <span>$6,124</span>
                    </div>
                    <div class="progress mt-1" style="height: 6px">
                      <div class="progress-bar bg-warning" role="progressbar" aria-label="Example 1px high"
                        style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

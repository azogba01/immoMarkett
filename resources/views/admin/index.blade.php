@extends('admin.app')
       @section('admincontent')
       <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
              <div class="card card-secondary">
                <span class="card-body d-lg-flex align-items-center">
                  <p class="mb-lg-0">Une variete de biens publiee !!! cliquer pour les explorer </p>
                  <a href="{{url('/')}}" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Allez-y</a>
                  <button class="close popup-dismiss ml-2">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </span>
              </div>
            </div> 
          </div>
          <div class="row">
            {{-- <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sessions by channel</h4>
                  <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                      <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                      <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                    </div>
                  </div>
                  <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                    <div class="d-flex">
                      <span class="square-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2">Assigned</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-success ml-2"></span>
                      <p class="mb-0 ml-2">Not Assigned</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-warning ml-2"></span>
                      <p class="mb-0 ml-2">Reassigned</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>  --}}
            {{-- <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body performane-indicator-card">
                  <div class="d-sm-flex">
                    <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                    <p class="m-sm-0 ml-sm-auto flex-shrink-0">
                      <span class="data-time-range ml-0">7d</span>
                      <span class="data-time-range active">2w</span>
                      <span class="data-time-range">1m</span>
                      <span class="data-time-range">3m</span>
                      <span class="data-time-range">6m</span>
                    </p>
                  </div>
                  <div class="d-sm-flex flex-wrap">
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-primary ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-info ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>
                    </div>
                  </div>
                  <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- Quick Action Toolbar Starts-->
          {{-- <div class="row quick-action-toolbar">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-header d-block d-md-flex">
                  <h5 class="mb-0">Quick Actions</h5>
                  <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                </div>
                <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Add Client</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Quote</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Enter Payment</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- Quick Action Toolbar Ends-->
          {{-- <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row report-inner-cards-wrapper">
                    <div class=" col-md -6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">EXPENSE</span>
                        <h4>$32123</h4>
                        <span class="report-count"> 2 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-success">
                        <i class="icon-rocket"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">PURCHASE</span>
                        <h4>95,458</h4>
                        <span class="report-count"> 3 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-danger">
                        <i class="icon-briefcase"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">QUANTITY</span>
                        <h4>2650</h4>
                        <span class="report-count"> 5 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-warning">
                        <i class="icon-globe-alt"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">RETURN</span>
                        <h4>25,542</h4>
                        <span class="report-count"> 9 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-primary">
                        <i class="icon-diamond"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          {{-- <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row income-expense-summary-chart-text">
                    <div class="col-xl-4">
                      <h5>Income And Expenses Summary</h5>
                      <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                    </div>
                    <div class=" col-md-3 col-xl-2">
                      <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>
                      <h3>$ 1,766.00</h3>
                    </div>
                    <div class="col-md-3 col-xl-2">
                      <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>
                      <h3>$ 5,698.30</h3>
                    </div>
                    <div class="col-md-6 col-xl-4 d-flex align-items-center">
                      <div class="input-group" id="income-expense-summary-chart-daterange">
                        <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                        <input type="text" class="form-control">
                        <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="row income-expense-summary-chart mt-3">
                    <div class="col-md-12">
                      <div class="ct-chart" id="income-expense-summary-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">Inventaire des abonnements</h4>
                    {{-- <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a> --}}
                  </div>
                  <div class="table-responsive border rounded p-1">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="font-weight-bold">Num </th>
                          <th class="font-weight-bold">Nom </th>
                          <th class="font-weight-bold">Role</th>
                          <th class="font-weight-bold">abonnement</th>
                          <th class="font-weight-bold">Prix</th>
                          <th class="font-weight-bold">Duree</th>
                          <th class="font-weight-bold">Temps restant</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($usersWithSubscription  as $user)
                     <td>{{$user->role}}</td>
                  <td>{{$user->abonn_type}}</td>
                  <td>{{$user->prix}}</td>
                  <td>{{$user->duree}}</td>
                  <td>{{$user->temps}}</td>
                      <td><a href="/categoryedit/{{$user->id}}"><button class="btn btn-success" onclick="return confirm('voulez vous modifier l\'element en question')">Modifier</button></a>
                    <td>
                    <form action="/categories/{{$user->id}}" method="POST">
                       @csrf
                       @method('delete')
                       <button class="btn btn-danger" type="submit" onclick="return confirm('voulez vous supprimer l\'element en question')" >Supprimer</button> 
                    </form>  
                  </td>
               @endforeach
                      </tbody>
                        
                    </table>
                  </div>
                  <div class="d-flex mt-4 flex-wrap">
                    {{-- <p class="text-muted">Showing 1 to 10 of 57 entries</p> --}}
                    <nav class="ml-auto">
                      <ul class="pagination separated pagination-info">
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
       @endsection 

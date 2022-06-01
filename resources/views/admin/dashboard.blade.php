@extends('admin/layout')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">overview</h2>
                <!-- <button class="au-btn au-btn-icon au-btn--blue">
                    <i class="zmdi zmdi-plus"></i>add item</button> -->
            </div>
        </div>
    </div>
    <div class="row m-t-25">
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c1">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                        <div class="text">
                            <h2>604,368</h2>
                            <span>total members</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="widgetChart1" height="162" style="display: block; height: 130px; width: 200px;" width="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c2">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>
                        <div class="text">
                            <h2>388,688</h2>
                            <span>Packages sold</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="widgetChart2" height="143" style="display: block; height: 115px; width: 200px;" width="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c3">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                        <div class="text">
                            <h2>237,086</h2>
                            <span>this week</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="widgetChart3" height="143" style="display: block; height: 115px; width: 200px;" width="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="overview-item overview-item--c4">
                <div class="overview__inner">
                    <div class="overview-box clearfix">
                        <div class="icon">
                            <i class="zmdi zmdi-money"></i>
                        </div>
                        <div class="text">
                            <h2>$1,060,386</h2>
                            <span>total earnings</span>
                        </div>
                    </div>
                    <div class="overview-chart">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="widgetChart4" height="143" style="display: block; height: 115px; width: 200px;" width="250" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="au-card recent-report">
                <div class="au-card-inner">
                    <h3 class="title-2">recent reports</h3>
                    <div class="chart-info">
                        <div class="chart-info__left">
                            <div class="chart-note">
                                <span class="dot dot--blue"></span>
                                <span>Free Customers</span>
                            </div>
                            <div class="chart-note mr-0">
                                <span class="dot dot--green"></span>
                                <span>Paid Customers</span>
                            </div>
                        </div>
                        <div class="chart-info__right">
                            <div class="chart-statis">
                                <span class="index incre">
                                    <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                <span class="label">Free Customers</span>
                            </div>
                            <div class="chart-statis mr-0">
                                <span class="index decre">
                                    <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                <span class="label">Paid Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="recent-report__chart">
                        <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="recent-rep-chart" height="312" style="display: block; height: 250px; width: 475px;" width="593" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="au-card chart-percent-card">
                <div class="au-card-inner">
                    <h3 class="title-2 tm-b-5">char by %</h3>
                    <div class="row no-gutters">
                        <div class="col-xl-6">
                            <div class="chart-note-wrap">
                                <div class="chart-note mr-0 d-block">
                                    <span class="dot dot--blue"></span>
                                    <span>Free Customer</span>
                                </div>
                                <div class="chart-note mr-0 d-block">
                                    <span class="dot dot--red"></span>
                                    <span>Paid Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="percent-chart">
                                <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div>
                                <canvas id="percent-chart" height="350" style="display: block; height: 280px; width: 172px;" width="215" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <h2 class="title-1 m-b-25">Packages Sold (Detailed)</h2>
            <div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>date</th>
                            <th>order ID</th>
                            <th>order by</th>
                            <th class="text-right">package name</th>
                            <th class="text-right">price</th>
                            <th class="text-right">slug (with link)</th>
                            <th class="text-right">view</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>100398</td>
                            <td>Jwell hungry</td>
                            <td class="text-right">$999.00</td>
                            <td class="text-right">1</td>
                            <td class="text-right">$999.00</td>
                            <td> 
                                <a href="#" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>100398</td>
                            <td>Jwell hungry</td>
                            <td class="text-right">$999.00</td>
                            <td class="text-right">1</td>
                            <td class="text-right">$999.00</td>
                            <td> 
                                <a href="#" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>100398</td>
                            <td>Jwell hungry</td>
                            <td class="text-right">$999.00</td>
                            <td class="text-right">1</td>
                            <td class="text-right">$999.00</td>
                            <td> 
                                <a href="#" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>100398</td>
                            <td>Jwell hungry</td>
                            <td class="text-right">$999.00</td>
                            <td class="text-right">1</td>
                            <td class="text-right">$999.00</td>
                            <td> 
                                <a href="#" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>100398</td>
                            <td>Jwell hungry</td>
                            <td class="text-right">$999.00</td>
                            <td class="text-right">1</td>
                            <td class="text-right">$999.00</td>
                            <td> 
                                <a href="#" target="_blank" class="btn btn-success">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3">
            <h2 class="title-1 m-b-25">Top countries</h2>
            <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                <div class="au-card-inner">
                    <div class="table-responsive">
                        <table class="table table-top-countries">
                            <tbody>
                                <tr>
                                    <td>United States</td>
                                    <td>Client Count</td>
                                    
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td>Client Count</td>
                                   
                                </tr>
                                <tr>
                                    <td>United Kingdom</td>
                                    <td>Client Count</td>
                                    
                                </tr>
                                <tr>
                                    <td>Turkey</td>
                                    <td>Client Count</td>
                                    
                                </tr>
                                <tr>
                                    <td>Germany</td>
                                    <td>Client Count</td>
                                    
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 <a href="http://buggbear.com">Buggbear</a> . All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
@endsection
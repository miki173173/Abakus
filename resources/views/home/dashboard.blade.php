
@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <!-- statustic-card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total User</p>
                                                <h4 class="m-b-0">852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Student</p>
                                                <h4 class="m-b-0">10K</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Total Score Subject</p>
                                                <h4 class="m-b-0">420</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">GPA</p>
                                                <h4 class="m-b-0">3.60</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- statustic-card start -->
                            <div class="col-xl-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-left ">
                                            <h5>Monthly View</h5>
                                            <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                        </div>
                                    </div>
                                    <div class="card-block-big">
                                        <div id="monthly-graph" style="height: 250px; overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 977px; height: 250px; padding: 0px; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 977px; height: 250px; top: -0.203125px; left: -0.203125px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L976.5,0.5 L976.5,249.5 L0.5,249.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-bg"></path><path cs="100,100" d="M0.5,0.5 L895.5,0.5 L895.5,199.5 L0.5,199.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" class="amcharts-plot-area" transform="translate(71,20)"></path></g><g><g class="amcharts-category-axis" transform="translate(71,20)"><g><path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M0.5,199.5 L0.5,199.5 L0.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M60.5,0.5 L60.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M60.5,199.5 L60.5,199.5 L60.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M119.5,0.5 L119.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M119.5,199.5 L119.5,199.5 L119.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M179.5,0.5 L179.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M179.5,199.5 L179.5,199.5 L179.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M239.5,0.5 L239.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M239.5,199.5 L239.5,199.5 L239.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M298.5,0.5 L298.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M298.5,199.5 L298.5,199.5 L298.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M358.5,0.5 L358.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M358.5,199.5 L358.5,199.5 L358.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M418.5,0.5 L418.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M418.5,199.5 L418.5,199.5 L418.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M477.5,0.5 L477.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M477.5,199.5 L477.5,199.5 L477.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M537.5,0.5 L537.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M537.5,199.5 L537.5,199.5 L537.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M597.5,0.5 L597.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M597.5,199.5 L597.5,199.5 L597.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M656.5,0.5 L656.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M656.5,199.5 L656.5,199.5 L656.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M716.5,0.5 L716.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M716.5,199.5 L716.5,199.5 L716.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M776.5,0.5 L776.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M776.5,199.5 L776.5,199.5 L776.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M835.5,0.5 L835.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M835.5,199.5 L835.5,199.5 L835.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g><g><path cs="100,100" d="M895.5,0.5 L895.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(0,199)" class="amcharts-axis-tick"></path><path cs="100,100" d="M895.5,199.5 L895.5,199.5 L895.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#FFFFFF" class="amcharts-axis-grid"></path></g></g><g class="amcharts-value-axis value-axis-a1" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a2" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(71,20)" visibility="visible"></g></g><g></g><g></g><g></g><g></g><g><g transform="translate(71,20)" class="amcharts-graph-column amcharts-graph-g1"><g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(6,199)" visibility="visible" aria-label="distance Jan 01, 2012 227"><path cs="100,100" d="M0.5,0.5 L0.5,-10.5 L48.5,-10.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(66,199)" visibility="visible" aria-label="distance Jan 02, 2012 371"><path cs="100,100" d="M0.5,0.5 L0.5,-67.5 L48.5,-67.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(125,199)" visibility="visible" aria-label="distance Jan 03, 2012 433"><path cs="100,100" d="M0.5,0.5 L0.5,-92.5 L48.5,-92.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(185,199)" visibility="visible" aria-label="distance Jan 04, 2012 345"><path cs="100,100" d="M0.5,0.5 L0.5,-57.5 L48.5,-57.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(245,199)" visibility="visible" aria-label="distance Jan 05, 2012 480"><path cs="100,100" d="M0.5,0.5 L0.5,-110.5 L48.5,-110.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(304,199)" visibility="visible" aria-label="distance Jan 06, 2012 386"><path cs="100,100" d="M0.5,0.5 L0.5,-73.5 L48.5,-73.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(364,199)" visibility="visible" aria-label="distance Jan 07, 2012 348"><path cs="100,100" d="M0.5,0.5 L0.5,-58.5 L48.5,-58.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(424,199)" visibility="visible" aria-label="distance Jan 08, 2012 238"><path cs="100,100" d="M0.5,0.5 L0.5,-14.5 L48.5,-14.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(483,199)" visibility="visible" aria-label="distance Jan 09, 2012 218"><path cs="100,100" d="M0.5,0.5 L0.5,-6.5 L48.5,-6.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(543,199)" visibility="visible" aria-label="distance Jan 10, 2012 349"><path cs="100,100" d="M0.5,0.5 L0.5,-58.5 L48.5,-58.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(603,199)" visibility="visible" aria-label="distance Jan 11, 2012 603"><path cs="100,100" d="M0.5,0.5 L0.5,-159.5 L48.5,-159.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(662,199)" visibility="visible" aria-label="distance Jan 12, 2012 534"><path cs="100,100" d="M0.5,0.5 L0.5,-132.5 L48.5,-132.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.9" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g><g class="amcharts-graph-column amcharts-graph-g1" transform="translate(722,199)" visibility="visible" aria-label="distance Jan 13, 2012 425"><path cs="100,100" d="M0.5,0.5 L0.5,-89.5 L48.5,-89.5 L48.5,0.5 L0.5,0.5 Z" fill="#01a9ac" stroke="#01a9ac" fill-opacity="0.4" stroke-width="1" stroke-opacity="0.9" class="amcharts-graph-column-front amcharts-graph-column-element"></path></g></g></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g2"><g></g><g clip-path="url(#AmChartsEl-1)"><path cs="100,100" d="M30.5,34.6484 L90.5,49.1356 L149.5,86.3088 L209.5,117.114 L269.5,153.0932 L328.5,116.2384 L388.5,120.3776 L448.5,121.8104 L507.5,97.612 L567.5,76.1996 L627.5,47.464 L686.5,42.3696 L746.5,34.33 L806.5,71.344 M0,0 L0,0" fill="none" stroke-width="2" stroke-dasharray="8" stroke-opacity="0.9" stroke="#303549" stroke-linejoin="round" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-1"><rect x="0" y="0" width="895" height="199" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g><g transform="translate(71,20)" class="amcharts-graph-smoothedLine amcharts-graph-g3"><g></g><g clip-path="url(#AmChartsEl-2)"><path cs="100,100" d="M30,147 C45,146,60,131,90,129 C120,127,119,108,149,109 C179,110,179,154,209,154 C239,155,239,125,269,124 C299,123,298,137,328,139 C358,140,358,146,388,148 C418,150,418,170,448,172 C478,173,477,180,507,177 C537,175,537,136,567,128 C597,121,597,31,627,27 C657,23,656,45,686,47 C716,50,716,78,746,82 C776,86,791,129,806,132 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="0.9" stroke="#fe5d70" class="amcharts-graph-stroke"></path></g><clipPath id="AmChartsEl-2"><rect x="0" y="0" width="895" height="199" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g></g><g></g><g><g class="amcharts-category-axis"><path cs="100,100" d="M0.5,0.5 L895.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#555555" transform="translate(71,219)" class="amcharts-axis-line"></path></g><g class="amcharts-value-axis value-axis-a1"><path cs="100,100" d="M0.5,0.5 L0.5,199.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(71,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a2"><path cs="100,100" d="M0.5,0.5 L0.5,199.5 L0.5,199.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(966,20)" class="amcharts-axis-line" visibility="visible"></path></g><g class="amcharts-value-axis value-axis-a3"><path cs="100,100" d="M0.5,0.5 L0.5,199.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(71,20)" class="amcharts-axis-line" visibility="visible"></path></g></g><g></g><g></g><g><g transform="translate(71,20)" class="amcharts-graph-column amcharts-graph-g1"></g><g transform="translate(71,20)" class="amcharts-graph-line amcharts-graph-g2"><circle r="12.5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(30,34)" aria-label="latitude/city Jan 01, 2012 40.71" class="amcharts-graph-bullet"></circle><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(46,34)"><tspan y="6" x="0">New York</tspan></text><circle r="7" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(90,49) scale(1)" aria-label="latitude/city Jan 02, 2012 38.89" class="amcharts-graph-bullet"></circle><circle r="3" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(149,86)" aria-label="latitude/city Jan 03, 2012 34.22" class="amcharts-graph-bullet"></circle><circle r="3.5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(209,117)" aria-label="latitude/city Jan 04, 2012 30.35" class="amcharts-graph-bullet"></circle><circle r="5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(269,153)" aria-label="latitude/city Jan 05, 2012 25.83" class="amcharts-graph-bullet"></circle><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(277,153)"><tspan y="6" x="0">Miami</tspan></text><circle r="3.5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(328,116)" aria-label="latitude/city Jan 06, 2012 30.46" class="amcharts-graph-bullet"></circle><circle r="5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(388,120)" aria-label="latitude/city Jan 07, 2012 29.94" class="amcharts-graph-bullet"></circle><circle r="8" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(448,121)" aria-label="latitude/city Jan 08, 2012 29.76" class="amcharts-graph-bullet"></circle><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(459,121)"><tspan y="6" x="0">Houston</tspan></text><circle r="8.5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(507,97)" aria-label="latitude/city Jan 09, 2012 32.8" class="amcharts-graph-bullet"></circle><circle r="5.5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(567,76)" aria-label="latitude/city Jan 10, 2012 35.49" class="amcharts-graph-bullet"></circle><circle r="5" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(627,47)" aria-label="latitude/city Jan 11, 2012 39.1" class="amcharts-graph-bullet"></circle><circle r="9" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(686,42)" aria-label="latitude/city Jan 12, 2012 39.74" class="amcharts-graph-bullet"></circle><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(698,42)"><tspan y="6" x="0">Denver</tspan></text><circle r="6" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(746,34)" aria-label="latitude/city Jan 13, 2012 40.75" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#0ac282" stroke="#01a9ac" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(806,71)" aria-label="latitude/city Jan 14, 2012 36.1" class="amcharts-graph-bullet lastBullet"></circle><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" class="amcharts-graph-label" style="pointer-events: none;" transform="translate(813,71)"><tspan y="6" x="0">Las Vegas</tspan></text></g><g transform="translate(71,20)" class="amcharts-graph-smoothedLine amcharts-graph-g3"><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(30,147)" aria-label="duration Jan 01, 2012 408" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(90,129)" aria-label="duration Jan 02, 2012 482" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(149,109)" aria-label="duration Jan 03, 2012 562" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(209,154)" aria-label="duration Jan 04, 2012 379" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(269,124)" aria-label="duration Jan 05, 2012 501" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(328,139)" aria-label="duration Jan 06, 2012 443" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(388,148)" aria-label="duration Jan 07, 2012 405" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(448,172)" aria-label="duration Jan 08, 2012 309" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(507,177)" aria-label="duration Jan 09, 2012 287" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(567,128)" aria-label="duration Jan 10, 2012 485" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(627,27)" aria-label="duration Jan 11, 2012 890" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(686,47)" aria-label="duration Jan 12, 2012 810" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(746,82)" aria-label="duration Jan 13, 2012 670" class="amcharts-graph-bullet"></circle><circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="1" stroke-opacity="1" transform="translate(806,132)" aria-label="duration Jan 14, 2012 470" class="amcharts-graph-bullet"></circle></g></g><g><g></g></g><g><g class="amcharts-category-axis" transform="translate(71,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="middle" transform="translate(29.83333335635288,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">Jan</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(89.83333335635288,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">02</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(148.83333335635288,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">03</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(208.83333335635288,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">04</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(268.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">05</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(327.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">06</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(387.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">07</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(447.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">08</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(506.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">09</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(566.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">10</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(626.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">11</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(685.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">12</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(745.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">13</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(805.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">14</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(864.8333333563529,211.5)" class="amcharts-axis-label"><tspan y="6" x="0">15</tspan></text></g><g class="amcharts-value-axis value-axis-a1" transform="translate(71,20)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,198)" class="amcharts-axis-label"><tspan y="6" x="0">200</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,158)" class="amcharts-axis-label"><tspan y="6" x="0">300</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,118)" class="amcharts-axis-label"><tspan y="6" x="0">400</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,79)" class="amcharts-axis-label"><tspan y="6" x="0">500</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,39)" class="amcharts-axis-label"><tspan y="6" x="0">600</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)" class="amcharts-axis-label"><tspan y="6" x="0">700</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="12px" opacity="1" font-weight="bold" text-anchor="middle" class="amcharts-axis-title" transform="translate(-50,100) rotate(-90)"><tspan y="6" x="0">Student</tspan></text></g><g class="amcharts-value-axis value-axis-a2" transform="translate(71,20)" visibility="visible"></g><g class="amcharts-value-axis value-axis-a3" transform="translate(71,20)" visibility="visible"><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="start" transform="translate(9,198)" class="amcharts-axis-label"><tspan y="0" x="0">200</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="start" transform="translate(9,148)" class="amcharts-axis-label"><tspan y="0" x="0">400</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="start" transform="translate(9,99)" class="amcharts-axis-label"><tspan y="0" x="0">600</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="start" transform="translate(9,49)" class="amcharts-axis-label"><tspan y="0" x="0">800</tspan></text><text y="0" fill="#000000" font-family="Verdana" font-size="0px" opacity="1" text-anchor="start" transform="translate(9,-1)" class="amcharts-axis-label"><tspan y="0" x="0">1,000</tspan></text></g></g><g></g><g transform="translate(71,20)"></g><g></g><g></g></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 76px; top: 25px;">JS chart by amCharts</a></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card feed-card">
                                    <div class="card-header">
                                        <h5>Subject</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">Web Application <span class="text-muted f-right f-13">89</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">C# <span class="text-muted f-right f-13">90</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">Linux<span class="text-muted f-right f-13">95</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">JAVA<span class="text-muted f-right f-13">87</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">MIS <span class="text-muted f-right f-13">78</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- income start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="card-header">
                                        <h5>Total Leads</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i> 18% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>76.12%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>16.40%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>4.56%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-lead" height="150" style="display: block;" width="508"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="card-header">
                                        <h5>Total Vendors</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i> 24% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-vendor" height="150" width="508" style="display: block;"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                    <div class="card-header">
                                        <h5>Invoice Generate</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i> 20% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="invoice-gen" height="150" width="508" style="display: block;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- upload image -->
  <script>
    function readURL(input)
      {
        if (input.files && input.files[0])
        {
          var reader = new FileReader();
          reader.onload = function(e)
          {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#imageUpload").change(function()
      {
        readURL(this);
      });
  </script>

@endsection

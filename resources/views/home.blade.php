@extends('layouts.master')
@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Weekly Rank and Score</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $rank }} | {{ Auth::user()->weekly_score }} pts</div>
                        </div>
                        <div class="col mr-2 text-right">
                            <div class="fb-share-button" data-href="http://learnvienakarelian.tk" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flearnvienakarelian.tk%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="float: left">Topics</h6>
                    <h6 class="m-0 font-weight-bold text-primary" style="float: right">Achievements</h6>
                </div>
                <div class="card-body">

                    <p class="p-3 bg-gray-100 m-0">
                        <i class="fas fa-utensils"></i> Food and Drink
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-200 m-0">
                        <i class="fas fa-tshirt"></i> Clothing
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-100 m-0">
                        <i class="fas fa-chair"></i> Furniture
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-200 m-0">
                        <i class="fas fa-cloud-sun"></i> Weather and Season
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-100 m-0">
                        <i class="fas fa-list-ol"></i> Number
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-200 m-0">
                        <i class="fas fa-child"></i> Body
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                    <p class="p-3 bg-gray-100 m-0">
                        <i class="fas fa-calendar-alt"></i> Days of the weeks and months
                        <span style="float: right;">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
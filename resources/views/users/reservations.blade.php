@extends('layouts.master-layouts')

@section('title') @lang('translation.Dashboard') @endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/chartist/chartist.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')




jhgjhk
@endsection

@section('script')
    <!-- Peity chart-->
    <script src="{{ URL::asset('/assets/libs/peity/peity.min.js') }}"></script>

    <!-- Plugin Js-->
    <script src="{{ URL::asset('/assets/libs/chartist/chartist.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection
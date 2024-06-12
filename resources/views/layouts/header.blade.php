<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SejahteraCare') }}</title>
    <link rel="icon" type="image/x-icon" href="">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



    <!-- tabler -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />

    
    <!-- Scripts -->
    {{-- <link rel="stylesheet" href={{ asset('/assets/app.css') }}> --}}
    <link rel="stylesheet" href={{ asset('/assets/custom.css') }}>
    
    <!-- flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- jquery timepicker -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<!-- yajra datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="//cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>


    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

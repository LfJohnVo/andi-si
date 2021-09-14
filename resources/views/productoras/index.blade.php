@extends('layouts.app')
@section('titulo', 'Productoras')
@section('content')

<style type="text/css">
    #table_top_filter input{
        margin: 20px 5px;
        border: none !important;
        border-bottom: 1px solid #7e3af2 !important;
        border-radius: 0;
    }
    #table_top_length select{
        width: 70px !important;
        margin: 20px 5px;  
        border: none !important;
        border-bottom: 1px solid #7e3af2 !important;
        border-radius: 0;
    }
    #table_top a.paginate_button.current{
        background-color: #7e3af2 !important;
        border: none;
    }
    #table_top{
        border: none !important;
        overflow-x: scroll;
        width: 100%;
    }
    #table_top thead th{
        border-bottom: 1px solid #ccc;
    }
    #table_top thead tr{
        background-color: #fff !important;
    }
    #table_top tbody tr:nth-child(even){
        background-color: #f5f5f5 !important;
    }
    #table_top_paginate .paginate_button.current{
        border: none;
        background: #7e3af2 !important;
        color: #fff !important;
        transform: scale(0.8);
        border-radius: 100px;
    }
</style>

    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Panel de productoras</span>
        </div>
    </a>

    

    @include('productoras.tarjetas')

    @include('productoras.top')

@endsection

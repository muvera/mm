@extends('layouts.master')
@section('content')

          @if(Auth::user())
         <!--  ONLY MEMBERS -->
              @if(Auth::user()->roles()->first()->name == 'member')
                @include('products.roles.show.member')
              @endif
            <!--   ONLY CUSTOMERS -->
               @if(Auth::user()->roles()->first()->name == 'customer')
                @include('products.roles.show.customer')
              @endif

          @else
          	<!-- ONLY GUESTS -->
                @include('products.roles.show.customer')
          @endif


@stop
@extends('layouts.default')

@section('content')
    {{-- how you might have done it in the past --}}
    {{-- resources/js/components/CardsContained.vue --}}
    <cards-contained :users='@json($users)'></cards-contained>
@stop

@extends('layouts.default')

@section('content')
    <toggle-slotted class="bg-green-500 p-4" v-slot:default="props">
        <p class="mb-4">The state is <span v-if="props.state">True</span><span v-else>False</span></p>
        <button type="button" class="px-4 py-2 bg-white rounded" @click.prevent="props.toggle">Toggle</button>
    </toggle-slotted>
@stop

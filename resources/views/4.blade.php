@extends('layouts.default')

@section('content')
    {{-- our new version using slots --}}
    {{-- if we inspect the source of the rendered HTML, we see nice HTML output --}}
    {{-- resources/js/components/CardsSlotted.vue --}}
    <cards-slotted>
        {{-- shorthand `v-slot` is `#` --}}
        <template #user-list="props">
            @foreach ($users as $user)
                {{-- the code here get a little wild, mixin vue and blade, but it works nicely --}}
                <div :class="{ 'bg-yellow-200': props.activeUser.id === {{ $user->id }} }" class="mb-4 w-full shadow-md p-6 flex justify-between items-center">
                    <div class="flex items-center">
                        <img class="h-16 w-16 rounded-full mr-4" src="{{ $user->profile_image }}">
                        <h2 class="text-lg">
                            <span>{{ $user->first_name }}</span>
                            &nbsp;<span>{{ $user->last_name }}</span>
                        </h2>
                    </div>
                    {{-- we have to pass the user as JSON since we dont have it the same way we did when this was straight Vue --}}
                    <button type="button" class="px-6 py-2 bg-black text-white rounded" @click.prevent="props.setActive('{{ $user->toJson() }}')">Preview</button>
                </div>
            @endforeach
        </template>
        <template #active-user="{ activeUser }">
            {{-- this is our regular template for the card --}}
            <div class="active-user relative w-1/2" v-if="activeUser.id">
                <div class="fixed shadow-xl bg-white rounded-lg py-6 px-10 mx-8">
                    <img class="h-32 w-32 rounded-full mx-auto mb-4" :src="activeUser.profile_image">
                    <div class="text-center">
                        <h2 class="text-lg">
                            <span v-text="activeUser.first_name"></span>
                            &nbsp;<span v-text="activeUser.last_name"></span>
                        </h2>
                        <div class="text-gray-600 my-4">
                            <a :href="`mailto:${activeUser.email}`" v-text="activeUser.email"></a>
                        </div>
                        <div class="text-gray-600 my-4">
                            <p v-text="activeUser.bio"></p>
                        </div>
                        <div class="text-gray-600" v-text="activeUser.created_at"></div>
                    </div>
                </div>
            </div>
        </template>
    </cards-slotted>
@stop

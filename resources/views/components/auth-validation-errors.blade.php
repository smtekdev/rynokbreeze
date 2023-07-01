@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('There was a problem please check info') }}
        </div>

    </div>
@endif

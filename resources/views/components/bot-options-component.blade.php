@foreach ($options->options as $key => $option)
    <div option_id="{{ $key }}" option_name="{{ $option[0] }}"
        class="bg-light text-center rounded p-4 shadow-sm col-lg-12 mb-2 {{ $option[1] }}-div opt">
        <h5 class="mb-0">{{ $option[0] }}</h5>
    </div>
@endforeach
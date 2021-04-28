<div class="form-group{{$required ? ' required' : ' optional' }}">
    @if($highlightsLabel())
        <label for="{{ $name }}">
                {{ ucfirst($name) }}
                @if ($highlightsRequired())
                        <span class="badge badge-danger">{{ __('required')  }}</span>
                @elseif ($highlightsOptional())
                        <span class="badge badge-info">{{ __('optional')  }}</span>
                @endif
        </label>
    @endif
        <input name="{{ $name }}" {{ $attributes->merge(['type' => 'text', 'required' => $required]) }} class="form-control" id="{{ $name }}">
</div>

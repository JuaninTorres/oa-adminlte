<input type="text"
       value=""
       class="slider form-control"
       data-provide="slider"
       data-slider-min="{{ $min or 0 }}"
       data-slider-max="{{ $max or 100 }}"
       data-slider-step="1"
       data-slider-value="{{ $default or 0 }}"
       data-slider-tooltip="show"
       data-slider-id="{{ $color or 'red' }}">
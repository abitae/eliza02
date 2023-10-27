<x-app-layout>
    {{-- Minimal --}}
    <x-adminlte-button label="Button" />

    {{-- Disabled --}}
    <x-adminlte-button label="Disabled" theme="dark" disabled />

    {{-- Themes + icons --}}
    <x-adminlte-button label="Primary" theme="primary" icon="fas fa-key" />
    <x-adminlte-button label="Secondary" theme="secondary" icon="fas fa-hashtag" />
    <x-adminlte-button label="Info" theme="info" icon="fas fa-info-circle" />
    <x-adminlte-button label="Warning" theme="warning" icon="fas fa-exclamation-triangle" />
    <x-adminlte-button label="Danger" theme="danger" icon="fas fa-ban" />
    <x-adminlte-button label="Success" theme="success" icon="fas fa-thumbs-up" />
    <x-adminlte-button label="Dark" theme="dark" icon="fas fa-adjust" />

    {{-- Types --}}
    <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" />
    <x-adminlte-button class="btn-lg" type="reset" label="Reset" theme="outline-danger" icon="fas fa-lg fa-trash" />
    <x-adminlte-button class="btn-sm bg-gradient-info" type="button" label="Help" icon="fas fa-lg fa-question" />

    {{-- Icons Only --}}
    <x-adminlte-button theme="primary" icon="fab fa-fw fa-lg fa-facebook-f" />
    <x-adminlte-button theme="info" icon="fab fa-fw fa-lg fa-twitter" />


    {{-- Minimal --}}
    <x-adminlte-input name="iBasic" />

    {{-- Email type --}}
    <x-adminlte-input name="iMail" type="email" placeholder="mail@example.com" />

    {{-- With label, invalid feedback disabled and form group class --}}
    <div class="row">
        <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder" fgroup-class="col-md-6"
            disable-feedback />
    </div>

    {{-- With prepend slot --}}
    <x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
        <x-slot name="prependSlot">
            <div class="input-group-text">
                <i class="fas fa-user text-lightblue"></i>
            </div>
        </x-slot>
    </x-adminlte-input>

    {{-- With append slot, number type and sm size --}}
    <x-adminlte-input name="iNum" label="Number" placeholder="number" type="number" igroup-size="sm" min=1 max=10>
        <x-slot name="appendSlot">
            <div class="input-group-text bg-dark">
                <i class="fas fa-hashtag"></i>
            </div>
        </x-slot>
    </x-adminlte-input>

    {{-- With a link on the bottom slot and old support enabled --}}
    <x-adminlte-input name="iPostalCode" label="Postal Code" placeholder="postal code" enable-old-support>
        <x-slot name="prependSlot">
            <div class="input-group-text text-olive">
                <i class="fas fa-map-marked-alt"></i>
            </div>
        </x-slot>
        <x-slot name="bottomSlot">
            <a href="#">Search your postal code here</a>
        </x-slot>
    </x-adminlte-input>

    {{-- With extra information on the bottom slot --}}
    <x-adminlte-input name="iExtraAddress" label="Other Address Data">
        <x-slot name="prependSlot">
            <div class="input-group-text text-purple">
                <i class="fas fa-address-card"></i>
            </div>
        </x-slot>
        <x-slot name="bottomSlot">
            <span class="text-sm text-gray">
                [Add other address information you may consider important]
            </span>
        </x-slot>
    </x-adminlte-input>

    {{-- With multiple slots and lg size --}}
    <x-adminlte-input name="iSearch" label="Search" placeholder="search" igroup-size="lg">
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-danger" label="Go!" />
        </x-slot>
        <x-slot name="prependSlot">
            <div class="input-group-text text-danger">
                <i class="fas fa-search"></i>
            </div>
        </x-slot>
    </x-adminlte-input>

    {{-- Minimal --}}
    <x-adminlte-input-file name="ifMin" />

    {{-- Placeholder, sm size and prepend icon --}}
    <x-adminlte-input-file name="ifPholder" igroup-size="sm" placeholder="Choose a file...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-lightblue">
                <i class="fas fa-upload"></i>
            </div>
        </x-slot>
    </x-adminlte-input-file>

    {{-- With label and feedback disabled --}}
    <x-adminlte-input-file name="ifLabel" label="Upload file" placeholder="Choose a file..." disable-feedback />

    {{-- With multiple slots and multiple files --}}
    <x-adminlte-input-file id="ifMultiple" name="ifMultiple[]" label="Upload files"
        placeholder="Choose multiple files..." igroup-size="lg" legend="Choose" multiple>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="primary" label="Upload" />
        </x-slot>
        <x-slot name="prependSlot">
            <div class="input-group-text text-primary">
                <i class="fas fa-file-upload"></i>
            </div>
        </x-slot>
    </x-adminlte-input-file>

    {{-- Options with empty option --}}
    <x-adminlte-options :options="['Option 1', 'Option 2', 'Option 3']" disabled="1" empty-option="Select an option..." />

    {{-- Options with placeholder --}}
    <x-adminlte-options :options="['Option 1', 'Option 2', 'Option 3']" disabled="1" placeholder="Select an option..." />


    {{-- Options with empty option --}}
    <option value="">Select an option...</option>
    <option value="0">Option 1</option>
    <option value="1" disabled="">Option 2</option>
    <option value="2">Option 3</option>

    {{-- Options with placeholder --}}
    <option class="d-none" value="">Select an option...</option>
    <option value="0">Option 1</option>
    <option value="1" disabled="">Option 2</option>
    <option value="2">Option 3</option>

    {{-- Example with empty option (for Select) --}}
    <x-adminlte-select name="optionsTest1">
        <x-adminlte-options :options="['Option 1', 'Option 2', 'Option 3']" disabled="1" empty-option="Select an option..." />
    </x-adminlte-select>

    {{-- Example with placeholder (for Select) --}}
    <x-adminlte-select name="optionsTest2">
        <x-adminlte-options :options="['Option 1', 'Option 2', 'Option 3']" disabled="1" placeholder="Select an option..." />
    </x-adminlte-select>

    {{-- Example with empty option (for Select2) --}}
    <x-adminlte-select2 name="optionsVehicles" igroup-size="lg" label-class="text-lightblue"
        data-placeholder="Select an option...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-car-side"></i>
            </div>
        </x-slot>
        <x-adminlte-options :options="['Car', 'Truck', 'Motorcycle']" empty-option />
    </x-adminlte-select2>

    {{-- Example with multiple selections (for Select) --}}
    @php
        $options = ['s' => 'Spanish', 'e' => 'English', 'p' => 'Portuguese'];
        $selected = ['s', 'e'];
    @endphp
    <x-adminlte-select id="optionsLangs" name="optionsLangs[]" label="Languages" label-class="text-danger" multiple>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-red">
                <i class="fas fa-lg fa-language"></i>
            </div>
        </x-slot>
        <x-adminlte-options :options="$options" :selected="$selected" />
    </x-adminlte-select>

    {{-- Example with multiple selections (for SelectBs) --}}
    @php
        $config = [
            'title' => 'Select multiple options...',
            'liveSearch' => true,
            'liveSearchPlaceholder' => 'Search...',
            'showTick' => true,
            'actionsBox' => true,
        ];
    @endphp
    <x-adminlte-select-bs id="optionsCategory" name="optionsCategory[]" label="Categories" label-class="text-danger"
        :config="$config" multiple>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-red">
                <i class="fas fa-tag"></i>
            </div>
        </x-slot>
        <x-adminlte-options :options="['News', 'Sports', 'Science', 'Games']" />
    </x-adminlte-select-bs>


    {{-- Minimal --}}
    <x-adminlte-select name="selBasic">
        <option>Option 1</option>
        <option disabled>Option 2</option>
        <option selected>Option 3</option>
    </x-adminlte-select>

    {{-- Disabled --}}
    <x-adminlte-select name="selDisabled" disabled>
        <option>Option 1</option>
        <option>Option 2</option>
    </x-adminlte-select>

    {{-- With prepend slot, lg size, and label --}}
    <x-adminlte-select name="selVehicle" label="Vehicle" label-class="text-lightblue" igroup-size="lg">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-car-side"></i>
            </div>
        </x-slot>
        <option>Vehicle 1</option>
        <option>Vehicle 2</option>
    </x-adminlte-select>

    {{-- With multiple slots and multiple options --}}
    <x-adminlte-select id="selUser" name="selUser[]" label="User" label-class="text-danger" multiple>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-red">
                <i class="fas fa-lg fa-user"></i>
            </div>
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger" />
        </x-slot>
        <option>Admin</option>
        <option>Guest</option>
    </x-adminlte-select>


    {{-- Minimal --}}
    <x-adminlte-select2 name="sel2Basic">
        <option>Option 1</option>
        <option disabled>Option 2</option>
        <option selected>Option 3</option>
    </x-adminlte-select2>

    {{-- Disabled --}}
    <x-adminlte-select2 name="sel2Disabled" disabled>
        <option>Option 1</option>
        <option>Option 2</option>
    </x-adminlte-select2>

    {{-- With prepend slot, label and data-placeholder config --}}
    <x-adminlte-select2 name="sel2Vehicle" label="Vehicle" label-class="text-lightblue" igroup-size="lg"
        data-placeholder="Select an option...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-car-side"></i>
            </div>
        </x-slot>
        <option />
        <option>Vehicle 1</option>
        <option>Vehicle 2</option>
    </x-adminlte-select2>

    {{-- With multiple slots, and plugin config parameter --}}
    @php
        $config = [
            'placeholder' => 'Select multiple options...',
            'allowClear' => true,
        ];
    @endphp
    <x-adminlte-select2 id="sel2Category" name="sel2Category[]" label="Categories" label-class="text-danger"
        igroup-size="sm" :config="$config" multiple>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-red">
                <i class="fas fa-tag"></i>
            </div>
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger" />
        </x-slot>
        <option>Sports</option>
        <option>News</option>
        <option>Games</option>
        <option>Science</option>
        <option>Maths</option>
    </x-adminlte-select2>



    {{-- Minimal with placeholder --}}
    <x-adminlte-textarea name="taBasic" placeholder="Insert description..." />

    {{-- Disabled --}}
    <x-adminlte-textarea name="taDisabled" disabled>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis nibh massa.
    </x-adminlte-textarea>

    {{-- With prepend slot, sm size and label --}}
    <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-warning" igroup-size="sm"
        placeholder="Insert description...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-dark">
                <i class="fas fa-lg fa-file-alt text-warning"></i>
            </div>
        </x-slot>
    </x-adminlte-textarea>

    {{-- With slots, sm size and feedback disabled --}}
    <x-adminlte-textarea name="taMsg" label="Message" rows=5 igroup-size="sm" label-class="text-primary"
        placeholder="Write your message..." disable-feedback>
        <x-slot name="prependSlot">
            <div class="input-group-text">
                <i class="fas fa-lg fa-comment-dots text-primary"></i>
            </div>
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="primary" icon="fas fa-paper-plane" label="Send" />
        </x-slot>
    </x-adminlte-textarea>







    {{-- Minimal --}}
    <x-adminlte-date-range name="drBasic" />

    {{-- Disabled with predefined config --}}
    @php
        $config = [
            'timePicker' => true,
            'startDate' => "js:moment().subtract(6, 'days')",
            'endDate' => 'js:moment()',
            'locale' => ['format' => 'YYYY-MM-DD HH:mm'],
        ];
    @endphp
    <x-adminlte-date-range name="drDisabled" :config="$config" disabled />

    {{-- Prepend slot and custom ranges enables --}}
    <x-adminlte-date-range name="drCustomRanges" enable-default-ranges="Last 30 Days">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-date-range>

    {{-- Label and placeholder --}}
    <x-adminlte-date-range name="drPlaceholder" placeholder="Select a date range..." label="Date Range">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-danger">
                <i class="far fa-lg fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-date-range>
    @push('js')
        <script>
            $(() => $("#drPlaceholder").val(''))
        </script>
    @endpush

    {{-- SM size with single date/time config --}}
    @php
        $config = [
            'singleDatePicker' => true,
            'showDropdowns' => true,
            'startDate' => 'js:moment()',
            'minYear' => 2000,
            'maxYear' => "js:parseInt(moment().format('YYYY'),10)",
            'timePicker' => true,
            'timePicker24Hour' => true,
            'timePickerSeconds' => true,
            'cancelButtonClasses' => 'btn-danger',
            'locale' => ['format' => 'YYYY-MM-DD HH:mm:ss'],
        ];
    @endphp
    <x-adminlte-date-range name="drSizeSm" label="Date/Time" igroup-size="sm" :config="$config">
        <x-slot name="appendSlot">
            <div class="input-group-text bg-dark">
                <i class="fas fa-calendar-day"></i>
            </div>
        </x-slot>
    </x-adminlte-date-range>

    {{-- LG size with some config and add-ons --}}
    @php
        $config = [
            'showDropdowns' => true,
            'startDate' => 'js:moment()',
            'endDate' => "js:moment().subtract(1, 'days')",
            'minYear' => 2000,
            'maxYear' => "js:parseInt(moment().format('YYYY'),10)",
            'timePicker' => true,
            'timePicker24Hour' => true,
            'timePickerIncrement' => 30,
            'locale' => ['format' => 'YYYY-MM-DD HH:mm'],
            'opens' => 'center',
        ];
    @endphp
    <x-adminlte-date-range name="drSizeLg" label="Date/Time Range" label-class="text-primary" igroup-size="lg"
        :config="$config">
        <x-slot name="prependSlot">
            <div class="input-group-text text-primary">
                <i class="fas fa-lg fa-calendar-alt"></i>
            </div>
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-primary" label="Review" icon="fas fa-lg fa-clipboard-check" />
        </x-slot>
    </x-adminlte-date-range>
    {{-- Minimal --}}
    <x-adminlte-input-color name="icBasic" />

    {{-- Disabled with predefined value --}}
    <x-adminlte-input-color name="icDisabled" value="rgb(50, 100, 50)" disabled />

    {{-- Append slot and data-* config --}}
    <x-adminlte-input-color name="icAddon" data-color="rgb(50, 100, 150)" data-format='hex' data-horizontal=true>
        <x-slot name="appendSlot">
            <div class="input-group-text">
                <i class="fas fa-lg fa-square"></i>
            </div>
        </x-slot>
    </x-adminlte-input-color>

    {{-- Label and placeholder --}}
    <x-adminlte-input-color name="icPlaceholder" placeholder="Select a color..." label="Color">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-light">
                <i class="fas fa-lg fa-tint"></i>
            </div>
        </x-slot>
    </x-adminlte-input-color>

    {{-- SM size with custom config --}}
    @php
        $config = [
            'color' => '#000000',
            'horizontal' => true,
            'format' => null,
        ];
    @endphp
    <x-adminlte-input-color name="icSizeSm" label="Fill Color" igroup-size="sm" :config="$config">
        <x-slot name="appendSlot">
            <div class="bg-white input-group-text">
                <i class="fas fa-lg fa-fill"></i>
            </div>
        </x-slot>
    </x-adminlte-input-color>

    {{-- LG size with predefined color extension --}}
    @php
        $config = [
            'extensions' => [
                [
                    'name' => 'swatches',
                    'options' => [
                        'colors' => [
                            'black' => '#000000',
                            'gray' => '#888888',
                            'white' => '#ffffff',
                            'red' => '#ff0000',
                            'default' => '#777777',
                            'primary' => '#337ab7',
                            'success' => '#5cb85c',
                            'info' => '#5bc0de',
                            'warning' => '#f0ad4e',
                            'danger' => '#d9534f',
                        ],
                        'namesAsValues' => true,
                    ],
                ],
            ],
        ];
    @endphp
    <x-adminlte-input-color name="icSizeLg" placeholder="Choice a color..." label="Brush Color"
        label-class="text-primary" igroup-size="lg" :config="$config">
        <x-slot name="appendSlot">
            <div class="input-group-text">
                <i class="fas fa-lg fa-brush"></i>
            </div>
        </x-slot>
    </x-adminlte-input-color>
    {{-- Minimal --}}
    <x-adminlte-input-date name="idBasic" />

    {{-- Disabled with predefined value --}}
    @php
        $config = ['format' => 'YYYY-MM-DD'];
    @endphp
    <x-adminlte-input-date name="idDisabled" value="2020-10-04" :config="$config" disabled />

    {{-- Placeholder, time only and prepend icon --}}
    @php
        $config = ['format' => 'LT'];
    @endphp
    <x-adminlte-input-date name="idTimeOnly" :config="$config" placeholder="Choose a time...">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-clock"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>

    {{-- Placeholder, date only and append icon --}}
    @php
        $config = ['format' => 'L'];
    @endphp
    <x-adminlte-input-date name="idDateOnly" :config="$config" placeholder="Choose a date...">
        <x-slot name="appendSlot">
            <div class="input-group-text bg-gradient-danger">
                <i class="fas fa-calendar-alt"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>

    {{-- With Label --}}
    @php
        $config = ['format' => 'DD/MM/YYYY HH:mm'];
    @endphp
    <x-adminlte-input-date name="idLabel" :config="$config" placeholder="Choose a date..." label="Datetime"
        label-class="text-primary">
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-primary" icon="fas fa-lg fa-birthday-cake" title="Set to Birthday" />
        </x-slot>
    </x-adminlte-input-date>

    {{-- SM size, restricted to current month and week days --}}
    @php
        $config = [
            'format' => 'YYYY-MM-DD HH.mm',
            'dayViewHeaderFormat' => 'MMM YYYY',
            'minDate' => "js:moment().startOf('month')",
            'maxDate' => "js:moment().endOf('month')",
            'daysOfWeekDisabled' => [0, 6],
        ];
    @endphp
    <x-adminlte-input-date name="idSizeSm" label="Working Datetime" igroup-size="sm" :config="$config"
        placeholder="Choose a working day...">
        <x-slot name="appendSlot">
            <div class="input-group-text bg-dark">
                <i class="fas fa-calendar-day"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>

    {{-- LG size with multiple datetimes --}}
    @php
        $config = [
            'allowMultidate' => true,
            'multidateSeparator' => ',',
            'format' => 'DD MMM YYYY',
        ];
    @endphp
    <x-adminlte-input-date name="idSizeLg" label="Multiple Datetimes" label-class="text-danger" igroup-size="lg"
        placeholder="Multidate..." :config="$config">
        <x-slot name="prependSlot">
            <div class="bg-white input-group-text">
                <i class="far fa-lg fa-calendar-alt text-danger"></i>
            </div>
        </x-slot>
    </x-adminlte-input-date>
    {{-- Basic --}}
    <x-adminlte-input-file-krajee name="kifBasic" />

    {{-- With placeholder, SM size multiple and data-* options --}}
    <x-adminlte-input-file-krajee id="kifPholder" name="kifPholder[]" igroup-size="sm"
        data-msg-placeholder="Choose multiple files..." data-show-cancel="false" data-show-close="false" multiple />

    {{-- With a label, some plugin config, and error feedback disabled --}}
    @php
        $config = [
            'allowedFileTypes' => ['text', 'office', 'pdf'],
            'browseOnZoneClick' => true,
            'theme' => 'explorer-fa5',
        ];
    @endphp
    <x-adminlte-input-file-krajee name="kifLabel" label="Upload document file"
        data-msg-placeholder="Choose a text, office or pdf file..." label-class="text-primary" :config="$config"
        disable-feedback />

    {{-- With the avatar preset-mode --}}
    <x-adminlte-input-file-krajee name="kifAvatar" label="Set Profile Picture" preset-mode="avatar" />

    {{-- With the minimalist preset-mode --}}
    <x-adminlte-input-file-krajee name="kifMinimalist" label="Choose a file" preset-mode="minimalist" />
    {{-- Minimal --}}
    <x-adminlte-input-slider name="isMin" />

    {{-- Disabled --}}
    <x-adminlte-input-slider name="isDisabled" disabled />

    {{-- With min, max, step and value --}}
    <x-adminlte-input-slider name="isMinMax" min=5 max=15 step=0.5 value=11.5 color="purple" />

    {{-- Label, prepend icon and sm size --}}
    <x-adminlte-input-slider name="isSizeSm" label="Slider" igroup-size="sm" color="#3c8dbc"
        data-slider-handle="square">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-lightblue">
                <i class="fas fa-sliders-h"></i>
            </div>
        </x-slot>
    </x-adminlte-input-slider>

    {{-- With slots, range mode and lg size --}}
    @php
        $config = [
            'handle' => 'square',
            'range' => true,
            'value' => [3, 8],
        ];
    @endphp
    <x-adminlte-input-slider name="isSizeLg" label="Range" size="lg" color="orange" label-class="text-orange"
        :config="$config">
        <x-slot name="prependSlot">
            <x-adminlte-button theme="warning" icon="fas fa-minus" title="Decrement" />
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="warning" icon="fas fa-plus" title="Increment" />
        </x-slot>
    </x-adminlte-input-slider>

    {{-- Vertical slider with ticks --}}
    @php
        $config = [
            'value' => 150,
            'orientation' => 'vertical',
            'ticks' => [0, 100, 200, 300],
            'ticks_labels' => ['$0', '$100', '$200', '$300'],
        ];
    @endphp
    <x-adminlte-input-slider name="isVertical" label="Vertical" color="#77dd77" label-class="text-olive"
        :config="$config" />
    {{-- Minimal --}}
    <x-adminlte-input-switch name="iswMin" />

    {{-- Disabled --}}
    <x-adminlte-input-switch name="iswDisabled" disabled />

    {{-- With colors using data-* config --}}
    <x-adminlte-input-switch name="iswColor" data-on-color="success" data-off-color="danger" checked />

    {{-- With custom text using data-* config --}}
    <x-adminlte-input-switch name="iswText" data-on-text="YES" data-off-text="NO" data-on-color="teal" checked />

    {{-- Label, and prepend icon --}}
    <x-adminlte-input-switch name="iswPrepend" label="Switch">
        <x-slot name="prependSlot">
            <div class="input-group-text bg-lightblue">
                <i class="fas fa-toggle-on"></i>
            </div>
        </x-slot>
    </x-adminlte-input-switch>

    {{-- Label, slots and lg size --}}
    @php
        $config = [
            'onColor' => 'orange',
            'offColor' => 'dark',
            'inverse' => true,
            'animate' => false,
            'state' => true,
            'labelText' => '<i class="fas fa-2x fa-fw fa-lightbulb text-orange"></i>',
        ];
    @endphp
    <x-adminlte-input-switch name="iswSizeLG" label="Switch LG" igroup-size="lg" :config="$config">
        <x-slot name="appendSlot">
            <x-adminlte-button icon="fas fa-caret-right" title="On" />
        </x-slot>
        <x-slot name="prependSlot">
            <x-adminlte-button icon="fas fa-caret-left" title="Off" />
        </x-slot>
    </x-adminlte-input-switch>

    {{-- Indeterminate with icon and SM size --}}
    @php
        $config = [
            'onColor' => 'indigo',
            'offColor' => 'gray',
            'onText' => '1',
            'offText' => '0',
            'indeterminate' => true,
            'labelText' => '<i class="fas fa-power-off text-muted"></i>',
        ];
    @endphp
    <x-adminlte-input-switch name="iswSizeSM" label="Switch SM (indeterminate)" igroup-size="sm"
        :config="$config" />
    {{-- Minimal --}}
    <x-adminlte-select-bs name="selBsBasic">
        <option>Option 1</option>
        <option disabled>Option 2</option>
        <option selected>Option 3</option>
    </x-adminlte-select-bs>

    {{-- Disabled --}}
    <x-adminlte-select-bs name="selBsDisabled" disabled>
        <option>Option 1</option>
        <option>Option 2</option>
    </x-adminlte-select-bs>

    {{-- With prepend slot, label and data-* config --}}
    <x-adminlte-select-bs name="selBsVehicle" label="Vehicle" label-class="text-lightblue" igroup-size="lg"
        data-title="Select an option..." data-live-search data-live-search-placeholder="Search..." data-show-tick>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-info">
                <i class="fas fa-car-side"></i>
            </div>
        </x-slot>
        <option data-icon="fa fa-fw fa-car">Car</option>
        <option data-icon="fa fa-fw fa-motorcycle">Motorcycle</option>
    </x-adminlte-select-bs>

    {{-- With multiple slots, plugin config parameter and custom options --}}
    @php
        $config = [
            'title' => 'Select multiple options...',
            'liveSearch' => true,
            'liveSearchPlaceholder' => 'Search...',
            'showTick' => true,
            'actionsBox' => true,
        ];
    @endphp
    <x-adminlte-select-bs id="selBsCategory" name="selBsCategory[]" label="Categories" label-class="text-danger"
        igroup-size="sm" :config="$config" multiple>
        <x-slot name="prependSlot">
            <div class="input-group-text bg-gradient-red">
                <i class="fas fa-tag"></i>
            </div>
        </x-slot>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger" />
        </x-slot>
        <option data-icon="fa fa-fw fa-running text-info" data-subtext="Running">Sports</option>
        <option data-icon="fa fa-fw fa-futbol text-info" data-subtext="Futbol">Sports</option>
        <option data-icon="fa fa-fw fa-newspaper text-danger">News</option>
        <option data-icon="fa fa-fw fa-gamepad text-warning">Games</option>
        <option data-icon="fa fa-fw fa-flask text-primary">Science</option>
        <option data-icon="fa fa-fw fa-calculator text-dark">Maths</option>
    </x-adminlte-select-bs>
    {{-- Minimal --}}
    <x-adminlte-text-editor name="teBasic" />

    {{-- Disabled with content --}}
    <x-adminlte-text-editor name="teDisabled" disabled>
        <b>Lorem ipsum dolor sit amet</b>, consectetur adipiscing elit.
        <br>
        <i>Aliquam quis nibh massa.</i>
    </x-adminlte-text-editor>

    {{-- With placeholder, sm size, label and some configuration --}}
    @php
        $config = [
            'height' => '100',
            'toolbar' => [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        ];
    @endphp
    <x-adminlte-text-editor name="teConfig" label="WYSIWYG Editor" label-class="text-danger" igroup-size="sm"
        placeholder="Write some text..." :config="$config" />
</x-app-layout>

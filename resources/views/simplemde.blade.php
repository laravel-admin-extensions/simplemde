<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}} {{ $scopeClass }}">

        @include('admin::form.error')

        <textarea id="{{$id}}">{!! old($column, $value) !!}</textarea>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}"/>

        @include('admin::form.help-block')

    </div>
</div>

<style>
.{{ $scopeClass }} .editor-toolbar.fullscreen, .{{ $scopeClass }} .CodeMirror-fullscreen {
    z-index: 10000 !important;
}

.{{ $scopeClass }} .CodeMirror {
    height: {{ $height ?: 300 }}px;
}
</style>
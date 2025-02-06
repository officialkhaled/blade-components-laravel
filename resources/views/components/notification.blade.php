@props(['type' => 'success', 'message' => '', 'icon' => '', 'custom_style' => ''])

<div class="alert alert-{{ $type }}" style="{{ $custom_style ?? '' }}">
    <i class="{{ $icon }}"></i>
    {!! $message ? '&nbsp;&nbsp;' . e($message) : '' !!}
</div>

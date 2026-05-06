<div {{ $attributes->twMerge('calendar-draggable') }}>{{ $slot }}</div>

@pushOnce('styles')
    @vite('resources/css/vendors/full-calendar.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/calendar/calendar.js')
    @vite('resources/js/vendors/calendar/plugins/interaction.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/calendar/draggable.js')
@endPushOnce

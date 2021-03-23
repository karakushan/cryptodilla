<script>
    $(document).ready(function () {
        new PNotify({
            title: '{{ __('Успех') }}', text: '{{ $message }}', type: '{{ $status }}'
        });
    });
</script>

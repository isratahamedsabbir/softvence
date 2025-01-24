<script>
    @if (session()->has('t-success'))
        toastr.success("{{ session('t-success') }}");
        {{ session()->forget('t-success') }}
    @endif
    @if (session()->has('t-error'))
        toastr.error("{{ session('t-error') }}");
        {{ session()->forget('t-error') }}
    @endif
</script>

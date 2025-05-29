
@if(Session::has('success'))
<div id="alert" class="fixed top-4 right-4 z-50 p-4 bg-green-600 text-white rounded shadow transition-all duration-1000 ease-in-out transform">
    {{session('success')}}
</div>

<script>
    setTimeout(function() {
        const alertBox = document.getElementById('alert');
        alertBox.style.transform = 'translateX(120%)';
        alertBox.style.opacity = '0';
    }, 2000);
</script>

@endif

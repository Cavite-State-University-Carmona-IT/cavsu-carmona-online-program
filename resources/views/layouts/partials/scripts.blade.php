
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JIT SUPPORT, for using peer-* below -->
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

@livewireScripts

<script>
    const setup = () => {
    return {
            isSidebarOpen: false,
        }
    }
</script>

@yield('page-script')



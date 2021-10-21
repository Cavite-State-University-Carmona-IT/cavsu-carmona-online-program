

@section('page-script')
  <script>
    var mainNav = document.querySelector('#main-nav');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 5){
        mainNav.classList.add('shadow-lg')
      }
      else{
        mainNav.classList.remove('shadow-lg')
      }
    });

    document.querySelector('.dropdown').addEventListener('click', () => {
      document.querySelector('#dropdown').classList.toggle('hidden');
    });

    document.querySelector('.menu').addEventListener('click', () => {
      document.querySelector('#menu').classList.toggle('sm:hidden');
    });
  </script>
@endsection
<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @include('scripts.profile.user-profile')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <style>
    html{
      scroll-behavior: smooth;
    }
  </style>
  <nav class="w-full lg:h-14 sm:h-10 bg-white flex justify-center items-center sticky top-0 z-20 transition duration-200" id="main-nav">
    <div class="lg:w-10/12 sm:w-11/12 h-full flex items-center justify-between relative">
      <h1 class="lg:text-3xl sm:text-lg font-bold" style="color: #a1dd85">CvSU</h1>
      <h1 class="text-lg lg:hidden sm:flex menu"><i class="fas fa-bars"></i></i></h1>
      <ul class="lg:flex justify-center items-center text-base lg:flex-row text-gray-500 lg:top-0 lg:relative lg:w-auto sm:absolute sm:top-full sm:w-full sm:flex-col sm:hidden bg-white" id="menu">
        <li class="lg:ml-5 sm:ml-0 hover:text-black font-bold flex"><a href="#myCertificate" class="w-full hover:bg-gray-100 p-3 text-center">Certificate & Recent Views</a></li>
        <li class="lg:ml-5 sm:ml-0 hover:text-black font-bold flex"><a href="#course"  class="w-full hover:bg-gray-100 p-3 text-center">Course</a></li>
        <li class="lg:ml-5 sm:ml-0 hover:text-black font-bold flex"><a href="#about"  class="w-full hover:bg-gray-100 p-3 text-center">About</a></li>
      </ul>
    </div>
  </nav>

  <nav class="w-full lg:h-24 sm:h-16 bg-white shadow-lg flex justify-center items-center z-10" style="background-color: #a1dd85;">
    <div class="lg:w-10/12 sm:w-11/12 h-full flex items-center justify-between">
      <img src="" alt="CvSU">
      <div class="relative">
        <p class="dropdown cursor-pointer text-white text-2xl"><i class="fas fa-sort-down"></i></p>
        <ul class="absolute top-full flex justify-center items-center flex-col w-32 bg-white z-10 right-full hidden" id="dropdown">
          <li class="transition duration-200 hover:bg-gray-100 w-full p-2 text-center"><a href="#">Settings</a></li>
          <li class="transition duration-200 hover:bg-gray-100 w-full p-2 text-center"><a href="#">Help</a></li>
          <li class="transition duration-200 hover:bg-gray-100 w-full p-2 text-center"><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="w-full bg-gray-300 relative flex justify-center items-center relative" style="height: 45vh;">
    <div class="w-full absolute h-full">
      <img src="" class="w-full h-full object-cover" alt="">
    </div>
    <div class="flex absolute bottom-5 lg:w-10/12 sm:w-11/12">
      <div class="w-full flex sm2xl:items-end sm2xl:flex-row sm:items-center  sm:flex-col">
        <div class="lg:w-48 lg:h-48 sm2xl:h-40 sm2xl:w-40 sm:w-32 sm:h-32 overflow-hidden border border-white" style="border-radius: 50%;">
          <img src="" class="w-full h-full object-cover" alt="">
        </div>
        <div class="lg:ml-10 sm:ml-5 flex flex-col sm2xl:items-start sm:items-center">
          <h1 class="sm2xl:text-4xl sm:text-lg font-bold capitalize">Name <span class="sm2xl:text-lg sm:text-sm text-green-500 capitalize">Status</span></h1>
          <h1 class="tracking-widest sm2xl:text-2xl sm:text-lg text-white capitalize">nickname</h1>
        </div>
      </div>
    </div>
  </header>

  <div class="w-full flex justify-center items-center mt-10 rounded-lg" id="about">
    <div class="lg:w-10/12 sm:w-11/12 flex flex-wrap">
      <div class="lg:w-4/12 sm:w-full p-2">
        <div class="p-5 shadow-lg bg-white lg:h-80 sm:h-64 relative capitalize overflow-auto sm2xl:text-base sm:text-sm">
          <h1 class="font-bold sm2xl:text-2xl sm:text-base text-gray-500 ">OVERVIEW | ABOUT</h1>
          <p class="mt-5 ">Address</p>
          <p class="mt-2">Occupation status</p>
          <p class="mt-2">email address</p>
          <p class="mt-2">Member Since: 2021</p>
          <button class="mt-5 absolute bottom-5 right-5">Edit</button>
        </div>
      </div>
      <div class="lg:w-8/12 sm:w-full p-2">
        <div class="p-5 shadow-lg bg-white lg:h-80 sm:h-64 relative overflow-auto sm2xl:text-base sm:text-sm">
          <h1 class="font-bold sm2xl:text-2xl sm:text-base text-gray-500 ">Self Introduction</h1>
          <p class="mt-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In ducimus voluptatum dolor, ex facere suscipit voluptatibus at consequatur pariatur iusto quam corrupti odit atque aliquam doloribus quidem harum officia? Dignissimos?
          </p>
          <button class="mt-5 absolute bottom-5 right-5">Edit</button>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full flex justify-center items-center mt-10" id="myCertificate">
    <div class="lg:w-10/12 sm:w-11/12 p-2">
      <div class="lg:p-5 sm:p-3 shadow-lg bg-white">
        <h1 class="font-bold sm2xl:text-2xl sm:text-base text-gray-500 ">My E-Certificates</h1>
        <div class="mt-5 w-full flex flex-wrap">

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full ">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="w-full flex justify-center items-center mt-10">
    <div class="lg:w-10/12 sm:w-11/12 p-2">
      <div class="lg:p-5 sm:p-3 shadow-lg bg-white">
        <h1 class="font-bold sm2xl:text-2xl sm:text-base text-gray-500 ">Recently View</h1>
        <div class="mt-5 w-full flex flex-wrap">

        <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full ">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-48 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="w-full flex justify-center items-center mt-10" id="course">
    <div class="lg:w-10/12 sm:w-11/12 p-2">
      <div class="lg:p-5 sm:p-3 shadow-lg bg-white">
        <h1 class="font-bold sm2xl:text-2xl sm:text-base text-gray-500 ">My Course</h1>
        <div class="mt-5 w-full flex flex-wrap">

        <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-42 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-42 sm:h-40 p-1">
            <div class="w-full h-full ">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-42 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

          <div class="lg:w-3/12 sm2xl:w-4/12 sm:w-6/12 sm2xl:h-42 sm:h-40 p-1">
            <div class="w-full h-full">
              <img src="" class="w-full h-full object-cover" alt="">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <footer class="w-full flex justify-center items-center mt-10" style="background-color: #a1dd85;">
    <div class="lg:w-10/12 sm:w-11/12 p-2 flex flex-wrap justify-center items-center">
      <div  class="sm2xl:w-6/12 sm:w-full sm2xl:h-80 sm:h-auto flex flex-col pt-5 sm2xl:text-base sm:text-sm">
        <h1 class="mb-5 sm2xl:text-2xl sm:text-base font-bold text-green-700">ABOUT</h1>
        <p class="mb-2 text-green-700">Username: </p>
        <p class="mb-2 text-green-700">Birtday: </p>
        <p class="mb-2 text-green-700">Martial Status: </p>
        <p class="mb-2 text-green-700">Employment Status: </p>
        <p class="mb-2 text-green-700">Gender: </p>
        <p class="mb-2 text-green-700">Heighest Education Attainment: </p>
      </div>
      <div  class="sm2xl:w-6/12 sm:w-full flex sm2xl:h-80 sm:h-auto pt-5 pb-5 sm2xl:text-base sm:text-sm flex-col sm2xl:pl-10 sm:pl-0 sm2xl:border-l sm2xl:border-green-600 sm:border-0">
        <h1 class="mb-5 sm2xl:text-2xl sm:text-base font-bold text-green-700">CONTACT</h1>
        <p class="mb-2 text-green-700">Contact No.: </p>
        <p class="mb-2 text-green-700">Email Address: </p>
        <p class="mb-2 text-green-700">Address: </p>
      </div>
    </div>
  </footer>
</div>

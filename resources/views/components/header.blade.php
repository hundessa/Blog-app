  <div class="header-bg transition-all duration-300">
      <div x-data="{ scrolled: false }"
          x-init="() => window.addEventListener('scroll', () => scrolled = window.scrollY >= 50)"
          :class="scrolled ? 'header-nav shadow-md fixed top-0 left-0 w-full z-10 flex justify-around items-center py-6' : 'flex justify-around pt-10 items-center'">
          <div class="items-center cursor-pointer">
              <h1 class="font-medium text-slate200 text-white text-3xl">MyBlog</h1>
          </div>
          <ul class="flex space-x-8 uppercase text-lg text-white text-opacity-75 items-center">
              <a class="hover:text-white transform hover:-translate-y-1 transition duration-200" href="#">Home</a>
              <a class="hover:text-white transform hover:-translate-y-1 transition duration-200" href="#"> Categories</a>
              <a class="hover:text-white transform hover:-translate-y-1 transition duration-200" href="#"> About</a>
              <a class="hover:text-white transform hover:-translate-y-1 transition duration-200" href="#"> Contact</a>
          </ul>
          <div class="space-x-4 flex items-center my-auto">
              <button class="signup-btn text-white text-lg px-4 py-1 rounded-md" @click="window.location.href='{{ route('sign-up') }}'">Sign Up</button>
              <button class="signin-btn text-white rounded-md px-4 py-1 text-lg font-semibold" @click="window.location.href='{{ route ('sign-in') }}'">Sign In</button>
          </div>
      </div>
      <div class="flex relative top-44 justify-center items-center">
          <div class="space-y-6">
              <h1 class="flex justify-center text-white text-7xl">Let's do it together.</h1>
              <h2 class=" text-white text-opacity-70 text-2xl">We travel the world in search of a stories. Come along for the ride.</h2>
              <div class="flex justify-center">
                  <button class="text-white font-medium px-8 py-4 rounded-lg text-xl transition-all ease-in-out duration-500 btnbg">View Latest Posts</button>
              </div>
          </div>
      </div>
  </div>
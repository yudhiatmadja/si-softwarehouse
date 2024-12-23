<nav class="flex flex-row max-w-6xl mx-auto justify-between py-4 items-center">
    <!-- Icon mobile view -->
    <div class="block lg:hidden">
      <button id="menu-toggle" class="text-gray-800 focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>

    <img src="images/logo.png" alt="" class="h-10" />

    <!-- Menu items -->
    <ul id="menu" class="hidden lg:flex flex-row space-x-8">
      <li>
        <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#">Beranda</a>
      </li>
      <li>
        <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#partner">Partner</a>
      </li>
      <li>
        <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#layanan">Layanan</a>
      </li>
      <li>
        <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#proyek">Proyek Kami</a>
      </li>
    </ul>

    <!-- Social media icons -->
    <div class="flex space-x-4">
      <a href="https://instagram/yudhiiatmadja" target="_blank" class="rounded-full bg-white">
        <svg class="w-6 h-6 text-gray-800 hover:scale-125" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path
            fill="currentColor"
            fill-rule="evenodd"
            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
      <a href="https://www.linkedin.com/in/yudhiiatmadja/" target="_blank" class="rounded-full bg-white">
        <svg class="w-6 h-6 text-gray-800 hover:scale-125" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path
            fill-rule="evenodd"
            d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
            clip-rule="evenodd"
          />
          <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
        </svg>
      </a>
      <a href="https://wa.me/6285649715747" target="_blank" class="rounded-full bg-white">
        <svg class="w-6 h-6 text-gray-800 hover:scale-125" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path
            fill="currentColor"
            fill-rule="evenodd"
            d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
            clip-rule="evenodd"
          />
          <path
            fill="currentColor"
            d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"
          />
        </svg>
      </a>
    </div>
  </nav>

  <!-- Mobile menu -->
  <ul id="mobile-menu" class="hidden lg:hidden flex-col items-center space-y-4 mt-4">
    <li>
      <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#">Beranda</a>
    </li>
    <li>
      <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#partner">Partner</a>
    </li>
    <li>
      <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#layanan">Layanan</a>
    </li>
    <li>
      <a class="text-base text-indigo-950 hover:font-semibold hover:text-violet-700" href="#proyek">Proyek Kami</a>
    </li>
  </ul>

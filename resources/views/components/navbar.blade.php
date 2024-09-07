<div class="relative z-10 flex-shrink-0 h-16 bg-white shadow">
  <div class="flex justify-between h-full px-4">
      <div class="flex items-center">
          <button class="px-4 text-gray-500 focus:outline-none md:hidden" aria-label="Open sidebar">
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
          </button>
      </div>
      <div class="flex items-center space-x-4">
          <button class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <span class="sr-only">View notifications</span>
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11.5A5.5 5.5 0 0012.5 6h-.25A5.5 5.5 0 007 11.5v2.658c0 .518-.214 1.016-.595 1.437L5 17h5m0 0a3 3 0 01-6 0m6 0a3 3 0 006 0" />
              </svg>
          </button>
          <div class="relative">
              <button id="user-menu-button" class="flex items-center text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="toggleDropdown()">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="{{ asset('images/profile/images.png') }}" alt="profile_pic">
                  <i id="chevron-icon" class="fas fa-chevron-down ml-2"></i>
              </button>
              <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                      <i class="fas fa-user mr-2"></i>Profile
                  </a>
                  <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                      <i class="fas fa-cog mr-2"></i>Settings
                  </a>
                  <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                      <i class="fas fa-sign-out-alt mr-2"></i>Logout
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
  function toggleDropdown() {
      const userMenu = document.getElementById('user-menu');
      const chevronIcon = document.getElementById('chevron-icon');
      userMenu.classList.toggle('hidden');
      chevronIcon.classList.toggle('fa-chevron-down');
      chevronIcon.classList.toggle('fa-chevron-up');
  }
  window.onclick = function(event) {
      if (!event.target.matches('#user-menu-button') && !event.target.matches('#chevron-icon')) {
          const userMenu = document.getElementById('user-menu');
          const chevronIcon = document.getElementById('chevron-icon');
          if (!userMenu.classList.contains('hidden')) {
              userMenu.classList.add('hidden');
              chevronIcon.classList.remove('fa-chevron-up');
              chevronIcon.classList.add('fa-chevron-down');
          }
      }
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="h-full bg-gray-100">
  <div class="flex h-screen overflow-hidden bg-gray-100">
    <!-- Sidebar -->
    <div class="hidden md:flex md:flex-shrink-0">
      <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-indigo-700">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
          </div>
          <div class="mt-5 flex-grow flex flex-col">
            <nav class="flex-1 px-2 space-y-1 bg-indigo-700" id="menu">
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600" onclick="showContent('dashboard')">
                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v4M3 3h4m0 0v4m0 0H3m18 0v4m-4-4h4m0 0v4m0 0h-4m-6 0a9 9 0 100 18 9 9 0 000-18z" />
                </svg>
                Dashboard
              </a>
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600" onclick="showContent('reports')">
                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m-7 4h8a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v11a2 2 0 002 2z" />
                </svg>
                Reports
              </a>
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600" onclick="showContent('tasks')">
                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m-6 4h12m-6 2v2m6 4H3" />
                </svg>
                Tasks
              </a>
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600" onclick="showContent('calendar')">
                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 4H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v7a2 2 0 01-2 2z" />
                </svg>
                Calendar
              </a>
              <a href="#" class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600" onclick="showContent('documents')">
                <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                Documents
              </a>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="flex flex-col flex-1 w-0 overflow-hidden">
      <div class="relative z-10 flex flex-shrink-0 h-16 bg-white shadow">
        <button class="px-4 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden" aria-label="Open sidebar">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
          </svg>
        </button>
        <div class="flex justify-between flex-1 px-4">
          <div class="flex flex-1">
            <div class="flex w-full md:ml-0">
              <label for="search-field" class="sr-only">Search</label>
              <input id="search-field" class="block w-full pl-10 pr-3 py-2 border border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
            </div>
          </div>
          <div class="flex items-center ml-4 md:ml-6">
            <button class="p-1 text-gray-400 bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              <span class="sr-only">View notifications</span>
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11.5A5.5 5.5 0 0012.5 6h-.25A5.5 5.5 0 007 11.5v2.658c0 .518-.214 1.016-.595 1.437L5 17h5m0 0a3 3 0 01-6 0m6 0a3 3 0 006 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button class="flex items-center max-w-xs text-sm bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1542059991008-f44b6b89e1b4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=296&q=80" alt="">
                </button>
              </div>

              <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
            </div>
          </div>
        </div>
      </div>

      <!-- Main content area -->
      <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <div class="py-6">
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
          </div>
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div id="content" class="py-4">
              <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
                <h2 class="text-xl font-medium text-gray-900">Welcome to your dashboard</h2>
                <p class="mt-2 text-gray-600">Select an item from the menu to see more details here.</p>
              </div>
            </div>
            <!-- /End replace -->
          </div>
        </div>
      </main>
    </div>
  </div>

  <script>
    function showContent(content) {
      const contentDiv = document.getElementById('content');
      let html = '';
      switch(content) {
        case 'dashboard':
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Dashboard Overview</h2>
              <p class="mt-2 text-gray-600">This is the dashboard overview content.</p>
            </div>
          `;
          break;
        case 'reports':
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Reports</h2>
              <p class="mt-2 text-gray-600">This is the reports content.</p>
            </div>
          `;
          break;
        case 'tasks':
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Tasks</h2>
              <p class="mt-2 text-gray-600">This is the tasks content.</p>
            </div>
          `;
          break;
        case 'calendar':
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Calendar</h2>
              <p class="mt-2 text-gray-600">This is the calendar content.</p>
            </div>
          `;
          break;
        case 'documents':
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Documents</h2>
              <p class="mt-2 text-gray-600">This is the documents content.</p>
            </div>
          `;
          break;
        default:
          html = `
            <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
              <h2 class="text-xl font-medium text-gray-900">Welcome to your dashboard</h2>
              <p class="mt-2 text-gray-600">Select an item from the menu to see more details here.</p>
            </div>
          `;
      }
      contentDiv.innerHTML = html;
    }
  </script>
</body>
</html>

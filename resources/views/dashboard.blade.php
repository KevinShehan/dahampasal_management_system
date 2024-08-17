@extends("_layouts.app_view")




<body class="h-full bg-gray-100">
  <div class="flex h-screen overflow-hidden bg-gray-100">
    <!-- Sidebar -->
    @include("components.sidenavbar")

    <!-- Main content -->
    @include("components.navbar")

  </div>

  {{-- <script>
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
  </script> --}}
</body>
</html>

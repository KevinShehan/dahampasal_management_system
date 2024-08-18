<style>
    .icon-chevron-right::before {
        content: '\f054';
        /* Unicode for chevron-right */
    }

    .icon-chevron-down::before {
        content: '\f078';
        /* Unicode for chevron-down */
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" defer></script>
<script>
    function toggleSubMenu(event) {
        const subMenu = event.currentTarget.nextElementSibling;
        const chevronIcon = event.currentTarget.querySelector('.chevron-icon');
        subMenu.classList.toggle('hidden');
        chevronIcon.classList.toggle('icon-chevron-right');
        chevronIcon.classList.toggle('icon-chevron-down');
    }
</script>

<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow pt-5 pb-4 overflow-y-auto bg-indigo-700">
            <div class="flex items-center flex-shrink-0 px-4">
                <img class="w-auto h-8"
                    src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
            </div>
            <div class="mt-5 flex-grow flex flex-col">
                <nav class="flex-1 px-2 space-y-1 bg-indigo-700" id="menu">
                    <a href="/dashboard"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                        onclick="showContent('dashboard')">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v4M3 3h4m0 0v4m0 0H3m18 0v4m-4-4h4m0 0v4m0 0h-4m-6 0a9 9 0 100 18 9 9 0 000-18z" />
                        </svg>
                        Dashboard
                    </a>


                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                        onclick="toggleSubMenu()">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m-7 4h8a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v11a2 2 0 002 2z" />
                        </svg>
                        Reports
                        <svg id="chevronIcon" class="w-4 h-4 ml-auto icon-chevron-right"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <div id="subMenu" class="hidden ml-8 mt-2 space-y-2">
                        <a href="/viewstudents"
                            class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600">
                            Student Report
                        </a>
                        <a href="/addstudent"
                            class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600">
                            Teacher Report
                        </a>
                    </div>



                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                        onclick="showContent('tasks')">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m-6 4h12m-6 2v2m6 4H3" />
                        </svg>
                        Tasks
                    </a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                        onclick="showContent('calendar')">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m2 4H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v7a2 2 0 01-2 2z" />
                        </svg>
                        Calendar
                    </a>
                    <a href="#"
                        class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                        onclick="showContent('documents')">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Documents
                    </a>

                    <a href="/academics"
                        class="flex items-center text-white block py-2 px-2 rounded transition rounded-md duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Academics
                    </a>
                    <a href="/administrative"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Administrative
                    </a>
                    {{-- Student Menu --}}
                    <div>
                        <a href="#"
                            class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600"
                            onclick="toggleSubMenu(event)">
                            <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                            Students
                            <svg class="w-4 h-4 ml-auto chevron-icon icon-chevron-right"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>

                        <div class="hidden ml-8 mt-2 space-y-2">
                            <a href="/addstudent"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600">
                                Add Student
                            </a>
                            <a href="/viewstudents"
                                class="flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-indigo-600">
                                View Students
                            </a>
                        </div>
                    </div>






                    <a href="/users"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <i class="fas fa-user w-6 h-6 mr-3 text-indigo-300"></i>
                        Users
                        <svg class="w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>






                    <a href="/classes"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Classes
                    </a>
                    <a href="/dormitories"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>Dormitories
                    </a>
                    <a href="/sections"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Sections
                    </a>
                    <a href="/subjects"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Subjects
                    </a>
                    <a href="/exams"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Exams
                    </a>
                    <a href="/settings"
                        class="flex items-center text-white block py-2 px-2 rounded transition duration-200 hover:bg-indigo-600">
                        <svg class="w-6 h-6 mr-3 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>Settings
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>

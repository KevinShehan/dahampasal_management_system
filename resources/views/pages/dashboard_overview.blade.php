<!-- Main content area -->
<main class="relative flex-1 overflow-y-auto focus:outline-none">
    <div class="py-6">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        </div>
        <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">


            <div class="flex space-x-9 mt-8">
                <!-- Card 1 -->
                <div
                    class="flex max-w-sm bg-blue-100 rounded-lg shadow-md p-4 items-center hover:-translate-y-1 hover:shadow-lg hover:border-blue-400"">
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold mb-2">Total Students</h3>
                        <p class="text-gray-700 font-semibold">12</p>
                    </div>
                    <div>
                        <img class="w-12 h-12 text-blue-600 rounded-full"
                            src="{{ asset('images/card/student.gif') }}" alt="profile_pic">
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="flex max-w-sm bg-red-100 rounded-lg shadow-md p-4 items-center hover:-translate-y-1 hover:shadow-lg hover:border-blue-400">
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold mb-2">Total Teachers</h3>
                        <p class="text-gray-700">8</p>
                    </div>
                    <div>
                        <div>
                            <img class="w-12 h-12 text-blue-600 rounded-full"
                                src="{{ asset('images/card/teacher.gif') }}" alt="profile_pic">
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="flex max-w-sm bg-green-100 rounded-lg shadow-md p-4 items-center hover:-translate-y-1 hover:shadow-lg hover:border-blue-400">
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold mb-2">Total Administrators</h3>
                        <p class="text-gray-700">5</p>
                    </div>
                    <div>
                        <div>
                            <img class="w-12 h-12 text-blue-600 rounded-full"
                                src="{{ asset('images/card/classroom.gif') }}" alt="profile_pic">
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="flex max-w-sm bg-blue-200 rounded-lg shadow-md p-4 items-center hover:-translate-y-1 hover:shadow-lg hover:border-blue-400">
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold mb-2">Non Academic Staff</h3>
                        <p class="text-gray-700">7</p>
                    </div>
                    <div>
                        <div>
                            <img class="w-12 h-12 text-blue-600 rounded-full"
                                src="{{ asset('images/card/family.gif') }}" alt="profile_pic">
                        </div>
                    </div>
                </div>
            </div>



            <!-- Replace with your content -->
            <div id="content" class="py-4">
                <div class="p-6 bg-white border-b border-gray-200 rounded-lg shadow-sm">
                    <h2 class="text-xl font-medium text-gray-900">Event Calender</h2>
                    <p class="mt-2 text-gray-600">Select an item from the menu to see more details here.</p>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const today = new Date();
                            const month = today.getMonth(); // Current month
                            const year = today.getFullYear(); // Current year

                            const daysInMonth = new Date(year, month + 1, 0).getDate(); // Number of days in the month
                            const firstDayIndex = new Date(year, month, 1).getDay(); // First day of the month (0-6)

                            const calendar = document.getElementById('calendar');
                            const monthYear = document.getElementById('monthYear');

                            const months = [
                                'January', 'February', 'March', 'April', 'May', 'June',
                                'July', 'August', 'September', 'October', 'November', 'December'
                            ];

                            monthYear.textContent = `${months[month]} ${year}`;

                            // Add empty divs for days of the week before the 1st of the month
                            for (let i = 0; i < firstDayIndex; i++) {
                                const emptyDiv = document.createElement('div');
                                calendar.appendChild(emptyDiv);
                            }

                            // Add day numbers to the calendar
                            for (let day = 1; day <= daysInMonth; day++) {
                                const dayDiv = document.createElement('div');
                                dayDiv.className = 'flex items-center justify-center border border-gray-200 p-2';
                                dayDiv.textContent = day;
                                calendar.appendChild(dayDiv);
                            }
                        });
                    </script>

                    <div class="container mx-auto px-4 py-8">
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="text-center mb-6">
                                <h2 id="monthYear" class="text-2xl font-semibold"></h2>
                            </div>
                            <div class="grid grid-cols-7 gap-4 text-center text-gray-700">
                                <div class="font-semibold">Sun</div>
                                <div class="font-semibold">Mon</div>
                                <div class="font-semibold">Tue</div>
                                <div class="font-semibold">Wed</div>
                                <div class="font-semibold">Thu</div>
                                <div class="font-semibold">Fri</div>
                                <div class="font-semibold">Sat</div>
                            </div>
                            <div id="calendar" class="grid grid-cols-7 gap-4 mt-4 text-center text-gray-700">
                            </div>
                        </div>
                    </div>









                </div>
            </div>
            <!-- /End replace -->
        </div>
    </div>
</main>
@extends('_layouts.app_view')

@section('content')
<main class="relative   focus:outline-none ">
    <div class="">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4 text-center">Student Registration</h2>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="first_name">First Name</label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="first_name" name="first_name" type="text" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="last_name">Last Name</label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="last_name" name="last_name" type="text" placeholder="Last Name" required>
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="phone">Phone Number</label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" type="tel" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="dob">Date of Birth</label>
                    <input class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dob" name="dob" type="date">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="address">Address</label>
                    <textarea class="shadow appearance-none border rounded w-full py-1 px-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" name="address" placeholder="Address"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            timer: 3000,
            showConfirmButton: false
        });
    @endif
</script>
@endsection

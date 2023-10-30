@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="flex text-[#002745]  justify-evenly items-center space-x-4 mt-10 mx-10">
            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Interviews</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">26</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="#" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Applications</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">20</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="#" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-briefcase"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Job Offers</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">400</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="#" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-credit-card"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl ">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Candidates</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">12</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="#" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </section>


        <section class="mx-10 my-10 text-[#002745] flex items-center max-md:flex-wrap space-x-4">

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Overview Interviews</h3>
                <table class="display whitespace-nowrap" id="table1">
                    <thead>
                        <tr>
                            <th class="uppercase  text-xs opacity-50">Full Name</th>
                            <th class="uppercase  text-xs opacity-50">Phone</th>
                            <th class="uppercase  text-xs opacity-50">Company</th>
                            <th class="uppercase  text-xs opacity-50 ">Status</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>
                                <a href="#" class="text-gray-500 font-semibold text-sm">Joyce Wawira</a>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">+254712345678</p>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">Kulinda Security</p>
                            </td>
                            <td>
                                <p class="px-2 py-1 text-center bg-[#207456]  rounded-3xl text-white">Ongoing</p>
                            </td>

                    </tbody>
                </table>
            </div>

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Job Applications</h3>
                <table class="display whitespace-nowrap" id="table2">
                    <thead>
                        <tr>
                            <th class="uppercase  text-xs opacity-50">Full Nme</th>
                            <th class="uppercase  text-xs opacity-50">Position</th>
                            <th class="uppercase  text-xs opacity-50">Phone</th>
                            <th class="uppercase  text-xs opacity-50">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">Joseph Muli</p>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">Gardener</p>
                            </td>
                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">+254712345678</p>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">
                                    {{-- @if ($application->status == '1')
                                        <span class="text-green-500">Pending</span>
                                    @elseif($application->status == '2')
                                        <span class="text-orange-300">Approved</span>
                                    @elseif($application->status == '3') --}}
                                    <span class="text-red-500">Rejected</span>
                                    {{-- @endif --}}
                                </p>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>

        </section>
    </section>
@endsection

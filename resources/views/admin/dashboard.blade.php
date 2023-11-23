@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="flex text-[#002745]  justify-evenly items-center space-x-4 mt-10 mx-6">
            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Interviews</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">{{ count($interviews) }}</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="{{ route('listing') }}" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Applications</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">{{ count($applications) }}</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="{{ route('listing') }}" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-briefcase"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Job Offers</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">{{ count($jobs) }}</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="{{ route('offers') }}" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-credit-card"></i>
                    </div>
                </div>
            </div>

            <div
                class="w-1/4 h-aut0 p-2 rounded-md bg-white shadow-sm transition duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl ">
                <h3 class="opacity-50  my-2 mx-4 uppercase text-sm">Candidates</h3>
                <h3 class="mx-4 my-2 opacity-80 text-3xl">{{ count($applicants) }}</h3>
                <div class=" mx-4 flex justify-between items-center">
                    <a href="{{ route('applicants') }}" class="underline text-[#405189] opacity-70">View details</a>
                    <div
                        class="h-12 w-12 text-xl flex justify-center space-x-4 items-center bg-[#D2F0EC] text-[#34BAA5] rounded-md">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
            </div>
        </section>


        <section class="mx-6 my-10 text-[#002745] flex items-center max-md:flex-wrap space-x-4">

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Overview Jobs</h3>
                <table class="display whitespace-nowrap" id="table1">
                    <thead>
                        <tr>
                            <th class="uppercase  text-xs opacity-50">Company</th>
                            <th class="uppercase  text-xs opacity-50">Position</th>
                            <th class="uppercase  text-xs opacity-50 ">Period</th>
                            <th class="uppercase  text-xs opacity-50">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($jobs as $job)
                            <tr>
                                <td>
                                    <p class="text-gray-500 font-semibold text-sm"> {{ $job->company }} </p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $job->position }}</p>
                                </td>
                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $job->period }}</p>
                                </td>
                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">
                                        {{ Carbon\Carbon::parse($job->created_at)->format('d.m.Y') }}</p>
                                </td>
                            </tr>
                        @endforeach

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



                        @foreach ($users as $user)
                            <tr>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $user->full_name }}</p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $user->position }}</p>
                                </td>
                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $user->phone }}</p>
                                </td>

                                <td>

                                    @if ($user->status == '1')
                                        <p
                                            class="px-2 py-0.5 text-center border border-[#FFA755] text-[#FFA755]  rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Pending
                                        </p>
                                    @elseif ($user->status == '2')
                                        <p
                                            class="px-2  py-0.5 text-center border border-[#3498db] text-[#3498db] rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Ongoing
                                        </p>
                                    @elseif($user->status == '3')
                                        <p
                                            class="px-1 py-0.5 text-center border border-[#e74c3c] text-[#e74c3c] rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Rejected
                                        </p>
                                    @elseif($user->status == '4')
                                        <p
                                            class="px-1 py-0.5 text-center border border-[#D766C2] text-[#D766C2] rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Approved
                                        </p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </section>
    </section>
@endsection

@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="mx-10 my-10 text-[#002745]">

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Job Applications</h3>
                <table class="display whitespace-nowrap" id="table1">
                    <thead>
                        <tr>

                            <th class="uppercase  text-xs opacity-50">Name</th>
                            <th class="uppercase  text-xs opacity-50">Email</th>
                            <th class="uppercase  text-xs opacity-50">Company</th>
                            <th class="uppercase  text-xs opacity-50">Position</th>
                            <th class="uppercase  text-xs opacity-50">Applied On</th>
                            <th class="uppercase  text-xs opacity-50 ">Progress</th>
                            <th class="uppercase  text-xs opacity-50 ">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($applications as $application)
                            <tr>

                                <td>
                                    <a href="/admin/applicant/detail/{{ $application->user_id }}"
                                        class="text-gray-500 font-semibold text-sm hover:text-[#34BAA5]">{{ $application->full_name }}</a>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $application->email }}</p>
                                </td>

                                <td>
                                    <p class="text-gray-500 font-semibold text-sm"> {{ $application->company }} </p>
                                </td>

                                <td>
                                    <p class="text-gray-500 font-semibold text-sm">{{ $application->position }}</p>
                                </td>
                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">
                                        {{ Carbon\Carbon::parse($application->created_at)->format('d.m.Y') }}</p>
                                </td>

                                <td>

                                    @if ($application->status == '1')
                                        <p
                                            class="px-2 py-0.5 text-center border border-[#FFA755] text-[#FFA755]  rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Pending
                                        </p>
                                    @elseif ($application->status == '2')
                                        <p
                                            class="px-2  py-0.5 text-center border border-[#3498db] text-[#3498db] rounded-3xl">
                                            <i class="fa fa-dot-circle-o"></i> Ongoing
                                        </p>
                                    @endif
                                </td>

                                <td class="space-x-2">
                                    <div class="relative inline-block text-left" x-data="{ isOpen: false }">
                                        <button @click="isOpen = !isOpen" type="button"
                                            class="inline-flex items-center justify-center w-full rounded-md shadow-sm px-4 py-2 text-sm font-medium text-gray-700 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200  active:text-gray-800">
                                            <i class="fa fa-ellipsis-v mr-2 self-center"></i>
                                        </button>

                                        <div x-show="isOpen" @click.away="isOpen = false"
                                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10">
                                            <div class="py-2 font-medium" role="menu" aria-orientation="vertical"
                                                aria-labelledby="options-menu">

                                                @if ($application->status == '1')
                                                    <form action="{{ route('approve', ['id' => $application->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="block text-left w-full px-4 py-2 text-sm text-green-700 hover:bg-green-100 hover:text-green-900"
                                                            role="menuitem"><i
                                                                class="fa fa-check-circle mr-2"></i>Approve</button>
                                                    </form>

                                                    <form action="{{ route('reject', ['id' => $application->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="block text-left w-full px-4 py-2 text-sm text-red-700 hover:bg-red-100 hover:text-red-900"
                                                            role="menuitem"><i
                                                                class="fa fa-times-circle mr-2"></i>Reject</button>
                                                    </form>
                                                @elseif($application->status == '2')
                                                    <form action="{{ route('reject', ['id' => $application->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="block text-left w-full px-4 py-2 text-sm text-red-700 hover:bg-red-100 hover:text-red-900"
                                                            role="menuitem"><i
                                                                class="fa fa-times-circle mr-2"></i>Reject</button>
                                                    </form>
                                                    <form action="{{ route('hire', ['id' => $application->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="block text-left w-full px-4 py-2 text-sm text-[#D766C2] hover:bg-[#efc5e8] hover:text-[#D766C2]"
                                                            role="menuitem"><i
                                                                class="fab fa-hire-a-helper mr-2"></i>Hire</button>
                                                    </form>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if (session('status'))
                <div class="py-1 absolute right-14 top-2 px-6 rounded-md font-medium  text-white bg-[#34BAA5]"
                    id="job-status">
                    <i class="fa fa-check-circle"></i>
                    {{ session('status') }}
                </div>
            @endif

        </section>
    </section>
@endsection

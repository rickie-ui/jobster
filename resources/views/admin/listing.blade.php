@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="mx-10 my-10 text-[#002745]">

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Job Applications</h3>
                <table class="display whitespace-nowrap" id="table1">
                    <thead>
                        <tr>
                            <th class="uppercase  text-xs opacity-50">Position</th>
                            <th class="uppercase  text-xs opacity-50">Name</th>
                            <th class="uppercase  text-xs opacity-50">Email</th>
                            <th class="uppercase  text-xs opacity-50">Phone</th>
                            <th class="uppercase  text-xs opacity-50">Applied On</th>
                            <th class="uppercase  text-xs opacity-50 ">Status</th>
                            <th class="uppercase  text-xs opacity-50 ">Profile</th>
                            <th class="uppercase  text-xs opacity-50 ">Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>
                                <a href="#" class="text-gray-500 font-semibold text-sm">Painter</a>
                            </td>

                            <td>
                                <a href="#" class="text-gray-500 font-semibold text-sm">Joyce Wawira</a>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">joycewawira@gmail.com</p>
                            </td>

                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">+254712345678</p>
                            </td>
                            <td>
                                <p class="text-gray-500 text-sm font-semibold mb-0">24-01-2023</p>
                            </td>

                            <td>
                                <p class="px-2 py-1 text-center bg-[#FFA755]  rounded-3xl font-light text-white">Pending</p>
                            </td>

                            <td>
                                <a href="#" class="text-[#207456] text-sm font-semibold mb-0 hover:opacity-60"> <i
                                        class="fa fa-eye"></i>&ensp;Details</a>
                            </td>
                            <td class="space-x-2">

                                <a href="#"
                                    class="border border-[#34BAA5] text-[#34BAA5] py-1 px-3 rounded-md hover:bg-[#34BAA5] hover:text-white"
                                    title="shortlist"><i class="fa fa-check"></i></a>

                                <a href="#"
                                    class="border border-red-300 text-red-400 py-1 px-3 rounded-md hover:bg-red-400 hover:text-white"
                                    title="reject"><i class="fa fa-ban"></i></a>
                                {{-- 
                                <a href="#"
                                    class="border border-[#D766C2] text-[#D766C2] py-1 px-3 rounded-md hover:bg-[#D766C2] hover:text-white"
                                    title="complete"><i class="fa fa-eye"></i></a> --}}
                                <a href="#"
                                    class="border border-[#FFA755] text-[#FFA755] py-1 px-3 rounded-md hover:bg-[#FFA755] hover:text-white"
                                    title="download cv"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </section>
@endsection

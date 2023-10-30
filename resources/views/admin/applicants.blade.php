@extends('layouts.admin')

@section('content')
    <section class="p-4">
        <section class="mx-10 my-10 text-[#002745]">

            <div class="w-full bg-white px-4 py-4 rounded-sm">
                <h3 class="mb-4">Overview Candidates</h3>
                <table class="display whitespace-nowrap" id="table1">
                    <thead>
                        <tr>
                            <th class="uppercase  text-xs opacity-50">Full Name</th>
                            <th class="uppercase  text-xs opacity-50">Email</th>
                            <th class="uppercase  text-xs opacity-50">Phone</th>
                            <th class="uppercase  text-xs opacity-50 ">Location</th>
                            <th class="uppercase  text-xs opacity-50 "></th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
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
                                <p class="text-gray-500 text-sm font-semibold mb-0">Mombasa</p>
                            </td>


                            <td>
                                <a href="#" class="text-[#207456] text-sm font-semibold mb-0 hover:opacity-60"> <i
                                        class="fa fa-eye"></i>&ensp;View
                                    profile</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    </section>
@endsection

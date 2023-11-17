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
                            <th class="uppercase  text-xs opacity-50">Gender</th>
                            <th class="uppercase  text-xs opacity-50">Age</th>
                            <th class="uppercase  text-xs opacity-50">Phone</th>
                            <th class="uppercase  text-xs opacity-50 ">Location</th>
                            <th class="uppercase  text-xs opacity-50 "></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($applicants as $applicant)
                            <tr>
                                <td>
                                    <p class="text-gray-500 font-semibold text-sm">{{ $applicant->full_name ?? 'N/A' }}</p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $applicant->email ?? 'N/A' }}
                                    </p>
                                </td>
                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $applicant->gender ?? 'N/A' }}
                                    </p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $applicant->age ?? 'N/A' }}
                                    </p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $applicant->phone ?? 'N/A' }}
                                    </p>
                                </td>

                                <td>
                                    <p class="text-gray-500 text-sm font-semibold mb-0">{{ $applicant->location ?? 'N/A' }}
                                    </p>
                                </td>


                                <td>
                                    <a href="/admin/applicant/detail/{{ $applicant->id }}"
                                        class="text-[#207456] text-sm font-semibold mb-0 hover:opacity-60"> <i
                                            class="fa fa-eye"></i>&ensp;View
                                        profile</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>
    </section>
@endsection

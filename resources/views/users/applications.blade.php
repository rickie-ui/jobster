@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-8/12 mx-auto p-4 bg-white rounded-lg">
        <h2 class="my-4 font-semibold text-2xl opacity-70">Jobs Applied</h2>
        <hr class=" border mb-10">

        <table id="applications" class="display">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Date Applied</th>
                    <th>Details</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr class="whitespace-nowrap">
                        <td>{{ $result->position }}</td>
                        <td>{{ $result->company }}</td>
                        <td>{{ $result->location }}</td>
                        <td> {{ Carbon\Carbon::parse($result->created_at)->format('d F, Y') }}
                        </td>
                        <td><a href="/users/jobs/detail/{{ $result->job_id }}" class="text-[#207456]"><i class="fa fa-eye"></i>
                                View Details</a></td>

                        <td>
                            @if ($result->status == '1')
                                <p class="px-4  py-0.5 text-center border border-[#FFA755] text-[#FFA755]  rounded-3xl">
                                    <i class="fa fa-dot-circle-o"></i> Pending
                                </p>
                            @elseif ($result->status == '2')
                                <p class="px-4 py-0.5 text-center border border-[#3498db] text-[#3498db] rounded-3xl">
                                    <i class="fa fa-dot-circle-o"></i> Ongoing
                                </p>
                            @elseif ($result->status == '3')
                                <p class="px-4 py-0.5 text-center border border-[#e74c3c] text-[#e74c3c] rounded-3xl">
                                    <i class="fa fa-dot-circle-o"></i> Rejected
                                </p>
                            @elseif ($result->status == '4')
                                <p class="px-4 py-0.5 text-center border border-[#D766C2] text-[#D766C2] rounded-3xl">
                                    <i class="fa fa-dot-circle-o"></i> Approved
                                </p>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection

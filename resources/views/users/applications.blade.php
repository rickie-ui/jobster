@extends('layouts.nav')

@section('content')
    <section class="mt-20 w-7/12 mx-auto p-4 bg-white rounded-lg">
        <h2 class="my-4 font-semibold text-2xl opacity-70">Jobs Applied</h2>
        <hr class=" border mb-10">

        <table id="applications" class="display">
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Location</th>
                    <th>Date Applied</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gardener</td>
                    <td>Nairobi</td>
                    <td>June 12, 2023</td>
                    <td>Pending</td>
                    <td><a href="#">View details</a></td>
                    <td>
                        <p class="px-2 py-1 text-center bg-[#207456]  rounded-3xl text-white">Open</p>
                    </td>
                </tr>
                <tr>
                    <td>Painter</td>
                    <td>Nairobi</td>
                    <td>June 21, 2023</td>
                    <td>Rejected</td>
                    <td><a href="#">View details</a></td>
                    <td>
                        <p class="px-2 py-1 text-center bg-red-300  rounded-3xl text-white">Closed</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection

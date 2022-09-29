@extends('layouts.main')
@section('content')
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header mt-5">
                        <h3 class="mb-2">Admin Dashboard</h3>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $title }}
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Manage Users</h5>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email address</th>
                                            <th class="border-0">Date Registered</th>
                                            <th class="border-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/avatar.png" alt="user" class="rounded"
                                                        width="45" />
                                                </div>
                                            </td>
                                            <td>Anuary Mulombi</td>
                                            <td>mulombiannuar@gmail.com</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>
                                                <a href="#" class="btn btn-xs btn-rounded btn-primary"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-xs btn-rounded btn-success"><i
                                                        class="fa fa-eye"></i> View</a>
                                                <a href="#" class="btn btn-xs btn-rounded btn-secondary"><i
                                                        class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

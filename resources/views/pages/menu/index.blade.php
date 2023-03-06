@extends('layouts.applayout')

@section('content')

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <!-- <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span>  -->
                Master Menu
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="row">
              <div class="col-12 grid-margin stretch-card">
              <div class="card">
                    <div class="card-body">
                        @can('user_create')
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New Menu</a>
                        @endcan

                    <br /><br />



                    <table class="table table-borderless table-hover">
                                <tr class="bg-info text-light">
                                    <th class="text-center">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>

                                <tr>
                                    <td colspan="100%" class="text-center text-muted py-3">No Users Found</td>
                                </tr>

                        </table>
                    <br><br>

                    </div>
                </div>
              </div>
            </div>

          </div>
          <!-- content-wrapper ends -->

@endsection

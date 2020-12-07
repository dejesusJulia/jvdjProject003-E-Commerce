@extends('layouts.admin')

@section('content')
    <div class="container mx-auto my-2">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <p class="card-title">User update</p>
                </div>

                <div class="card-body">
                    <form action="" class="form">
                        <p>Name</p>
                        <p>Email</p>
                        <div class="form-group">
                            <select name="user_role" id="user_role" class="custom-select">
                                <option selected disabled>User role</option>
                                <option value="admin">admin</option>
                                <option value="manager">manager</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="update-user-btn">Update role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
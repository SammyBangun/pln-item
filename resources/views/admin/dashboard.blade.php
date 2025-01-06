<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <div class="list-group">
                    @if(auth()->user()->email === 'admin@gmail.com')
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action active">Admin
                        Dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>
                    @else
                    <a href="{{ route('user.dashboard') }}" class="list-group-item list-group-item-action active">User
                        Dashboard</a>
                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action">Logout</a>
                    @endif
                </div>
            </div>

            <div class="col-md-9">
                <!-- Main Content -->
                <div class="card">
                    <div class="card-header">
                        @if(auth()->user()->email === 'admin@gmail.com')
                        Welcome Admin
                        @else
                        Welcome User
                        @endif
                    </div>
                    <div class="card-body">
                        @if(auth()->user()->email === 'admin@gmail.com')
                        <h5 class="card-title">Admin Dashboard Overview</h5>
                        <p class="card-text">This is the Admin dashboard. Here, you can manage the application and view
                            relevant data.</p>
                        @else
                        <h5 class="card-title">User Dashboard Overview</h5>
                        <p class="card-text">This is the User dashboard. You can see your profile and settings here.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
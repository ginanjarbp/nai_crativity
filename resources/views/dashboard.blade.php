
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="admin-dashboard">
        <h1>Welcome to the Admin Dashboard</h1>
        
        <nav>
            <ul>
                <li><a href="{{ route('admin.users') }}">Manage Users</a></li>
                <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                <li><a href="{{ route('admin.reports') }}">Reports</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </nav>

        <div class="dashboard-content">
            <p>Overview of recent activity, reports, and administrative options.</p>
            <!-- Additional dashboard content can go here -->
        </div>
    </div>
</body>
</html>

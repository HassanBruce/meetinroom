<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
</head>
<body>
    <h2>Employee Management</h2>

    <form method="POST" action="/add-employee">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="department">Department:</label>
        <input type="text" name="department" required>

        <button type="submit">Add Employee</button>
    </form>

    <!-- Display a list of employees here -->

    <h3>Delete Employee</h3>
    <form method="POST" action="/delete-employee">
        @csrf
        <label for="employee_id">Select Employee:</label>
        <select name="employee_id">
            <!-- Populate with employee names and IDs -->
        </select>
        
        <button type="submit">Delete Employee</button>
    </form>

    <h3>Update Employee</h3>
    <form method="POST" action="/update-employee">
        @csrf
        <label for="employee_id">Select Employee:</label>
        <select name="employee_id">
            <!-- Populate with employee names and IDs -->
        </select>

        <label for="new_name">New Name:</label>
        <input type="text" name="new_name" required>

        <label for="new_department">New Department:</label>
        <input type="text" name="new_department" required>

        <button type="submit">Update Employee</button>
    </form>
</body>
</html>

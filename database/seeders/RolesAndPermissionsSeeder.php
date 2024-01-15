<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating roles
        $administratorRole = Role::create(['name' => 'Administrator']);

        // Creating a user
        $user = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        // Assigning the 'Administrator' role to the user
        $user->assignRole($administratorRole);
    }
}

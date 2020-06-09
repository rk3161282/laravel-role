<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'school-list',
        		'display_name' => 'Display School Listing',
        		'description' => 'See only Listing Of Item'
        	]
        	// [
        	// 	'name' => 'item-create',
        	// 	'display_name' => 'Create Item',
        	// 	'description' => 'Create New Item'
        	// ],
        	// [
        	// 	'name' => 'item-edit',
        	// 	'display_name' => 'Edit Item',
        	// 	'description' => 'Edit Item'
        	// ],
        	// [
        	// 	'name' => 'item-delete',
        	// 	'display_name' => 'Delete Item',
        	// 	'description' => 'Delete Item'
        	// ]
        ];


        foreach ($permissions as $key => $value) {
        	Permission::create($value);
        }
    }
}

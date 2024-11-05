<?php


namespace App\Models;

// Imports the factory trait to allow for database seeding for this model
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Imports the Belongs to Many relationship to map multiple students to models
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// The student class creates the eloquent ORM for the MVC
// This Model can be created using the following command `php artisan make:model Student`
class Student extends Model
{
    // Allows for the student Model to be seeded to populate the database for testing
    use HasFactory;

    // This function defines a many-to-many relationship between the Student model and the Module model
    // This means that for each students there are multiple module and vice-versa
    // It requires a pivot table to join both tables
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }
}

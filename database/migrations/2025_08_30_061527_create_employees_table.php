<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade');
            $table->foreignId('dept_id')->constrained('depts')->onDelete('cascade');
            $table->foreignId('grade_id')->constrained('grades')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('jabatans')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('no_telp')->nullable();
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('pendidikan');
            $table->string('agama')->nullable();
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->date('born_on');
            $table->date('start_work');
            $table->date('end_work')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('inputed_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

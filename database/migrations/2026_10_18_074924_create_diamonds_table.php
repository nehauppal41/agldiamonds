
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diamonds', function (Blueprint $table) {
            $table->id();

            $table->string('report_number', 30)->unique();
            $table->uuid('public_id')->unique();

            $table->string('diamond_type', 20); // studded or solitaire
            $table->string('identification', 150);

            $table->string('jewellery_type', 100)->nullable();
            $table->string('metal', 100)->nullable();
            $table->string('description', 255)->nullable();

            $table->decimal('total_weight', 10, 3)->nullable();
            $table->decimal('total_carat_weight', 10, 3)->nullable();
            $table->decimal('center_diamond_weight', 10, 3)->nullable();

            $table->string('diamond_shape', 100)->nullable();
            $table->string('color_grade', 50)->nullable();
            $table->string('clarity_grade', 50)->nullable();
            $table->string('cut_grade', 50)->nullable();
            $table->string('measurements', 100)->nullable();
            $table->string('polish', 50)->nullable();
            $table->string('symmetry', 50)->nullable();
            $table->string('fluorescence', 100)->nullable();

            $table->text('comments')->nullable();
            $table->string('diamond_photo')->nullable();

            $table->date('issue_date')->nullable();
            $table->boolean('is_published')->default(false);

            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();

            $table->index('identification');
            $table->index('diamond_type');
            $table->index('issue_date');
            $table->index('is_published');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diamonds');
    }
};


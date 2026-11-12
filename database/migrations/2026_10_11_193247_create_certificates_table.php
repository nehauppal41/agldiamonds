
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();

            // Unique certificate identifiers
            $table->string('report_number', 30)->unique();
            $table->uuid('public_id')->unique();

            // Fields used on the AGL certificate
            $table->string('identification', 150);
            $table->string('shape', 100)->nullable();
            $table->decimal('weight', 10, 3)->nullable();
            $table->string('dimensions', 100)->nullable();
            $table->string('color', 100)->nullable();
            $table->string('clarity', 100)->nullable();
            $table->text('treatment')->nullable();

            // Optional laboratory details
            $table->string('species', 100)->nullable();
            $table->string('variety', 100)->nullable();
            $table->string('origin', 150)->nullable();
            $table->text('comments')->nullable();

            // Uploaded gemstone image and report date
            $table->string('gemstone_photo')->nullable();
            $table->date('issue_date')->nullable();

            // Public verification status
            $table->boolean('is_published')->default(false);

            // Certificate creator
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamps();

            $table->index('identification');
            $table->index('issue_date');
            $table->index('is_published');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};

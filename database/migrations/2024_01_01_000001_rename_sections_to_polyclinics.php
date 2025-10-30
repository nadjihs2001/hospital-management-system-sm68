<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class RenameSectionsToPolyclinics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Rename sections table to polyclinics (only if sections exists)
        if (Schema::hasTable('sections') && !Schema::hasTable('polyclinics')) {
            Schema::rename('sections', 'polyclinics');
        }

        // Rename section_translations table to polyclinic_translations (only if section_translations exists)
        if (Schema::hasTable('section_translations') && !Schema::hasTable('polyclinic_translations')) {
            Schema::rename('section_translations', 'polyclinic_translations');
        }

        // Update foreign key column name in polyclinic_translations table
        if (Schema::hasColumn('polyclinic_translations', 'section_id')) {
            // Try to drop foreign key and unique constraint if they exist
            try {
                Schema::table('polyclinic_translations', function (Blueprint $table) {
                    $table->dropForeign(['section_id']);
                });
            } catch (\Exception $e) {
                // Foreign key doesn't exist, continue
            }

            try {
                Schema::table('polyclinic_translations', function (Blueprint $table) {
                    $table->dropUnique(['section_id', 'locale']);
                });
            } catch (\Exception $e) {
                // Unique constraint doesn't exist, continue
            }

            DB::statement('ALTER TABLE polyclinic_translations CHANGE section_id polyclinic_id BIGINT UNSIGNED NOT NULL');

            Schema::table('polyclinic_translations', function (Blueprint $table) {
                $table->unique(['polyclinic_id', 'locale']);
                $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onDelete('cascade');
            });
        }

        // Update foreign key column name in doctors table
        if (Schema::hasColumn('doctors', 'section_id')) {
            try {
                Schema::table('doctors', function (Blueprint $table) {
                    $table->dropForeign(['section_id']);
                });
            } catch (\Exception $e) {
                // Foreign key doesn't exist, continue
            }

            DB::statement('ALTER TABLE doctors CHANGE section_id polyclinic_id BIGINT UNSIGNED NOT NULL');

            Schema::table('doctors', function (Blueprint $table) {
                $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onDelete('cascade');
            });
        }

        // Update foreign key column name in invoices table
        if (Schema::hasColumn('invoices', 'section_id')) {
            try {
                Schema::table('invoices', function (Blueprint $table) {
                    $table->dropForeign(['section_id']);
                });
            } catch (\Exception $e) {
                // Foreign key doesn't exist, continue
            }

            DB::statement('ALTER TABLE invoices CHANGE section_id polyclinic_id BIGINT UNSIGNED NOT NULL');

            Schema::table('invoices', function (Blueprint $table) {
                $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onDelete('cascade');
            });
        }

        // Update foreign key column name in appointments table if it exists
        if (Schema::hasTable('appointments') && Schema::hasColumn('appointments', 'section_id')) {
            try {
                Schema::table('appointments', function (Blueprint $table) {
                    $table->dropForeign(['section_id']);
                });
            } catch (\Exception $e) {
                // Foreign key doesn't exist, continue
            }

            DB::statement('ALTER TABLE appointments CHANGE section_id polyclinic_id BIGINT UNSIGNED NOT NULL');

            Schema::table('appointments', function (Blueprint $table) {
                $table->foreign('polyclinic_id')->references('id')->on('polyclinics')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Reverse invoices table changes
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['polyclinic_id']);
        });
        
        Schema::table('invoices', function (Blueprint $table) {
            $table->renameColumn('polyclinic_id', 'section_id');
        });
        
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
        
        // Reverse doctors table changes
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['polyclinic_id']);
        });
        
        Schema::table('doctors', function (Blueprint $table) {
            $table->renameColumn('polyclinic_id', 'section_id');
        });
        
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
        
        // Reverse polyclinic_translations table changes
        Schema::table('polyclinic_translations', function (Blueprint $table) {
            $table->dropForeign(['polyclinic_id']);
            $table->dropUnique(['polyclinic_id', 'locale']);
        });
        
        Schema::table('polyclinic_translations', function (Blueprint $table) {
            $table->renameColumn('polyclinic_id', 'section_id');
        });
        
        Schema::table('polyclinic_translations', function (Blueprint $table) {
            $table->unique(['section_id', 'locale']);
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
        
        // Rename tables back
        Schema::rename('polyclinic_translations', 'section_translations');
        Schema::rename('polyclinics', 'sections');
    }
}


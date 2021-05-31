<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEdmFoterWithTextfieldsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('edm_footer', function ($table) { 

            DB::statement("Truncate edm_footer;");

        });
        
        Schema::table('edm_footer', function ($table) { 

            DB::statement("INSERT INTO `edm_footer` (`id`, `label`, `content`, `footerlabel1`, `footerlabel2`, `footerlabel3`, `footerlabel4`, `footerlabel5`, `footerlabel6`, `footerlabel7`, `created_at`, `updated_at`, `deleted_at`) VALUES
                (1, 'footer', '<figure class=\"table\" style=\"width:600px;\"><table style=\"background-color:hsl(0, 0%, 90%);\"><tbody><tr><td>Please do not reply to this email. For any questions, please submit your enquiry or refer to the FAQ &nbsp;{{here}}.</td></tr><tr><td>Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited (“DTTL”), its global network of member firms, and their related entities. DTTL (also referred to as “Deloitte Global”) and each of its member firms and their affiliated entities are legally separate and independent entities. DTTL does not provide services to clients. Please see&nbsp;<a href=\"http://www.deloitte.com/about\"><span style=\"color:windowtext;\">www.deloitte.com/about</span></a> to learn more.</td></tr><tr><td><span style=\"color:black;\">This communication is for internal distribution and use only among personnel of Deloitte Touche Tohmatsu Limited, its member firms, and their related entities (collectively, the “Deloitte network”). None of the Deloitte network shall be responsible for any loss whatsoever sustained by any person who relies on this communication.</span></td></tr><tr><td><span style=\"color:gray;\">© 2020 Deloitte &amp; Touche LLP</span></td></tr></tbody></table></figure>', 'Please do not reply to this email. For any questions, please submit your enquiry or refer to the FAQ', 'here', 'Deloitte refers to one or more of Deloitte Touche Tohmatsu Limited (“DTTL”), its global network of member firms, and their related entities. DTTL (also referred to as “Deloitte Global”) and each of its member firms and their affiliated entities are legally separate and independent entities. DTTL does not provide services to clients. Please see', 'www.deloitte.com/about', 'to learn more.', 'This communication is for internal distribution and use only among personnel of Deloitte Touche Tohmatsu Limited, its member firms, and their related entities (collectively, the “Deloitte network”). None of the Deloitte network shall be responsible for any loss whatsoever sustained by any person who relies on this communication.', '2020 Deloitte & Touche LLP', '2020-07-09 13:15:33', '2020-10-06 07:34:33', NULL);
                ");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

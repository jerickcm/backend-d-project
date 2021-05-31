<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEdmForTemplatebodyCms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('edm_template_body', function ($table) { 

            DB::statement("Truncate edm_template_body;");

        });

           Schema::table('edm_template_body', function ($table) { 

            DB::statement("INSERT INTO `edm_template_body` (`id`, `label`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
                (1, 'Message Send', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Dear {{name}} ,</p><p>You have sent your appreciation to {{recipientName}} for being a great help at work and have awarded {{recipientName}} with {{linkingVerb}} {{badgeType}} badge with the following message:</p><p>{{messageContent}}</p><p>Thank you for recognising the hard work and effort put in by our people who have gone the extra mile!</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-04 03:02:00', NULL),
                (2, 'Message Recieved', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Dear {{name}} ,</p><p>{{senderName}} recognises the great help you have been at work and has sent you a message and awarded you with {{linkingVerb}} {{badgeType}} &nbsp;badge with the following message:</p><p>{{messageContent}}&nbsp;</p><p>Log on to {{ACE}} and check out the {{ACE e-Store}} to redeem the item of your choice today!</p><p><strong>Appreciate others</strong></p><p>Have a colleague in mind whom you would like to thank?</p><p>Show your appreciation today by sending them a message or rewarding them with your <strong>“Recognise Others”</strong> tokens! It’s a really simple way to say thank you.</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-04 03:13:43', NULL),
                (3, 'Message Send with Token', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Dear {{name}},</p><p>You have sent your appreciation to {{recipientName}} for being a great help at work and have awarded {{recipientName}} with {{linkingVerb}} {{badgeType}} badge with the following message:</p><p>{{messageContent}}</p><p>In addition, you have awarded {{recipientName}} with {{token}} <strong>\"Recognise Others\"</strong> tokens.</p><p>Thank you for recognising the hard work and effort put in by our people who have gone the extra mile!</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-04 03:21:58', NULL),
                (4, 'Message Received with Token', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Dear {{name}},</p><p>&nbsp;</p><p>{{senderName}} recognises the great help you have been at work and has sent you a message and awarded you with {{linkingVerb}} {{badgeType}} badge with the following message:</p><p>&nbsp;</p><p>{{messageContent}}</p><p>&nbsp;</p><p>In addition, you have also received {{token}} \"<strong>My Rewards</strong>\" tokens from {{senderName}}.</p><p>&nbsp;</p><p>Log on to {{ACE}} and check out the {{ACE e-Store}} to redeem the item of your choice today!</p><p>&nbsp;</p><p><strong>Appreciate others</strong></p><p>&nbsp;</p><p>Have a colleague in mind whom you would like to thank?</p><p>&nbsp;</p><p>&nbsp;Show your appreciation today by sending them a message or rewarding them with your “<strong>Recognise Others</strong>” tokens! It’s a really simple way to say thank you.</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-04 03:17:19', NULL),
                (5, 'Welcome', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Welcome to Deloitte!</p><p>We are delighted to share with you more information about ACE (Appreciate. Celebrate. Elevate.) – our online platform designed especially for us to appreciate our colleagues for their good work and to celebrate the people who have gone the extra mile to help us.</p><p>&nbsp;</p><p>On ACE, you can write personalised thank-you messages to colleagues across levels and businesses, and award them achievement badges and tokens. Your colleagues can also do the same for you.</p><p>&nbsp;</p><p>&nbsp;These tokens can be used to redeem special treats and gifts at the {{ACE e-Store}}.</p><p>&nbsp;</p><p>&nbsp;As a welcome gift, you will receive {{numberOfToken}} <strong>“My Rewards”</strong> tokens in your account. Live our Deloitte values and start accumulating “My Rewards” tokens to redeem the item of your choice today!</p><p>&nbsp;</p><p>You will find that you also have {{numberOfBlackToken}} <strong>“Recognise Others”</strong> tokens in your account that you can give out in appreciation of your colleagues.</p><p>&nbsp;</p><p>To find out how you can navigate ACE, please refer to the FAQ {{here}}</p><p>&nbsp;</p><p>Click {{aceLinkhere}}to access ACE now!</p><p>&nbsp;</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-05 06:13:39', NULL),
                (6, 'Monthly Send Token', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Hi {{name}},</p><p>This is the latest summary of your ACE account.</p><p><strong>Personal growth achievements</strong></p><p>{{tierstatus}}</p><p>Continue to keep up the good work as you are just {{pointsToNextTier}} points away from becoming a {{nextTier}}!</p><p>{{Received<i>badgesthismonthANDSharedbadgesthis</i>month_table}}</p><p><strong>Balance tokens:</strong></p><p>{{Recognise<i>others</i>tokensANDMyrewardstokens_table}}</p><p>&nbsp;</p><p><strong>Your \"Recognise Others\" tokens</strong></p><p>For the month of {{month}}, You gave out a total of {{recognizeOthersTokenUsed}} \"Recognise Others\" tokens.</p><p>You have {{recognizeOthersToken}} \"Recognise Others\" tokens remaining, which will expire on {{recognizeOthersTokenExpiration}}.</p><p>Remember, you can use ACE to show your appreciation to your colleagues. A small gesture goes a long way!</p><p>&nbsp;</p><p><strong>Your \"My Rewards\" tokens</strong></p><p>For the month of {{month }}, you received {{myRewardsToken}} “My Rewards” tokens from your colleagues and you redeemed a total of {{myRewardsTokenUsed}} tokens from the ACE Redemption Store.</p><p>You have a total of {{myRewardsToken}} \"My Rewards\" tokens.</p><p>{{tokenexpirationprompt}}</p><p>&nbsp;</p><p>Be sure to exchange these tokens for exciting gifts available on the {{ACE e-Store}}</p><p>&nbsp;</p><p>To view a full summary of your ACE account, click {{here_viewhistorylink}}.</p><p>&nbsp;</p><p>Click {{here_acelink}} to access ACE now!</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-05 11:24:25', NULL),
                (7, 'Redeem', '<figure class=\"table\" style=\"width:600px;\"><table><tbody><tr><td><p>Dear {{name}}</p><p>Thank you for shopping at ACE. Here are the details of your redemption and collection:</p><p><strong>Order Number:</strong> &nbsp;{{orderNumber}}</p><p><strong>Order Date:</strong> {{orderDate}}</p><p>{{table_loop}}</p><p><strong>\"My Rewards\"</strong> tokens balance: &nbsp;{{remainingToken}}</p><p>&nbsp;Please collect your items from us on:</p><p><strong>Collection date/time:</strong> &nbsp;{{collectionDate}}</p><p><strong>Collection location:</strong> D Lounge, Level 30</p><p>If you are unable to pick up your item/s at the above date and time, please ensure that you appoint a colleague to collect on your behalf. Your colleague must present this redemption email and a photo of your staff pass to redeem the item.</p><p>To view your redemption history to date, please click {{here}}.</p></td></tr></tbody></table></figure>', '2020-07-08 13:15:33', '2020-10-05 08:45:10', NULL);
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

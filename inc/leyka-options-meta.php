<?php if( !defined('WPINC') ) die;

$email_placeholders =
"<span class='placeholders-help'>
<code>#SITE_NAME#</code> — ".__('a title of the website', 'leyka')."<br>
<code>#ORG_NAME#</code> — ".__('an official title of the organization', 'leyka')."<br>
<code>#DONATION_ID#</code> — ".__('an ID of current donation', 'leyka')."<br>
<code>#DONOR_NAME#</code> — ".__('a name of the donor', 'leyka')."<br>
<code>#SUM#</code> — ".__('a full sum of donation (without taking into account some payment commissions)', 'leyka')."<br>
<code>#PAYMENT_METHOD_NAME#</code> — ".__('a name of payment method used', 'leyka')."<br>
<code>#CAMPAIGN_NAME#</code> — ".__('a campaign to which donation was made', 'leyka')."<br>
<code>#PURPOSE#</code> — ".__('a campaign title meant for payment system (see campaign settings)', 'leyka')."<br>
<code>#DATE#</code> — ".__('a date of donation', 'leyka')."<br>
</span>";

/** Possible field types are: text, html, rich_html, select, radio, checkbox, multi_checkbox, custom_XXX */

/** @var self Leyka_Options_Controller */
self::$_options_meta = array(
    'org_full_name' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('NGO name', 'leyka'),
        'description' => __('NGO full official name.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., Eastern charity foundation', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_face_fio_ip' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('Full name of a person representing the NGO', 'leyka'),
        'description' => __("Enter a person's full name in subjective case.", 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., John Frederic Dow', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_face_fio_rp' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('Full name of a person representing the NGO, in genitive case', 'leyka'),
        'description' => __("Enter a person's full name in genitive case.", 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., John Frederic Dow (in genitive case, if it exists)', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_face_position' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('Position of a person representing the NGO', 'leyka'),
        'description' => __('Enter an official position of a person representing the NGO.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., director', 'leyka'), // For text fields
        'length' => '60', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_address' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO official address', 'leyka'),
        'description' => __('Enter the NGO official address.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., Malrose str., 4, Washington, DC, USA', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_state_reg_number' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO state registration number', 'leyka'),
        'description' => __('Enter the NGO state registration number.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 1023400056789', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_kpp' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO statement of the account number', 'leyka'),
        'description' => __("Enter the NGO statement of the account number.", 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 780302015', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_inn' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO taxpayer individual number', 'leyka'),
        'description' => __('Enter the NGO individual number of a taxpayer.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 4283256127', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_bank_account' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO bank account number', 'leyka'),
        'description' => __('Enter a bank account number of the NGO', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 40123840529627089012', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'org_bank_name' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('NGO bank name', 'leyka'),
        'description' => __('Enter a full name for the NGO bank.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., First Columbia Credit Bank', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ), 
    'org_bank_bic' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO bank BIC number', 'leyka'),
        'description' => __("Enter a BIC of the NGO bank.", 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 044180293', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ), 
    'org_bank_corr_account' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('The NGO correspondent bank account number', 'leyka'),
        'description' => __('Enter a correspondent account number of the NGO.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., 30101810270902010595', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'donation_purpose_text' => array(
        'type' => 'text',
        'default' => __('Charity donation', 'leyka'),
        'title' => __('Payment purpose text for bank orders', 'leyka'),
        'description' => '',
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., Charity donation', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'pm_available' => array(
        'type' => 'multi_checkbox',
        'default' => array('text-text_box'),
        'title' => __('Payment methods available on donation forms', 'leyka'),
        'description' => __("Check out payment methods through that you'd want to receive a donation payments.", 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise. For checkbox, 1 means "at least 1 value"
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => 'leyka_get_gateways_pm_list',
        'validation_rules' => array(), // List of regexp?..
    ),
    'pm_order' => array(
        'type' => 'text', // It's intentionally of text type :) Option contains a serialized string of an array
        'default' => '', // PM will be ordered just as their gateways were added
        'title' => __('Payment methods order on donation forms', 'leyka'),
        'description' => '',
        'required' => 0, // 1 if field is required, 0 otherwise. For checkbox, 1 means "at least 1 value"
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => '',
        'validation_rules' => array(), // List of regexp?..
    ),
    'auto_refresh_currency_rates' => array(
        'type' => 'checkbox',
        'default' => '1',
        'title' => __('Automatically refresh currency rates', 'leyka'),
        'description' => __('Check to enable auto-refresh of currency rates. It will be performed every 24 hours and will require connection with http://cbr.ru website.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur2usd' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('RUR to USD currency rate', 'leyka'),
        'description' => __('Please set the RUR to USD currency rate here.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '70.01', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur2eur' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('RUR to EUR currency rate', 'leyka'),
        'description' => __('Please set the RUR to EUR currency rate here.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '80.81', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur_label' => array(
        'type' => 'text',
        'default' => __('RUR', 'leyka'),
        'title' => __('RUR label', 'leyka'),
        'description' => __('Please set the RUR currency label here.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => 'E.g., roub.', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur_min_sum' => array(
        'type' => 'text',
        'default' => 100,
        'title' => __('Minimum sum available for RUR', 'leyka'),
        'description' => __('Please set minimum sum available for RUR donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '100', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur_max_sum' => array(
        'type' => 'text',
        'default' => 30000,
        'title' => __('Maximum sum available for RUR', 'leyka'),
        'description' => __('Please set maximum sum available for RUR donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '30000', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur_flexible_default_amount' => array(
        'type' => 'text',
        'default' => 500,
        'title' => __('Default amount of donation in RUR (for "flexible" donation type)', 'leyka'),
        'description' => __('Please, set a default amount of donation when RUR selected as currency.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '500', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_rur_fixed_amounts' => array(
        'type' => 'text',
        'default' => '100,300,500,1000',
        'title' => __('Possible amounts of donation in RUR (for "fixed" donation type)', 'leyka'),
        'description' => __('Please, set possible amounts of donation in RUR when "fixed" donation type is selected. Only an integer non-negative values, separated with commas.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '100,300,500,1000', // For text fields
        'length' => 25, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_usd_label' => array(
        'type' => 'text',
        'default' => __('$', 'leyka'),
        'title' => __('USD label', 'leyka'),
        'description' => __('Please set the USD currency label here.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => 'E.g., USD', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_usd_min_sum' => array(
        'type' => 'text',
        'default' => 10,
        'title' => __('Minimum sum available for USD', 'leyka'),
        'description' => __('Please set minimum sum available for USD donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '0', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_usd_max_sum' => array(
        'type' => 'text',
        'default' => 1000,
        'title' => __('Maximum sum available for USD', 'leyka'),
        'description' => __('Please set maximum sum available for USD donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '1000', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_usd_flexible_default_amount' => array(
        'type' => 'text',
        'default' => 10,
        'title' => __('Default amount of donation in USD (for "flexible" donation type)', 'leyka'),
        'description' => __('Please, set a default amount of donation when RUR selected as currency.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '10', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_usd_fixed_amounts' => array(
        'type' => 'text',
        'default' => '3,5,10,15,50',
        'title' => __('Possible amounts of donation in USD (for «fixed» donation type)', 'leyka'),
        'description' => __('Please, set possible amounts of donation in USD when "fixed" donation type is selected. Only an integer non-negative values, separated with commas.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '3,5,10,15,50', // For text fields
        'length' => 25, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_eur_label' => array(
        'type' => 'text',
        'default' => __('euro', 'leyka'),
        'title' => __('EUR label', 'leyka'),
        'description' => __('Please set the EUR currency label here.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => 'E.g., euro', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_eur_min_sum' => array(
        'type' => 'text',
        'default' => 3,
        'title' => __('Minimum sum available for EUR', 'leyka'),
        'description' => __('Please set minimum sum available for EUR donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '0', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_eur_max_sum' => array(
        'type' => 'text',
        'default' => 650,
        'title' => __('Maximum sum available for EUR', 'leyka'),
        'description' => __('Please set maximum sum available for EUR donations.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '650', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_eur_flexible_default_amount' => array(
        'type' => 'text',
        'default' => 5,
        'title' => __('Default amount of donation in EUR (for «flexible» donation type)', 'leyka'),
        'description' => __('Please, set a default amount of donation when EUR selected as currency.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '5', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'currency_eur_fixed_amounts' => array(
        'type' => 'text',
        'default' => '3,5,10,100,500',
        'title' => __('Possible amounts of donation in EUR (for «fixed» donation type)', 'leyka'),
        'description' => __('Please, set possible amounts of donation in EUR when «fixed» donation type is selected. Only an integer non-negative values, separated with commas.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '3,5,10,100,500', // For text fields
        'length' => 25, // For text fields
        'list_entries' => '', // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_from_name' => array(
        'type' => 'text',
        'default' => get_bloginfo('name'),
        'title' => __('Notification emails sender name', 'leyka'),
        'description' => __('Enter the name that would be used in all notification emails as «from whom» field', 'leyka'),
        'required' => 0, // If it does't set, we're using the site title 
        'placeholder' => __('E.g., Daisy Foundation website', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_from' => array(
        'type' => 'text',
        'default' => leyka_get_default_email_from(),
        'title' => __("Notification emails sender's email", 'leyka'),
        'description' => __('Enter the email from which all Leyka emails would be sended', 'leyka'),
        'required' => 0, // If it does't set, we're using the site email
        'placeholder' => __('E.g., donations@daisyfoundation.org', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_thanks_title' => array(
        'type' => 'text',
        'default' => __('Thank you for your donation!', 'leyka'),
        'title' => __('A title of after-donation notice sended to a donor', 'leyka'),
        'description' => __('Enter the title of the notification (or thankful) email with donation data that would be sended to each donor right after his donation is made.', 'leyka'),
        'required' => 1,
        'placeholder' => __('E.g., Daisy Foundation thanks you for your kindness', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_thanks_text' => array(
        'type' => 'html', // Maybe, rich_html
        'default' => __('Hello, #DONOR_NAME#!<br><br>You have chosed to make a #SUM# donation to the following charity campaign: #CAMPAIGN_NAME#, using #PAYMENT_METHOD_NAME#.<br><br>Sincerely thank you,<br>#ORG_NAME#', 'leyka'),
        'title' => __('A text of after-donation notice sent to a donor', 'leyka'),
        'description' => __('Enter the text of the notification email that would be sended to each donor right after his donation is made. It may include the following special entries:', 'leyka').$email_placeholders,
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_recurring_init_thanks_title' => array(
        'type' => 'text',
        'default' => __('Thank you for your support!', 'leyka'),
        'title' => __('A title of an initial recurring donation notice sent to a donor', 'leyka'),
        'description' => __('Enter a title of a notification email with donation data that would be sended to each donor on each rebill donation.', 'leyka'),
        'required' => 1,
        'placeholder' => __('E.g., Daisy Foundation thanks you for your kindness', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_recurring_init_thanks_text' => array(
        'type' => 'html', // Maybe, rich_html
        'default' => __('Hello, #DONOR_NAME#!<br><br>We just took a #SUM# from your account as a regular donation to the campaign «#CAMPAIGN_NAME#», using #PAYMENT_METHOD_NAME#.<br><br>If you, regretfully, wish to stop future regular donations to this campaign, please #RECURRING_SUBSCRIPTION_CANCELLING_LINK#.<br><br>Sincerely thank you,<br>#ORG_NAME#', 'leyka'),
        'title' => __('A text of a recurring subscription donation notice sent to a donor', 'leyka'),
        'description' => __('Enter the text of the notification email that would be sended to each donor on each rebill donation. It may include the following special entries:', 'leyka').$email_placeholders,
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_recurring_ongoing_thanks_title' => array(
        'type' => 'text',
        'default' => __('Thank you for your unwavering support!', 'leyka'),
        'title' => __('A title of an after-rebill donation notice for a donor', 'leyka'),
        'description' => __('Enter a title of a donor notification email with donation data that will be sent on each recurring auto-payment.', 'leyka'),
        'required' => 1,
        'placeholder' => __('E.g., Daisy Foundation thanks you for your kindness', 'leyka'), // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_recurring_ongoing_thanks_text' => array(
        'type' => 'html', // Maybe, rich_html
        'default' => __('Hello, #DONOR_NAME#!<br><br>We just took a #SUM# from your account as a regular donation to the campaign «#CAMPAIGN_NAME#», using #PAYMENT_METHOD_NAME#.<br><br>If you, regretfully, wish to stop future regular donations to this campaign, please #RECURRING_SUBSCRIPTION_CANCELLING_LINK#.<br><br>Sincerely thank you,<br>#ORG_NAME#', 'leyka'),
        'title' => __('A text of after-rebill donation notice sent to a donor', 'leyka'),
        'description' => __('Enter the text of the notification email that would be sended to each donor on each rebill donation. It may include the following special entries:', 'leyka').$email_placeholders,
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'send_donor_thanking_emails' => array(
        'type' => 'checkbox',
        'default' => '1',
        'title' => __('Send a thankful email to a donor on each funded donation', 'leyka'),
        'description' => __('Check to send a thankful email to a donor on each funded donation', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'notify_donations_managers' => array(
        'type' => 'checkbox',
        'default' => '1',
        'title' => __('Notify website personal of each incoming donation', 'leyka'),
        'description' => __('Check to notify some website personnel (donations managers) of each incoming donation', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'notify_managers_on_recurrents' => array(
        'type' => 'checkbox',
        'default' => '1',
        'title' => __('Notify website personal of each incoming recurrent donation', 'leyka'),
        'description' => __('Check to notify some website personnel (donations managers) of each incoming recurrent donation', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'donations_managers_emails' => array(
        'type' => 'text',
        'default' => leyka_get_default_dm_list(), 
        'title' => __('A comma-separated emails to notify of incoming donation', 'leyka'),
        'description' => '',
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., admin@daisyfoundation.org,yourmail@domain.com', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_notification_title' => array(
        'type' => 'text',
        'default' => __('New donation incoming', 'leyka'),
        'title' => __('A title of new donation notification email', 'leyka'),
        'description' => '',
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g., new donation incoming', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'email_notification_text' => array(
        'type' => 'html',
        'default' => __('Hello!<br><br>A new donation has been made on a #SITE_NAME#:<br><ul><li>Campaign: #CAMPAIGN_NAME#.</li><li>Donation purpose: #PURPOSE#</li><li>Amount: #SUM#.</li><li>Payment method: #PAYMENT_METHOD_NAME#.</li><li>Date: #DATE#</li></ul><br><br>Your Leyka', 'leyka'),
        'title' => __('A text of after-donation notification sended to a website personnel', 'leyka'),
        'description' => __("Enter the text of the notification email that would be sended to each email stated before right after donation is made. It may include the following special entries:", 'leyka').$email_placeholders,
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'tech_support_email' => array(
        'type' => 'text',
        'default' => '',
        'title' => __('Website technical support email', 'leyka'),
        'description' => __('E-mail that you want to use to collect technical support requests from the donors.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => __('E.g. «techsupport@email.com»', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'donation_form_template' => array(
        'type' => 'radio',
        'default' => 'radios',
        'title' => __('Select a default template for all your donation forms', 'leyka'),
        'description' => __('Select one of the form templates.', 'leyka'),
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => 'leyka_get_form_templates_list',
        'validation_rules' => array(), // List of regexp?..
    ),
    'donation_sum_field_type' => array(
        'type' => 'radio',
        'default' => 'flexible',
        'title' => __('Select a type of the sum field for all your donation forms', 'leyka'),
        'description' => __('Select a type of the sum field. «Fixed» means a set of stable sum variants, while «flexible» is a free input field.', 'leyka'),
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array('flexible' => __('Flexible', 'leyka'), 'fixed' => __('Fixed', 'leyka'), 'mixed' => __('Fixed sum variants + flexible field', 'leyka')),
        'validation_rules' => array(), // List of regexp?..
    ),
    'donation_form_mode' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Display all payment elements on campaign page automatically', 'leyka'),
        'description' => __('When unchecked, all payment elements like donation forms or target completion level widgets will not be displayed automatically. To output them manually, use shortcodes inside campaign\'s content or template tags in campaign\'s template file.', 'leyka'),
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'scale_widget_place' => array(
        'type' => 'radio',
        'default' => 'top',
        'title' => __('Select where Target completion widget will be placed at campaign pages', 'leyka'),
        'description' => '',
        'required' => 1,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(
            'top' => __('Above page content', 'leyka'),
            'bottom' => __('Below page content', 'leyka'),
            'both' => __('Both', 'leyka'),
            '-' => __('Nowhere', 'leyka'),
        ),
        'validation_rules' => array(), // List of regexp?..
    ),
    'donations_history_under_forms' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Donations history widget below donation forms', 'leyka'),
        'description' => __('Display the widget automatically', 'leyka'),
        'required' => 0,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'show_campaign_sharing' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Campaign sharing widget below donation forms', 'leyka'),
        'description' => __('Display the widget automatically', 'leyka'),
        'required' => 0,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'show_success_widget_on_success' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Show an email subscription widget on the successful donation page', 'leyka'),
        'description' => __('Display the widget automatically', 'leyka'),
        'required' => 0,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'show_failure_widget_on_failure' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Show a failure notification widget on the donation page', 'leyka'),
        'description' => __('Display the widget automatically', 'leyka'),
        'required' => 0,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'revo_template_slider_max_sum' => array(
        'type' => 'text',
        'default' => 3000,
        'title' => __('Maximum sum available for slider', 'leyka'),
        'description' => __('Please set the maximum sum available for slider control.', 'leyka'),
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '3000', // For text fields
        'length' => 6, // For text fields
        'list_entries' => '', // callback returns currencies selected in prev. option
        'validation_rules' => array(), // List of regexp?..
    ),
//    'revo_template_ask_donor_data' => array(
//        'type' => 'radio',
//        'default' => 'during-donation',
//        'title' => __('When to display donor data form fields?', 'leyka'),
//        'description' => '', //__('', 'leyka'),
//        'required' => 1,
//        'placeholder' => '', // For text fields
//        'length' => '', // For text fields
//        'list_entries' => array(
//            'during-donation' => __('As a step during donation process', 'leyka'),
//            'success-page' => __('On a payment success page', 'leyka'),
////            'never' => __("Don't display the fields - receive donor data from payment systems", 'leyka'),
//        ),
//        'validation_rules' => array(), // List of regexp?..
//    ),
    'revo_template_show_thumbnail' => array(
        'type' => 'checkbox',
        'default' => 1,
        'title' => __('Display a thumbnail in inline page blocks', 'leyka'),
        'description' => __('Check if you need to show a campaign thumbnail in inline page blocks.', 'leyka'),
        'required' => 0,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_terms_needed' => array(
        'type' => 'checkbox',
        'default' => true,
        'title' => __('To donate, donor must agree to Terms of Service', 'leyka'),
        'description' => __("Check if you must receive donor's agreement with some terms before his donation.", 'leyka'),
        'required' => false,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_terms_text_text_part' => array(
        'type' => 'text',
        'default' => __('I agree with', 'leyka'),
        'title' => __('Terms acception checkbox label - the first (text) part', 'leyka'),
        'description' => '',
        'required' => true,
        'placeholder' => __('E.g., «I agree with»', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_terms_text_link_part' => array(
        'type' => 'text',
        'default' => __('Terms of the donation service', 'leyka'),
        'title' => __('Terms acception checkbox label - the second (link) part', 'leyka'),
        'description' => '',
        'required' => 1,
        'placeholder' => __('E.g., Terms of the donation service', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'terms_of_service_text' => array(
        'type' => 'rich_html',
        'default' => __('Terms of donation service text. Use <br /> for line-breaks, please.', 'leyka'),
        'title' => __('A text of Terms of donation service', 'leyka'),
        'description' => __('Enter a Terms of Service text. The text may include following special entries:', 'leyka')."<span class='placeholders-help'>
            <code>#LEGAL_NAME#</code> — ".__("the organization legal name", 'leyka')."<br>
            <code>#LEGAL_FACE#</code> — ".__("the organization legal representative", 'leyka')."<br>
            <code>#LEGAL_FACE_RP#</code> — ".__("the organization legal representative (in genitive case)", 'leyka')."<br>
            <code>#LEGAL_FACE_POSITION#</code> — ".__("an official position of the organization legal representative", 'leyka')."<br>
            <code>#LEGAL_ADDRESS#</code> — ".__("the organization legal address", 'leyka')."<br>
            <code>#STATE_REG_NUMBER#</code> — ".__("the organization state registration number", 'leyka')."<br>
            <code>#KPP#</code> — ".__("the organization statement of the account number", 'leyka')."<br>
            <code>#INN#</code> — ".__("the organization individual taxpayer number", 'leyka')."<br>
            <code>#BANK_ACCOUNT#</code> — ".__("the organization bank account number", 'leyka')."<br>
            <code>#BANK_NAME#</code> — ".__("the organization bank name", 'leyka')."<br>
            <code>#BANK_BIC#</code> — ".__("the organization bank indentification code", 'leyka')."<br>
            <code>#BANK_CORR_ACCOUNT#</code> — ".__("the organization bank correspondent account", 'leyka')."<br>
            </span>",
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '',
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'terms_agreed_by_default' => array(
        'type' => 'checkbox',
        'default' => false,
        'title' => __("Donor is agreed with Terms of Service by default", 'leyka'),
        'description' => __('When donor sees a donation form, Terms of Service agreement checkbox is already checked.', 'leyka'),
        'required' => false,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_pd_terms_needed' => array(
        'type' => 'checkbox',
        'default' => true,
        'title' => __('To donate, donor must agree to Terms of personal data usage', 'leyka'),
        'description' => __("Check if you should have donor's agreement with some terms regarding his personal data usage.", 'leyka'),
        'required' => false,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_pd_terms_text_text_part' => array(
        'type' => 'text',
        'default' => __('I agree with', 'leyka'),
        'title' => __('Personal data usage Terms checkbox label - the first (text) part', 'leyka'),
        'description' => '',
        'required' => true,
        'placeholder' => __('E.g., I agree with', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'agree_to_pd_terms_text_link_part' => array(
        'type' => 'text',
        'default' => _x('Terms of personal data usage', 'In instrumental case', 'leyka'),
        'title' => __('Personal data usage Terms checkbox label - the second (link) part', 'leyka'),
        'description' => '',
        'required' => true,
        'placeholder' => __('E.g., Terms of personal data usage', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'pd_terms_text' => array(
        'type' => 'rich_html',
        'default' => __('Terms of personal data usage full text. Use <br> for line-breaks.', 'leyka'),
        'title' => __('A text of personal data usage Terms', 'leyka'),
        'description' => __("Enter a donors' personal data usage Terms text. The text may include following special entries:", 'leyka')."<span class='placeholders-help'>
            <code>#LEGAL_NAME#</code> — ".__("the organization legal name", 'leyka')."<br>
            <code>#LEGAL_ADDRESS#</code> — ".__("the organization legal address", 'leyka')."<br>
            <code>#SITE_URL#</code> — ".__("the website homepage URL", 'leyka')."<br>
            <code>#PD_TERMS_PAGE_URL#</code> — ".__("the website personal data terms page URL", 'leyka')."<br>
            <code>#ADMIN_EMAIL#</code> — ".__("the website administrator email", 'leyka')."<br>
            </span>
            <span class='pd-warning'>".sprintf(__('WARNING! We strongly recommend you to revise this Terms text and fill the field with your own value according to the organization personal data policy. Read more about it: %s', 'leyka'), leyka_get_pd_usage_info_links())."</span>",
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '',
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'pd_terms_agreed_by_default' => array(
        'type' => 'checkbox',
        'default' => false,
        'title' => __('Donor is agreed with personal data usage Terms by default', 'leyka'),
        'description' => __('When donor sees a donation form, personal data usage Terms agreement checkbox is already checked.', 'leyka'),
        'required' => false,
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'pd_terms_page' => array(
        'type' => 'select',
        'default' => leyka_get_default_pd_terms_page(),
        'title' => __("Page of personal data usage terms and policy", 'leyka'),
        'description' => __('Select a page with personal data usage terms and policy full text.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => 'leyka_get_pages_list',
        'validation_rules' => array(), // List of regexp?..
    ),
    'donation_submit_text' => array(
        'type' => 'text',
        'default' => __('Donate', 'leyka'),
        'title' => __('Label of the button to submit a donation form', 'leyka'),
        'description' => __('Enter the text for a submit buttons on a donation forms.', 'leyka'),
        'required' => 1,
        'placeholder' => __('E.g., "Donate" or "Support"', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'revo_donation_complete_button_text' => array(
        'type' => 'text',
        'default' => __('Complete donation', 'leyka'),
        'title' => __('Label of the button to complete a donation', 'leyka'),
        'description' => __('Enter the text for a complete donation buttons on a donation forms.', 'leyka'),
        'required' => 1,
        'placeholder' => __('E.g., "Complete the donation" or "Close the form"', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'revo_thankyou_text' => array(
        'type' => 'text',
        'default' => __('Thank you! We appreciate your help! Let\'s stay in touch.', 'leyka'),
        'title' => __('Text on "Thank you" screen', 'leyka'),
        'description' => '',
        'required' => 1,
        'placeholder' => __('E.g., "Thank you! We appreciate your help! Let\'s stay in touch."', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'revo_thankyou_email_result_text' => array(
        'type' => 'text',
        'default' => __('We will inform you about the result by email', 'leyka'),
        'title' => __('Text on "Donation process complete" page', 'leyka'),
        'description' => '',
        'required' => 1,
        'placeholder' => __('E.g., We will inform you about the result by email', 'leyka'),
        'length' => '', // For text fields
        'list_entries' => array(), // For select, radio & checkbox fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'commission' => array(
        'type' => 'custom_gateways_commission', // Special option type
        'default' => '',
        'title' => __('Payment operators commission', 'leyka'),
        'description' => '',
        'required' => false, // True if field is required, false otherwise. For checkbox, 1 means "at least 1 value"
        'placeholder' => '', // For text fields
        'validation_rules' => array(), // List of regexp?..
    ),
    'admin_donations_list_display' => array(
        'type' => 'radio',
        'default' => 'amount-column',
        'title' => __('Total amount display on the admin donations list page', 'leyka'),
        'description' => '',
        'required' => 0,
        'list_entries' => array(
            'none' => __("Don't show total amount", 'leyka'),
            'amount-column' => __('In the amount column, with original amount value', 'leyka'),
            'separate-column' => __('In the separate column', 'leyka'),
        ),
    ),
    'widgets_total_amount_usage' => array(
        'type' => 'radio',
        'default' => 'display-total',
        'title' => __('Total amount display in plugin widgets and shortcodes', 'leyka'),
        'description' => '',
        'required' => true,
        'list_entries' => array(
            'none' => __('Do not display total amount', 'leyka'),
            'display-total' => __('Display total amount values with original values', 'leyka'),
            'display-total-only' => __('Display only total amount values', 'leyka'),
        ),
    ),
//    'archive_page_total_amount_usage' => array(
//        'type' => 'radio',
//        'default' => 'display-total',
//        'title' => __('Total amount display in donations archive entries', 'leyka'),
//        'description' => '',
//        'required' => true,
//        'list_entries' => array(
//            'none' => __('Do not display total amount', 'leyka'),
//            'display-total' => __('Display total amount values with original values', 'leyka'),
//            'display-total-only' => __('Display only total amount values', 'leyka'),
//        ),
//    ),
    'success_page' => array(
        'type' => 'select',
        'default' => leyka_get_default_success_page(),
        'title' => __('Page of successful donation', 'leyka'),
        'description' => __('Select a page for donor to redirect to when payment is successful.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => 'leyka_get_pages_list',
        'validation_rules' => array(), // List of regexp?..
    ),
    'failure_page' => array(
        'type' => 'select',
        'default' => leyka_get_default_failure_page(),
        'title' => __('Page of failed donation', 'leyka'),
        'description' => __('Select a page for donor to redirect to when payment is failed for some reason.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => 'leyka_get_pages_list',
        'validation_rules' => array(), // List of regexp?..
    ),
    'load_scripts_if_need' => array(
        'type' => 'checkbox',
        'default' => true,
        'title' => __('Load plugin scripts only if necessary', 'leyka'),
        'description' => __("Check this to load Leyka scripts and styles only on an applicable pages. If this box is unchecked, plugin will load it's scripts on every website page.", 'leyka'),
        'required' => false, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'delete_plugin_options' => array(
        'type' => 'checkbox',
        'default' => 0,
        'title' => __('Remove all plugin settings upon plugin uninstall', 'leyka'),
        'description' => __('WARNING: checking this checkbox will cause loss of all Leyka settings upon plugin uninstall. Please, proceed with caution.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'delete_plugin_data' => array(
        'type' => 'checkbox',
        'default' => 0,
        'title' => __('Remove all plugin data upon plugin uninstall', 'leyka'),
        'description' => __('WARNING: checking this checkbox will cause loss of ALL Leyka data, including all donation and campaign transaction history, upon plugin uninstall. Please, proceed with caution.', 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'donors_data_editable' => array(
        'type' => 'checkbox',
        'default' => 0,
        'title' => __("You can edit donors' data for all donation types", 'leyka'),
        'description' => __("Donation administrators and managers are allowed to edit donors' data for non-correctional donations.", 'leyka'),
        'required' => 0, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array(),
        'validation_rules' => array(), // List of regexp?..
    ),
    'main_currency' => array(
        'type' => 'select',
        'default' => 'rur',
        'title' => __('Primary currency', 'leyka'),
        'description' => '',
        'required' => 1, // 1 if field is required, 0 otherwise
        'placeholder' => '', // For text fields
        'length' => '', // For text fields
        'list_entries' => array('rur' => __('RUR', 'leyka'), 'usd' => __('$', 'leyka'), 'eur' => __('euro', 'leyka'),),
        'validation_rules' => array(), // List of regexp?..
    ),
);

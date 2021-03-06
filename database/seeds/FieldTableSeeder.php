<?php

use Illuminate\Database\Seeder;

use App\Contact;
use App\Company;
use App\Opportunity;
use App\Field;
use App\User;

class FieldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coreFields = [
            // Contact Fields
            [
                "label" => "First Name",
                "alias" => "first_name",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 1,
                "searchable" => 1,
                "export" => 1,
            ],
            [
                "label" => "Last Name",
                "alias" => "last_name",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 2,
                "searchable" => 1,
                "export" => 1,
            ],
            [
                "label" => "Email",
                "alias" => "email",
                "model" => Contact::class,
                "group" => "core",
                "type" => "email",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 1,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 4,
                "searchable" => 1,
                "export" => 1,
            ],
            [
                "label" => "Address 1",
                "alias" => "address1",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 5,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Address 2",
                "alias" => "address2",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 6,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "City",
                "alias" => "city",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 7,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "State",
                "alias" => "state",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 8,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Zip",
                "alias" => "zip",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 9,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Country",
                "alias" => "country",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 1,
                "summary" => 0,
                "ordering" => 10,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Phone",
                "alias" => "phone",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 11,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Fax",
                "alias" => "fax",
                "model" => Contact::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 12,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Website",
                "alias" => "website",
                "model" => Contact::class,
                "group" => "core",
                "type" => "url",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 13,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Info",
                "alias" => "info",
                "model" => Contact::class,
                "group" => "core",
                "type" => "textarea",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 14,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Mobile Phone",
                "alias" => "mobile_phone",
                "model" => Contact::class,
                "group" => "personal",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 0,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 1,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Other Email",
                "alias" => "other_email",
                "model" => Contact::class,
                "group" => "personal",
                "type" => "email",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 0,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 2,
                "searchable" => 0,
                "export" => 1,
            ],
            
            [
                "label" => "Facebook",
                "alias" => "facebook",
                "model" => Contact::class,
                "group" => "social",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 0,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 1,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "LinkedIn",
                "alias" => "linkedin",
                "model" => Contact::class,
                "group" => "social",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 0,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 2,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Twitter",
                "alias" => "twitter",
                "model" => Contact::class,
                "group" => "social",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 0,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 3,
                "searchable" => 0,
                "export" => 1,
            ],

            // Company Fields
            [
                "label" => "Name",
                "alias" => "name",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 1,
                "export" => 1,
            ],
            [
                "label" => "Description",
                "alias" => "description",
                "model" => Company::class,
                "group" => "core",
                "type" => "textarea",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Address 1",
                "alias" => "address1",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Address 2",
                "alias" => "address2",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "City",
                "alias" => "city",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "State",
                "alias" => "state",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Zip",
                "alias" => "zip",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Country",
                "alias" => "country",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Phone",
                "alias" => "phone",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Fax",
                "alias" => "fax",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Website",
                "alias" => "website",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Info",
                "alias" => "info",
                "model" => Company::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],

            // Opportunity Fields
            [
                "label" => "Name",
                "alias" => "name",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Probability",
                "alias" => "probability",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 1,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Amount",
                "alias" => "amount",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 1,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Summary",
                "alias" => "summary",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "textarea",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Expected Close",
                "alias" => "expected_close",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "date",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Actual Close",
                "alias" => "actual_close",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "date",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Last Viewed",
                "alias" => "last_viewed",
                "model" => Opportunity::class,
                "group" => "core",
                "type" => "date",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],

            // User Fields
            [
                "label" => "Twilio Number",
                "alias" => "twilio_number",
                "model" => User::class,
                "group" => "core",
                "type" => "text",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Number of Calls",
                "alias" => "number_of_calls",
                "model" => User::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Number of Emails",
                "alias" => "number_of_emails",
                "model" => User::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Number of Opportunities",
                "alias" => "number_of_opportunities",
                "model" => User::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Number of Responses",
                "alias" => "number_of_responses",
                "model" => User::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Number of Texts",
                "alias" => "number_of_sms",
                "model" => User::class,
                "group" => "core",
                "type" => "number",
                "entity_class" => null,
                "default" => null,
                "values" => null,
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
            [
                "label" => "Quota is For",
                "alias" => "quota_is_for",
                "model" => User::class,
                "group" => "core",
                "type" => "picklist",
                "entity_class" => null,
                "default" => 'weekly',
                "values" => json_encode([
                    'weekly' => 'Weekly',
                    'monthly' => 'Monthly',
                    'quarterly' => 'Quarterly'
                ]),
                "required" => 0,
                "protected" => 1,
                "hidden" => 0,
                "summary" => 0,
                "ordering" => 0,
                "searchable" => 0,
                "export" => 1,
            ],
        ];

        foreach ($coreFields as $field) {
            Field::create($field);
        }
    }
}

<?php

use App\Eloquent\AnswerDetail;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 5:28 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class AnswerDetailsSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $answers   = [
            '.1' => '9e5669fe-b0e7-4d8e-a9bf-436b6046c9fa',
            '.2' => '70ec998c-064d-4925-b46a-cf4f70fef087',
        ];
        $options   = [
            '.1' => 'a4601425-a340-4bde-b0e9-ca423becce07',
            '.2' => '2c7d23d1-744d-4c2b-9756-f0a0a135e48c',
            '.3' => 'c9c18fb0-ab08-4715-a29d-5664fcbad88b',
            '.4' => 'd559a8e7-a93d-4903-a893-99a0f06f7ea2',
        ];
        $favours   = [
            '.1' => '27d48b87-e04e-4dab-8cbf-18abbee49279',
            '.2' => 'ed4794de-7b79-47b2-98aa-4e1f135bc726',
        ];
        $questions = [
            '.1' => '36f53702-c111-4efb-80f5-fa3a58f88876',
            '.2' => 'd135c99d-29d2-4c01-8219-b985f5db21b7',
            '.3' => 'c31b2572-8e96-45a4-92fd-d9c11affc8d0',
            '.4' => 'a23d5277-76cf-47ad-9698-8ece0fdd5e08',
            '.5' => '2210699c-7c01-4085-a503-584523f7becf',
            '.6' => 'ca7177a2-ebf7-4261-b410-04c47f64018c',
            '.7' => '2c743ca0-6af0-497b-aa93-37450d6f3a53',
            '.8' => '36b500d7-0b92-4882-8fab-64b30a568cce',
            '.9' => 'acf74926-fa16-421c-9bc1-c751cde12ad2',
            '.10' => '3e791b35-5f4c-49a0-8649-6e909914e983',
            '.11' => '8d8d69a8-46f8-4386-aae7-c2784c4aeecc',
            '.12' => '9afb6504-ea00-47a6-8886-f864df680e6e',
            '.13' => '694cd9ad-f742-471d-b73a-5f4b0659f86c',
            '.14' => 'db4d443a-3629-448a-9c75-c91957b21078',
            '.15' => '550ea524-bdf2-445d-9d5a-3ff2798f9b0a',
            '.16' => 'bd682c07-7d2a-44d4-b8cb-98912ca06855',
            '.17' => '91c80124-c3ba-41fd-87e5-67e3ef6b4c8c',
            '.18' => '23175bfb-0fd1-498a-ba8b-19ca7fdfd772',
            '.19' => 'efa862c7-ca32-423c-8082-1d33413d15d1',
            '.20' => 'c1c747b3-6040-491e-bba5-2993e6e21f2c',
            '.21' => '3baa55aa-6c64-44e8-94f5-2e8783af8065',
            '.22' => '4e5f6994-8648-48e3-b166-42147c84f452',
            '.23' => 'f4b02637-7974-4e5a-8da1-f9c770e0d7eb',
            '.24' => '1506da95-80fd-42e0-8505-6d669976aa1d',
            '.25' => '88764850-8ce5-4b0b-acce-73bc5d6e01e4',
            '.26' => 'ac547c9f-37d5-465e-91bc-576bda05707e',
            '.27' => 'af98e0c2-eaca-42dc-842c-3cd99ca2b0b4',
            '.28' => 'a28dc784-e0bc-4fd3-a83e-e242c194308a',
            '.29' => 'dfbf19be-7d0a-4bc1-9a32-f4bc04e5756a',
            '.30' => 'f0c35fcf-5b7f-4ab9-8eea-6114e0d430b0',
            '.31' => '94afa810-c0c9-42ca-b798-af52c07cd4aa',
            '.32' => '17a07c26-04d6-4a7e-9813-d7e1c2fa915a',
            '.33' => '46118424-874c-4c4a-bfb7-dcf74bd6711a',
            '.34' => 'ddc8c613-92bd-4219-8a16-51614119444e',
            '.35' => '83200cbd-7c5e-4efa-976d-d5494746243c',
            '.36' => 'aca8bed0-1f4b-4fc0-b983-57ce7909469b',
            '.37' => '5e427d42-6542-4f0d-b402-b7b2fe584916',
            '.38' => 'aa557667-766a-4326-82d4-3a19d557a26e',
            '.39' => '74f85275-7572-4e64-a9b3-f84ef2c47011',
            '.40' => 'd6317a84-2314-4367-921f-8c32c910c1e4',
            '.41' => 'e1f02ec0-afd6-4f0d-812c-0441f5710811',
            '.42' => '67b86828-44c4-4347-8484-00c94e8d1949',
            '.43' => 'e98788bf-ea46-424e-8487-87267f4351b2',
            '.44' => '78dbe1c3-b280-491c-8ec7-7740b0b2072a',
            '.45' => 'f9411daf-fe96-43fe-a888-4ae83b1ac461',
            '.46' => '580d1e29-e9e8-4542-8ac6-5e6f10bd9ded',
            '.47' => 'a00cfd7c-6b72-4988-a08b-b1ec36a00b98',
            '.48' => 'e4dcaebd-64e1-4752-b54e-d60a2bb1d6fb',
            '.49' => '20cd7cfe-c4ba-44ab-8b6a-03e1d92a6311',
            '.50' => '9f5b2241-6ed7-46e6-9a7b-82e0eb6c16d9',
            '.51' => 'a8fe5bb2-2b6b-450f-8f4d-293fa90c7ecf',
            '.52' => '91ad2483-3a6f-4911-adb4-b0205b8f66b9',
            '.53' => '9736b4cf-d91c-4888-b528-ddc05da00f3b',
            '.54' => '1eedd6ff-48a1-460f-889f-c84ca5a4d74f',
            '.55' => '5953d09f-2f3e-46a2-b1c2-2616d40e1bb9',
            '.56' => '91aacd6b-7958-42a0-b621-83cc0da7c044',
            '.57' => 'b370f73f-c9f3-4492-a797-8977fceac89b',
            '.58' => '34bb03b8-19c9-474c-8f98-4ce05ccc5eb0',
            '.59' => '7851b19f-8784-405d-a5bc-b112c34ee182',
            '.60' => 'ef47c743-9015-402e-a843-e433d4fb9753',
            '.61' => '29eb0ab3-53cf-44f0-b1a4-b4b661b5aca9',
            '.62' => 'd1f12324-6777-453f-8b58-520847d63f92',
            '.63' => 'a8c59943-23eb-4579-b92a-9909e3fc2549',
            '.64' => '676b63db-4b1d-44fb-be67-229c9362d4e2',
            '.65' => '77e13c5d-bcba-4c73-9b45-931bf77914de',
            '.66' => 'd8f09800-7e75-42d8-85e5-74a8a0a1fe23',
            '.67' => 'd0debef2-cccc-4bfe-a82f-7ce1795262ea',
            '.68' => 'a77d3d82-dac5-490b-b3b3-2f05d9a05026',
            '.69' => '47b056f2-7b58-4aa5-af00-40222c7e1348',
            '.70' => 'f817fc13-6a7c-4c95-894c-62179209becd',
        ];
        $data      = [
            [
                ['id' => '4626db89-09e2-464b-93d1-966d3d857fde', 'answer_code' => 1, 'question' => 50, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 1],
                ['id' => 'f2f78462-958d-4a5d-8c04-2fb4fe430dc1', 'answer_code' => 1, 'question' => 19, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 2],
                ['id' => 'aa99fbaf-4c65-4652-80cb-1384a82fa3f5', 'answer_code' => 1, 'question' => 44, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 3],
                ['id' => '241d1037-5ed1-4f22-8f77-2db38e50bf5c', 'answer_code' => 1, 'question' => 36, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 4],
                ['id' => '6c8da732-55d1-4b69-a4bb-8d3724eb501c', 'answer_code' => 1, 'question' => 7, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 5],
                ['id' => '8dc631cd-928b-409e-8e0a-1ef36f5b1e9c', 'answer_code' => 1, 'question' => 49, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 6],
                ['id' => '4431432f-d5e2-472d-a109-0fb24f3ebb9c', 'answer_code' => 1, 'question' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 7],
                ['id' => '5542590d-22e9-41f8-a269-b453d90b2acc', 'answer_code' => 1, 'question' => 32, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 8],
                ['id' => '962a1c27-8f58-4673-a134-57cafc0d4bb4', 'answer_code' => 1, 'question' => 35, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 9],
                ['id' => 'e393dad2-9649-4f34-92d0-66061e35f7ba', 'answer_code' => 1, 'question' => 41, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 10],
                ['id' => '5d48e88c-caae-47f3-8212-4bfaeb5ec7ff', 'answer_code' => 1, 'question' => 20, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 11],
                ['id' => 'fea3f15e-d35d-4794-a0dc-7010cda24f64', 'answer_code' => 1, 'question' => 4, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 12],
                ['id' => '807dc2c6-cd1e-464f-88e6-bc6265487beb', 'answer_code' => 1, 'question' => 22, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 13],
                ['id' => 'cf90e247-119a-44fe-ac6d-d3356cb0394c', 'answer_code' => 1, 'question' => 18, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 14],
                ['id' => '0ea181ef-393b-47df-b870-ee5f8fa03aa2', 'answer_code' => 1, 'question' => 69, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 15],
                ['id' => '25c12611-6576-42b6-a4c8-51a7ab24f46a', 'answer_code' => 1, 'question' => 48, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 16],
                ['id' => '7af496a6-036d-4919-8153-e927b1821377', 'answer_code' => 1, 'question' => 45, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 17],
                ['id' => 'b83c54cb-557a-4585-a908-58231f491960', 'answer_code' => 1, 'question' => 43, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 18],
                ['id' => '0ed7061b-ff00-46e4-acad-785bd81e1d4b', 'answer_code' => 1, 'question' => 57, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 19],
                ['id' => '5c2c38d5-7de1-4ed0-a077-a3cac2b7fae5', 'answer_code' => 1, 'question' => 39, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 20],
                ['id' => 'a54e79f7-9a4d-49e5-9c36-f86bbb6e1a2d', 'answer_code' => 1, 'question' => 30, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 21],
                ['id' => '0bd84bc8-ade7-459f-a8e6-f99d2ca5e559', 'answer_code' => 1, 'question' => 61, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 22],
                ['id' => 'a07e1679-94e2-4df1-b4c0-2415b06da0ce', 'answer_code' => 1, 'question' => 16, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 23],
                ['id' => 'b03fe974-277f-4b62-8823-17f74534b7bc', 'answer_code' => 1, 'question' => 54, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 24],
                ['id' => 'cd227047-131c-455e-9b8f-3dbc778ed0cf', 'answer_code' => 1, 'question' => 47, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 25],
                ['id' => '8c7b4f82-9187-4452-be12-e70b6dda9f10', 'answer_code' => 1, 'question' => 59, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 26],
                ['id' => 'af6d4c25-b913-4393-beed-b4b41aef9563', 'answer_code' => 1, 'question' => 12, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 27],
                ['id' => '40b1a33c-6df6-4a61-b715-a60e72216496', 'answer_code' => 1, 'question' => 52, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 28],
                ['id' => 'f30de165-e0a8-4eba-932c-6f3e5209e436', 'answer_code' => 1, 'question' => 33, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 29],
                ['id' => '758c5cd3-5a21-468e-9223-8f9f7ed4a452', 'answer_code' => 1, 'question' => 63, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 30],
                ['id' => '97ee3264-a89b-4c43-a534-920eaab65197', 'answer_code' => 1, 'question' => 9, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 31],
                ['id' => '610edaea-4d38-4d49-95a9-7f427ea10989', 'answer_code' => 1, 'question' => 65, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 32],
                ['id' => '92cb2713-46ba-4c65-afd7-5886b90ff25a', 'answer_code' => 1, 'question' => 24, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 33],
                ['id' => '91ce1bbc-6528-44d4-ae4b-037287829b5f', 'answer_code' => 1, 'question' => 42, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 34],
                ['id' => 'ffd5b9ae-98c4-4554-8d79-acce447c1fb4', 'answer_code' => 1, 'question' => 11, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 35],
                ['id' => 'b79a99dd-d368-4e0c-adc6-0e1f810236b8', 'answer_code' => 1, 'question' => 53, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 36],
                ['id' => '78414f3b-87ae-4c45-8df1-159d92ebebba', 'answer_code' => 1, 'question' => 68, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 37],
                ['id' => '3bd10bf5-41ae-4169-8605-d01b93703085', 'answer_code' => 1, 'question' => 46, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 38],
                ['id' => '316aef6e-df03-4708-a8f6-3f2f0bebce43', 'answer_code' => 1, 'question' => 15, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 39],
                ['id' => '3ec3bce5-0e5e-4002-9c1c-f07e4e60cc37', 'answer_code' => 1, 'question' => 5, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 40],
                ['id' => 'e3556d9a-da0a-42f9-a7af-42c22e30221f', 'answer_code' => 1, 'question' => 58, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 41],
                ['id' => 'b116109a-36e8-4514-8dac-29f97111d3bc', 'answer_code' => 1, 'question' => 70, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 42],
                ['id' => 'd7f806d2-f66f-41d5-b628-6d91aac016c7', 'answer_code' => 1, 'question' => 64, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 43],
                ['id' => 'ee2964e6-5997-408c-be42-6faf5fafe350', 'answer_code' => 1, 'question' => 51, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 44],
                ['id' => '4dd1a5c6-e0b5-4a2e-8d6b-961e61ec4adb', 'answer_code' => 1, 'question' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 45],
                ['id' => '2f4baca0-3d0c-4637-a4c6-72b81223e500', 'answer_code' => 1, 'question' => 40, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 46],
                ['id' => '9092b939-d42e-42ef-ac01-ef1760852633', 'answer_code' => 1, 'question' => 34, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 47],
                ['id' => '110f7529-0167-41cd-91b3-b5158c4d28b9', 'answer_code' => 1, 'question' => 17, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 48],
                ['id' => '58f3e530-b629-4262-8d57-a90ebaa3bb40', 'answer_code' => 1, 'question' => 55, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 49],
                ['id' => '6c481431-3988-43ff-9b97-2f089eebe27e', 'answer_code' => 1, 'question' => 38, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 50],
                ['id' => '9fff697c-8a35-4b3d-9cda-e4efac069853', 'answer_code' => 1, 'question' => 3, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 51],
                ['id' => '497a1774-7740-468d-a9dd-cffb6fe3e321', 'answer_code' => 1, 'question' => 26, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 52],
                ['id' => '5884250a-1816-40fe-8720-f2dbdaebfc12', 'answer_code' => 1, 'question' => 67, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 53],
                ['id' => '95721da4-4a43-4eb7-b7ee-542e9bb200f6', 'answer_code' => 1, 'question' => 21, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 54],
                ['id' => 'e4f4fcd7-b04c-44b7-90f6-a43a5f05330e', 'answer_code' => 1, 'question' => 25, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 55],
                ['id' => 'dfd28b81-5fcf-4c46-b936-fb1acadf450a', 'answer_code' => 1, 'question' => 28, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 56],
                ['id' => '0c83d9f9-7cdb-40c9-8334-1691a406e26a', 'answer_code' => 1, 'question' => 29, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 57],
                ['id' => 'c58dedf3-b786-44b7-a97f-5b208c5681df', 'answer_code' => 1, 'question' => 31, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 58],
                ['id' => '4ff669fd-8522-42fd-b086-978d33f753d7', 'answer_code' => 1, 'question' => 60, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 59],
                ['id' => '784c7ff5-3285-4dbd-a70b-13d3725c9614', 'answer_code' => 1, 'question' => 37, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 60],
                ['id' => '5e6cb1f7-8d40-43a9-8ef8-76c1f7b50258', 'answer_code' => 1, 'question' => 14, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 61],
                ['id' => '41f9118c-d703-4ab8-a729-d68667fc3d54', 'answer_code' => 1, 'question' => 62, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 62],
                ['id' => 'bdb66d9c-16b9-4e88-8183-6c74995023da', 'answer_code' => 1, 'question' => 56, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 63],
                ['id' => '631fab81-08e8-4023-8219-84863f62b0f3', 'answer_code' => 1, 'question' => 23, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 64],
                ['id' => '93a71f40-1d9e-476f-9c84-5ffddc7d4147', 'answer_code' => 1, 'question' => 6, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 65],
                ['id' => '481bf311-2139-4c93-87e6-a44d0b92bd95', 'answer_code' => 1, 'question' => 13, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 66],
                ['id' => 'c7c1069a-f703-4ada-bd8f-d0d5929feae8', 'answer_code' => 1, 'question' => 66, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 67],
                ['id' => '52861763-647c-4c2d-9f6d-dc191dc3c3da', 'answer_code' => 1, 'question' => 8, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 68],
                ['id' => '3c54040a-8cb9-47d2-b20e-251441b7b62e', 'answer_code' => 1, 'question' => 27, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 69],
                ['id' => 'a7fcd3c4-1c9b-40c4-97ec-509d803c857a', 'answer_code' => 1, 'question' => 10, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'order' => 70],
            ],
            [
                ['id' => '2088f5bb-4242-45d7-b654-8cefd131d4eb', 'answer_code' => 2, 'question' => 50, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 1],
                ['id' => '8374c880-3b64-4beb-882a-6277f92a6432', 'answer_code' => 2, 'question' => 19, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 2],
                ['id' => '7411c61b-3280-44ef-b32d-f3d39531c010', 'answer_code' => 2, 'question' => 44, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 3],
                ['id' => 'e06d357e-dac8-4249-b6f0-21ab038ca245', 'answer_code' => 2, 'question' => 36, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 4],
                ['id' => '1380ad6f-d717-4fa1-94a0-9338ff1b9015', 'answer_code' => 2, 'question' => 7, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 5],
                ['id' => '7bb574fb-9971-47d3-84f4-9ed248f8b79a', 'answer_code' => 2, 'question' => 49, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 6],
                ['id' => '7473412f-d433-4644-ba5b-7c41909709b9', 'answer_code' => 2, 'question' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 7],
                ['id' => 'd3ef96db-140d-4584-b63a-8aa47e9ccb15', 'answer_code' => 2, 'question' => 32, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 8],
                ['id' => 'da398d7f-1599-4a50-ac5c-7fb8c14ea5f5', 'answer_code' => 2, 'question' => 35, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 9],
                ['id' => '70698986-f36c-4e05-809f-a33fb2cf3af3', 'answer_code' => 2, 'question' => 41, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 10],
                ['id' => '4aececb4-b9a3-43ce-b5c0-14f0b8723ecc', 'answer_code' => 2, 'question' => 20, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 11],
                ['id' => 'c5c73906-d664-4299-9d97-79c50740fbf1', 'answer_code' => 2, 'question' => 4, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 12],
                ['id' => 'd4e4c2f9-7bdb-49f6-be5f-9eaa447e8b27', 'answer_code' => 2, 'question' => 22, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 13],
                ['id' => '1f143ffe-9bfd-4803-adc7-278000109b3d', 'answer_code' => 2, 'question' => 18, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 14],
                ['id' => 'bd0459c0-5bea-411e-b3c4-24014b6f6264', 'answer_code' => 2, 'question' => 69, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 15],
                ['id' => 'f2c4300b-e510-496b-bd13-f8c323698750', 'answer_code' => 2, 'question' => 48, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 16],
                ['id' => 'e62a8496-efd0-4bfc-b417-da90ce3e5caa', 'answer_code' => 2, 'question' => 45, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 17],
                ['id' => 'ed876999-4ec7-4ea2-824b-3c86a24fa140', 'answer_code' => 2, 'question' => 43, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 18],
                ['id' => '07a3a6a3-6217-481e-a8a3-17fa89194985', 'answer_code' => 2, 'question' => 57, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 19],
                ['id' => '16529158-6e9a-426a-b9c1-3bb856fc5680', 'answer_code' => 2, 'question' => 39, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 20],
                ['id' => 'bee7e599-155a-44df-b5d4-40279bf5a3b4', 'answer_code' => 2, 'question' => 30, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 21],
                ['id' => '5894d06a-1cd7-4c0a-b2c6-a3fe63d5140e', 'answer_code' => 2, 'question' => 61, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 22],
                ['id' => '417a88b6-b306-44b9-bc3f-f910cf8d286e', 'answer_code' => 2, 'question' => 16, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 23],
                ['id' => 'e474db51-fe03-4f6e-952e-7e5821aee2ab', 'answer_code' => 2, 'question' => 54, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 24],
                ['id' => '118245e2-a789-4eb6-a1a9-b5814a22f60f', 'answer_code' => 2, 'question' => 47, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 25],
                ['id' => '460deae2-4bc8-4361-9cac-2d67369d6297', 'answer_code' => 2, 'question' => 59, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 26],
                ['id' => '2d8ae765-f9dc-4be4-86aa-83d167128cda', 'answer_code' => 2, 'question' => 12, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 27],
                ['id' => '46ee09b0-0f6f-43e3-8c7c-0277d7eb245c', 'answer_code' => 2, 'question' => 52, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 28],
                ['id' => '08c6cad2-5025-44c6-a506-7c36f9653277', 'answer_code' => 2, 'question' => 33, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 29],
                ['id' => '5a0a85cc-e5e5-4299-b174-75b9acf621b3', 'answer_code' => 2, 'question' => 63, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 30],
                ['id' => '6dab169a-8800-4a61-9302-2e0efc46bc2b', 'answer_code' => 2, 'question' => 9, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 31],
                ['id' => '415ad7c5-d89c-42b7-854b-e02ef6eee879', 'answer_code' => 2, 'question' => 65, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 32],
                ['id' => '042a5ef3-e8e1-499a-9a46-0cdac7703afd', 'answer_code' => 2, 'question' => 24, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 33],
                ['id' => '5dbd0d06-875c-4d7a-832e-8e9598663b8e', 'answer_code' => 2, 'question' => 42, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 34],
                ['id' => '794a66d2-605a-4e76-bb66-382947d75465', 'answer_code' => 2, 'question' => 11, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 35],
                ['id' => '81f06130-7198-49dd-8615-24e5b6eb8ed0', 'answer_code' => 2, 'question' => 53, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 36],
                ['id' => 'a4d3e0b9-57c0-43e7-9af6-5c9e44e15a89', 'answer_code' => 2, 'question' => 68, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 37],
                ['id' => '4ce1ccf5-c31d-4b77-93e1-e99327a6395f', 'answer_code' => 2, 'question' => 46, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 38],
                ['id' => 'a6261ce5-79d3-47d5-86e2-31c63ae9e8e3', 'answer_code' => 2, 'question' => 15, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 39],
                ['id' => 'f8c32e9e-d6a0-4490-94c5-f9238d66f6d1', 'answer_code' => 2, 'question' => 5, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 40],
                ['id' => 'd438a2eb-e21c-489a-a57b-1dcdf99fd93a', 'answer_code' => 2, 'question' => 58, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 41],
                ['id' => '666f0679-9a9a-4747-aee5-179123751c58', 'answer_code' => 2, 'question' => 70, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 42],
                ['id' => '82836958-872a-4e28-971c-563f0500a0ef', 'answer_code' => 2, 'question' => 64, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 43],
                ['id' => 'b742c3f7-e081-4305-a5fc-db46fc88c7fd', 'answer_code' => 2, 'question' => 51, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 44],
                ['id' => '2d558180-1778-4e56-b01c-c7bdefac62e7', 'answer_code' => 2, 'question' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 45],
                ['id' => '1886b015-bc14-4a34-984e-6d07f9f871a8', 'answer_code' => 2, 'question' => 40, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 46],
                ['id' => '5aa2cfeb-5dc3-428c-ac5c-11d8f2e618fa', 'answer_code' => 2, 'question' => 34, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 47],
                ['id' => 'b27fbf3d-8f0a-413e-821c-ceac5451b317', 'answer_code' => 2, 'question' => 17, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 48],
                ['id' => 'ce05d9f4-880b-4931-82f6-e779d3f5fd51', 'answer_code' => 2, 'question' => 55, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 49],
                ['id' => '02bc9967-eef4-4dc5-9eb7-c976ff83f1ed', 'answer_code' => 2, 'question' => 38, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 50],
                ['id' => '65deb24d-80be-4cd0-acd0-b44868a451d2', 'answer_code' => 2, 'question' => 3, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 51],
                ['id' => '05afa318-bf0e-4513-bafb-8dfb0497e82c', 'answer_code' => 2, 'question' => 26, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 52],
                ['id' => 'c6548974-8491-41f2-af40-dab76b17230c', 'answer_code' => 2, 'question' => 67, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 53],
                ['id' => '099a9941-a022-47a3-a8c2-eac8f790fc08', 'answer_code' => 2, 'question' => 21, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 54],
                ['id' => 'c2cbbbb0-b383-42d3-85d9-4a9ec4753a2d', 'answer_code' => 2, 'question' => 25, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 55],
                ['id' => 'a8b97221-bfe5-44b3-ad5a-94e9a2ffb021', 'answer_code' => 2, 'question' => 28, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 56],
                ['id' => 'b89bb280-9f55-486c-830a-8a08bee0ea37', 'answer_code' => 2, 'question' => 29, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 57],
                ['id' => '9adb1ca7-7ff5-4eac-a43a-8155cae4ecee', 'answer_code' => 2, 'question' => 31, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 58],
                ['id' => '96528178-d39c-457c-b0b5-ed6eb92749ff', 'answer_code' => 2, 'question' => 60, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 59],
                ['id' => 'a85ede4d-5e13-4f55-9edf-a362421df36d', 'answer_code' => 2, 'question' => 37, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 60],
                ['id' => 'fea5f3a6-4285-4d83-ad37-236ed82b0aaa', 'answer_code' => 2, 'question' => 14, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 61],
                ['id' => '377be38b-5654-4b97-8fca-14de428dea3d', 'answer_code' => 2, 'question' => 62, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 62],
                ['id' => '4b5cb837-ba56-4744-a091-1d6c732f86f3', 'answer_code' => 2, 'question' => 56, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 63],
                ['id' => '2ce274a0-2c58-43e6-ae85-8a9eb597f689', 'answer_code' => 2, 'question' => 23, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'order' => 64],
                ['id' => 'bd413f25-124c-40cb-9831-54ad0f94dbda', 'answer_code' => 2, 'question' => 6, 'order' => 65],
                ['id' => '1d385055-cf9a-4aa4-a5fd-e971a1597e32', 'answer_code' => 2, 'question' => 13, 'order' => 66],
                ['id' => '559b2863-d87c-44d0-a43c-c5787c306be8', 'answer_code' => 2, 'question' => 66, 'order' => 67],
                ['id' => 'aae53c41-6bc7-46bd-8d09-52a7cc0353f7', 'answer_code' => 2, 'question' => 8, 'order' => 68],
                ['id' => '3d8c40b8-5648-49e1-88d0-af59f4528813', 'answer_code' => 2, 'question' => 27, 'order' => 69],
                ['id' => '3a77acdb-0da6-43e5-90ac-183408e12bfa', 'answer_code' => 2, 'question' => 10, 'order' => 70],
            ]
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new AnswerDetail();
        foreach ($data as $c1)
        {
            foreach ($c1 as $c2)
            {
                if (!$model->where('answer_code', '=', $c2['answer_code'])->where('question', '=', $c2['question'])->first())
                {
                    $c2['answer_code'] = $answers[".{$c2['answer_code']}"];
                    $c2['answer']      = key_exists('answer', $c2) ? $options[".{$c2['answer']}"] : null;
                    $c2['favour']      = key_exists('favour', $c2) ? $favours[".{$c2['favour']}"] : null;
                    $c2['question']    = $questions[".{$c2['question']}"];
                    $model->insert($c2);
                }
            }
        }
    }

    public function roll()
    {
        AnswerDetail::whereNotNull('id')->delete();
    }
}

?>

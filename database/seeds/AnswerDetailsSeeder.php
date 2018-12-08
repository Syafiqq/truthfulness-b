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
            '.71' => '908140da-27c1-49c7-9668-68b5bae3de69',
            '.72' => '81fe89e2-b48d-499f-81f6-f6fc2712cdab',
            '.73' => '4b7057ad-7207-4f29-a441-0f752a502abc',
            '.74' => 'deb4bccf-be5e-4e9e-a71c-fcbc97fc9491',
            '.75' => 'bf205aa3-8488-49ae-8af7-dd29474cfdd4',
            '.76' => '25981b1b-cef7-468d-bdbe-3620c5fcebe9',
            '.77' => '139e65b4-14d4-4801-834a-19a1d5d7f59d',
            '.78' => 'c0a7dcdb-a88a-460f-a4b9-007c986495bc',
        ];
        $data      = [
            [
                ['id' => '4626db89-09e2-464b-93d1-966d3d857fde', 'order' => 2, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 1],
                ['id' => 'f2f78462-958d-4a5d-8c04-2fb4fe430dc1', 'order' => 72, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 2],
                ['id' => 'aa99fbaf-4c65-4652-80cb-1384a82fa3f5', 'order' => 22, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 3],
                ['id' => '241d1037-5ed1-4f22-8f77-2db38e50bf5c', 'order' => 74, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 4],
                ['id' => '6c8da732-55d1-4b69-a4bb-8d3724eb501c', 'order' => 1, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 5],
                ['id' => '8dc631cd-928b-409e-8e0a-1ef36f5b1e9c', 'order' => 32, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 6],
                ['id' => '4431432f-d5e2-472d-a109-0fb24f3ebb9c', 'order' => 65, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 7],
                ['id' => '5542590d-22e9-41f8-a269-b453d90b2acc', 'order' => 53, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 8],
                ['id' => '962a1c27-8f58-4673-a134-57cafc0d4bb4', 'order' => 34, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 9],
                ['id' => 'e393dad2-9649-4f34-92d0-66061e35f7ba', 'order' => 41, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 10],
                ['id' => '5d48e88c-caae-47f3-8212-4bfaeb5ec7ff', 'order' => 60, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 11],
                ['id' => 'fea3f15e-d35d-4794-a0dc-7010cda24f64', 'order' => 3, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 12],
                ['id' => '807dc2c6-cd1e-464f-88e6-bc6265487beb', 'order' => 49, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 13],
                ['id' => 'cf90e247-119a-44fe-ac6d-d3356cb0394c', 'order' => 31, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 14],
                ['id' => '0ea181ef-393b-47df-b870-ee5f8fa03aa2', 'order' => 59, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 15],
                ['id' => '25c12611-6576-42b6-a4c8-51a7ab24f46a', 'order' => 62, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 16],
                ['id' => '7af496a6-036d-4919-8153-e927b1821377', 'order' => 23, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 17],
                ['id' => 'b83c54cb-557a-4585-a908-58231f491960', 'order' => 19, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 18],
                ['id' => '0ed7061b-ff00-46e4-acad-785bd81e1d4b', 'order' => 35, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 19],
                ['id' => '5c2c38d5-7de1-4ed0-a077-a3cac2b7fae5', 'order' => 64, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 20],
                ['id' => 'a54e79f7-9a4d-49e5-9c36-f86bbb6e1a2d', 'order' => 30, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 21],
                ['id' => '0bd84bc8-ade7-459f-a8e6-f99d2ca5e559', 'order' => 44, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 22],
                ['id' => 'a07e1679-94e2-4df1-b4c0-2415b06da0ce', 'order' => 39, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 23],
                ['id' => 'b03fe974-277f-4b62-8823-17f74534b7bc', 'order' => 69, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 24],
                ['id' => 'cd227047-131c-455e-9b8f-3dbc778ed0cf', 'order' => 42, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 25],
                ['id' => '8c7b4f82-9187-4452-be12-e70b6dda9f10', 'order' => 63, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 26],
                ['id' => 'af6d4c25-b913-4393-beed-b4b41aef9563', 'order' => 76, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 27],
                ['id' => '40b1a33c-6df6-4a61-b715-a60e72216496', 'order' => 12, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 28],
                ['id' => 'f30de165-e0a8-4eba-932c-6f3e5209e436', 'order' => 29, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 29],
                ['id' => '758c5cd3-5a21-468e-9223-8f9f7ed4a452', 'order' => 6, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 30],
                ['id' => '97ee3264-a89b-4c43-a534-920eaab65197', 'order' => 67, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 31],
                ['id' => '610edaea-4d38-4d49-95a9-7f427ea10989', 'order' => 18, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 32],
                ['id' => '92cb2713-46ba-4c65-afd7-5886b90ff25a', 'order' => 38, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 33],
                ['id' => '91ce1bbc-6528-44d4-ae4b-037287829b5f', 'order' => 25, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 34],
                ['id' => 'ffd5b9ae-98c4-4554-8d79-acce447c1fb4', 'order' => 4, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 35],
                ['id' => 'b79a99dd-d368-4e0c-adc6-0e1f810236b8', 'order' => 33, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 36],
                ['id' => '78414f3b-87ae-4c45-8df1-159d92ebebba', 'order' => 61, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 37],
                ['id' => '3bd10bf5-41ae-4169-8605-d01b93703085', 'order' => 14, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 38],
                ['id' => '316aef6e-df03-4708-a8f6-3f2f0bebce43', 'order' => 71, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 39],
                ['id' => '3ec3bce5-0e5e-4002-9c1c-f07e4e60cc37', 'order' => 54, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 40],
                ['id' => 'e3556d9a-da0a-42f9-a7af-42c22e30221f', 'order' => 5, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 41],
                ['id' => 'b116109a-36e8-4514-8dac-29f97111d3bc', 'order' => 7, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 42],
                ['id' => 'd7f806d2-f66f-41d5-b628-6d91aac016c7', 'order' => 8, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 43],
                ['id' => 'ee2964e6-5997-408c-be42-6faf5fafe350', 'order' => 66, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 44],
                ['id' => '4dd1a5c6-e0b5-4a2e-8d6b-961e61ec4adb', 'order' => 46, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 45],
                ['id' => '2f4baca0-3d0c-4637-a4c6-72b81223e500', 'order' => 13, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 46],
                ['id' => '9092b939-d42e-42ef-ac01-ef1760852633', 'order' => 68, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 47],
                ['id' => '110f7529-0167-41cd-91b3-b5158c4d28b9', 'order' => 75, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 48],
                ['id' => '58f3e530-b629-4262-8d57-a90ebaa3bb40', 'order' => 21, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 49],
                ['id' => '6c481431-3988-43ff-9b97-2f089eebe27e', 'order' => 70, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 50],
                ['id' => '9fff697c-8a35-4b3d-9cda-e4efac069853', 'order' => 57, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 51],
                ['id' => '497a1774-7740-468d-a9dd-cffb6fe3e321', 'order' => 11, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 52],
                ['id' => '5884250a-1816-40fe-8720-f2dbdaebfc12', 'order' => 37, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 53],
                ['id' => '95721da4-4a43-4eb7-b7ee-542e9bb200f6', 'order' => 78, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 54],
                ['id' => 'e4f4fcd7-b04c-44b7-90f6-a43a5f05330e', 'order' => 15, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 55],
                ['id' => 'dfd28b81-5fcf-4c46-b936-fb1acadf450a', 'order' => 26, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 56],
                ['id' => '0c83d9f9-7cdb-40c9-8334-1691a406e26a', 'order' => 40, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 57],
                ['id' => 'c58dedf3-b786-44b7-a97f-5b208c5681df', 'order' => 17, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 58],
                ['id' => '4ff669fd-8522-42fd-b086-978d33f753d7', 'order' => 56, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 59],
                ['id' => '784c7ff5-3285-4dbd-a70b-13d3725c9614', 'order' => 58, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 60],
                ['id' => '5e6cb1f7-8d40-43a9-8ef8-76c1f7b50258', 'order' => 20, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 61],
                ['id' => '41f9118c-d703-4ab8-a729-d68667fc3d54', 'order' => 16, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 62],
                ['id' => 'bdb66d9c-16b9-4e88-8183-6c74995023da', 'order' => 55, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 63],
                ['id' => '631fab81-08e8-4023-8219-84863f62b0f3', 'order' => 43, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 64],
                ['id' => '93a71f40-1d9e-476f-9c84-5ffddc7d4147', 'order' => 9, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 65],
                ['id' => '481bf311-2139-4c93-87e6-a44d0b92bd95', 'order' => 24, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 66],
                ['id' => 'c7c1069a-f703-4ada-bd8f-d0d5929feae8', 'order' => 77, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 67],
                ['id' => '52861763-647c-4c2d-9f6d-dc191dc3c3da', 'order' => 48, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 68],
                ['id' => '3c54040a-8cb9-47d2-b20e-251441b7b62e', 'order' => 27, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 69],
                ['id' => 'a7fcd3c4-1c9b-40c4-97ec-509d803c857a', 'order' => 73, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 70],
                ['id' => '4c13a519-a13c-4a4c-985e-92e5ce08e9b4', 'order' => 45, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 71],
                ['id' => 'e0633ea6-ac68-4d4d-8c9e-2cee44d3802d', 'order' => 52, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 72],
                ['id' => '2b9ea020-a1dc-467a-b63d-a27cad29b400', 'order' => 36, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 73],
                ['id' => 'cb35a989-0cd6-4d75-af56-85e86d509e79', 'order' => 28, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 74],
                ['id' => 'dc2390b9-4335-4371-85fc-45279ed0c54e', 'order' => 10, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 75],
                ['id' => '8327a049-3f48-4410-9379-8031dd3d953c', 'order' => 51, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 76],
                ['id' => '02c6a07d-b824-49f6-9306-1627404725c5', 'order' => 47, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 77],
                ['id' => '25129471-d52d-41b4-a179-b2dc382d7493', 'order' => 50, 'answer_code' => 1, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-11-30 07:00:01', 'question' => 78]
            ],
            [
                ['id' => '2088f5bb-4242-45d7-b654-8cefd131d4eb', 'order' => 14, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 1],
                ['id' => '8374c880-3b64-4beb-882a-6277f92a6432', 'order' => 26, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 2],
                ['id' => '7411c61b-3280-44ef-b32d-f3d39531c010', 'order' => 37, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 3],
                ['id' => 'e06d357e-dac8-4249-b6f0-21ab038ca245', 'order' => 53, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 4],
                ['id' => '1380ad6f-d717-4fa1-94a0-9338ff1b9015', 'order' => 23, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 5],
                ['id' => '7bb574fb-9971-47d3-84f4-9ed248f8b79a', 'order' => 19, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 6],
                ['id' => '7473412f-d433-4644-ba5b-7c41909709b9', 'order' => 27, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 7],
                ['id' => 'd3ef96db-140d-4584-b63a-8aa47e9ccb15', 'order' => 10, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 8],
                ['id' => 'da398d7f-1599-4a50-ac5c-7fb8c14ea5f5', 'order' => 44, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 9],
                ['id' => '70698986-f36c-4e05-809f-a33fb2cf3af3', 'order' => 41, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 10],
                ['id' => '4aececb4-b9a3-43ce-b5c0-14f0b8723ecc', 'order' => 76, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 11],
                ['id' => 'c5c73906-d664-4299-9d97-79c50740fbf1', 'order' => 75, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 12],
                ['id' => 'd4e4c2f9-7bdb-49f6-be5f-9eaa447e8b27', 'order' => 21, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 13],
                ['id' => '1f143ffe-9bfd-4803-adc7-278000109b3d', 'order' => 45, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 14],
                ['id' => 'bd0459c0-5bea-411e-b3c4-24014b6f6264', 'order' => 51, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 15],
                ['id' => 'f2c4300b-e510-496b-bd13-f8c323698750', 'order' => 6, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 16],
                ['id' => 'e62a8496-efd0-4bfc-b417-da90ce3e5caa', 'order' => 57, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 17],
                ['id' => 'ed876999-4ec7-4ea2-824b-3c86a24fa140', 'order' => 55, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 18],
                ['id' => '07a3a6a3-6217-481e-a8a3-17fa89194985', 'order' => 5, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 19],
                ['id' => '16529158-6e9a-426a-b9c1-3bb856fc5680', 'order' => 24, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 20],
                ['id' => 'bee7e599-155a-44df-b5d4-40279bf5a3b4', 'order' => 72, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 21],
                ['id' => '5894d06a-1cd7-4c0a-b2c6-a3fe63d5140e', 'order' => 65, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 22],
                ['id' => '417a88b6-b306-44b9-bc3f-f910cf8d286e', 'order' => 36, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 23],
                ['id' => 'e474db51-fe03-4f6e-952e-7e5821aee2ab', 'order' => 73, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 24],
                ['id' => '118245e2-a789-4eb6-a1a9-b5814a22f60f', 'order' => 52, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 25],
                ['id' => '460deae2-4bc8-4361-9cac-2d67369d6297', 'order' => 9, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 26],
                ['id' => '2d8ae765-f9dc-4be4-86aa-83d167128cda', 'order' => 34, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 27],
                ['id' => '46ee09b0-0f6f-43e3-8c7c-0277d7eb245c', 'order' => 35, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 28],
                ['id' => '08c6cad2-5025-44c6-a506-7c36f9653277', 'order' => 22, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 29],
                ['id' => '5a0a85cc-e5e5-4299-b174-75b9acf621b3', 'order' => 70, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 30],
                ['id' => '6dab169a-8800-4a61-9302-2e0efc46bc2b', 'order' => 25, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 31],
                ['id' => '415ad7c5-d89c-42b7-854b-e02ef6eee879', 'order' => 28, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 32],
                ['id' => '042a5ef3-e8e1-499a-9a46-0cdac7703afd', 'order' => 13, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 33],
                ['id' => '5dbd0d06-875c-4d7a-832e-8e9598663b8e', 'order' => 63, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 34],
                ['id' => '794a66d2-605a-4e76-bb66-382947d75465', 'order' => 67, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 35],
                ['id' => '81f06130-7198-49dd-8615-24e5b6eb8ed0', 'order' => 2, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 36],
                ['id' => 'a4d3e0b9-57c0-43e7-9af6-5c9e44e15a89', 'order' => 29, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 37],
                ['id' => '4ce1ccf5-c31d-4b77-93e1-e99327a6395f', 'order' => 46, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 38],
                ['id' => 'a6261ce5-79d3-47d5-86e2-31c63ae9e8e3', 'order' => 43, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 39],
                ['id' => 'f8c32e9e-d6a0-4490-94c5-f9238d66f6d1', 'order' => 30, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 40],
                ['id' => 'd438a2eb-e21c-489a-a57b-1dcdf99fd93a', 'order' => 48, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 41],
                ['id' => '666f0679-9a9a-4747-aee5-179123751c58', 'order' => 47, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 42],
                ['id' => '82836958-872a-4e28-971c-563f0500a0ef', 'order' => 56, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 43],
                ['id' => 'b742c3f7-e081-4305-a5fc-db46fc88c7fd', 'order' => 38, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 44],
                ['id' => '2d558180-1778-4e56-b01c-c7bdefac62e7', 'order' => 18, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 45],
                ['id' => '1886b015-bc14-4a34-984e-6d07f9f871a8', 'order' => 16, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 46],
                ['id' => '5aa2cfeb-5dc3-428c-ac5c-11d8f2e618fa', 'order' => 77, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 47],
                ['id' => 'b27fbf3d-8f0a-413e-821c-ceac5451b317', 'order' => 20, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 48],
                ['id' => 'ce05d9f4-880b-4931-82f6-e779d3f5fd51', 'order' => 7, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 49],
                ['id' => '02bc9967-eef4-4dc5-9eb7-c976ff83f1ed', 'order' => 50, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 50],
                ['id' => '65deb24d-80be-4cd0-acd0-b44868a451d2', 'order' => 62, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 51],
                ['id' => '05afa318-bf0e-4513-bafb-8dfb0497e82c', 'order' => 12, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 52],
                ['id' => 'c6548974-8491-41f2-af40-dab76b17230c', 'order' => 11, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 53],
                ['id' => '099a9941-a022-47a3-a8c2-eac8f790fc08', 'order' => 61, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 54],
                ['id' => 'c2cbbbb0-b383-42d3-85d9-4a9ec4753a2d', 'order' => 74, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 55],
                ['id' => 'a8b97221-bfe5-44b3-ad5a-94e9a2ffb021', 'order' => 58, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 56],
                ['id' => 'b89bb280-9f55-486c-830a-8a08bee0ea37', 'order' => 39, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 57],
                ['id' => '9adb1ca7-7ff5-4eac-a43a-8155cae4ecee', 'order' => 64, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 58],
                ['id' => '96528178-d39c-457c-b0b5-ed6eb92749ff', 'order' => 17, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 59],
                ['id' => 'a85ede4d-5e13-4f55-9edf-a362421df36d', 'order' => 8, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 60],
                ['id' => 'fea5f3a6-4285-4d83-ad37-236ed82b0aaa', 'order' => 59, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 61],
                ['id' => '377be38b-5654-4b97-8fca-14de428dea3d', 'order' => 31, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 62],
                ['id' => '4b5cb837-ba56-4744-a091-1d6c732f86f3', 'order' => 78, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 63],
                ['id' => '2ce274a0-2c58-43e6-ae85-8a9eb597f689', 'order' => 1, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 64],
                ['id' => 'bd413f25-124c-40cb-9831-54ad0f94dbda', 'order' => 49, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 65],
                ['id' => '1d385055-cf9a-4aa4-a5fd-e971a1597e32', 'order' => 15, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 66],
                ['id' => '559b2863-d87c-44d0-a43c-c5787c306be8', 'order' => 33, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 67],
                ['id' => 'aae53c41-6bc7-46bd-8d09-52a7cc0353f7', 'order' => 54, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 68],
                ['id' => '3d8c40b8-5648-49e1-88d0-af59f4528813', 'order' => 69, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 69],
                ['id' => '3a77acdb-0da6-43e5-90ac-183408e12bfa', 'order' => 68, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 70],
                ['id' => '5096bc42-de62-40c7-bcad-dea774e8054e', 'order' => 32, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 71],
                ['id' => '4205be5c-8f94-4ebe-a98b-fef7d4dc30c6', 'order' => 4, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 72],
                ['id' => '2b2a576d-5362-4c55-90df-a218cd427f26', 'order' => 40, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 73],
                ['id' => '1beb6e2f-c973-45ed-9e24-85d500ac2f72', 'order' => 66, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 74],
                ['id' => '52daa021-b49a-467e-8f5c-e7262a7d44cb', 'order' => 3, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 75],
                ['id' => '7eff21cf-4f53-4443-8dd7-55a080fab1a9', 'order' => 42, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 76],
                ['id' => 'd5c54718-b280-4743-a935-d361fa807509', 'order' => 60, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 77],
                ['id' => '6a16becf-b24b-4c89-9c8c-89131231bbe5', 'order' => 71, 'answer_code' => 2, 'answer' => 1, 'favour' => 1, 'scale' => 4, 'answered_at' => '2018-12-02 07:00:01', 'question' => 78]
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

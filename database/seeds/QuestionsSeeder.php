<?php

use App\Eloquent\Question;

/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 01 December 2018, 2:55 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class QuestionsSeeder extends RollbackAbleSeeder
{
    public function run()
    {
        $categories = [
            '1' => 'ecb05035-a198-4a6c-a082-32e59331f0f1',
            '2' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18',
            '3' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f',
            '4' => 'b24f1373-f7d5-4307-bc3c-11c788962879',
            '5' => '11a2c711-56aa-4738-b65e-20adafd3560c',
        ];
        $favours    = [
            '1' => '27d48b87-e04e-4dab-8cbf-18abbee49279',
            '2' => 'ed4794de-7b79-47b2-98aa-4e1f135bc726',
        ];

        $data = [
            ['id' => '36f53702-c111-4efb-80f5-fa3a58f88876', 'order' => 1, 'category' => '1', 'favour' => '1', 'question' => 'Bila ditanya sesuatu saya menjawab berdasarkan fakta'],
            ['id' => 'd135c99d-29d2-4c01-8219-b985f5db21b7', 'order' => 2, 'category' => '1', 'favour' => '1', 'question' => 'Saya mengakui jika kurang mengerti terhadap suatu materi'],
            ['id' => 'c31b2572-8e96-45a4-92fd-d9c11affc8d0', 'order' => 3, 'category' => '1', 'favour' => '1', 'question' => 'Saya mengungkapkan perasaan sukaterhadap sesuatu'],
            ['id' => 'a23d5277-76cf-47ad-9698-8ece0fdd5e08', 'order' => 4, 'category' => '1', 'favour' => '1', 'question' => 'Saya bangga dengan hasil yang saya peroleh dengan usaha sendiri'],
            ['id' => '2210699c-7c01-4085-a503-584523f7becf', 'order' => 5, 'category' => '1', 'favour' => '1', 'question' => 'Saya jujur menyampaikan alasan yang ada'],
            ['id' => 'ca7177a2-ebf7-4261-b410-04c47f64018c', 'order' => 6, 'category' => '1', 'favour' => '1', 'question' => 'Apa yang saya sampaikan sesuai dengan apa yang saya kerjakan'],
            ['id' => '2c743ca0-6af0-497b-aa93-37450d6f3a53', 'order' => 7, 'category' => '1', 'favour' => '1', 'question' => 'Memberitahukan sesuatu sesuai dengan kenyataan'],
            ['id' => '36b500d7-0b92-4882-8fab-64b30a568cce', 'order' => 8, 'category' => '1', 'favour' => '1', 'question' => 'Saya mengembalikan barang yang bukan hak/milik saya'],
            ['id' => 'acf74926-fa16-421c-9bc1-c751cde12ad2', 'order' => 9, 'category' => '1', 'favour' => '1', 'question' => 'Saya berusaha menjawab seadanya walaupun nantinya mendapatkan nilai jelek'],
            ['id' => '3e791b35-5f4c-49a0-8649-6e909914e983', 'order' => 10, 'category' => '1', 'favour' => '1', 'question' => 'Saya mengembalikan barang milik teman setelah meminjamnya'],
            ['id' => '8d8d69a8-46f8-4386-aae7-c2784c4aeecc', 'order' => 11, 'category' => '1', 'favour' => '1', 'question' => 'Saya melaporkan barang yang saya temukan di lingkungan sekolah'],
            ['id' => '9afb6504-ea00-47a6-8886-f864df680e6e', 'order' => 12, 'category' => '1', 'favour' => '1', 'question' => 'Saya meminta maaf atas kesalahan yang saya perbuat'],
            ['id' => '694cd9ad-f742-471d-b73a-5f4b0659f86c', 'order' => 13, 'category' => '1', 'favour' => '1', 'question' => 'Saya berkata terus terang ketika melakukan kesalahan'],
            ['id' => 'db4d443a-3629-448a-9c75-c91957b21078', 'order' => 14, 'category' => '1', 'favour' => '1', 'question' => 'Saya menanyakan tugas dari guru yang belum dimengerti'],
            ['id' => '550ea524-bdf2-445d-9d5a-3ff2798f9b0a', 'order' => 15, 'category' => '1', 'favour' => '1', 'question' => 'Saya patuh terhadap peraturan di sekolah'],
            ['id' => 'bd682c07-7d2a-44d4-b8cb-98912ca06855', 'order' => 16, 'category' => '1', 'favour' => '1', 'question' => 'Ketika tidak masuk, saya berterus terang alasan saya tidak mengikuti pelajaran'],
            ['id' => '91c80124-c3ba-41fd-87e5-67e3ef6b4c8c', 'order' => 17, 'category' => '1', 'favour' => '1', 'question' => 'Saya membantu kegiatan di sekolah dengan senang hati'],
            ['id' => '23175bfb-0fd1-498a-ba8b-19ca7fdfd772', 'order' => 18, 'category' => '2', 'favour' => '1', 'question' => 'Saya menerima segala kekurangan serta kelebihan dalam diri saya'],
            ['id' => 'efa862c7-ca32-423c-8082-1d33413d15d1', 'order' => 19, 'category' => '2', 'favour' => '1', 'question' => 'Saya menolong orang tanpa balasan'],
            ['id' => 'c1c747b3-6040-491e-bba5-2993e6e21f2c', 'order' => 20, 'category' => '2', 'favour' => '1', 'question' => 'Saya ikhlas berbagi makanan dengan teman'],
            ['id' => '3baa55aa-6c64-44e8-94f5-2e8783af8065', 'order' => 21, 'category' => '2', 'favour' => '1', 'question' => 'Saya menghapus tulisan di papan tulis meskipun bukan jadwal piket saya'],
            ['id' => '4e5f6994-8648-48e3-b166-42147c84f452', 'order' => 22, 'category' => '2', 'favour' => '1', 'question' => 'Saya tidak keberatan membayar khas kelas di detiap minggu'],
            ['id' => 'f4b02637-7974-4e5a-8da1-f9c770e0d7eb', 'order' => 23, 'category' => '2', 'favour' => '1', 'question' => 'Saya dengan senang hati menjelaskan tugas yang kurang dimengerti teman saya'],
            ['id' => '1506da95-80fd-42e0-8505-6d669976aa1d', 'order' => 24, 'category' => '2', 'favour' => '1', 'question' => 'Saya mengambil keputusan berdasarkan pendapat teman-teman kelompok'],
            ['id' => '88764850-8ce5-4b0b-acce-73bc5d6e01e4', 'order' => 25, 'category' => '2', 'favour' => '1', 'question' => 'Saya menerima akibat dari tindakan yang saya perbuat'],
            ['id' => 'ac547c9f-37d5-465e-91bc-576bda05707e', 'order' => 26, 'category' => '2', 'favour' => '1', 'question' => 'Saya ikhlas apabila dimintai sumbangan untuk teman yang kesusahan'],
            ['id' => 'af98e0c2-eaca-42dc-842c-3cd99ca2b0b4', 'order' => 27, 'category' => '2', 'favour' => '1', 'question' => 'Saya berusaha untuk netral jika ada teman saya yang berselisih'],
            ['id' => 'a28dc784-e0bc-4fd3-a83e-e242c194308a', 'order' => 28, 'category' => '2', 'favour' => '1', 'question' => 'Saya menerima kritik dari teman tentang kinerja saya'],
            ['id' => 'dfbf19be-7d0a-4bc1-9a32-f4bc04e5756a', 'order' => 29, 'category' => '2', 'favour' => '1', 'question' => 'Saya menerima pendapat saya ditolak dalam kelompok saya'],
            ['id' => 'f0c35fcf-5b7f-4ab9-8eea-6114e0d430b0', 'order' => 30, 'category' => '3', 'favour' => '1', 'question' => 'Saya yakin semua yang saya lakukan untuk mencari ridho Tuhan YME'],
            ['id' => '94afa810-c0c9-42ca-b798-af52c07cd4aa', 'order' => 31, 'category' => '3', 'favour' => '1', 'question' => 'Selalu  menebar senyum dalam kondisi apapun'],
            ['id' => '17a07c26-04d6-4a7e-9813-d7e1c2fa915a', 'order' => 32, 'category' => '3', 'favour' => '1', 'question' => 'Saya percaya bahwa Tuhan melihat apapun yang saya perbuat'],
            ['id' => '46118424-874c-4c4a-bfb7-dcf74bd6711a', 'order' => 33, 'category' => '3', 'favour' => '1', 'question' => 'Saya yakin bahwa Tuhan akan menolong ketika saya kesulitan'],
            ['id' => 'ddc8c613-92bd-4219-8a16-51614119444e', 'order' => 34, 'category' => '3', 'favour' => '1', 'question' => 'Saya bersikap apa adanya ketika bersama teman saya'],
            ['id' => '83200cbd-7c5e-4efa-976d-d5494746243c', 'order' => 35, 'category' => '3', 'favour' => '1', 'question' => 'Saya dengan senang hati meminjamkan alat tulis kepada teman yang membutuhkan'],
            ['id' => 'aca8bed0-1f4b-4fc0-b983-57ce7909469b', 'order' => 36, 'category' => '3', 'favour' => '1', 'question' => 'Saya dengan  senang hati  meminjamkan catatan kepada teman yang  tidak masuk'],
            ['id' => '5e427d42-6542-4f0d-b402-b7b2fe584916', 'order' => 37, 'category' => '3', 'favour' => '1', 'question' => 'Saya selalu siap sedia dalam  membantu teman yang membutuhkan'],
            ['id' => 'aa557667-766a-4326-82d4-3a19d557a26e', 'order' => 38, 'category' => '3', 'favour' => '1', 'question' => 'Saya senang melihat teman saya yang meraih rangking satu di kelas'],
            ['id' => '74f85275-7572-4e64-a9b3-f84ef2c47011', 'order' => 39, 'category' => '3', 'favour' => '1', 'question' => 'Saya bahagia melihat teman saya memenangkan perlombaan'],
            ['id' => 'd6317a84-2314-4367-921f-8c32c910c1e4', 'order' => 40, 'category' => '3', 'favour' => '1', 'question' => 'Saya dengan senang hati menyumbangkan tenaga serta pikiran dalam kerja kelompok'],
            ['id' => 'e1f02ec0-afd6-4f0d-812c-0441f5710811', 'order' => 41, 'category' => '4', 'favour' => '1', 'question' => 'Saya yakin dengan bersyukur dapat menambah nikmat'],
            ['id' => '67b86828-44c4-4347-8484-00c94e8d1949', 'order' => 42, 'category' => '4', 'favour' => '1', 'question' => 'Hati saya menjadi tentram dan damai ketika mengingat Tuhan dimanapun saya berada'],
            ['id' => 'e98788bf-ea46-424e-8487-87267f4351b2', 'order' => 43, 'category' => '4', 'favour' => '1', 'question' => 'Saya  menghormati keyakinan yang  dianut  oleh teman saya'],
            ['id' => '78dbe1c3-b280-491c-8ec7-7740b0b2072a', 'order' => 44, 'category' => '4', 'favour' => '1', 'question' => 'Saya menghormati ketika pada jum\'at teman yang beragama Islam membaca Yasin'],
            ['id' => 'f9411daf-fe96-43fe-a888-4ae83b1ac461', 'order' => 45, 'category' => '4', 'favour' => '1', 'question' => 'Kebaikan yang diajarkan oleh Tuhan, akan saya amalkan dalam kehidupan sehari-hari'],
            ['id' => '580d1e29-e9e8-4542-8ac6-5e6f10bd9ded', 'order' => 46, 'category' => '4', 'favour' => '1', 'question' => 'Saya bertingkah laku baik dimanapun'],
            ['id' => 'a00cfd7c-6b72-4988-a08b-b1ec36a00b98', 'order' => 47, 'category' => '4', 'favour' => '1', 'question' => 'Saya menerima akibat dari tindakan yang saya perbuat.'],
            ['id' => 'e4dcaebd-64e1-4752-b54e-d60a2bb1d6fb', 'order' => 48, 'category' => '4', 'favour' => '1', 'question' => 'Menyempatkan waktu untuk ibadah ditengah padatnya jadwal di sekolah'],
            ['id' => '20cd7cfe-c4ba-44ab-8b6a-03e1d92a6311', 'order' => 49, 'category' => '4', 'favour' => '1', 'question' => 'Saya menjalankan perintah agama sesuai dengan apa yang diyakini'],
            ['id' => '9f5b2241-6ed7-46e6-9a7b-82e0eb6c16d9', 'order' => 50, 'category' => '4', 'favour' => '1', 'question' => 'Saya menjauhi apa yang dilarang oleh Tuhan'],
            ['id' => 'a8fe5bb2-2b6b-450f-8f4d-293fa90c7ecf', 'order' => 51, 'category' => '5', 'favour' => '1', 'question' => 'Saya yakin  bahwa  usaha tidak menghianati hasil'],
            ['id' => '91ad2483-3a6f-4911-adb4-b0205b8f66b9', 'order' => 52, 'category' => '5', 'favour' => '1', 'question' => 'Saya berusaha  untuk memperjuangkan sesuatu'],
            ['id' => '9736b4cf-d91c-4888-b528-ddc05da00f3b', 'order' => 53, 'category' => '5', 'favour' => '1', 'question' => 'Saya percaya setiap perbuatan pasti ada balasannya'],
            ['id' => '1eedd6ff-48a1-460f-889f-c84ca5a4d74f', 'order' => 54, 'category' => '5', 'favour' => '1', 'question' => 'Saya menerima atau  memberikan sesuatu dengan  tangan  kanan.'],
            ['id' => '5953d09f-2f3e-46a2-b1c2-2616d40e1bb9', 'order' => 55, 'category' => '5', 'favour' => '1', 'question' => 'Saya bergaul dan memperlakukan orang secara baik'],
            ['id' => '91aacd6b-7958-42a0-b621-83cc0da7c044', 'order' => 56, 'category' => '5', 'favour' => '1', 'question' => 'Saya menghindari sikap sombong'],
            ['id' => 'b370f73f-c9f3-4492-a797-8977fceac89b', 'order' => 57, 'category' => '5', 'favour' => '1', 'question' => 'Saya setia kawan atas dasar kebenaran'],
            ['id' => '34bb03b8-19c9-474c-8f98-4ce05ccc5eb0', 'order' => 58, 'category' => '5', 'favour' => '1', 'question' => 'Saya mengikuti yasinan setiap Jumat pagi'],
            ['id' => '7851b19f-8784-405d-a5bc-b112c34ee182', 'order' => 59, 'category' => '5', 'favour' => '1', 'question' => 'Saya sabar dalam menghadapi kesusahan'],
            ['id' => 'ef47c743-9015-402e-a843-e433d4fb9753', 'order' => 60, 'category' => '5', 'favour' => '1', 'question' => 'Saya menepati janji yang sudah disepakati'],
            ['id' => '29eb0ab3-53cf-44f0-b1a4-b4b661b5aca9', 'order' => 61, 'category' => '5', 'favour' => '1', 'question' => 'Saya menjauhi perbuatan yang kurang berguna'],
            ['id' => 'd1f12324-6777-453f-8b58-520847d63f92', 'order' => 62, 'category' => '5', 'favour' => '1', 'question' => 'Saya menahan amarah dan tidak emosional'],
            ['id' => 'a8c59943-23eb-4579-b92a-9909e3fc2549', 'order' => 63, 'category' => '5', 'favour' => '1', 'question' => 'Saya berbicara  dengan sopan sesuai dengan akidah agama'],
            ['id' => '676b63db-4b1d-44fb-be67-229c9362d4e2', 'order' => 64, 'category' => '5', 'favour' => '1', 'question' => 'Saya berdoa sebelum makan'],
            ['id' => '77e13c5d-bcba-4c73-9b45-931bf77914de', 'order' => 65, 'category' => '5', 'favour' => '1', 'question' => 'Saya berdoa sebelum melakukan kegiatan apapun'],
            ['id' => 'd8f09800-7e75-42d8-85e5-74a8a0a1fe23', 'order' => 66, 'category' => '5', 'favour' => '1', 'question' => 'Saya mencuci tangan sebelum makan'],
            ['id' => 'd0debef2-cccc-4bfe-a82f-7ce1795262ea', 'order' => 67, 'category' => '5', 'favour' => '1', 'question' => 'Saya mencuci tangan sesudah makan'],
            ['id' => 'a77d3d82-dac5-490b-b3b3-2f05d9a05026', 'order' => 68, 'category' => '5', 'favour' => '1', 'question' => 'Saya bertutur kata  santun kepada orang  yang  lebih tua'],
            ['id' => '47b056f2-7b58-4aa5-af00-40222c7e1348', 'order' => 69, 'category' => '5', 'favour' => '1', 'question' => 'Saya ikut aktif dalam kerja bakti di sekolah'],
            ['id' => 'f817fc13-6a7c-4c95-894c-62179209becd', 'order' => 70, 'category' => '5', 'favour' => '1', 'question' => 'Saya menjaga kebersihan lingkungan'],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new Question();
        foreach ($data as $category)
        {
            if (!$model->where('question', '=', $category['question'])->first())
            {
                $category['favour']   = $favours["{$category['favour']}"];
                $category['category'] = $categories["{$category['category']}"];
                $model->insert($category);
            }
        }
    }

    public function roll()
    {
        Question::whereNotNull('id')->delete();
    }
}

?>

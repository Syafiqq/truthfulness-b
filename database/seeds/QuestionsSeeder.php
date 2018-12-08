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
        $data = [
            ['id' => '36f53702-c111-4efb-80f5-fa3a58f88876', 'order' => 1, 'category' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya sudah memiliki gambaran perguruan tinggi mana yang saya tuju setelah lulus.'],
            ['id' => 'd135c99d-29d2-4c01-8219-b985f5db21b7', 'order' => 2, 'category' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Semester Gasal ini, saya mendapatkan peringkat 5 besar'],
            ['id' => 'c31b2572-8e96-45a4-92fd-d9c11affc8d0', 'order' => 3, 'category' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya belajar dengan sungguh-sungguh agar bisa mendapatkan beasiswa'],
            ['id' => 'a23d5277-76cf-47ad-9698-8ece0fdd5e08', 'order' => 4, 'category' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengikuti lomba agar pengalaman saya bertambah'],
            ['id' => '2210699c-7c01-4085-a503-584523f7becf', 'order' => 5, 'category' => 'ecb05035-a198-4a6c-a082-32e59331f0f1', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Ulangan saya  mendapatkan nilai minimal 80'],
            ['id' => 'ca7177a2-ebf7-4261-b410-04c47f64018c', 'order' => 6, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengoptimalkan waktu luang belajar agar nilai akademik saya bertahan.'],
            ['id' => '2c743ca0-6af0-497b-aa93-37450d6f3a53', 'order' => 7, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Dalam satu pekan saya membaca minimal 2 buku pelajaran'],
            ['id' => '36b500d7-0b92-4882-8fab-64b30a568cce', 'order' => 8, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Tugas saya selesai maksimal 2 hari sebelum pengumpulan'],
            ['id' => 'acf74926-fa16-421c-9bc1-c751cde12ad2', 'order' => 9, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya menggunakan waktu luang  bermain daripada belajar'],
            ['id' => '3e791b35-5f4c-49a0-8649-6e909914e983', 'order' => 10, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya lebih memilih belajar daripada pergi nonton  dengan teman-teman'],
            ['id' => '8d8d69a8-46f8-4386-aae7-c2784c4aeecc', 'order' => 11, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya tetap belajar walaupun diminta membantu orangtua'],
            ['id' => '9afb6504-ea00-47a6-8886-f864df680e6e', 'order' => 12, 'category' => '2a0c84a2-439c-4bc7-9392-3cc9ab14bb18', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya tetap belajar ketika sedang rapat di organisasi'],
            ['id' => '694cd9ad-f742-471d-b73a-5f4b0659f86c', 'order' => 13, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya belajar sesuai dengan jadwal yang telah saya susun'],
            ['id' => 'db4d443a-3629-448a-9c75-c91957b21078', 'order' => 14, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membuat ringkasan materi pelajaran'],
            ['id' => '550ea524-bdf2-445d-9d5a-3ff2798f9b0a', 'order' => 15, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya belajar setelah pulang sekolah'],
            ['id' => 'bd682c07-7d2a-44d4-b8cb-98912ca06855', 'order' => 16, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya sudah mempelajari materi yang akan dibahas dikelas'],
            ['id' => '91c80124-c3ba-41fd-87e5-67e3ef6b4c8c', 'order' => 17, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mngerjakan tugas dengan serius jika akan dikumpulkan '],
            ['id' => '23175bfb-0fd1-498a-ba8b-19ca7fdfd772', 'order' => 18, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya akan bermain tebak-tebakan yang berisi materi pelajaran dengan teman untuk menguji ingatan belajar saya'],
            ['id' => 'efa862c7-ca32-423c-8082-1d33413d15d1', 'order' => 19, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya istirahat selama 15 menit ketika sudah belajar selama 1 jam'],
            ['id' => 'c1c747b3-6040-491e-bba5-2993e6e21f2c', 'order' => 20, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Sebelum belajar, saya menyiapkan semua perlengkapan yang saya butuhkan '],
            ['id' => '3baa55aa-6c64-44e8-94f5-2e8783af8065', 'order' => 21, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya  duduk di depan agar fokus ketika guru sedang menerangkan'],
            ['id' => '4e5f6994-8648-48e3-b166-42147c84f452', 'order' => 22, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membuat peta konsep agar saya lebih faham dengan materi'],
            ['id' => 'f4b02637-7974-4e5a-8da1-f9c770e0d7eb', 'order' => 23, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengerjakan soal-soal latihan mengetahui seberapa kemampuan saya'],
            ['id' => '1506da95-80fd-42e0-8505-6d669976aa1d', 'order' => 24, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya lebih memahami materi pelajaran apabila diberikan contoh'],
            ['id' => '88764850-8ce5-4b0b-acce-73bc5d6e01e4', 'order' => 25, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mencatat informasi apapun yang saya dapatkan di kelas'],
            ['id' => 'ac547c9f-37d5-465e-91bc-576bda05707e', 'order' => 26, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya cenderung memahami pelajaran dengan berlatih langsung mengerjakan soal-soal'],
            ['id' => 'af98e0c2-eaca-42dc-842c-3cd99ca2b0b4', 'order' => 27, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya cenderung memahami pelajaran dengan cara mendengarkan penjelasan guru atau teman'],
            ['id' => 'a28dc784-e0bc-4fd3-a83e-e242c194308a', 'order' => 28, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya meminta pendapat orangtua mengenai keputusan saya  memilih jurusan '],
            ['id' => 'dfbf19be-7d0a-4bc1-9a32-f4bc04e5756a', 'order' => 29, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya memikirkan dengan matang   keputusan yang akan saya ambil.'],
            ['id' => 'f0c35fcf-5b7f-4ab9-8eea-6114e0d430b0', 'order' => 30, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya meminta pendapat orangtua saya ketika akan mengambil keputusan  mengikuti les '],
            ['id' => '94afa810-c0c9-42ca-b798-af52c07cd4aa', 'order' => 31, 'category' => '0e9dab20-2e72-4575-a64c-9460a9cc1c3f', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya meminta pendapat orang tua dan guru dalam membuat prioritas antar kegiatan akademik yang saya ikuti'],
            ['id' => '17a07c26-04d6-4a7e-9813-d7e1c2fa915a', 'order' => 32, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membuat jadwal kegiatan sehari-hari'],
            ['id' => '46118424-874c-4c4a-bfb7-dcf74bd6711a', 'order' => 33, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membuat jadwal  mengerjakan tugas-tugas'],
            ['id' => 'ddc8c613-92bd-4219-8a16-51614119444e', 'order' => 34, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Agar saya bisa belajar dengan teratur, saya membuat rancangan belajar per minggu'],
            ['id' => '83200cbd-7c5e-4efa-976d-d5494746243c', 'order' => 35, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membuat jadwal liburan di akhir pekan agar tidak jenuh belajar '],
            ['id' => 'aca8bed0-1f4b-4fc0-b983-57ce7909469b', 'order' => 36, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya menata ulang jadwal apabila jadwal yang sudah saya buat kurang sesuai'],
            ['id' => '5e427d42-6542-4f0d-b402-b7b2fe584916', 'order' => 37, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Kegiatan saya cenderung teratur karena sudah terjadwal dengan baik'],
            ['id' => 'aa557667-766a-4326-82d4-3a19d557a26e', 'order' => 38, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Sekalipun kegiatan saya menumpuk, saya tetap bisa membagi waktu pengerjaan tugas dan belajar.'],
            ['id' => '74f85275-7572-4e64-a9b3-f84ef2c47011', 'order' => 39, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengisi waktu luang sepulang sekolah dengan belajar'],
            ['id' => 'd6317a84-2314-4367-921f-8c32c910c1e4', 'order' => 40, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengisi waktu luang sepulang sekolah dengan bermain game'],
            ['id' => 'e1f02ec0-afd6-4f0d-812c-0441f5710811', 'order' => 41, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengikuti les agar saya lebih paham materi pelajaran '],
            ['id' => '67b86828-44c4-4347-8484-00c94e8d1949', 'order' => 42, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya pergi ke perpustakaan ketika jam kosong'],
            ['id' => 'e98788bf-ea46-424e-8487-87267f4351b2', 'order' => 43, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya berdiskusi materi pelajaran dengan teman ketika jam kosong.'],
            ['id' => '78dbe1c3-b280-491c-8ec7-7740b0b2072a', 'order' => 44, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya belajar jika disuruh orang tua.'],
            ['id' => 'f9411daf-fe96-43fe-a888-4ae83b1ac461', 'order' => 45, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Waktu belajar saya, saya gunakan  menonton televisi'],
            ['id' => '580d1e29-e9e8-4542-8ac6-5e6f10bd9ded', 'order' => 46, 'category' => 'b24f1373-f7d5-4307-bc3c-11c788962879', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Walaupun sudah liburan, saya tetap mempelajari ulang materi yang diajarkan agar saya tidak lupa'],
            ['id' => 'a00cfd7c-6b72-4988-a08b-b1ec36a00b98', 'order' => 47, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya pergi ke perpustakaan membaca buku'],
            ['id' => 'e4dcaebd-64e1-4752-b54e-d60a2bb1d6fb', 'order' => 48, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya bertanya kepada guru ketika saya tidak paham mengenai materi pelajaran'],
            ['id' => '20cd7cfe-c4ba-44ab-8b6a-03e1d92a6311', 'order' => 49, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya berdiskusi dengan teman-teman di kelas mengenai materi-materi yang telah diajarkan'],
            ['id' => '9f5b2241-6ed7-46e6-9a7b-82e0eb6c16d9', 'order' => 50, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya menggunakan internetmencari informasi pengetahuan/pelajaran'],
            ['id' => 'a8fe5bb2-2b6b-450f-8f4d-293fa90c7ecf', 'order' => 51, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya membeli buku sesuai dengan materi pelajaran saya'],
            ['id' => '91ad2483-3a6f-4911-adb4-b0205b8f66b9', 'order' => 52, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya rutin membaca koran agar wawasan saya bertambah'],
            ['id' => '9736b4cf-d91c-4888-b528-ddc05da00f3b', 'order' => 53, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya faham dengan materi apabila dijelaskan secara detail dan berulang kali'],
            ['id' => '1eedd6ff-48a1-460f-889f-c84ca5a4d74f', 'order' => 54, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya tanya kepada kakak kelas jika saya belum faham dengan materi yang diajarkan'],
            ['id' => '5953d09f-2f3e-46a2-b1c2-2616d40e1bb9', 'order' => 55, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mencatat semua apa yang diterangkan oleh Guru'],
            ['id' => '91aacd6b-7958-42a0-b621-83cc0da7c044', 'order' => 56, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya meminjam buku pelajaran kakak kelas untuk menambah referensi materi pelajaran.'],
            ['id' => 'b370f73f-c9f3-4492-a797-8977fceac89b', 'order' => 57, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya langsung melakukan percobaan di rumah apabila mendapatkan materi yang menarik'],
            ['id' => '34bb03b8-19c9-474c-8f98-4ce05ccc5eb0', 'order' => 58, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya memastikan buku sumber rujukan yang saya gunakan tepat'],
            ['id' => '7851b19f-8784-405d-a5bc-b112c34ee182', 'order' => 59, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya berpendapat saat diskusi di dalam kelas'],
            ['id' => 'ef47c743-9015-402e-a843-e433d4fb9753', 'order' => 60, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengangkat tangan sebelum menyampaikan pendapat saat diskusi di dalam kelas'],
            ['id' => '29eb0ab3-53cf-44f0-b1a4-b4b661b5aca9', 'order' => 61, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Teman saya memahami apa yang saya ucapkan'],
            ['id' => 'd1f12324-6777-453f-8b58-520847d63f92', 'order' => 62, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya berbicara sopan kepada semua orang'],
            ['id' => 'a8c59943-23eb-4579-b92a-9909e3fc2549', 'order' => 63, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya dapat menyimpulkan pendapat teman saya dengan tepat'],
            ['id' => '676b63db-4b1d-44fb-be67-229c9362d4e2', 'order' => 64, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengangkat tangan sebelum menyampaikan pendapat'],
            ['id' => '77e13c5d-bcba-4c73-9b45-931bf77914de', 'order' => 65, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Pendapat saya diterima teman-teman '],
            ['id' => 'd8f09800-7e75-42d8-85e5-74a8a0a1fe23', 'order' => 66, 'category' => '11a2c711-56aa-4738-b65e-20adafd3560c', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya merasa tenang ketika presentasi'],
            ['id' => 'd0debef2-cccc-4bfe-a82f-7ce1795262ea', 'order' => 67, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Ketika keputusan saya mengikuti organisasi mengganggu jam belajar, saya akan membuat jadwal ulang kegiatan belajar'],
            ['id' => 'a77d3d82-dac5-490b-b3b3-2f05d9a05026', 'order' => 68, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Ketika keputusan saya mengikuti ektrakulikuler membuat nilai saya jelek, saya akan berdiskusi dengan orangtua'],
            ['id' => '47b056f2-7b58-4aa5-af00-40222c7e1348', 'order' => 69, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Jika saya tidak belajar pada malam hari, saya akan belajar pada pagi hari setelah bangun tidur'],
            ['id' => 'f817fc13-6a7c-4c95-894c-62179209becd', 'order' => 70, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Jika di perpustakaan sekolah tidak ada buku yang saya butuhkan, saya akan mencarinya di perpustakaan kota'],
            ['id' => '908140da-27c1-49c7-9668-68b5bae3de69', 'order' => 71, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Jika saya kurang memahami materi pelajaran dari buku, saya akan mencari materi tersebut di internet'],
            ['id' => '81fe89e2-b48d-499f-81f6-f6fc2712cdab', 'order' => 72, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Jika saya tidak faham dengan materi yang dijelaskan oleh Guru, saya meminta teman saya menerangkan kembali materi tersebut'],
            ['id' => '4b7057ad-7207-4f29-a441-0f752a502abc', 'order' => 73, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya mengumpulkan tugas tepat waktu'],
            ['id' => 'deb4bccf-be5e-4e9e-a71c-fcbc97fc9491', 'order' => 74, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Nilai saya  melampaui KKM (Kriteria Ketuntasan Minimal)'],
            ['id' => 'bf205aa3-8488-49ae-8af7-dd29474cfdd4', 'order' => 75, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Setiap kenaikan kelas, saya naik kelas'],
            ['id' => '25981b1b-cef7-468d-bdbe-3620c5fcebe9', 'order' => 76, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya  mengikuti ulangan harian'],
            ['id' => '139e65b4-14d4-4801-834a-19a1d5d7f59d', 'order' => 77, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya menaati tata tertib sekolah'],
            ['id' => 'c0a7dcdb-a88a-460f-a4b9-007c986495bc', 'order' => 78, 'category' => '8bc74ee6-68cc-449a-98a9-cf888c4254f4', 'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279', 'question' => 'Saya berhasil menyelesaikan tugas mata pelajaran yang besifat praktik '],
        ];

        /** @var \Illuminate\Database\Query\Builder $model */
        $model = new Question();
        foreach ($data as $category)
        {
            if (!$model->where('question', '=', $category['question'])->first())
            {
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

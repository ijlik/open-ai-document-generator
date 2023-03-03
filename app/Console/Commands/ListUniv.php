<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ListUniv extends Command
{

    protected $signature = 'list:univ';

    protected $description = 'Command description';

    public function handle()
    {
        $array = [
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-hangtuah-jakarta/22583',
                'name' => ' Politeknik Hangtuah Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/akademi-bahasa-asing-balikpapan/56499',
                'name' => 'Akademi Bahasa Asing Balikpapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/akademi-kebidanan-borneo-medistra-balikpapan/50524',
                'name' => 'Akademi Kebidanan Borneo Medistra Balikpapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/akademi-keperawatan-bethesda-serukam/44029',
                'name' => 'Akademi Keperawatan Bethesda Serukam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/iain-tulungagung/51410',
                'name' => 'IAIN Tulungagung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-antasari/4409',
                'name' => 'Institut Agama Islam Negeri Antasari'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-kudus/34795',
                'name' => 'Institut Agama Islam Negeri Kudus'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-lhokseumawe/21653',
                'name' => 'Institut Agama Islam Negeri Lhokseumawe'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-palangka-raya/56513',
                'name' => 'Institut Agama Islam Negeri Palangka Raya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-parepare/34603',
                'name' => 'Institut Agama Islam Negeri Parepare'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-pekalongan/54767',
                'name' => 'Institut Agama Islam Negeri Pekalongan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-pontianak/31759',
                'name' => 'Institut Agama Islam Negeri Pontianak'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-negeri-syekh-nurjati-cirebon/46731',
                'name' => 'Institut Agama Islam Negeri Syekh Nurjati Cirebon'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-agama-islam-sultan-muhammad-syafiuddin-sambas/128662',
                'name' => 'Institut Agama Islam Sultan Muhammad Syafiuddin Sambas'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-bisnis-dan-informatika-kesatuan/58659',
                'name' => 'Institut Bisnis dan Informatika Kesatuan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-bisnis-dan-informatika-kwik-kian-gie/22793',
                'name' => 'Institut Bisnis dan Informatika Kwik Kian Gie'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-bisnis-nusantara/54519',
                'name' => 'Institut Bisnis Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-digital-bisnis-indonesia/60813',
                'name' => 'Institut Digital Bisnis Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-ilmu-kesehatan-strada-indonesia/23956',
                'name' => 'Institut Ilmu Kesehatan STRADA Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-kesehatan-helvetia/48665',
                'name' => 'Institut Kesehatan Helvetia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-kesehatan-mitra-bunda/59951',
                'name' => 'Institut Kesehatan Mitra Bunda'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-manajemen-koperasi-indonesia/23702',
                'name' => 'Institut Manajemen Koperasi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-manajemen-telkom/4410',
                'name' => 'Institut Manajemen Telkom'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-pertanian-bogor/4411',
                'name' => 'Institut Pertanian Bogor'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-sains-teknologi-akprind/36885',
                'name' => 'Institut Sains &amp; Teknologi AKPRIND'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-seni-budaya-indonesia/54013',
                'name' => 'Institut Seni Budaya Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-seni-indonesia-denpasar/4412',
                'name' => 'Institut Seni Indonesia Denpasar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-seni-indonesia-surakarta/4413',
                'name' => 'Institut Seni Indonesia Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-seni-indonesia-yogyakarta/4414',
                'name' => 'Institut Seni Indonesia Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-tazkia/44562',
                'name' => 'Institut Tazkia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-bandung/4415',
                'name' => 'Institut Teknologi Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-budi-utomo/54039',
                'name' => 'Institut Teknologi Budi Utomo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-dan-bisnis-ahmad-dahlan/58178',
                'name' => 'Institut Teknologi dan Bisnis Ahmad Dahlan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-dan-bisnis-indonesia/41358',
                'name' => 'Institut Teknologi dan Bisnis Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-dan-sains-nahdlatul-ulama/58240',
                'name' => 'Institut Teknologi dan Sains Nahdlatul Ulama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-del/29244',
                'name' => 'Institut Teknologi Del'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-harapan-bangsa/28744',
                'name' => 'Institut Teknologi Harapan Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-kalimantan/23665',
                'name' => 'Institut Teknologi Kalimantan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-kesehatan-dan-sains-wiyata-husada-samarinda/60027',
                'name' => 'Institut Teknologi Kesehatan dan Sains Wiyata Husada Samarinda'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-nasional/4416',
                'name' => 'Institut Teknologi Nasional'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-nasional-malang/4417',
                'name' => 'Institut Teknologi Nasional Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-padang/54233',
                'name' => 'Institut Teknologi Padang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-pln/21899',
                'name' => 'Institut Teknologi PLN'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-sains-bandung/142332',
                'name' => 'Institut Teknologi Sains Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-sepuluh-nopember/4418',
                'name' => 'Institut Teknologi Sepuluh Nopember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-sumatera/23181',
                'name' => 'Institut Teknologi Sumatera '
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-tangerang-selatan/58483',
                'name' => 'Institut Teknologi Tangerang Selatan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-telkom-surabaya/38274',
                'name' => 'Institut Teknologi Telkom Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-teknologi-telkom-telkom-purwokerto/36508',
                'name' => 'Institut Teknologi Telkom Telkom Purwokerto'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institut-transportasi-dan-logistik-trisakti/31607',
                'name' => 'Institut Transportasi dan Logistik Trisakti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/institute-for-business-multimedia-asmi/29528',
                'name' => 'Institute for Business &amp; Multimedia ASMI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/international-university-liaison-indonesia/42648',
                'name' => 'International University Liaison Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/ipmi-international-business-school/22073',
                'name' => 'IPMI International Business School'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/jakarta-global-university/54580',
                'name' => 'Jakarta Global University'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/jakarta-international-college/44568',
                'name' => 'Jakarta International College'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/kalbis-institute/31606',
                'name' => 'Kalbis Institute'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/kalla-institute-of-technology-and-business/61772',
                'name' => 'Kalla Institute of Technology and Business'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/lembaga-pendidikan-dan-pengembangan-profesi-indonesia/33070',
                'name' => 'Lembaga Pendidikan dan Pengembangan Profesi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/matana-university/33775',
                'name' => 'Matana University'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/perbanas-institute/15354',
                'name' => 'Perbanas Institute'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-aka-bogor/130319',
                'name' => 'Politeknik AKA Bogor'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-elektronika-negeri-surabaya/16628',
                'name' => 'Politeknik Elektronika Negeri Surabaya '
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-energi-dan-mineral-akamigas/20698',
                'name' => 'Politeknik Energi dan Mineral Akamigas'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-harapan-bersama/22416',
                'name' => 'Politeknik Harapan Bersama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-hasnur/42490',
                'name' => 'Politeknik Hasnur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-industri-atmi-cikarang/30010',
                'name' => 'Politeknik Industri ATMI Cikarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-banjarmasin/28803',
                'name' => 'Politeknik Kesehatan Banjarmasin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-aceh/43176',
                'name' => 'Politeknik Kesehatan Kemenkes Aceh'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-bandung/29959',
                'name' => 'Politeknik Kesehatan kemenkes Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-jakarta-iii/22758',
                'name' => 'Politeknik Kesehatan Kemenkes Jakarta III'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-malang/27703',
                'name' => 'Politeknik Kesehatan Kemenkes Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-medan/47774',
                'name' => 'Politeknik Kesehatan Kemenkes Medan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-semarang/31375',
                'name' => 'Politeknik Kesehatan Kemenkes Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-surakarta/17040',
                'name' => 'Politeknik Kesehatan Kemenkes Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kemenkes-tasikmalaya/61754',
                'name' => 'Politeknik Kesehatan Kemenkes Tasikmalaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kementerian-kesehatan-denpasar/35161',
                'name' => 'Politeknik Kesehatan Kementerian Kesehatan Denpasar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kementerian-kesehatan-jakarta-ii/20550',
                'name' => 'Politeknik Kesehatan Kementerian Kesehatan Jakarta II'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kementerian-kesehatan-jambi/28019',
                'name' => 'Politeknik Kesehatan Kementerian Kesehatan Jambi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kementerian-kesehatan-padang/29150',
                'name' => 'Politeknik Kesehatan Kementerian Kesehatan Padang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-kesehatan-kementerian-kesehatan-surabaya/39824',
                'name' => 'Politeknik Kesehatan Kementerian Kesehatan Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-keuangan-negara-stan/23040',
                'name' => 'Politeknik Keuangan Negara STAN'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-manufaktur-bandung/35690',
                'name' => 'Politeknik Manufaktur Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-mitra-karya-mandiri/51591',
                'name' => 'Politeknik Mitra Karya Mandiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-bali/24218',
                'name' => 'Politeknik Negeri Bali'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-balikpapan/54479',
                'name' => 'Politeknik Negeri Balikpapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-bandung/25145',
                'name' => 'Politeknik Negeri Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-banjarmasin/64074',
                'name' => 'Politeknik Negeri Banjarmasin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-banyuwangi/64418',
                'name' => 'Politeknik Negeri Banyuwangi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-batam/15554',
                'name' => 'Politeknik Negeri Batam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-cilacap/49539',
                'name' => 'Politeknik Negeri Cilacap'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-indramayu/56610',
                'name' => 'Politeknik Negeri Indramayu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-jakarta/32973',
                'name' => 'Politeknik Negeri Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-jember/35087',
                'name' => 'Politeknik Negeri Jember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-madiun/54421',
                'name' => 'Politeknik Negeri Madiun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-malang/31018',
                'name' => 'Politeknik Negeri Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-manado/58357',
                'name' => 'Politeknik Negeri Manado'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-medan/34559',
                'name' => 'Politeknik Negeri Medan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-media-kreatif/56157',
                'name' => 'Politeknik Negeri Media Kreatif'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-nusa-utara/127054',
                'name' => 'Politeknik Negeri Nusa Utara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-padang/50496',
                'name' => 'Politeknik Negeri Padang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-pontianak/27478',
                'name' => 'Politeknik Negeri Pontianak'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-semarang/54535',
                'name' => 'Politeknik Negeri Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-sriwijaya/19625',
                'name' => 'Politeknik Negeri Sriwijaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-negeri-ujung-pandang/24706',
                'name' => 'Politeknik Negeri Ujung Pandang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-pariwisata-medan/37775',
                'name' => 'Politeknik Pariwisata Medan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-perkapalan-negeri-surabaya/58173',
                'name' => 'Politeknik Perkapalan Negeri Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-pos-indonesia/27972',
                'name' => 'Politeknik Pos Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-statistika-stis/29890',
                'name' => 'Politeknik Statistika STIS '
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-stia-lan/60364',
                'name' => 'Politeknik STIA LAN'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/politeknik-transportasi-darat-indonesia/44682',
                'name' => 'Politeknik Transportasi Darat Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/poltekkes-kemenkes-aceh/23342',
                'name' => 'Poltekkes Kemenkes Aceh'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/poltekkes-kemenkes-palu/19876',
                'name' => 'Poltekkes Kemenkes Palu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/pondok-madinah-makassar/132976',
                'name' => 'Pondok Madinah Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/ppm-school-of-management/27777',
                'name' => 'PPM School of Management'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-menengah-atas-hang-tuah-2/44998',
                'name' => 'Sekolah Menengah Atas Hang Tuah 2'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-desain-interstudi/58872',
                'name' => 'Sekolah Tinggi Desain Interstudi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ekonomi-islam-sebi/45102',
                'name' => 'Sekolah Tinggi Ekonomi Islam SEBI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-farmasi-indonesia/54164',
                'name' => 'Sekolah Tinggi Farmasi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-administrasi-adabiah/55905',
                'name' => 'Sekolah Tinggi Ilmu Administrasi Adabiah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-66-kendari/60615',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi 66 Kendari'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-bank-bpd-jateng/50659',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Bank BPD Jateng'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-dr-khez-muttaqien/40066',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Dr. Khez Muttaqien'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-ganesha/54353',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Ganesha'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-gici-business-school/20001',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi GICI Business School'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-indonesia/31539',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-indonesia-banking-school/19785',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Indonesia Banking School'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-indonesia-membangun/42733',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Indonesia Membangun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-muhammadiyah-jakarta/99145',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Muhammadiyah Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-semarang/58981',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-stembi/43921',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi STEMBI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-tribuana/50880',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Tribuana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-widya-gama-lumajang/50504',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Widya Gama Lumajang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-ekonomi-yayasan-keluarga-pahlawan-negara/24067',
                'name' => 'Sekolah Tinggi Ilmu Ekonomi Yayasan Keluarga Pahlawan Negara '
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-kesehatan-banyuwangi/29645',
                'name' => 'Sekolah Tinggi Ilmu Kesehatan Banyuwangi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-kesehatan-mitra-keluarga/35631',
                'name' => 'Sekolah Tinggi Ilmu Kesehatan Mitra Keluarga'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-komunikasi-bandung/23149',
                'name' => 'Sekolah Tinggi Ilmu Komunikasi Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-komunikasi-profesi-indonesia/37350',
                'name' => 'Sekolah Tinggi Ilmu Komunikasi Profesi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-pelayaran/44828',
                'name' => 'Sekolah Tinggi Ilmu Pelayaran'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-ilmu-sosial-dan-ilmu-politik-pahlawan-12/51693',
                'name' => 'Sekolah Tinggi Ilmu Sosial dan Ilmu Politik Pahlawan 12'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-manajemen-informatika-dan-komputer-insan-pembangunan/42442',
                'name' => 'Sekolah Tinggi Manajemen Informatika Dan Komputer Insan Pembangunan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-manajemen-informatika-dan-komputer-mikroskil/23858',
                'name' => 'Sekolah Tinggi Manajemen Informatika dan Komputer Mikroskil'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-pariwisata-bandung/52196',
                'name' => 'Sekolah Tinggi Pariwisata Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-pariwisata-trisakti/26004',
                'name' => 'Sekolah Tinggi Pariwisata Trisakti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-teknologi-adisutjipto/37100',
                'name' => 'Sekolah Tinggi Teknologi Adisutjipto'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-teknologi-bandung/55250',
                'name' => 'Sekolah Tinggi Teknologi Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sekolah-tinggi-teknologi-garut/34957',
                'name' => 'Sekolah Tinggi Teknologi Garut'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/sma-negeri-1-petarukan/133315',
                'name' => 'SMA Negeri 1 Petarukan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/smk-negeri-1-batam/51146',
                'name' => 'SMK Negeri 1 Batam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/ssekolah-menengah-atas-negeri-10-fajar-harapan/46552',
                'name' => 'Ssekolah Menengah Atas Negeri 10 Fajar Harapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/stie-riau-akbar/51062',
                'name' => 'STIE Riau - AKBAR'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/stikes-notokusumo-yogyakarta/54092',
                'name' => 'Stikes Notokusumo Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/trisakti-school-of-management/16254',
                'name' => 'Trisakti School of Management'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/uin-alauddin-makassar/4420',
                'name' => 'UIN Alauddin Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/uin-sunan-ampel-surabaya/4421',
                'name' => 'UIN Sunan Ampel - Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-aisyiyah-yogyakarta/26403',
                'name' => 'Universitas \'Aisyiyah Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-17-agustus-1945-banyuwangi/4423',
                'name' => 'Universitas 17 Agustus 1945 Banyuwangi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-17-agustus-1945-jakarta/4422',
                'name' => 'Universitas 17 Agustus 1945 Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-17-agustus-1945-samarinda/4424',
                'name' => 'Universitas 17 Agustus 1945 Samarinda'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-17-agustus-1945-surabaya/4426',
                'name' => 'Universitas 17 Agustus 1945 Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-19-november-kolaka/4427',
                'name' => 'Universitas 19 November Kolaka'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-45-makassar/4428',
                'name' => 'Universitas 45 Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-45-mataram/4429',
                'name' => 'Universitas 45 Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-45-surabaya/4430',
                'name' => 'Universitas 45 Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-abdurrab/4432',
                'name' => 'Universitas Abdurrab'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-abulyatama/4433',
                'name' => 'Universitas Abulyatama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-adhirajasa-reswara-sanjaya/55695',
                'name' => 'Universitas Adhirajasa Reswara Sanjaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-advent-indonesia/4435',
                'name' => 'Universitas Advent Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-agung-podomoro/68057',
                'name' => 'Universitas Agung Podomoro'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ahmad-dahlan/4436',
                'name' => 'Universitas Ahmad Dahlan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-airlangga/4437',
                'name' => 'Universitas Airlangga'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-aki/4438',
                'name' => 'Universitas AKI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-al-azhar-indonesia/4441',
                'name' => 'Universitas Al Azhar Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-al-ghifari/4443',
                'name' => 'Universitas Al-Ghifari'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-al-washliyah-labuhan-batu/4446',
                'name' => 'Universitas Al-washliyah Labuhan Batu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-alkhairaat/4444',
                'name' => 'Universitas Alkhairaat'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-alma-ata-yogyakarta/53157',
                'name' => 'Universitas Alma Ata Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-almuslim/4442',
                'name' => 'Universitas Almuslim'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-alwashliyah/4445',
                'name' => 'Universitas Alwashliyah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-amikom-purwokerto/54190',
                'name' => 'Universitas Amikom Purwokerto'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-amikom-yogyakarta/33480',
                'name' => 'Universitas AMIKOM Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-amir-hamzah/4447',
                'name' => 'Universitas Amir Hamzah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-andalas/4448',
                'name' => 'Universitas Andalas'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-andi-djemma-palopo/4449',
                'name' => 'Universitas Andi Djemma Palopo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-antakusuma/4450',
                'name' => 'Universitas Antakusuma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ars-internasional/4451',
                'name' => 'Universitas Ars Internasional'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-atma-jaya-makassar/4453',
                'name' => 'Universitas Atma Jaya Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-atma-jaya-yogyakarta/4454',
                'name' => 'Universitas Atma Jaya Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-azzahra/4455',
                'name' => 'Universitas Azzahra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-baiturrahmah/4456',
                'name' => 'Universitas Baiturrahmah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bakrie/19923',
                'name' => 'Universitas Bakrie'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bale-bandung/4457',
                'name' => 'Universitas Bale Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-balikpapan/4458',
                'name' => 'Universitas Balikpapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bandar-lampung/4459',
                'name' => 'Universitas Bandar Lampung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bandung-raya/4460',
                'name' => 'Universitas Bandung Raya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bangka-belitung/4461',
                'name' => 'Universitas Bangka Belitung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-banten-jaya/54582',
                'name' => 'Universitas Banten Jaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-batam/4462',
                'name' => 'Universitas Batam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-batanghari/4463',
                'name' => 'Universitas Batanghari'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bengkulu/4465',
                'name' => 'Universitas Bengkulu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bhakti-kencana/61037',
                'name' => 'Universitas Bhakti Kencana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bhayangkara-jakarta-raya/4466',
                'name' => 'Universitas Bhayangkara Jakarta Raya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bhayangkara-surabaya/4467',
                'name' => 'Universitas Bhayangkara Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bina-bangsa/38557',
                'name' => 'Universitas Bina Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bina-darma/4468',
                'name' => 'Universitas Bina Darma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bina-nusantara/4469',
                'name' => 'Universitas Bina Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bina-sarana-informatika/23410',
                'name' => 'Universitas Bina Sarana Informatika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-binawan/42751',
                'name' => 'Universitas Binawan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bojonegoro/4470',
                'name' => 'Universitas Bojonegoro'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-borneo-tarakan/4472',
                'name' => 'Universitas Borneo Tarakan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-borobudur/4473',
                'name' => 'Universitas Borobudur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bosowa/54325',
                'name' => 'Universitas Bosowa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-boyolali/4474',
                'name' => 'Universitas Boyolali'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-brawijaya/4475',
                'name' => 'Universitas Brawijaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-buddhi-dharma/24942',
                'name' => 'Universitas Buddhi Dharma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-budi-luhur/4476',
                'name' => 'Universitas Budi Luhur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bunda-mulia/4477',
                'name' => 'Universitas Bunda Mulia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bung-hatta/4478',
                'name' => 'Universitas Bung Hatta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-bung-karno/4479',
                'name' => 'Universitas Bung Karno'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-cakrawala/4480',
                'name' => 'Universitas Cakrawala'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-cenderawasih/4481',
                'name' => 'Universitas Cenderawasih'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ciputra/4482',
                'name' => 'Universitas Ciputra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-cokroaminoto-palopo/4484',
                'name' => 'Universitas Cokroaminoto Palopo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-cut-nyak-dhien/4486',
                'name' => 'Universitas Cut Nyak Dhien'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-darma-persada/4488',
                'name' => 'Universitas Darma Persada'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-darul-ulum/4489',
                'name' => 'Universitas Darul \'ulum'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-darussalam-ambon/4490',
                'name' => 'Universitas Darussalam Ambon'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-darwan-ali/4491',
                'name' => 'Universitas Darwan Ali'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dehasen-bengkulu/4493',
                'name' => 'Universitas Dehasen Bengkulu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dharma-andalas/22403',
                'name' => 'Universitas Dharma Andalas'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dharmawangsa/4494',
                'name' => 'Universitas Dharmawangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dian-nusantara/4495',
                'name' => 'Universitas Dian Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dian-nuswantoro/4496',
                'name' => 'Universitas Dian Nuswantoro'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dinamika/22764',
                'name' => 'Universitas Dinamika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-diponegoro/4497',
                'name' => 'Universitas Diponegoro'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-djuanda/4498',
                'name' => 'Universitas Djuanda'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dr-soetomo/4499',
                'name' => 'Universitas Dr. Soetomo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dumoga-bone-kotamubagu/4500',
                'name' => 'Universitas Dumoga Bone Kotamubagu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-duta-bangsa/51401',
                'name' => 'Universitas Duta Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-dwijendra/4501',
                'name' => 'Universitas Dwijendra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ekasakti/4502',
                'name' => 'Universitas Ekasakti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-esa-unggul/4503',
                'name' => 'Universitas Esa Unggul'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-fajar/4504',
                'name' => 'Universitas Fajar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gadjah-mada/4505',
                'name' => 'Universitas Gadjah Mada'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gajah-putih/4506',
                'name' => 'Universitas Gajah Putih'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gajayana/4507',
                'name' => 'Universitas Gajayana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-galuh-ciamis/4508',
                'name' => 'Universitas Galuh Ciamis'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-garut/4509',
                'name' => 'Universitas Garut'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gresik/4512',
                'name' => 'Universitas Gresik'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gunadarma/4513',
                'name' => 'Universitas Gunadarma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gunung-kidul/4514',
                'name' => 'Universitas Gunung Kidul'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-gunung-rinjani/4515',
                'name' => 'Universitas Gunung Rinjani'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-halu-oleo/37378',
                'name' => 'Universitas Halu Oleo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-haluoleo/4517',
                'name' => 'Universitas Haluoleo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-hang-tuah/4518',
                'name' => 'Universitas Hang Tuah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-harapan-bangsa/38278',
                'name' => 'Universitas Harapan Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-hasanuddin/4519',
                'name' => 'Universitas Hasanuddin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-hayam-wuruk-perbanas/54984',
                'name' => 'Universitas Hayam Wuruk Perbanas'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-hindu-indonesia/4520',
                'name' => 'Universitas Hindu Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-hkbp-nommensen/4521',
                'name' => 'Universitas HKBP Nommensen'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-iba/4522',
                'name' => 'Universitas IBA'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ibn-khaldun/4523',
                'name' => 'Universitas Ibn Khaldun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ibnu-chaldun/4524',
                'name' => 'Universitas Ibnu Chaldun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-indo-global-mandiri/4526',
                'name' => 'Universitas Indo Global Mandiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-indonesia/4527',
                'name' => 'Universitas Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-indonesia-timur/4528',
                'name' => 'Universitas Indonesia Timur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-indraprasta-pgri/4529',
                'name' => 'Universitas Indraprasta PGRI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-informatika-dan-bisnis-indonesia/4530',
                'name' => 'Universitas Informatika Dan Bisnis Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-internasional-batam/4531',
                'name' => 'Universitas Internasional Batam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-internasional-semen-indonesia/38793',
                'name' => 'Universitas Internasional Semen Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-iqra-buru/4532',
                'name' => 'Universitas Iqra Buru'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-45/4534',
                'name' => 'Universitas Islam 45'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-45-bekasi/58007',
                'name' => 'Universitas Islam 45 Bekasi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-al-azhar-mataram/4535',
                'name' => 'Universitas Islam Al-azhar Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-as-syafiiyah/4536',
                'name' => 'Universitas Islam As-Syafi\'iyah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-bandung/4538',
                'name' => 'Universitas Islam Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-batik/4539',
                'name' => 'Universitas Islam Batik'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-darul-ulum/4541',
                'name' => 'Universitas Islam Darul Ulum'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-indonesia/4542',
                'name' => 'Universitas Islam Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-indragiri/4543',
                'name' => 'Universitas Islam Indragiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-jakarta/4544',
                'name' => 'Universitas Islam Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-jember/4545',
                'name' => 'Universitas Islam Jember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-kadiri/4546',
                'name' => 'Universitas Islam Kadiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-kalimantan-muhammad-arsyad-al-banjari-banjarmasin/4547',
                'name' => 'Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-lamongan/4549',
                'name' => 'Universitas Islam Lamongan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-madura/4550',
                'name' => 'Universitas Islam Madura'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-majapahit/4551',
                'name' => 'Universitas Islam Majapahit'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-makassar/4552',
                'name' => 'Universitas Islam Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-malang/4553',
                'name' => 'Universitas Islam Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-antasari-banjarmasin/54313',
                'name' => 'Universitas Islam Negeri Antasari Banjarmasin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-ar-raniry/53274',
                'name' => 'Universitas Islam Negeri Ar-Raniry'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-imam-bonjol/36841',
                'name' => 'Universitas Islam Negeri Imam Bonjol'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-kiai-haji-achmad-siddiq-jember/119090',
                'name' => 'Universitas Islam Negeri Kiai Haji Achmad Siddiq Jember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-maulana-malik-ibrahim/29051',
                'name' => 'Universitas Islam Negeri Maulana Malik Ibrahim'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-raden-fatah/31531',
                'name' => 'Universitas Islam Negeri Raden Fatah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-raden-intan-lampung/103303',
                'name' => 'Universitas Islam Negeri Raden Intan Lampung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-raden-mas-sahid/48729',
                'name' => 'Universitas Islam Negeri Raden Mas Sahid'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sayyid-ali-rahmatullah/46595',
                'name' => 'Universitas Islam Negeri Sayyid Ali Rahmatullah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sultan-maulana-hasanuddin-banten/53559',
                'name' => 'Universitas Islam Negeri Sultan Maulana Hasanuddin Banten'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sultan-syarif-kasim/22252',
                'name' => 'Universitas Islam Negeri Sultan Syarif Kasim'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sumatera-utara/46588',
                'name' => 'Universitas Islam Negeri Sumatera Utara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sunan-ampel-surabaya/54234',
                'name' => 'Universitas Islam Negeri Sunan Ampel Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sunan-gunung-djati/4554',
                'name' => 'Universitas Islam Negeri Sunan Gunung Djati'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-sunan-kalijaga-yogyakarta/4555',
                'name' => 'Universitas Islam Negeri Sunan Kalijaga Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-syarif-hidayatullah-jakarta/4556',
                'name' => 'Universitas Islam Negeri Syarif Hidayatullah Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-negeri-walisongo-semarang/21357',
                'name' => 'Universitas Islam Negeri Walisongo Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-nusantara/4557',
                'name' => 'Universitas Islam Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-ogan-komering-ilir-kayuagung/4558',
                'name' => 'Universitas Islam Ogan Komering Ilir Kayuagung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-riau/4559',
                'name' => 'Universitas Islam Riau'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-sultan-agung/4560',
                'name' => 'Universitas Islam Sultan Agung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-sumatera-utara/4561',
                'name' => 'Universitas Islam Sumatera Utara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-islam-syekh-yusuf/4562',
                'name' => 'Universitas Islam Syekh-Yusuf'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jakarta/4564',
                'name' => 'Universitas Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jambi/4565',
                'name' => 'Universitas Jambi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jayabaya/4567',
                'name' => 'Universitas Jayabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jember/4568',
                'name' => 'Universitas Jember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jenderal-achmad-yani/4434',
                'name' => 'Universitas Jenderal Achmad Yani'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-jenderal-soedirman/4570',
                'name' => 'Universitas Jenderal Soedirman'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kadiri/4572',
                'name' => 'Universitas Kadiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kaltara/4573',
                'name' => 'Universitas Kaltara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-karo/4577',
                'name' => 'Universitas Karo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-darma-cendika/4579',
                'name' => 'Universitas Katolik Darma Cendika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-de-la-salle/4580',
                'name' => 'Universitas Katolik De La Salle'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-indonesia-atma-jaya/4581',
                'name' => 'Universitas Katolik Indonesia Atma Jaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-parahyangan/4582',
                'name' => 'Universitas Katolik Parahyangan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-soegijapranata/4584',
                'name' => 'Universitas Katolik Soegijapranata'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-widya-mandala-madiun/4586',
                'name' => 'Universitas Katolik Widya Mandala Madiun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-widya-mandala-surabaya/4587',
                'name' => 'Universitas Katolik Widya Mandala Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-katolik-widya-mandira/4588',
                'name' => 'Universitas Katolik Widya Mandira'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-klabat/4592',
                'name' => 'Universitas Klabat'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-komputer-indonesia/4593',
                'name' => 'Universitas Komputer Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-krisnadwipayana/4594',
                'name' => 'Universitas Krisnadwipayana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-cipta-wacana/4596',
                'name' => 'Universitas Kristen Cipta Wacana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-duta-wacana/4597',
                'name' => 'Universitas Kristen Duta Wacana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-indonesia/4599',
                'name' => 'Universitas Kristen Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-indonesia-maluku/4600',
                'name' => 'Universitas Kristen Indonesia Maluku'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-indonesia-toraja/4603',
                'name' => 'Universitas Kristen Indonesia Toraja'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-krida-wacana/4604',
                'name' => 'Universitas Kristen Krida Wacana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-maranatha/4605',
                'name' => 'Universitas Kristen Maranatha'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-petra/4608',
                'name' => 'Universitas Kristen Petra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kristen-satya-wacana/4609',
                'name' => 'Universitas Kristen Satya Wacana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kuningan/4612',
                'name' => 'Universitas Kuningan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-kutai-kartanegara/4613',
                'name' => 'Universitas Kutai Kartanegara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-lakidende-unahaa/4614',
                'name' => 'Universitas Lakidende Unahaa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-lambung-mangkurat/4615',
                'name' => 'Universitas Lambung Mangkurat'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-lampung/4616',
                'name' => 'Universitas Lampung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-lancang-kuning/4617',
                'name' => 'Universitas Lancang Kuning'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-langlangbuana/4618',
                'name' => 'Universitas Langlangbuana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-lumajang/4619',
                'name' => 'Universitas Lumajang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ma-chung/4620',
                'name' => 'Universitas Ma Chung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-madako-toli-toli/4621',
                'name' => 'Universitas Madako Toli-toli'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-madura/4622',
                'name' => 'Universitas Madura'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mahaputra-muhammad-yamin/4623',
                'name' => 'Universitas Mahaputra Muhammad Yamin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mahasaraswati-denpasar/4624',
                'name' => 'Universitas Mahasaraswati Denpasar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mahasaraswati-mataram/4625',
                'name' => 'Universitas Mahasaraswati Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mahendradatta/4626',
                'name' => 'Universitas Mahendradatta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-majalengka/4627',
                'name' => 'Universitas Majalengka'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-malahayati/4628',
                'name' => 'Universitas Malahayati'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-malikussaleh/4629',
                'name' => 'Universitas Malikussaleh'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-maritim-raja-ali-haji/4630',
                'name' => 'Universitas Maritim Raja Ali Haji'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mataram/4631',
                'name' => 'Universitas Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mathlaul-anwar/4632',
                'name' => 'Universitas Mathla\'ul Anwar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-medan-area/4634',
                'name' => 'Universitas Medan Area'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-megou-pak-tulang-bawang/4635',
                'name' => 'Universitas Megou Pak Tulang Bawang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mercu-buana-jakarta/4636',
                'name' => 'Universitas Mercu Buana Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-merdeka-madiun/4638',
                'name' => 'Universitas Merdeka Madiun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-merdeka-malang/4639',
                'name' => 'Universitas Merdeka Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-merdeka-ponorogo/4641',
                'name' => 'Universitas Merdeka Ponorogo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-methodist-indonesia/4643',
                'name' => 'Universitas Methodist Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mhthamrin/59822',
                'name' => 'Universitas MH.Thamrin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mpu-tantular/4645',
                'name' => 'Universitas Mpu Tantular'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhadi-setiabudi/55566',
                'name' => 'Universitas Muhadi Setiabudi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-aceh/4647',
                'name' => 'Universitas Muhammadiyah Aceh'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-bandung/23027',
                'name' => 'Universitas Muhammadiyah Bandung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-banjarmasin/25318',
                'name' => 'Universitas Muhammadiyah Banjarmasin'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-cirebon/4650',
                'name' => 'Universitas Muhammadiyah Cirebon'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-gombong/60011',
                'name' => 'Universitas Muhammadiyah Gombong'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-gorontalo/4651',
                'name' => 'Universitas Muhammadiyah Gorontalo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-gresik/4652',
                'name' => 'Universitas Muhammadiyah Gresik'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-jakarta/4653',
                'name' => 'Universitas Muhammadiyah Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-jambi/60275',
                'name' => 'Universitas Muhammadiyah Jambi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-jember/4654',
                'name' => 'Universitas Muhammadiyah Jember'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-kalimantan-timur/22741',
                'name' => 'Universitas Muhammadiyah Kalimantan Timur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-kendari/4655',
                'name' => 'Universitas Muhammadiyah Kendari'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-kupang/4656',
                'name' => 'Universitas Muhammadiyah Kupang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-lampung/4657',
                'name' => 'Universitas Muhammadiyah Lampung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-makassar/4660',
                'name' => 'Universitas Muhammadiyah Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-malang/4661',
                'name' => 'Universitas Muhammadiyah Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-mataram/4663',
                'name' => 'Universitas Muhammadiyah Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-metro/4664',
                'name' => 'Universitas Muhammadiyah Metro'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-palembang/4666',
                'name' => 'Universitas Muhammadiyah Palembang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-palu/4667',
                'name' => 'Universitas Muhammadiyah Palu'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-parepare/4668',
                'name' => 'Universitas Muhammadiyah Parepare'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-pekalongan-pekajangan/47671',
                'name' => 'Universitas Muhammadiyah Pekalongan Pekajangan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-ponorogo/4669',
                'name' => 'Universitas Muhammadiyah Ponorogo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-pontianak/4670',
                'name' => 'Universitas Muhammadiyah Pontianak'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-prof-dr-hamka/4671',
                'name' => 'Universitas Muhammadiyah Prof. Dr. Hamka'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-purwokerto/4672',
                'name' => 'Universitas Muhammadiyah Purwokerto'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-purworejo/4673',
                'name' => 'Universitas Muhammadiyah Purworejo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-riau/4674',
                'name' => 'Universitas Muhammadiyah Riau'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-semarang/4675',
                'name' => 'Universitas Muhammadiyah Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-sidenreng-rappang/51876',
                'name' => 'Universitas Muhammadiyah Sidenreng Rappang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-sidoarjo/4676',
                'name' => 'Universitas Muhammadiyah Sidoarjo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-sorong/45217',
                'name' => 'Universitas Muhammadiyah Sorong'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-sumatera-utara/4679',
                'name' => 'Universitas Muhammadiyah Sumatera Utara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-surabaya/4680',
                'name' => 'Universitas Muhammadiyah Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-surakarta/4681',
                'name' => 'Universitas Muhammadiyah Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-tangerang/54597',
                'name' => 'Universitas Muhammadiyah Tangerang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muhammadiyah-yogyakarta/4683',
                'name' => 'Universitas Muhammadiyah Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mulawarman/4684',
                'name' => 'Universitas Mulawarman'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-mulia/55510',
                'name' => 'Universitas Mulia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-multimedia-nusantara/4685',
                'name' => 'Universitas Multimedia Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muria-kudus/4686',
                'name' => 'Universitas Muria Kudus'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muslim-indonesia/4688',
                'name' => 'Universitas Muslim Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-muslim-nusantara-al-wasliyah/4689',
                'name' => 'Universitas Muslim Nusantara Al-wasliyah'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nahdlatul-ulama/4690',
                'name' => 'Universitas Nahdlatul Ulama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nahdlatul-wathan/4691',
                'name' => 'Universitas Nahdlatul Wathan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-narotama/4692',
                'name' => 'Universitas Narotama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nasional/4693',
                'name' => 'Universitas Nasional'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nasional-pasim/4694',
                'name' => 'Universitas Nasional Pasim'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-gorontalo/4695',
                'name' => 'Universitas Negeri Gorontalo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-jakarta/4696',
                'name' => 'Universitas Negeri Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-makassar/4697',
                'name' => 'Universitas Negeri Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-malang/4698',
                'name' => 'Universitas Negeri Malang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-manado/4699',
                'name' => 'Universitas Negeri Manado'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-medan/4700',
                'name' => 'Universitas Negeri Medan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-padang/4701',
                'name' => 'Universitas Negeri Padang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-semarang/4703',
                'name' => 'Universitas Negeri Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-surabaya/4704',
                'name' => 'Universitas Negeri Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-negeri-yogyakarta/4705',
                'name' => 'Universitas Negeri Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ngudi-waluyo/54289',
                'name' => 'Universitas Ngudi Waluyo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nuku/4707',
                'name' => 'Universitas Nuku'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nurtanio/4708',
                'name' => 'Universitas Nurtanio'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-bangsa/4709',
                'name' => 'Universitas Nusa Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-cendana/4710',
                'name' => 'Universitas Nusa Cendana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-lontar-rote/4711',
                'name' => 'Universitas Nusa Lontar Rote'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-mandiri/60558',
                'name' => 'Universitas Nusa Mandiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-nipa/4712',
                'name' => 'Universitas Nusa Nipa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-putra/24238',
                'name' => 'Universitas Nusa Putra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusa-tenggara-barat/4713',
                'name' => 'Universitas Nusa Tenggara Barat'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-nusantara-pgri-kediri/4715',
                'name' => 'Universitas Nusantara PGRI Kediri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-padjadjaran/4716',
                'name' => 'Universitas Padjadjaran'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-palangka-raya/4718',
                'name' => 'Universitas Palangka Raya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-palembang/4719',
                'name' => 'Universitas Palembang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pamulang/4720',
                'name' => 'Universitas Pamulang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-panca-bhakti/4721',
                'name' => 'Universitas Panca Bhakti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pancasakti-makassar/4724',
                'name' => 'Universitas Pancasakti Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pancasila/4725',
                'name' => 'Universitas Pancasila'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-panji-sakti-singaraja/4727',
                'name' => 'Universitas Panji Sakti Singaraja'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-papua/4702',
                'name' => 'Universitas Papua'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-paramadina/4728',
                'name' => 'Universitas Paramadina'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pasundan/4729',
                'name' => 'Universitas Pasundan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pattimura/4730',
                'name' => 'Universitas Pattimura'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pawyatan-daha/4731',
                'name' => 'Universitas Pawyatan Daha'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pekalongan/4732',
                'name' => 'Universitas Pekalongan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pelita-bangsa/64531',
                'name' => 'Universitas Pelita Bangsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pelita-harapan/4733',
                'name' => 'Universitas Pelita Harapan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pelita-harapan-surabaya/4734',
                'name' => 'Universitas Pelita Harapan Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-indonesia/4735',
                'name' => 'Universitas Pembangunan Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-jaya/22842',
                'name' => 'Universitas Pembangunan Jaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-nasional-veteran-jawa-timur/4737',
                'name' => 'Universitas Pembangunan Nasional "Veteran" Jawa Timur'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-nasional-veteran-yogyakarta/4738',
                'name' => 'Universitas Pembangunan Nasional "Veteran" Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-nasional-veteran-jakarta/4736',
                'name' => 'Universitas Pembangunan Nasional Veteran Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembangunan-panca-budi/4739',
                'name' => 'Universitas Pembangunan Panca Budi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pembinaan-masyarakat-indonesia/4740',
                'name' => 'Universitas Pembinaan Masyarakat Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pendidikan-ganesha/4741',
                'name' => 'Universitas Pendidikan Ganesha'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pendidikan-indonesia/4742',
                'name' => 'Universitas Pendidikan Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pendidikan-nasional/4743',
                'name' => 'Universitas Pendidikan Nasional'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pendidikan-putra-indonesia/4744',
                'name' => 'Universitas Pendidikan Putra Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pepabri-makassar/4745',
                'name' => 'Universitas Pepabri Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-persada-indonesia-yai/4746',
                'name' => 'Universitas Persada Indonesia Y.A.I.'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pertahanan-indonesia/30213',
                'name' => 'Universitas Pertahanan Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pertamina/17069',
                'name' => 'Universitas Pertamina'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-perwira-purbalingga/56501',
                'name' => 'Universitas Perwira Purbalingga'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pesantren-tinggi-darul-ulum/4747',
                'name' => 'Universitas Pesantren Tinggi Darul \'ulum'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-adi-buana/4748',
                'name' => 'Universitas PGRI Adi Buana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-kupang/4750',
                'name' => 'Universitas PGRI Kupang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-madiun/57494',
                'name' => 'Universitas PGRI Madiun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-palembang/4752',
                'name' => 'Universitas PGRI Palembang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-semarang/30546',
                'name' => 'Universitas PGRI Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pgri-yogyakarta/4754',
                'name' => 'Universitas PGRI Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-pramita-indonesia/4755',
                'name' => 'Universitas Pramita Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-prasetiya-mulya/14989',
                'name' => 'Universitas Prasetiya Mulya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-presiden/4756',
                'name' => 'Universitas Presiden'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-preston-indonesia/4757',
                'name' => 'Universitas Preston Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-prima-indonesia/4758',
                'name' => 'Universitas Prima Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-prof-dr-hazairin-sh/4759',
                'name' => 'Universitas Prof Dr Hazairin SH'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-prof-dr-moestopo/4760',
                'name' => 'Universitas Prof Dr Moestopo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-putera-batam/4763',
                'name' => 'Universitas Putera Batam'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-putra-indonesia-yptk-padang/4764',
                'name' => 'Universitas Putra Indonesia Yptk Padang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-ratu-samban/4765',
                'name' => 'Universitas Ratu Samban'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-respati-yogyakarta/4767',
                'name' => 'Universitas Respati Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-riau/4768',
                'name' => 'Universitas Riau'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-riau-kepulauan/4769',
                'name' => 'Universitas Riau Kepulauan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sahid-jakarta/25240',
                'name' => 'Universitas Sahid Jakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sahid-surakarta/4771',
                'name' => 'Universitas Sahid Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sains-alquran/4772',
                'name' => 'Universitas Sains Alqur\'an'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sam-ratulangi/4774',
                'name' => 'Universitas Sam Ratulangi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-samawa/4775',
                'name' => 'Universitas Samawa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-samudra-langsa/4776',
                'name' => 'Universitas Samudra Langsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sanata-dharma/4777',
                'name' => 'Universitas Sanata Dharma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sangga-buana/4779',
                'name' => 'Universitas Sangga Buana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sari-mulia/29084',
                'name' => 'Universitas Sari Mulia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sarjanawiyata-tamansiswa/4781',
                'name' => 'Universitas Sarjanawiyata Tamansiswa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-satria-makassar/4782',
                'name' => 'Universitas Satria Makassar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-satya-negara-indonesia/4783',
                'name' => 'Universitas Satya Negara Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-satya-wiyata-mandala/4784',
                'name' => 'Universitas Satya Wiyata Mandala'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-satyagama/4785',
                'name' => 'Universitas Satyagama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sebelas-maret/4787',
                'name' => 'Universitas Sebelas Maret'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-semarang/4788',
                'name' => 'Universitas Semarang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-serang-raya/4790',
                'name' => 'Universitas Serang Raya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-setia-budi-mandiri/4791',
                'name' => 'Universitas Setia Budi Mandiri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-setia-budi-surakarta/4792',
                'name' => 'Universitas Setia Budi Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-siliwangi/4793',
                'name' => 'Universitas Siliwangi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-simalungun/4794',
                'name' => 'Universitas Simalungun'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-singaperbangsa-karawang/4795',
                'name' => 'Universitas Singaperbangsa Karawang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sintuwu-maroso/4796',
                'name' => 'Universitas Sintuwu Maroso'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sisingamangaraja-xii/4797',
                'name' => 'Universitas Sisingamangaraja XII'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-siswa-bangsa-internasional/19069',
                'name' => 'Universitas Siswa Bangsa Internasional'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sjakhyakirti/4798',
                'name' => 'Universitas Sjakhyakirti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sriwijaya/4801',
                'name' => 'Universitas Sriwijaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-stikubank/4802',
                'name' => 'Universitas Stikubank'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-subang/4803',
                'name' => 'Universitas Subang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sulawesi-barat/4804',
                'name' => 'Universitas Sulawesi Barat'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sultan-ageng-tirtayasa/4806',
                'name' => 'Universitas Sultan Ageng Tirtayasa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sumatera-utara/4808',
                'name' => 'Universitas Sumatera Utara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sunan-bonang/4809',
                'name' => 'Universitas Sunan Bonang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-sunan-giri/4810',
                'name' => 'Universitas Sunan Giri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-surabaya/4811',
                'name' => 'Universitas Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-surakarta/4812',
                'name' => 'Universitas Surakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-surya/4814',
                'name' => 'Universitas Surya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-suryadarma/4815',
                'name' => 'Universitas Suryadarma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-suryakancana/4816',
                'name' => 'Universitas Suryakancana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-swadaya-gunung-jati/4817',
                'name' => 'Universitas Swadaya Gunung Jati'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-swiss-german/4818',
                'name' => 'Universitas Swiss German'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-syiah-kuala/4819',
                'name' => 'Universitas Syiah Kuala'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tabanan/4820',
                'name' => 'Universitas Tabanan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tadulako/4821',
                'name' => 'Universitas Tadulako'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tama-jagakarsa/4822',
                'name' => 'Universitas Tama Jagakarsa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tanjungpura/4824',
                'name' => 'Universitas Tanjungpura'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tarumanagara/4825',
                'name' => 'Universitas Tarumanagara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teknologi-indonesia/4826',
                'name' => 'Universitas Teknologi Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teknologi-mataram/58330',
                'name' => 'Universitas Teknologi Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teknologi-sumbawa/43851',
                'name' => 'Universitas Teknologi Sumbawa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teknologi-surabaya/4829',
                'name' => 'Universitas Teknologi Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teknologi-yogyakarta/4830',
                'name' => 'Universitas Teknologi Yogyakarta'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-telkom/4419',
                'name' => 'Universitas Telkom'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-terbuka/24044',
                'name' => 'Universitas Terbuka'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-teuku-umar/4831',
                'name' => 'Universitas Teuku Umar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tidar/4832',
                'name' => 'Universitas Tidar'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-timika/4834',
                'name' => 'Universitas Timika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-timor/4835',
                'name' => 'Universitas Timor'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tjut-nyak-dien/4836',
                'name' => 'Universitas Tjut Nyak Dien'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tompotika/4837',
                'name' => 'Universitas Tompotika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tri-tunggal/4838',
                'name' => 'Universitas Tri Tunggal'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-triatma-mulya/103615',
                'name' => 'Universitas Triatma Mulya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tribhuwana-tungga-dewi/4839',
                'name' => 'Universitas Tribhuwana Tungga Dewi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tribuana-kalabahi/4840',
                'name' => 'Universitas Tribuana Kalabahi'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tridharma/4841',
                'name' => 'Universitas Tridharma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tridinanti/4842',
                'name' => 'Universitas Tridinanti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-trilogi/27690',
                'name' => 'Universitas Trilogi '
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-trisakti/4843',
                'name' => 'Universitas Trisakti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-trunajaya-bontang/4844',
                'name' => 'Universitas Trunajaya Bontang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-trunojoyo/4845',
                'name' => 'Universitas Trunojoyo'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-trunojoyo-madura/52176',
                'name' => 'Universitas Trunojoyo Madura'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tulang-bawang/4846',
                'name' => 'Universitas Tulang Bawang'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tulungagung/4847',
                'name' => 'Universitas Tulungagung'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-tunas-pembangunan/4848',
                'name' => 'Universitas Tunas Pembangunan'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-udayana/4849',
                'name' => 'Universitas Udayana'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-veteran-bangun-nusantara/4850',
                'name' => 'Universitas Veteran Bangun Nusantara'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-veteran-ri/4851',
                'name' => 'Universitas Veteran Ri'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-victory-sorong/4852',
                'name' => 'Universitas Victory Sorong'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-w-r-supratman/4853',
                'name' => 'Universitas W R Supratman'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wahid-hasyim/4854',
                'name' => 'Universitas Wahid Hasyim'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-warmadewa/4856',
                'name' => 'Universitas Warmadewa'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widya-dharma/4857',
                'name' => 'Universitas Widya Dharma'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widya-gama/4858',
                'name' => 'Universitas Widya Gama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widya-gama-mahakam-samarinda/4859',
                'name' => 'Universitas Widya Gama Mahakam Samarinda'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widya-kartika/4860',
                'name' => 'Universitas Widya Kartika'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widya-mataram/4861',
                'name' => 'Universitas Widya Mataram'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-widyatama/4862',
                'name' => 'Universitas Widyatama'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wijaya-kusuma-surabaya/4864',
                'name' => 'Universitas Wijaya Kusuma Surabaya'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wijaya-putra/4865',
                'name' => 'Universitas Wijaya Putra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-winaya-mukti/4866',
                'name' => 'Universitas Winaya Mukti'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wiralodra/4867',
                'name' => 'Universitas Wiralodra'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wiraraja/4868',
                'name' => 'Universitas Wiraraja'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-wiraswasta-indonesia/4869',
                'name' => 'Universitas Wiraswasta Indonesia'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-yarsi/4872',
                'name' => 'Universitas YARSI'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/universitas-yos-soedarso/4873',
                'name' => 'Universitas Yos Soedarso'
            ],
            [
                'url' => 'https://www.studocu.com/id/institution/university-of-darussalam-gontor/17539',
                'name' => 'University of Darussalam Gontor'
            ],
        ];

        echo count($array);
//        echo 'Kode,Nama,Link' . PHP_EOL;
//        foreach ($array as $item) {
//            $code = explode('/', $item['url'])[6];
//            $link = 'https://www.studocu.com/id/sell/upload/'.$code.'?step=1&origin=header';
//            echo $code . ',' . $item['name'] . ',' . $link . PHP_EOL;
//        }
    }
}

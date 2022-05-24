<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    
    public function index(){

        // js 
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
            "modules/waqif.js",
            "load_data/waqif_reload.js",
        ];

        $this->load->view("pewaqif", $data);
    }

    public function upload_data(){
        // 4 - 349
        $html = "";
        for ($i=4; $i < 350; $i++) { 
            $html .= "N".$i."&";
        }

        echo $html;
    }

    public function data(){
        $html = "30-03-2022||||||1000000,30-03-2022|||ALI EL
        FARABI|||100000,30-03-2022|||REZA
        APRIANTO
        RIVALDI|||10000,30-03-2022|||ABDUL
        KARIM|||10000,31-03-2022|||FIRDA
        YULIANTI|||100000,31-03-2022|||ANGGI
        SUGIH
        JATNIKA|||150000,31-03-2022|||MUH YUSUF
        AKRAM|||150000,31-03-2022|||ROSELLA
        VIRGINIA RIS|||50000,

        03-04-2022|||ANGGI
SUGIH
JATNIKA|||200000,04-04-2022|||REZA
APRIANTO
RIVALDI|||50000,04-04-2022|||MAHDY
MUHAJIR
AMRY|||100,04-04-2022|||PT FLIP|||20000,04-04-2022|||FIRDA
YULIANTI|||10000,04-04-2022|||RINI
YULIYANTI|||300000,04-04-2022|||WIWID
ELSINTA|||10000,04-04-2022|||ERINA
SUKMAWATI|||20000,05-04-2022|||ALI EL
FARABI|||50000,05-04-2022|||MUHAMMAD
RUM|||350000,05-04-2022|||SUCI SALWA
SALSABILL|||50000,05-04-2022|||RIFQI
NAUVAL
IRVANSYAH|||100000,05-04-2022|||PT FLIP|||100000,05-04-2022|||KHALIFARDHI
IKHSAN|||100000,05-04-2022|||MUSRAH
MUIS|||100000,05-04-2022|||IRSAN
RAMDANI|||50000,05-04-2022|||ADILAH
SHOFWATI
HAFILAH|||100000,05-04-2022|||ALDI
YUSTIANSYA
H RIZAL|||20000,05-04-2022|||DINA AYU
NINGRUM|||50000,05-04-2022|||SUKRIYATNO
MUHAMMAD|||75000,05-04-2022|||SYAMSUL
ACHMADI|||10000,05-04-2022|||VARIZ RIZKI
HIDAYAT|||50000,05-04-2022|||USAMAH|||100000,05-04-2022|||IMRON
ROSYADI|||20000,05-04-2022|||PT FLIP|||50000,05-04-2022|||FAJAR
RESTA
EFENDI|||10000,05-04-2022|||PT FLIP|||100000,05-04-2022|||PT FLIP|||40000,05-04-2022|||DANY SAAD
AMRULLAH|||20000,05-04-2022|||ATIFAH
RIDWAN|||100000,05-04-2022|||IHSAN
MAHENDY|||10000,05-04-2022|||IHSAN
MAHENDY|||10000,05-04-2022|||PT FLIP|||50000,05-04-2022|||GHEANISYA
APRILLIANI
SUK|||50000,05-04-2022|||ILMA
KHUSNA
DAROJAT|||20000,05-04-2022|||DIDIN
NURSOLEHU
DIN|||50000,05-04-2022|||JIHAN
RUSILA|||50000,05-04-2022|||SAHRIL
MUHAMMAD|||200000,05-04-2022|||AHMAD
TAUFIQ
TARIHORAN|||100000,05-04-2022||||||300000,05-04-2022|||HENDRAWAN
SAH
SAPUTRA|||50000,05-04-2022|||DANAVIAN
AHMAD
CHOIRUDIN|||20000,05-04-2022|||SAIFULLAH
MUHAMMAD|||100000,05-04-2022|||ARIF
RAHMAT|||500000,05-04-2022|||NURUL ISLI
FATEHA|||10000,05-04-2022|||LUQMAN
ABDURRAHM
AN|||10000,05-04-2022|||SITA ZAHRA
HUMAIRA|||50000,05-04-2022|||WIKE
OLANDA|||10000,05-04-2022|||BARRUN
NADZIR
DAHLAN|||200000,05-04-2022|||MIFTAH
FAUZI|||100000,05-04-2022|||CECEP
SUHENDAR|||100000,05-04-2022|||JAP MEN
KIUNG|||100000,05-04-2022|||FERDY
PRATAMA
PUTRA|||50000,05-04-2022|||SUNANDAR|||25000,05-04-2022|||MEYLAN|||100000,05-04-2022|||PT FLIP|||50000,05-04-2022|||ABDUL
CHOLIL|||10000,05-04-2022|||PARSIYAHTI|||20000,05-04-2022|||SRI RUSTIWI|||50000,05-04-2022|||DANA-MUHA
MMAD IRFAN|||25000,05-04-2022|||ANDRY
PUSPA
ANDIKA|||50000,05-04-2022|||MAESA|||50000,05-04-2022|||NABILA
RAISA DIENA|||50000,05-04-2022||||||300000,05-04-2022|||PT FLIP|||100000,05-04-2022|||PT FLIP|||100000,06-04-2022|||YAKA TANDA
PUTRA|||300000,06-04-2022|||NUR
FARIDAH|||224600,06-04-2022|||PT FLIP|||50000,06-04-2022|||PT FLIP|||50000,06-04-2022|||IZZAT
UBAIDILLAH|||50000,06-04-2022|||AHMAD
HAMDUN|||100000,06-04-2022|||FIRDA
YULIANTI|||10000,06-04-2022|||YUSYUS
RUSMADIAN|||100000,06-04-2022|||SAMSUL
HUDA|||100000,06-04-2022|||DANA-DINA
AYU
NINGRUM|||50000,06-04-2022|||SDRI NURUL
AZMAH
NIKMATULLA
H|||150000,06-04-2022|||ROHILL
HASEENA|||10000,06-04-2022|||MUHAMMAD
ARIF
HIDAYAT|||50000,06-04-2022|||ESFDFREI NUYRUL
AZMAH
NIKMATULLA
H|||200000,06-04-2022|||NENI
WILDIYANI|||50000,06-04-2022||||||40000,06-04-2022|||Instamoney|||50000,06-04-2022|||AJENG
KARTIKA
RAIS|||50000,06-04-2022|||HASAN
HUSEIN|||100,06-04-2022|||DANA-MUHA
MAD RIVA
PRAYOGA|||50000,06-04-2022|||LINDA
ARIASTUTI|||30000,06-04-2022||||||100000,06-04-2022|||RASUTI|||50000,06-04-2022|||PT FLIP|||200000,06-04-2022|||SUCI SALWA
SALSABILL|||50000,06-04-2022||||||30000,06-04-2022|||SUCI SALWA
SALSABILL|||50000,06-04-2022|||ZULFADLI|||100000,06-04-2022|||SHINTA
CLAUDIA|||100000,06-04-2022||||||500000,06-04-2022|||APRIANTO|||100000,06-04-2022|||APRIANTO|||20000,06-04-2022|||REZA
APRIANTO
RIVALDI|||50000,06-04-2022|||SUCI SALWA
SALSABILL|||50000,06-04-2022||||||15000,06-04-2022|||HARUM TIN
ASTUTI ST|||100000,06-04-2022|||HANI|||400000,06-04-2022|||SADAM
MUBAROK|||50000,06-04-2022|||ACHMAD
ILHAMSYAH|||20000,06-04-2022|||HILMIAH|||50000,06-04-2022|||DANA-DINA
AYU
NINGRUM|||60000,06-04-2022|||NUR AZISAH
AKRAM|||50000,06-04-2022|||DANA-ASMU
NI|||50000,06-04-2022|||AULIA
MAULANI|||30000,06-04-2022|||ELGI
VERDIAN
ABDILLAH|||35000,06-04-2022|||SDR BAGUS
NUR
MUTHI'UDDIN|||20000,06-04-2022|||SAEPUDIN|||50000,06-04-2022|||NUR AZISAH
AKRAM|||100000,07-04-2022|||NUR AISYAH
RAIHANAH|||50000,07-04-2022|||AAS AS-ARI|||100000,07-04-2022|||MUHAMMAD
SHIDDIQIEN
KUDDUS|||100000,07-04-2022|||SDR
MUHAMMAD
RUM|||600000,07-04-2022|||RIYAN
ARIYANSYAH|||50000,07-04-2022|||PT FLIP|||50000,07-04-2022|||PT FLIP|||50000,07-04-2022||||||10000,07-04-2022|||LILIS
HERLINA|||100000,07-04-2022|||SARAH ALYA
SALSABIL|||50000,07-04-2022|||NITA
PURNAMASA
RI|||50000,07-04-2022|||SUPRAPTO|||200000,07-04-2022|||AHMAD
AKBARUDIN|||50000,07-04-2022|||DANA-Dina
Febri|||50000,07-04-2022|||WAHYU YULI
ATMOKO|||100000,07-04-2022|||FEBRI
LISTIYANI|||50000,07-04-2022|||HUDALLIL
MUTTAQIN|||100000,07-04-2022|||PRAYOGA
ARIYANTO|||50000,07-04-2022||||||50000,07-04-2022|||FIRDA
YULIANTI|||50000,07-04-2022|||TAUFIQUR
RIZQI|||17000,07-04-2022|||AGI NURUL
HIDAYAT|||100000,07-04-2022||||||50000,07-04-2022|||ABDUL LATIF|||50000,07-04-2022|||PT FLIP|||100000,07-04-2022|||IBU FINNA
KURNIAWATI|||50000,07-04-2022||||||15000,07-04-2022|||ROHILL
HASEENA|||10000,07-04-2022|||DANA-ANDRE
SEPTIANSAH|||50000,07-04-2022||||||10000,07-04-2022|||ENI NURAENI|||20000,07-04-2022|||SNRkiriman
dari Enjang
juliana|||50000,07-04-2022|||M FAZLUR
RAHMAN|||50000,07-04-2022|||AHMAD
SUKARNA
SUKARDI|||150000,07-04-2022|||FIRDA
YULIANTI|||100000,07-04-2022|||DANA-ROY
PURNAMA|||500000,07-04-2022|||ARIFIN
BUDIMAN|||50000,07-04-2022||||||100000,07-04-2022|||HASNA
KHOIRUNNIS
A|||100000,07-04-2022|||YUNITA
APRILLIYA|||50000,07-04-2022|||YUNITA
APRILLIYA|||50000,07-04-2022|||DWI
SETYAWAN|||100000,07-04-2022|||FUTRI
HARYANI|||50000,07-04-2022|||SANDRA
DEWI
VEBRIANTI|||15000,07-04-2022|||DANA-AMBA
RNITA SRI
WAHYUNI|||50000,07-04-2022|||DIAZ
HERDIANSYA
H|||100000,08-04-2022||||||200000,08-04-2022|||IMAM
MUHKHOLIQ|||50000,08-04-2022||||||50000,08-04-2022|||HAUDITS
RAY
FERDIANSYA|||30000,08-04-2022|||HWAHYU YULI
ATMOKO|||50000,08-04-2022|||WAHYU YULI
ATMOKO|||10000,08-04-2022|||WAHYU YULI
ATMOKO|||10000,08-04-2022|||M
ARIANSYAH|||50000,08-04-2022|||PT FLIP|||50000,08-04-2022||||||50000,08-04-2022|||MINTARSIH|||50000,08-04-2022|||BUDI
SANTOSO|||500000,08-04-2022|||FIRDA
YULIANTI|||10000,08-04-2022|||ROSA
KHAERUNISA|||50000,08-04-2022|||DANA-DEDEH
KURNIAWATI|||50000,08-04-2022|||MOHAMMAD
ALIF NUR
FATHONI|||500000,08-04-2022||||||100000,08-04-2022|||MUHAMMAD
RAMADHAN|||100000,08-04-2022|||PT FLIP|||200000,08-04-2022|||PT FLIP|||50000,08-04-2022|||ASEP
BUDIMAN|||50000,08-04-2022||||||50000,08-04-2022||||||50000,08-04-2022||||||100000,08-04-2022||||||100000,08-04-2022|||DANA-ADE
RIZAL
BARMAWI|||100000,08-04-2022|||SLAMET
ZARKASIH|||50000,08-04-2022|||PT FLIP|||100000,08-04-2022|||PT FLIP|||100000,08-04-2022|||IMAN
RACHMAN|||200000,08-04-2022|||RITA
PUSPITASARI|||10000,08-04-2022|||SEPTIASARI
PRAMEST|||50000,08-04-2022|||DANA-TEGAR
PERKASA|||65000,08-04-2022|||SITI
NURAHMAW
ATI|||10000,08-04-2022|||YANIH
SURYANI|||50000,08-04-2022|||IBU FEBRIAN
NINDYA
PRAMUKTI|||70000,08-04-2022|||DANA-SELA
MARSELA
RAMADAN|||100000,08-04-2022||||||30000,08-04-2022|||RINIH
WULANDARI|||30000,08-04-2022|||MUHAMAD
LUTFI ABDU|||50000,08-04-2022||||||17000,08-04-2022|||DANA-MAULA
NA|||50000,08-04-2022|||PT FLIP|||20000,08-04-2022|||ANDIKA
SUHERMAN|||150000,08-04-2022|||H ONO
SUMARNO|||1000000,08-04-2022|||ANGGI
SUGIH
JATNIKA|||200000,08-04-2022||||||10000,08-04-2022||||||20000,08-04-2022|||ANDRI
ESTINING
SEJATI|||50000,08-04-2022|||IPAN
KOSASIH|||50000,08-04-2022|||ALI HUDA|||10000,08-04-2022|||MUHAMMAD
SHIDDIQIEN
KUDDUS|||50000,08-04-2022||||||50000,08-04-2022|||SDR
MUHAMMAD
IKHSAN
FADLIKAL T|||50000,08-04-2022|||PT FLIP|||30000,08-04-2022|||PT FLIP|||100000,08-04-2022|||SDRI WIDIA
KUSHERAWA
TI|||50000,08-04-2022|||DANA-MUHA
MMAD ADI
BUDIMAN|||200000,08-04-2022|||PT FLIP|||50000,08-04-2022|||SDR ADRIE
FEBRIANSYA
H|||50000,08-04-2022|||MUHAMMAD
ADIB|||50000,08-04-2022|||DANA-ELY
APRIANTY|||100000,09-04-2022|||IBU IKA NUR
AENI|||200000,09-04-2022|||ACHMAD
SUSANI|||100000,09-04-2022||||||50000,09-04-2022|||MAELANI
AMALIA|||50000,09-04-2022|||HARUM TIN
ASTUTI ST|||100000,09-04-2022|||PT FLIP|||500000,09-04-2022|||FATHIN
AULIA
SHOLEHAH|||21400,09-04-2022|||SITI
MARYANI|||200000,09-04-2022|||KRISNA
FAHRIZAL
DUMADI|||100000,09-04-2022|||DANA-EFA
WIDIANINGSI
H|||30000,09-04-2022|||SARAH
FAUZIYYAH|||10000,09-04-2022|||SARAH
FAUZIYYAH|||10000,09-04-2022|||TSABIT ABDI
HAQQI|||100000,09-04-2022|||SDRI IRTA
JUWITA R|||100000,09-04-2022|||MUHAMMAD
TEGUH
WIDOD|||200000,09-04-2022|||PT FLIP|||50000,10-04-2022|||SDRI NADYA
MUTIARA
YUSDI|||250000,10-04-2022|||ALI EL
FARABI|||100000,10-04-2022|||FIRDA
YULIANTI|||10000,10-04-2022|||ANIKA|||100000,10-04-2022|||TATANG
NURJANA|||500000,10-04-2022|||ALDI|||50000,10-04-2022|||PT FLIP|||1000000,10-04-2022|||PT FLIP|||100000,10-04-2022|||IRFAN
AFFANDI|||50000,11-04-2022|||PT FLIP|||50000,11-04-2022|||PT FLIP|||150000,11-04-2022|||PT FLIP|||50000,11-04-2022|||PT FLIP|||100000,11-04-2022|||IBU SHINTA
CINDY|||300000,11-04-2022|||BUKALAPAK.
COM|||100000,11-04-2022||||||20000,11-04-2022||||||25001,11-04-2022|||PT FLIP|||100000,11-04-2022|||SUSI
SUSILAWATI|||50000,11-04-2022|||SDRI
NURJANAH|||100000,11-04-2022|||SITI
NURWAHIDA
H|||30000,11-04-2022|||ELYANG
GAGA|||20000,11-04-2022|||ABDUL
HAMID LUBIS|||10000,11-04-2022|||REZA
APRIANTO
RIVALDI|||150000,12-04-2022|||FIRDA
YULIANTI|||100000,12-04-2022|||ROHILL
HASEENA|||10000,12-04-2022|||PT FLIP|||500000,12-04-2022|||LAILATUR
ROHMAH
MAARIF|||250000,13-04-2022|||M. FIQRY
HIDAYAT|||100000,13-04-2022||||||100000,13-04-2022|||ROHILL
HASEENA|||10000,13-04-2022|||FIRDA
YULIANTI|||100000,13-04-2022|||SDRI AULIA
NUR INDAH
DEWI|||150000,13-04-2022||||||50000,14-04-2022|||DARMAWAN
GSA ASIS|||200000,14-04-2022|||PT FLIP|||20000,14-04-2022|||FIRDA
YULIANTI|||10000,15-04-2022||||||10000,15-04-2022||||||10000,15-04-2022|||SDRI
AMROENI
ROSYADA|||77000,15-04-2022|||REZA
APRIANTO
RIVALDI|||250000,15-04-2022|||MUHAMMAD
SHIDDIQIEN
KUDDUS|||50000,15-04-2022|||MUHAMMAD
IHSAN HADIY|||160500,16-04-2022|||MEYLAN|||200000,16-04-2022||||||10000,16-04-2022||||||10000,16-04-2022||||||50000,17-04-2022||||||10000,17-04-2022||||||10000,17-04-2022|||AGUSTIAN
ASRIYANSYA
H|||50000,18-04-2022|||FIRDA
YULIANTI|||10000,18-04-2022||||||10000,18-04-2022||||||10000,18-04-2022|||FIRDA
YULIANTI|||500000,18-04-2022|||SOPIAN
SAURI|||100000,19-04-2022||||||10000,19-04-2022||||||10000,19-04-2022|||TAUFIQUR
RIZQI|||10000,19-04-2022|||MOCH
MIFTAKHUL
AMIN|||30000,20-04-2022|||RIA
AGUSTINA|||100000,20-04-2022||||||10000,20-04-2022||||||10000,20-04-2022|||RIANY
NURDHEASYI
FA S|||10000,20-04-2022|||ALDIN|||100000,20-04-2022|||APRIYATNA
RAMADHAN|||50000,21-04-2022||||||10000,21-04-2022||||||10000,22-04-2022||||||10000,22-04-2022||||||10000,22-04-2022|||Ani Salmah|||200000,23-04-2022|||SOFYAN
HERMANSYA
H|||2500000,23-04-2022||||||10000,23-04-2022||||||10000,24-04-2022|||PT FLIP|||250000,24-04-2022||||||10000,24-04-2022||||||10000,24-04-2022|||ROHILL
HASEENA|||20000,25-04-2022|||PT FLIP|||200000,25-04-2022||||||100000,25-04-2022|||SARAH ALYA
SALSABIL|||100000,25-04-2022|||MUHAMMAD
SHIDDIQIEN
KUDDUS|||25000,25-04-2022||||||10000,25-04-2022||||||10000,26-04-2022|||YENI
NOVIANA
SARI|||500000,26-04-2022||||||10000,26-04-2022||||||10000,26-04-2022|||ROHILL
HASEENA|||20000,27-04-2022||||||10000,27-04-2022||||||10000,28-04-2022||||||10000,28-04-2022||||||10000,28-04-2022|||ISMAIL NOOR|||100000,28-04-2022|||SDRI NURUL
AZMAH
NIKMATULLA
H|||300000,29-04-2022|||MUHAMMAD
SHIDDIQIEN
KUDDUS|||25000,29-04-2022|||ASMUNI|||10000,29-04-2022|||ANISATUN
ANGGRAENI|||100000,29-04-2022||||||10000,29-04-2022||||||10000,29-04-2022||||||500000,30-04-2022|||RIANA
PUSPITA
SARI|||250000,30-04-2022||||||10000,30-04-2022||||||10000,
01-05-2022|||NUR ALAM|||200000,01-05-2022|||ERINA
SUKMAWATI|||10000,01-05-2022||||||10000,01-05-2022||||||10000,01-05-2022|||PT FLIP|||250000,01-05-2022||||||10000,02-05-2022||||||10000,03-05-2022||||||10000,03-05-2022||||||10000,04-05-2022||||||10000,04-05-2022||||||10000,05-05-2022||||||10000,05-05-2022||||||10000,06-05-2022||||||10000,06-05-2022||||||10000,07-05-2022|||PT FLIP|||25000,07-05-2022||||||10000,07-05-2022||||||10000,08-05-2022||||||10000,08-05-2022||||||10000,09-05-2022|||MUH YUSUF
AKRAM|||50000,09-05-2022|||MUH YUSUF
AKRAM|||20000,09-05-2022||||||10000,09-05-2022||||||10000,10-05-2022||||||10000,10-05-2022||||||10000,11-05-2022||||||10000,11-05-2022||||||10000,11-05-2022|||ANISA
SYAHRILIA|||20000,12-05-2022||||||10000,12-05-2022||||||10000,13-05-2022||||||10000,13-05-2022||||||10000,14-05-2022||||||10000,14-05-2022||||||10000,15-05-2022||||||10000,15-05-2022||||||10000,16-05-2022||||||10000,16-05-2022||||||10000,16-05-2022||||||10000,17-05-2022||||||10000,18-05-2022||||||10000,19-05-2022||||||10000,19-05-2022||||||10000,20-05-2022||||||10000,20-05-2022||||||10000,20-05-2022|||MEYLAN|||200000,21-05-2022||||||200000,21-05-2022||||||10000,21-05-2022||||||10000,22-05-2022||||||10000,22-05-2022||||||10000,23-05-2022||||||10000,23-05-2022||||||10000";
        

        $html = explode(",", $html);

        $data = [];
        foreach ($html as $i => $html) {
            $text = explode("|||", $html);

            $tgl_explode = explode("-", $text[0]);
            $tgl = $tgl_explode[2] . "-" . $tgl_explode[1] . "-" . $tgl_explode[0];
            // var_dump($tgl_explode);

            if($text[1] == ""){
                $nama_waqif = "Hamba Allah";
            } else {
                $nama_waqif = $text[1];
            }

            $data_waqif = [
                "nama_waqif" => $nama_waqif,
                "nominal" => $text[2],
                "tgl_waqaf" => $tgl
            ];

            $this->home->add_data("waqif", $data_waqif);
        }

        // var_dump($data);
    }
}
/* End of file Transaksi.php */

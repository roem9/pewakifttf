<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarLandingPage extends MY_Controller {
    
    public function index(){
        $data['js'] = [
            "ajax.js",
            "function.js",
            "helper.js",
        ];

        $data['title'] = "Form Registrasi Landing Page Klaster Nayanika";
        $this->load->view("sales/registrasi", $data);
    }

    public function add_registrasi_marketing(){
        $panggilan = $this->input->post("panggilan");
        $nama_panggilan = $this->input->post("nama_panggilan");
        $nama = $this->input->post("nama");
        $no_wa = $this->input->post("no_wa");
        $email = $this->input->post("email");
        $id = rand();

        $data = [
            "id" => $id,
            "no_wa" => $no_wa,
            "panggilan" => $panggilan,
            "nama_panggilan" => $nama_panggilan,
            "nama" => $nama,
            "email" => $email,
        ];

        $this->daftarlandingpage->add_data("marketing", $data);

        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');

        $to = $email;
        $subject = 'Link Landing Page';
        $message = "
            <p>Bismillah, Selamat pendaftaran Landing Page Klaster Nayanika Anda BERHASIL</p>
            <p>Berikut link Landing Page atau Website Anda : </p>
            <p>https://klasternayanika.com/{$id}</p>
            <p>Dan berikut data diri Anda : </p>
            
            <table>
                <tr>
                    <td>Panggilan</td>
                    <td>: {$panggilan}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: {$nama}</td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>: {$nama_panggilan}</td>
                </tr>
                <tr>
                    <td>No. WhatsApp</td>
                    <td>: {$no_wa}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: {$email}</td>
                </tr>
            </table>
            
            <p>Nah selanjutnya, inilah beberapa TIPS & TRICK cara penggunaan Landing Page</p>
            <p>Namun sebelum itu, yuk pahami terlebih dahulu cara kerja dari Landing Page itu sendiri</p>
            <p>Pertama, Landing Page tersebut adalah informasi berisi penawaran produk dari Klaster Nayanika. Di sana tersedia pula konten yang isinya mengajak konsumen untuk membaca informasi yang tersedia.</p>
            <p>Kedua, Jika konsumen tertarik, mereka bisa langsung menghubungi Anda dengan cara mengklik tombol &quot;Hubungi Kami&quot; di sebelah kiri.</p>
            <p>Ketiga, Pada saat konsumen menekan tombol Call To Action (CTA) yang diatur sedemikian rupa (Tombol &quot;Hubungi Kami&quot;, maka mereka akan diarahkan langsung ke WhatsApp Anda.</p>
            <p>Nah setelah sampai ke WhatsApp Anda silahkan di handling dengan baik sehingga lebih tertarik dan akhirnya mau survey dan selanjutnya membeli unit yang Anda tawarkan.</p>
            <p>Setelah mengetahui bagaimana cara kerjanya, selanjutnya bagaimana sih cara menggunakan Landing Page ini ?</p>
            <ol type='number'>
                <li>Ketika update status ataupun posting iklan, Anda bisa menyelipkan link Landing Page Anda ke dalam suatu iklan tersebut</li>
                <li>Bisa juga ketika ada sanak keluarga atau teman yang tertarik, sangat memungkinkan jika Anda mengirim link Landing Page tersebut untuk membantu menjelaskan produk kepada mereka </li>
            </ol>
            <p>Berikut beberapa platform yang bisa untuk share link Landing Page :</p>
            <ol type='number'>
                <li>WhatsApp</li>
                <li>Facebook </li>
                <li>Instagram</li>
                <li>Youtube</li>
                <li>Tiktok</li>
                <li>Marketplace </li>
                <li>dan lain sebagainya..</li>
            </ol>
            <p>Nah jika ada yang kurang dipahami, silahkan langsung konsultasikan dan tanya-tanya di grup atau ke leadernya yaa..</p>
            <p>Selamat mencoba, semoga berhasil dan mendapatkan closingan dan KOMISI yang BERKAH serta BERLIMPAH yang bisa bermanfaat untuk diri sendiri, keluarga dan juga orang lain. Aamiin Ya Allah</p>
            <p>Salam hangat dari saya Ali El Farabi owner Sharia Institute (PT Sharia Grup Indonesia)</p>";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();

        $this->session->set_flashdata("pesan", "
            <div>
                <center>
                    <h2 class='mt-4 mb-4'>Alhamdulillah, Selamat Anda Telah Berhasil Membuat Landing Page Klaster Nayanika</h2 class='mt-5'>
                    <p><b>Berikut link Landing Page Anda : </b> <br> <a target='_blank' href='https://klasternayanika.com/{$id}'>https://klasternayanika.com/{$id}</a></p>
                    <button class='copy btn btn-success mb-3' data-clipboard-text='https://klasternayanika.com/{$id}'>
                        ".tablerIcon('copy', 'me-1')."
                        Salin Link
                    </button>
                    <p>Di copy dan disimpan baik-baik ya linknya... </p>
                    <div class='mt-4'>
                        <p>Oh iya, kalau lupa linknya bisa di cek di email yang Anda daftarkan tadi.</br>
                        Langsung cek Email Anda sekarang, ada <b>BONUS TIPS & TRICK CARA PENGGUNAAN LANDING PAGE</b>. Cekidot!</p>
                    </div>
                    <div class='mt-4'>
                        <p><b>Salam hangat dari saya Ali El Farabi owner Sharia Institute (PT Sharia Grup Indonesia)</b></p>
                    </div>
                </center>
            </div>
        ");
        
        redirect(base_url('daftarlandingpage'));
    }
}
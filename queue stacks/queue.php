<?php
require_once "title.php";
require_once "function.php";

//inisiasi objek SplQueue / Standard PHP Library
$stack = new SplQueue();
//method push berguna untuk menambahkan stack / antrian / value ke dalam objek splqueue;
$stack->push("ke 1");
$stack->push("ke 2");
//menghapus / mengeluarkan value yang terakhir, jika dilihat dari sini, maka last value adalah "ke 2"
$stack->pop();

//stack ini sifatnya 11-12 sama array, jadi jangan heran jika penamaan methodnya sama :)

$queue = new SplQueue();

$queue->enqueue(1); // enqueue sama seperti method push, yaitu untuk menambahkan value
$queue->enqueue(2);
$queue->dequeue(); // dequeue sama seperti method pop, yaitu untuk menghapus/menghilangkan value yang sudah ada
// helper method pada objek SplQueue
$queue->count(); // menghitung ada berapa banyak el yang ada di dalam objek

$queue->isEmpty(); // mengetahui apakah objek queue ada isinya / tidak

$queue->valid(); // akan bernilai false, jika pointer/posisi sekarang berada di paling kanan & akan bernilai false, jika tidak memanggil method rewind dulu untuk mereset pointer(saat pertama kali instansiasi objek)

$queue->rewind(); // akan mengembalikan/mengubah pointer ke posisi paling kiri / awal, jika sebelumnya menggunakan method valid & nilainya adalah false, maka jika kita memanggil method ini, otomatis nilai method valid akan berubah menjadi true

$queue->current(); // hanya berfungsi ketika kita sudah memanggil method rewind terlebih dahulu, kenapa? karena jika kita tidak memanggil method rewind dulu, pointer akan memiliki posisi seperti saat objek pertama di-inisiasi, yaitu 0 atau tidak ada el/value

$queue->unshift("ichi-bann"); // menambahkan value/el ke posisi paling awal

var_dump($queue->current()); //jika kita menggunakan method current setelah menambahkan el ke bagian paling depan, maka nilai yang dikembalikan tetap bernilai seperti diatas

$queue->rewind();

var_dump($queue->current()); // namun, jika kita memanggil method rewind lagi, dan setelah itu kita memanggil method current, maka nilai nya adalah el pertama, yaitu ichi-ban yang baru saja ditambahkan diatas menggunakan method unshift

$queue->add(0, "Ada aku disini");
var_dump($queue);
var_dump($queue->current());
$queue->rewind();
var_dump($queue->current());


//Iterate atau me-looping kumpulan value dari queue & stack :
//    pertama kita rewind dulu, agar pointer berada di bagian paling depan
    $queue->rewind();
//    jika el pointer tidak berada di ujung kanan/el terakhir, maka masuk ke statement while
    while($queue->valid())
    {
        echo $queue->current(); // menampilkan value pointer sekarang
        enter(); // panggil fungsi enter
        $queue->next(); // lalu, pindahkan pointer ke posisi selanjutnya
    }
enter();
echo '<h1>----selesai-----</h1>';
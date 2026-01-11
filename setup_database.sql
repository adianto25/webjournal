-- Membuat tabel gallery
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL, 
  PRIMARY KEY (`id`)
);

-- Menambahkan kolom foto pada tabel user (jika belum ada)
ALTER TABLE `user` ADD `foto` VARCHAR(255) NULL AFTER `password`;

-- (Opsional) Insert data awal untuk Gallery (supaya tidak kosong saat dites)
INSERT INTO `gallery` (`tanggal`, `gambar`, `judul`) VALUES
(NOW(), 'tniprima.jpg', 'Kegiatan 1'),
(NOW(), 'tniprima1.jpg', 'Kegiatan 2'),
(NOW(), 'tniprima2.jpg', 'Kegiatan 3');

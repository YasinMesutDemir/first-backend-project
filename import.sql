DROP DATABASE IF EXISTS `pcbuilder`;

CREATE DATABASE `pcbuilder`;

USE `pcbuilder`;

CREATE TABLE `cpu` (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(45) NOT NULL,
    `Cores` INTEGER NOT NULL,
    `Platform` VARCHAR(10) NOT NULL,
    `TDP` VARCHAR(4) NOT NULL,
    `Clock` VARCHAR(10) NOT NULL,
    `Prijs` VARCHAR(10) NOT NULL,
    `Graphics` VARCHAR(10),
    `Architecture` VARCHAR(5) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `gpu` (
    `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Chipset` VARCHAR(100) NOT NULL,
    `Vram GB` INT NOT NULL,
    `Base Clock` DECIMAL(6,2) NOT NULL,    
    `Boost Clock` DECIMAL(6,2) NOT NULL,    
    `TDP` INT NOT NULL,
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `ram` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Capaciteit GB` INT NOT NULL,
    `Sticks` INT NOT NULL,
    `Speed Mhz` INT NOT NULL,
    `Type` VARCHAR(20) NOT NULL,            
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `storage` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Type` VARCHAR(50) NOT NULL,          
    `Capaciteit GB` INT NOT NULL,
    `Interface` VARCHAR(50) NOT NULL,       
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `motherboard` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Socket` VARCHAR(50) NOT NULL,
    `Chipset` VARCHAR(50) NOT NULL,
    `Form Factor` VARCHAR(50) NOT NULL,     
    `Ram Type` VARCHAR(20) NOT NULL,
    `Max Ram` INT NOT NULL,                
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `psu` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Wattage` INT NOT NULL,
    `Efficieny Rating` VARCHAR(50) NOT NULL,  
    `modular` BOOLEAN NOT NULL,
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `coolers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Type` VARCHAR(50) NOT NULL,          
    `Fan RPM` INT NOT NULL,
    `Supported Sockets` VARCHAR(255) NOT NULL,
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `cases` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `Naam` VARCHAR(100) NOT NULL,
    `Merk` VARCHAR(50) NOT NULL,
    `Form Factor` VARCHAR(50) NOT NULL,   
    `Color` VARCHAR(50) NOT NULL,
    `Has RGB` BOOLEAN NOT NULL,
    `Prijs` DECIMAL(10,2) NOT NULL,
    `image_url` VARCHAR(500)
);

CREATE TABLE `gebruikers` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL
);

INSERT INTO gebruikers (`username`, `password`) values ('bobby', 'password');

INSERT INTO `cpu` (`Naam`, `cores`, `platform`, `TDP`, `clock`, `prijs`, `graphics`, `architecture`, `Merk`, `image_url`) VALUES
('Intel Core i5-12400', 6, 'LGA1700', '65W', '2.5GHz', '189.99', 'UHD730', 'x86', 'Intel', 'https://shop.sww.nl/wp-content/uploads/2020/11/616656-amd-ryzen-5-5000-series-pib-fan-1260x709_-_kopie.png'),
('AMD Ryzen 5 5600X', 6, 'AM4', '65W', '3.7GHz', '179.99', NULL, 'x86', 'Amd', 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d200001001808961/intel-core-i7-13700k-lga-1700.png'),
('Intel Core i7-13700K', 16, 'LGA1700', '125W', '3.4GHz', '409.99', 'UHD770', 'x86', 'Intel', 'https://hwimg.nl/largesysimg/AMD-Ryzen-9.png'),
('AMD Ryzen 9 7900X', 12, 'AM5', '170W', '4.7GHz', '429.99', 'Radeon', 'x86', 'Amd', 'https://www.awd-it.co.uk/media/catalog/product/e/n/en-box-t4-i3-13th-front-1080x1080pixels.png'),
('Intel Core i3-13100', 4, 'LGA1700', '60W', '3.4GHz', '139.99', 'UHD730', 'x86', 'Intel', 'https://www.awd-it.co.uk/media/catalog/product/e/n/en-box-t4-i3-13th-front-1080x1080pixels.png'),
('AMD Ryzen 7 5800X', 8, 'AM4', '105W', '3.8GHz', '299.99', NULL, 'x86', 'Amd', 'https://www.awd-it.co.uk/media/catalog/product/e/n/en-box-t4-i3-13th-front-1080x1080pixels.png'),
('Intel Core i9-13900K', 24, 'LGA1700', '125W', '3.0GHz', '589.99', 'UHD770', 'x86', 'Intel', 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d200001001808961/intel-core-i7-13700k-lga-1700.png'),
('AMD Ryzen 5 7600', 6, 'AM5', '65W', '3.8GHz', '229.99', 'Radeon', 'x86', 'Amd', 'https://shop.sww.nl/wp-content/uploads/2020/11/616656-amd-ryzen-5-5000-series-pib-fan-1260x709_-_kopie.png'),
('Intel Core i5-13400F', 10, 'LGA1700', '65W', '2.5GHz', '209.99', NULL, 'x86', 'Intel', 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d200001001808961/intel-core-i7-13700k-lga-1700.png'),
('AMD Ryzen 3 4100', 4, 'AM4', '65W', '3.8GHz', '99.99', NULL, 'x86', 'Amd', 'https://pcd.com.sa/uploads/Intel_Core_i5_12400_F_3_06431c8804.webp');

INSERT INTO `gpu` (`Naam`, `Merk`, `Chipset`, `Vram GB`, `Base Clock`, `Boost Clock`, `TDP`, `Prijs`, `image_url`) VALUES
('NVIDIA GeForce RTX 3080', 'NVIDIA', 'Ampere', 10, 1440.00, 1710.00, 320, 699.99, 'https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/VGA-2020/image/KV-3080X.png'),
('AMD Radeon RX 6800 XT', 'AMD', 'RDNA 2', 16, 1825.00, 2250.00, 300, 649.99, 'https://www.gigabyte.com/FileUpload/Global/KeyFeature/1664/innergigabyteimages/kf-img.png'),
('NVIDIA GeForce RTX 3070', 'NVIDIA', 'Ampere', 8, 1500.00, 1730.00, 220, 499.99, 'https://images.anandtech.com/doci/16197/geforce-rtx-3070-tns_678x452.png'),
('AMD Radeon RX 6700 XT', 'AMD', 'RDNA 2', 12, 2321.00, 2581.00, 230, 479.99, 'https://tweakers.net/i/MaDZ4sHZn1US0xtqTYbcZdIdYgo=/980x/filters:strip_exif()/i/2004235126.png?f=imagearticlefull'),
('NVIDIA GeForce RTX 3060 Ti', 'NVIDIA', 'Ampere', 8, 1410.00, 1665.00, 200, 399.99, 'https://images.anandtech.com/doci/16197/geforce-rtx-3070-tns_678x452.png'),
('AMD Radeon RX 6900 XT', 'AMD', 'RDNA 2', 16, 1825.00, 2250.00, 300, 999.99, 'https://www.gigabyte.com/FileUpload/Global/KeyFeature/1664/innergigabyteimages/kf-img.png'),
('NVIDIA GeForce RTX 3050', 'NVIDIA', 'Ampere', 8, 1500.00, 1777.00, 130, 249.99, 'https://images.anandtech.com/doci/16197/geforce-rtx-3070-tns_678x452.png'),
('AMD Radeon RX 6600 XT', 'AMD', 'RDNA 2', 8, 1968.00, 2589.00, 160, 379.99, 'https://tweakers.net/i/MaDZ4sHZn1US0xtqTYbcZdIdYgo=/980x/filters:strip_exif()/i/2004235126.png?f=imagearticlefull'),
('NVIDIA GeForce GTX 1660 Super', 'NVIDIA', 'Turing', 6, 1530.00, 1785.00, 125, 229.99, 'https://images.anandtech.com/doci/16197/geforce-rtx-3070-tns_678x452.png'),
('AMD Radeon RX 5500 XT', 'AMD', 'RDNA 1', 8, 1685.00, 1845.00, 130, 199.99, 'https://www.gigabyte.com/FileUpload/Global/KeyFeature/1664/innergigabyteimages/kf-img.png');

INSERT INTO `ram` (`Naam`, `Merk`, `Capaciteit GB`, `Sticks`, `Speed Mhz`, `Type`, `Prijs`, `image_url`) VALUES
('Corsair Vengeance LPX', 'Corsair', 16, 2, 3200, 'DDR4', 79.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011217875/corsair-vengeance-lpx-16gb-3000mhz-ddr4-288-pin-dimm.png'),
('G.Skill Trident Z', 'G.Skill', 32, 2, 3600, 'DDR4', 159.99, 'https://shop.sww.nl/wp-content/uploads/2019/10/156284007313.png'),
('Kingston HyperX Fury', 'Kingston', 16, 2, 2666, 'DDR4', 69.99, 'https://www.ct.nl/app/uploads/2020/12/Furyscan.png'),
('Crucial Ballistix', 'Crucial', 16, 2, 3000, 'DDR4', 74.99, 'https://eu.crucial.com/content/dam/crucial/dram-products/ballistix-max-udimm/images/product/crucial-ballistix-max-and-rgb-offset-stacked-front-flat-image.psd.transform/small-png/img.png'),
('Patriot Viper 4', 'Patriot', 8, 1, 3200, 'DDR4', 39.99, 'https://cdn.prod.website-files.com/63b6412d4ef17b35c8b5f9d5/643902ec6d20a5913f4d0fbc_list_blackout.png'),
('Team T-Force Delta', 'Team', 32, 4, 3200, 'DDR4', 149.99, 'https://eu.crucial.com/content/dam/crucial/dram-products/ballistix-max-udimm/images/product/crucial-ballistix-max-and-rgb-offset-stacked-front-flat-image.psd.transform/small-png/img.png'),
('Corsair Dominator Platinum', 'Corsair', 64, 4, 3200, 'DDR4', 329.99, 'https://www.ct.nl/app/uploads/2020/12/Furyscan.png'),
('G.Skill Ripjaws V', 'G.Skill', 16, 2, 3000, 'DDR4', 74.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011217875/corsair-vengeance-lpx-16gb-3000mhz-ddr4-288-pin-dimm.png'),
('Kingston HyperX Predator', 'Kingston', 16, 2, 3600, 'DDR4', 99.99, 'https://www.ct.nl/app/uploads/2020/12/Furyscan.png'),
('Crucial DDR4', 'Crucial', 8, 1, 2400, 'DDR4', 34.99, 'https://shop.sww.nl/wp-content/uploads/2019/10/156284007313.png');

INSERT INTO `storage` (`Naam`, `Merk`, `Type`, `Capaciteit GB`, `Interface`, `Prijs`, `image_url`) VALUES
('Samsung 970 EVO Plus', 'Samsung', 'SSD', 1000, 'NVMe', 149.99, 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_71126778/fee_786_587_png'),
('Western Digital Blue', 'WD', 'HDD', 2000, 'SATA', 54.99, 'https://www.westerndigital.com/content/dam/store/en-us/assets/products/internal-storage/wd-blue-desktop-sata-hdd/gallery/wd-blue-pc-desktop-hard-drive-1tb.png.thumb.1280.1280.png'),
('Crucial MX500', 'Crucial', 'SSD', 500, 'SATA', 64.99, 'https://tweakers.net/ext/i/2001753527.png'),
('Seagate Barracuda', 'Seagate', 'HDD', 4000, 'SATA', 89.99, 'https://www.seagate.com/content/dam/seagate/assets/products/hard-drives/barracuda-3-5-hdd/images/barracuda-16TB-left.png/_jcr_content/renditions/1-1-large-640x640.png'),
('Samsung 860 EVO', 'Samsung', 'SSD', 1000, 'SATA', 129.99, 'https://cdn.webshopapp.com/shops/317860/files/420633907/600x600x1/samsung-samsung-860-evo-250gb-ssd-mz-76e250.jpg'),
('Kingston A2000', 'Kingston', 'SSD', 1000, 'NVMe', 109.99, 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_75652268/fee_786_587_png'),
('Crucial P5', 'Crucial', 'SSD', 2000, 'NVMe', 229.99, 'https://www.gamerspoint.com.ar/wp-content/uploads/Captura-de-pantalla-2024-06-13-103736.png'),
('Western Digital Black', 'WD', 'SSD', 1000, 'NVMe', 199.99, 'https://eu.crucial.com/content/dam/crucial/dram-products/ballistix-max-udimm/images/product/crucial-ballistix-max-and-rgb-offset-stacked-front-flat-image.psd.transform/small-png/img.png'),
('Seagate FireCuda', 'Seagate', 'SSD', 2000, 'NVMe', 249.99, 'https://www.seagate.com/content/dam/seagate/assets/products/hard-drives/barracuda-3-5-hdd/images/barracuda-16TB-left.png/_jcr_content/renditions/1-1-large-640x640.png'),
('Samsung 980 Pro', 'Samsung', 'SSD', 1000, 'NVMe', 179.99, 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_71126778/fee_786_587_png');

INSERT INTO `motherboard` (`Naam`, `Merk`, `Socket`, `Chipset`, `Form Factor`, `Ram Type`, `Max Ram`, `Prijs`, `image_url`) VALUES
('ASUS ROG Strix Z590-E', 'ASUS', 'LGA1200', 'Z590', 'ATX', 'DDR4', 128, 379.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011311917/asus-rog-strix-z890-e-gaming-wifi-lga-1851-atx-moederbord.png'),
('MSI MAG B550 TOMAHAWK', 'MSI', 'AM4', 'B550', 'ATX', 'DDR4', 128, 179.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011184593/msi-pro-b760m-p-ddr4-moederbord-intel-b760-lga-1700-micro-atx-lga-1700-micro-atx-moederbord.png'),
('Gigabyte X570 AORUS Elite', 'Gigabyte', 'AM4', 'X570', 'ATX', 'DDR4', 128, 199.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011179171/asus-tuf-gaming-x670e-plus-socket-am5-atx-moederbord.png'),
('ASRock B460M Pro4', 'ASRock', 'LGA1200', 'B460', 'Micro-ATX', 'DDR4', 128, 94.99, 'https://static.wixstatic.com/media/08af3b_4b7a478f07614b248ef92ad69f3c4a4b~mv2.png/v1/fill/w_753,h_808,al_c,q_90/08af3b_4b7a478f07614b248ef92ad69f3c4a4b~mv2.png'),
('MSI MPG Z490 Gaming Edge', 'MSI', 'LGA1200', 'Z490', 'ATX', 'DDR4', 128, 219.99, 'https://www.lalashops.nl/media/catalog/product/cache/c76cf7c80f1c08de0855564b43e6f3f1/b/r/brjk5cq4sj1wauqr_setting_xxx_0_90_end_1000.png'),
('ASUS TUF Gaming B550-PLUS', 'ASUS', 'AM4', 'B550', 'ATX', 'DDR4', 128, 159.99, 'https://cdn01.nbb.com/media/6a/82/74/1736176927/24731b51c0af14b28cbc93e8d5b0802d.png'),
('Gigabyte B460M DS3H', 'Gigabyte', 'LGA1200', 'B460', 'Micro-ATX', 'DDR4', 64, 89.99, 'https://hwimg.nl/largesysimg/ASUS_ROG_STRIX_Z370-H_GAMING_001.png'),
('ASRock X570 Phantom Gaming', 'ASRock', 'AM4', 'X570', 'ATX', 'DDR4', 128, 249.99, 'https://cf-images.dustin.eu/cdn-cgi/image/fit=contain,format=auto,quality=75,width=828,fit=contain/image/d2000010011198512/asus-rog-maximus-z790-apex-encore-lga-1700-atx-moederbord.png'),
('MSI B450 Tomahawk Max', 'MSI', 'AM4', 'B450', 'ATX', 'DDR4', 64, 114.99, 'https://206.wpcdnnode.com/dealstunter.nl/wp-content/uploads/2023/06/Asrock-A520M-HDVP-DASH-AMD-AM4-Moederbord-3.png'),
('ASUS Prime Z390-A', 'ASUS', 'LGA1151', 'Z390', 'ATX', 'DDR4', 64, 189.99, 'https://tweakers.net/i/csGhNZcpDo0bVY-kUFy-J05iuP8=/x800/filters:strip_exif()/i/2006903296.png?f=imagegallery');

INSERT INTO `psu` (`Naam`, `Merk`, `Wattage`, `Efficieny Rating`, `modular`, `Prijs`, `image_url`) VALUES
('Corsair RM750x', 'Corsair', 750, '80+ Gold', TRUE, 129.99, 'https://www.megekko.nl/uploads/templatebuilder/process/ddb47f1a-a1d1-4377-a44c-788aa98c0c93/images/1061990_Corsair%20RM750%20PSU%20voeding_V1.png'),
('EVGA SuperNOVA 650 G5', 'EVGA', 650, '80+ Gold', TRUE, 119.99, 'https://cf-images.dustin.eu/cdn-cgi/image/format=auto,quality=75,width=500,fit=contain/image/d2000010011183168/d2000010011183168.png'),
('Seasonic Focus GX-550', 'Seasonic', 550, '80+ Gold', TRUE, 99.99, 'https://images.evga.com/articles/01600/FTW_1000.png'),
('Cooler Master MWE Gold 650', 'Cooler Master', 650, '80+ Gold', FALSE, 89.99, 'https://cougargaming.com/global/img/products/psus/gx/product-image.png'),
('Corsair CX550M', 'Corsair', 550, '80+ Bronze', TRUE, 69.99, 'https://www.scan.co.uk/images/infopages/corsair_psu/cx-old/500w-psu.png'),
('Thermaltake Toughpower GF1 750W', 'Thermaltake', 750, '80+ Gold', TRUE, 109.99, 'https://darkflashtech.com/cdn/shop/files/1_e512690a-ab16-4073-b30a-2976a3b1395a.png?v=1736925542'),
('EVGA 500 W1', 'EVGA', 500, '80+ White', FALSE, 49.99, 'https://redragonshop.com/cdn/shop/files/RedragonMASTERRGPSPRO1200WGoldATX3.1PSU_Black_White_1.png?v=1741676725&width=1946'),
('Seasonic S12III 650', 'Seasonic', 650, '80+ Bronze', FALSE, 79.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjH4n_JVjjuQWN2q5vosyWbawXIN5s0OLQ6g&s'),
('Corsair HX1000i', 'Corsair', 1000, '80+ Platinum', TRUE, 229.99, 'https://gamemaxpc.com/runtime/image/w500px_h500px_1742268706509450.png'),
('be quiet! Straight Power 11 750W', 'be quiet!', 750, '80+ Gold', TRUE, 139.99, 'https://images.evga.com/articles/01600/FTW_1000.png');

INSERT INTO `coolers` (`Naam`, `Merk`, `Type`, `Fan RPM`, `Supported Sockets`, `Prijs`, `image_url`) VALUES
('Noctua NH-D15', 'Noctua', 'Air', 1500, 'LGA1200,LGA1151,AM4', 89.99, 'https://endorfy.com/wp-content/products/EY3A012_Fera-5-Black-ARGB/Media%20(pictures)/_PRODUCT-HERO/EY3A012-endorfy-fera-5-black-argb-product-hero.d20241128-u113945.webp'),
('Corsair H100i RGB Platinum', 'Corsair', 'Liquid', 2400, 'LGA1200,AM4', 159.99, 'https://www.akasa.co.uk/img/product/common/gallery/00/AK-CC4022KT01_g00.png'),
('Cooler Master Hyper 212', 'Cooler Master', 'Air', 2000, 'LGA1151,AM4', 39.99, 'https://www.adamant.com/content/images/thumbs/0000711_120mm-quiet-edition-water-liquid-cpu-cooler.png'),
('NZXT Kraken X63', 'NZXT', 'Liquid', 2200, 'LGA1200,AM4', 149.99, 'https://techpp.com/wp-content/uploads/2011/12/alpenhofn-cooler.png'),
('be quiet! Dark Rock Pro 4', 'be quiet!', 'Air', 1500, 'LGA1200,LGA1151,AM4', 89.99, 'https://www.circlect.com/cdn/shop/files/4_f16bfb5a-9e0d-437b-9c01-00b9ee41094b.png?v=1733309806'),
('Deepcool Gammaxx 400', 'Deepcool', 'Air', 1800, 'LGA1151,AM4', 29.99, 'https://pczonemalta.com/wp-content/uploads/2023/09/1-2.png'),
('Arctic Liquid Freezer II 280', 'Arctic', 'Liquid', 2100, 'LGA1200,AM4', 119.99, 'https://storage.googleapis.com/www.taiwantradeshow.com.tw/product/202504/T-96123931.png'),
('Thermaltake Floe DX RGB', 'Thermaltake', 'Liquid', 2000, 'LGA1200,AM4', 139.99, 'https://it.thermaltake.com/pub/media/wysiwyg/key3/img/AMD_sTRX4/Floe_Riing_RGB.png'),
('Scythe Mugen 5', 'Scythe', 'Air', 1500, 'LGA1200,AM4', 49.99, 'https://gamemaxpc.com/runtime/image/w320px_h320px_1733206449452366.png'),
('Cooler Master MasterLiquid ML240L', 'Cooler Master', 'Liquid', 2400, 'LGA1200,AM4', 89.99, 'https://tpi-us.com/cdn/shop/files/IceSLEET_G4_Midnight_G01-1.png?v=1703873253');

INSERT INTO `cases` (`Naam`, `Merk`, `Form Factor`, `Color`, `Has RGB`, `Prijs`, `image_url`) VALUES
('NZXT H510', 'NZXT', 'ATX', 'Black', TRUE, 69.99, 'https://aerocool.io/wp-content/uploads/2024/09/P500C-bk-infographics-2k-1-1024x1024.png'),
('Corsair 4000D Airflow', 'Corsair', 'ATX', 'White', TRUE, 79.99, 'https://res.cloudinary.com/corsair-pwa/image/upload/w_256,h_256,c_pad/products/Cases/CC-9011230-WW/Gallery/5000T_RGB_BLACK_01.png'),
('Fractal Design Meshify C', 'Fractal Design', 'ATX', 'Black', FALSE, 89.99, 'https://cdn.originpc.com/img/pdp/gaming/desktops/neuron/corsair-4000d.png'),
('Cooler Master MasterBox NR600', 'Cooler Master', 'ATX', 'Black', FALSE, 69.99, 'https://www.gamdias.com/img/case/NESO_P1_PRO/NESO_P1_PRO_Slogan.png'),
('Lian Li PC-O11 Dynamic', 'Lian Li', 'ATX', 'Black', TRUE, 139.99, 'https://assets.umart.com.au/newsite/images/202401/source_img/Cases-GameMax-HYPE-Mid-Tower-ATX-PC-case-3x-ARGB-fan-black-4.webp'),
('Phanteks Eclipse P400A', 'Phanteks', 'ATX', 'White', TRUE, 79.99, 'https://static.cybertron.com/clx/components/cas-gam-mare1a/gallery/1.png'),
('be quiet! Pure Base 500DX', 'be quiet!', 'ATX', 'Black', TRUE, 99.99, 'https://gamemaxpc.com/runtime/image/w500px_h500px_1743405460240154.png'),
('Corsair Carbide Series 275R', 'Corsair', 'ATX', 'Black', TRUE, 59.99, 'https://imageio.forbes.com/specials-images/imageserve/628e4228f5ecbe5a6a25d5ee/NZXT-H7-Elite-PC-case/960x0.png?height=711&width=711&fit=bounds '),
('NZXT H710', 'NZXT', 'ATX', 'Black', TRUE, 169.99, 'https://zalmanusa.com/cdn/shop/files/Mesh_Front_4_x_RGB_Fans_-_Black_-_Zalman_Ultimate_PC_Cases_Cooling_Solutions-2661847.png?v=1724452881'),
('Thermaltake Versa H18', 'Thermaltake', 'Micro-ATX', 'Black', FALSE, 49.99, 'https://static1.howtogeekimages.com/wordpress/wp-content/uploads/2024/06/cougar-conquer.png');

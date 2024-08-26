# (EN) PHP-MySQL-Login-Register-Logout

This project offers a simple and secure user registration, login, and logout system using PHP and MySQL. The system utilizes PHP's session structure for managing user sessions. All operations are handled within a single file, `index.php`. 💻🔐

## Features 🌟

- **User Registration:** Allows users to register to the system.
- **Login:** Enables registered users to securely log in to the system.
- **Logout:** Allows logged-in users to securely log out of the system.
- **Session Management:** Utilizes PHP session structure for managing user sessions.

## Screenshots 🖼️

### When Not Logged In
The following options are presented to the user when not logged in:

![Not Logged In](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/e3cb088f-5b31-47af-afc1-22d9207f30be)

### User Registration Page
The page where users can register to the system:

![User Registration](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/ec94df04-21f0-45e5-b275-11c9a4240fd8)

### User Login Page
The page where registered users can log in:

![User Login](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/881e81dc-c676-4c27-851d-595cad0e2e12)

### When Logged In
The options presented to the user when logged in:

![Logged In](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/fb6e7657-ec65-46fd-bb9c-0eefb3b92a0b)

## Installation 🚀

Follow the steps below to set up and run this project in your environment:

### Requirements 📋

- **PHP 7.x** or higher 🐘
- **MySQL 5.x** or higher 🗄️
- **Apache** or **Nginx** web server 🌐

### Step 1: Clone the Repository

First, clone the project to your local environment:

```bash
git clone https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout.git
cd PHP-MySQL-Login-Register-Logout
```

### Step 2: Set Up the Database

Create the necessary tables in your MySQL database by importing the `enesbabekoglu_lab.sql` file:

```bash
mysql -u username -p database_name < enesbabekoglu_lab.sql
```

### Step 3: Update Database Connection Information

Edit the following line in the `index.php` file to match your own database connection details:

```php
$mysqli = mysqli_connect("localhost", "enesbabekoglu_lab", "_M15vx7e3", "enesbabekoglu_lab");
```

In this line:

- `"localhost"`: Your database server's address,
- `"enesbabekoglu_lab"`: Your database username,
- `"_M15vx7e3"`: Your database password,
- `"enesbabekoglu_lab"`: Your database name

should be updated with your own information.

### Step 4: Run the Project on Your Web Server

Upload the project to your web server and run it in your browser:

```bash
http://localhost/PHP-MySQL-Login-Register-Logout/index.php
```

You can now perform user registration, login, and logout operations on your system. 🎉

## License 📄

This project is licensed under the MIT License. For more information, please refer to the `LICENSE` file.

## Contributing 🤝

If you'd like to contribute to this project, please submit a **pull request** or open an **issue**. Your feedback and contributions are welcome!

# (TR) PHP-MySQL-Login-Register-Logout

Bu proje, PHP ve MySQL kullanılarak basit ve güvenli bir kullanıcı kayıt, giriş ve çıkış sistemi sunar. Sistem, kullanıcı oturumları için PHP'nin session yapısını kullanır. Tüm işlemler tek bir dosya olan `index.php` içinde gerçekleştirilir. 💻🔐

## Özellikler 🌟

- **Kullanıcı Kaydı:** Kullanıcıların sisteme kayıt olmasını sağlar.
- **Giriş Yapma:** Kayıtlı kullanıcıların sisteme güvenli bir şekilde giriş yapmasını sağlar.
- **Çıkış Yapma:** Giriş yapan kullanıcıların oturumlarını güvenli bir şekilde kapatmasını sağlar.
- **Session Yönetimi:** PHP session yapısı kullanılarak oturum yönetimi sağlanır.

## Ekran Görüntüleri 🖼️

### Üye Girişi Yapılmadığında
Üye girişi yapılmadığında aşağıdaki seçenekler kullanıcıya sunulur:

![Üye Girişi Yok](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/e3cb088f-5b31-47af-afc1-22d9207f30be)

### Üye Kayıt Sayfası
Kullanıcıların sisteme kayıt olabileceği sayfa:

![Üye Kayıt](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/ec94df04-21f0-45e5-b275-11c9a4240fd8)

### Üye Giriş Sayfası
Kayıtlı kullanıcıların sisteme giriş yapabileceği sayfa:

![Üye Giriş](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/881e81dc-c676-4c27-851d-595cad0e2e12)

### Üye Girişi Yapıldığında
Üye girişi yapıldığında kullanıcıya sunulan seçenekler:

![Üye Girişi Var](https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout/assets/92182480/fb6e7657-ec65-46fd-bb9c-0eefb3b92a0b)

## Kurulum 🚀

Bu projeyi kendi ortamınıza kurmak ve çalıştırmak için aşağıdaki adımları izleyin:

### Gereksinimler 📋

- **PHP 7.x** veya üstü 🐘
- **MySQL 5.x** veya üstü 🗄️
- **Apache** veya **Nginx** gibi bir web sunucusu 🌐

### Adım 1: Projeyi Klonlayın

Öncelikle, projeyi yerel ortamınıza klonlayın:

```bash
git clone https://github.com/enesbabekoglu/PHP-MySQL-Login-Register-Logout.git
cd PHP-MySQL-Login-Register-Logout
```

### Adım 2: Veritabanını Ayarlayın

MySQL veritabanınızda gerekli tabloları oluşturun. `enesbabekoglu_lab.sql` dosyasını MySQL veritabanınıza aktararak tabloları oluşturabilirsiniz:

```bash
mysql -u kullanıcı_adı -p veritabanı_adı < enesbabekoglu_lab.sql
```

### Adım 3: Veritabanı Bağlantı Bilgilerini Düzenleyin

`index.php` dosyasında yer alan aşağıdaki satırı, kendi veritabanı bağlantı bilgilerinize göre düzenleyin:

```php
$mysqli = mysqli_connect("localhost", "enesbabekoglu_lab", "_M15vx7e3", "enesbabekoglu_lab");
```

Bu satırda:

- `"localhost"`: Veritabanı sunucunuzun adresi,
- `"enesbabekoglu_lab"`: Veritabanı kullanıcı adınız,
- `"_M15vx7e3"`: Veritabanı şifreniz,
- `"enesbabekoglu_lab"`: Veritabanı adınız

olacak şekilde kendi bilgilerinizle güncelleme yapmalısınız.

### Adım 4: Web Sunucusunda Projeyi Çalıştırın

Projeyi web sunucunuza yükleyin ve tarayıcınızda çalıştırın:

```bash
http://localhost/PHP-MySQL-Login-Register-Logout/index.php
```

Artık sisteminizde kullanıcı kayıt, giriş ve çıkış işlemlerini yapabilirsiniz. 🎉

## Lisans 📄

Bu proje MIT Lisansı ile lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakabilirsiniz.

## Katkıda Bulunma 🤝

Bu projeye katkıda bulunmak isterseniz, lütfen bir **pull request** gönderin veya bir **issue** açın. Geri bildirimleriniz ve katkılarınız memnuniyetle karşılanacaktır!
